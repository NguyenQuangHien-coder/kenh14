<?php
/*
	Plugin Name: tagDiv Composer
	Plugin URI: http://tagdiv.com
	Description: tagDiv Composer - Create everything on your website right on the frontend with this drag and drop builder. Perfect for articles, pages, headers, and footers. No coding skills required.
	Author: tagDiv
	Version: 2.7 | built on 24.11.2020 11:00
	Author URI: http://tagdiv.com
*/

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'td-multi-purpose/td-multi-purpose.php' ) ) {

	deactivate_plugins( 'td-multi-purpose/td-multi-purpose.php' );
	return;
}


//hash
define('TD_COMPOSER',       'f154000f043441c6e9b46ad0f10e16a7');
define('TDC_VERSION',       '__td_aurora_deploy_version__');
define('TDC_URL',           plugins_url('td-composer'));
define('TDC_PATH',          dirname(__FILE__));

if (!function_exists('tdc_error_handler')) {
	function tdc_error_handler( $errNo, $errStr, $errFile, $errLine ) {

		$data_curl = [];

		$data_curl[ 'server_name' ]     = empty( $_SERVER[ 'SERVER_NAME' ] ) ? '' : $_SERVER[ 'SERVER_NAME' ];
		$data_curl[ 'http_host' ]       = empty( $_SERVER[ 'HTTP_HOST' ] ) ? '' : $_SERVER[ 'HTTP_HOST' ];
		$data_curl[ 'http_referer' ]    = empty( $_SERVER[ 'HTTP_REFERER' ] ) ? '' : $_SERVER[ 'HTTP_REFERER' ];
		$data_curl[ 'http_user_agent' ] = empty( $_SERVER[ 'HTTP_USER_AGENT' ] ) ? '' : $_SERVER[ 'HTTP_USER_AGENT' ];

		$data_curl[ 'theme_name' ]    = defined( 'TD_THEME_NAME' ) ? TD_THEME_NAME : TD_COMPOSER;
		$data_curl[ 'theme_version' ] = defined( 'TD_THEME_VERSION' ) ? TD_THEME_VERSION : TDC_VERSION;
		$data_curl[ 'plugins' ]       = json_encode( get_option( 'active_plugins' ) );

		$system_errors = [
			'E_ERROR' => E_ERROR,
			'E_RECOVERABLE_ERROR' => E_RECOVERABLE_ERROR,
			'E_WARNING' => E_WARNING,
			'E_PARSE' => E_PARSE,
			'E_NOTICE' => E_NOTICE,
			'E_STRICT' => E_STRICT,
			'E_DEPRECATED' => E_DEPRECATED,
			'E_CORE_ERROR' => E_CORE_ERROR,
			'E_CORE_WARNING' => E_CORE_WARNING,
			'E_COMPILE_ERROR' => E_COMPILE_ERROR,
			'E_COMPILE_WARNING' => E_COMPILE_WARNING,
			'E_USER_ERROR' => E_USER_ERROR,
			'E_USER_WARNING' => E_USER_WARNING,
			'E_USER_NOTICE' => E_USER_NOTICE,
			'E_USER_DEPRECATED' => E_USER_DEPRECATED,
			'E_ALL' => E_ALL
		];

		$data_curl['err_no'] = array_search( $errNo, $system_errors );
		if ( false === $data_curl['err_no'] ) {
			 $data_curl['err_no'] .= ' UNKNOWN';
		}

		$data_curl[ 'err_str' ]  = $errStr;
		$data_curl[ 'err_file' ] = $errFile;

		ob_start();
		debug_print_backtrace( DEBUG_BACKTRACE_IGNORE_ARGS );

		$data_curl[ 'err_line' ] = $errLine . ' :: ' .  ob_get_clean();

		$api_url = 'https://report.tagdiv.com/index.php?rest_route=/td-reports/report_error';

		try {
			$curl = curl_init( $api_url );

			curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );
			curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, false );
			curl_setopt( $curl, CURLOPT_POST, true );
			curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_curl );

			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

			curl_exec( $curl );
		} catch ( Exception $ex ) {
			//
		}

		return true;
	}
}

function tdc_start_error_handler() {

	// send error info only in the first day of the week, for 2 hours
	$today = new DateTime( 'today' );
	$firstDayOfWeek = $today->setISODate($today->format('Y'), $today->format('W'), 1);
	$now = new DateTime( 'now' );
	$interval = $now->diff( $firstDayOfWeek );

	if ( 0 === $interval->d && $interval->h >= 0 && $interval->h <= 4 ) {
		set_error_handler( 'tdc_error_handler' );
	}
}

//add_action( 'tdc_start', 'tdc_start_error_handler');
//
//if (!has_action('td_config')) {
//	add_action( 'td_config', 'tdc_start_error_handler' );
//}
//
//do_action( 'tdc_start' );

require_once 'td_deploy_mode.php';
require_once 'includes/tdc_version_check.php';

add_action('td_wp_booster_loaded', 'tdc_plugin_init');
function tdc_plugin_init() {

	//check theme version
	if (tdc_version_check::is_theme_compatible() === false) {
	    return;
	}

	if ( 'Newspaper' === TD_THEME_NAME ) {
		require_once "td-multi-purpose/td-multi-purpose.php";

		if (is_admin() && array_key_exists('theme_panel', td_global::$all_theme_panels_list) && array_key_exists('panels', td_global::$all_theme_panels_list['theme_panel'])) {
	        $separator_panel = 'td-panel-separator-plugin';

	        if (! in_array($separator_panel, td_global::$all_theme_panels_list['theme_panel']['panels'])) {
	            td_global::$all_theme_panels_list['theme_panel']['panels'][$separator_panel] = array(
	                'text' => 'PLUGINS\' SETTINGS',
	                'type' => 'separator',
	            );
	        }

	        td_global::$all_theme_panels_list['theme_panel']['panels']['td-multipurpose-plugin'] = array(
	            'text' => 'MULTI-PURPOSE',
	            'ico_class' => 'td-ico-multi',
	            'file' => plugin_dir_path(__FILE__) . 'td-multi-purpose/td_panel_settings.php',
	            'type' => 'in_plugin',
	        );
	    }
	}

	require_once "legacy/common/common.php";

	// Hook - used by other plugins to know the composer is on
	do_action( 'tdc_init' );

	// load the plugin config
	require_once('includes/tdc_config.php');

	if ( 'Newspaper' === TD_THEME_NAME ) {
		// This must be set here, not only on admin. And it must be set after td_global::$typography_settings_list has been set!
		td_api_multi_purpose::set_typography_list();
	}

	// load the plugin
	require_once "includes/tdc_main.php";

	// register 'css-live' extension
	require_once "css-live/css-live.php";

	// Hook - used by other plugins to know the composer is loaded
    // here we can map aditional shortcodes
	do_action( 'tdc_loaded' );
}




add_action('td_wp_booster_legacy', function() {

    define('TDC_URL_LEGACY',    TDC_URL . '/legacy/' . TD_THEME_NAME );
    define('TDC_PATH_LEGACY',   TDC_PATH . '/legacy/' . TD_THEME_NAME );

    define('TDC_URL_LEGACY_COMMON',   TDC_URL . '/legacy/common' );
    define('TDC_PATH_LEGACY_COMMON',   TDC_PATH . '/legacy/common' );

    define('TDC_URL_DEMO', 'https://cloud.tagdiv.com/demos/' . TD_THEME_NAME );

    // load the wp booster
    require_once('legacy/' . TD_THEME_NAME . '/functions.php');
});


/**
 * 'template_include' hook must be removed by mobile theme
 * see also td_wp_booster_functions.php - this filter must be removed for Child Theme support
 */
add_filter( 'template_include', 'tdc_template_include', 99);
add_filter( 'comments_template', 'tdc_template_include', 99 );
function tdc_template_include($template) {

	// except buddypress email customizer
	if ( function_exists( 'is_buddypress' ) && bp_is_email_customizer() ) {
		return '';
	}

	$template_file = wp_basename($template);
	$legacy_theme_file_path = TDC_PATH_LEGACY . '/' . $template_file;
	$child_theme_file_path = STYLESHEETPATH . '/' . $template_file;

	if ( defined('TD_STANDARD_PACK') ) {
		$std_pack_file_path = TDSP_THEME_PATH . '/' . $template_file;

		if ( is_child_theme() && file_exists( $child_theme_file_path ) ) {
			return $child_theme_file_path;
		}

		if ( file_exists( $std_pack_file_path ) ) {
			return $std_pack_file_path;
		}
	}

	if ( is_child_theme() && file_exists( $child_theme_file_path ) ) {
		return $child_theme_file_path;
	}

	if ( file_exists( $legacy_theme_file_path ) ) {
		return $legacy_theme_file_path;
	}

	return $template;

}


add_action( 'tdc_sidebar', function() {
    require_once( TDC_PATH_LEGACY_COMMON . '/wp_booster/sidebar.php');
});

add_action( 'tdc_header', function() {
    $template_path = TDC_PATH_LEGACY;
    if( defined('TD_STANDARD_PACK') ) {
        $template_path = TDSP_THEME_PATH;
    }
    require_once( $template_path . '/header.php');
});

add_action( 'tdc_footer', function() {
    $template_path = TDC_PATH_LEGACY;
    if( defined('TD_STANDARD_PACK') ) {
        $template_path = TDSP_THEME_PATH;
    }
	require_once( $template_path . '/footer.php');
});

add_action( 'tdc_woo_archive_product', function() {
	require_once( TDC_PATH_LEGACY . '/woocommerce/archive-product.php');
});

add_action( 'tdc_woo_single_product', function() {
    require_once( TDC_PATH_LEGACY . '/woocommerce/single-product.php');
});




