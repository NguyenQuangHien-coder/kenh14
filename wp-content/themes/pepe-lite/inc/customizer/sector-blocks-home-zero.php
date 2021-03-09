<?php
/**
* sector-blocks-home-zero.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

/**
 * Controlls for Sector Card Large
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


/* Sector Pepe Block Zero
========================================================================== */

// Layout
$wp_customize->add_setting( 'pepe_layout_block_zero_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_layout_block_zero_notice',
   array(
      'label'    => __( 'Layout','pepe-lite'),
      'section'  => 'pepe_blocks_home_zero',
      'priority' => 1,
)) );

// Layout Block five
$wp_customize->add_setting('pepe_layout_block_zero',
   array(
      'default'           => 'one',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_radio_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Image_Radio_Button_Custom_Control( 
   $wp_customize, 'pepe_layout_block_zero',
   array(
      'label'       => __('Block One Layout','pepe-lite'),
      'description' => esc_html__('Choose the Layout for the Block One','pepe-lite'),
      'section'     => 'pepe_blocks_home_zero',
      'priority'    => 2,
      'choices'     => array(
              'one'  => array(  
                           'image' => trailingslashit(esc_url(get_template_directory_uri())).'inc/customizer/images/cat-1.png', 
                            'name' => __('Layout 1','pepe-lite')),
              'two'  => array(
                           'image' => trailingslashit( esc_url(get_template_directory_uri())).'inc/customizer/images/cat-4.png',
                           'name' => __('Layout 2','pepe-lite')),
              'three'  => array(
                           'image' => trailingslashit( esc_url(get_template_directory_uri())).'inc/customizer/images/cat-2.png',
                           'name' => __('Layout 3','pepe-lite')),
))) );

$wp_customize->selective_refresh->add_partial( 'pepe_layout_block_zero',
   array(
      'selector' => '.pepe-block-zero',
));

// Block Notice settings
$wp_customize->add_setting( 'pepe_block_0_notice_settings',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_block_0_notice_settings',
   array(
      'label'    => __( 'General Settings','pepe-lite'),
      'description'=> __('This block has 1 Sidebar Widget Area!','pepe-lite'),
      'section'  => 'pepe_blocks_home_zero',
      'priority' => 4,
)) );

// Margin Top Pepe One
$wp_customize->add_setting( 'pepe_margin_top_block_pepe_zero',
   array(
      'default'           => 2,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_margin_top_block_pepe_zero',
   array(
      'label'       => esc_html__( 'Margin Top (em Unit)','pepe-lite' ),
      'section'     => 'pepe_blocks_home_zero',
      'priority'    => 5,
      'input_attrs' => array(
                      'min'  => -5,
                      'max'  => 15, 
                      'step' => 1, 
),)) );

// Margin Bottom Pepe One
$wp_customize->add_setting( 'pepe_margin_bottom_block_pepe_zero',
   array(
      'default'           => 4,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_margin_bottom_block_pepe_zero',
   array(
      'label'       => esc_html__( 'Margin Bottom (em Unit)','pepe-lite' ),
      'section'     => 'pepe_blocks_home_zero',
      'priority'    => 6,
      'input_attrs' => array(
                      'min'  => -5,
                      'max'  => 15, 
                      'step' => 1, 
),)) );

// Enable or disable Sticky Sidebar
$wp_customize->add_setting( 'pepe_show_sid_stiky_sect_zero',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_sid_stiky_sect_zero',
   array(
      'label'   => __( 'Enable or disable Sticky Sidebar', 'pepe-lite' ),
      'section' => 'pepe_blocks_home_zero',
      'priority'=> 7,
)) );

// Enable or disable  Sidebar  in Mobile Devices
$wp_customize->add_setting( 'pepe_show_sid_mobile_sect_zero',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_sid_mobile_sect_zero',
   array(
      'label'   => __( 'Enable or disable Sidebar in Mobile Devices', 'pepe-lite' ),
      'section' => 'pepe_blocks_home_zero',
      'priority'=> 8,
)) );

// Title Sect Zero
$wp_customize->add_setting( 'pepe_title_sect_zero',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('LATEST ARTICLE','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_title_sect_zero', array(
	'type'    => 'text',
   'section' => 'pepe_blocks_home_zero',
	'priority'=> 9,
   'label'   => __('Block One Title','pepe-lite'),
) );

// Style Title
$wp_customize->add_setting('pepe_style_sect_zero',
   array(
      'default'           => 'one',
      'transport'         => 'refresh',
      'sanitize_callback' => 'pepe_lite_radio_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Image_Radio_Button_Custom_Control( $wp_customize, 'pepe_style_sect_zero',
   array(
      'label'       => __('Title Style','pepe-lite'),
      'description' => esc_html__('Choose the Style for Title','pepe-lite'),
      'section'     => 'pepe_blocks_home_zero',
      'priority'    => 10,
      'choices'     => array(
                    'one' => array(  
                           'image' => trailingslashit(esc_url(get_template_directory_uri())).'inc/customizer/images/sect-five-one.png', 
                            'name' => __('One','pepe-lite')),
                    'two' => array(
                           'image' => trailingslashit(esc_url( get_template_directory_uri())).'inc/customizer/images/sect-five-two.png',
                            'name' => __('Two','pepe-lite')),
))) );

// Background Color Title
$wp_customize->add_setting( 'pepe_background_color_pepe_title_sect_zero',
   array(
      'default'          => '#F5067E',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_pepe_title_sect_zero',
   array(
      'label'       => __('Background Color Title','pepe-lite' ),
      'section'     => 'pepe_blocks_home_zero',
      'priority'    => 11,
      'show_opacity'=> true, 
)) );

// Color Title
$wp_customize->add_setting( 'pepe_color_pepe_title_sect_zero',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_pepe_title_sect_zero',
   array(
      'label'       => __('Color Title ( Just for style one)','pepe-lite' ),
      'section'     => 'pepe_blocks_home_zero',
      'priority'    => 12,
      'show_opacity'=> true, 
)) );

// Block Notice
$wp_customize->add_setting( 'pepe_block_0_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_block_0_notice',
   array(
      'label'      => __( 'Post','pepe-lite'),
      'description'=> __( 'For the number of posts to show you have to set it from the dashboard-> Settings-> Reading-> Blog pages show at most','pepe-lite'),
      'section'    => 'pepe_blocks_home_zero',
      'priority'   => 13,
)) );

// Show Category Pepe One
$wp_customize->add_setting( 'pepe_show_cat_pepe_sect_zero',
   array(
      'default'           => 1,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_cat_pepe_sect_zero',
   array(
      'label'   => __( 'Show Category', 'pepe-lite' ),
      'section' => 'pepe_blocks_home_zero',
      'priority'=> 20,
)) );

$wp_customize->selective_refresh->add_partial( 'pepe_show_cat_pepe_sect_zero',
   array(
      'selector' => '.cat-sect-zero',
));

// Show Comments Pepe One
$wp_customize->add_setting( 'pepe_show_comments_pepe_sect_zero',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_comments_pepe_sect_zero',
   array(
      'label'      => __( 'Show Comments', 'pepe-lite' ),
      'section'    => 'pepe_blocks_home_zero',
      'priority'   => 30,
)) );

// Show Author and date Pepe One
$wp_customize->add_setting( 'pepe_show_icons_pepe_sect_zero',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_icons_pepe_sect_zero',
   array(
      'label'      => __( 'Show Author and Date', 'pepe-lite' ),
      'section'    => 'pepe_blocks_home_zero',
      'priority'   => 40,
)) );

