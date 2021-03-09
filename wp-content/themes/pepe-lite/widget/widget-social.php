<?php
/**
* widget-post-one.php
*
* @author    Denis Franchi
* @package   pepe-lite
*/


// register Pepe Post two 
add_action( 'widgets_init', function(){
	register_widget( 'Pepe_lite_social_Widget' );
});

	
class Pepe_lite_social_Widget extends WP_Widget {

	public function __construct() {
	$pepe_opts = array(
		'classname'   => 'pepe_social_post',
		'description' => esc_html__( 'Widget to display Media Social', 'pepe-lite' ),
    );
	parent::__construct( 'pepe_social_post', esc_html__( 'DF: Pepe Social', 'pepe-lite' ), $pepe_opts );
}

	public function form( $instance ) {

		$title     = isset( $instance['title'] ) ? $instance['title'] : __( 'Social','pepe-lite' );
		$facebook  = ( isset( $instance['facebook'] ) ) ? $instance['facebook'] : '';
		$twitter   = ( isset( $instance['twitter'] ) ) ? $instance['twitter'] : '';
		$instagram = ( isset( $instance['instagram'] ) ) ? $instance['instagram'] : '';
		$linkedin  = ( isset( $instance['linkedin'] ) ) ? $instance['linkedin'] : '';
		$pinterest = ( isset( $instance['pinterest'] ) ) ? $instance['pinterest'] : '';
		$dribbble  = ( isset( $instance['dribbble'] ) ) ? $instance['dribbble'] : '';
		$github    = ( isset( $instance['github'] ) ) ? $instance['github'] : '';
		$youtube   = ( isset( $instance['youtube'] ) ) ? $instance['youtube'] : '';
		$tumblr    = ( isset( $instance['tumblr'] ) ) ? $instance['tumblr'] : '';
		$flickr    = ( isset( $instance['flickr'] ) ) ? $instance['tumblr'] : '';	

		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title :', 'pepe-lite' );?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_html_e( 'Enter facebook URL:', 'pepe-lite' );?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php echo esc_url( $facebook ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_html_e( 'Enter twitter URL:', 'pepe-lite' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text" value="<?php echo esc_url( $twitter ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"><?php esc_html_e( 'Enter instagram URL:', 'pepe-lite' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" type="text" value="<?php echo esc_url( $instagram ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php esc_html_e( 'Enter linkedin URL:', 'pepe-lite' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" type="text" value="<?php echo esc_url( $linkedin ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"><?php esc_html_e( 'Enter pinterest URL:', 'pepe-lite' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'pinterest' ) ); ?>" type="text" value="<?php echo esc_url( $pinterest ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>"><?php esc_html_e( 'Enter dribbble URL:', 'pepe-lite' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'dribbble' ) ); ?>" type="text" value="<?php echo esc_url( $dribbble ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'github' ) ); ?>"><?php esc_html_e( 'Enter github URL:', 'pepe-lite' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'github' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'github' ) ); ?>" type="text" value="<?php echo esc_url( $github ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"><?php esc_html_e( 'Enter youtube URL:', 'pepe-lite' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" type="text" value="<?php echo esc_url( $youtube ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>"><?php esc_html_e( 'Enter tumblr URL:', 'pepe-lite' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'tumblr' ) ); ?>" type="text" value="<?php echo esc_url( $tumblr ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>"><?php esc_html_e( 'Enter flickr URL:', 'pepe-lite' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'flickr' ) ); ?>" type="text" value="<?php echo esc_url( $flickr ); ?>">
		</p>
		

		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance              = array();
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['facebook']  = ( ! empty( $new_instance['facebook'] ) ) ? esc_url_raw( $new_instance['facebook'] ) : '';
		$instance['twitter']   = ( ! empty( $new_instance['twitter'] ) ) ? esc_url_raw( $new_instance['twitter'] ) : '';
		$instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? esc_url_raw( $new_instance['instagram'] ) : '';
		$instance['linkedin']  = ( ! empty( $new_instance['linkedin'] ) ) ? esc_url_raw( $new_instance['linkedin'] ) : '';
		$instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? esc_url_raw( $new_instance['pinterest'] ) : '';
		$instance['dribbble']  = ( ! empty( $new_instance['dribbble'] ) ) ? esc_url_raw( $new_instance['dribbble'] ) : '';
		$instance['github']    = ( ! empty( $new_instance['github'] ) ) ? esc_url_raw( $new_instance['github'] ) : '';
		$instance['youtube']   = ( ! empty( $new_instance['youtube'] ) ) ? esc_url_raw( $new_instance['youtube'] ) : '';
		$instance['tumblr']    = ( ! empty( $new_instance['tumblr'] ) ) ? esc_url_raw( $new_instance['tumblr'] ) : '';
		$instance['flickr']    = ( ! empty( $new_instance['flickr'] ) ) ? esc_url_raw( $new_instance['flickr'] ) : '';

		return $instance;
	}

	public function widget( $args, $instance ) {
		
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Social', 'pepe-lite' ) :
		$instance['title'], $instance, $this->id_base );
			
		echo $args['before_widget'];
		?><div class="pepe-class-pepe-social-title"><?php
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		?>
	   </div>
		<div class="social-link">
			<ul class="list-inline">
				<?php $facebook_link = isset($instance['facebook']) ? $instance['facebook'] : '';
				if ( $facebook_link ) { ?>
					<li><a href="<?php echo esc_url( $facebook_link ) ?>" class="facebook"> 
					<i class="fab fa-facebook"></i></a></li>
				<?php } ?>

				<?php $twitter_link = isset($instance['twitter']) ? $instance['twitter'] : '';
				if ( $twitter_link ) { ?>
					<li><a href="<?php echo esc_url( $twitter_link ) ?>" class="twitter">
					<i class="fab fa-twitter"></i></a></li>
				<?php } ?>

				<?php $instagram_link = isset($instance['instagram']) ? $instance['instagram'] : '';
				if ( $instagram_link ) { ?>
					<li><a href="<?php echo esc_url( $instagram_link ) ?>" class="instagram">
					<i class="fab fa-instagram"></i></a></li>
				<?php } ?>

				<?php $linkedin_link = isset($instance['linkedin']) ? $instance['linkedin'] : '';
				if ( $linkedin_link ) { ?>
					<li><a href="<?php echo esc_url( $linkedin_link ) ?>" class="linkedin">
					<i class="fab fa-linkedin"></i></a></li>
				<?php } ?>

				<?php $pinterest_link = isset($instance['pinterest']) ? $instance['pinterest'] : '';
				if ( $pinterest_link ) { ?>
					<li><a href="<?php echo esc_url( $pinterest_link ) ?>" class="pinterest">
					<i class="fab fa-pinterest-p"></i></a></li>
				<?php } ?>

				<?php $dribbble_link = isset($instance['dribbble']) ? $instance['dribbble'] : '';
				if ( $dribbble_link ) { ?>
					<li><a href="<?php echo esc_url( $dribbble_link ) ?>" class="dribbble">
					<i class="fab fa-dribbble"></i></a></li>
				<?php } ?>

				<?php $github_link = isset($instance['github']) ?  $instance['github'] : '';
				if ( $github_link ) { ?>
					<li><a href="<?php echo esc_url( $github_link ) ?>" class="github">
					<i class="fab fa-github"></i></a></li>
				<?php } ?>

				<?php $youtube_link = isset($instance['youtube']) ? $instance['youtube'] : '';
				if ( $youtube_link ) { ?>
					<li><a href="<?php echo esc_url( $youtube_link ) ?>" class="youtube">
					<i class="fab fa-youtube-square"></i></a></li>
				<?php } ?>

				<?php $tumblr_link = isset($instance['tumblr']) ? $instance['tumblr'] : '';
				if ( $tumblr_link ) { ?>
					<li><a href="<?php echo esc_url( $tumblr_link ) ?>" class="tumblr">
					<i class="fab fa-tumblr"></i></a></li>
				<?php } ?>

				<?php $flickr_link = isset($instance['flickr']) ? $instance['flickr'] : '';
				if ( $flickr_link ) { ?>
					<li><a href="<?php echo esc_url( $flickr_link ) ?>" class="flickr">
					<i class="fab fa-flickr"></i></a></li>
				<?php } ?>
			</ul>
</div>
	<?php
	echo $args['after_widget'];
	}
}
