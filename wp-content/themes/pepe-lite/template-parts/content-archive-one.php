<?php
/**
* content-archive-one.php
* @author    Franchi Design
* @package   pepe-lite
*/

?>

<?php edit_post_link('edit'); ?>
<?php pepe_lite_post_thumbnail(); ?>
<header class="entry-header entry-header-archive">
	<?php
	if ( is_singular() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;
	if ( 'post' === get_post_type() ) : ?>
	<?php endif; ?>
</header><!-- .entry-header -->
<div class="entry-content">
	<?php 
		the_excerpt();
	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pepe-lite' ),
		'after'  => '</div>',
	) );
	?>
	<div class="entry-meta entry-meta-archive row mt-3 mb-3">
		<div class="col">
			<?php pepe_lite_posted_on();?>
		</div>
	</div><!-- .entry-meta -->
	
</div><!-- .entry-content -->
