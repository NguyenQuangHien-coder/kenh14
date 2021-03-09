<?php
/**
* widget-video.php
*
* @author    Denis Franchi
* @package   pepe-lite
*/


add_action( 'widgets_init', function(){
	register_widget( 'Pepe_lite_video_Widget' );
});

class Pepe_lite_video_Widget extends WP_Widget_Media {

	public function __construct() {
		parent::__construct(
			'media_video',
			__( 'DF:Pepe Video','pepe-lite'),
			array(
				'description' => __( 'Displays a video from the media library or from YouTube, Vimeo, or another provider.','pepe-lite' ),
                'mime_type'   => 'video',
                'classname'   => 'pepe_video_post',
			)
		);

		$this->l10n = array_merge(
			$this->l10n,
			array(
				'no_media_selected'          => __( 'No video selected','pepe-lite' ),
				'add_media'                  => _x( 'Add Video', 'label for button in the video widget', 'pepe-lite'),
				'replace_media'              => _x( 'Replace Video', 'label for button in the video widget; should preferably not be longer than ~13 characters long','pepe-lite' ),
				'edit_media'                 => _x( 'Edit Video', 'label for button in the video widget; should preferably not be longer than ~13 characters long','pepe-lite' ),
				'missing_attachment'         => sprintf(
					/* translators: %s: URL to media library. */
					__( 'We can&#8217;t find that video. Check your <a href="%s">media library</a> and make sure it wasn&#8217;t deleted.','pepe-lite'),
					esc_url( admin_url( 'upload.php' ) )
				),
				/* translators: %d: Widget count. */
				'media_library_state_multi'  => _n_noop( 'Video Widget (%d)', 'Video Widget (%d)','pepe-lite' ),
				'media_library_state_single' => __( 'Video Widget','pepe-lite' ),
				/* translators: %s: A list of valid video file extensions. */
				'unsupported_file_type'      => sprintf( __( 'Sorry, we can&#8217;t load the video at the supplied URL. Please check that the URL is for a supported video file (%s) or stream (e.g. YouTube and Vimeo).','pepe-lite' ), '<code>.' . implode( '</code>, <code>.', wp_get_video_extensions() ) . '</code>' ),
			)
        );
	}
	
  
	public function get_instance_schema() {

		$schema = array(
			'preload' => array(
				'type'                  => 'string',
				'enum'                  => array( 'none', 'auto', 'metadata' ),
				'default'               => 'metadata',
				'description'           => __( 'Preload','pepe-lite' ),
				'should_preview_update' => false,
			),
			'loop'    => array(
				'type'                  => 'boolean',
				'default'               => false,
				'description'           => __( 'Loop' ,'pepe-lite'),
				'should_preview_update' => false,
			),
			'content' => array(
				'type'                  => 'string',
				'default'               => '',
				'sanitize_callback'     => 'wp_kses_post',
				'description'           => __( 'Tracks (subtitles, captions, descriptions, chapters, or metadata)','pepe-lite' ),
				'should_preview_update' => false,
            ),
            
           
        );
        
        
		foreach ( wp_get_video_extensions() as $video_extension ) {
			$schema[ $video_extension ] = array(
				'type'        => 'string',
				'default'     => '',
				'format'      => 'uri',
				/* translators: %s: Video extension. */
				'description' => sprintf( __( 'URL to the %s video source file','pepe-lite' ), $video_extension ),
			);
		}

		return array_merge( $schema, parent::get_instance_schema() );
    }
    
	public function render_media( $instance ) {
		$instance   = array_merge( wp_list_pluck( $this->get_instance_schema(), 'default' ), $instance );
        $attachment = null;
        
		if ( $this->is_attachment_with_mime_type( $instance['attachment_id'], $this->widget_options['mime_type'] ) ) {
			$attachment = get_post( $instance['attachment_id'] );
		}

		$src = $instance['url'];
		if ( $attachment ) {
			$src = wp_get_attachment_url( $attachment->ID );
		}

		if ( empty( $src ) ) {
			return;
		}

		$youtube_pattern = '#^https?://(?:www\.)?(?:youtube\.com/watch|youtu\.be/)#';
		$vimeo_pattern   = '#^https?://(.+\.)?vimeo\.com/.*#';

		if ( $attachment || preg_match( $youtube_pattern, $src ) || preg_match( $vimeo_pattern, $src ) ) {
			add_filter( 'wp_video_shortcode', array( $this, 'inject_video_max_width_style' ) );

			echo wp_video_shortcode(
				array_merge(
					$instance,
					compact( 'src' )
				),
				$instance['content']
			);

			remove_filter( 'wp_video_shortcode', array( $this, 'inject_video_max_width_style' ) );
		} else {
			echo $this->inject_video_max_width_style( wp_oembed_get( $src ) );
        }
        
	}

	public function inject_video_max_width_style( $html ) {
		$html = preg_replace( '/\sheight="\d+"/', '', $html );
		$html = preg_replace( '/\swidth="\d+"/', '', $html );
		$html = preg_replace( '/(?<=width:)\s*\d+px(?=;?)/', '100%', $html );
		return $html;
	}

	public function enqueue_preview_scripts() {
		/** This filter is documented in wp-includes/media.php */
		if ( 'mediaelement' === apply_filters( 'wp_video_shortcode_library', 'mediaelement' ) ) {
			wp_enqueue_style( 'wp-mediaelement' );
			wp_enqueue_script( 'mediaelement-vimeo' );
			wp_enqueue_script( 'wp-mediaelement' );
		}
	}

	public function enqueue_admin_scripts() {
		parent::enqueue_admin_scripts();

		$handle = 'media-video-widget';
		wp_enqueue_script( $handle );

		$exported_schema = array();
		foreach ( $this->get_instance_schema() as $field => $field_schema ) {
			$exported_schema[ $field ] = wp_array_slice_assoc( $field_schema, array( 'type', 'default', 'enum', 'minimum', 'format', 'media_prop', 'should_preview_update' ) );
		}
		wp_add_inline_script(
			$handle,
			sprintf(
				'wp.mediaWidgets.modelConstructors[ %s ].prototype.schema = %s;',
				wp_json_encode( $this->id_base ),
				wp_json_encode( $exported_schema )
			)
		);

		wp_add_inline_script(
			$handle,
			sprintf(
				'
					wp.mediaWidgets.controlConstructors[ %1$s ].prototype.mime_type = %2$s;
					wp.mediaWidgets.controlConstructors[ %1$s ].prototype.l10n = _.extend( {}, wp.mediaWidgets.controlConstructors[ %1$s ].prototype.l10n, %3$s );
				',
				wp_json_encode( $this->id_base ),
				wp_json_encode( $this->widget_options['mime_type'] ),
				wp_json_encode( $this->l10n )
			)
		);
	}

	public function render_control_template_scripts() {
		parent::render_control_template_scripts()
		?>
		<script type="text/html" id="tmpl-wp-media-widget-video-preview">
			<# if ( data.error && 'missing_attachment' === data.error ) { #>
				<div class="notice notice-error notice-alt notice-missing-attachment">
					<p><?php echo $this->l10n['missing_attachment']; ?></p>
				</div>
			<# } else if ( data.error && 'unsupported_file_type' === data.error ) { #>
				<div class="notice notice-error notice-alt notice-missing-attachment">
					<p><?php echo $this->l10n['unsupported_file_type']; ?></p>
				</div>
			<# } else if ( data.error ) { #>
				<div class="notice notice-error notice-alt">
					<p><?php esc_html_e( 'Unable to preview media due to an unknown error.','pepe-lite' ); ?></p>
				</div>
			<# } else if ( data.is_oembed && data.model.poster ) { #>
				<a href="{{ data.model.src }}" target="_blank" class="media-widget-video-link">
					<img src="{{ data.model.poster }}" />
				</a>
			<# } else if ( data.is_oembed ) { #>
				<a href="{{ data.model.src }}" target="_blank" class="media-widget-video-link no-poster">
					<span class="dashicons dashicons-format-video"></span>
				</a>
			<# } else if ( data.model.src ) { #>
				<?php wp_underscore_video_template(); ?>
			<# } #>
		</script>
		<?php
	}
}
