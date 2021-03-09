<?php
/**
* content-none.php
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<section class="no-results not-found">
	<header class="page-header text-center">
		<h1 class="page-title page-title-content-none-page"><?php echo esc_html('Nothing Found', 'pepe-lite' ); ?></h1>
	</header><!-- .page-header -->
	<div class="page-content content-none-search text-center">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pepe-lite' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);
		elseif ( is_search() ) :
			?>
			<p class="page-subtitle-content-none-page"><?php echo esc_html('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pepe-lite' ); ?></p>
			<?php
			get_template_part( 'advanced', 'searchform' ); 
		else :
			?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pepe-lite' ); ?></p>
			<?php
			get_template_part( 'advanced', 'searchform' ); 
		endif;
		?>
		<div class="button-content-none-page">
			   <a class="pep-6 pep3" href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html('GO TO THE HOME','pepe-lite')?><span></span></a>
			</div><!-- .page-content -->
		<img class="img-search-none-risult mt-5" src='<?php if ( get_theme_mod( 'pepe_image_search_page_not_found' ) > 0 ) { 
            echo esc_url(wp_get_attachment_url(get_theme_mod( 'pepe_image_search_page_not_found' ))) ;  }  ?>'>
	</div><!-- .page-content -->
</section><!-- .no-results --> 





	
