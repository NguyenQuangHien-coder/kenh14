<?php
/**
* section-slider.php
* @author    Denis Franchi
* @package   pepe-lite
*
*/
?>

<div id="carouselExampleIndicators" class="carousel slide <?php if (true == get_theme_mod('pepe_show_fade_slider',false)):?>carousel-fade<?php endif;?>" data-ride="carousel">
  <div class="carousel-inner">
    <?php
	    $pepe_lite_category_slider_boostrap = esc_attr(get_theme_mod('pepe_category_slider_boostrap' ));
			$pepe_lite_slider_boostrap_count = 0;
			$pepe_lite_args = array(
				'cat' => $pepe_lite_category_slider_boostrap ,
				'showposts' => $pepe_lite_slider_boostrap_count );
				$pepe_lite_slider_boostrap_query = new WP_Query($pepe_lite_args);
				if( $pepe_lite_slider_boostrap_query->have_posts() ) :
					while ( $pepe_lite_slider_boostrap_query->have_posts() ) : $pepe_lite_slider_boostrap_query->the_post();
          $pepe_lite_image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'pepe_slider_boostrap');?>
          <div class="carousel-item item <?php if($pepe_lite_slider_boostrap_count == 0){ echo 'active'; } ?>">
            <?php $pepe_lite_slider_boostrap_count ++; ?>
            <a class="opacity-image-slider" href="<?php the_permalink();?>">
              <div class="img-sect-slider" style="background-image: url('<?php if ( $pepe_lite_image_attributes[0] ) :
                echo esc_url($pepe_lite_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/pepe-default.jpg'; endif; ?>')">
              </div>
            </a>
            <div class="carousel-caption pepe-slider-caption d-md-block text-left">
                <?php if (true == get_theme_mod('pepe_show_cat_slider',true)):?>
                <p class="cat-slider">
                  <?php $pepe_lite_categories = get_the_category();
                    if ( ! empty( $pepe_lite_categories ) ) {
                          echo '<a href="' . esc_url( get_category_link( $pepe_lite_categories[0]->term_id ) ) . '">' . esc_html( $pepe_lite_categories[0]->name ) . '</a>';
                    }?>
                </p>
                <?php endif;?>
                <a href="<?php the_permalink();?>">
                  <h2 class="title-slider"><?php the_title();?></h2>
                </a>
                <?php if (true == get_theme_mod('pepe_show_icons_slider',true)):?>
                <span>
                   <i class="far fa-clock mr-2"></i><?php echo esc_html(get_the_date ());?>
                   <i class="fas fa-user ml-4 mr-2"></i> <?php the_author();?>
                </span> 
                <?php endif;?>
            </div>
          </div>
          <?php endwhile;
              endif;
              wp_reset_postdata(); // End card Center ?>
  </div>
  <?php if (true == get_theme_mod('pepe_show_nav_slider',true)):?>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"><?php esc_html_e('Previous','pepe-lite');?></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"><?php esc_html_e('Next','pepe-lite');?></span>
  </a>
  <?php endif;?>
</div>

