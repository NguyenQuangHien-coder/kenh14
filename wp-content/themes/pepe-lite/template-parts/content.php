<?php
/**
* content.php
* @author    Franchi Design
* @package   pepe-lite
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<?php if (true == get_theme_mod('pepe_lite_enable_meta_info_post',true)):?> 
			<div class="entry-meta row mt-3 mb-3">
	           <div class="col-md-9">
			     <?php echo get_avatar( get_the_author_meta('user_email'), $size = '20'); 
				  pepe_lite_posted_by();
				  pepe_lite_posted_on();?>
			   </div>
			   <div class="col-md-3 pepe-meta-header text-right">
			   <?php if(function_exists('the_views')) { the_views(); } ?>
			   <i class="fas fa-comment-alt ml-4"></i><a href="<?php comments_link(); ?>"><?php echo esc_html(get_comments_number());?></a>
				   
			   </div>
			</div><!-- .entry-meta -->
			<?php endif;?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php edit_post_link('edit'); ?>
	<?php pepe_lite_post_thumbnail(); ?>
	<div class="entry-content mt-4">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pepe-lite' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pepe-lite' ),
			'after'  => '</div>',
		) );
		?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pepe_lite_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
