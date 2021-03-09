<?php
/**
* search.php
* @author    Franchi Design
* @package   pepe-lite
*/

get_header();
?>
<section id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>
		<header class="page-header pepe-page-search" style="background-image: url('<?php if ( get_theme_mod( 'pepe_image_search_page' ) > 0 ) { 
            echo esc_url(wp_get_attachment_url(get_theme_mod( 'pepe_image_search_page' ))) ;  }  ?>');">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'pepe-lite' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
		</header><!-- .page-header -->
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'search' );
			endwhile;
			//Previous / next page navigation
			the_posts_pagination( array(
			'prev_text'          => '<i class="fa fa-angle-left"></i>',
			'next_text'          => '<i class="fa fa-angle-right"></i>',
			'screen_reader_text' => __('Posts navigation', 'pepe-lite')
			) ); 
		    else :
			get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
	</main><!-- #main -->
</section><!-- #primary -->
<?php
get_footer();
