<?php
/**
* widget-stat.php
*
* @author    Denis Franchi
* @package   pepe-lite
*/


// register Pepe Post two 
add_action( 'widgets_init', function(){
	register_widget( 'Pepe_lite_stat_Widget' );
});

// Creating the widget 
class Pepe_lite_stat_Widget extends WP_Widget {
		public function __construct() {
	    	$pepe_opts = array(
				'classname'   => 'pepe_stat_post',
				'description' => esc_html__( 'Widget to display Statistics', 'pepe-lite' ),
    		);
			parent::__construct( 'pepe_stat_post', esc_html__( 'DF: Pepe Statistics', 'pepe-lite' ), $pepe_opts );
}

// Creating widget front-end
public function widget( $args, $instance ) {
    $pepe_title        = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
    $pepe_title_stat_1 = isset( $instance['title-stat-1'] ) ? $instance['title-stat-1'] : '';
    $pepe_num_stat_1   = !empty($instance['num_stat_1']) ? $instance['num_stat_1'] : 92;
    $pepe_title_stat_2 = isset( $instance['title-stat-2'] ) ? $instance['title-stat-2'] : '';
    $pepe_num_stat_2   = !empty($instance['num_stat_2']) ? $instance['num_stat_2'] : 25;
    $pepe_title_stat_3 = isset( $instance['title-stat-3'] ) ? $instance['title-stat-3'] : '';
    $pepe_num_stat_3   = !empty($instance['num_stat_3']) ? $instance['num_stat_3'] : 75;
    $pepe_title_stat_4 = isset( $instance['title-stat-4'] ) ? $instance['title-stat-4'] : '';
    $pepe_num_stat_4   = !empty($instance['num_stat_4']) ? $instance['num_stat_4'] : 18;
    $pepe_title_stat_5 = isset( $instance['title-stat-5'] ) ? $instance['title-stat-5'] : '';
    $pepe_num_stat_5   = !empty($instance['num_stat_5']) ? $instance['num_stat_5'] : 60;
    $pepe_enable_stat_4= ! empty( $instance['enable_stat_4'] ) ? $instance['enable_stat_4'] : 0;
    $pepe_enable_stat_5= ! empty( $instance['enable_stat_5'] ) ? $instance['enable_stat_5'] : 0;
   
    echo $args['before_widget'];
		        if ( ! empty( $pepe_title ) ) { ?>
                   <div class="pepe-class-pepe-stat-title">
		        	  <?php echo $args['before_title'] .  $pepe_title .  $args['after_title'];?>
                   </div>
                    <?php
                    } ?>
<div class="chartBarsWrap chartBarsHorizontal"> 
    <div class="chartBars"> 
        <ul class="bars">  
            <li> 
               <span class="tit-bar"><?php if ( $pepe_title_stat_1 ) { echo esc_html( $pepe_title_stat_1);}?></span>
               <div class="content-bar-stat"><div data-percentage="<?php if ( $pepe_num_stat_1 ) { echo esc_attr( $pepe_num_stat_1);}?>" class="bar greenBarFlat"></div></div>
            </li>
            <li>
                <span class="tit-bar"><?php if ( $pepe_title_stat_2 ) { echo esc_html( $pepe_title_stat_2);}?></span>
                <div class="content-bar-stat"><div data-percentage="<?php if ( $pepe_num_stat_2 ) { echo esc_attr( $pepe_num_stat_2);}?>" class="bar orangeBarFlat"></div></div>
            </li>
            <li>
              <span class="tit-bar"><?php if ( $pepe_title_stat_3 ) { echo esc_html( $pepe_title_stat_3);}?></span>
              <div class="content-bar-stat"><div data-percentage="<?php if ( $pepe_num_stat_3 ) { echo esc_attr( $pepe_num_stat_3);}?>" class="bar blueBarFlat"></div></div>
            </li>
            <?php if ( $pepe_enable_stat_4 ) {  ?>
            <li>
              <span class="tit-bar"><?php if ( $pepe_title_stat_4 ) { echo esc_html( $pepe_title_stat_4);}?></span>
              <div class="content-bar-stat"><div data-percentage="<?php if ( $pepe_num_stat_4 ) { echo esc_attr( $pepe_num_stat_4);}?>" class="bar blueBarFlat"></div></div>
            </li>
            <?php ; }?>
            <?php if ( $pepe_enable_stat_5 ) {  ?>
            <li>
              <span class="tit-bar"><?php if ( $pepe_title_stat_5 ) { echo esc_html( $pepe_title_stat_5);}?></span>
              <div class="content-bar-stat"><div data-percentage="<?php if ( $pepe_num_stat_5 ) { echo esc_attr( $pepe_num_stat_5);}?>" class="bar purpleBarFlat"></div></div>
            </li>
            <?php ; }?>
            <li>        
         </li>
        </ul>
    </div>

</div>

<?php

	echo $args['after_widget'];
}

// Updating widget replacing old instances with new	
public function update( $new_instance, $old_instance ) {
    $instance                 = $old_instance;
    $instance['title']        = sanitize_text_field( $new_instance['title'] );
    $instance['title-stat-1'] = isset( $new_instance['title-stat-1'] ) ? wp_strip_all_tags( $new_instance['title-stat-1'] ) : '';
    $instance['num_stat_1']   = !empty($new_instance['num_stat_1']) ? absint($new_instance['num_stat_1']) : 92;
    $instance['title-stat-2'] = isset( $new_instance['title-stat-2'] ) ? wp_strip_all_tags( $new_instance['title-stat-2'] ) : '';
    $instance['num_stat_2']   = !empty($new_instance['num_stat_2']) ? absint($new_instance['num_stat_2']) : 25;
    $instance['title-stat-3'] = isset( $new_instance['title-stat-3'] ) ? wp_strip_all_tags( $new_instance['title-stat-3'] ) : '';
    $instance['num_stat_3']   = !empty($new_instance['num_stat_3']) ? absint($new_instance['num_stat_3']) : 75;
    $instance['title-stat-4'] = isset( $new_instance['title-stat-4'] ) ? wp_strip_all_tags( $new_instance['title-stat-4'] ) : '';
    $instance['num_stat_4']   = !empty($new_instance['num_stat_4']) ? absint($new_instance['num_stat_4']) : 18;
    $instance['title-stat-5'] = isset( $new_instance['title-stat-5'] ) ? wp_strip_all_tags( $new_instance['title-stat-5'] ) : '';
    $instance['num_stat_5']   = !empty($new_instance['num_stat_5']) ? absint($new_instance['num_stat_5']) : 60;
    $instance['enable_stat_4']= (bool) $new_instance['enable_stat_4'] ? 1 : 0;
    $instance['enable_stat_5']= (bool) $new_instance['enable_stat_5'] ? 1 : 0;
    return $instance;
}

// Widget Backend 
public function form( $instance ) {
    $pepe_num_stat_1 = (isset($instance['num_stat_1'])) ? $instance['num_stat_1'] : 92;
    $pepe_num_stat_2 = (isset($instance['num_stat_2'])) ? $instance['num_stat_2'] : 25;
    $pepe_num_stat_3 = (isset($instance['num_stat_3'])) ? $instance['num_stat_3'] : 75;
    $pepe_num_stat_4 = (isset($instance['num_stat_4'])) ? $instance['num_stat_4'] : 18;
    $pepe_num_stat_5 = (isset($instance['num_stat_5'])) ? $instance['num_stat_5'] : 60;
    $instance        = wp_parse_args( (array) $instance, array(
        'title'        => '',
        'title-stat-1' =>'',
        'title-stat-2' =>'',
        'title-stat-3' =>'',
        'title-stat-4' =>'',
        'title-stat-5' =>'',
        'enable_stat_4'=> 1,
        'enable_stat_5'=> 1,
        ) );
    ?>

            <!-- Title -->
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'pepe-lite' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
            </p>
            <!-- Title Stat 1 -->
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title-stat-1' ) ); ?>"><?php esc_html_e( 'Text Stat 1:', 'pepe-lite' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title-stat-1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title-stat-1' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title-stat-1'] ); ?>" />
            </p>  
            <!-- Percentage Stat 1 -->
            <p>
			    <label for="<?php echo esc_attr($this->get_field_id('num_stat_1')); ?>">
				    <?php esc_html_e('Percentage Stat 1 (Min 1 Max 100)', 'pepe-lite'); ?>
			    </label>
			    <input class="widefat select-numpost" id="<?php echo esc_attr($this->get_field_id('num_stat_1')); ?>" name="<?php echo esc_attr($this->get_field_name('num_stat_1')); ?>" type="number" value="<?php echo esc_attr($pepe_num_stat_1); ?>">
            </p>  
             <!-- Title Stat 2 -->
             <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title-stat-2' ) ); ?>"><?php esc_html_e( 'Text Stat 2:', 'pepe-lite' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title-stat-2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title-stat-2' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title-stat-2'] ); ?>" />
            </p>  
             <!-- Percentage Stat 2 -->
             <p>
			    <label for="<?php echo esc_attr($this->get_field_id('num_stat_2')); ?>">
				    <?php esc_html_e('Percentage Stat 2 (Min 1 Max 100)', 'pepe-lite'); ?>
			    </label>
			    <input class="widefat select-numpost" id="<?php echo esc_attr($this->get_field_id('num_stat_2')); ?>" name="<?php echo esc_attr($this->get_field_name('num_stat_2')); ?>" type="number" value="<?php echo esc_attr($pepe_num_stat_2); ?>">
            </p>  
             <!-- Title Stat 3 -->
             <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title-stat-3' ) ); ?>"><?php esc_html_e( 'Text Stat 3:', 'pepe-lite' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title-stat-3' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title-stat-3' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title-stat-3'] ); ?>" />
            </p>  
             <!-- Percentage Stat 3 -->
             <p>
			    <label for="<?php echo esc_attr($this->get_field_id('num_stat_3')); ?>">
				    <?php esc_html_e('Percentage Stat 3 (Min 1 Max 100)', 'pepe-lite'); ?>
			    </label>
			    <input class="widefat select-numpost" id="<?php echo esc_attr($this->get_field_id('num_stat_3')); ?>" name="<?php echo esc_attr($this->get_field_name('num_stat_3')); ?>" type="number" value="<?php echo esc_attr($pepe_num_stat_3); ?>">
            </p> 
             <!-- Enable Stat 4 -->
             <p>
	            <input class="checkbox" type="checkbox" <?php checked( $instance['enable_stat_4'] ); ?> id="<?php echo esc_attr( $this->get_field_id( 'enable_stat_4' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'enable_stat_4' ) ); ?>" />
	            <label for="<?php echo esc_attr( $this->get_field_id( 'enable_stat_4' ) ); ?>"><?php esc_html_e( 'Enable Stat 4', 'pepe-lite' ); ?></label>
	        </p>
             <!-- Title Stat 4 -->
             <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title-stat-4' ) ); ?>"><?php esc_html_e( 'Text Stat 4:', 'pepe-lite' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title-stat-4' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title-stat-4' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title-stat-4'] ); ?>" />
            </p>  
             <!-- Percentage Stat 4 -->
             <p>
			    <label for="<?php echo esc_attr($this->get_field_id('num_stat_4')); ?>">
				    <?php esc_html_e('Percentage Stat 4 (Min 1 Max 100)', 'pepe-lite'); ?>
			    </label>
			    <input class="widefat select-numpost" id="<?php echo esc_attr($this->get_field_id('num_stat_4')); ?>" name="<?php echo esc_attr($this->get_field_name('num_stat_4')); ?>" type="number" value="<?php echo esc_attr($pepe_num_stat_4); ?>">
            </p> 
            <!-- Enable Stat 5 -->
            <p>
	            <input class="checkbox" type="checkbox" <?php checked( $instance['enable_stat_5'] ); ?> id="<?php echo esc_attr( $this->get_field_id( 'enable_stat_5' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'enable_stat_5' ) ); ?>" />
	            <label for="<?php echo esc_attr( $this->get_field_id( 'enable_stat_5' ) ); ?>"><?php esc_html_e( 'Enable Stat 5', 'pepe-lite' ); ?></label>
	        </p> 
             <!-- Title Stat 5 -->
             <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title-stat-5' ) ); ?>"><?php esc_html_e( 'Text Stat 5:', 'pepe-lite' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title-stat-5' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title-stat-5' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title-stat-5'] ); ?>" />
            </p>  
             <!-- Percentage Stat 5 -->
             <p>
			    <label for="<?php echo esc_attr($this->get_field_id('num_stat_5')); ?>">
				    <?php esc_html_e('Percentage Stat 5 (Min 1 Max 100)', 'pepe-lite'); ?>
			    </label>
			    <input class="widefat select-numpost" id="<?php echo esc_attr($this->get_field_id('num_stat_5')); ?>" name="<?php echo esc_attr($this->get_field_name('num_stat_5')); ?>" type="number" value="<?php echo esc_attr($pepe_num_stat_5); ?>">
            </p>        
<?php
}

}