<?php
/**
* single.php
* @author    Franchi Design
* @package   pepe-lite
*/

get_header();
if (true == get_theme_mod('pepe_show_breadcrumbs_post',true)):
pepe_lite_custom_breadcrumbs(); 
endif;?>
<div class="pepe-article row">
    <div id="primary" class="content-area <?php if (true == get_theme_mod('pepe_show_sidebar_sticky_post',true)): ?>content-area-single-st<?php endif;?> col-md-8">
        <main id="main" class="site-main">
          <?php
            while ( have_posts() ) :
            the_post();
            if (true == get_theme_mod('pepe_show_cat_post',true)):?> 
            <div class="pepe-cat-single">
              <?php the_category(' ');?>
            </div>
            <?php endif;
            get_template_part( 'template-parts/content', get_post_type() );
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
            endwhile; // End of the loop.?>
        </main><!-- #main -->
	 </div><!-- #primary -->
   <div class="<?php if (true == get_theme_mod('pepe_show_sidebar_sticky_post',true)): ?>pepe-sidebar-article<?php endif;?> pepe-sidebar-article-margin col-md-4">
	    <?php get_sidebar();?>
	 </div>
</div>
<?php
get_footer();
