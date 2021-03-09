<?php
/**
* widget-author.php
*
* @author    Denis Franchi
* @package   pepe-lite
*/


// register Pepe Post two 
add_action( 'widgets_init', function(){
	register_widget( 'Pepe_lite_author_Widget' );
});


// Creating the widget 
class Pepe_lite_author_Widget extends WP_Widget {
		public function __construct() {
	    	$pepe_opts = array(
				'classname'   => 'pepe_author_post',
				'description' => esc_html__( 'Widget to display Author', 'pepe-lite' ),
    		);
			parent::__construct( 'pepe_author_post', esc_html__( 'DF: Pepe Author', 'pepe-lite' ), $pepe_opts );
}
// Enable Color Picker
public function admin_enqueue_scripts ( $hook_suffix )
{
    if ( $hook_suffix != 'widgets.php' ) return;

    wp_enqueue_style( 'wp-color-picker' );          
    wp_enqueue_script( 'wp-color-picker' ); 
    
}
// Creating widget front-end
public function widget( $args, $instance ) {
    $pepe_title        = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Author','pepe-lite' ) : $instance['title'], $instance, $this->id_base );
    $pepe_border_radius= !empty($instance['border_radius']) ? $instance['border_radius'] : 50;
    $pepe_enable_icons= ! empty( $instance['enable_icons'] ) ? $instance['enable_icons'] : 0;
    echo $args['before_widget'];
		        if ( ! empty( $pepe_title ) ) { ?>
                   <div class="pepe-class-pepe-author-title">
		        	  <?php echo $args['before_title']. $pepe_title . $args['after_title'];?>
                   </div>
                    <?php
                    } ?>
         <div class="authorlist container">
             <div class="row">
                 <?php pepe_lite_contributors(); ?>
             </div>
         </div>
<style>
    .authorlist img{
      border-radius: <?php if ( $pepe_border_radius ) { echo esc_attr( $pepe_border_radius);}?>%;
     }
</style>
<?php if ( $pepe_enable_icons ) {
				echo '<style>
                .icon-author i{
                  display:inherit!important;
                }
            </style>';
			}
	echo $args['after_widget'];
}
// Updating widget replacing old instances with new	
public function update( $new_instance, $old_instance ) {
    $instance                 = $old_instance;
    $instance['title']        = sanitize_text_field( $new_instance['title'] );
    $instance['border_radius']= !empty($new_instance['border_radius']) ? absint($new_instance['border_radius']) : 50;
    $instance['enable_icons']= (bool) $new_instance['enable_icons'] ? 1 : 0;
    return $instance;

}
// Widget Backend 
public function form( $instance ) {
    $pepe_border_radius = (isset($instance['border_radius'])) ? $instance['border_radius'] : 50;
    $instance        = wp_parse_args( (array) $instance, array(
        'title'              => __( 'Author','pepe-lite' ),
        'enable_icons'       => 1,
        ) );
    ?>
            <!-- Title -->
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'pepe-lite' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
            </p>
             <!-- Percentage border radius -->
             <p>
			    <label for="<?php echo esc_attr($this->get_field_id('border_radius')); ?>">
				    <?php esc_html_e('Border Radius (% Unit) Min 1 Max 50', 'pepe-lite'); ?>
                </label>
			    <input class="widefat select-numpost" id="<?php echo esc_attr($this->get_field_id('border_radius')); ?>" name="<?php echo esc_attr($this->get_field_name('border_radius')); ?>" type="number" value="<?php echo esc_attr($pepe_border_radius); ?>">
            </p> 
             <!-- Enable Icons -->
             <p>
	            <input class="checkbox" type="checkbox" <?php checked( $instance['enable_icons'] ); ?> id="<?php echo esc_attr( $this->get_field_id( 'enable_icons' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'enable_icons' ) ); ?>" />
	            <label for="<?php echo esc_attr( $this->get_field_id( 'enable_icons' ) ); ?>"><?php esc_html_e( 'Enable Icons', 'pepe-lite' ); ?></label>
            </p>     
<?php
}

}