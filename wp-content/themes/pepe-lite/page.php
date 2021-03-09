<?php
/**
* page.php
* @author    Franchi Design
* @package   pepe-lite
*/

get_header();
?>

<div id="primary" class="content-area row">
    <main id="main" class="site-main sit-main-part col-md-8">
		<?php
		while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->
	<div class="col-md-4 pepe-sid-page-margin">
			<?php get_sidebar();?>
	   </div>
	</div><!-- #primary -->
<?php
get_footer();





