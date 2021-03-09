<?php
/**
* Template Name: Single Large
* Template Post Type: post
* @author    Denis Franchi
* @package   pepe-lite
*
*/

get_header();
if (true == get_theme_mod('pepe_show_breadcrumbs_post',true)):
    pepe_lite_custom_breadcrumbs(); 
    endif;?>
<div class="pepe-article row">
	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main">
			<?php
			while ( have_posts() ) :
			the_post();?>
			<?php if (true == get_theme_mod('pepe_show_cat_post',true)):?> 
				<div class="pepe-cat-single">
				<?php the_category(' ');?>
				</div>
			<?php endif;
			get_template_part( 'template-parts/content', get_post_type() );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
