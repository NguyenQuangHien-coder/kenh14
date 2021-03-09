<?php
/**
* sector-blog.php
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

 - Setting Post
 - Comments
 - Archive
 - Search Page
 - Search Page not Found
 */

/* Settings 
========================================================================== */

// Notice
$wp_customize->add_setting( 'pepe_settings_post_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_settings_post_notice',
   array(
      'label'      => __( 'General Settings','pepe-lite'),
      'description'=> __('The page has 2 templates: Default template and Single Large. You can select them in the dashboard in Post Attributes!','pepe-lite'),
      'section'    => 'pepe_post_section',
      'priority'   => 1,
)) );

// Margin top Sidebar
$wp_customize->add_setting( 'pepe_margin_top_slider_post',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_margin_top_slider_post',
   array(
      'label'       => esc_html__( 'Margin Top Sidebar (px Unit)','pepe-lite' ),
      'section'     => 'pepe_post_section',
      'priority'    => 2,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 180, 
                      'step' => 1, 
),)) );

// Notice
$wp_customize->add_setting( 'pepe_post_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_post_notice',
   array(
      'label'    => __( 'Post','pepe-lite'),
      'section'  => 'pepe_post_section',
      'priority' => 5,
)) );

// Show Breadcrumbs
$wp_customize->add_setting( 'pepe_show_breadcrumbs_post',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize,'pepe_show_breadcrumbs_post',
   array(
      'label'   => __('Show Breadcrumbs', 'pepe-lite' ),
      'section' => 'pepe_post_section',
      'priority'=> 6,
)) );

// Show the categories above the title
$wp_customize->add_setting( 'pepe_show_cat_post',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize,'pepe_show_cat_post',
   array(
      'label'   => __('Show the categories above the title', 'pepe-lite' ),
      'section' => 'pepe_post_section',
      'priority'=> 10,
)) );

$wp_customize->selective_refresh->add_partial( 'pepe_show_cat_post',
   array(
      'selector' => '.pepe-cat-single',
));

// Enable or disable meta info post
$wp_customize->add_setting( 'pepe_lite_enable_meta_info_post',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize,'pepe_lite_enable_meta_info_post',
   array(
      'label'   => __('Enable or disable meta info Post', 'pepe-lite' ),
      'section' => 'pepe_post_section',
      'priority'=> 15,
)) );

// Enable or disable Update Post
$wp_customize->add_setting( 'pepe_enable_update_post',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize,'pepe_enable_update_post',
   array(
      'label'   => __('Enable or disable update post info', 'pepe-lite' ),
      'section' => 'pepe_post_section',
      'active_callback'=> 'pepe_lite_enable_meta_info_post',
      'priority'=> 16,
)) );

// Enable or disable sticky sidebar
$wp_customize->add_setting( 'pepe_show_sidebar_sticky_post',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize,'pepe_show_sidebar_sticky_post',
   array(
      'label'   => __('Enable or disable sticky sidebar', 'pepe-lite' ),
      'section' => 'pepe_post_section',
      'priority'=> 18,
)) );

/* Comments
========================================================================== */

// Notice
$wp_customize->add_setting( 'pepe_comments_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_comments_notice',
   array(
      'label'    => __( 'Comment','pepe-lite'),
      'section'  => 'pepe_post_section',
      'priority' => 80,
)) );

// Text button Banner
$wp_customize->add_setting( 'pepe_text_button_comments',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('POST COMMENTS','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_text_button_comments', array(
	'type'    => 'text',
   'section' => 'pepe_post_section',
	'priority'=> 110,
   'label'   => __('Text Button Comment','pepe-lite'),
) );

// Background Color Button
$wp_customize->add_setting( 'pepe_background_color_pepe_comment_button',
   array(
      'default'          => '#F5067E',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_pepe_comment_button',
   array(
      'label'       => __( 'Background Color Button Comment','pepe-lite' ),
      'section'     => 'pepe_post_section',
      'priority'    => 120,
      'show_opacity'=> true, 
)) );

// Color Button
$wp_customize->add_setting( 'pepe_color_pepe_comment_button',
   array(
      'default'          => '#3a3a3a',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_pepe_comment_button',
   array(
      'label'       => __( 'Color Button Comment','pepe-lite' ),
      'section'     => 'pepe_post_section',
      'priority'    => 130,
      'show_opacity'=> true, 
)) );

/* Archive
========================================================================== */

// Notice
$wp_customize->add_setting( 'pepe_archive_settings_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_archive_settings_notice',
   array(
      'label'    => __( 'General Settings','pepe-lite'),
      'section'  => 'pepe_archive_section',
      'priority' => 1,
)) );

// Show Breadcrumbs
$wp_customize->add_setting( 'pepe_show_breadcrumbs_cat',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize,'pepe_show_breadcrumbs_cat',
   array(
      'label'   => __('Show Breadcrumbs', 'pepe-lite' ),
      'section' => 'pepe_archive_section',
      'priority'=> 2,
)) );

// Notice
$wp_customize->add_setting( 'pepe_badge_category_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_badge_category_notice',
   array(
      'label'    => __( 'Badge','pepe-lite'),
      'section'  => 'pepe_archive_section',
      'priority' => 4,
)) );

// Badge Color Category
$wp_customize->add_setting( 'pepe_color_badge_category',
   array(
      'default'          => '#3a3a3a',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_badge_category',
   array(
      'label'       => __('Category Badge Color','pepe-lite' ),
      'section'     => 'pepe_archive_section',
      'priority'    => 5,
      'show_opacity'=> true, 
)) );

// Badge Color Comments
$wp_customize->add_setting( 'pepe_color_badge_comment',
   array(
      'default'          => '#3a3a3a',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_badge_comment',
   array(
      'label'       => __('Comments Badge Color (In Home Page)','pepe-lite' ),
      'section'     => 'pepe_archive_section',
      'priority'    => 6,
      'show_opacity'=> true, 
)) );

// Notice
$wp_customize->add_setting( 'pepe_archive_header_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_archive_header_notice',
   array(
      'label'    => __( 'Header Category','pepe-lite'),
      'section'  => 'pepe_archive_section',
      'priority' => 45,
)) );

// Image Category
$wp_customize->add_setting( 'pepe_image_cat',
   array(
      'transport'         => 'refresh',
      'sanitize_callback' => 'absint'
));
 
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'pepe_image_cat',
   array(
      'label'          => __( 'Select image for Category','pepe-lite' ),
      'description'    => esc_html__( 'Upload image','pepe-lite' ),
      'section'        => 'pepe_archive_section',
      'priority'       => 50,
      'flex_width'     => false, // Optional. Default: false
      'flex_height'    => true, // Optional. Default: false
      'width'          => 3000, // Optional. Default: 150
      'height'         => 1000, // Optional. Default: 150
      'button_labels'  => array( // Optional.
                  'select'       => __( 'Select Image','pepe-lite' ),
                  'change'       => __( 'Change Image','pepe-lite' ),
                  'remove'       => __( 'Remove','pepe-lite' ),
                  'default'      => __( 'Default','pepe-lite' ),
                  'placeholder'  => __( 'No image selected','pepe-lite' ),
                  'frame_title'  => __( 'Select Image','pepe-lite' ),
                  'frame_button' => __( 'Choose Image','pepe-lite' ),
))) );

// Height Header Category
$wp_customize->add_setting( 'pepe_height_image_cat',
   array(
      'default'           => 30,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_image_cat',
   array(
      'label'       => esc_html__( 'Height Header Category (px Unit)','pepe-lite' ),
      'section'     => 'pepe_archive_section',
      'priority'    => 60,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 700, 
                      'step' => 1, 
),)) );

// Padding Top Header Category
$wp_customize->add_setting( 'pepe_padding_image_cat',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_padding_image_cat',
   array(
      'label'       => esc_html__( 'Padding Top Header Category (em Unit)','pepe-lite' ),
      'section'     => 'pepe_archive_section',
      'priority'    => 70,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 15, 
                      'step' => 1, 
),)) );

// Font Size Title Header Category
$wp_customize->add_setting( 'pepe_font_size_title_image_cat',
   array(
      'default'           => 38,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_font_size_title_image_cat',
   array(
      'label'       => esc_html__( 'Font Size Title Header Category (px Unit)','pepe-lite' ),
      'section'     => 'pepe_archive_section',
      'priority'    => 80,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 120, 
                      'step' => 1, 
),)) );

$wp_customize->selective_refresh->add_partial( 'pepe_font_size_title_image_cat',
   array(
      'selector' => 'h1.page-title.arc-tit',
));

// Font Size Description Header Category
$wp_customize->add_setting( 'pepe_font_size_subtitle_image_cat',
   array(
      'default'           => 16,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_font_size_subtitle_image_cat',
   array(
      'label'       => esc_html__( 'Font Size Description Header Category (px Unit)','pepe-lite' ),
      'section'     => 'pepe_archive_section',
      'priority'    => 90,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 80, 
                      'step' => 1, 
),)) );

// Color Text
$wp_customize->add_setting( 'pepe_color_text_image_cat',
   array(
      'default'          => '#000',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_text_image_cat',
   array(
      'label'       => __( 'Color Text Category','pepe-lite' ),
      'section'     => 'pepe_archive_section',
      'priority'    => 100,
      'show_opacity'=> true, 
)) );

/* Search Page
========================================================================== */

// Image Search Page
$wp_customize->add_setting( 'pepe_image_search_page',
   array(
      'transport'         => 'refresh',
      'sanitize_callback' => 'absint'
));
 
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'pepe_image_search_page',
   array(
      'label'          => __( 'Select image for Search Page','pepe-lite' ),
      'description'    => esc_html__( 'Upload image','pepe-lite' ),
      'section'        => 'pepe_search_section',
      'priority'       => 10,
      'flex_width'     => false, // Optional. Default: false
      'flex_height'    => true, // Optional. Default: false
      'width'          => 3000, // Optional. Default: 150
      'height'         => 1000, // Optional. Default: 150
      'button_labels'  => array( // Optional.
                  'select'       => __( 'Select Image','pepe-lite' ),
                  'change'       => __( 'Change Image','pepe-lite' ),
                  'remove'       => __( 'Remove','pepe-lite' ),
                  'default'      => __( 'Default','pepe-lite' ),
                  'placeholder'  => __( 'No image selected','pepe-lite' ),
                  'frame_title'  => __( 'Select Image','pepe-lite' ),
                  'frame_button' => __( 'Choose Image','pepe-lite' ),
))) );

// Height Header Search Page
$wp_customize->add_setting( 'pepe_height_image_search_page',
   array(
      'default'           => 30,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_image_search_page',
   array(
      'label'       => esc_html__( 'Height Header Search Page (px Unit)','pepe-lite' ),
      'section'     => 'pepe_search_section',
      'priority'    => 20,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 700, 
                      'step' => 1, 
),)) );

// Padding Top Header Search Page
$wp_customize->add_setting( 'pepe_padding_image_search_page',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_padding_image_search_page',
   array(
      'label'       => esc_html__( 'Padding Top Header Search Page (em Unit)','pepe-lite' ),
      'section'     => 'pepe_search_section',
      'priority'    => 30,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 15, 
                      'step' => 1, 
),)) );

// Font Size Title Header Search Page
$wp_customize->add_setting( 'pepe_font_size_title_image_search_page',
   array(
      'default'           => 38,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_font_size_title_image_search_page',
   array(
      'label'       => esc_html__( 'Font Size Title Header Search Page (px Unit)','pepe-lite' ),
      'section'     => 'pepe_search_section',
      'priority'    => 40,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 120, 
                      'step' => 1, 
),)) );

$wp_customize->selective_refresh->add_partial( 'pepe_font_size_title_image_search_page',
   array(
      'selector' => '.pepe-page-search h1.page-title',
));

// Font Size Description Header Search Page
$wp_customize->add_setting( 'pepe_font_size_subtitle_image_search_page',
   array(
      'default'           => 38,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_font_size_subtitle_image_search_page',
   array(
      'label'       => esc_html__( 'Font Size Description Header Search Page (px Unit)','pepe-lite' ),
      'section'     => 'pepe_search_section',
      'priority'    => 50,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 120, 
                      'step' => 1, 
),)) );

// Color Text
$wp_customize->add_setting( 'pepe_color_text_image_search_page',
   array(
      'default'          => '#000',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_text_image_search_page',
   array(
      'label'       => __( 'Color Text Header Search Page','pepe-lite' ),
      'section'     => 'pepe_search_section',
      'priority'    => 60,
      'show_opacity'=> true, 
)) );

/* Search Page not Found
========================================================================== */

// Image Search Page not found
$wp_customize->add_setting( 'pepe_image_search_page_not_found',
   array(
      'transport'         => 'refresh',
      'sanitize_callback' => 'absint'
));
 
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'pepe_image_search_page_not_found',
   array(
      'label'          => __( 'Select image for Search Page not found','pepe-lite' ),
      'description'    => esc_html__( 'Upload image','pepe-lite' ),
      'section'        => 'pepe_search_not_found_section',
      'priority'       => 10,
      'flex_width'     => false, // Optional. Default: false
      'flex_height'    => true, // Optional. Default: false
      'width'          => 3000, // Optional. Default: 150
      'height'         => 1000, // Optional. Default: 150
      'button_labels'  => array( // Optional.
                  'select'       => __( 'Select Image','pepe-lite' ),
                  'change'       => __( 'Change Image','pepe-lite' ),
                  'remove'       => __( 'Remove','pepe-lite' ),
                  'default'      => __( 'Default','pepe-lite' ),
                  'placeholder'  => __( 'No image selected','pepe-lite' ),
                  'frame_title'  => __( 'Select Image','pepe-lite' ),
                  'frame_button' => __( 'Choose Image','pepe-lite' ),
))) );

// Height image Search Page not found
$wp_customize->add_setting( 'pepe_height_image_search_page_not_found',
   array(
      'default'           => 30,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_height_image_search_page_not_found',
   array(
      'label'       => esc_html__( 'Width Image Page not found (px Unit)','pepe-lite' ),
      'section'     => 'pepe_search_not_found_section',
      'priority'    => 20,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 1200, 
                      'step' => 1, 
),)) );

// Text button 404 Page
$wp_customize->add_setting( 'pepe_text_content_none',array(
   'capability'        => 'edit_theme_options',
   'transport'         =>'postMessage',
	'default'           => __('GO TO THE HOME','pepe-lite'),
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_text_content_none', array(
	'type'    => 'text',
   'section' => 'pepe_search_not_found_section',
	'priority'=> 50,
   'label'   => __('Text Button','pepe-lite'),
) );

// Background Color Button
$wp_customize->add_setting( 'pepe_background_color_pepe_content_none_button',
   array(
      'default'          => '#F5067E',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_pepe_content_none_button',
   array(
      'label'       => __( 'Background Color Button','pepe-lite' ),
      'section'     => 'pepe_search_not_found_section',
      'priority'    => 60,
      'show_opacity'=> true, 
)) );

// Color Button
$wp_customize->add_setting( 'pepe_color_pepe_content_none_button',
   array(
      'default'          => '#3a3a3a',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_pepe_content_none_button',
   array(
      'label'       => __( 'Color Button','pepe-lite' ),
      'section'     => 'pepe_search_not_found_section',
      'priority'    => 70,
      'show_opacity'=> true,  
)) );

/* Pages
========================================================================== */

/* Settings
============= */

// Notice
$wp_customize->add_setting( 'pepe_settings_page_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_settings_page_notice',
   array(
      'label'      => __( 'General Settings','pepe-lite'),
      'description'=> __('The page has 2 templates: Default template and Page no sidebar. You can select them in the dashboard in Page Attributes!','pepe-lite'),
      'section'    => 'pepe_page_section',
      'priority'   => 1,
)) );

// Margin top Sidebar
$wp_customize->add_setting( 'pepe_margin_top_sidebar_page',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_margin_top_sidebar_page',
   array(
      'label'       => esc_html__( 'Margin Top Sidebar (px Unit)','pepe-lite' ),
      'section'     => 'pepe_page_section',
      'priority'    => 2,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 180, 
                      'step' => 1, 
),)) );

$wp_customize->selective_refresh->add_partial( 'pepe_show_sidebar_sticky_page',
   array(
      'selector' => '.sit-main-part',
));


// Enable or disable sticky sidebar
$wp_customize->add_setting( 'pepe_show_sidebar_mobile_pages',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize,'pepe_show_sidebar_mobile_pages',
   array(
      'label'   => __('Enable or disable sidebar in Mobile Devices', 'pepe-lite' ),
      'section' => 'pepe_page_section',
      'priority'=> 4,
)) );

// Notice
$wp_customize->add_setting( 'pepe_page_p_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_page_p_notice',
   array(
      'label'    => __( 'Pages','pepe-lite'),
      'section'  => 'pepe_page_section',
      'priority' => 5,
)) );

// Padding content
$wp_customize->add_setting( 'pepe_padding_content_page',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_padding_content_page',
   array(
      'label'       => esc_html__( 'Padding Content (px Unit)','pepe-lite' ),
      'section'     => 'pepe_page_section',
      'priority'    => 40,
      'input_attrs' => array(
                      'min'  => 0,
                      'max'  => 50, 
                      'step' => 1, 
),)) );

// Color Text
$wp_customize->add_setting( 'pepe_background_color_content_page',
   array(
      'default'          => 'rgba(255,255,255,0)',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_content_page',
   array(
      'label'       => __( 'Background color Content Page','pepe-lite' ),
      'section'     => 'pepe_page_section',
      'priority'    => 50,
      'show_opacity'=> true, 
)) );