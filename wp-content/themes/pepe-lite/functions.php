<?php
/**
* functions.php
* @author    Franchi Design
* @package   pepe-lite
*/

/* TABLE OF CONTENT

- Define
- Setup Theme
- Content width
- Register widget area
- Enqueue scripts and styles
- Class Navigation Menu
- Menu fallback. Link to the menu editor if that is useful
- Include script and styles for class add Panel
- Include Custom Widget
- List Author with Avatar in Widget
- Max Title Length Widget
- Breadcrumbs
- Comment form defaults
- Pepe Support Page
- Url Admin Upload / Franchi Design
- Notice Admin Area
- Include Plugin
- Custom Excerpt
- Demos Importer
*/

/* Define
========================================================================== */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('pepe_lite_TEMPLATE_DIR',get_template_directory());

if( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

/* Setup Theme
========================================================================== */

if ( ! function_exists( 'pepe_lite_setup' ) ) :
	function pepe_lite_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Title tag
		add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
        // Banner Header
		add_image_size('pepe-header-banner', 1200, 200, true);
		// Slider Boostrap
		add_image_size('pepe_slider_boostrap',2600,700,true);
		// Image Block zero
		add_image_size('pepe-img-zero',2000,1000,true);
	
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__('Primary', 'pepe-lite'),
			'menu-2' => esc_html__('Top','pepe-lite'),
		) );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'pepe_lite_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'pepe_lite_setup' );

/* Content width
========================================================================== */

function pepe_lite_content_width() {
	
	$GLOBALS['content_width'] = apply_filters( 'pepe_lite_content_width', 640 );
}
add_action( 'after_setup_theme', 'pepe_lite_content_width', 0 );

/* Register widget area
========================================================================== */

function pepe_lite_widgets_init() {

	// Sidebar Blog
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Post Blog/Block One', 'pepe-lite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pepe-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Sidebar one
	register_sidebar( array(
		'name'          => esc_html__('Block Two Sidebar Left', 'pepe-lite' ),
		'id'            => 'sidebar-one',
		'description'   => esc_html__( 'Add widgets here.', 'pepe-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Sidebar two
	register_sidebar( array(
		'name'          => esc_html__('Block Two Sidebar Right', 'pepe-lite' ),
		'id'            => 'sidebar-two',
		'description'   => esc_html__( 'Add widgets here.', 'pepe-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Sidebar Blog Two
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Post Blog Two', 'pepe-lite' ),
		'id'            => 'sidebar-post-two',
		'description'   => esc_html__( 'Add widgets here.', 'pepe-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) ); 

	// Sidebar Archive
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Archive', 'pepe-lite' ),
		'id'            => 'sidebar-archive',
		'description'   => esc_html__( 'Add widgets here.', 'pepe-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) ); 

	// Widget Banner Header
	register_sidebar( array(
		'name'          => esc_html__( 'Banner Header', 'pepe-lite' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'pepe-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Sidebar five
	register_sidebar( array(
		'name'          => esc_html__( 'Block four Mailchimp only', 'pepe-lite' ),
		'id'            => 'sidebar-five',
		'description'   => esc_html__( 'This Widget block only supports a Mailchimp Widget', 'pepe-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Sidebar seven
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column One', 'pepe-lite' ),
		'id'            => 'sidebar-seven',
		'description'   => esc_html__( 'Add widgets here.', 'pepe-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Sidebar height
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column Two', 'pepe-lite' ),
		'id'            => 'sidebar-height',
		'description'   => esc_html__( 'Add widgets here.', 'pepe-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'pepe_lite_widgets_init' );

/* Enqueue scripts and styles
========================================================================== */

function pepe_lite_scripts() {
	wp_enqueue_style( 'pepe-lite-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pepe-lite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'pepe-lite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// Bootstrap
    wp_enqueue_script('popper-js', get_template_directory_uri() .'/assets/boostrap/js/popper.min.js', array('jquery'),'v1.14.3' ,true );
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/assets/boostrap/js/bootstrap.min.js', array('jquery'),'v4.4.1' ,true );
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/assets/boostrap/css/bootstrap.min.css');
    // Font Awesome
	wp_enqueue_style('font-awesome', get_template_directory_uri(). '/assets/font-awesome/css/all.min.css');
	// Marqee(News Banner)
	wp_enqueue_script('marquee-js', get_template_directory_uri() .'/js/marquee.js', array('jquery'),'v2016' ,true );
	// Pepe Custom Script
	wp_enqueue_script('pepe-lite-custom-script-js', get_template_directory_uri() .'/js/pepe-lite-custom-script.js', array('jquery'),'v1.0.0' ,true );
	// Pepe Buttons 
	wp_enqueue_style('pepe-lite-buttons', get_template_directory_uri(). '/assets/buttons/pepe-lite-buttons.css');
	// Sidebar Sticky
	wp_enqueue_script('ResizeSensor', get_template_directory_uri() .'/js/ResizeSensor.min.js', array( 'jquery' ), NULL, true);
	wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/js/theia-sticky-sidebar.min.js', array( 'jquery' ), NULL, true);
	// Widget Stat
	wp_enqueue_script('pepe-lite-scroll-stat-js', get_template_directory_uri().'/js/pepe-lite-scroll-stat.js', array('jquery'),'v1.0.0' ,true ); 
	// Add class Container top header for responsive
	if (true == get_theme_mod('size_top_header',false)):
	wp_enqueue_script('pepe-lite-top-header-responsive-js', get_template_directory_uri() .'/js/pepe-lite-top-header-responsive-script.js', array('jquery'),'v1.0.0' ,true ); 
	endif;
	//Time 
    if (true == get_theme_mod('pepe_lite_show_date_time_header',true)):
    if (true == get_theme_mod('pepe_show_time_header',true)):
    wp_enqueue_script('pepe-lite-time-js', get_template_directory_uri() .'/js/pepe-lite-time-script.js', array('jquery'),'v1.0.0' ,true ); 
	endif;
	endif;
	// Add class Container time news for responsive
	if (true == get_theme_mod('size_news_block_header',false)):
	wp_enqueue_script('pepe-lite-news-responsive-script-js', get_template_directory_uri() .'/js/pepe-lite-news-responsive-script.js', array('jquery'),'v1.0.0' ,true );     
	endif;   
	// Add class Container menu header for responsive
	if (true == esc_attr(get_theme_mod('size_menu_block_header',false))):
	  wp_enqueue_script('pepe-menu-responsive-js', get_template_directory_uri() .'/js/pepe-lite-menu-responsive-script.js', array('jquery'),'v1.0.0' ,true ); 
	endif;
	// Fixed Menu 
	if (true == esc_attr(get_theme_mod('sticky_menu_header',true))):
	  wp_enqueue_script('pepe-lite-menu-sticky-js', get_template_directory_uri() .'/js/pepe-lite-menu-sticky.js', array('jquery'),'v1.0.0' ,true ); 
	endif;
    // Add class Container logo header for responsive
	if (true == get_theme_mod('size_logo_block_header',false)):
	wp_enqueue_script('pepe-logo-responsive-js', get_template_directory_uri() .'/js/pepe-lite-logo-responsive-script.js', array('jquery'),'v1.0.0' ,true ); 
	endif;

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pepe_lite_scripts' );

// Script custom select
function pepe_lite_select_dropdown() {
	wp_enqueue_script( 'select2js', get_stylesheet_directory_uri() . '/js/select2.min.js', array( 'jquery' ), '4.0.6', true );
	wp_enqueue_style( 'select2css', get_stylesheet_directory_uri() . '/inc/customizer/css/select2.min.css' , array(), '4.0.6', 'all' );
	wp_enqueue_script( 'selectinit', get_stylesheet_directory_uri() . '/js/select2-init.js', array( 'select2js' ), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'pepe_lite_select_dropdown');

// Implement the Custom Header feature
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress
require get_template_directory() . '/inc/template-functions.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer/customizer.php';

// Custom Controls CSS
require get_template_directory() . '/inc/customizer/custom-controls-css.php';

// Custom Class
require get_template_directory() . '/inc/customizer/custom-class.php';

// Pepe Comments
require get_template_directory() . '/assets/comments/pepe-comments.php';

// Custom Controll Css for Color
require get_template_directory() . '/inc/customizer/style-color-css.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Class Navigation Menu
========================================================================== */

// Add Class -li-
function pepe_lite_add_classes_on_li($classes, $item, $args) {
	$classes[] = 'nav-item dropdown submenu';
	return $classes;

}
add_filter('nav_menu_css_class','pepe_lite_add_classes_on_li',1,3);

// Add class -a-
function pepe_lite_add_menu_link_class( $atts, $item, $args ) {
	if (property_exists($args, 'link_class')) {
	  $atts['class'] = $args->link_class;
}
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'pepe_lite_add_menu_link_class', 1, 3 );

// Add Class -Sub-menu-
function pepe_lite_some_function( $classes, $args, $depth ){
    foreach ( $classes as $key => $class ) {
    if ( $class == 'sub-menu' ) {
        $classes[ $key ] = 'dropdown-menu';
    }
}

return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'pepe_lite_some_function', 10, 3 );

// Add filter dropdown-toggle
function pepe_lite_add_class_to_items_link( $atts, $item, $args ) {
  // check if the item has children
  $hasChildren = (in_array('menu-item-has-children', $item->classes));
  if ($hasChildren) {
    // add the desired attributes:
    $atts['class'] = 'dropdown-toggle';
    $atts['data-toggle'] = 'dropdown';
	$atts['data-target'] = '#';
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'pepe_lite_add_class_to_items_link', 10, 3 );

/* Menu fallback. Link to the menu editor if that is useful
========================================================================== */

function pepe_lite_link_to_menu_editor( $args )
{
    if ( ! current_user_can( 'manage_options' ) )
    {
        return;
    }

    // see wp-includes/nav-menu-template.php for available arguments
    extract( $args );

    $link = $link_before
        . '<a href="' .esc_url(admin_url( 'nav-menus.php' )) . '">' . $before .__('Add a menu','pepe-lite') . $after . '</a>'
        . $link_after;

    // We have a list
    if ( FALSE !== stripos( $items_wrap, '<ul' )
        or FALSE !== stripos( $items_wrap, '<ol' )
    )
    {
        $link = "<li>$link</li>";
    }

    $output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
    if ( ! empty ( $container ) )
    {
        $output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
    }

    if ( $echo )
    {
        echo $output;
    }

    return $output;
}

/* Include script and styles for class add Panel 
========================================================================== */

function pepe_lite_customize_controls_scripts() {

	wp_enqueue_script( 'pepe-lite-customize-controls', get_theme_file_uri( '/assets/panel/js/pepe-lite-customize-controls.js' ), array(), '1.0', true );
	
}

add_action( 'customize_controls_enqueue_scripts', 'pepe_lite_customize_controls_scripts' );

function pepe_lite_customize_controls_styles() {

	wp_enqueue_style( 'pepe-lite-customize-controls', get_theme_file_uri( '/assets/panel/css/pepe-lite-customize-controls.css' ), array(), '1.0' );
}

add_action( 'customize_controls_print_styles', 'pepe_lite_customize_controls_styles' );

function pepe_lite_panel_customize_register( $wp_customize ) {

$wp_customize->register_panel_type( 'Pepe_lite_WP_Customize_Panel' );
$wp_customize->register_section_type( 'Pepe_lite_WP_Customize_Section' );

}

add_action( 'customize_register', 'pepe_lite_panel_customize_register' );



/* Include Custom Widget
========================================================================== */

// Pepe Social
function pepe_lite_social_widget(){
	require  pepe_lite_TEMPLATE_DIR.'/widget/widget-social.php';

}
add_action( 'after_setup_theme', 'pepe_lite_social_widget' );

// Pepe Post One
function pepe_lite_post_one_widget(){
	require  pepe_lite_TEMPLATE_DIR.'/widget/widget-post-one.php';

}
add_action( 'after_setup_theme', 'pepe_lite_post_one_widget' );

// Unregister Video Widget
function pepe_lite_remove_video_widget() {
	unregister_widget('WP_Widget_Media_Video');
}

add_action( 'widgets_init', 'pepe_lite_remove_video_widget' );

// Pepe Video
function pepe_lite_video_widget(){
	require  pepe_lite_TEMPLATE_DIR.'/widget/widget-video.php';

}
add_action( 'after_setup_theme', 'pepe_lite_video_widget' );

// Pepe Author
function pepe_lite_author_widget(){
	require  pepe_lite_TEMPLATE_DIR.'/widget/widget-author.php';

}
add_action( 'after_setup_theme', 'pepe_lite_author_widget' );

// Pepe Statistics
function pepe_lite_stat_widget(){
	require  pepe_lite_TEMPLATE_DIR.'/widget/widget-stat.php';

}
add_action( 'after_setup_theme', 'pepe_lite_stat_widget' );

// Unregister Categories Widget
function pepe_lite_remove_category_widget() {
	unregister_widget('WP_Widget_Categories');
}

add_action( 'widgets_init', 'pepe_lite_remove_category_widget' );

// Pepe Categories
function pepe_lite_category_widget(){
	require  pepe_lite_TEMPLATE_DIR.'/widget/widget-category.php';

}
add_action( 'after_setup_theme', 'pepe_lite_category_widget' );

// Change content number Widget Categories
function pepe_lite_categories_postcount_filter ($pepe_num_cat) {
	$pepe_num_cat = str_replace('(', '<span class="post-count-cat"> ', $pepe_num_cat);
	$pepe_num_cat = str_replace(')', ' </span>', $pepe_num_cat);
	return $pepe_num_cat;
 }
 add_filter('wp_list_categories','pepe_lite_categories_postcount_filter');

// Change content number Widget Archive
function pepe_lite_style_the_archive_count($pepe_links) {
    $pepe_links = str_replace('(', '<span class="post-count-archive">', $pepe_links);
    $pepe_links = str_replace(')', '</span>', $pepe_links);
    return $pepe_links;
}

add_filter('get_archives_link', 'pepe_lite_style_the_archive_count');

/* List Author with Avatar in Widget
========================================================================== */

function pepe_lite_contributors() {
	global $wpdb;
	$authors = $wpdb->get_results("SELECT ID, user_nicename from $wpdb->users ORDER BY display_name");
	foreach($authors as $author) {
	echo '<div class="img-author fadeimg col-md-3 col-sm-3 pl-0">';
	echo "<a href=\"".esc_url(home_url())."/?author=";
	echo esc_attr($author->ID);
	echo "\">";
	echo get_avatar($author->ID);
	echo "</a>";
	echo "</div>";
	echo '<div class="title-author col-md-6 col-sm-6">';
	echo "<a href=\"".esc_url(home_url())."/?author=";
	echo esc_attr($author->ID);
	echo "\">";
	the_author_meta('display_name', $author->ID);
	echo "</a>";
	echo "</div>";
	echo '<div class="icon-author col-md-3 col-sm-3 text-right pr-0">';
	echo '<i class="fas fa-edit"></i>';
	echo "</div>";
	} 
}

/* Max Title Length Widget 
========================================================================== */

function pepe_lite_max_title_length( $title ) {
	$max = 10;
	if( strlen( $title ) > $max ) {
	return substr( $title, 0, $max );
	} else {
	return $title;
	}
}

// Block Two
function pepe_lite_max_title_length_5( $title ) {
	$max = (esc_attr( get_theme_mod('pepe_length_excerpt_title_5', 12)));
	if( strlen( $title ) > $max ) {
	return substr( $title, 0, $max );
	} else {
	return $title;
	}
}

/* Add Span in Widget Title */
function pepe_lite_span_widget_title( $title ) {
	$output = '<span>';
	$output .= $title;
	$output .= '</span>';
	return $output;
  }
  add_filter( 'widget_title', 'pepe_lite_span_widget_title' );

/* Breadcrumbs
========================================================================== */

function pepe_lite_custom_breadcrumbs() {
    $sep = ' > ';
    if (!is_front_page()) {
	// Start the breadcrumb with a link to your homepage
        echo '<div id="breadcrumbs">';
        echo '<a href="';
        echo esc_url(home_url());
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category($sep);
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'pepe-lite' ), esc_html(get_the_date()) );
            } elseif ( is_month() ) {
                printf( __( '%s', 'pepe-lite' ), esc_html(get_the_date( _x( 'F Y', 'monthly archives date format', 'pepe-lite' ) )) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'pepe-lite' ), esc_html(get_the_date( _x( 'Y', 'yearly archives date format', 'pepe-lite' )) ) );
            } else {
                esc_html_e( 'Blog Archives', 'pepe-lite' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo esc_attr($sep);
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}

/* Comment form defaults
========================================================================== */

function pepe_lite_comment_form( $defaults ){
    // Edit this to your needs:
    $button = ' <a class="pep-6 pep3"><button class="pepe-button-submit" name="%1$s" id="%2$s" type="submit">'.esc_html(get_theme_mod('pepe_text_button_comments',__('POST COMMENTS','pepe-lite'))).'</button><span></span></a>' ; 
    // Override the default submit button:
    $defaults['submit_button'] = $button;

    return $defaults;
} 

add_filter( 'comment_form_defaults', 'pepe_lite_comment_form' );

/* Pepe Support Page
========================================================================== */
 
add_action('admin_menu', 'pepe_lite_page_create');

 function pepe_lite_page_create() {
     add_theme_page('Pepe Lite', 'PEPE LITE', 'edit_theme_options', 'pepe_page', 'pepe_lite_page_display',1);

 }

 function pepe_lite_page_display() {
   require get_template_directory() . '/pepe-admin/pepe-lite-support.php';

 }

//Include Admin Style
function pepe_lite_load_admin_style($hook) {
    if( $hook == 'appearance_page_pepe_page' ) {
         wp_enqueue_style( 'pepe_lite_admin_css', get_template_directory_uri() . '/pepe-admin/css/pepe-lite-admin-style.css', false, '1.0.0' );
		 wp_enqueue_script( 'pepe_lite_admin_script', get_template_directory_uri() . '/pepe-admin/js/pepe-lite-admin-script.js', false, '1.0.0' );
		 wp_enqueue_style( 'pepe-lite-font-awesome-admin', get_template_directory_uri() . '/assets/font-awesome/css/all.min.css' );
}
}
add_action( 'admin_enqueue_scripts', 'pepe_lite_load_admin_style' );

/*  Url Admin Upload / Franchi Design
========================================================================== */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define('pepe_url_update_details','https://www.denisfranchi.com/blog/2020/08/08/pepe-lite/'); // Update Details
define('franchi_design_url','https://www.denisfranchi.com/'); // Franchi Design
define('franchi_design_url_pro_version','https://www.denisfranchi.com/blog/portfolio/pepe/'); // Go Pro
define('pepe_url_basic_documentation','https://www.denisfranchi.com/community/index.php?threads/quick-guide-to-customize-pepe-lite.56/'); // Documentation Basic
define('pepe_url_documentation_theme','https://www.denisfranchi.com/community/index.php?threads/quick-guide-to-customize-pepe-lite.56/'); // Documentation
define('pepe_url_support_theme','https://www.denisfranchi.com/community/index.php?forums/support.33/'); // Support
define('pepe_url_demos_theme','https://www.denisfranchi.com/blog/portfolio/pepe/'); // Demos

/* Notice Admin Area
========================================================================== */

class pepe_lite_screen {
	public function __construct() {
	   /* notice  Lines*/
	   add_action( 'load-themes.php', array( $this, 'pepe_lite_activation_admin_notice' ) );
   }
   public function pepe_lite_activation_admin_notice() {
	   global $pagenow;

	   if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		   add_action( 'admin_notices', array( $this, 'pepe_lite_admin_notice' ), 99 );
	   }
   }

/* Display an admin notice linking to the welcome screen */
   public function pepe_lite_admin_notice() {
	   ?>			
	   <div class="updated notice is-dismissible pepe-lite-notice">
		   <h1><?php
		   $theme_info = wp_get_theme();
		   printf( esc_html__('Congratulations, Welcome to %1$s Theme', 'pepe-lite'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) ); ?>
		   </h1>
		   <p><?php echo sprintf( esc_html__("Thank you for choosing Pepe Lite theme. To take full advantage of the complete features of the theme, you have to go to our %1\$s welcome page %2\$s.", "pepe-lite"), '<a href="' . esc_url( admin_url( 'themes.php?page=pepe_page' ) ) . '">', '</a>' ); ?></p>
		   
		   <p><a href="<?php echo esc_url( admin_url( 'themes.php?page=pepe_page' ) ); ?>" class="button button-blue-secondary button_info" style="text-decoration: none;"><?php echo esc_html__('Get started with Pepe Lite','pepe-lite'); ?></a></p>
	   </div>
	   <?php
   }
   
}
$GLOBALS['pepe_lite_screen'] = new pepe_lite_screen();


/* Include Plugin
========================================================================== */

require_once get_template_directory() . '/pepe-functionality-plugin/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'pepe_lite_register_required_plugins' );


function pepe_lite_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// MC4WP: Mailchimp for WordPress
		array(
			'name'      => __('MC4WP: Mailchimp for WordPress','pepe-lite'),
			'slug'      => 'mailchimp-for-wp',
			'required'  => false,
		),
		// On Click Demo Import
	    array(
			'name'      => __('One Click Demo Import','pepe-lite'),
			'slug'      => 'one-click-demo-import',
			'required'  => false,
	),
	);

	$config = array(
		'id'           => 'pepe-pepe',             // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'pepe-lite' ),
			'menu_title'                      => __( 'Install Plugins', 'pepe-lite' ),
			/* translators: %s: search term */
			'installing'                      => __( 'Installing Plugin: %s', 'pepe-lite' ),
			/* translators: %s: search term */
			'updating'                        => __( 'Updating Plugin: %s', 'pepe-lite' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'pepe-lite' ),
			/* translators: %1: search term */
			'notice_can_install_required'     => _n_noop(

				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'pepe-lite'
			),
			/* translators: %1: search term */
			'notice_can_install_recommended'  => _n_noop(
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'pepe-lite'
			),
			/* translators: %1: search term */
			'notice_ask_to_update'            => _n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'pepe-lite'
			),
			/* translators: %1: search term */
			'notice_ask_to_update_maybe'      => _n_noop(
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'pepe-lite'
			),
			/* translators: %1: search term */
			'notice_can_activate_required'    => _n_noop(
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'pepe-lite'
			),
			/* translators: %1: search term */
			'notice_can_activate_recommended' => _n_noop(
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'pepe-lite'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'pepe-lite'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'pepe-lite'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'pepe-lite'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'pepe-lite' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'pepe-lite' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'pepe-lite' ),
			/* translators: %1: search term */
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'pepe-lite' ),
			/* translators: %s: search term */
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'pepe-lite' ),
			/* translators: %1: search term */
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'pepe-lite' ),
			'dismiss'                         => __( 'Dismiss this notice', 'pepe-lite' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'pepe-lite' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'pepe-lite' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
	);


	tgmpa( $plugins, $config );
}

/* Custom Excerpt
========================================================================== */

function pepe_lite_custom_excerpt_length( $length ) {
	if ( is_admin() ) return $length;
	$pepe_excpert= 15;
    return $pepe_excpert;
}
add_filter( 'excerpt_length', 'pepe_lite_custom_excerpt_length', 999 );

function pepe_lite_excerpt_more( $more ) {
	if ( is_admin() ) return $more;
	$pepe_more= ( __('...','pepe-lite'));
    return $pepe_more;
}
add_filter( 'excerpt_more', 'pepe_lite_excerpt_more' );

/* Demo Importer
========================================================================== */

// Menu and Page
function pepe_lite_after_import_setup() {
	// Assign menus to their locations.
	$primary = get_term_by( 'name', 'Primary', 'nav_menu' );
	$top     = get_term_by( 'name', 'Top', 'nav_menu' );
	
	set_theme_mod( 'nav_menu_locations', array(
			'menu-1' => $primary->term_id, 
			'menu-2' => $top->term_id,
		)
	);
}
add_action( 'pt-ocdi/after_import', 'pepe_lite_after_import_setup' );

// Custum Text Plugin
function pepe_lite_plugin_intro_text( $default_text ) {
	$default_text .= '<div class="ocdi__intro-text" style="margin-bottom:3em; text-align:center;background-color:#fff;height:100px;padding-top:50px;font-size:20px"><a target="_blank" style="margin-left:10px;text-decoration:none;" href="'.esc_url(pepe_url_demos_theme).'"><span class="dashicons dashicons-download"></span>'.__('Pepe Lite Starter Demos','pepe-lite').'</a><br><p>'.'</p></div>';
	
	return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'pepe_lite_plugin_intro_text' );

// Custom Title Plugin
function pepe_lite_plugin_page_setup( $default_settings ) {
	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'One Click Demo Import' , 'pepe-lite' );
	$default_settings['menu_title']  = esc_html__( 'PEPE Import Demo' , 'pepe-lite' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'pt-one-click-demo-import';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'pepe_lite_plugin_page_setup' );

// No Banner 
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
