<?php
/**
* sector-blocks-home-four.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

/**
 * Controlls for Sector Card Large
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


/* Sector Pepe Block Four
========================================================================== */

// Enable/Disable Block
$wp_customize->add_setting( 'pepe_show_block_four',
   array(
      'default'           => 0,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_block_four',
   array(
      'label'   => __( 'Enable or disable this block', 'pepe-lite' ),
      'section' => 'pepe_blocks_home_four',
      'priority'=> 5,
)) );

// Image Upload
$wp_customize->add_setting( 'image_pepe_four',
	array(
		'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_pepe_four',
	array(
		'label' => __( 'Image','pepe-lite' ),
		'description' => esc_html__( 'Upload Image','pepe-lite'),
      'section' => 'pepe_blocks_home_four',
      'priority'    => 10,
)) );

$wp_customize->selective_refresh->add_partial( 'image_pepe_four',
   array(
      'selector' => '.image-full-section',
));

// Height image
$wp_customize->add_setting( 'image_pepe_four_height',
   array(
      'default'           => 400,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'image_pepe_four_height',
   array(
      'label'       => esc_html__( 'Height Image (px Unit)','pepe-lite' ),
      'section'     => 'pepe_blocks_home_four',
      'priority'    => 20,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 800, 
                      'step' => 10, 
),)) );

// Object Fit Image 
$wp_customize->add_setting( 'image_pepe_four_fit',
   array(
      'default'           => 'cover',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_radio_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Text_Radio_Button_Custom_Control( $wp_customize, 'image_pepe_four_fit',
   array(
      'label'       => __( 'Object Fit Image','pepe-lite' ),
      'section'     => 'pepe_blocks_home_four',
      'priority'    => 30,
      'choices'     => array(
                 'unset'     => __( 'Unset','pepe-lite' ), 
                 'contain'   => __( 'Contain','pepe-lite' ),
                 'cover'     => __( 'Cover','pepe-lite' ),
                 'fill'      => __( 'Fill','pepe-lite' ),
                 'none'      => __( 'None','pepe-lite' ),
                 'scale-down'=> __( 'Scale Down','pepe-lite' )
))) );

// Margin Top Pepe Four
$wp_customize->add_setting( 'pepe_margin_top_pepe_four',
   array(
      'default'           => -2,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_margin_top_pepe_four',
   array(
      'label'       => esc_html__( 'Margin Top (em Unit)','pepe-lite' ),
      'section'     => 'pepe_blocks_home_four',
      'priority'    => 40,
      'input_attrs' => array(
                      'min'  => -5,
                      'max'  => 15, 
                      'step' => 1, 
),)) );

// Margin Bottom Pepe Four
$wp_customize->add_setting( 'pepe_margin_bottom_pepe_four',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_margin_bottom_pepe_four',
   array(
      'label'       => esc_html__( 'Margin Bottom (em Unit)','pepe-lite' ),
      'section'     => 'pepe_blocks_home_four',
      'priority'    => 50,
      'input_attrs' => array(
                      'min'  => -5,
                      'max'  => 15, 
                      'step' => 1, 
),)) );

// Widget or Text
$wp_customize->add_setting( 'pepe_widget_or_text_pepe_four',
   array(
      'default'           => 'textfour',
      'sanitize_callback' => 'pepe_lite_radio_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Text_Radio_Button_Custom_Control( $wp_customize, 'pepe_widget_or_text_pepe_four',
   array(
      'label'       => __( 'Choose whether to show a Widget or text in the Banner','pepe-lite' ),
      'section'     => 'pepe_blocks_home_four',
      'priority'    => 60,
      'choices'     => array(
                 'widgetfour' => __( 'Widget','pepe-lite' ), 
                 'textfour'   => __( 'Text','pepe-lite' ),
))) );

// Notice Widget 
$wp_customize->add_setting( 'pepe_notice_widget_four',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_notice_widget_four',
   array(
      'label'    => __( 'You must insert the Mailchimp for WordPress Widget, activating the relevant Plugin. Other widgets are not supported!','pepe-lite'),
      'section'  => 'pepe_blocks_home_four',
      'priority' => 70,
)) );

// Background Color Banner
$wp_customize->add_setting( 'pepe_background_color_pepe_four',
   array(
      'default'          => '#fff',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_pepe_four',
   array(
      'label'       => __( 'Background Color Banner','pepe-lite' ),
      'section'     => 'pepe_blocks_home_four',
      'priority'    => 80,
      'show_opacity'=> true, 
)) );

// Color Banner
$wp_customize->add_setting( 'pepe_color_pepe_four',
   array(
      'default'          => '#3a3a3a',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_pepe_four',
   array(
      'label'       => __( 'Color Banner','pepe-lite' ),
      'section'     => 'pepe_blocks_home_four',
      'priority'    => 90,
      'show_opacity'=> true, 
)) );

// Notice Text
$wp_customize->add_setting( 'pepe_notice_text_four',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_notice_text_four',
   array(
      'label'    => __( 'These controls only work if you have chosen to show the Text in the Banner!','pepe-lite'),
      'section'  => 'pepe_blocks_home_four',
      'priority' => 95,
)) );

// Text Banner
$wp_customize->add_setting( 'pepe_text_banner_four',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('Pepe Magazine','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_text_banner_four', array(
	'type'    => 'text',
   'section' => 'pepe_blocks_home_four',
	'priority'=> 100,
   'label'   => __('Text Banner','pepe-lite'),
) );


// Textarea Banner
$wp_customize->add_setting( 'pepe_textarea_banner_four',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('Welcome to Pepe!','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_textarea_banner_four', array(
	'type'    => 'textarea',
   'section' => 'pepe_blocks_home_four',
	'priority'=> 110,
   'label'   => __('Textarea Banner','pepe-lite'),
) );

// Text button Banner
$wp_customize->add_setting( 'pepe_text_button_widgetfour',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('More','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_text_button_widgetfour', array(
	'type'            => 'text',
   'section'         => 'pepe_blocks_home_four',
	'priority'        => 130,
   'label'           => __('Text Button Banner','pepe-lite'),
) );

// Url 
$wp_customize->add_setting( 'pepe_link_widgetfour',
array(
	'default'           => '',
	'transport'         => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_widgetfour',
array(
	'label'   => __( 'Link Button','pepe-lite' ),
	'section' => 'pepe_blocks_home_four',
	'type'    => 'url',
	'priority'=> 140,
	'input_attrs' => array(
		'class'       => 'my-custom-class',
		'style'       => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

// Background Color Button Banner
$wp_customize->add_setting( 'pepe_background_color_pepe_four_button',
   array(
      'default'          => '#F5067E',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_pepe_four_button',
   array(
      'label'       => __( 'Background Color Button Banner','pepe-lite' ),
      'section'     => 'pepe_blocks_home_four',
      'priority'    => 160,
      'show_opacity'=> true, 
)) );

// Color Button Banner
$wp_customize->add_setting( 'pepe_color_pepe_four_button',
   array(
      'default'          => '#3a3a3a',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_pepe_four_button',
   array(
      'label'       => __( 'Color Button Banner','pepe-lite' ),
      'section'     => 'pepe_blocks_home_four',
      'priority'    => 170,
      'show_opacity'=> true, 
)) );