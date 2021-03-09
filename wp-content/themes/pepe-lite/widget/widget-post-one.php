<?php
/**
* widget-post-one.php
*
* @author    Denis Franchi
* @package   pepe-lite
*/


// register Pepe Post two 
add_action( 'widgets_init', function(){
	register_widget( 'Pepe_lite_post_one_Widget' );
});

// Creating the widget 
class Pepe_lite_post_one_Widget extends WP_Widget {
		public function __construct() {
	    	$pepe_opts = array(
				'classname'   => 'pepe_post_one_post',
				'description' => esc_html__( 'Widget to display posts type One', 'pepe-lite' ),);
			parent::__construct( 'pepe_post_one_post', esc_html__( 'DF: Pepe Post Type One', 'pepe-lite' ), $pepe_opts );
}

// Creating widget front-end
public function widget( $args, $instance ) {
            $pepe_title 		= apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
			$pepe_category      = ! empty( $instance['pepe_category'] ) ? $instance['pepe_category'] : 0;
			$pepe_enable_date   = ! empty( $instance['enable_date'] ) ? $instance['enable_date'] : 0;
		    $pepe_select        = isset( $instance['select'] ) ? $instance['select'] : '';
			$pepe_num           = !empty($instance['post_number']) ? $instance['post_number'] : '-1';
			$pepe_enable_cat    = ! empty( $instance['enable_cat'] ) ? $instance['enable_cat'] : 0;
	        echo $args['before_widget'];
		        if ( ! empty( $pepe_title ) ) { ?>
                   <div class="pepe-class-pepe-post-one-title">
		        		<?php
			        	 if( 1 === $pepe_enable_date && absint( $pepe_category ) > 0 ){
							$pepe_cat_link = get_category_link( $pepe_category );
			        		echo $args['before_title'] . '<a href="'.esc_url( $pepe_cat_link [0]).'">'.$pepe_title .'</a>'.$args['after_title'];
			        	}else{
                        	echo $args['before_title']. $pepe_title . $args['after_title'];
                    	} ?>
                    </div>
                   	<?php
                      } ?>
                    <div class="container pr-0">
				    <div class="row">
	        	        <?php
	        	           $pepe_args = array(
		        				        	'posts_per_page' 		=> absint( $pepe_num),
		        				        	'no_found_rows'  		=> true,
		        				        	'post__not_in'          => get_option( 'sticky_posts' ),
		        				        	'ignore_sticky_posts'   => true,);
	        	        if ( absint( $pepe_category ) > 0 ) { $pepe_args['cat'] = absint( $pepe_category ); }
	        	        $pepe_post = new WP_Query( $pepe_args );
	        	        if ( $pepe_post->have_posts() ) :
							while ( $pepe_post->have_posts() ) :
								$pepe_post->the_post(); ?>
	    	                    <div class="col-md-<?php if ( $pepe_select ) {
											 echo  $pepe_select ; };?> pl-0">
	    							 <div class="pepe-post-one-widget-content">
										        <?php edit_post_link('edit'); ?>
											    <?php if (has_post_thumbnail()) : ?>
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', ['class' => 'fadeimg']); ?></a>
										    	<?php else : ?>
												<a href="<?php the_permalink(); ?>">
												<img class="fadeimg" src="<?php echo esc_url(get_template_directory_uri()).'/images/pepe-thumbnail-default.png'; ?>"/>
												</a>
												<?php endif; ?>
												<div class="pepe-post-one-widget-title">
												    <?php $pepe_cat_post=  wp_kses_post(get_the_category_list(wp_kses_post(' - ', 'pepe-lite'))); ?>
												     <?php if ( $pepe_enable_cat ) { echo'<div class="cat_title">'.$pepe_cat_post.'</div>'; } ?>
													 <h2 class="cat_cont"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
													 <?php $pepe_date_post= esc_html( get_the_date() );?>
													 <?php if ( $pepe_enable_date ) { echo '<span>'.$pepe_date_post.'</span>'; } ?>
												</div>
										</div>
	    	                    </div>
	                            <?php
							endwhile; 
	                        wp_reset_postdata(); 
	                    endif;?>
					</div>

                </div>
	        <?php
	        echo $args['after_widget'];
}
		
// Updating widget replacing old instances with new	
public function update( $new_instance, $old_instance ) {
	        $instance                    = $old_instance;
			$instance['title']           = sanitize_text_field( $new_instance['title'] );
			$instance['pepe_category']   = absint( $new_instance['pepe_category'] );
			$instance['enable_date']     = (bool) $new_instance['enable_date'] ? 1 : 0;
			$instance['post_number']     = !empty($new_instance['post_number']) ? absint($new_instance['post_number']) : 4;
			$instance['enable_cat']      = (bool) $new_instance['enable_cat'] ? 1 : 0;
			$instance['select']          = isset( $new_instance['select'] ) ? wp_strip_all_tags( $new_instance['select'] ) : '';
	        return $instance;
}

// Widget Backend 
public function form( $instance ) {
			$pepe_num             = (isset($instance['post_number'])) ? $instance['post_number'] : 4;
			$instance['select']   = isset( $new_instance['select'] ) ? wp_strip_all_tags( $new_instance['select'] ) : '';
	        $instance             = wp_parse_args( (array) $instance, array(
				'title'         	 => '',
				'pepe_category'  	 => '',
				'enable_date'  		 => 1,
				'enable_cat'         => 0) );
	        ?>
            <!-- Title -->
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'pepe-lite' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
            </p>
	        <!-- Categories -->
	        <p>
	          <label for="<?php echo  esc_attr( $this->get_field_id( 'pepe_category' ) ); ?>"><strong><?php esc_html_e( 'Category:', 'pepe-lite' ); ?></strong></label>
				<?php
	            $pepe_cat_args = array(
	                'orderby'         => 'name',
	                'hide_empty'      => 1,
	                'class' 		  => 'widefat',
					'taxonomy'        => 'category',
					'show_count'      => 1,
	                'name'            => $this->get_field_name( 'pepe_category' ),
	                'id'              => $this->get_field_id( 'pepe_category' ),
	                'selected'        => absint( $instance['pepe_category'] ),
	                'show_option_all' => esc_html__( 'All Categories','pepe-lite' ),
	              );
	            wp_dropdown_categories( $pepe_cat_args );
				?>
			</p>
				<!-- Number Posts Enable -->
				 <p>
			       <label for="<?php echo esc_attr($this->get_field_id('post_number')); ?>">
				     <?php esc_html_e('Number Of Posts To show:', 'pepe-lite'); ?>
			       </label>
			       <input class="widefat select-numpost" id="<?php echo esc_attr($this->get_field_id('post_number')); ?>" name="<?php echo esc_attr($this->get_field_name('post_number')); ?>" type="number" value="<?php echo esc_attr($pepe_num); ?>">
		         </p>
                 <!-- Date -->
	             <p>
	               <input class="checkbox" type="checkbox" <?php checked( $instance['enable_date'] ); ?> id="<?php echo esc_attr( $this->get_field_id( 'enable_date' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'enable_date' ) ); ?>" />
	                 <label for="<?php echo esc_attr( $this->get_field_id( 'enable_date' ) ); ?>"><?php esc_html_e( 'Enable date', 'pepe-lite' ); ?></label>
	             </p>
			     <!-- Cat Enable -->
	             <p>
	               <input class="checkbox" type="checkbox" <?php checked( $instance['enable_cat'] ); ?> id="<?php echo esc_attr( $this->get_field_id( 'enable_cat' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'enable_cat' ) ); ?>" />
	                 <label for="<?php echo esc_attr( $this->get_field_id( 'enable_cat' ) ); ?>"><?php esc_html_e( 'Enable Category', 'pepe-lite' ); ?></label>
	             </p>
				 <!-- Select Layout -->
				 <p>
			      <label for="<?php echo $this->get_field_id( 'select' ); ?>"><?php _e( 'Select Layout', 'pepe-lite' ); ?></label>
			       <select name="<?php echo $this->get_field_name( 'select' ); ?>" id="<?php echo $this->get_field_id( 'select' ); ?>" class="pepe-widefat">
			         <?php
			         // Your options array
			         $pepe_options = array(
				         '6 col-6' => __( 'Two Column', 'pepe-lite' ),
				         '12'      => __( 'One Column', 'pepe-lite' ),
			         );
			         // Loop through options and add each one to the select dropdown
			         foreach ( $pepe_options as $pepe_key => $pepe_name ) {
				         echo '<option value="' . esc_attr( $pepe_key ) . '" id="' . esc_attr( $pepe_key ) . '" '. selected( $pepe_select, $pepe_key, false ) . '>'. $pepe_name . '</option>';
		        	} ?>
			     </select>
				</p>
	        <?php
	}
}







