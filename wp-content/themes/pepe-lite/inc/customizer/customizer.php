<?php
/**
* customizer.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

/* TABLE OF CONTENT

- Controlos Default
	- Blogname
	- Description
	- Headre text Color
- Change default controls
- Panel
	- Add Panel General Option
	- Add Panel Header
	- Add Panel Body
	- Add Panel Block Header
	- Add Panel Pepe Three
	- Add Panel Pepe Blocks
	- Add Panel Blog
	- Add Panel Footer
	- Add Panel Other Settings
	
- Section
	- Add Section Body Layout
	- Add Section Block Top 
	- Add Section Block Logo
	- Add Section Block Menu
	- Add Section Block News
	- Add Section Slider
	- Add Section Block One
	- Add Section Block Four
	- Add Section Post
	- Add Section Archive
	- Add Section Search Page
	- Add Section Search Page not Found
	- Add Section Page
	- Add Section Settings Footer
	- Add Section Widget Area Footer
	- Add Section Info Footer
	- Add Section Back To Top
	- Add Section Widget
	- Add Section Menu Responsive
	
- Sector
	- Sector Header
	- Sector Slider 
	- Sector Bloack Home One
	- Sector Bloack Home Four
	- Sector Blog
	- Sector Footer
	- Sector General Settings
	- Sector Other Settings
	_ Sector Colors
	
- Render Callback	
- Preview Live
   
*/

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

/* Controlos Default
========================================================================== */

function pepe_lite_customize_register( $wp_customize ) {
	// Blogname 
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	// Description 
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	// Header text Color 
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'pepe_lite_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'pepe_lite_customize_partial_blogdescription',
		) );
	}

/* Change default controls
========================================================================== */

$wp_customize->get_control('custom_logo')         ->priority = 30; 
$wp_customize->get_control('blogname')            ->priority = 50; 
$wp_customize->get_control('blogdescription')     ->priority = 60;  
$wp_customize->get_control('display_header_text') ->priority = 70;
$wp_customize->get_control('site_icon')           ->priority = 200;

/* Panel
========================================================================== */

// Add Panel General Option
$pepeGeneraloption = new Pepe_lite_WP_Customize_Panel( 
	$wp_customize, 'pepe_options_panel', array(
	'title'    => __('General Option','pepe-lite'),
	'priority' => 10,
));

$wp_customize->add_panel( $pepeGeneraloption );

// Add Panel Header
$pepeHeader = new Pepe_lite_WP_Customize_Panel( 
	$wp_customize, 'pepe_header', array(
	'title'    => __('Header','pepe-lite'),
	'priority' => 10,
	'panel'    => 'pepe_options_panel',
));

$wp_customize->add_panel( $pepeHeader );

// Add Panel Body
$pepeBody = new Pepe_lite_WP_Customize_Panel( 
	$wp_customize, 'pepe_body', array(
	'title'    => __('Body','pepe-lite'),
	'priority' => 11,
	'panel'    => 'pepe_options_panel',
));

$wp_customize->add_panel( $pepeBody );

// Add Panel Block Header
$pepeBlock = new Pepe_lite_WP_Customize_Panel( 
	$wp_customize, 'block_header', array(
	'title'    => __('Blocks','pepe-lite'),
	'priority' => 10,
	'panel'    => 'pepe_header',
));

$wp_customize->add_panel( $pepeBlock );

// Add Panel Block Body
$pepeBlocks = new Pepe_lite_WP_Customize_Panel( 
	$wp_customize, 'pepe_blocks', array(
	'title'    => __('Blocks','pepe-lite'),
	'priority' => 20,
	'panel'    => 'pepe_body',
));

$wp_customize->add_panel( $pepeBlocks );

// Add Panel Footer
$pepeFooter = new Pepe_lite_WP_Customize_Panel( 
	$wp_customize, 'pepe_footer', array(
	'title'    => __('Footer','pepe-lite'),
	'priority' => 60,
	'panel'    => 'pepe_options_panel',
));

$wp_customize->add_panel( $pepeFooter );

// Add Panel Blog
$pepeBlog = new Pepe_lite_WP_Customize_Panel( 
	$wp_customize, 'pepe_blog', array(
	'title'    => __('Blog','pepe-lite'),
	'priority' => 70,
	'panel'    => 'pepe_options_panel',
));

$wp_customize->add_panel( $pepeBlog );

// Add Panel Other Settings
$pepeOthersettings = new Pepe_lite_WP_Customize_Panel( 
	$wp_customize, 'pepe_other_settings', array(
	'title'    => __('Other Settings','pepe-lite'),
	'priority' => 80,
	'panel'    => 'pepe_options_panel',
));

$wp_customize->add_panel( $pepeOthersettings );


/* Section
========================================================================== */

// Add Section Layout Body
$wp_customize->add_section( 'pepe_general_settings', array(
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Layout', 'pepe-lite' ),
	'panel'      => 'pepe_body',
) );

// Add Section Block Top 
$wp_customize->add_section( 'pepe_blocks_top_header_options', array(
	'priority'   => 20,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Block Top', 'pepe-lite' ),
	'panel'      => 'block_header',
) );

// Add Section Block Logo
$wp_customize->add_section( 'title_tagline', array(
	'priority'   => 30,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Block Logo', 'pepe-lite' ),
	'panel'      => 'block_header',
) );

// Add Section Block Menu
$wp_customize->add_section( 'pepe_blocks_menu_header_options', array(
	'priority'   => 40,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Block Menu', 'pepe-lite' ),
	'panel'      => 'block_header',
) );

// Add Section Block News
$wp_customize->add_section( 'pepe_blocks_news_header_options', array(
	'priority'   => 50,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Block News', 'pepe-lite' ),
	'panel'      => 'block_header',
) );

// Add Section Slider
$wp_customize->add_section( 'pepe_section_slider_options', array(
	'priority'   => 21,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Block Slider with Tab', 'pepe-lite' ),
	'panel'      => 'pepe_blocks',
) );


// Add Section Block One
$wp_customize->add_section( 'pepe_blocks_home_zero', array(
	'priority'   => 25,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Block One', 'pepe-lite' ),
	'panel'      => 'pepe_blocks',
) );

// Add Section Block Two
$wp_customize->add_section( 'pepe_blocks_home_one', array(
	'priority'   => 30,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Block Two', 'pepe-lite' ),
	'panel'      => 'pepe_blocks',
) );

// Add Section Block Four
$wp_customize->add_section( 'pepe_blocks_home_four', array(
	'priority'   => 50,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Block Three', 'pepe-lite' ),
	'panel'      => 'pepe_blocks',
) );

// Add Section Header Image
$wp_customize->add_section( 'header_image', array(
	'priority'   => 30,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Header Image', 'pepe-lite' ),
	'panel'      => 'pepe_header',
) );

// Add Section Post
$wp_customize->add_section( 'pepe_post_section', array(
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Post', 'pepe-lite' ),
	'panel'      => 'pepe_blog',
) );

// Add Section Archive
$wp_customize->add_section( 'pepe_archive_section', array(
	'priority'   => 20,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Category', 'pepe-lite' ),
	'panel'      => 'pepe_blog',
) );

// Add Section Search Page
$wp_customize->add_section( 'pepe_search_section', array(
	'priority'   => 30,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Search Page', 'pepe-lite' ),
	'panel'      => 'pepe_blog',
) );

// Add Section Search Page not Found
$wp_customize->add_section( 'pepe_search_not_found_section', array(
	'priority'   => 40,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Search Page not Found', 'pepe-lite' ),
	'panel'      => 'pepe_blog',
) );

// Add Section Pages
$wp_customize->add_section( 'pepe_page_section', array(
	'priority'   => 60,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Pages', 'pepe-lite' ),
	'panel'      => 'pepe_blog',
) );

// Add Section Footer General Settings
$wp_customize->add_section( 'pepe_footer_settings', array(
	'priority'   => 5,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'General Settings', 'pepe-lite' ),
	'panel'      => 'pepe_footer',
) );

// Add Section Footer Layout
$wp_customize->add_section( 'pepe_footer_layout', array(
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Widget Area', 'pepe-lite' ),
	'panel'      => 'pepe_footer',
) );

// Add Section Footer Info
$wp_customize->add_section( 'pepe_footer_info', array(
	'priority'   => 20,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Footer Info', 'pepe-lite' ),
	'panel'      => 'pepe_footer',
) );

// Add Section Back To Top
$wp_customize->add_section( 'pepe_totop_section', array(
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Back To Top', 'pepe-lite' ),
	'panel'      => 'pepe_other_settings',
) );

// Add Section Social
$wp_customize->add_section( 'pepe_section_settings_social', array(
	'priority'   => 50,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Social Media', 'pepe-lite' ),
	'panel'      => 'pepe_other_settings',
) );

// Add Section Login
$wp_customize->add_section( 'pepe_login_section', array(
	'priority'   => 60,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Login', 'pepe-lite' ),
	'panel'      => 'pepe_other_settings',
) );

// Add Section Widget
$wp_customize->add_section( 'pepe_widget_section', array(
	'priority'   => 70,
	'capability' => 'edit_theme_options',
	'title'      => esc_html__( 'Widget Style', 'pepe-lite' ),
	'panel'      => 'pepe_other_settings',
) );

/* Sector
========================================================================== */

// Sector Header
require get_template_directory() . '/inc/customizer/sector-header.php';
// Sector Slider
require get_template_directory() . '/inc/customizer/sector-slider.php';
// Sector Pepe Block Home One
require get_template_directory() . '/inc/customizer/sector-blocks-home-zero.php';
// Sector Pepe Block Home Two
require get_template_directory() . '/inc/customizer/sector-blocks-home-one.php';
// Sector Pepe Block Home Four
require get_template_directory() . '/inc/customizer/sector-blocks-home-four.php';
// Sector Blog
require get_template_directory() . '/inc/customizer/sector-blog.php';
// Sector Footer
require get_template_directory() . '/inc/customizer/sector-footer.php';
// Sector General Settings
require get_template_directory() . '/inc/customizer/sector-general-settings.php';
// Sector Other Settings
require get_template_directory() . '/inc/customizer/sector-other-settings.php';
// Sector Colors
require get_template_directory() . '/inc/customizer/sector-colors.php';

}
add_action( 'customize_register', 'pepe_lite_customize_register' ); // End Custom Register


/* Render Callback 
========================================================================== */

function pepe_lite_customize_partial_blogname() {
	bloginfo( 'name' );
}

function pepe_lite_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/* Preview Live
========================================================================== */

function pepe_lite_customize_preview_js() {
	wp_enqueue_script( 'pepe-lite-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'pepe_lite_customize_preview_js' );







