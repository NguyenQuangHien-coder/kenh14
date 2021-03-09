<?php
/**
* custom-header.php
* @author    Franchi Design
* @package   pepe-lite

<?php the_header_image_tag(); ?>
 */ 

function pepe_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'pepe_lite_custom_header_args', array(
		'default-image'          => '',
		'width'                  => 2000,
		'height'                 => 253,
		'flex-height'            => true, 
		'wp-head-callback'       => 'pepe_lite_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'pepe_lite_custom_header_setup' );

if ( ! function_exists( 'pepe_lite_header_style' ) ) :

	function pepe_lite_header_style() {
		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;
