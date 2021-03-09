<?php
/**
* footer-one.php
* @author    Franchi Design
* @package   pepe-lite
*/

?>

<!-- Logo -->
<div class="col-md-12 text-center pepe-logo-widget">
     <?php if ( true ==  get_theme_mod( 'pepe_lite_show_logo_footer', true ) ) : ?>
      <a href="<?php echo esc_url(home_url()); ?>">
        <img class="logo-img-footer mt-3" src="<?php if ( get_theme_mod( 'pepe_logo_footer' ) > 0 ) { 
           echo esc_url(wp_get_attachment_url( get_theme_mod( 'pepe_logo_footer' )) ); 
           }  ?>"/>
	  </a>
	  <hr>
	  <?php endif;?>
</div>
<div class="footer-widget-responsive container<?php if (true == get_theme_mod('pepe_footer_widget_large',true)):?>-fluid pepe-fluid-footer-widget-padding<?php endif;?>"> 
  <div class="row pepe-widget-footer">
    <div class="col">
	  <?php dynamic_sidebar( 'sidebar-seven' );?>
    </div>
    <div class="col">
	   <?php dynamic_sidebar( 'sidebar-height' );?>
    </div>
  </div>
</div>