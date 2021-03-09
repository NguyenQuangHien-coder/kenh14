<?php

define('TAGDIV_ROOT', get_template_directory_uri());
define('TAGDIV_ROOT_DIR', get_template_directory());


// load the deploy mode
require_once( TAGDIV_ROOT_DIR . '/tagdiv-deploy-mode.php' );


/**
 * Theme configuration.
 */
require_once TAGDIV_ROOT_DIR . '/includes/tagdiv-config.php';


/**
 * Theme wp booster.
 */
require_once( TAGDIV_ROOT_DIR . '/includes/wp-booster/tagdiv-wp-booster-functions.php');


/**
 * Theme page generator support.
 */
if ( ! class_exists('tagdiv_page_generator' ) ) {
	include_once ( TAGDIV_ROOT_DIR . '/includes/tagdiv-page-generator.php');
}


/* ----------------------------------------------------------------------------
 * Add theme support for sidebar
 */
add_action( 'widgets_init', function() {
    register_sidebar(
        array(
            'name'=> 'Newspaper default',
            'id' => 'td-default',
            'before_widget' => '<aside id="%1$s" class="widget %1$s %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="block-title"><span>',
            'after_title' => '</span></div>'
        )
    );
});

add_filter( 'pre_handle_404', function($param1, $param2) {

    $post_id = url_to_postid("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    if ( defined('TD_COMPOSER') && !empty($post_id) ) {
            $td_post_theme_settings = td_util::get_post_meta_array($post_id, 'td_post_theme_settings');
            // standard smartlist
            if (is_array($td_post_theme_settings) && array_key_exists('smart_list_template', $td_post_theme_settings)) {
                return true;
            } elseif (!empty ($td_post_theme_settings['td_post_template']) && td_global::is_tdb_registered() && td_global::is_tdb_template($td_post_theme_settings['td_post_template'], true)) {  // cloud template smartlist
                $td_template_id = td_global::tdb_get_template_id($td_post_theme_settings['td_post_template']);
                $td_template_content = get_post_field('post_content', $td_template_id);
                $is_tdb_smartlist = tdb_util::get_shortcode($td_template_content, 'tdb_single_smartlist');

                if ($is_tdb_smartlist) {
                    return true;
                }
            }

    }
    return $param1;
}, 10, 2);



/**
 * Theme setup.
 */
add_action( 'after_setup_theme', function (){

	/**
	 * Loads the theme's translated strings.
	 */
	load_theme_textdomain( strtolower(TD_THEME_NAME ), get_template_directory() . '/translation' );

	/**
	 * Theme menu location.
	 */
	register_nav_menus(
		array(
			'header-menu' => 'Header Menu (main)',
			'footer-menu' => 'Footer Menu',
		)
	);
});


/* ----------------------------------------------------------------------------
 * Add theme support for features
 */
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('woocommerce');
add_theme_support('bbpress');
add_theme_support('align-wide');
add_theme_support('align-full');


global $content_width;
if ( !isset($content_width) ) {
    $content_width = 696;
}



/* ----------------------------------------------------------------------------
 * Woo Commerce
 */
// breadcrumb
add_filter('woocommerce_breadcrumb_defaults', 'tagdiv_woocommerce_breadcrumbs');
function tagdiv_woocommerce_breadcrumbs() {
    return array(
        'delimiter' => ' <i class="td-icon-right td-bread-sep"></i> ',
        'wrap_before' => '<div class="entry-crumbs" itemprop="breadcrumb">',
        'wrap_after' => '</div>',
        'before' => '',
        'after' => '',
        'home' => _x('Home', 'breadcrumb', 'newspaper'),
    );
}


/* ----------------------------------------------------------------------------
* front end css files
*/
if( !function_exists('tagdiv_theme_css') ) {
    function tagdiv_theme_css() {
        wp_enqueue_style('td-theme', get_stylesheet_uri() );

        // load the WooCommerce CSS only when needed
        if ( class_exists('WooCommerce', false) ) {
            wp_enqueue_style('td-theme-woo', get_template_directory_uri() . '/style-woocommerce.css' );
        }

        // load the Bbpress CSS only when needed
        if ( class_exists('bbPress', false) ) {
            wp_enqueue_style('td-theme-bbpress', get_template_directory_uri() . '/style-bbpress.css' );
        }
    }
}
add_action('wp_enqueue_scripts', 'tagdiv_theme_css', 1001);








add_filter('upgrader_clear_destination', function($removed, $local_destination, $remote_destination, $args) {
    usleep(500);
    return $removed;
}, 10, 4);


if ( defined('TD_COMPOSER' ) && strpos( td_util::get_registration(), chr(42 ) ) > 0 ) {

    if ( is_admin()) {

        $value = get_transient( 'td_update_theme_' . TD_THEME_NAME );
        if ( false === $value ) {

            tagdiv_check_theme_version();

        } else {

            $td_theme_update_to_version = get_transient( 'td_update_theme_to_version_' . TD_THEME_NAME );
            if ( false !== $td_theme_update_to_version ) {
                $theme_update_to_version = tagdiv_util::get_option( 'theme_update_to_version' );

                if ( ! empty( $theme_update_to_version ) ) {

                    add_filter( 'pre_set_site_transient_update_themes', function( $transient ) {

                        $to_version = tagdiv_util::get_option( 'theme_update_to_version' );
                        if ( ! empty( $to_version )) {
                            $args = array();
                            $to_version = json_decode( $to_version, true );
                            $to_version_keys = array_keys( $to_version );
                            if ( is_array( $to_version_keys ) && count( $to_version_keys ) ) {
                                $to_version_serial = $to_version_keys[ 0 ];
                                $to_version_url = $to_version[$to_version_serial];
                                $theme_slug = get_template();

                                $transient->response[ $theme_slug ] = array(
                                    'theme'       => $theme_slug,
                                    'new_version' => $to_version_serial,
                                    'url' => "https://tagdiv.com/" . TD_THEME_NAME,
                                    'clear_destination' => true,
                                    'package'     => add_query_arg( $args, $to_version_url ),
                                );
                            }
                        }

                        return $transient;
                    });
                    delete_site_transient('update_themes');
                }
            } else {

                $td_theme_update_latest_version = get_transient( 'td_update_theme_latest_version_' . TD_THEME_NAME );

                if ( false !== $td_theme_update_latest_version ) {

                    add_filter( 'pre_set_site_transient_update_themes', function( $transient ) {

                        $latest_version = tagdiv_util::get_option( 'theme_update_latest_version' );
                        if ( ! empty( $latest_version ) ) {
                            $args = array();
                            $latest_version = json_decode( $latest_version, true );

                            $latest_version_keys = array_keys( $latest_version );
                            if ( is_array( $latest_version_keys ) && count( $latest_version_keys ) ) {
                                $latest_version_serial = $latest_version_keys[ 0 ];
                                $latest_version_url = $latest_version[$latest_version_serial];
                                $theme_slug = get_template();

                                $transient->response[ $theme_slug ] = array(
                                    'theme' => $theme_slug,
                                    'new_version' => $latest_version_serial,
                                    'url' => "https://tagdiv.com/" . TD_THEME_NAME,
                                    'clear_destination' => true,
                                    'package' => add_query_arg( $args, $latest_version_url ),
                                );
                            }
                        }

                        return $transient;
                    });
                    delete_site_transient('update_themes');
                }
            }
        }
    }


    add_filter( 'admin_body_class', function ( $classes ) {
		$new_update_available = false;
        $latest_version = tagdiv_util::get_option( 'theme_update_latest_version' );

        if ( ! empty( $latest_version ) ) {
            $latest_version = json_decode( $latest_version, true );

            $latest_version_keys = array_keys( $latest_version );
            if ( is_array( $latest_version_keys ) && count( $latest_version_keys ) ) {
                $latest_version_serial = $latest_version_keys[ 0 ];

                if ( 1 == version_compare( $latest_version_serial, TD_THEME_VERSION ) ) {
                    $new_update_available = true;
                }
            }
        }

        if ( $new_update_available ) {
            $classes .= ' td-theme-update';
        }

		return $classes;
	} );


	add_filter( 'admin_head', function () {

		$td_update_theme_ready = get_transient( 'td_update_theme_' . TD_THEME_NAME );
		if ( false !== $td_update_theme_ready ) {

			$update_data = '';

			$td_theme_update_to_version = get_transient( 'td_update_theme_to_version_' . TD_THEME_NAME );
			if ( false !== $td_theme_update_to_version ) {

				$data = tagdiv_util::get_option( 'theme_update_to_version' );
				if ( ! empty( $data ) ) {
					$update_data = $data;
				}
			} else {

				$data = tagdiv_util::get_option( 'theme_update_latest_version' );
				if ( ! empty( $data ) ) {
					$update_data = $data;
				}
			}

			if ( ! empty( $update_data ) ) {
				ob_start();
				?>
                <script>
                    var tdData = {
                        version: <?php echo '' . $update_data ?>,
                        adminUrl: "<?php echo admin_url() ?>",
                        themeName: "<?php echo TD_THEME_NAME ?>",
                    };
                </script>
				<?php
				echo ob_get_clean();
			}
		}
	} );
}

// Load comments reply support if needed
add_action( 'comment_form_before', function() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
});


add_action('upgrader_process_complete', function($upgrader, $data) {

    if ($data['action'] == 'update' && $data['type'] == 'theme' ) {

         // clear flag to update theme
        delete_transient( 'td_update_theme_' . TD_THEME_NAME );

        // clear flag to update theme to latest version
        delete_transient( 'td_update_theme_latest_version_' . TD_THEME_NAME );

        // clear flag to update theme to specific version
        delete_transient( 'td_update_theme_to_version_' . TD_THEME_NAME );

        // clear flag to update to a specific version
        tagdiv_util::update_option( 'theme_update_to_version', '' );

        $current_deactivated_plugins = tagdiv_options::get_array('td_theme_deactivated_current_plugins' );

        if ( ! empty( $current_deactivated_plugins ) ) {
            $theme_setup = tagdiv_theme_plugins_setup::get_instance();
            $theme_setup->theme_plugins( array_keys( $current_deactivated_plugins ) );

            ob_start();

            ?>

            <script>
                setTimeout(function(){
                    jQuery('.td-button-install-plugins').trigger('click');
                }, 1000);
            </script>

            <?php

            echo ob_get_clean();
        }
    }

}, 10, 2);


add_filter('upgrader_pre_install', function( $return, $theme) {
    if ( is_wp_error( $return ) ) {
        return $return;
    }

    $theme = isset( $theme['theme'] ) ? $theme['theme'] : '';

    if ( $theme != get_stylesheet() ) { //If not current
        return $return;
    }

    tagdiv_options::update_array( 'td_theme_deactivated_current_plugins', '' );
    $deactivation = new tagdiv_current_plugins_deactivation();
    $deactivation->td_deactivate_current_plugins( true );

    return $return;

}, 10, 2);



add_action( 'current_screen', function() {
    $current_screen = get_current_screen();

    if ( 'update-core' === $current_screen->id && isset( $_REQUEST['update_theme'] )) {

        add_action('admin_head', function() {

            $theme_name = $_REQUEST['update_theme'];

            ob_start();
            ?>

            <script>
                jQuery(window).ready(function() {

                    'use strict';

                    var $formUpgradeThemes = jQuery('form[name="upgrade-themes"]');
                    if ( $formUpgradeThemes.length ) {
                        var $input = $formUpgradeThemes.find('input[type="checkbox"][value="<?php echo esc_js( $theme_name ) ?>"]');
                        if ($input.length) {
                            $input.attr( 'checked', true );
                            $formUpgradeThemes.submit();
                        }
                    }
                });
            </script>

            <?php
            echo ob_get_clean();
        });
    }
});





add_filter( 'render_block', 'td_filter_youtube_embed', 10, 3);
function td_filter_youtube_embed( $block_content, $block ) {

    if( 'core-embed/youtube' !== $block['blockName'] ) {
        return $block_content;
    }

    $matches = array();
    preg_match('/iframe(.*)src=\"(\S*)\"/', $block_content, $matches);

    if ( !empty($matches) && is_array($matches) && 3 === count($matches)) {
        $url = $matches[2];
        if (strpos($url, '?') > 0 ) {
            $new_url = $url . '&enablejsapi=1';
        } else {
            $new_url = $url . '?enablejsapi=1';
        }
        $block_content = str_replace( $url, $new_url, $block_content);
    }

  return $block_content;
}
