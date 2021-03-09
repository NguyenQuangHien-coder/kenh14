<?php
/**
* widget-category.php
*
* @author    Denis Franchi
* @package   pepe-lite
*/


add_action( 'widgets_init', function(){
	register_widget( 'Pepe_lite_category_Widget' ); 
});

class Pepe_lite_category_Widget extends WP_Widget {
	/**
	 * Sets up a new Categories widget instance.
	 *
	 * @since 2.8.0
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'pepe_cat_post',
			'description'                 => __( 'A list categories.','pepe-lite' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'categories', __( 'DF: Pepe Categories','pepe-lite' ), $widget_ops );
	}
	public function widget( $args, $instance ) {
		static $first_dropdown = true;

		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Categories','pepe-lite' );
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$c = ! empty( $instance['count'] ) ? '1' : '0';
		$h = ! empty( $instance['hierarchical'] ) ? '1' : '0';
		$d = ! empty( $instance['dropdown'] ) ? '1' : '0';
		echo $args['before_widget'];
        if ( $title ) {?>
        <div class="pepe-class-pepe-cat-title"><?php
			echo $args['before_title'] . $title . $args['after_title'];
	     	}?>
		</div>
       <?php
		$cat_args = array(
			'orderby'      => 'name',
			'show_count'   => $c,
			'hierarchical' => $h,
		);

		if ( $d ) {
			echo sprintf( '<form class="select-cat-widget" action="%s" method="get">', esc_url( home_url() ) );
			$dropdown_id    = ( $first_dropdown ) ? 'cat' : "{$this->id_base}-dropdown-{$this->number}";
			$first_dropdown = false;

			echo '<label class="screen-reader-text" for="' . esc_attr( $dropdown_id ) . '">' . '</label>';
			$cat_args['show_option_none'] = __( 'Select Category','pepe-lite');
			$cat_args['id']               = $dropdown_id;

			wp_dropdown_categories( apply_filters( 'widget_categories_dropdown_args', $cat_args, $instance ) );

			echo '</form>';

			$type_attr = current_theme_supports( 'html5', 'script' ) ? '' : ' type="text/javascript"';
			?>

<script<?php echo $type_attr; ?>>
/* <![CDATA[ */
(function() {
	var dropdown = document.getElementById( "<?php echo esc_js( $dropdown_id ); ?>" );
	function onCatChange() {
		if ( dropdown.options[ dropdown.selectedIndex ].value > 0 ) {
			dropdown.parentNode.submit();
		}
	}
	dropdown.onchange = onCatChange;
})();
/* ]]> */
</script>

			<?php
		} else {
			?>
		<ul class="cat-widget">
			<?php
			$cat_args['title_li'] = '';
			wp_list_categories( apply_filters( 'widget_categories_args', $cat_args, $instance ) );
			?>
		</ul>
			<?php
		}
		echo $args['after_widget'];
	}
	public function update( $new_instance, $old_instance ) {
		$instance                 = $old_instance;
		$instance['title']        = sanitize_text_field( $new_instance['title'] );
		$instance['count']        = ! empty( $new_instance['count'] ) ? 1 : 0;
		$instance['hierarchical'] = ! empty( $new_instance['hierarchical'] ) ? 1 : 0;
		$instance['dropdown']     = ! empty( $new_instance['dropdown'] ) ? 1 : 0;
		return $instance;
	}
	public function form( $instance ) {
		//Defaults
		$instance     = wp_parse_args( (array) $instance, array( 'title' => '' ) );
		$count        = isset( $instance['count'] ) ? (bool) $instance['count'] : false;
		$hierarchical = isset( $instance['hierarchical'] ) ? (bool) $instance['hierarchical'] : false;
		$dropdown     = isset( $instance['dropdown'] ) ? (bool) $instance['dropdown'] : false;
		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:','pepe-lite' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" /></p>
		<p><input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id( 'dropdown' ); ?>" name="<?php echo $this->get_field_name( 'dropdown' ); ?>"<?php checked( $dropdown ); ?> />
		<label for="<?php echo $this->get_field_id( 'dropdown' ); ?>"><?php esc_html_e( 'Display as dropdown','pepe-lite' ); ?></label><br />
		<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>"<?php checked( $count ); ?> />
		<label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php esc_html_e( 'Show post counts','pepe-lite' ); ?></label><br />
		<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id( 'hierarchical' ); ?>" name="<?php echo $this->get_field_name( 'hierarchical' ); ?>"<?php checked( $hierarchical ); ?> />
		<label for="<?php echo $this->get_field_id( 'hierarchical' ); ?>"><?php esc_html_e( 'Show hierarchy','pepe-lite' ); ?></label></p>
		<?php
	}

}
