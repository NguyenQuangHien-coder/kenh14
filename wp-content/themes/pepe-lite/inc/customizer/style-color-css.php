<?php
/**
* style-color-css.php
* @author    Denis Franchi
* @package   pepe-lite
*
*/


function pepe_lite_customizer_general_color_css() { 
    //Custom Color 
    get_template_part( 'inc/customizer/skin/skin-color',esc_attr(get_theme_mod('pepe_color_skin','one')));
     
}
add_action( 'wp_head', 'pepe_lite_customizer_general_color_css' );