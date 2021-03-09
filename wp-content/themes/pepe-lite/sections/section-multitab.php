<?php
/**
* section-multitab.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<nav>
    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
      <a class="a-display-tab nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
        <?php if (true == get_theme_mod('pepe_show_icons_tab',true)):?><i class="fa fa-clock"></i><?php endif;?>
          <p class="p-title-live-tab-1"><?php echo esc_html(get_theme_mod('pepe_title_slider_multitab_1',__('Latest','pepe-lite')));?></p>
      </a> 
      <a class="a-display-tab nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> 
        <?php if (true == get_theme_mod('pepe_show_icons_tab',true)):?><i class="fa fa-fire"></i><?php endif;?>
          <p class="p-title-live-tab-2"><?php echo esc_html(get_theme_mod('pepe_title_slider_multitab_2',__('Popular','pepe-lite')));?></p>
      </a>
      <a class="a-display-tab nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
        <?php if (true == get_theme_mod('pepe_show_icons_tab',true)):?><i class="fas fa-bolt"></i><?php endif;?>
          <p class="p-title-live-tab-3"><?php echo esc_html(get_theme_mod('pepe_title_slider_multitab_3',__('Trending','pepe-lite')));?></p> 
      </a>
    </div>
</nav>
<!--  Multi-Tab -->
<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
     <!--Tab 1 -->
     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <?php
          $pepe_lite_cat_multitab_1  = esc_attr( get_theme_mod('pepe_cat_multitab_1'));
          $pepe_lite_query_multitab_1 = new WP_Query( 
            array( 
            'cat'       => $pepe_lite_cat_multitab_1, 
            'showposts' => 4
            ));
          while ( $pepe_lite_query_multitab_1->have_posts() ) : $pepe_lite_query_multitab_1->the_post();
          $pepe_lite_image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));?>
          <div class="row mb-3 mt-3 ml-0 mr-0 row-col-multitab">
              <div class="col-md-3 sm-4 col-resp-image-multitab-col pl-0">
                  <!-- Image -->
                  <?php edit_post_link('edit'); ?>
                  <a href="<?php the_permalink();?>">
                    <img class="img-multitab" src="<?php if ( $pepe_lite_image_attributes[0] ) :
                      echo esc_url($pepe_lite_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/pepe-thumbnail-default.png'; endif; ?>">
                  </a> 
              </div>
              <!-- Title -->
             <div class="col-md-9 col-sm-8 pepe-title-sect-multitab col-resp-title-multitab-col">
              <?php if (true == get_theme_mod('pepe_show_cat_tab',true)):?>
                  <p class="cat-multitab">
                    <?php $pepe_lite_categories = get_the_category();
                      if ( ! empty( $pepe_lite_categories ) ) {
                          echo '<a href="' . esc_url( get_category_link( $pepe_lite_categories[0]->term_id ) ) . '">' . esc_html( $pepe_lite_categories[0]->name ) . '</a>';
                      }?>
                </p>
              <?php endif;?>
               <a href="<?php the_permalink();?>">
                  <h2><?php the_title();?></h2> 
               </a>
             </div>
          </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
     </div><!--End  Tab 1 -->
     <!--Tab 2 -->
     <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
     <?php
          $pepe_lite_cat_multitab_2  = esc_attr( get_theme_mod('pepe_cat_multitab_2'));
          $pepe_lite_query_multitab_2 = new WP_Query( 
            array( 
            'cat'       => $pepe_lite_cat_multitab_2,
            'showposts' => 4
            ));
          while ( $pepe_lite_query_multitab_2->have_posts() ) : $pepe_lite_query_multitab_2->the_post();
          $pepe_lite_image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));?>
          <div class="row mb-3 mt-3 ml-0 mr-0 row-col-multitab">
              <div class="col-md-3 sm-4 col-resp-image-multitab-col pl-0">
                  <!-- Image -->
                  <?php edit_post_link('edit'); ?>
                  <a href="<?php the_permalink();?>">
                    <img class="img-multitab" src="<?php if ( $pepe_lite_image_attributes[0] ) :
                      echo esc_url($pepe_lite_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/pepe-thumbnail-default.png'; endif; ?>">
                  </a> 
              </div>
              <!-- Title -->
             <div class="col-md-9 col-sm-8 pepe-title-sect-multitab col-resp-title-multitab-col">
              <?php if (true == get_theme_mod('pepe_show_cat_tab',true)):?>
                  <p class="cat-multitab">
                    <?php $pepe_lite_categories = get_the_category();
                      if ( ! empty( $pepe_lite_categories ) ) {
                          echo '<a href="' . esc_url( get_category_link( $pepe_lite_categories[0]->term_id ) ) . '">' . esc_html( $pepe_lite_categories[0]->name ) . '</a>';
                      }?>
                </p>
              <?php endif;?>
               <a href="<?php the_permalink();?>">
                  <h2><?php the_title();?></h2>
               </a>
             </div>
          </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
     </div><!--End  Tab 2 -->
     <!--Tab 3 -->
     <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
     <?php
          $pepe_lite_cat_multitab_3  = esc_attr( get_theme_mod('pepe_cat_multitab_3'));
          $pepe_lite_query_multitab_3 = new WP_Query( 
            array( 
            'cat'       => $pepe_lite_cat_multitab_3,
            'showposts' => 4
            ));
          while ( $pepe_lite_query_multitab_3->have_posts() ) : $pepe_lite_query_multitab_3->the_post();
          $pepe_lite_image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));?>
          <div class="row mb-3 mt-3 ml-0 mr-0 row-col-multitab">
              <div class="col-md-3 sm-4 col-resp-image-multitab-col pl-0">
                  <!-- Image -->
                  <?php edit_post_link('edit'); ?>
                  <a href="<?php the_permalink();?>">
                    <img class="img-multitab" src="<?php if ( $pepe_lite_image_attributes[0] ) :
                      echo esc_url($pepe_lite_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/pepe-thumbnail-default.png'; endif; ?>">
                  </a> 
              </div>
              <!-- Title -->
             <div class="col-md-9 col-sm-8 pepe-title-sect-multitab col-resp-title-multitab-col">
                <?php if (true == get_theme_mod('pepe_show_cat_tab',true)):?>
                    <p class="cat-multitab">
                      <?php $pepe_lite_categories = get_the_category();
                        if ( ! empty( $pepe_lite_categories ) ) {
                            echo '<a href="' . esc_url( get_category_link( $pepe_lite_categories[0]->term_id ) ) . '">' . esc_html( $pepe_lite_categories[0]->name ) . '</a>';
                        }?>
                  </p>
                <?php endif;?>
               <a href="<?php the_permalink();?>">
                  <h2><?php the_title();?></h2>
               </a>
             </div>
          </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
      </div><!--End  Tab 3 -->
</div><!-- End  Multi-Tab -->
                
        







