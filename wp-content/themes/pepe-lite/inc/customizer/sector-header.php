<?php
/**
* sector-header.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

/**
 * Controlls for Sector Header  
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

/* TABLE OF CONTENT
- Block Top
- Block Logo
- Block Menu
- Block News
*/

/* Block Top
========================================================================== */

// Layout
$wp_customize->add_setting( 'pepe_layout_top_header_notice', 
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_layout_top_header_notice',
   array(
      'label'    => __( 'Layout','pepe-lite'),
      'section'  => 'pepe_blocks_top_header_options',
      'priority' => 5,
)) );

// Total width / Box width
$wp_customize->add_setting( 'size_top_header',
   array(
      'default'           => 0,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'size_top_header',
   array(
      'label'   => __( 'Enable/Disable Box width', 'pepe-lite' ),
      'section' => 'pepe_blocks_top_header_options',
      'priority'=> 12,
)) );

// General Settings
$wp_customize->add_setting( 'pepe_settings_top_header_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_settings_top_header_notice',
   array(
      'label'    => __( 'General Settings','pepe-lite'),
      'section'  => 'pepe_blocks_top_header_options',
      'priority' => 15,
)) );

// Show this Section
$wp_customize->add_setting( 'show_section_top',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'show_section_top',
   array(
      'label'   => __( 'Enable/Disable this section', 'pepe-lite' ),
      'section' => 'pepe_blocks_top_header_options',
      'priority'=> 18,
)) );

// Show Login
$wp_customize->add_setting( 'show_login',
   array(
      'default'           => 1,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'show_login',
   array(
      'label'   => __( 'Show Login', 'pepe-lite' ),
      'section' => 'pepe_blocks_top_header_options',
      'priority'=> 20,
)) );

$wp_customize->selective_refresh->add_partial( 'show_login',
   array(
      'selector' => 'ul.header_login_top',
));

// Show Top Menu
$wp_customize->add_setting( 'show_top_menu',
   array(
      'default'           => 1,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'show_top_menu',
   array(
      'label'   => __( 'Show Menu', 'pepe-lite' ),
      'section' => 'pepe_blocks_top_header_options',
      'priority'=> 30,
)) );

$wp_customize->selective_refresh->add_partial( 'show_top_menu',
   array(
      'selector' => 'ul.nav-top',
));

// Show Top Social
$wp_customize->add_setting( 'show_top_social',
   array(
      'default'           => 1,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'show_top_social',
   array(
      'label'   => __( 'Show Social', 'pepe-lite' ),
      'section' => 'pepe_blocks_top_header_options',
      'priority'=> 40,
)) );

$wp_customize->selective_refresh->add_partial( 'show_top_social',
   array(
      'selector' => '.pe-container-top-header ul.header_social',
));

// Background Color Top
$wp_customize->add_setting( 'pepe_baclground_color_top_area',
   array(
      'default'          => '#3a3a3a',
      'transport'        =>'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_baclground_color_top_area',
   array(
      'label'       => __('Background Color','pepe-lite' ),
      'section'     => 'pepe_blocks_top_header_options',
      'priority'    => 50,
      'show_opacity'=> true, 
)) );

// Color top
$wp_customize->add_setting( 'pepe_color_top_area',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_top_area',
   array(
      'label'       => __('Color','pepe-lite' ),
      'section'     => 'pepe_blocks_top_header_options',
      'priority'    => 60,
      'show_opacity'=> true, 
)) );


/* Block Logo
========================================================================== */

// Layout
$wp_customize->add_setting( 'pepe_layout_logo_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_layout_logo_notice',
   array(
      'label'    => __( 'Layout','pepe-lite'),
      'section'  => 'title_tagline',
      'priority' => 5,
)) );

// Total width / Box width
$wp_customize->add_setting( 'size_logo_block_header',
   array(
      'default'           => 0,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'size_logo_block_header',
   array(
      'label'   => __( 'Enable/Disable Box width', 'pepe-lite' ),
      'section' => 'title_tagline',
      'priority'=> 15,
)) );

// Margin Top Black Logo
$wp_customize->add_setting( 'pepe_top_block_logo',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_top_block_logo',
   array(
      'label'       => esc_html__( 'Margin Top Block (em Unit)','pepe-lite' ),
      'section'     => 'title_tagline',
      'priority'    => 16,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 10, 
                      'step' => 1, 
),)) );

// Margin Botton Black Logo
$wp_customize->add_setting( 'pepe_bottom_block_logo',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_bottom_block_logo',
   array(
      'label'       => esc_html__( 'Margin Bottom Block (em Unit)','pepe-lite' ),
      'section'     => 'title_tagline',
      'priority'    => 17,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 10, 
                      'step' => 1, 
),)) );

// Background Color Header
$wp_customize->add_setting( 'pepe_background_color_header',
   array(
	  'default'          => '#fff',
	  'transport'        =>'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_header',
   array(
      'label'       => __('Header Background Color','pepe-lite' ),
      'section'     => 'title_tagline',
      'priority'    => 18,
      'show_opacity'=> true, 
)) );

// Logo
$wp_customize->add_setting( 'pepe_logo_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_logo_notice',
   array(
      'label'    => __( 'Logo','pepe-lite'),
      'section'  => 'title_tagline',
      'priority' => 20,
)) );

// Font Size Logo
$wp_customize->add_setting( 'pepe_height_logo',
   array(
      'default'           => 150,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_logo',
   array(
      'label'       => esc_html__( 'Font Size Logo (px Unit)','pepe-lite' ),
      'section'     => 'title_tagline',
      'priority'    => 41,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 350, 
                      'step' => 1, 
),)) );

// Description
$wp_customize->add_setting( 'pepe_description_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_description_notice',
   array(
      'label'    => __( 'Description','pepe-lite'),
      'section'  => 'title_tagline',
      'priority' => 45,
)) );

// Font Size Description Title
$wp_customize->add_setting( 'pepe_height_description_title',
   array(
      'default'           => 40,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_description_title',
   array(
      'label'       => esc_html__( 'Font Size Description Title (px Unit)','pepe-lite' ),
      'section'     => 'title_tagline',
      'priority'    => 81,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 150, 
                      'step' => 1, 
),)) );

// Font Size Description Subtitle
$wp_customize->add_setting( 'pepe_height_description_subtitle', 
   array(
      'default'           => 16,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_description_subtitle',
   array(
      'label'       => esc_html__( 'Font Size Description Subtitle (px Unit)','pepe-lite' ),
      'section'     => 'title_tagline',
      'priority'    => 82,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 120, 
                      'step' => 1, 
),)) );

// Background Color Header
$wp_customize->add_setting( 'pepe_color_header',
   array(
	  'default'          => '#3a3a3a',
	  'transport'        =>'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_header',
   array(
      'label'       => __('Description Color','pepe-lite' ),
      'section'     => 'title_tagline',
      'priority'    => 83,
      'show_opacity'=> true, 
)) );

// Banner
$wp_customize->add_setting( 'pepe_banner_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_banner_notice',
   array(
      'label'    => __( 'Banner','pepe-lite'),
      'section'  => 'title_tagline',
      'priority' => 90,
)) );

// Show Banner
$wp_customize->add_setting( 'pepe_lite_show_banner_header',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_show_banner_header',
   array(
      'label'   => __( 'Show Banner', 'pepe-lite' ),
      'section' => 'title_tagline',
      'priority'=> 100,
)) );


// Banner post or widget
$wp_customize->add_setting('pepe_banner_header_post_widget',
   array(
      'default'           => 'banner-post',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_radio_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Text_Radio_Button_Custom_Control( $wp_customize, 'pepe_banner_header_post_widget',
   array(
      'label'           => __( 'Banner','pepe-lite' ),
      'description'     => __( 'Choose whether to use a post or a widget.(Recommended widget: Advanced Ads)','pepe-lite' ),
      'section'         => 'title_tagline',
      'active_callback' => 'pepe_lite_show_banner_header',
      'priority'        => 110,
      'choices'         => array(
                 'banner-post'   => __( 'Post','pepe-lite' ), 
                 'banner-widget' => __( 'Widgets','pepe-lite' ), 
))) );

$wp_customize->selective_refresh->add_partial( 'pepe_banner_header_post_widget',
   array(
      'selector' => '.pepe-selector-banner',
));

// Post Banner
$wp_customize->add_setting( 'pepe_post_name_banner_header',
   array(
      'sanitize_callback' => 'absint',
));

$wp_customize->add_control( new Pepe_lite_Dropdown_Posts_Custom_Control( $wp_customize, 'pepe_post_name_banner_header',
   array(
      'label'           => __('Posts Banner','pepe-lite' ),
      'description'     => esc_html__('Select Post for Banner (Only if you have selected Post!)', 'pepe-lite' ),
      'section'         => 'title_tagline',
      'active_callback' => 'pepe_lite_show_banner_header',
      'priority'        => 120,
      'input_attrs'     => array(
         'posts_per_page' => -1,
         'orderby'        => 'name',
			'order'          => 'ASC',
), )) );

// Text button Banner
$wp_customize->add_setting( 'pepe_text_button_banner_header',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('More','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_text_button_banner_header', array(
	'type'            => 'text',
   'section'         => 'title_tagline',
   'active_callback' => 'pepe_lite_show_banner_header',
	'priority'        => 130,
   'label'           => __('Text Button Banner','pepe-lite'),
   'description'     => __('Only if you have selected Post!','pepe-lite'),
) );

// Background Color Banner
$wp_customize->add_setting( 'pepe_color_banner',
   array(
      'default'          => 'rgba(246, 6, 125, 0.48)',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_banner',
   array(
      'label'       => __('Background Color Banner','pepe-lite' ),
      'section'     => 'title_tagline',
      'active_callback' => 'pepe_lite_show_banner_header',
      'priority'    => 131,
      'show_opacity'=> true, 
)) );

//Color Banner
$wp_customize->add_setting( 'pepe_color_color_banner',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_color_banner',
   array(
      'label'       => __('Color Banner','pepe-lite' ),
      'description' => __('Only if you have selected Post!','pepe-lite'),
      'section'     => 'title_tagline',
      'active_callback' => 'pepe_lite_show_banner_header',
      'priority'    => 132,
      'show_opacity'=> true, 
)) );

// Background Color Button Banner
$wp_customize->add_setting( 'pepe_background_color_button_banner_header',
   array(
      'default'          => '#F5067E',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_button_banner_header',
   array(
      'label'       => __( 'Background Color Button Banner','pepe-lite' ),
      'description' => __('Only if you have selected Post!','pepe-lite'),
      'section'     => 'title_tagline',
      'active_callback' => 'pepe_lite_show_banner_header',
      'priority'    => 133,
      'show_opacity'=> true, 
)) );

// Color Button Banner
$wp_customize->add_setting( 'pepe_color_button_banner_header',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_button_banner_header',
   array(
      'label'       => __( 'Color Button Banner','pepe-lite' ),
      'description' => __('Only if you have selected Post!','pepe-lite'),
      'section'     => 'title_tagline',
      'active_callback' => 'pepe_lite_show_banner_header',
      'priority'    => 134,
      'show_opacity'=> true, 
)) );

// Favicon
$wp_customize->add_setting( 'pepe_favicon_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_favicon_notice',
   array(
      'label'    => __( 'Favicon','pepe-lite'),
      'section'  => 'title_tagline',
      'priority' => 140,
)) );

// Responsive
$wp_customize->add_setting( 'pepe_responsive_tagline_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_responsive_tagline_notice',
   array(
      'label'    => __( 'Responsive','pepe-lite'),
      'section'  => 'title_tagline',
      'priority' => 600,
)) );

// Enable Banner In Responsive
$wp_customize->add_setting( 'pepe_enable_banner_responsive',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_enable_banner_responsive',
   array(
      'label'   => __( 'Enable/Disable Banner in Responsive', 'pepe-lite' ),
      'section' => 'title_tagline',
      'priority'=> 605,
)) );

// Enable Social
$wp_customize->add_setting( 'pepe_enable_social_menu_resp',
  array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_enable_social_menu_resp',
array(
	'label' => __( 'Enable or disable Social','pepe-lite' ),
	'section' => 'title_tagline',
	'priority'=> 606,
)) );

// Background Color Sign in
$wp_customize->add_setting( 'pepe_background_color_header_resp',
   array(
      'default'          => '#3a3a3a',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_header_resp',
   array(
      'label'       => __( 'Background color Header in Responsive','pepe-lite' ),
      'section'     => 'title_tagline',
      'priority'    => 607,
      'show_opacity'=> true, 
)) );

// Color Header Responsive
$wp_customize->add_setting( 'pepe_color_header_resp',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_header_resp',
   array(
      'label'       => __( 'Color Header in Responsive','pepe-lite' ),
      'section'     => 'title_tagline',
      'priority'    => 608,
      'show_opacity'=> true, 
)) );

// Logo Responsive
$wp_customize->add_setting( 'pepe_logo_responsive',
   array(
      'transport'         => 'refresh',
      'sanitize_callback' => 'absint'
));
 
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'pepe_logo_responsive',
   array(
      'label'         => __( 'Select image Logo for Mobile ','pepe-lite' ),
      'description'   => esc_html__( 'Upload image','pepe-lite' ),
      'section'       => 'title_tagline',
      'priority'      => 610,
      'flex_width'    => false, // Optional. Default: false
      'flex_height'   => true, // Optional. Default: false
      'width'         => 800, // Optional. Default: 150
      'height'        => 400, // Optional. Default: 150
      'button_labels' => array( // Optional.
                  'select'       => __( 'Select Image','pepe-lite' ),
                  'change'       => __( 'Change Image','pepe-lite' ),
                  'remove'       => __( 'Remove','pepe-lite' ),
                  'default'      => __( 'Default','pepe-lite' ),
                  'placeholder'  => __( 'No image selected','pepe-lite' ),
                  'frame_title'  => __( 'Select Image','pepe-lite' ),
                  'frame_button' => __( 'Choose Image','pepe-lite' ),
))) );

$wp_customize->selective_refresh->add_partial( 'pepe_logo_responsive',
   array(
      'selector' => '.pe-logo-responsive ',
));

// Width Logo Responsive
$wp_customize->add_setting( 'pepe_height_logo_responsive',
   array(
      'default'           => 180,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_logo_responsive',
   array(
      'label'           => esc_html__( 'Width Logo (px Unit)','pepe-lite' ),
      'section'         => 'title_tagline',
      'priority'        => 611,
      'input_attrs'     => array(
                      'min'  => 0,
                      'max'  => 500, 
                      'step' => 1, 
),)) );

// Enable Description In Responsive
$wp_customize->add_setting( 'pepe_lite_enable_description_responsive',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_description_responsive',
   array(
      'label'   => __( 'Enable/Disable Description Site in Responsive', 'pepe-lite' ),
      'section' => 'title_tagline',
      'priority'=> 615,
)) );

// Font Size Description Title Responsive
$wp_customize->add_setting( 'pepe_height_description_title_responsive',
   array(
      'default'           => 40,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_description_title_responsive',
   array(
      'label'           => esc_html__( 'Font Size Description Title Responsive (px Unit)','pepe-lite' ),
      'section'         => 'title_tagline',
      'active_callback' => 'pepe_lite_enable_description_responsive',
      'priority'        => 620,
      'input_attrs'     => array(
                      'min'  => 0,
                      'max'  => 150, 
                      'step' => 1, 
),)) );

// Font Size Description Subtitle Responsive
$wp_customize->add_setting( 'pepe_height_description_subtitle_responsive',
   array(
      'default'           => 16,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_description_subtitle_responsive',
   array(
      'label'           => esc_html__( 'Font Size Description Subtitle Responsive (px Unit)','pepe-lite' ),
      'section'         => 'title_tagline',
      'active_callback' => 'pepe_lite_enable_description_responsive',
      'priority'        => 630,
      'input_attrs'     => array(
                      'min'  => 0,
                      'max'  => 120, 
                      'step' => 1, 
),)) );

/* Block Menu
========================================================================== */

// Layout
$wp_customize->add_setting( 'pepe_menu_header_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_menu_header_notice',
   array(
      'label'    => __( 'General Settings','pepe-lite'),
      'section'  => 'pepe_blocks_menu_header_options',
      'priority' => 5,
)) );

// Total width / Box width
$wp_customize->add_setting( 'size_menu_block_header',
   array(
      'default'           => 0,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'size_menu_block_header',
   array(
      'label'   => __( 'Enable/Disable Box width', 'pepe-lite' ),
      'section' => 'pepe_blocks_menu_header_options',
      'priority'=> 10,
)) );

// Enable/Disable sticky Menu
$wp_customize->add_setting( 'sticky_menu_header',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'sticky_menu_header',
   array(
      'label'   => __( 'Enable/Disable sticky Menu', 'pepe-lite' ),
      'section' => 'pepe_blocks_menu_header_options',
      'priority'=> 20,
)) );

// Enable/Disable Search Menu
$wp_customize->add_setting( 'enable_search_menu',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'enable_search_menu',
   array(
      'label'   => __( 'Enable/Disable search form  Menu', 'pepe-lite' ),
      'section' => 'pepe_blocks_menu_header_options',
      'priority'=> 25,
)) );

// Font Size Menu
$wp_customize->add_setting( 'pepe_height_menu',
   array(
      'default'           => 14,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_menu',
   array(
      'label'       => esc_html__( 'Font Size Menu (px Unit)','pepe-lite' ),
      'section'     => 'pepe_blocks_menu_header_options',
      'priority'    => 30,
      'input_attrs' => array(
                      'min'  => 10,
                      'max'  => 22, 
                      'step' => 1, 
),)) );

// Padding Menu
$wp_customize->add_setting( 'pepe_padding_menu',
   array(
      'default'           => 12,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_padding_menu',
   array(
      'label'       => esc_html__( 'Padding Menu (px Unit)','pepe-lite' ),
      'section'     => 'pepe_blocks_menu_header_options',
      'priority'    => 40,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 30, 
                      'step' => 1, 
),)) );

// Background Color menu
$wp_customize->add_setting( 'pepe_baclground_color_navmenu',
   array(
      'default'          => '#3a3a3a',
      'transport'        =>'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_baclground_color_navmenu',
   array(
      'label'       => __('Background Color','pepe-lite' ),
      'section'     => 'pepe_blocks_menu_header_options',
      'priority'    => 50,
      'show_opacity'=> true, 
)) );

// Color menu
$wp_customize->add_setting( 'pepe_color_navmenu',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_navmenu',
   array(
      'label'       => __('Color','pepe-lite' ),
      'section'     => 'pepe_blocks_menu_header_options',
      'priority'    => 60,
      'show_opacity'=> true, 
)) );

// Responsive
$wp_customize->add_setting( 'pepe_responsive_pepe_blocks_menu_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_responsive_pepe_blocks_menu_notice',
   array(
      'label'    => __( 'Responsive','pepe-lite'),
      'section'  => 'pepe_blocks_menu_header_options',
      'priority' => 70,
)) );

// Color border menu responsive
$wp_customize->add_setting( 'pepe_color_navmenu_border_resp',
   array(
      'default'          => '#ccc',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_navmenu_border_resp',
   array(
      'label'       => __('Border Color Menu','pepe-lite' ),
      'section'     => 'pepe_blocks_menu_header_options',
      'priority'    => 80,
      'show_opacity'=> true, 
)) );

/* Block News
========================================================================== */

// Layout
$wp_customize->add_setting( 'pepe_layout_news_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_layout_news_notice',
   array(
      'label'    => __( 'Layout','pepe-lite'),
      'section'  => 'pepe_blocks_news_header_options',
      'priority' => 10,
)) );

// Total width / Box width
$wp_customize->add_setting( 'size_news_block_header',
   array(
      'default'           => 0,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'size_news_block_header',
   array(
      'label'   => __( 'Enable/Disable Box width', 'pepe-lite' ),
      'section' => 'pepe_blocks_news_header_options',
      'priority'=> 25,
)) );

// Enable/Disable this section
$wp_customize->add_setting( 'enable_news_block_header',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'enable_news_block_header',
   array(
      'label'   => __( 'Enable/Disable this section', 'pepe-lite' ),
      'section' => 'pepe_blocks_news_header_options',
      'priority'=> 26,
)) );

// General Settings
$wp_customize->add_setting( 'pepe_settings_news_header_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_settings_news_header_notice',
   array(
      'label'    => __( 'General Settings','pepe-lite'),
      'section'  => 'pepe_blocks_news_header_options',
      'priority' => 30,
)) );

// Text News
$wp_customize->add_setting( 'pepe_text_news_header',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('FLASH NEWS','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses', 
));

$wp_customize->add_control( 'pepe_text_news_header', array(
	'type'    => 'text',
   'section' => 'pepe_blocks_news_header_options',
	'priority'=> 40,
   'label'   => __('Text News','pepe-lite'),
) );

$wp_customize->selective_refresh->add_partial( 'pepe_cat_news_header',
   array(
      'selector' => '.marquee-sibling',
));

// Category News
$wp_customize->add_setting('pepe_cat_news_header',
	  array(
      'sanitize_callback' => 'pepe_lite_sanitize_category_select',
));

$wp_customize->add_control(new Pepe_lite_Customize_Category_Control($wp_customize,'pepe_cat_news_header',
		array(
			'label'       => __('Select Category News','pepe-lite'),
			'settings'    => 'pepe_cat_news_header',
         'section'     => 'pepe_blocks_news_header_options',
         'priority'    => 50,
         'type'     => 'multiple-select', // The $type in our class
)));



// Show Date and Time
$wp_customize->add_setting( 'pepe_lite_show_date_time_header',
   array(
      'default'           => 1,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_show_date_time_header',
   array(
      'label'   => __( 'Show Date and Time', 'pepe-lite' ),
      'section' => 'pepe_blocks_news_header_options',
      'priority'=> 70,
)) );

$wp_customize->selective_refresh->add_partial( 'pepe_lite_show_date_time_header',
   array(
      'selector' => '.time-header',
));

// Show Time
$wp_customize->add_setting( 'pepe_show_time_header',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_time_header',
   array(
      'label'           => __( 'Show Time', 'pepe-lite' ),
      'section'         => 'pepe_blocks_news_header_options',
      'active_callback' => 'pepe_lite_show_date_time_header',
      'priority'        => 80,
)) );


/* Header Image
========================================================================== */

// Height image header
$wp_customize->add_setting( 'pepe_height_image_header',
   array(
      'default'           => 253,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_image_header',
   array(
      'label'       => esc_html__( 'Height Image Header (px Unit)','pepe-lite' ),
      'section'     => 'header_image',
      'priority'    => 100,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 1000, 
                      'step' => 1, 
),)) );

// Object Fit Image Header
$wp_customize->add_setting( 'pepe_fit_image_header',
   array(
      'default'           => 'unset',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_radio_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Text_Radio_Button_Custom_Control( $wp_customize, 'pepe_fit_image_header',
   array(
      'label'       => __( 'Object Fit Image Header','pepe-lite' ),
      'section'     => 'header_image',
      'priority'    => 110,
      'choices'     => array(
                 'unset'     => __( 'Unset','pepe-lite' ), 
                 'contain'   => __( 'Contain','pepe-lite' ),
                 'cover'     => __( 'Cover','pepe-lite' ),
                 'fill'      => __( 'Fill','pepe-lite' ),
                 'none'      => __( 'None','pepe-lite' ),
                 'scale-down'=> __( 'Scale Down','pepe-lite' )
))) );





