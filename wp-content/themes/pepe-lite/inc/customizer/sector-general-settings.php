<?php
/**
* sector-general-settings.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

/**
 * Controlls for Sector Card Large
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


/* Layout Site
========================================================================== */

// Notice
$wp_customize->add_setting( 'pepe_site_layout_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_site_layout_notice',
   array(
      'label'    => __( 'Layout','pepe-lite'),
      'section'  => 'pepe_general_settings',
      'priority' => 10,
)) );

// Layout Site
$wp_customize->add_setting('pepe_layout_site',
   array(
      'default'           => 'container-fluid',
      'transport'         => 'refresh',
      'sanitize_callback' => 'pepe_lite_radio_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Image_Radio_Button_Custom_Control( $wp_customize, 'pepe_layout_site',
   array(
      'label'       => __('Layout Site','pepe-lite'),
      'description' => esc_html__('Choose the Layout for Body Site','pepe-lite'),
      'section'     => 'pepe_general_settings',
      'priority'    => 20,
      'choices'     => array(
              'container'      => array(  
                           'image' => trailingslashit(esc_url(get_template_directory_uri())).'inc/customizer/images/box.png', 
                            'name' => __('Box','pepe-lite')),
              'container-fluid'=> array(
                           'image' => trailingslashit(esc_url( get_template_directory_uri())).'inc/customizer/images/large.png',
                            'name' => __('Large','pepe-lite')),
))) );



