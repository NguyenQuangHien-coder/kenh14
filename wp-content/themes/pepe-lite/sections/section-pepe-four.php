<?php
/**
* section-pepe-four.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<div class="image-full-section">
  <?php $pepe_lite_image_fullsection=esc_url( get_theme_mod( 'image_pepe_four' ) );?>
   <img src="<?php if ( $pepe_lite_image_fullsection ) :
                    echo esc_url($pepe_lite_image_fullsection); else: echo esc_url(get_template_directory_uri()).'/images/pepe-default.jpg'; endif; ?>">
  <div class="centered">
     <?php get_template_part('sections/section',esc_attr(get_theme_mod('pepe_widget_or_text_pepe_four','textfour')));?>  
  </div>
</div>