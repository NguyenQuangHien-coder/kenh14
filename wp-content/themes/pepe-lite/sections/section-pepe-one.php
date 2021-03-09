<?php
/**
* section-pepe-one.php
*
* @author    Franchi Design
* @package   pepe lite
*/
?>


<div class="row pepe-row-sect-pepe-one"> 
<?php if (false == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>
  <div class="col-md-1"></div>
<?php endif;?>
<div class="<?php if (false == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>col-md-10<?php endif;?> <?php if (true == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>col-md-12<?php endif;?> pepe-section-one">
  <?php $pepe_name_post_pepe_one = esc_attr(get_theme_mod('pepe_post_sect_one'));
      $pepe_args = array(
        'post_type'      => 'post',
        'order'          => 'ASC',
        'post__in'       => array( $pepe_name_post_pepe_one),
        'posts_per_page' => 1, );
        $pepe_query_sect_one = new WP_Query($pepe_args);
        if( $pepe_query_sect_one->have_posts() ) :
          while ( $pepe_query_sect_one->have_posts() ) : $pepe_query_sect_one->the_post();
          $pepe_image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'pepe-section-one-img');?>
        <?php if (true == get_theme_mod('pepe_show_cat_pepe_sect_one',true)):?>
        <div class="cat-pepe-sect-one">
              <?php the_category();?>
        </div>
        <?php endif;?>
        <?php edit_post_link('edit'); ?>
        <a href="<?php the_permalink();?>" class="card-sect-one">
           <figure class="text-center">
        <img class="<?php if (true == get_theme_mod('pepe_enable_effect_scrol_image_2',true)):?>fadeimg<?php endif;?>" src="<?php if ( $pepe_image_attributes[0] ) :
                   echo esc_url($pepe_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/pepe-default.jpg'; endif; ?>">
           </figure>
           <h2><?php the_title();?></h2>
           <div class="pepe-divide-section-one"></div>
        </a> 
        <div class="pepe-capture-sect-one">
              <?php if (true == get_theme_mod('pepe_show_comments_pepe_sect_one',true)):?>
              <a href="<?php comments_link(); ?>" class="pepe-sect-comments"><?php echo esc_html(get_comments_number());?></a>
              <?php endif;?>
              <span><?php if (true == get_theme_mod('pepe_show_icons_pepe_sect_one',true)):?><i class="fas fa-user"></i><?php endif;
                      the_author();if (false == get_theme_mod('pepe_show_icons_pepe_sect_one',true)): echo esc_html('&nbsp;-&nbsp;','pepe-lite');endif;
                      if (true == get_theme_mod('pepe_show_icons_pepe_sect_one',true)):?><i class="fas fa-calendar-alt"></i><?php endif;?> 
                    <span><?php echo esc_html(get_the_date ());?></span>
              </span> 
              <?php the_excerpt(); ?>
        </div>
        <?php endwhile;
          endif;
         wp_reset_postdata(); ?>
  </div>
  <?php if (false == get_theme_mod('pepe_enable_padding_content_pepe_sect_one',true)):?>
  <div class="col-md-1"></div>
  <?php endif;?>
</div>
