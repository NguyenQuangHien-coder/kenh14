<?php
/**
* comments.php
* @author    Franchi Design
* @package   pepe-lite
*/
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$pepe_comment_count = get_comments_number();
			if ( '1' === $pepe_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( '%1$s', 'pepe-lite' ),
					'<span>' .__('COMMENT','pepe-lite') . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%2$s', ' %2$s', $pepe_comment_count, 'comments title', 'pepe-lite' ) ),
					number_format_i18n( $pepe_comment_count ),
					'<span>' .__('COMMENTS','pepe-lite') . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->
		<?php the_comments_navigation(); ?>
			<?php
			wp_list_comments( array(
				'short_ping' => true,
				'avatar_size' => 52,
				'callback' => 'pepe_lite_better_comments'
			) );
			?>
		<?php
		the_comments_navigation();
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'pepe-lite' ); ?></p>
			<?php
		endif;
	endif; // Check for have_comments().
	comment_form(
		$args = array(
			'fields' => apply_filters(
				'pepe_lite_comment_form_default_fields', array(
					'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder='.esc_attr('Name:*','pepe-lite').' name="author" type="text" value="' .
						esc_attr( $commenter['comment_author'] ) . '" size="30"' .  ' />'.
						( $req ? '<span class="required"></span>' : '' )  .
						'</p>'
						,
					'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder='.esc_attr('Email:*','pepe-lite').' name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
						'" size="30"' . ' />'  .
						
						( $req ? '<span class="required"></span>' : '' ) 
						 .
						'</p>',
					'url'    => '<p class="comment-form-url">' .
					 '<input id="url" name="url" placeholder='.esc_attr('Website:','pepe-lite').' type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
					   '</p>'
				)
			),
			'comment_field' => '<p class="comment-form-comment">' .
				'<textarea id="comment" name="comment" placeholder='.esc_attr('Comment...','pepe-lite').' cols="45" rows="8" aria-required="true"></textarea>' .
				'</p>',
			'comment_notes_after' => '',
			'title_reply' => '<div class="crunchify-text"> <h5>'.__('Please Post Your Comments & Reviews','pepe-lite').'</h5></div>',
			
		)
	);
	?>

</div><!-- #comments -->
