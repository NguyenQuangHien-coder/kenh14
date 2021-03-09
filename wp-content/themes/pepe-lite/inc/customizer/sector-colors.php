<?php
/**
* sector-colors.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

/**
 * Controlls for Sector Card Large
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

/*
========================================================================== */

// Select predefined skins
$wp_customize->add_setting('pepe_color_skin',
   array(
      'default'           => 'one',
      'transport'         => 'refresh',
      'sanitize_callback' => 'pepe_lite_radio_sanitization'
));
 
$wp_customize->add_control(new pepe_lite_Image_Radio_Button_Custom_Control($wp_customize,'pepe_color_skin',
    array(
	  'label'       => __('Select predefined skins to use with this theme','pepe-lite'),
	  'description' => __('You can change the background color for the skins. For dark skins, you need to set the dark background! and you have to set the colors of Widgets, category badges and comments!','pepe-lite'),
	  'section'     => 'colors',
	  'priority'    => 1,
      'choices'     => array(
              'one'   => array(
              'image' => trailingslashit(esc_url(get_template_directory_uri())) . 'inc/customizer/images/colorskin/one.png',
              'name'  => __('Skin 1','pepe-lite')),
	           'two'   => array(
				  'image' => trailingslashit(esc_url(get_template_directory_uri())) . 'inc/customizer/images/colorskin/two.png',
				  'name'  => __('Skin 2','pepe-lite') ),   
				  'three' => array(
				  'image' => trailingslashit(esc_url(get_template_directory_uri())) . 'inc/customizer/images/colorskin/three.png',
				  'name'  => __('Skin 3','pepe-lite') ), 	      
))) );




