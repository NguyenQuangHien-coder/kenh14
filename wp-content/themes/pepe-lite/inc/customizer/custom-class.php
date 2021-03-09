<?php
/**
* custom-class.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

/* TABLE OF CONTENT

- Custom Class
	- Class Image Radio Button Custom Control
	- Toggle Switch Custom Control
	- Dropdown Posts Custom Control
	- Text Radio Button Custom Control
	- Simple Notice Custom Control
	- Simple Notice Custom Control Two
	- Dropdown Category Custom Control
	- Alpha Color Picker Custom Control
	- Sortable Repeater Custom Control
	- Slider Custom Control
- Sanitization
   - Text sanitization
   - Google Font sanitization
   - Switch sanitization
   - Radio Button and Select sanitization
   - Saniteze Categories
   - File input sanitization
   - Integer sanitization
   - Alpha Color (Hex & RGBa) sanitization
- Class ad Panel
- Dependently-Contextual Customizer Controls
   - Multitabs Section Three
   - Primary Block Home Card
   - Description Site in Responsive
   - Enable Banner
   - Enable Data and Time News Block
   - Enable post foraground block five
   - Enable meta info post
   - Enable Back To Top
   - Enable Social
   - Enable large Footer Info
   - Enable large Footer Widget
   - Enable Custom Color
*/

/* Custom Class
========================================================================== */

if (class_exists('WP_Customize_Control')) {

    class Pepe_lite_Custom_Control extends WP_Customize_Control {
		protected function pepe_get_resource_url() {
			if( strpos( wp_normalize_path( __DIR__ ), wp_normalize_path( WP_PLUGIN_DIR ) ) === 0 ) {
				// We're in a plugin directory and need to determine the url accordingly.
				return plugin_dir_url( __DIR__ );
			}
			return trailingslashit( get_template_directory_uri() );
	   }
	}

/** Image Radio Button Custom Control */
	class Pepe_lite_Image_Radio_Button_Custom_Control extends Pepe_lite_Custom_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'pepe_lite_image_radio_button';
		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {
			wp_enqueue_style( 'skyrocket-custom-controls-css', $this->pepe_get_resource_url() . '/inc/customizer/css/customizer.css', array(), '1.0', 'all' );
		}
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {
		?>
			<div class="image_radio_button_control">
				<?php if( !empty( $this->label ) ) { ?>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php } ?>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>

				<?php foreach ( $this->choices as $key => $value ) { ?>
					<label class="radio-button-label">
						<input type="radio" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php $this->link(); ?> <?php checked( esc_attr( $key ), $this->value() ); ?>/>
						<img src="<?php echo esc_attr( $value['image'] ); ?>" alt="<?php echo esc_attr( $value['name'] ); ?>" title="<?php echo esc_attr( $value['name'] ); ?>" />
					</label>
				<?php	} ?>
			</div>
		<?php
		}
	}

    /** Toggle Switch Custom Control */
	class Pepe_lite_Toggle_Switch_Custom_control extends Pepe_lite_Custom_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'pepe_lite_toggle_switch';
		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue(){
			wp_enqueue_style( 'pepe-custom-controls-css', $this->pepe_get_resource_url() . '/inc/customizer/css/customizer.css', array(), '1.0', 'all' );
		}
		/**
		 * Render the control in the customizer
		 */
		public function render_content(){
		?>
			<div class="toggle-switch-control">
				<div class="toggle-switch">
					<input type="checkbox" id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" class="toggle-switch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
					<label class="toggle-switch-label" for="<?php echo esc_attr( $this->id ); ?>">
						<span class="toggle-switch-inner"></span>
						<span class="toggle-switch-switch"></span>
					</label>
				</div>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>
			</div>
		<?php
		}
	}

    /** Dropdown Posts Custom Control */
	class Pepe_lite_Dropdown_Posts_Custom_Control extends Pepe_lite_Custom_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'pepe_lite_dropdown_posts';
		/**
		 * Posts
		 */
		private $posts = array();
		/**
		 * Constructor
		 */
		public function __construct( $manager, $id, $args = array(), $options = array() ) {
			parent::__construct( $manager, $id, $args );
			// Get our Posts
			$this->posts = get_posts( $this->input_attrs );
		}

		/**
		 * Render the control in the customizer
		 */
		public function render_content() {
		?>
			<div class="dropdown_posts_control">
				<?php if( !empty( $this->label ) ) { ?>
					<label for="<?php echo esc_attr( $this->id ); ?>" class="customize-control-title">
						<?php echo esc_html( $this->label ); ?>
					</label>
				<?php } ?>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>
				<select name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>" <?php $this->link(); ?>>
					<?php
						if( !empty( $this->posts ) ) {
							foreach ( $this->posts as $post ) {
								printf( '<option value="%s" %s>%s</option>',
									$post->ID,
									selected( $this->value(), $post->ID, false ),
									$post->post_title
								);
							}
						}
					?>
				</select>
			</div>
		<?php
		}
	}

    /** Text Radio Button Custom Control */
	class Pepe_lite_Text_Radio_Button_Custom_Control extends Pepe_lite_Custom_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'pepe_lite_text_radio_button';
		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {
			wp_enqueue_style( 'pepe-custom-controls-css', $this->pepe_get_resource_url() . '/inc/customizer/css/customizer.css', array(), '1.0', 'all' );
		}
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {
		?>
			<div class="text_radio_button_control">
				<?php if( !empty( $this->label ) ) { ?>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php } ?>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>

				<div class="radio-buttons">
					<?php foreach ( $this->choices as $key => $value ) { ?>
						<label class="radio-button-label">
							<input type="radio" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php $this->link(); ?> <?php checked( esc_attr( $key ), $this->value() ); ?>/>
							<span><?php echo esc_html( $value ); ?></span>
						</label>
					<?php	} ?>
				</div>
			</div>
		<?php
		}
	}

    /** Simple Notice Custom Control */
	class Pepe_lite_Simple_Notice_Custom_Control extends Pepe_lite_Custom_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'pepe_lite_simple_notice';
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {
			$allowed_html = array(
				'a' => array(
					'href' => array(),
					'title' => array(),
					'class' => array(),
					'target' => array(),
				),
				'br' => array(),
				'em' => array(),
				'strong' => array(),
				'i' => array(
					'class' => array()
				),
				'span' => array(
					'class' => array(),
				),
				'code' => array(),
			);
		?>
			<div class="simple-notice-custom-control">
				<?php if( !empty( $this->label ) ) { ?>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php } ?>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo wp_kses( $this->description, $allowed_html ); ?></span>
				<?php } ?>
			</div>
		<?php
		}
	}

	/** Simple Notice Custom Control Two */
	class Pepe_lite_Simple_Notice_Custom_Control_Two extends Pepe_lite_Custom_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'pepe_lite_simple_notice';
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {
			$allowed_html = array(
				'a' => array(
					'href' => array(),
					'title' => array(),
					'class' => array(),
					'target' => array(),
				),
				'br' => array(),
				'em' => array(),
				'strong' => array(),
				'i' => array(
					'class' => array()
				),
				'span' => array(
					'class' => array(),
				),
				'code' => array(),
			);
		?>
			<div class="simple-notice-custom-control">
				<?php if( !empty( $this->label ) ) { ?>
					<span class="customize-control-title-two"><?php echo esc_html( $this->label ); ?></span>
				<?php } ?>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo wp_kses( $this->description, $allowed_html ); ?></span>
				<?php } ?>
			</div>
		<?php
		}
	}

		/** Simple Notice Custom Control Two */
		class Pepe_lite_Simple_Notice_Custom_Control_Widget extends Pepe_lite_Custom_Control {
			/**
			 * The type of control being rendered
			 */
			public $type = 'pepe_lite_simple_notice';
			/**
			 * Render the control in the customizer
			 */
			public function render_content() {
				$allowed_html = array(
					'a' => array(
						'href' => array(),
						'title' => array(),
						'class' => array(),
						'target' => array(),
					),
					'br' => array(),
					'em' => array(),
					'strong' => array(),
					'i' => array(
						'class' => array()
					),
					'span' => array(
						'class' => array(),
					),
					'code' => array(),
				);
			?>
				<div class="simple-notice-custom-control-widget">
					<?php if( !empty( $this->label ) ) { ?>
						<span class="customize-control-title-widget"><?php echo esc_html( $this->label ); ?></span>
					<?php } ?>
					<?php if( !empty( $this->description ) ) { ?>
						<span class="customize-control-description-widget"><?php echo wp_kses( $this->description, $allowed_html ); ?></span>
					<?php } ?>
				</div>
			<?php
			}
		}
	
	/** Dropdown Category Custom Control */
	class Pepe_lite_Customize_Category_Control extends Pepe_lite_Custom_Control {
	public function render_content() {
		$dropdown = wp_dropdown_categories(
			array(
				'name'              => '_customize-dropdown-category-' . $this->id,
				'echo'              => 0,
				'show_option_none'  => __( '&mdash; All Category &mdash;','pepe-lite' ),
				'option_none_value' => '0',
				'show_count'        => 1,
				'selected'          => $this->value(),
			) );
		$dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
		printf(
			'<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
			esc_html($this->label),
			$dropdown
		);
	}
  }
	
      /** Alpha Color Picker Custom Control */
	  class Pepe_lite_Customize_Alpha_Color_Control extends Pepe_lite_Custom_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'pepe_lite_alpha-color';
		/**
		 * Add support for palettes to be passed in.
		 *
		 * Supported palette values are true, false, or an array of RGBa and Hex colors.
		 */
		public $palette;
		/**
		 * Add support for showing the opacity value on the slider handle.
		 */
		public $show_opacity;
		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {
			wp_enqueue_script( 'pepe-custom-controls-js', $this->pepe_get_resource_url() . '/inc/customizer/js/customizer.js', array( 'jquery' ), '1.0', true );
			wp_enqueue_style( 'pepe-custom-controls-css', $this->pepe_get_resource_url() . '/inc/customizer/css/customizer.css', array(), '1.0', 'all' );
		}
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {

			// Process the palette
			if ( is_array( $this->palette ) ) {
				$palette = implode( '|', $this->palette );
			} else {
				// Default to true.
				$palette = ( false === $this->palette || 'false' === $this->palette ) ? 'false' : 'true';
			}

			// Support passing show_opacity as string or boolean. Default to true.
			$show_opacity = ( false === $this->show_opacity || 'false' === $this->show_opacity ) ? 'false' : 'true';

			?>
				<label>
					<?php // Output the label and description if they were passed in.
					if ( isset( $this->label ) && '' !== $this->label ) {
						echo '<span class="customize-control-title">' . sanitize_text_field( $this->label ) . '</span>';
					}
					if ( isset( $this->description ) && '' !== $this->description ) {
						echo '<span class="description customize-control-description">' . sanitize_text_field( $this->description ) . '</span>';
					} ?>
				</label>
				<input class="alpha-color-control" type="text" data-show-opacity="<?php echo $show_opacity; ?>" data-palette="<?php echo esc_attr( $palette ); ?>" data-default-color="<?php echo esc_attr( $this->settings['default']->default ); ?>" <?php $this->link(); ?>  />
			<?php
		}
	}


    /** Slider Custom Control */
	class Pepe_lite_Slider_Custom_Control extends Pepe_lite_Custom_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'pepe_lite_slider_control';
		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {
			wp_enqueue_script( 'pepe-custom-controls-js', $this->pepe_get_resource_url() . '/inc/customizer/js/customizer.js', array( 'jquery' ), '1.0', true );
			wp_enqueue_style( 'pepe-custom-controls-css', $this->pepe_get_resource_url() . '/inc/customizer/css/customizer.css', array(), '1.0', 'all' );
		}
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {
		?>
			<div class="slider-custom-control">
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><input type="number" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="customize-control-slider-value" <?php $this->link(); ?> />
				<div class="slider" slider-min-value="<?php echo esc_attr( $this->input_attrs['min'] ); ?>" slider-max-value="<?php echo esc_attr( $this->input_attrs['max'] ); ?>" slider-step-value="<?php echo esc_attr( $this->input_attrs['step'] ); ?>"></div><span class="slider-reset dashicons dashicons-image-rotate" slider-reset-value="<?php echo esc_attr( $this->value() ); ?>"></span>
			</div>
		<?php
		}
	}

/* Sanitization
========================================================================== */

/** Text sanitization */
if ( ! function_exists( 'pepe_lite_text_sanitization' ) ) {
	function pepe_lite_text_sanitization( $input ) {
		if ( strpos( $input, ',' ) !== false) {
			$input = explode( ',', $input );
		}
		if( is_array( $input ) ) {
			foreach ( $input as $key => $value ) {
				$input[$key] = sanitize_text_field( $value );
			}
			$input = implode( ',', $input );
		}
		else {
			$input = sanitize_text_field( $input );
		}
		return $input;
	}
}

/** Switch sanitization */
if ( ! function_exists( 'pepe_lite_switch_sanitization' ) ) {
	function pepe_lite_switch_sanitization( $input ) {
		if ( true === $input ) {
			return 1;
		} else {
			return 0;
		}
	}
}

/** Radio Button and Select sanitization */
if ( ! function_exists( 'pepe_lite_radio_sanitization' ) ) {
	function pepe_lite_radio_sanitization( $input, $setting ) {
		//get the list of possible radio box or select options
		$choices = $setting->manager->get_control( $setting->id )->choices;

		if ( array_key_exists( $input, $choices ) ) {
			return $input;
		} else {
			return $setting->default;
		}
	}
}

/** Saniteze Categories */
if ( ! function_exists( 'pepe_lite_sanitize_category_select' ) ) {

   function pepe_lite_sanitize_category_select( $cat_id, $setting) {
	$cat_id = absint($cat_id);
	return is_string(get_the_category_by_ID( $cat_id )) ? $cat_id :  $setting->default;
  }
}

/** Integer sanitization */
if ( ! function_exists( 'pepe_lite_sanitize_integer' ) ) {
	function pepe_lite_sanitize_integer( $input ) {
		return (int) $input;
	}
}

/** Alpha Color (Hex & RGBa) sanitization */
if ( ! function_exists( 'pepe_lite_hex_rgba_sanitization' ) ) {
	function pepe_lite_hex_rgba_sanitization( $input, $setting ) {
		if ( empty( $input ) || is_array( $input ) ) {
			return $setting->default;
		}

		if ( false === strpos( $input, 'rgba' ) ) {
			// If string doesn't start with 'rgba' then santize as hex color
			$input = sanitize_hex_color( $input );
		} else {
			// Sanitize as RGBa color
			$input = str_replace( ' ', '', $input );
			sscanf( $input, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha );
			$input = 'rgba(' . pepe_lite_in_range( $red, 0, 255 ) . ',' . pepe_lite_in_range( $green, 0, 255 ) . ',' . pepe_lite_in_range( $blue, 0, 255 ) . ',' . pepe_lite_in_range( $alpha, 0, 1 ) . ')';
		}
		return $input;
	}
}

if ( ! function_exists( 'pepe_lite_in_range' ) ) {
	function pepe_lite_in_range( $input, $min, $max ){
	  if ( $input < $min ) {
		$input = $min;
	  }
	  if ( $input > $max ) {
		$input = $max;
	  }
	  return $input;
	}
}


} // End Class


/* Class Add Panel
========================================================================== */

if ( class_exists( 'WP_Customize_Panel' ) ) {
	class Pepe_lite_WP_Customize_Panel extends WP_Customize_Panel {
	  public $panel;
	  public $type = 'pepe_lite_pe_panel';
	  public function json() {
		$array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
		$array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
		$array['content'] = $this->get_content();
		$array['active'] = $this->active();
		$array['instanceNumber'] = $this->instance_number;
		return $array;
	  }
	}
  }
  if ( class_exists( 'WP_Customize_Section' ) ) {
	class Pepe_lite_WP_Customize_Section extends WP_Customize_Section {
	  public $section;
	  public $type = 'pepe_lite_pe_section';
	  public function json() {
		$array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
		$array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
		$array['content'] = $this->get_content();
		$array['active'] = $this->active();
		$array['instanceNumber'] = $this->instance_number;
		if ( $this->panel ) {
		  $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
		} else {
		  $array['customizeAction'] = 'Customizing';
		}
		return $array;
	  }
	}
  }

  
/* Dependently-Contextual Customizer Controls
========================================================================== */
  
 /* Logo Footer Area Widget */
function pepe_lite_show_logo_footer( $control ) {
	if ( $control->manager->get_setting('pepe_lite_show_logo_footer')->value() == 'pepe_logo_footer' ) {
	   return false;
	} else {
	   return true;
	}
	if ( $control->manager->get_setting('pepe_lite_show_logo_footer')->value() == 'pepe_height_logo_widget_footer' ) {
		return false;
	 } else {
		return true;
	 }
 }

/* Description Site In Responsive */
function pepe_lite_enable_description_responsive( $control ) {
	if ( $control->manager->get_setting('pepe_lite_enable_description_responsive')->value() == 'pepe_height_description_title_responsive' ) {
	   return false;
	} else {
	   return true;
	}
	if ( $control->manager->get_setting('pepe_lite_enable_description_responsive')->value() == 'pepe_height_description_subtitle_responsive' ) {
		return false;
	 } else {
		return true;
	 }
}

/* Enable Banner  */
function pepe_lite_show_banner_header( $control ) {
	if ( $control->manager->get_setting('pepe_lite_show_banner_header')->value() == 'pepe_banner_header_post_widget' ) {
	   return false;
	} else {
	   return true;
	}
	if ( $control->manager->get_setting('pepe_lite_show_banner_header')->value() == 'pepe_post_name_banner_header' ) {
		return false;
	 } else {
		return true;
	 }
	 if ( $control->manager->get_setting('pepe_lite_show_banner_header')->value() == 'pepe_text_button_banner_header' ) {
		return false;
	 } else {
		return true;
	 }
	 if ( $control->manager->get_setting('pepe_lite_show_banner_header')->value() == 'pepe_color_banner' ) {
		return false;
	 } else {
		return true;
	 }
	 if ( $control->manager->get_setting('pepe_lite_show_banner_header')->value() == 'pepe_background_color_button_banner_header' ) {
		return false;
	 } else {
		return true;
	 }
	 if ( $control->manager->get_setting('pepe_lite_show_banner_header')->value() == 'pepe_color_button_banner_header' ) {
		return false;
	 } else {
		return true;
	 }
}

/* Enable date and time block news */
function pepe_lite_show_date_time_header( $control ) {
	if ( $control->manager->get_setting('pepe_lite_show_date_time_header')->value() == 'pepe_show_time_header' ) {
	   return false;
	} else {
	   return true;
	}
}

/* Enable meta info post */
function pepe_lite_enable_meta_info_post( $control ) {
	if ( $control->manager->get_setting('pepe_lite_enable_meta_info_post')->value() == 'pepe_enable_update_post' ) {
		return false;
	 } else {
		return true;
	 }
}

/* Enable Back to Top */
function pepe_lite_enable_totop( $control ) {
	if ( $control->manager->get_setting('pepe_lite_enable_totop')->value() == 'pepe_enable_totop_responsive' ) {
		return false;
	 } else {
		return true;
	 }
}

/* Enable Social */

// Facebook
function pepe_lite_enable_facebook_social( $control ) {
	if ( $control->manager->get_setting('pepe_lite_enable_facebook_social')->value() == 'pepe_link_facebook_social' ) {
	   return false;
	} else {
	   return true;
	}
}
  
// Twitter
function pepe_lite_enable_twitter_social( $control ) {
	if ( $control->manager->get_setting('pepe_lite_enable_twitter_social')->value() == 'pepe_link_twitter_social' ) {
	   return false;
	} else {
	   return true;
	}
}
  
// Dribbble
function pepe_lite_enable_dribbble_social($control) {
	if ( $control->manager->get_setting('pepe_lite_enable_dribbble_social')->value() == 'pepe_link_dribbble_social' ) {
		return false;
	 } else {
		return true;
	 }
}

// Tumblr
function pepe_lite_enable_tumblr_social($control) {
	if ( $control->manager->get_setting('pepe_lite_enable_tumblr_social')->value() == 'pepe_link_tumblr_social' ) {
		return false;
	 } else {
		return true;
	 }
}

// Instagram
function pepe_lite_enable_instagram_social($control) {
	if ( $control->manager->get_setting('pepe_lite_enable_instagram_social')->value() == 'pepe_link_instagram_social' ) {
		return false;
	 } else {
		return true;
	 }
}

// Linkedin
function pepe_lite_enable_linkedin_social($control) {
	if ( $control->manager->get_setting('pepe_lite_enable_linkedin_social')->value() == 'pepe_link_linkedin_social' ) {
		return false;
	 } else {
		return true;
	 }
}

// Youtube
function pepe_lite_enable_youtube_social($control) {
	if ( $control->manager->get_setting('pepe_lite_enable_youtube_social')->value() == 'pepe_link_youtube_social' ) {
		return false;
	 } else {
		return true;
	 }
}

// Pinterest
function pepe_lite_enable_pinterest_social($control) {
	if ( $control->manager->get_setting('pepe_lite_enable_pinterest_social')->value() == 'pepe_link_pinterest_social' ) {
		return false;
	 } else {
		return true;
	 }
}

// Flickr
function pepe_lite_enable_flickr_social($control) {
	if ( $control->manager->get_setting('pepe_lite_enable_flickr_social')->value() == 'pepe_link_flickr_social' ) {
		return false;
	 } else {
		return true;
	 }
}

// Github
function pepe_lite_enable_github_social($control) {
	if ( $control->manager->get_setting('pepe_lite_enable_github_social')->value() == 'pepe_link_github_social' ) {
		return false;
	 } else {
		return true;
	 }
}

// Enable large Footer Info/Widget
function pepe_lite_footer_large($control) {
	 if ( $control->manager->get_setting('pepe_lite_footer_large')->value() == 'pepe_footer_widget_large' ) {
		return false;
	 } else {
		return true;
	 }
}






