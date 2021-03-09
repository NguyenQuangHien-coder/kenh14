<?php
/**
* section-pepe-two.php
*
* @author    Franchi Design
* @package   pepe lite
*/
?>

<section class="pepe-row-sect-pepe-two sect-row-two-r">
     <div class="row pepe-titlesect-two">
     <?php if (false == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>
       <div class="col-md-1 pepe-partial-sect-two"></div>
     <?php endif;?>
     <div class="<?php if (false == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>col-md-10<?php endif;?> <?php if (true == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>col-md-12<?php endif;?>">
         <h2 class="titlesect-two"><span><?php echo esc_html(get_theme_mod('pepe_title_sect_two',__('MOST READ','pepe-lite')))?></span></h2>
       </div>
       <?php if (false == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>
       <div class="col-md-1"></div>
       <?php endif;?>
     </div>
     <?php
          $pepe_sect_two_cat = esc_attr( get_theme_mod('pepe_category_sect_two'));
          $pepe_num_post_sect_two = esc_attr(get_theme_mod('pepe_num_post_sect_two'));
          $pepe_query_sect_two = new WP_Query( 
             array( 
              'cat'       => $pepe_sect_two_cat,
              'showposts' => $pepe_num_post_sect_two 
             ));
          while ( $pepe_query_sect_two->have_posts() ) : $pepe_query_sect_two->the_post();
          add_filter( 'the_title', 'pepe_lite_max_title_length_5');
          $pepe_image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'pepe-section-two-img');?>
          <div class="row pepe-content-sect-two align-items-end">
          <?php if (false == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>
                <div class="col-md-1"></div>
          <?php endif;?>
          <div class="<?php if (false == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>col-md-5<?php endif;?> <?php if (true == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>col-md-6<?php endif;?> pepe-img-sect-two pepe-sect-2-col-responsive-multitab">
                     <?php edit_post_link('edit'); ?>
                     <a href="<?php the_permalink();?>" class="card-sect-one">
          <img class="<?php if (true == get_theme_mod('pepe_enable_effect_scrol_image_2',true)):?>fadeimg<?php endif;?>" src="<?php if ( $pepe_image_attributes[0] ) :
                          echo esc_url($pepe_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/pepe-default.jpg'; endif; ?>">
                     </a> 
                </div>
                    <div class="<?php if (false == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>col-md-5<?php endif;?> <?php if (true == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>col-md-6<?php endif;?> pepe-title-sect-two">
                    <?php if (true == get_theme_mod('pepe_show_comments_pepe_sect_two',true)):?>
                    <a href="<?php comments_link(); ?>" class="pepe-sect-two-comments"><?php echo esc_html(get_comments_number());?></a>
                    <?php endif;?>
                    <a href="<?php the_permalink();?>">
                      <h2><?php the_title(); ?></h2>
                    </a>
                    <?php if (true == get_theme_mod('pepe_show_author_pepe_sect_two',true)):?>
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
                    <?php endif;?>
                    <?php if (true == get_theme_mod('pepe_show_date_pepe_sect_two',true)):?>
                    <span><span class="datet-none"><?php echo esc_html('-&nbsp;','pepe-lite')?></span><?php echo esc_html(get_the_date ());?></span>
                    <?php endif;?>
                    <?php the_excerpt(); ?>   
                </div>
                <?php if (false == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>
                 <div class="col-md-1"></div>
                <?php endif;?>
             </div>  
             <?php endwhile;
              wp_reset_postdata(); remove_filter( 'the_title', 'pepe_lite_max_title_length_5' );?>
</section>
