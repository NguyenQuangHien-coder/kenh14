<?php
/**
* section-pepe-zero.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>
<section class="pepe-row-sect-pepe-zero">
<div class="row pepe-titlesect-zero">
    <div class="col-md-12 col-pep-zer-padding-right">
      <h2 class="titlesect-zero"><span><?php echo esc_html(get_theme_mod('pepe_title_sect_zero',__('LATEST ARTICLES','pepe-lite')))?></span></h2>
    </div>
</div>
<?php
while ( have_posts() ) : 
the_post();
$pepe_lite_image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'pepe-img-zero');?>
<div class="row mt-4 row-zero align-items-end">
    <div class="col-md-7 pr-0 pl-0 image-section-zero">
            <?php edit_post_link('edit'); ?>
            <a href="<?php the_permalink();?>" class="card-sect-one">
            <div class="fadeimg img-sect-zer" style="background-image: url('<?php if ( $pepe_lite_image_attributes[0] ) :
                echo esc_url($pepe_lite_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/pepe-default.jpg'; endif; ?>')">
            </div>
          </a>  
    </div>
    <div class="col-md-5 text-section-zero">
        <?php if (true == get_theme_mod('pepe_show_cat_pepe_sect_zero',true)):?>
        <p class="cat-sect-zero">
            <?php $pepe_lite_categories = get_the_category(); 
              if ( ! empty( $pepe_lite_categories ) ) {
                    echo '<a href="' . esc_url( get_category_link( $pepe_lite_categories[0]->term_id ) ) . '">' . esc_html( $pepe_lite_categories[0]->name ) . '</a>';
              }?>
        </p>
        <?php endif;?>
        <?php if (true == get_theme_mod('pepe_show_comments_pepe_sect_zero',true)):?>
          <a href="<?php comments_link(); ?>" class="pepe-sect-zero-comments"><?php echo esc_html(get_comments_number());?></a>
        <?php endif;?>
        <a href="<?php the_permalink();?>">
          <h2 class="title-row-zero"><?php the_title();?></h2>
        </a>
        <?php if (true == get_theme_mod('pepe_show_icons_pepe_sect_zero',true)):?>
        <span>
            <i class="far fa-clock mr-2"></i> 
            <?php echo esc_html(get_the_date ());?>
            <i class="fas fa-user ml-4 mr-2"></i>
            <?php the_author();
            endif;?>
        </span> 
       <?php the_excerpt(); ?>   
    </div>
</div>
<?php endwhile;
wp_reset_postdata(); ?>
</section>

                    