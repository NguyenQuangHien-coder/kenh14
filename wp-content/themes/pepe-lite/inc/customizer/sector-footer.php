<?php
/**
* sector-footer.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

/**
 * Controlls for Sector Card Large
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

/* Sector Footer Settings
========================================================================== */

// Enable Layout Large for Footer
$wp_customize->add_setting( 'pepe_lite_footer_large',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_footer_large',
   array(
      'label'   => __( 'Enable Layout Large for Footer', 'pepe-lite' ),
      'section' => 'pepe_footer_settings',
      'priority'=> 10,
)) );


/* Sector Footer Area Widget
========================================================================== */

// Enable Layout Large for Aree Widget Footer
$wp_customize->add_setting( 'pepe_footer_widget_large',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_footer_widget_large',
   array(
      'label'           => __( 'Enable Layout Large for Aree Widget Footer', 'pepe-lite' ),
      'section'         => 'pepe_footer_layout',
      'active_callback' => 'pepe_lite_footer_large',
      'priority'        => 1,
)) );

// Show Logo Footer
$wp_customize->add_setting( 'pepe_lite_show_logo_footer',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_show_logo_footer',
   array(
      'label'   => __( 'Show Logo Area Widget Footer', 'pepe-lite' ),
      'section' => 'pepe_footer_layout',
      'priority'=> 60,
)) );

// Logo Footer
$wp_customize->add_setting( 'pepe_logo_footer',
   array(
      'transport'         => 'refresh',
      'sanitize_callback' => 'absint'
));
 
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'pepe_logo_footer',
   array(
      'label'          => __( 'Select image Logo for Footer ','pepe-lite' ),
      'description'    => esc_html__( 'Upload image','pepe-lite' ),
      'section'        => 'pepe_footer_layout',
      'active_callback'=> 'pepe_lite_show_logo_footer',
      'priority'       => 70,
      'flex_width'     => false, // Optional. Default: false
      'flex_height'    => true, // Optional. Default: false
      'width'          => 700, // Optional. Default: 150
      'height'         => 450, // Optional. Default: 150
      'button_labels'  => array( // Optional.
                  'select'       => __( 'Select Image','pepe-lite' ),
                  'change'       => __( 'Change Image','pepe-lite' ),
                  'remove'       => __( 'Remove','pepe-lite' ),
                  'default'      => __( 'Default','pepe-lite' ),
                  'placeholder'  => __( 'No image selected','pepe-lite' ),
                  'frame_title'  => __( 'Select Image','pepe-lite' ),
                  'frame_button' => __( 'Choose Image','pepe-lite' ),
))) );

// Height logo Widget Area
$wp_customize->add_setting( 'pepe_height_logo_widget_footer',
   array(
      'default'           => 250,
      'transport'         =>'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_logo_widget_footer',
   array(
      'label'          => esc_html__('Height Logo Widget Area (px Unit)','pepe-lite' ),
      'section'        => 'pepe_footer_layout',
      'active_callback'=> 'pepe_lite_show_logo_footer',
      'priority'       => 80,
      'input_attrs'    => array(
                      'min'  => 0,
                      'max'  => 1000, 
                      'step' => 1, 
),)) );

// Background Color Widget Area
$wp_customize->add_setting( 'pepe_background_color_widget_area',
   array(
      'default'          => '#333333',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_widget_area',
   array(
      'label'       => __( 'Background Color Widget Area','pepe-lite' ),
      'section'     => 'pepe_footer_layout',
      'priority'    => 100,
      'show_opacity'=> true, 
)) );

// Color Widget Area
$wp_customize->add_setting( 'pepe_color_widget_area',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_widget_area',
   array(
      'label'       => __('Color Widget Area','pepe-lite' ),
      'section'     => 'pepe_footer_layout',
      'priority'    => 101,
      'show_opacity'=> true, 
)) );


/* Sector Footer Info
========================================================================== */

// Background Color Footer Info
$wp_customize->add_setting( 'pepe_baclground_color_footer_info',
   array(
      'default'          => '#3a3a3a',
      'transport'        =>'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_baclground_color_footer_info',
   array(
      'label'       => __('Background Color','pepe-lite' ),
      'section'     => 'pepe_footer_info',
      'priority'    => 80,
      'show_opacity'=> true, 
)) );

// Background Color Footer Info
$wp_customize->add_setting( 'pepe_color_footer_info',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_footer_info',
   array(
      'label'       => __('Color','pepe-lite' ),
      'section'     => 'pepe_footer_info',
      'priority'    => 90,
      'show_opacity'=> true, 
)) );






