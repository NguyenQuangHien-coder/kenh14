<?php
/**
* sector-other-settings.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

/**
 * Controlls for Sector Card Large
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


/* Back To Top
========================================================================== */

// Enable or disable Back to Top
$wp_customize->add_setting( 'pepe_lite_enable_totop',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_totop',
   array(
      'label'      => __( 'Enable or disable Back to Top', 'pepe-lite' ),
      'section'    => 'pepe_totop_section',
      'priority'   => 10,
)) );

// Enable or disable Back to Top
$wp_customize->add_setting( 'pepe_enable_totop_responsive',
   array(
      'default'           => 0,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_enable_totop_responsive',
   array(
      'label'      => __( 'Enable or disable Back to Top in Mobile Devices', 'pepe-lite' ),
      'section'    => 'pepe_totop_section',
      'active_callback'=> 'pepe_lite_enable_totop',
      'priority'   => 30,
)) );

/* Social
========================================================================== */

// Facebook
$wp_customize->add_setting( 'pepe_lite_enable_facebook_social',
array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization'
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_facebook_social',
array(
	'label' => __( 'Enable/Disable Facebook.','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'priority'=> 10,
)) );

// Url Facebook
$wp_customize->add_setting( 'pepe_link_facebook_social',
array(
	'default' => '',
	'transport' => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_facebook_social',
array(
	'label' => __( 'Link Facebook','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'active_callback' => 'pepe_lite_enable_facebook_social',
	'type' => 'url',
	'priority'=> 20,
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'style' => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

// Twitter
$wp_customize->add_setting( 'pepe_lite_enable_twitter_social',
  array(
   'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_twitter_social',
  array(
	'label' => __( 'Enable/Disable Twitter.','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'priority'=> 30,
)) );

// Url Twitter
$wp_customize->add_setting( 'pepe_link_twitter_social',
  array(
	'default' => '',
	'transport' => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_twitter_social',
array(
	'label' => __( 'Link Twitter','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'active_callback' => 'pepe_lite_enable_twitter_social',
	'priority'=> 40,
	'type' => 'url',
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'style' => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

// Dribbble
$wp_customize->add_setting( 'pepe_lite_enable_dribbble_social',
  array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_dribbble_social',
  array(
	'label' => __( 'Enable/Disable Dribbble.','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'priority'=> 70,
)) );

// Url Dribbble
$wp_customize->add_setting( 'pepe_link_dribbble_social',
  array(
	'default' => '',
	'transport' => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_dribbble_social',
   array(
	'label' => __( 'Link Dribbble','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'active_callback' => 'pepe_lite_enable_dribbble_social',
	'priority'=> 80,
	'type' => 'url',
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'style' => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

// Tumblr
$wp_customize->add_setting( 'pepe_lite_enable_tumblr_social',
  array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_tumblr_social',
  array(
	'label' => __( 'Enable/Disable Tumblr.','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'priority'=> 90,
)) );

// Url Tumblr
$wp_customize->add_setting( 'pepe_link_tumblr_social',
  array(
	'default' => '',
	'transport' => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_tumblr_social',
   array(
	'label' => __( 'Link Tumblr','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'active_callback' => 'pepe_lite_enable_tumblr_social',
	'priority'=> 100,
	'type' => 'url',
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'style' => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

// Instagram
$wp_customize->add_setting( 'pepe_lite_enable_instagram_social',
   array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_instagram_social',
  array(
	'label' => __( 'Enable/Disable Instagram.','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'priority'=> 110,
)) );

// Url Instagram
$wp_customize->add_setting( 'pepe_link_instagram_social',
  array(
	'default' => '',
	'transport' => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_instagram_social',
  array(
	'label' => __( 'Link Instagram','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'active_callback' => 'pepe_lite_enable_instagram_social',
	'priority'=> 120,
	'type' => 'url',
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'style' => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

// Linkedin
$wp_customize->add_setting( 'pepe_lite_enable_linkedin_social',
  array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_linkedin_social',
  array(
	'label' => __( 'Enable/Disable Linkedin.','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'priority'=> 130,
)) );

// Url Linkedin
$wp_customize->add_setting( 'pepe_link_linkedin_social',
  array(
	'default' => '',
	'transport' => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_linkedin_social',
  array(
	'label' => __( 'Link Linkedin','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'active_callback' => 'pepe_lite_enable_linkedin_social',
	'priority'=> 140,
	'type' => 'url',
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'style' => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

// Youtube
$wp_customize->add_setting( 'pepe_lite_enable_youtube_social',
  array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_youtube_social',
  array(
	'label' => __( 'Enable/Disable Youtube.','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'priority'=> 150,
)) );

// Url Youtube
$wp_customize->add_setting( 'pepe_link_youtube_social',
  array(
	'default' => '',
	'transport' => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_youtube_social',
  array(
	'label' => __( 'Link Youtube','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'active_callback' => 'pepe_lite_enable_youtube_social',
	'priority'=> 160,
	'type' => 'url',
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'style' => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

// Pinterest
$wp_customize->add_setting( 'pepe_lite_enable_pinterest_social',
  array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_pinterest_social',
  array(
	'label' => __( 'Enable/Disable Pinterest.','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'priority'=> 170,
)) );

// Url Pinterest
$wp_customize->add_setting( 'pepe_link_pinterest_social',
  array(
	'default' => '',
	'transport' => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_pinterest_social',
array(
	'label' => __( 'Link Pinterest','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'active_callback' => 'pepe_lite_enable_pinterest_social',
	'priority'=> 180,
	'type' => 'url',
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'style' => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

// Flickr
$wp_customize->add_setting( 'pepe_lite_enable_flickr_social',
  array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_flickr_social',
  array(
	'label' => __( 'Enable/Disable Flickr.','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'priority'=> 190,
)) );

// Url Flickr
$wp_customize->add_setting( 'pepe_link_flickr_social',
  array(
	'default' => '',
	'transport' => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_flickr_social',
  array(
	'label' => __( 'Link Flickr','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'active_callback' => 'pepe_lite_enable_flickr_social',
	'priority'=> 200,
	'type' => 'url',
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'style' => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

// Github
$wp_customize->add_setting( 'pepe_lite_enable_github_social',
  array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_lite_enable_github_social',
array(
	'label' => __( 'Enable/Disable Github.','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'priority'=> 210,
)) );

// Url Github
$wp_customize->add_setting( 'pepe_link_github_social',
 array(
	'default' => '',
	'transport' => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( 'pepe_link_github_social',
  array(
	'label' => __( 'Link Github','pepe-lite' ),
	'section' => 'pepe_section_settings_social',
	'active_callback' => 'pepe_lite_enable_github_social',
	'priority'=> 210,
	'type' => 'url',
	'input_attrs' => array(
		'class' => 'my-custom-class',
		'style' => 'border: 1px solid #2885bb',
		'placeholder' => __( 'Enter link...','pepe-lite' ),
), ));

/* Widget
========================================================================== */

// Style Widget
$wp_customize->add_setting('pepe_style_widget',
   array(
      'default'           => 'one',
      'transport'         => 'refresh',
      'sanitize_callback' => 'pepe_lite_radio_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Image_Radio_Button_Custom_Control( $wp_customize, 'pepe_style_widget',
   array(
      'label'       => __('Title Widget','pepe-lite'),
      'description' => esc_html__('Choose the Style for Title Widget','pepe-lite'), 
      'section'     => 'pepe_widget_section',
      'priority'    => 10,
      'choices'     => array(
                    'one' => array(  
                           'image' => trailingslashit(esc_url(get_template_directory_uri())).'inc/customizer/images/widget-1.png', 
                            'name' => __('One','pepe-lite')),
                    'two' => array(
                           'image' => trailingslashit(esc_url( get_template_directory_uri())).'inc/customizer/images/widget-2.png',
                            'name' => __('Two','pepe-lite')),
))) );

// Widget Color Notice
$wp_customize->add_setting( 'pepe_widgewt_color_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_widgewt_color_notice',
   array(
      'label'    => __( 'Widget Color','pepe-lite'),
      'section'  => 'pepe_widget_section',
      'priority' => 11,
)) );

// Archive
$wp_customize->add_setting( 'pepe_color_archive',
   array(
      'default'          => '#05b705',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_archive',
   array(
      'label'       => __('Archive','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 12,
      'show_opacity'=> true, 
)) );

// Audio
$wp_customize->add_setting( 'pepe_color_audio',
   array(
      'default'          => '#1764b7',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_audio',
   array(
      'label'       => __('Audio','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 13,
      'show_opacity'=> true, 
)) );

// Calendar
$wp_customize->add_setting( 'pepe_color_calendar',
   array(
      'default'          => '#ff8100',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_calendar',
   array(
      'label'       => __('Calendar','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 14,
      'show_opacity'=> true, 
)) );

// Html
$wp_customize->add_setting( 'pepe_color_html',
   array(
      'default'          => '#008282',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_html',
   array(
      'label'       => __('Html and Text','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 15,
      'show_opacity'=> true, 
)) );

// Author
$wp_customize->add_setting( 'pepe_color_author',
   array(
      'default'          => '#d700ff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_author',
   array(
      'label'       => __('Author','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 17,
      'show_opacity'=> true, 
)) );

// Category
$wp_customize->add_setting( 'pepe_color_category',
   array(
      'default'          => '#ec1b1b',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_category',
   array(
      'label'       => __('Category','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 18,
      'show_opacity'=> true, 
)) );

// Pepe Post Type One
$wp_customize->add_setting( 'pepe_color_pepe_post_one',
   array(
      'default'          => '#F5067E',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_pepe_post_one',
   array(
      'label'       => __('Pepe Post Type One','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 20,
      'show_opacity'=> true, 
)) );

// Social
$wp_customize->add_setting( 'pepe_color_social',
   array(
      'default'          => '#21a1f1',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_social',
   array(
      'label'       => __('Social','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 22,
      'show_opacity'=> true, 
)) );

// One Color Social
$wp_customize->add_setting( 'pepe_color_social_one',
  array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_color_social_one',
array(
   'label' => __( 'One Color Social','pepe-lite' ),
   'description'=> __('Enable or disable a single color or the original media icon social colors','pepe-lite'),
	'section' => 'pepe_widget_section',
	'priority'=> 23,
)) );

// Statistics
$wp_customize->add_setting( 'pepe_color_statistic',
   array(
      'default'          => '#4c6977',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_statistic',
   array(
      'label'       => __('Statistics','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 24,
      'show_opacity'=> true, 
)) );


// Video
$wp_customize->add_setting( 'pepe_color_video',
   array(
      'default'          => '#ec1b1b',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_video',
   array(
      'label'       => __('Video','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 25,
      'show_opacity'=> true, 
)) );

// Gallery
$wp_customize->add_setting( 'pepe_color_gallery',
   array(
      'default'          => '#ec1b1b',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_gallery',
   array(
      'label'       => __('Gallery','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 26,
      'show_opacity'=> true, 
)) );

// Image
$wp_customize->add_setting( 'pepe_color_image',
   array(
      'default'          => '#ec1b1b',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_image',
   array(
      'label'       => __('Image','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 27,
      'show_opacity'=> true, 
)) );

// Meta
$wp_customize->add_setting( 'pepe_color_meta',
   array(
      'default'          => '#ff8100',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_meta',
   array(
      'label'       => __('Meta','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 28,
      'show_opacity'=> true, 
)) );

// Navigation Menu
$wp_customize->add_setting( 'pepe_color_menunav',
   array(
      'default'          => '#ff8100',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_menunav',
   array(
      'label'       => __('Navigation Menu','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 29,
      'show_opacity'=> true, 
)) );

// Pages
$wp_customize->add_setting( 'pepe_color_pages',
   array(
      'default'          => '#ec1b1b',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_pages',
   array(
      'label'       => __('Pages','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 30,
      'show_opacity'=> true, 
)) );

// Recent Comments
$wp_customize->add_setting( 'pepe_color_comments',
   array(
      'default'          => '#F5067E',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_comments',
   array(
      'label'       => __('Recent Comments','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 31,
      'show_opacity'=> true, 
)) );

// Recent Post
$wp_customize->add_setting( 'pepe_color_post',
   array(
      'default'          => '#F5067E',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_post',
   array(
      'label'       => __('Recent Post','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 32,
      'show_opacity'=> true, 
)) );

// Search
$wp_customize->add_setting( 'pepe_color_search',
   array(
      'default'          => '#F5067E',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_search',
   array(
      'label'       => __('Search','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 33,
      'show_opacity'=> true, 
)) );

// Enable or disable title Search
$wp_customize->add_setting( 'pepe_color_title_search',
  array(
	'default' => 0,
	'transport' => 'refresh',
	'sanitize_callback' => 'pepe_lite_switch_sanitization',
));

$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_color_title_search',
array(
   'label' => __( 'Enable or disable title Search','pepe-lite' ),
   'description'=> __('If you have not entered the text for the title of the Widget Search, you must disable the title collection!','pepe-lite'),
	'section' => 'pepe_widget_section',
	'priority'=> 34,
)) );

// Tag
$wp_customize->add_setting( 'pepe_color_tag',
   array(
      'default'          => '#05b705',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_tag',
   array(
      'label'       => __('Tag Cloud','pepe-lite' ),
      'section'     => 'pepe_widget_section',
      'priority'    => 35,
      'show_opacity'=> true, 
)) );

// Widget
$wp_customize->add_setting( 'pepe_widget_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_Control_Widget( $wp_customize, 'pepe_widget_notice',
   array(
	  'label'           => __( 'Widget Custom Color','pepe-lite'),
	  'section'         => 'pepe_widget_section',
     'priority'        => 610,
)) );

// General Color
$wp_customize->add_setting( 'pepe_widget_general_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_widget_general_notice',
   array(
	  'label'           => __( 'General Color','pepe-lite'),
	  'section'         => 'pepe_widget_section',
     'priority'        => 620,
)) );

// Color Title Style One
$wp_customize->add_setting( 'pepe_color_widget_title_style_one',
   array(
      'default'          => '#fff',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_widget_title_style_one',
   array(
      'label'           => __('Color Title Style One','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 630,
      'show_opacity'    => true, 
)) );

// Color Content
$wp_customize->add_setting( 'pepe_color_widget_content',
   array(
      'default'          => '#3a3a3a',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_widget_content',
   array(
      'label'           => __('Color Content','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 640,
      'show_opacity'    => true, 
)) );

// Archive
$wp_customize->add_setting( 'pepe_widget_archive_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_widget_archive_notice',
   array(
	  'label'           => __( 'Archive','pepe-lite'),
	  'section'         => 'pepe_widget_section',
     'priority'        => 650,
)) );

// Color Number
$wp_customize->add_setting( 'pepe_color_widget_number_archive',
   array(
      'default'          => '#fff',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_widget_number_archive',
   array(
      'label'           => __('Color Number','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 660,
      'show_opacity'    => true, 
)) );

// Background Color Number
$wp_customize->add_setting( 'pepe_background_color_widget_number_archive',
   array(
      'default'          => '#3a3a3a',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_widget_number_archive',
   array(
      'label'           => __('Background Color Number','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 670,
      'show_opacity'    => true, 
)) );

// Calendar
$wp_customize->add_setting( 'pepe_widget_calendar_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_widget_calendar_notice',
   array(
	  'label'           => __( 'Calendar','pepe-lite'),
	  'section'         => 'pepe_widget_section',
     'priority'        => 680,
)) );

// Color Calendar
$wp_customize->add_setting( 'pepe_color_widget_calendar',
   array(
      'default'          => '#aaa',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_widget_calendar',
   array(
      'label'           => __('Color Calendar','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 690,
      'show_opacity'    => true, 
)) );

// Background Color Calendar
$wp_customize->add_setting( 'pepe_background_color_widget_calendar',
   array(
      'default'          => '#f5f5f5',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_widget_calendar',
   array(
      'label'           => __('Background Color Calendar','pepe-lite' ),
      'description'     => __('Recommended: set transparency!','pepe-lite'),
	   'section'         => 'pepe_widget_section',
      'priority'        => 700,
      'show_opacity'    => true, 
)) );

// Background Color Hover Calendar
$wp_customize->add_setting( 'pepe_background_color_hover_widget_calendar',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_hover_widget_calendar',
   array(
      'label'           => __('Background Color Hover Calendar','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 710,
      'show_opacity'    => true, 
)) );

// Category
$wp_customize->add_setting( 'pepe_widget_category_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_widget_category_notice',
   array(
	  'label'           => __( 'Category','pepe-lite'),
	  'section'         => 'pepe_widget_section',
     'priority'        => 720,
)) );

// Color Number
$wp_customize->add_setting( 'pepe_color_widget_number_category',
   array(
      'default'          => '#fff',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_widget_number_category',
   array(
      'label'           => __('Color Number','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 730,
      'show_opacity'    => true, 
)) );

// Background Color Number
$wp_customize->add_setting( 'pepe_background_color_widget_number_category',
   array(
      'default'          => '#3a3a3a',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_widget_number_category',
   array(
      'label'           => __('Background Color Number','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 740,
      'show_opacity'    => true, 
)) );

// Social
$wp_customize->add_setting( 'pepe_widget_social_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_widget_social_notice',
   array(
	  'label'           => __( 'Social','pepe-lite'),
	  'section'         => 'pepe_widget_section',
     'priority'        => 750,
)) );

// Background Color Number
$wp_customize->add_setting( 'pepe_background_color_widget_social_uni',
   array(
      'default'          => '#3a3a3a',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_widget_social_uni',
   array(
      'label'           => __('Background Color Social','pepe-lite' ),
      'description'     => __('This check only works if you have chosen the single color for Social','pepe-lite'),
	   'section'         => 'pepe_widget_section',
      'priority'        => 760,
      'show_opacity'    => true, 
)) );

// Search
$wp_customize->add_setting( 'pepe_widget_search_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_widget_search_notice',
   array(
	  'label'           => __( 'Search','pepe-lite'),
	  'section'         => 'pepe_widget_section',
     'priority'        => 770,
)) );

// Border Color Button
$wp_customize->add_setting( 'pepe_border_color_button_widget_search',
   array(
      'default'          => '#3a3a3a',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_border_color_button_widget_search',
   array(
      'label'           => __('Border Color Button','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 780,
      'show_opacity'    => true, 
)) );

// Color Button
$wp_customize->add_setting( 'pepe_color_button_widget_search',
   array(
      'default'          => '#3a3a3a',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_button_widget_search',
   array(
      'label'           => __('Color Button','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 790,
      'show_opacity'    => true, 
)) );

// Tag
$wp_customize->add_setting( 'pepe_widget_tag_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_widget_tag_notice',
   array(
	  'label'           => __( 'Tag','pepe-lite'),
	  'section'         => 'pepe_widget_section',
     'priority'        => 800,
)) );

// Background Color Tag
$wp_customize->add_setting( 'pepe_background_color_tag_widget',
   array(
      'default'          => '#3a3a3a',
      'transport'        => 'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_tag_widget',
   array(
      'label'           => __('Background Color Tag','pepe-lite' ),
	   'section'         => 'pepe_widget_section',
      'priority'        => 810,
      'show_opacity'    => true, 
)) );




