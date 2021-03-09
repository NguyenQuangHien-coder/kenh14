<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 30.12.2014
 * Time: 13:27
 */


require_once(TDC_PATH . '/legacy/common/wp_booster/td_video_playlist_render.php');


//class for youtube playlist shortcode
class td_block_video_youtube extends td_block {

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
                /* @general_style */
                .td_video_playlist_title {
                    position: relative;
                    z-index: 1;
                    background-color: #222;
                }
                .td_video_playlist_title .td_video_title_text {
                    font-family: 'Open Sans', arial, sans-serif;
                    font-weight: bold;
                    font-size: 15px;
                    color: #ffffff;
                    margin-left: 17px;
                    margin-right: 17px;
                    vertical-align: middle;
                    line-height: 24px;
                    padding: 10px 0 10px 0;
                }
                @media (max-width: 767px) {
                    .td_video_playlist_title .td_video_title_text {
                        text-align: center;
                    }
                }
                .td_wrapper_video_playlist {
                    z-index: 1;
                    position: relative;
                    display: flex;
                }
                .td_wrapper_video_playlist .td_video_controls_playlist_wrapper {
                    background-color: @td_theme_color;
                    position: relative;
                }
                .td_wrapper_video_playlist .td_video_controls_playlist_wrapper:before {
                    content: '';
                    background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAGBAMAAADwPukCAAAAElBMVEUAAAAAAAAAAAAAAAAAAAAAAADgKxmiAAAABnRSTlM9KRgMBADiSB2HAAAAFElEQVR4XmNgYBBgUGAwYHBgCAAAA3wA8fpXm6EAAAAASUVORK5CYII=) repeat-x;
                    width: 100%;
                    height: 6px;
                    position: absolute;
                    bottom: -6px;
                    z-index: 1;
                }
                .td_wrapper_video_playlist .td_video_stop_play_control {
                    position: relative;
                    width: 65px;
                    height: 65px;
                    outline: 0 !important;
                }
                .td_wrapper_video_playlist .td_video_stop_play_control:after {
                    content: '';
                    width: 1px;
                    height: 37px;
                    background-color: rgba(255, 255 ,255 ,0.2);
                    position: absolute;
                    top: 14px;
                    right: 0;
                }
                .td_wrapper_video_playlist .td_youtube_control,
                .td_wrapper_video_playlist .td_vimeo_control {
                    position: relative;
                    top: 12px;
                    left: 11px;
                    cursor: pointer;
                }
                .td_wrapper_video_playlist .td_video_title_playing {
                    position: absolute;
                    top: 13px;
                    left:80px;
                    font-family: Verdana, Geneva, sans-serif;
                    font-size: 13px;
                    line-height: 19px;
                    font-weight: bold;
                    color: #ffffff;
                    padding-right: 7px;
                    max-height: 37px;
                    overflow: hidden;
                }
                @media (min-width: 481px) and (max-width: 1018px) {
                    .td_wrapper_video_playlist .td_video_title_playing {
                        max-height: 20px;
                        top: 23px;
                    }
                }
                @media (max-width: 480px) {
                    .td_wrapper_video_playlist .td_video_title_playing {
                        max-height: 37px;
                        top: 13px;
                    }
                }
                .td_wrapper_video_playlist .td_video_time_playing {
                    position: absolute;
                    bottom:0;
                    right:5px;
                    font-family: 'Open Sans', arial, sans-serif;
                    font-size: 10px;
                    font-style: italic;
                    color: #ffffff;
                    line-height: 17px;
                    padding-right: 1px
                }
                .td_wrapper_video_playlist .td_video_currently_playing {
                    background-color: #404040;
                }
                .td_wrapper_video_playlist .td_video_currently_playing:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    border-left: 3px solid #4db2ec !important;
                    width: 3px;
                    height: inherit;
                }
                .td_wrapper_video_playlist .td_click_video {
                    height: 60px;
                    display: block;
                    width: 100%;
                    position: relative;
                }
                .td_wrapper_video_playlist .td_click_video:hover {
                    background-color: #333333;
                    cursor: pointer;
                }
                .td_wrapper_video_playlist .td_video_thumb {
                    position: relative;
                    top: 10px;
                    width: 72px;
                    height: 40px;
                    overflow: hidden;
                    margin-left: 16px;
                }
                .td_wrapper_video_playlist .td_video_thumb img {
                    position: relative;
                    top: -6px;
                }
                .td_wrapper_video_playlist .td_video_title_and_time {
                    position: absolute;
                    top: 10px;
                    width: 100%;
                    padding: 0 30px 0 103px;
                }
                .td_wrapper_video_playlist .td_video_title_and_time .td_video_title {
                    font-family: 'Open Sans', arial, sans-serif;
                    font-size: 12px;
                    color: #ffffff;
                    line-height: 15px;
                    max-height: 30px;
                    overflow: hidden;
                }
                .td_wrapper_video_playlist .td_video_time {
                    font-family: 'Open Sans', arial, sans-serif;
                    font-size: 10px;
                    font-style: italic;
                    color: #777777;
                    line-height: 13px;
                }
                .td_wrapper_video_playlist .td_wrapper_player {
                    background-color: #000;
                    overflow: hidden;
                }
                @media (max-width: 1018px) {
                    .td_wrapper_video_playlist .td_wrapper_player {
                        flex: auto !important;
                    }
                }
                @media (max-width: 767px) {
                    .td_wrapper_video_playlist .td_wrapper_player {
                        margin-bottom: -5px;
                    }
                }
                .td_wrapper_video_playlist .td_wrapper_player iframe {
                    width: 100%;
                    height: 100% !important;
                }
                .td_wrapper_video_playlist .td_container_video_playlist {
                    display: flex;
                    flex-direction: column;
                    background-color: #222;
                    vertical-align: top;
                    overflow: hidden;
                }
                .td_wrapper_video_playlist .td_playlist_clickable {
                    overflow-y: auto;
                    overflow-x: hidden;
                }
                @media (max-width: 1018px) {
                    .td_video_playlist_column_3 .td_wrapper_video_playlist {
                        flex-direction: column;
                    }
                }
                .td_video_playlist_column_3 .td_wrapper_player,
                .td_video_playlist_column_3 .td_container_video_playlist {
                    height: 409px;
                }
                @media (min-width: 1019px) and (max-width: 1140px) {
                    .td_video_playlist_column_3 .td_wrapper_player,
                    .td_video_playlist_column_3 .td_container_video_playlist {
                        height: 365px;
                    }
                }
                .td_video_playlist_column_3 .td_wrapper_player {
                    display: block;
                    flex: 1;
                }
                @media (min-width: 768px) and (max-width: 1018px) {
                    .td_video_playlist_column_3 .td_wrapper_player {
                        width: 100%;
                        height: 416px;
                    }
                }
                @media (max-width: 767px) {
                    .td_video_playlist_column_3 .td_wrapper_player {
                        width: 100%;
                        height: 260px;
                    }
                }
                .td_video_playlist_column_3 .td_container_video_playlist {
                    width: 341px;
                }
                @media (min-width: 1019px) and (max-width: 1140px) {
                    .td_video_playlist_column_3 .td_container_video_playlist {
                        width: 331px;
                    }
                }
                @media (max-width: 1018px) {
                    .td_video_playlist_column_3 .td_container_video_playlist {
                        width: 100%;
                        height: 305px;
                    }
                }
                @media screen and (-webkit-min-device-pixel-ratio:0) and (min-width: 768px) and (max-width: 1018px) {
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile {
                        margin-right: 10px;
                    }
                }
                @media screen and (-webkit-min-device-pixel-ratio:0) and (max-width: 767px) {
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile {
                        margin-right: 10px;
                    }
                }
                @media (min-width: 768px) and (max-width: 1018px) {
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile {
                        overflow-x: hidden;
                        overflow-y: auto;
                    }
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar-track {
                        background-color: #383838;
                    }
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar {
                        width: 6px;
                        background-color: #F5F5F5;
                    }
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar-thumb {
                        background-color: #919191;
                        border-radius: 10px;
                    }
                }
                @media (max-width: 767px) {
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile {
                        overflow-x: hidden;
                        overflow-y: auto;
                    }
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar-track {
                        background-color: #383838;
                    }
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar {
                        width: 6px;
                        background-color: #F5F5F5;
                    }
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar-thumb {
                        background-color: #919191;
                        border-radius: 10px;
                    }
                }
                @media screen and (-webkit-min-device-pixel-ratio:0) {
                    .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist {
                        margin-right: 10px;
                    }
                }
                .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist::-webkit-scrollbar-track {
                    background-color: #383838;
                }
                .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist::-webkit-scrollbar {
                    width: 6px;
                    background-color: #F5F5F5;
                }
                .td_video_playlist_column_3 .td_playlist_clickable.td_add_scrollbar_to_playlist::-webkit-scrollbar-thumb {
                    background-color: #919191;
                    border-radius: 10px;
                }
                .td_video_playlist_column_2 .td_wrapper_video_playlist {
                    flex-direction: column;
                }
                .td_video_playlist_column_2 .td_video_title_playing {
                    max-height: 20px;
                    top: 23px;
                }
                @media (max-width: 480px) {
                    .td_video_playlist_column_2 .td_video_title_playing {
                        max-height: 37px;
                        top: 13px;
                    }
                }
                .td_video_playlist_column_2 .td_wrapper_player {
                    display: block;
                    height: 391px;
                }
                @media (min-width: 1019px) and (max-width: 1140px) {
                    .td_video_playlist_column_2 .td_wrapper_player {
                        height: 360px;
                    }
                }
                @media (min-width: 768px) and (max-width: 1018px) {
                    .td_video_playlist_column_2 .td_wrapper_player {
                        height: 272px;
                    }
                }
                @media (max-width: 767px) {
                    .td_video_playlist_column_2 .td_wrapper_player {
                        display: block;
                        height: auto;
                    }
                }
                .td_video_playlist_column_2 .td_container_video_playlist {
                    height: 305px;
                }
                @media (max-width: 480px) {
                    .td_video_playlist_column_2 .td_container_video_playlist {
                        height: 245px;
                    }
                }
                @media screen and (-webkit-min-device-pixel-ratio:0) {
                    .td_video_playlist_column_2 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile,
                    .td_video_playlist_column_2 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist {
                        margin-right: 10px;
                    }
                }
                .td_video_playlist_column_2 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar,
                .td_video_playlist_column_2 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist::-webkit-scrollbar-track {
                    background-color: #383838;
                }
                .td_video_playlist_column_2 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar,
                .td_video_playlist_column_2 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist::-webkit-scrollbar {
                    width: 6px;
                    background-color: #F5F5F5;
                }
                .td_video_playlist_column_2 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar-thumb,
                .td_video_playlist_column_2 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist::-webkit-scrollbar-thumb {
                    background-color: #919191;
                    border-radius: 10px;
                }
                .td_video_playlist_column_1 .td_wrapper_video_playlist {
                    flex-direction: column;
                }
                .td_video_playlist_column_1 .td_wrapper_player {
                    display: block;
                    height: 182px;
                }
                @media (min-width: 1019px) and (max-width: 1140px) {
                    .td_video_playlist_column_1 .td_wrapper_player {
                        height: 169px;
                    }
                }
                @media (min-width: 768px) and (max-width: 1018px) {
                    .td_video_playlist_column_1 .td_wrapper_player {
                        height: 128px;
                    }
                }
                @media (max-width: 767px) {
                    .td_video_playlist_column_1 .td_wrapper_player {
                        display: block;
                        width: 100%;
                        height: auto;
                    }
                }
                .td_video_playlist_column_1 .td_container_video_playlist {
                    height: 412px;
                }
                @media (max-width: 480px) {
                    .td_video_playlist_column_1 .td_container_video_playlist {
                        height: 245px;
                    }
                }
                @media screen and (-webkit-min-device-pixel-ratio:0) {
                    .td_video_playlist_column_1 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile,
                    .td_video_playlist_column_1 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist {
                        margin-right: 10px;
                    }
                }
                .td_video_playlist_column_1 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar,
                .td_video_playlist_column_1 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist::-webkit-scrollbar-track {
                    background-color: #383838;
                }
                .td_video_playlist_column_1 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar,
                .td_video_playlist_column_1 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist::-webkit-scrollbar {
                    width: 6px;
                    background-color: #F5F5F5;
                }
                .td_video_playlist_column_1 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist_for_mobile::-webkit-scrollbar-thumb,
                .td_video_playlist_column_1 .td_container_video_playlist .td_playlist_clickable.td_add_scrollbar_to_playlist::-webkit-scrollbar-thumb {
                    background-color: #919191;
                    border-radius: 10px;
                }
                .wp-video-shortcode:focus {
                    outline: 0 !important;
                }
                
                
            
                /* @display_row */
                div.$unique_block_class .td_wrapper_video_playlist {
                    flex-direction: column;
                }
                div.$unique_block_class .td_wrapper_player {
                    flex: auto;
                }
                div.$unique_block_class .td_container_video_playlist {
                    min-width: 100%;
                    max-width: 100%;
                }
                div.$unique_block_class .td_video_playlist_column_1 .td_container_video_playlist,
                div.$unique_block_class .td_video_playlist_column_2 .td_container_video_playlist {
                    width: 100%;
                }
                div.$unique_block_class .td_video_playlist_column_1 .td_container_video_playlist {
                    height: 412px;
                }
                div.$unique_block_class .td_video_playlist_column_2 .td_container_video_playlist {
                    height: 305px;
                }
                @media (max-width: 480px) {
                    div.$unique_block_class .td_video_playlist_column_1 .td_container_video_playlist,
                    div.$unique_block_class .td_video_playlist_column_2 .td_container_video_playlist {
                        height: 245px;
                    }
                }
                /* @display_column */
                div.$unique_block_class .td_wrapper_video_playlist {
                    flex-direction: row;
                }
                div.$unique_block_class .td_wrapper_player {
                    flex: 1;
                }
                div.$unique_block_class .td_container_video_playlist {
                    min-width: 0;
                    max-width: none;
                }
                div.$unique_block_class .td_video_playlist_column_1 .td_container_video_playlist,
                div.$unique_block_class .td_video_playlist_column_2 .td_container_video_playlist {
                    height: auto;
                }
                div.$unique_block_class .td_video_playlist_column_1 .td_container_video_playlist {
                    width: 150px;
                }
                div.$unique_block_class .td_video_playlist_column_2 .td_container_video_playlist {
                    width: 250px;
                }
            
            
                /* @v_height */
				div.$unique_block_class .td_wrapper_player {
					height: @v_height;
				}
				/* @v_height2 */
				@media (min-width: 1019px) {
                    div.$unique_block_class .td_video_playlist_column_3 .td_container_video_playlist {
                        height: @v_height2;
                    }
				}
            
            
                /* @p_width */
				div.$unique_block_class .td_container_video_playlist {
					width: @p_width !important;
				}
                /* @p_height */
				div.$unique_block_class .td_container_video_playlist {
					height: @p_height !important;
				}
				
				/* @p_horiz_align_center */
				div.$unique_block_class .td_container_video_playlist {
				    text-align: center;
				}
				/* @p_horiz_align_right */
				div.$unique_block_class .td_container_video_playlist {
				    text-align: right;
				}
				
				
				/* @title_color */
				div.$unique_block_class .td_video_playlist_title .td_video_title_text {
				    color: @title_color;
				}
				/* @title_bg_color */
				div.$unique_block_class .td_video_playlist_title {
				    background-color: @title_bg_color;
				}
				
				/* @vid_color */
				div.$unique_block_class .td_video_title_and_time .td_video_title {
				    color: @vid_color;
				}
				/* @vid_color_h */
				div.$unique_block_class .td_video_title_and_time .td_click_video:hover .td_video_title {
				    color: @vid_color_h;
				}
				/* @timestamp_color */
				div.$unique_block_class .td_wrapper_video_playlist .td_video_time {
				    color: @timestamp_color;
				}
				
				/* @curr_vid_color */
				div.$unique_block_class .td_wrapper_video_playlist .td_video_title_playing {
				    color: @curr_vid_color;
				}
				/* @curr_timestamp_color */
				div.$unique_block_class .td_wrapper_video_playlist .td_video_time_playing {
				    color: @curr_timestamp_color;
				}
				/* @curr_bg_color */
				div.$unique_block_class .td_wrapper_video_playlist .td_video_controls_playlist_wrapper {
				    background-color: @curr_bg_color;
				}
				div.$unique_block_class .td_wrapper_video_playlist .td_video_currently_playing:after {
				    border-left-color: @curr_bg_color !important;
				}
				

                /* @f_title */
				div.$unique_block_class .td_video_playlist_title .td_video_title_text {
				    @f_title
				}
				/* @f_vid */
				div.$unique_block_class .td_video_title_and_time .td_video_title {
					@f_vid
				}
				/* @f_curr_vid */
				div.$unique_block_class .td_wrapper_video_playlist .td_video_title_playing {
					@f_curr_vid
				}
				/* @f_timestamp */
				div.$unique_block_class .td_wrapper_video_playlist .td_video_time,
				div.$unique_block_class .td_wrapper_video_playlist .td_video_time_playing {
					@f_timestamp
				}

			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        /*-- GENERAL -- */
        $res_ctx->load_settings_raw( 'general_style', 1 );

        // display
        $display = $res_ctx->get_shortcode_att('display');
        if( $display == 'row' ) {
            $res_ctx->load_settings_raw('display_row', 1);
        } else if ( $display == 'column' ) {
            $res_ctx->load_settings_raw('display_column', 1);
        }



        /*-- MAIN VIDEO -- */
        // height
        $v_height = $res_ctx->get_shortcode_att('v_height');
        $res_ctx->load_settings_raw('v_height', $v_height);
        if( $v_height != '' && is_numeric($v_height) ) {
            $res_ctx->load_settings_raw('v_height', $v_height . 'px');
        }
        if ( $display == 'column' ) {
            $res_ctx->load_settings_raw('v_height2', $v_height);
            if( $v_height != '' && is_numeric($v_height) ) {
                $res_ctx->load_settings_raw('v_height2', $v_height . 'px');
            }
        }



        /*-- PLAYLIST -- */
        // width
        $p_width = $res_ctx->get_shortcode_att('p_width');
        $res_ctx->load_settings_raw('p_width', $p_width);
        if( $p_width != '' && is_numeric($p_width) ) {
            $res_ctx->load_settings_raw('p_width', $p_width . 'px');
        }

        // height
        $p_height = $res_ctx->get_shortcode_att('p_height');
        $res_ctx->load_settings_raw('p_height', $p_height);
        if( $p_height != '' && is_numeric($p_height) ) {
            $res_ctx->load_settings_raw('p_height', $p_height . 'px');
        }

        // horizontal align
        $p_horiz_align = $res_ctx->get_shortcode_att('p_horiz_align');
        if( $p_horiz_align == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw('p_horiz_align_center', 1);
        } else if ( $p_horiz_align == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw('p_horiz_align_right', 1);
        }



        /*-- COLORS -- */
        $res_ctx->load_settings_raw('title_color', $res_ctx->get_shortcode_att('title_color'));
        $res_ctx->load_settings_raw('title_bg_color', $res_ctx->get_shortcode_att('title_bg_color'));

        $res_ctx->load_settings_raw('vid_color', $res_ctx->get_shortcode_att('vid_color'));
        $res_ctx->load_settings_raw('vid_color_h', $res_ctx->get_shortcode_att('vid_color_h'));
        $res_ctx->load_settings_raw('timestamp_color', $res_ctx->get_shortcode_att('timestamp_color'));

        $res_ctx->load_settings_raw('curr_vid_color', $res_ctx->get_shortcode_att('curr_vid_color'));
        $res_ctx->load_settings_raw('curr_timestamp_color', $res_ctx->get_shortcode_att('curr_timestamp_color'));
        $res_ctx->load_settings_raw('curr_bg_color', $res_ctx->get_shortcode_att('curr_bg_color'));


        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_title' );
        $res_ctx->load_font_settings( 'f_vid' );
        $res_ctx->load_font_settings( 'f_curr_vid' );
        $res_ctx->load_font_settings( 'f_timestamp' );

    }

	/**696
	 * Disable loop block features. This block does not use a loop and it dosn't need to run a query.
	 */
	function __construct() {
		parent::disable_loop_block_features();
	}


    function render($atts, $content = null) {

        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        return td_video_playlist_render::render_generic($atts, 'youtube', $this->get_wrapper_class(), $this->block_uid, $this->get_block_css());

    }
}