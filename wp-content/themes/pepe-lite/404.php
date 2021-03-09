<?php
/**
* 404.php
* @author    Franchi Design
* @package   pepe-lite
*/

get_header();?>

<div id="primary" class="content-area page-404-content text-center">
	<main id="main" class="site-main">
		<section class="error-404 not-found">
			<header class="page-header text-center mt-5 title-404-sector">
				<h1 class="page-title">
					<?php echo esc_html('Oops! That page can&rsquo;t be found.','pepe-lite')?>
				</h1>
			</header><!-- .page-header -->
			<div class="page-content pepe-button-404">
			   <a class="pep-6 pep3" href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html('GO TO THE HOME PAGE','pepe-lite')?><span></span></a>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
