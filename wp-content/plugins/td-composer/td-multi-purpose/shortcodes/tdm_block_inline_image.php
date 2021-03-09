<?php
class tdm_block_inline_image extends td_block {

	protected $shortcode_atts = array(); //the atts used for rendering the current block
    private $unique_block_class;

    public function get_custom_css() {

        $compiled_css = '';

        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;
        $unique_block_modal_class = $this->block_uid . '_m';

        $raw_css =
            "<style>

                /* @caption_text_color */
                body .tdm_block.tdm_block_inline_image.$unique_block_class .tdm-caption {
                    color: @caption_text_color;
                }
                /* @caption_background_color */
                body .tdm_block.tdm_block_inline_image.$unique_block_class .tdm-caption {
                    padding-left: 10px;
                    padding-right: 10px;
                    background-color: @caption_background_color;
                }
                /* @caption_background_gradient */
                body .tdm_block.tdm_block_inline_image.$unique_block_class .tdm-caption {
                    padding-left: 10px;
                    padding-right: 10px;
                    @caption_background_gradient
                }

                /* @img_width */
                .$unique_block_class {
                    width: @img_width;
                }
                
				/* @overlay_color_gradient */
				.$unique_block_class .tdm-inline-image-wrap:after {
				    content: '';
				    position: absolute;
				    top: 0;
				    left: 0;
				    width: 100%;
				    height: 100%;
					@overlay_color_gradient
				}
				/* @overlay_color */
				.$unique_block_class .tdm-inline-image-wrap:after {
				    content: '';
				    position: absolute;
				    top: 0;
				    left: 0;
				    width: 100%;
				    height: 100%;
					background: @overlay_color;
				}
				/* @shadow */
				.$unique_block_class .tdm-image {
				    box-shadow: @shadow;
				}
				/* @f_caption */
				.tdm_block.$unique_block_class .tdm-caption {
					@f_caption
				}
				
				/* @mix_type */
                .$unique_block_class .tdm-inline-image-wrap:before {
                    content: '';
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    opacity: 1;
                    transition: opacity 1s ease;
                    -webkit-transition: opacity 1s ease;
                    mix-blend-mode: @mix_type;
                    z-index: 1;
                    top: 0;
                    left: 0;
                }
                /* @color */
                .$unique_block_class .tdm-inline-image-wrap:before {
                    background: @color;
                }
                /* @mix_gradient */
                .$unique_block_class .tdm-inline-image-wrap:before {
                    @mix_gradient;
                }
                
                
                /* @mix_type_h */
                @media (min-width: 1141px) {
                    .$unique_block_class .tdm-inline-image-wrap:after {
                        content: '';
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        opacity: 0;
                        transition: opacity 1s ease;
                        -webkit-transition: opacity 1s ease;
                        mix-blend-mode: @mix_type_h;
                        z-index: 1;
                        top: 0;
                        left: 0;
                    }
                    .$unique_block_class .tdm-inline-image-wrap:hover:after {
                        opacity: 1;
                    }
                }
                
                /* @color_h */
                .$unique_block_class .tdm-inline-image-wrap:after {
                    background: @color_h;
                }
                /* @mix_gradient_h */
                .$unique_block_class .tdm-inline-image-wrap:after {
                    @mix_gradient_h;
                }
                /* @mix_type_off */
                .$unique_block_class .tdm-inline-image-wrap:hover:before {
                    opacity: 0;
                }
                    
                /* @effect_on */
                .$unique_block_class .tdm-image {
                    filter: @fe_brightness @fe_contrast @fe_saturate;
                    transition: all 1s ease;
                    -webkit-transition: all 1s ease;
                }
                /* @effect_on_h */
                @media (min-width: 1141px) {
                    .$unique_block_class .tdm-inline-image-wrap:hover .tdm-image {
                        filter: @fe_brightness_h @fe_contrast_h @fe_saturate_h;
                    }
                }
                
                
                /* @video_icon_size */
				.$unique_block_class .td-video-play-ico {
					width: @video_icon_size;
					height: @video_icon_size;
					font-size: @video_icon_size;
				}
                /* @video_rec_color */
				#td-video-modal.$unique_block_modal_class .td-vm-rec-title {
				    color: @video_rec_color;
				}
				/* @video_bg_color */
				#td-video-modal.$unique_block_modal_class .td-vm-content-wrap {
				    background-color: @video_bg_color;
				}
				/* @video_bg_gradient */
				#td-video-modal.$unique_block_modal_class .td-vm-content-wrap {
				    @video_bg_gradient
				}
				/* @video_overlay_color */
				#td-video-modal.$unique_block_modal_class .td-vm-overlay {
				    background-color: @video_overlay_color;
				}
				/* @video_overlay_gradient */
				#td-video-modal.$unique_block_modal_class .td-vm-overlay {
				    background-color: @video_overlay_gradient;
				}

			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->shortcode_atts);

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    /**
     * Callback pe media
     *
     * @param $responsive_context td_res_context
     * @param $atts
     */
    static function cssMedia( $res_ctx ) {

        /*-- IMAGE -- */
        // image width
        $img_width = $res_ctx->get_shortcode_att( 'img_width' );
        $res_ctx->load_settings_raw( 'img_width', $img_width );
        if( $img_width != '' ) {
            if ( is_numeric( $img_width ) ) {
                $res_ctx->load_settings_raw( 'img_width',  $img_width . 'px;' );
            }
        }



        /*-- VIDEO MODAL -- */
        // video icon size
        $video_icon_size = $res_ctx->get_shortcode_att('video_icon_size');
        if ( $video_icon_size != '' && is_numeric( $video_icon_size ) ) {
            $res_ctx->load_settings_raw( 'video_icon_size', $video_icon_size . 'px' );
        }



        /*-- COLORS -- */
        // shadow
        $res_ctx->load_shadow_settings( 0, 0, 0, 0, 'rgba(0, 0, 0, 0.08)', 'shadow' );
        // overlay color
        $res_ctx->load_color_settings( 'overlay_color', 'overlay_color', 'overlay_color_gradient', '', '');
        // caption text color
        $res_ctx->load_settings_raw( 'caption_text_color', $res_ctx->get_shortcode_att( 'caption_text_color' ) );
        // caption background color
        $res_ctx->load_color_settings( 'caption_background_color', 'caption_background_color', 'caption_background_gradient', '', '');

        // video modal
        $res_ctx->load_settings_raw( 'video_rec_color', $res_ctx->get_shortcode_att('video_rec_color') );
        $res_ctx->load_color_settings( 'video_bg', 'video_bg_color', 'video_bg_gradient', '', '' );
        $res_ctx->load_color_settings( 'video_overlay', 'video_overlay_color', 'video_overlay_gradient', '', '' );



        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_caption' );



        /*-- EFFECTS -- */
        // mix blend
        $mix_type = $res_ctx->get_shortcode_att('mix_type');
        if ( $mix_type != '' ) {
            $res_ctx->load_settings_raw('mix_type', $res_ctx->get_shortcode_att('mix_type'));
        }
        $res_ctx->load_color_settings( 'mix_color', 'color', 'mix_gradient', '', '' );

        $mix_type_h = $res_ctx->get_shortcode_att('mix_type_h');
        if ( $mix_type_h != '' ) {
            $res_ctx->load_settings_raw('mix_type_h', $res_ctx->get_shortcode_att('mix_type_h'));
        } else {
            $res_ctx->load_settings_raw('mix_type_off', 1);
        }

        $res_ctx->load_color_settings( 'mix_color_h', 'color_h', 'mix_gradient_h', '', '' );
        $res_ctx->load_settings_raw('fe_brightness', 'brightness(1)');
        $res_ctx->load_settings_raw('fe_contrast', 'contrast(1)');
        $res_ctx->load_settings_raw('fe_saturate', 'saturate(1)');

        $fe_brightness = $res_ctx->get_shortcode_att('fe_brightness');
        if ($fe_brightness != '1') {
            $res_ctx->load_settings_raw('fe_brightness', 'brightness(' . $fe_brightness . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        $fe_contrast = $res_ctx->get_shortcode_att('fe_contrast');
        if ($fe_contrast != '1') {
            $res_ctx->load_settings_raw('fe_contrast', 'contrast(' . $fe_contrast . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        $fe_saturate = $res_ctx->get_shortcode_att('fe_saturate');
        if ($fe_saturate != '1') {
            $res_ctx->load_settings_raw('fe_saturate', 'saturate(' . $fe_saturate . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }

        // effects hover
        $res_ctx->load_settings_raw('fe_brightness_h', 'brightness(1)');
        $res_ctx->load_settings_raw('fe_contrast_h', 'contrast(1)');
        $res_ctx->load_settings_raw('fe_saturate_h', 'saturate(1)');

        $fe_brightness_h = $res_ctx->get_shortcode_att('fe_brightness_h');
        $fe_contrast_h = $res_ctx->get_shortcode_att('fe_contrast_h');
        $fe_saturate_h = $res_ctx->get_shortcode_att('fe_saturate_h');

        if ($fe_brightness_h != '1') {
            $res_ctx->load_settings_raw('fe_brightness_h', 'brightness(' . $fe_brightness_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        if ($fe_contrast_h != '1') {
            $res_ctx->load_settings_raw('fe_contrast_h', 'contrast(' . $fe_contrast_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        if ($fe_saturate_h != '1') {
            $res_ctx->load_settings_raw('fe_saturate_h', 'saturate(' . $fe_saturate_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        // make hover to work
        if ($fe_brightness_h != '1' || $fe_contrast_h != '1' || $fe_saturate_h != '1') {
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        if ($fe_brightness != '1' || $fe_contrast != '1' || $fe_saturate != '1') {
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
    }

    function render($atts, $content = null) {
        parent::render($atts);

	    // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $this->unique_block_class = $this->block_uid;

        $this->shortcode_atts = shortcode_atts(
			array_merge(
				td_api_multi_purpose::get_mapped_atts( __CLASS__ ))
			, $atts);

        $image = $this->get_shortcode_att( 'image' );
        $caption_text = rawurldecode( base64_decode( strip_tags( $this->get_shortcode_att( 'caption_text' ) ) ) );
        $caption_position = $this->get_shortcode_att( 'caption_position' );
        $modal_image = $this->get_shortcode_att( 'modal_image' );
        $display_inline = $this->get_shortcode_att( 'display_inline' );

	    if ( '' !== $image ) {
			$image_info = tdc_util::get_image($atts);
	    }
	    $image_title = '';
	    if( $image_info['title'] !== '' ) {
            $image_title = 'title="' . $image_info['title'] .  '"';
        }
        $image_alt = '';
        if( $image_info['alt'] != '' ) {
            $image_alt = 'alt="' . $image_info['alt'] .  '"';
        }

        $additional_classes = array();

        // display inline
        if( !empty ( $display_inline ) ) {
            $additional_classes[] = 'tdm-inline-block';
        }

        // caption position
        if( !empty ( $caption_position ) ) {
            $additional_classes[] = 'tdm-caption-over-image';
        }

        // content align horizontal
	    $content_align_horizontal = $this->get_shortcode_att( 'content_align_horizontal' );
        if( ! empty( $content_align_horizontal ) ) {
            $additional_classes[] = 'tdm-' . $content_align_horizontal;
        }

        // video pop-up
        $video_popup = $this->get_att( 'video_popup' );
        $video_url = $this->get_att( 'video_url' );
        $video_popup_class = '';
        $video_popup_data = '';

        if( $video_popup != '' ) {

            if( $video_url != '' ) {
                $video_source = td_video_support::detect_video_service($video_url);

                $video_popup_class = 'td-image-video-modal';
                $video_popup_data = 'data-video-source="' . $video_source . '" data-video-url="'. esc_url( $video_url ) . '"';

                $video_rec = '';
                if( $this->get_att( 'video_rec' ) != '' ) {
                    $video_rec = rawurldecode( base64_decode( strip_tags( $this->get_att( 'video_rec' ) ) ) );
                }
                $video_rec_title = '';
                if( $this->get_att( 'video_rec_title' ) != '' ) {
                    $video_rec_title = $this->get_att( 'video_rec_title' );
                }

                $video_popup_ad = array(
                    'code' => $video_rec,
                    'title' => $video_rec_title
                );

                if( $video_popup_ad['code'] != '' ) {
                    $video_popup_data .= ' data-video-rec="' . base64_encode( json_encode($video_popup_ad) ) . '"';
                }
            }

        }


	    $buffy = '<div class="tdm_block ' . $this->get_block_classes($additional_classes) . '" ' . $this->get_block_html_atts() . '>';

	    if ( empty( $image_info['url'] ) ) {
		    $buffy .= td_util::get_block_error( 'Inline single image', "Configure this block/widget's to have an image" );
	    } else {
		    //get the block css
		    $buffy .= $this->get_block_css();

		    $buffy .= '<div class="tdm-inline-image-wrap ' . $video_popup_class . '" ' . $video_popup_data . '>';
                if( !empty( $modal_image ) && ( $video_popup == '' || $video_url == '' ) ) {
                    $buffy .= '<a href="' . $image_info['url'] . '">';
                        $buffy .= '<img class="tdm-image td-fix-index td-modal-image" src="' . $image_info['url'] . '" ' . $image_title . ' ' . $image_alt . '>';
                    $buffy .= '</a>';
                } else {
                    if( $video_popup != '' && $video_url != '' ) {
                        $buffy .= '<span class="td-video-play-ico"><i class="td-icon-video-thumb-play"></i></span>';
                    }

                    $buffy .= '<img class="tdm-image td-fix-index" src="' . $image_info['url'] . '" ' . $image_title . ' ' . $image_alt . '>';
                }
            $buffy .= '</div>';

            if( $caption_text != '' ) {
                $buffy .= '<div class="tdm-caption">' . $caption_text . '</div>';
            }
	    }

        $buffy .= '</div>';


        return $buffy;
    }
}