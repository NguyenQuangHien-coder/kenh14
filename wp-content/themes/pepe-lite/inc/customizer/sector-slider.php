<?php
/**
* sector-slider.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

/**
 * Controlls for Sector Card Large
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

/* TABLE OF CONTENT

- Slider
- Card One
- Card Two
- Card Three

*/

// Slider Layout Notice
$wp_customize->add_setting( 'pepe_slider_layout_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_slider_layout_notice',
   array(
      'label'    => __( 'Layout','pepe-lite'),
      'section'  => 'pepe_section_slider_options',
      'priority' => 10,
)) );

//Header Block Top
$wp_customize->add_setting('pepe_layout_block_slidertab',
   array(
      'default'           => 'one',
      'transport'         => 'refresh',
      'sanitize_callback' => 'pepe_lite_radio_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Image_Radio_Button_Custom_Control( 
   $wp_customize, 'pepe_layout_block_slidertab',
   array(
      'label'       => __('Block Slider with Tab Layout','pepe-lite'),
      'description' => esc_html__('Choose the Layout for the Block Slider with Tab','pepe-lite'),
      'section'     => 'pepe_section_slider_options',
      'priority'    => 15,
      'choices'     => array(
              'one'  => array(  
                           'image' => trailingslashit(esc_url(get_template_directory_uri())).'inc/customizer/images/cat-1.png', 
                            'name' => __('Layout 1','pepe-lite')),
              'two'  => array(
                           'image' => trailingslashit( esc_url(get_template_directory_uri())).'inc/customizer/images/cat-4.png',
                           'name' => __('Layout 2','pepe-lite')),
              'three'  => array(
                           'image' => trailingslashit(esc_url( get_template_directory_uri())).'inc/customizer/images/cat-2.png',
                           'name' => __('Layout 3','pepe-lite')),
))) );

// Margin Top  Slider Block
$wp_customize->add_setting( 'pepe_margin_top_block_slider',
   array(
      'default'           => 1,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_margin_top_block_slider',
   array(
      'label'       => esc_html__( 'Margin Top (em Unit)','pepe-lite' ),
      'section'     => 'pepe_section_slider_options',
      'priority'    => 20,
      'input_attrs' => array(
                      'min'  => -5,
                      'max'  => 15, 
                      'step' => 1, 
),)) );

// Margin Bottom  Slider Block
$wp_customize->add_setting( 'pepe_margin_bottom_block_slider',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_margin_bottom_block_slider',
   array(
      'label'       => esc_html__( 'Margin Bottom (em Unit)','pepe-lite' ),
      'section'     => 'pepe_section_slider_options',
      'priority'    => 30,
      'input_attrs' => array(
                      'min'  => -5,
                      'max'  => 15, 
                      'step' => 1, 
),)) );

/* Slider
========================================================================== */

// Slider Notice
$wp_customize->add_setting( 'pepe_slider_card_large_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_slider_card_large_notice',
   array(
      'label'    => __( 'Slider','pepe-lite'),
      'section'  => 'pepe_section_slider_options',
      'priority' => 40,
)) );

// Category Slider
$wp_customize->add_setting('pepe_category_slider_boostrap',
	  array(
      'sanitize_callback' => 'pepe_lite_sanitize_category_select',
));

$wp_customize->add_control(new Pepe_lite_Customize_Category_Control($wp_customize,'pepe_category_slider_boostrap',
		array(
            'label'       => __('Select Category for post Slider','pepe-lite'),
			'settings'       => 'pepe_category_slider_boostrap',
            'section'     => 'pepe_section_slider_options',
			'priority'       => 50,
)));

// Show Category Slider
$wp_customize->add_setting( 'pepe_show_cat_slider',
   array(
      'default'           => 1,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_cat_slider',
   array(
      'label'   => __( 'Show Category Slider', 'pepe-lite' ),
      'section' => 'pepe_section_slider_options',
      'priority'=> 60,
)) );

$wp_customize->selective_refresh->add_partial( 'pepe_show_cat_slider',
   array(
      'selector' => '#carouselExampleIndicators',
));

// Show Icons Slider
$wp_customize->add_setting( 'pepe_show_icons_slider',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_icons_slider',
   array(
      'label'      => __( 'Show Author and Date Slider', 'pepe-lite' ),
      'section'    => 'pepe_section_slider_options',
      'priority'   => 70,
)) );

// Show fade effect Slider
$wp_customize->add_setting( 'pepe_show_fade_slider',
   array(
      'default'           => 0,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_fade_slider',
   array(
      'label'      => __( 'Enable or disable effect fade Slider', 'pepe-lite' ),
      'section'    => 'pepe_section_slider_options',
      'priority'   => 80,
)) );

// Show nav Slider
$wp_customize->add_setting( 'pepe_show_nav_slider',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_nav_slider',
   array(
      'label'      => __( 'Show Nav Controls Slider', 'pepe-lite' ),
      'section'    => 'pepe_section_slider_options',
      'priority'   => 90,
)) );

// Show dark shading
$wp_customize->add_setting( 'pepe_show_shadow_slider',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize,'pepe_show_shadow_slider',
   array(
      'label'   => __( 'Show dark shading Slider', 'pepe-lite' ),
      'section' => 'pepe_section_slider_options',
      'priority'=> 91,
)) );

// Mulitabs Notice General
$wp_customize->add_setting( 'pepe_slid_tab_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_slid_tab_notice',
   array(
      'label'    => __( 'Multitabs','pepe-lite'),
      'section'  => 'pepe_section_slider_options', 
      'priority' => 95,
)) );

// Show Category Multitab
$wp_customize->add_setting( 'pepe_show_cat_tab',
   array(
      'default'           => 1,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_cat_tab',
   array(
      'label'   => __( 'Show Category Post in Multitabs', 'pepe-lite' ),
      'section' => 'pepe_section_slider_options',
      'priority'=> 96,
)) );

$wp_customize->selective_refresh->add_partial( 'pepe_show_cat_tab',
   array(
      'selector' => '#nav-tabContent',
));

// Show Icons Multitab
$wp_customize->add_setting( 'pepe_show_icons_tab',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_icons_tab',
   array(
      'label'   => __( 'Show Icons Tab in Multitabs', 'pepe-lite' ),
      'section' => 'pepe_section_slider_options',
      'priority'=> 97,
)) );

// Tab 1 Notice
$wp_customize->add_setting( 'pepe_slid_tab_notice_1',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_slid_tab_notice_1',
   array(
      'label'    => __( 'Tab One','pepe-lite'),
      'section'  => 'pepe_section_slider_options',
      'priority' => 100,
)) );

// Title Tab one
$wp_customize->add_setting( 'pepe_title_slider_multitab_1',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('Latest','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_title_slider_multitab_1', array(
	'type'    => 'text',
   'section' => 'pepe_section_slider_options',
	'priority'=> 110,
   'label'   => __('Title Tab One','pepe-lite'),
) );

// Category Tab one
$wp_customize->add_setting('pepe_cat_multitab_1',
	  array(
      'sanitize_callback' => 'pepe_lite_sanitize_category_select',
));

$wp_customize->add_control(new Pepe_lite_Customize_Category_Control($wp_customize,'pepe_cat_multitab_1',
		array(
            'label'       => __('Select Category for Tab One','pepe-lite'),
			'settings'       => 'pepe_cat_multitab_1',
            'section'     => 'pepe_section_slider_options',
			'priority'       => 130,
)));

// Tab 2 Notice
$wp_customize->add_setting( 'pepe_slid_tab_notice_2',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_slid_tab_notice_2',
   array(
      'label'    => __( 'Tab Two','pepe-lite'),
      'section'  => 'pepe_section_slider_options',
      'priority' => 140,
)) );

// Title Tab two
$wp_customize->add_setting( 'pepe_title_slider_multitab_2',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('Popular','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_title_slider_multitab_2', array(
	'type'    => 'text',
   'section' => 'pepe_section_slider_options',
	'priority'=> 150,
   'label'   => __('Title Tab Two','pepe-lite'),
) );

// Category Tab two
$wp_customize->add_setting('pepe_cat_multitab_2',
	  array(
      'sanitize_callback' => 'pepe_lite_sanitize_category_select',
));

$wp_customize->add_control(new Pepe_lite_Customize_Category_Control($wp_customize,'pepe_cat_multitab_2',
		array(
            'label'       => __('Select Category for Tab Two','pepe-lite'),
			'settings'       => 'pepe_cat_multitab_2',
            'section'     => 'pepe_section_slider_options',
			'priority'       => 170,
)));

// Tab 3 Notice
$wp_customize->add_setting( 'pepe_slid_tab_notice_3',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_slid_tab_notice_3',
   array(
      'label'    => __( 'Tab Three','pepe-lite'),
      'section'  => 'pepe_section_slider_options',
      'priority' => 180,
)) );

// Title Tab Three
$wp_customize->add_setting( 'pepe_title_slider_multitab_3',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('Trending','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_title_slider_multitab_3', array(
	'type'    => 'text',
   'section' => 'pepe_section_slider_options',
	'priority'=> 190,
   'label'   => __('Title Tab Three','pepe-lite'),
) );

// Category Tab Three
$wp_customize->add_setting('pepe_cat_multitab_3',
	  array(
      'sanitize_callback' => 'pepe_lite_sanitize_category_select',
));

$wp_customize->add_control(new Pepe_lite_Customize_Category_Control($wp_customize,'pepe_cat_multitab_3',
		array(
            'label'       => __('Select Category for Tab Three','pepe-lite'),
			'settings'       => 'pepe_cat_multitab_3',
            'section'     => 'pepe_section_slider_options',
			'priority'       => 210,
)));









