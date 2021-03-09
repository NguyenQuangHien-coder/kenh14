<?php
/**
* archive-one.php
* @author    Franchi Design
* @package   pepe-lite
*/
?>
<div id="primary" class="content-area">
	<header class="page-header pepe-archive col-md-12" style="background-image: url('<?php if ( get_theme_mod( 'pepe_image_cat' ) > 0 ) { 
		    echo esc_url(wp_get_attachment_url(get_theme_mod( 'pepe_image_cat' ))) ;  }  ?>');">
			<?php
			the_archive_title( '<h1 class="page-title arc-tit">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
	</header><!-- .page-header -->
	<main id="main" class="site-main row pl-0 pr-0 ml-0 mr-0">
		<?php if ( have_posts() ) : ?>
		<div class="col-md-8 pl-0">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'archive');
			endwhile;
			//Previous / next page navigation
			the_posts_pagination( array(
			'prev_text'          => '<i class="fa fa-angle-left"></i>',
			'next_text'          => '<i class="fa fa-angle-right"></i>',
			'screen_reader_text' => __('Posts navigation', 'pepe-lite')
			) ); 
			else :
			get_template_part( 'template-parts/content', 'none' );
			endif;?>
		</div>
		<div class="col-md-4 pr-0">
		<?php dynamic_sidebar( 'sidebar-archive' ); ?>  
		</div>
	</main><!-- #main -->
</div><!-- #primary -->


