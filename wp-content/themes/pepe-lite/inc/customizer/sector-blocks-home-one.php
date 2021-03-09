<?php
/**
* sector-blocks-home-one.php
*
* @author    Franchi Design
* @package   pepe lite
*/

/**
 * Controlls for Sector Card Large
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


/* Sector Pepe Block One
========================================================================== */

// Enable/Disable Block
$wp_customize->add_setting( 'pepe_show_block_one',
   array(
      'default'           => 0,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_block_one',
   array(
      'label'   => __( 'Enable or disable this block', 'pepe-lite' ),
      'section' => 'pepe_blocks_home_one',
      'priority'=> 1,
)) );


// Layout
$wp_customize->add_setting( 'pepe_layout_block_one_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_layout_block_one_notice',
   array(
      'label'    => __( 'Layout','pepe-lite'),
      'section'  => 'pepe_blocks_home_one',
      'priority' => 2,
)) );

//Header Block Top
$wp_customize->add_setting('pepe_layout_block_one',
   array(
      'default'           => 'one',
      'transport'         => 'refresh',
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Image_Radio_Button_Custom_Control( 
   $wp_customize, 'pepe_layout_block_one',
   array(
      'label'       => __('Block Two Layout','pepe-lite'),
      'description' => esc_html__('Choose the Layout for the Block Two','pepe-lite'),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 3,
      'choices'     => array(
              'one'  => array(  
                           'image' => trailingslashit(get_template_directory_uri()).'inc/customizer/images/card2.png', 
                            'name' => __('Layout 1','pepe-lite')),
              'two'  => array(
                           'image' => trailingslashit( get_template_directory_uri()).'inc/customizer/images/card4.png',
                           'name' => __('Layout 2','pepe-lite')),
              'three'  => array(
                           'image' => trailingslashit( get_template_directory_uri()).'inc/customizer/images/card3.png',
                           'name' => __('Layout 3','pepe-lite')),
              'four'   => array(
                           'image' => trailingslashit( get_template_directory_uri()).'inc/customizer/images/cat-1.png',
                           'name' => __('Layout 4','pepe-lite')),
              'five'   => array(
                           'image' => trailingslashit( get_template_directory_uri()).'inc/customizer/images/cat-4.png',
                           'name' => __('Layout 5','pepe-lite')),
              'six'   => array(
                           'image' => trailingslashit( get_template_directory_uri()).'inc/customizer/images/cat-2.png',
                           'name' => __('Layout 6','pepe-lite')),
))) );

//Section Block Two
$wp_customize->add_setting('pepe_section_block_one',
   array(
      'default'           => 'one',
      'transport'         => 'refresh',
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Image_Radio_Button_Custom_Control( 
   $wp_customize, 'pepe_section_block_one',
   array(
      'label'       => __('Order Sections','pepe-lite'),
      'description' => esc_html__('Choose the order for Sections','pepe-lite'),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 4,
      'choices'     => array(
              'one'  => array(  
                           'image' => trailingslashit(get_template_directory_uri()).'inc/customizer/images/cat-art-1.png', 
                            'name' => __('Order 1','pepe-lite')),
              'two'  => array(
                           'image' => trailingslashit( get_template_directory_uri()).'inc/customizer/images/sect-block-one.png',
                           'name' => __('Order 2','pepe-lite')),
))) );

// Block Notice settings
$wp_customize->add_setting( 'pepe_block_1_notice_settings',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_block_1_notice_settings',
   array(
      'label'    => __( 'General Settings','pepe-lite'),
      'description'=> __('This block has 2 Sidebar Widget Areas!','pepe-lite'),
      'section'  => 'pepe_blocks_home_one',
      'priority' => 5,
)) );

// Margin Top Pepe One
$wp_customize->add_setting( 'pepe_margin_top_block_pepe_one',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_margin_top_block_pepe_one',
   array(
      'label'       => esc_html__( 'Margin Top (em Unit)','pepe-lite' ),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 6,
      'input_attrs' => array(
                      'min'  => -5,
                      'max'  => 15, 
                      'step' => 1, 
),)) );

// Margin Bottom Pepe One
$wp_customize->add_setting( 'pepe_margin_bottom_block_pepe_one',
   array(
      'default'           => 0,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_sanitize_integer'
));
 
$wp_customize->add_control( new Pepe_lite_Slider_Custom_Control( $wp_customize, 'pepe_margin_bottom_block_pepe_one',
   array(
      'label'       => esc_html__( 'Margin Bottom (em Unit)','pepe-lite' ),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 7,
      'input_attrs' => array(
                      'min'  => -5,
                      'max'  => 15, 
                      'step' => 1, 
),)) );

// Show Padding Content Pepe One
$wp_customize->add_setting( 'pepe_enable_padding_content_pepe_sect_one',
   array(
      'default'           => 0,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_enable_padding_content_pepe_sect_one',
   array(
      'label'      => __('Enable or disable padding 0 content', 'pepe-lite' ),
      'description'=> __('This setting is recommended if you have set the content on the right or left!','pepe-lite'),
      'section'    => 'pepe_blocks_home_one',
      'priority'   => 8,
)) );

// Enable or disable Sticky Sidebar
$wp_customize->add_setting( 'pepe_show_sid_stiky_sect_one',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_sid_stiky_sect_one',
   array(
      'label'   => __( 'Enable or disable Sticky Sidebar', 'pepe-lite' ),
      'section' => 'pepe_blocks_home_one',
      'priority'=> 9,
)) );

// Enable or disable Sticky Sidebar
$wp_customize->add_setting( 'pepe_show_sid_mobile_sect_one',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_sid_mobile_sect_one',
   array(
      'label'   => __( 'Enable or disable Sidebar in Mobile Devices', 'pepe-lite' ),
      'section' => 'pepe_blocks_home_one',
      'priority'=> 10,
)) );

// Block Notice
$wp_customize->add_setting( 'pepe_block_1_notice',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_block_1_notice',
   array(
      'label'    => __( 'Great Post','pepe-lite'),
      'section'  => 'pepe_blocks_home_one',
      'priority' => 11, 
)) );

// Post Pepe One
$wp_customize->add_setting( 'pepe_post_sect_one',
   array(
      'sanitize_callback' => 'absint',
));

$wp_customize->add_control( new Pepe_lite_Dropdown_Posts_Custom_Control( $wp_customize, 'pepe_post_sect_one',
   array(
      'label'           => __('Select Posts','pepe-lite' ),
      'section'         => 'pepe_blocks_home_one',
      'priority'        => 12,
      'input_attrs'     => array(
         'posts_per_page' => -1,
         'orderby'        => 'name',
			'order'          => 'ASC',
), )) );

// Show Category Pepe One
$wp_customize->add_setting( 'pepe_show_cat_pepe_sect_one',
   array(
      'default'           => 1,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_cat_pepe_sect_one',
   array(
      'label'   => __( 'Show Category', 'pepe-lite' ),
      'section' => 'pepe_blocks_home_one',
      'priority'=> 20,
)) );

$wp_customize->selective_refresh->add_partial( 'pepe_show_cat_pepe_sect_one',
   array(
      'selector' => '.pepe-section-one',
));

// Show Comments Pepe One
$wp_customize->add_setting( 'pepe_show_comments_pepe_sect_one',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_comments_pepe_sect_one',
   array(
      'label'      => __( 'Show Comments', 'pepe-lite' ),
      'section'    => 'pepe_blocks_home_one',
      'priority'   => 30,
)) );


// Show Icons Pepe One
$wp_customize->add_setting( 'pepe_show_icons_pepe_sect_one',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_icons_pepe_sect_one',
   array(
      'label'      => __( 'Show Icons', 'pepe-lite' ),
      'description'=>__('Show icons by author and by date','pepe-lite'),
      'section'    => 'pepe_blocks_home_one',
      'priority'   => 40,
)) );

// Background Color Great Post
$wp_customize->add_setting( 'pepe_baclground_color_img_sect_one',
   array(
      'default'          => '#3a3a3a',
      'transport'        =>'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_baclground_color_img_sect_one',
   array(
      'label'       => __('Background Color Great Post','pepe-lite' ),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 41,
      'show_opacity'=> true, 
)) );

// Color Great Post
$wp_customize->add_setting( 'pepe_color_img_sect_one',
   array(
      'default'          => '#fff',
      'transport'        =>'postMessage',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_img_sect_one',
   array(
      'label'       => __('Color Great Post','pepe-lite' ),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 42,
      'show_opacity'=> true, 
)) );

// Badge Background Color Category
$wp_customize->add_setting( 'pepe_color_badge_category_sect_one',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_badge_category_sect_one',
   array(
      'label'       => __('Category Badge Background Color','pepe-lite' ),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 43,
      'show_opacity'=> true, 
)) );

// Badge Color Category
$wp_customize->add_setting( 'pepe_color_badge_category_sect_one_color',
   array(
      'default'          => '#3a3a3a',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_badge_category_sect_one_color',
   array(
      'label'       => __('Category Badge Color','pepe-lite' ),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 44,
      'show_opacity'=> true, 
)) );

// Badge Backgroudn Color Comments
$wp_customize->add_setting( 'pepe_color_badge_comment_sect_one',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_badge_comment_sect_one',
   array(
      'label'       => __('Comments Badge Background Color','pepe-lite' ),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 45,
      'show_opacity'=> true, 
)) );

// Badge Color Comments
$wp_customize->add_setting( 'pepe_color_badge_comment_sect_one_color',
   array(
      'default'          => '#3a3a3a',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_badge_comment_sect_one_color',
   array(
      'label'       => __('Comments Badge Color','pepe-lite' ),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 46,
      'show_opacity'=> true, 
)) );

// Block Notice
$wp_customize->add_setting( 'pepe_block_1_notice_post',
   array(
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Simple_Notice_Custom_control( $wp_customize, 'pepe_block_1_notice_post',
   array(
      'label'    => __( 'Small posts','pepe-lite'),
      'section'  => 'pepe_blocks_home_one',
      'priority' => 70,
)) );

// Category Pepe Two
$wp_customize->add_setting('pepe_category_sect_two',
	  array(
      'sanitize_callback' => 'pepe_lite_sanitize_category_select',
));

$wp_customize->add_control(new Pepe_lite_Customize_Category_Control($wp_customize,'pepe_category_sect_two',
		array(
            'label'       => __('Select Category for post for Small posts','pepe-lite'),
            'description' => __('The last post of the selected category will be displayed','pepe-lite'),
			   'settings'    => 'pepe_category_sect_two',
            'section'     => 'pepe_blocks_home_one',
			   'priority'    => 80,
)));

// Number Post
$wp_customize->add_setting('pepe_num_post_sect_two', array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	'default'           => 4,
) );

$wp_customize->add_control('pepe_num_post_sect_two', array(
	'type'        => 'number',
	'section'     => 'pepe_blocks_home_one',
	'priority'    => 90,
	'label'       => __('Number Post','pepe-lite'),
	'description' => __('Enter the number of posts you want to appear.Select -1 to show all posts!','pepe-lite'),
) );

$wp_customize->selective_refresh->add_partial( 'pepe_num_post_sect_two',
   array(
      'selector' => '.pepe-row-sect-pepe-two .pepe-partial-sect-two',
));

// Title Sect Two
$wp_customize->add_setting( 'pepe_title_sect_two',array(
	'capability'        => 'edit_theme_options',
	'default'           => __('MOST READ','pepe-lite'),
	'transport'         => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
));

$wp_customize->add_control( 'pepe_title_sect_two', array(
	'type'    => 'text',
   'section' => 'pepe_blocks_home_one',
	'priority'=> 100,
   'label'   => __('Title for Small posts','pepe-lite'),
) );

// Style Title
$wp_customize->add_setting('pepe_style_sect_two',
   array(
      'default'           => 'one',
      'transport'         => 'refresh',
      'sanitize_callback' => 'pepe_lite_text_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Image_Radio_Button_Custom_Control( $wp_customize, 'pepe_style_sect_two',
   array(
      'label'       => __('Title Style','pepe-lite'),
      'description' => esc_html__('Choose the Style for Title','pepe-lite'),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 105,
      'choices'     => array(
                    'one' => array(  
                           'image' => trailingslashit(get_template_directory_uri()).'inc/customizer/images/sect-two-one.png', 
                            'name' => __('One','pepe-lite')),
                    'two' => array(
                           'image' => trailingslashit( get_template_directory_uri()).'inc/customizer/images/sect-two-two.png',
                            'name' => __('Two','pepe-lite')),
))) );

// Background Color Title
$wp_customize->add_setting( 'pepe_background_color_pepe_title_sect_two',
   array(
      'default'          => '#F5067E',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_background_color_pepe_title_sect_two',
   array(
      'label'       => __('Background Color Title','pepe-lite' ),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 106,
      'show_opacity'=> true, 
)) );

// Color Title
$wp_customize->add_setting( 'pepe_color_pepe_title_sect_two',
   array(
      'default'          => '#fff',
      'sanitize_callback'=> 'pepe_lite_hex_rgba_sanitization'
));
 
$wp_customize->add_control( new Pepe_lite_Customize_Alpha_Color_Control( $wp_customize, 'pepe_color_pepe_title_sect_two',
   array(
      'label'       => __('Color Title ( Just for style one)','pepe-lite' ),
      'section'     => 'pepe_blocks_home_one',
      'priority'    => 107,
      'show_opacity'=> true, 
)) );

// Show Comments Pepe Two
$wp_customize->add_setting( 'pepe_show_comments_pepe_sect_two',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_comments_pepe_sect_two',
   array(
      'label'      => __( 'Show Comments for Small posts', 'pepe-lite' ),
      'section'    => 'pepe_blocks_home_one',
      'priority'   => 110,
)) );


// Show Date Pepe Two
$wp_customize->add_setting( 'pepe_show_date_pepe_sect_two',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_date_pepe_sect_two',
   array(
      'label'      => __( 'Show Date for Small posts', 'pepe-lite' ),
      'section'    => 'pepe_blocks_home_one',
      'priority'   => 120,
)) );

// Show Author Pepe Two
$wp_customize->add_setting( 'pepe_show_author_pepe_sect_two',
   array(
      'default'           => 1,
      'sanitize_callback' => 'pepe_lite_switch_sanitization'
));
$wp_customize->add_control( new Pepe_lite_Toggle_Switch_Custom_control( $wp_customize, 'pepe_show_author_pepe_sect_two',
   array(
      'label'      => __( 'Show Author for Small posts', 'pepe-lite' ),
      'section'    => 'pepe_blocks_home_one',
      'priority'   => 130,
)) );