<?php

/**
 *
 * Class td_block_big_grid_flex_1
 */
class td_block_big_grid_flex_1 extends td_block {

    static function cssMedia( $res_ctx ) {

        /*-- GENERAL -- */
        $res_ctx->load_settings_raw( 'general_style', 1 );
        $res_ctx->load_settings_raw( 'specific_style', 1 );



        // container_width
        $container_width = $res_ctx->get_shortcode_att('container_width');
        if ( is_numeric( $container_width ) ) {
            $res_ctx->load_settings_raw( 'container_width', $container_width . '%' );
        } else {
            $res_ctx->load_settings_raw( 'container_width', $container_width );
        }

        //image alignment
        $res_ctx->load_settings_raw( 'image_alignment', $res_ctx->get_shortcode_att('image_alignment') . '%' );

        // image_height
        $image_height = $res_ctx->get_shortcode_att('image_height');
        if ( is_numeric( $image_height ) ) {
            $res_ctx->load_settings_raw( 'image_height', $image_height . '%' );
        } else {
            $res_ctx->load_settings_raw( 'image_height', $image_height );
        }

        // video icon size
        $video_icon = $res_ctx->get_shortcode_att('video_icon');
        if ( $video_icon != '' && is_numeric( $video_icon ) ) {
            $res_ctx->load_settings_raw( 'video_icon', $video_icon . 'px' );
        }

        // video icon position
        $video_icon_pos = $res_ctx->get_shortcode_att('video_icon_pos');
        if( $video_icon_pos == '' || $video_icon_pos == 'center' ) {
            $res_ctx->load_settings_raw( 'video_icon_pos_center', 1 );
        } else if ( $video_icon_pos == 'corner' ) {
            $res_ctx->load_settings_raw( 'video_icon_pos_corner', 1 );
        }

        // image zoom effect on hover
        $res_ctx->load_settings_raw( 'image_zoom', $res_ctx->get_shortcode_att('image_zoom') );

        // meta info margin
        $meta_margin = $res_ctx->get_shortcode_att('meta_margin');
        $res_ctx->load_settings_raw( 'meta_margin', $meta_margin );
        if ( is_numeric( $meta_margin ) ) {
            $res_ctx->load_settings_raw( 'meta_margin', $meta_margin . 'px' );
        }
        // meta info padding
        $meta_padding = $res_ctx->get_shortcode_att('meta_padding');
        $res_ctx->load_settings_raw( 'meta_padding', $meta_padding );
        if ( is_numeric( $meta_padding ) ) {
            $res_ctx->load_settings_raw( 'meta_padding', $meta_padding . 'px' );
        }

        // meta info horizontal align
        $meta_info_horiz = $res_ctx->get_shortcode_att('meta_info_horiz');
        if( $meta_info_horiz == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'meta_info_horiz_center', 1 );
        }
        if( $meta_info_horiz == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'meta_info_horiz_right', 1 );
        }

        // meta info horizontal align
        $meta_info_vert = $res_ctx->get_shortcode_att('meta_info_vert');
        if( $meta_info_vert == 'content-vert-top' ) {
            $res_ctx->load_settings_raw( 'meta_info_vert_top', 1 );
        }
        if( $meta_info_vert == 'content-vert-center' ) {
            $res_ctx->load_settings_raw( 'meta_info_vert_center', 1 );
        }
        if( $meta_info_vert == 'content-vert-bottom' ) {
            $res_ctx->load_settings_raw( 'meta_info_vert_bottom', 1 );
        }

        // meta info width
        $meta_info_width = $res_ctx->get_shortcode_att('meta_width');
        $res_ctx->load_settings_raw( 'meta_width', $meta_info_width );
        if( $meta_info_width != '' && is_numeric( $meta_info_width ) ) {
            $res_ctx->load_settings_raw( 'meta_width', $meta_info_width . 'px' );
        }

        // module_border_width
        $modules_cat_border = $res_ctx->get_shortcode_att('modules_cat_border');
        $res_ctx->load_settings_raw( 'modules_cat_border', $modules_cat_border );
        if ( is_numeric( $modules_cat_border ) ) {
            $res_ctx->load_settings_raw( 'modules_cat_border', $modules_cat_border . 'px' );
        }

        //category tag radius
        $modules_category_radius = $res_ctx->get_shortcode_att('modules_category_radius');
        if ( $modules_category_radius != 0 || !empty($modules_category_radius) ) {
            $res_ctx->load_settings_raw( 'modules_category_radius', $modules_category_radius . 'px' );
        }

        // modules per row
        $grid_layout = $res_ctx->get_shortcode_att('grid_layout');
        if ( $grid_layout == '' ) {
            $grid_layout = 1;
            $res_ctx->load_settings_raw( 'modules_on_row', '100%' );
        }

        // modules clearfix
        $clearfix = 'clearfix';
        $padding = 'padding';
        if ( $res_ctx->is( 'all' ) ) {
            $clearfix = 'clearfix_desktop';
            $padding = 'padding_desktop';
        }
        switch ($grid_layout) {
            case '1':
                $res_ctx->load_settings_raw( $padding,  '1' );
                $res_ctx->load_settings_raw( 'modules_on_row', '100%' );
                break;
            case '2':
                $res_ctx->load_settings_raw( $clearfix,  '2n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+2' );
                $res_ctx->load_settings_raw( 'modules_on_row', '50%' );
                break;
            case '3':
                $res_ctx->load_settings_raw( $clearfix,  '3n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+3' );
                $res_ctx->load_settings_raw( 'modules_on_row', '33.33333333%' );
                break;
            case '4':
                $res_ctx->load_settings_raw( $clearfix,  '4n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+4' );
                $res_ctx->load_settings_raw( 'modules_on_row', '25%' );
                break;
            case '5':
                $res_ctx->load_settings_raw( $clearfix,  '5n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+4' );
                $res_ctx->load_settings_raw( 'modules_on_row', '20%' );
                break;
        }

        // modules gap
        $modules_gap = $res_ctx->get_shortcode_att('modules_gap');
        $res_ctx->load_settings_raw( 'modules_gap', $modules_gap );
        $res_ctx->load_settings_raw( 'modules_gap_mob', $modules_gap );
        if ( $modules_gap == '' ) {
            $res_ctx->load_settings_raw( 'modules_gap', '20px');
            $res_ctx->load_settings_raw( 'modules_gap_mob', '20px');
        } else if ( is_numeric( $modules_gap ) ) {
            $res_ctx->load_settings_raw( 'modules_gap', $modules_gap / 2 .'px' );
            $res_ctx->load_settings_raw( 'modules_gap_mob', $modules_gap .'px' );
        }

        // article title space
        $art_title = $res_ctx->get_shortcode_att('art_title');
        $res_ctx->load_settings_raw( 'art_title', $art_title );
        if ( is_numeric( $art_title ) ) {
            $res_ctx->load_settings_raw( 'art_title', $art_title . 'px' );
        }
        // article title padding
        $art_title_padd = $res_ctx->get_shortcode_att('art_title_padd');
        $res_ctx->load_settings_raw( 'art_title_padd', $art_title_padd );
        if ( is_numeric( $art_title_padd ) ) {
            $res_ctx->load_settings_raw( 'art_title_padd', $art_title_padd . 'px' );
        }

        // author & date padding
        $auth_date_padd = $res_ctx->get_shortcode_att('auth_date_padding');
        $res_ctx->load_settings_raw( 'auth_date_padd', $auth_date_padd );
        if ( is_numeric( $auth_date_padd ) ) {
            $res_ctx->load_settings_raw( 'auth_date_padd', $auth_date_padd . 'px' );
        }

        // category tag margin
        $modules_category_margin = $res_ctx->get_shortcode_att('modules_category_margin');
        $res_ctx->load_settings_raw( 'modules_category_margin', $modules_category_margin );
        if( $modules_category_margin != '' ) {
            if( is_numeric( $modules_category_margin ) ) {
                $res_ctx->load_settings_raw( 'modules_category_margin', $modules_category_margin . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'modules_category_margin', '0 0 5px' );
        }

        // category tag padding
        $modules_category_padding = $res_ctx->get_shortcode_att('modules_category_padding');
        $res_ctx->load_settings_raw( 'modules_category_padding', $modules_category_padding );
        if( $modules_category_padding != '' && is_numeric( $modules_category_padding ) ) {
            $res_ctx->load_settings_raw( 'modules_category_padding', $modules_category_padding . 'px' );
        }

        // show meta info details
        $res_ctx->load_settings_raw( 'show_cat', $res_ctx->get_shortcode_att('show_cat') );
        $show_author = $res_ctx->get_shortcode_att('show_author');
        $show_date = $res_ctx->get_shortcode_att('show_date');
        $show_review = $res_ctx->get_shortcode_att('show_review');
        $review_size = $res_ctx->get_shortcode_att('review_size');
        $res_ctx->load_settings_raw( 'review_size', 10 + $review_size/0.5 . 'px' );
        if( $show_author == 'none' && $show_date == 'none' && $show_review == 'none' ) {
            $res_ctx->load_settings_raw( 'hide_author_date', 1 );
        }
        $res_ctx->load_settings_raw( 'show_author', $show_author );
        $res_ctx->load_settings_raw( 'show_date', $show_date );
        $res_ctx->load_settings_raw( 'show_review', $show_review );

        // underline height
        $underline_height = $res_ctx->get_shortcode_att('all_underline_height');
        $res_ctx->load_settings_raw( 'all_underline_height', $underline_height );
        if( $underline_height != '' && is_numeric( $underline_height ) ) {
            $res_ctx->load_settings_raw( 'all_underline_height', $underline_height . 'px' );
        } else {
            $res_ctx->load_settings_raw( 'all_underline_height', '0' );
        }
        // underline color
        $underline_color = $res_ctx->get_shortcode_att('all_underline_color');
        if ( $underline_height != 0 ) {
            if( $underline_color == '' ) {
                $res_ctx->load_settings_raw('all_underline_color', '#000');
            } else {
                $res_ctx->load_settings_raw('all_underline_color', $res_ctx->get_shortcode_att('all_underline_color'));
            }
        }

        // colors
        $res_ctx->load_color_settings( 'overlay_general', 'overlay_general', 'overlay_general_gradient', '', '' );
        $res_ctx->load_color_settings( 'overlay_h_general', 'overlay_h_general', 'overlay_general_h_gradient', '', '' );
        $res_ctx->load_color_settings( 'overlay_1', 'overlay_1', 'overlay_1_gradient', '', '' );
        $res_ctx->load_color_settings( 'overlay_2', 'overlay_2', 'overlay_2_gradient', '', '' );
        $res_ctx->load_color_settings( 'overlay_3', 'overlay_3', 'overlay_3_gradient', '', '' );
        $res_ctx->load_color_settings( 'overlay_4', 'overlay_4', 'overlay_4_gradient', '', '' );
        $res_ctx->load_settings_raw( 'meta_bg', $res_ctx->get_shortcode_att('meta_bg') );
        $res_ctx->load_settings_raw( 'meta_shadow', $res_ctx->get_shortcode_att('meta_shadow') );
        $res_ctx->load_settings_raw( 'cat_bg', $res_ctx->get_shortcode_att('cat_bg') );
        $res_ctx->load_settings_raw( 'cat_txt', $res_ctx->get_shortcode_att('cat_txt') );
        $res_ctx->load_settings_raw( 'cat_bg_hover', $res_ctx->get_shortcode_att('cat_bg_hover') );
        $res_ctx->load_settings_raw( 'cat_txt_hover', $res_ctx->get_shortcode_att('cat_txt_hover') );
        $res_ctx->load_settings_raw( 'cat_border', $res_ctx->get_shortcode_att('cat_border') );
        $res_ctx->load_settings_raw( 'cat_border_hover', $res_ctx->get_shortcode_att('cat_border_hover') );
        $res_ctx->load_settings_raw( 'title_txt', $res_ctx->get_shortcode_att('title_txt') );
        $res_ctx->load_settings_raw( 'title_txt_hover', $res_ctx->get_shortcode_att('title_txt_hover') );
        $res_ctx->load_settings_raw( 'title_bg', $res_ctx->get_shortcode_att('title_bg') );
        $res_ctx->load_settings_raw( 'title_shadow', $res_ctx->get_shortcode_att('title_shadow') );
        $res_ctx->load_settings_raw( 'author_txt', $res_ctx->get_shortcode_att('author_txt') );
        $res_ctx->load_settings_raw( 'author_txt_hover', $res_ctx->get_shortcode_att('author_txt_hover') );
        $res_ctx->load_settings_raw( 'date_txt', $res_ctx->get_shortcode_att('date_txt') );
        $res_ctx->load_settings_raw( 'auth_date_bg', $res_ctx->get_shortcode_att('auth_date_bg') );
        $res_ctx->load_settings_raw( 'review_stars', $res_ctx->get_shortcode_att('review_stars') );


        // fonts
        $res_ctx->load_font_settings( 'f_title' );
        $res_ctx->load_font_settings( 'f_cat' );
        $res_ctx->load_font_settings( 'f_meta' );
        $res_ctx->load_settings_raw( 'f_meta_fw', $res_ctx->get_shortcode_att('f_meta_font_weight') );

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
        // effects
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

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
                /* @general_style */
                .td-big-grid-flex {
                    width: 100%;
                    padding-bottom: 0;
                }
                .td-big-grid-flex .td_block_inner:after,
                .td-big-grid-flex .td_block_inner .td-big-grid-flex-post:after {
                    content: '';
                    display: table;
                    clear: both;
                }
                @media (max-width: 767px) {
                    .td-big-grid-flex .td_block_inner {
                        margin-left: -20px;
                        margin-right: -20px;
                    }
                }
                .td-big-grid-flex .td-big-grid-flex-post {
                    position: relative;
                    float: left;
                    padding-bottom: 0;
                }
                .td-big-grid-flex .td-image-container {
                    position: relative;
                    flex: 0 0 100%;
                    width: 100%;
                    height: 100%;
                }
                .td-big-grid-flex .td-image-wrap {
                    position: relative;
                    display: block;
                    overflow: hidden;
                }
                .td-big-grid-flex .td-image-wrap:before {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: background-color 0.3s ease;
                    transition: background-color 0.3s ease;
                    z-index: 1;
                }
                .td-big-grid-flex .td-module-thumb {
                    position: relative;
                    margin-bottom: 0;
                }
                .td-big-grid-flex .td-module-thumb:after {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }
                .td-big-grid-flex .td-thumb-css {
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    background-size: cover;
                    background-position: center center;
                    -webkit-transition: transform 0.3s ease, opacity 0.3s;
                    transition: transform 0.3s ease, opacity 0.3s;
                }
                .td-big-grid-flex .td-module-meta-info {
                    position: absolute;
                    left: 0;
                    margin-bottom: 0;
                    width: 100%;
                    pointer-events: none;
                    z-index: 1;
                }
                .td-big-grid-flex .td-post-category {
                    padding: 3px 7px;
                    background-color: rgba(0, 0, 0, 0.7);
                    font-family: 'Roboto', sans-serif;
                    line-height: 13px;
                    font-weight: 500;
                    text-transform: uppercase;
                    pointer-events: auto;
                }
                .td-big-grid-flex .td-module-title a,
                .td-big-grid-flex .td-post-author-name span,
                .td-big-grid-flex .td-module-container:hover .entry-title a,
                .td-big-grid-flex .td-post-author-name a,
                .td-big-grid-flex .td-post-date {
                    color: #fff;
                }
                .td-big-grid-flex .td-module-title {
                    margin: 0;
                }
                .td-big-grid-flex .td-module-title a {
                    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
                }
                .td-big-grid-flex .td-editor-date {
                    display: inline-block;
                }
                .td-big-grid-flex .td-post-author-name a,
                .td-big-grid-flex .td-post-author-name span,
                .td-big-grid-flex .td-post-date {
                    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
                }
                .td-big-grid-flex .td-big-grid-flex-post-empty .td-image-wrap {
                    background-color: #e5e5e5;
                }
                .td-big-grid-flex .td-big-grid-flex-post-empty .td-image-wrap:before {
                    display: none;
                }
                @media (min-width: 767px) {
                    .td-big-grid-flex-lightsky .td-image-wrap:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 160%;
                        height: 100%;
                        background: rgba(255, 255, 255, 0.2);
                        transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, -120%, 0);
                        -webkit-transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, -120%, 0);
                        transition: transform 0.7s ease 0s;
                        -webkit-transition: transform 0.7s ease 0s;
                        z-index: 1;
                    }
                    .td-big-grid-flex-lightsky .td-module-container:hover .td-image-wrap:after {
                        transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, 146%, 0);
                        -webkit-transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, 146%, 0);
                    }
                }
                @media (max-width: 767px) {
                    div.td-big-grid-flex-scroll .td-big-grid-flex-post {
                        float: none;
                    }
                    div.td-big-grid-flex-scroll .td-big-grid-flex-scroll-holder {
                        overflow-x: auto;
                        overflow-y: hidden;
                        white-space: nowrap;
                        font-size: 0;
                        -webkit-overflow-scrolling: touch;
                    }
                    div.td-big-grid-flex-scroll .td-big-grid-flex-scroll-holder .td-big-grid-flex-post {
                        display: inline-block;
                        vertical-align: top;
                    }
                    div.td-big-grid-flex-scroll .td-module-title a {
                        white-space: normal;
                    }
                }
                
                /* @specific_style */
                @media (max-width: 767px) {
                    .td_block_big_grid_flex_1 .td-big-grid-flex-post {
                        width: 100%;
                    }
                }
                .td_block_big_grid_flex_1 .td-module-container {
                    position: relative;
                }
                .td_block_big_grid_flex_1 .td-image-wrap {
                    padding-bottom: 75%;
                }
                .td_block_big_grid_flex_1 .td-module-meta-info {
                    padding: 22px 20px;
                }
                .td_block_big_grid_flex_1 .td-module-title {
                    font-family: 'Roboto', sans-serif;
                    font-size: 27px;
                    font-weight: 500;
                    line-height: 34px;
                    margin: 0 0 9px 0;
                }
                .td_block_big_grid_flex_1 .td-editor-date {
                    display: inline-block;
                }
                
                
                

                /* @container_width */
				div.$unique_block_class {
					width: @container_width; float: left;
				}
				/* @image_alignment */
				div.$unique_block_class .entry-thumb {
					background-position: center @image_alignment;
				}
				/* @image_height */
				div.$unique_block_class .td-image-wrap {
					padding-bottom: @image_height;
				}
				/* @video_icon */
				div.$unique_block_class .td-video-play-ico {
					width: @video_icon;
					height: @video_icon;
					font-size: @video_icon;
				}
				/* @video_icon_pos_center */
				div.$unique_block_class .td-video-play-ico {
					top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
				}
				/* @video_icon_pos_corner */
				div.$unique_block_class .td-video-play-ico {
					top: 20px;
                    left: auto;
                    right: 20px;
                    transform: none;
				}
				/* @image_zoom */
				@media (min-width: 767px) {
                    div.$unique_block_class .td-module-container:hover .td-thumb-css {
                        transform: scale3d(1.1, 1.1, 1);
                        -webkit-transform: scale3d(1.1, 1.1, 1);
                    }
                }
				/* @image_width */
				div.$unique_block_class .td-image-container {
				 	flex: 0 0 @image_width;
				 	width: @image_width;
			    }
				/* @hide */
				div.$unique_block_class .td-image-container {
					display: none;
				}
				
				/* @meta_info_horiz_center */
				div.$unique_block_class .td-module-meta-info {
					text-align: center;
                    right: 0;
                    margin: 0 auto;
				}
				/* @meta_info_horiz_right */
				div.$unique_block_class .td-module-meta-info {
					text-align: right;
					left: auto;
					right: 0;
				}
			
				/* @meta_info_vert_top */
				div.$unique_block_class .td-module-meta-info {
					top: 0;
				}
				/* @meta_info_vert_center */
				div.$unique_block_class .td-module-meta-info {
					top: 50%;
					transform: translateY(-50%);
				}
				/* @meta_info_vert_bottom */
				div.$unique_block_class .td-module-meta-info {
					bottom: 0;
				}
				
				/* @meta_width */
				div.$unique_block_class .td-module-meta-info {
					width: @meta_width;
				}
				/* @meta_margin */
				div.$unique_block_class .td-module-meta-info {
					margin: @meta_margin;
				}
				/* @meta_padding */
				div.$unique_block_class .td-module-meta-info {
					padding: @meta_padding;
				}
				/* @align_category_top */
				div.$unique_block_class .td-category-pos-image .td-post-category {
					top: 0;
					bottom: auto;
				}
				/* @align_category_bottom */
				div.$unique_block_class .td-category-pos-image .td-post-category {
					top: auto;
				 	bottom: 0;
			    }
				/* @modules_on_row */
				@media (min-width: 767px) {
                    div.$unique_block_class .td-big-grid-flex-post {
                        width: @modules_on_row;
                    }
                }
				/* @modules_gap */
				@media (min-width: 767px) {
                    div.$unique_block_class .td-big-grid-flex-post {
                        padding-left: @modules_gap;
                        padding-right: @modules_gap;
                    }
                    div.$unique_block_class .td_block_inner {
                        margin-left: -@modules_gap;
                        margin-right: -@modules_gap;
                    }
                }
				/* @modules_gap_mob */
                @media (max-width: 767px) {
                    div.$unique_block_class .td-big-grid-flex-post {
                        margin-bottom: @modules_gap_mob;
                    }
                    div.$unique_block_class .td-big-grid-flex-post:last-child {
                        margin-bottom: 0;
                    }
                }
				/* @modules_divider */
				div.$unique_block_class .td-module-container:before {
					border-width: 0 0 1px 0;
					border-style: @modules_divider;
					border-color: #eaeaea;
				}
				/* @modules_divider_color */
				div.$unique_block_class .td-module-container:before {
					border-color: @modules_divider_color;
				}
				/* @image_radius */
				div.$unique_block_class .entry-thumb,
				div.$unique_block_class .entry-thumb:before,
				div.$unique_block_class .entry-thumb:after {
					border-radius: @image_radius;
				}
				/* @modules_category_margin */
				div.$unique_block_class .td-post-category {
					margin: @modules_category_margin;
				}
				/* @modules_category_padding */
				div.$unique_block_class .td-post-category {
					padding: @modules_category_padding;
				}
				/* @modules_cat_border */
                div.$unique_block_class .td-post-category {
                    border: @modules_cat_border solid #aaa;
                }
                /* @cat_border */
                div.$unique_block_class .td-post-category {
                    border-color: @cat_border;
                }
                /* @cat_border_hover */
                div.$unique_block_class .td-post-category:hover {
                    border-color: @cat_border_hover;
                }
                /* @modules_category_radius */
                div.$unique_block_class .td-post-category {
                    border-radius: @modules_category_radius;
                }
				/* @show_cat */
				div.$unique_block_class .td-post-category {
					display: @show_cat;
				}
				/* @show_excerpt */
				div.$unique_block_class .td-excerpt {
					display: @show_excerpt;
				}
				/* @show_btn */
				div.$unique_block_class .td-read-more {
					display: @show_btn;
				}
				/* @all_underline_color */
                @media (min-width: 768px) {
                    div.$unique_block_class .td-module-title a {
                        transition: all 0.2s ease;
                        -webkit-transition: all 0.2s ease;
                    }
                }
                div.$unique_block_class .td-module-title a {
                    box-shadow: inset 0 0 0 0 @all_underline_color;
                }
                /* @all_underline_height */
                div.$unique_block_class .td-module-container:hover .td-module-title a {
                    box-shadow: inset 0 -@all_underline_height 0 0 @all_underline_color;
                }
				/* @hide_author_date */
				div.$unique_block_class .td-editor-date {
					display: none;
				}
				/* @show_author */
				div.$unique_block_class .td-post-author-name {
					display: @show_author;
				}
				/* @show_date */
				div.$unique_block_class .td-post-date,
				div.$unique_block_class .td-post-author-name span {
					display: @show_date;
				}
				/* @show_review */
				div.$unique_block_class .entry-review-stars {
					display: @show_review;
				}
				/* @review_size */
				div.$unique_block_class .td-icon-star,
                div.$unique_block_class .td-icon-star-empty,
                div.$unique_block_class .td-icon-star-half {
					font-size: @review_size;
				}
				/* @show_com */
				div.$unique_block_class .td-module-comments {
					display: @show_com;
				}
				/* @clearfix_desktop */
				div.$unique_block_class .td-big-grid-flex-post:nth-child(@clearfix_desktop) {
					clear: both;
				}
				/* @clearfix */
				div.$unique_block_class .td-big-grid-flex-post {
					clear: none !important;
				}
				div.$unique_block_class .td-big-grid-flex-post:nth-child(@clearfix) {
					clear: both !important;
				}
				/* @padding_desktop */
				@media (min-width: 767px) {
                    div.$unique_block_class .td-big-grid-flex-post:nth-last-child(@padding_desktop) {
                        margin-bottom: 0 !important;
                        padding-bottom: 0 !important;
                    }
                    div.$unique_block_class .td-big-grid-flex-post .td-module-container:before {
                        display: block !important;
                    }
                    div.$unique_block_class .td-big-grid-flex-post:nth-last-child(@padding_desktop) .td-module-container:before {
                        display: none !important;
                    }
                }
				/* @m_bg */
				div.$unique_block_class .td-module-container {
					background-color: @m_bg;
				}
				
				
				/* @overlay_general */
				div.$unique_block_class .td-image-wrap:before {
				    content: '';
				    background-color: @overlay_general;
				}
				/* @overlay_h_general */
				div.$unique_block_class .td-module-thumb:after {
				    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
				    background-color: @overlay_h_general;
				    opacity: 0;
				    z-index: 1;
                    -webkit-transition: opacity 0.4s ease 0.2s;
                    -moz-transition: opacity 0.4s ease 0.2s;
                    -o-transition: opacity 0.4s ease 0.2s;
                    transition: opacity 0.4s ease 0.2s;
                    pointer-events: none;
				}
				div.$unique_block_class .td-module-container:hover .td-module-thumb:after {
				    opacity: 1;
				}
				/* @overlay_general_gradient */
				div.$unique_block_class .td-image-wrap:before {
				    content: '';
				    @overlay_general_gradient
				}
				/* @overlay_general_h_gradient */
				div.$unique_block_class .td-module-thumb:after {
				    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
				    background-color: @overlay_general_h_gradient;
				    opacity: 0;
				    z-index: 1;
                    -webkit-transition: opacity 0.4s ease 0.2s;
                    -moz-transition: opacity 0.4s ease 0.2s;
                    -o-transition: opacity 0.4s ease 0.2s;
                    transition: opacity 0.4s ease 0.2s;
                    pointer-events: none;
				}
				div.$unique_block_class .td-module-container:hover .td-module-thumb:after {
				    opacity: 1;
				}
				/* @overlay_1 */
				div.$unique_block_class .td-big-grid-flex-post:nth-child(4n+1) .td-image-wrap:before {
				    content: '';
				    background-color: @overlay_1;
				}
				/* @overlay_1_gradient */
				div.$unique_block_class .td-big-grid-flex-post:nth-child(4n+1) .td-image-wrap:before {
				    content: '';
				    @overlay_1_gradient
				}
				/* @overlay_2 */
				div.$unique_block_class .td-big-grid-flex-post:nth-child(4n+2) .td-image-wrap:before {
				    content: '';
				    background-color: @overlay_2;
				}
				/* @overlay_2_gradient */
				div.$unique_block_class .td-big-grid-flex-post:nth-child(4n+2) .td-image-wrap:before {
				    content: '';
				    @overlay_2_gradient
				}
				/* @overlay_3 */
				div.$unique_block_class .td-big-grid-flex-post:nth-child(4n+3) .td-image-wrap:before {
				    content: '';
				    background-color: @overlay_3;
				}
				/* @overlay_3_gradient */
				div.$unique_block_class .td-big-grid-flex-post:nth-child(4n+3) .td-image-wrap:before {
				    content: '';
				    @overlay_3_gradient
				}
				/* @overlay_4 */
				div.$unique_block_class .td-big-grid-flex-post:nth-child(4n+4) .td-image-wrap:before {
				    content: '';
				    background-color: @overlay_4;
				}
				/* @overlay_4_gradient */
				div.$unique_block_class .td-big-grid-flex-post:nth-child(4n+4) .td-image-wrap:before {
				    content: '';
				    @overlay_4_gradient
				}
				
				
				/* @meta_bg */
				div.$unique_block_class .td-module-meta-info {
					background-color: @meta_bg;
				}
				/* @cat_bg */
				div.$unique_block_class .td-post-category {
					background-color: @cat_bg;
				}
				/* @cat_bg_hover */
				div.$unique_block_class .td-module-container:hover .td-post-category {
					background-color: @cat_bg_hover;
				}
				/* @cat_txt */
				div.$unique_block_class .td-post-category {
					color: @cat_txt;
				}
				/* @cat_txt_hover */
				div.$unique_block_class .td-module-container:hover .td-post-category {
					color: @cat_txt_hover;
				}
				/* @title_txt */
				div.$unique_block_class .td-module-title a {
					color: @title_txt;
				}
				/* @title_txt_hover */
				div.$unique_block_class .td-big-grid-flex-post:hover .td-module-title a {
					color: @title_txt_hover;
				}
				/* @title_shadow */
				div.$unique_block_class .td-module-title a {
					text-shadow: none;
				}
				/* @title_bg */
				div.$unique_block_class .td-module-title {
					background-color: @title_bg;
				}
				/* @author_txt */
				div.$unique_block_class .td-post-author-name a {
					color: @author_txt;
				}
				/* @author_txt_hover */
				div.$unique_block_class .td-big-grid-flex-post:hover .td-post-author-name a {
					color: @author_txt_hover;
				}
				/* @date_txt */
				div.$unique_block_class .td-post-date,
				div.$unique_block_class .td-post-author-name span {
					color: @date_txt;
				}
				/* @auth_date_bg */
				div.$unique_block_class .td-editor-date {
					background-color: @auth_date_bg;
				}
				/* @review_stars */
				div.$unique_block_class .entry-review-stars {
				    color: @review_stars;
				}
				/* @meta_shadow */
				div.$unique_block_class .td-post-author-name a,
				div.$unique_block_class .td-post-author-name span,
				div.$unique_block_class .td-post-date {
				    text-shadow: none;
				}
				/* @art_title */
				div.$unique_block_class .entry-title {
					margin: @art_title;
				}
				/* @art_title_padd */
				div.$unique_block_class .entry-title {
					padding: @art_title_padd;
				}
				/* @auth_date_padd */
				div.$unique_block_class .td-editor-date {
					padding: @auth_date_padd;
				}

				/* @f_header */
				div.$unique_block_class .td-block-title a,
				div.$unique_block_class .td-block-title span {
					@f_header
				}
				/* @f_ajax */
				div.$unique_block_class .td-subcat-list a,
				div.$unique_block_class .td-subcat-dropdown span,
				div.$unique_block_class .td-subcat-dropdown a {
					@f_ajax
				}
				/* @f_pag */
				div.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a i,
				div.$unique_block_class .page-nav a,
				div.$unique_block_class .page-nav span,
				div.$unique_block_class .td-load-more-wrap a {
					@f_pag
				}
				/* @f_title */
				div.$unique_block_class .entry-title {
					@f_title
				}
				/* @f_cat */
				div.$unique_block_class .td-post-category {
					@f_cat
				}
				/* @f_meta */
				div.$unique_block_class .td-editor-date,
				div.$unique_block_class .td-module-comments a {
					@f_meta
				}
				/* @f_meta_fw */
				div.$unique_block_class .td-post-author-name {
				    font-weight: @f_meta_fw;
				}
				/* @f_ex */
				div.$unique_block_class .td-excerpt {
					@f_ex
				}
				/* @f_btn */
				div.$unique_block_class .td-read-more a {
					@f_btn
				}
				
				/* @mix_type */
				html:not([class*='ie']) div.$unique_block_class .entry-thumb:before {
				    content: '';
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
					opacity: 1;
					transition: opacity 1s ease;
					-webkit-transition: opacity 1s ease;
					mix-blend-mode: @mix_type;
				}
				/* @color */
				html:not([class*='ie']) div.$unique_block_class .entry-thumb:before {
                    background: @color;
				}
				/* @mix_gradient */
				html:not([class*='ie']) div.$unique_block_class .entry-thumb:before {
                    @mix_gradient;
				}
				
				
                /* @mix_type_h */
                @media (min-width: 1141px) {
                    html:not([class*='ie']) div.$unique_block_class .entry-thumb:after {
                        content: '';
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        opacity: 0;
                        transition: opacity 1s ease;
                        -webkit-transition: opacity 1s ease;
                        mix-blend-mode: @mix_type_h;
                    }
                    html:not([class*='ie']) div.$unique_block_class .td-module-container:hover .entry-thumb:after {
                        opacity: 1;
                    }
                }
                
                /* @color_h */
                html:not([class*='ie']) div.$unique_block_class .entry-thumb:after {
                    background: @color_h;
                }
                /* @mix_gradient_h */
                html:not([class*='ie']) div.$unique_block_class .entry-thumb:after {
                    @mix_gradient_h;
                }
                /* @mix_type_off */
                html:not([class*='ie']) div.$unique_block_class .td-module-container:hover .entry-thumb:before {
                    opacity: 0;
                }
                    
				/* @effect_on */
                html:not([class*='ie']) div.$unique_block_class .entry-thumb {
                    filter: @fe_brightness @fe_contrast @fe_saturate;
                    transition: all 1s ease;
					-webkit-transition: all 1s ease;
                }
				/* @effect_on_h */
				@media (min-width: 1141px) {
                    html:not([class*='ie']) div.$unique_block_class .td-module-container:hover .entry-thumb {
                        filter: @fe_brightness_h @fe_contrast_h @fe_saturate_h;
                    }
                }

			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();

        return $compiled_css;
    }


    function render($atts, $content = null){

		if ( empty( $atts ) ) {
			$atts = array();
		}

        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        $atts['limit'] = $this->get_att( 'grid_layout' );

        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        $additional_classes = array();

        if( $this->get_att( 'lightsky' ) != '' ) {
            $additional_classes[] = 'td-big-grid-flex-lightsky';
        }


        $buffy = '';

        $buffy .= '<div class="td-big-grid-flex ' . $this->get_block_classes($additional_classes). ' td-big-grid-flex-posts"' . $this->get_block_html_atts() . '>';
            //get the block css
            $buffy .= $this->get_block_css();

            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
                $buffy .= $this->inner($this->td_query->posts, $this->get_att( 'grid_layout' ), $this->get_att('td_column_number')); //inner content of the block
            $buffy .= '</div>';
        $buffy .= '</div>';

        return $buffy;
    }

    function inner($posts, $post_limit, $td_column_number = '') {

        $buffy = '';

        if (!empty($posts)) {

            $post_count = 0;

            foreach ( $posts as $post ) {
                $td_module_flex = new td_module_flex_6( $post, $this->get_all_atts() );
                $buffy .= $td_module_flex->render( $post_count );

                $post_count++;
            }

            if ($post_count < $post_limit) {
                for ($i = $post_count; $i < $post_limit; $i++) {
                    $td_module_flex = new td_module_flex_empty( $post, $this->get_all_atts() );
                    $buffy .= $td_module_flex->render($i, 'td_module_flex_6');

                    $post_count++;
                }
            }

        }

        return $buffy;
    }
}