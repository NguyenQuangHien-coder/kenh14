/**
 * customizer.js
 * author    Franchi Design
 * package   pepe-lite
*/


( function( $ ) {


/* Header 
========================================================================== */

// Site title and description.
wp.customize( 'blogname', function( value ) {
	value.bind( function( to ) {
		$( '.site-title a' ).text( to );
	} );
} );
wp.customize( 'blogdescription', function( value ) {
	value.bind( function( to ) {
		$( '.site-description' ).text( to );
	} );
} );

// Header text color.
wp.customize( 'header_textcolor', function( value ) {
	value.bind( function( to ) {
		if ( 'blank' === to ) {
			$( '.site-title, .site-description' ).css( {
				'clip': 'rect(1px, 1px, 1px, 1px)',
				'position': 'absolute'
			} );
		} else {
			$( '.site-title, .site-description' ).css( {
				'clip': 'auto',
				'position': 'relative'
			} );
			$( '.site-title a, .site-description' ).css( {
				'color': to
			} );
		}
	} );
} );

// Background color Header 
wp.customize( 'pepe_background_color_header', function( value ) {
	value.bind( function( newval ) {
		$( '.site-branding' ).css('background-color', newval );
	} );
} );

// Color Header 
wp.customize( 'pepe_color_header', function( value ) {
	value.bind( function( newval ) {
		$( '.pe-description-header h1.site-title a,.pe-description-header p.site-description' ).css('color', newval );
	} );
} );

// Font Size Logo
wp.customize('pepe_height_logo', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-logo-header img.custom-logo').css('width', controlValue);
	});
});

// Margin Top Block Logo
wp.customize('pepe_top_block_logo', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-container-logo-header').css('margin-top', controlValue + 'em');
	});
});

// Margin Bottom Block Logo
wp.customize('pepe_bottom_block_logo', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-container-logo-header').css('margin-bottom', controlValue + 'em');
	});
});

// Font Size Description Title
wp.customize('pepe_height_description_title', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-description-header a').css('font-size', controlValue + 'px');
	});
});

// Font Size Description Subtitle
wp.customize('pepe_height_description_subtitle', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-description-header p').css('font-size', controlValue + 'px');
	});
});

// Font Size Logo Responsive
wp.customize('pepe_height_logo_responsive', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-logo-responsive img').css('width', controlValue + 'px');
	});
});

// Background color Header Responsive
wp.customize( 'pepe_background_color_header_resp', function( value ) {
	value.bind( function( newval ) {
		$( '.pe-responsive-header' ).css('background-color', newval );
	} );
} );

// Font Size Description Title Responsive
wp.customize('pepe_height_description_title_responsive', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-description-header-responsive a').css('font-size', controlValue + 'px');
	});
});

// Font Size Description Subtitle Responsive
wp.customize('pepe_height_description_subtitle_responsive', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-description-header-responsive p').css('font-size', controlValue + 'px');
	});
});

// Font Size Menu Header
wp.customize('pepe_height_menu', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-header .navbar .navbar-nav li a').css('font-size', controlValue + 'px');
	});
});

// Padding Left Menu Header
wp.customize('pepe_padding_menu', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-header .navbar .navbar-nav li').css('padding-left', controlValue + 'px');
	});
});

// Padding Right Menu Header
wp.customize('pepe_padding_menu', function(control) {
	control.bind(function( controlValue ) {
		$('.pe-header .navbar .navbar-nav li').css('padding-right', controlValue + 'px');
	});
});

// Text Button Banner Widgetfour
wp.customize( 'pepe_text_button_widgetfour', function( value ) {
	value.bind( function( newval ) {
		$( '.pe-button-widgetfour a' ).html( newval );
	} );
} );

// Text Button Banner Header
wp.customize( 'pepe_text_button_banner_header', function( value ) {
	value.bind( function( newval ) {
		$( '.pe-button-banner-header a' ).html( newval );
	} );
} );

// Text Button Page search not found
wp.customize( 'pepe_text_content_none', function( value ) {
	value.bind( function( newval ) {
		$( '.button-content-none-page a' ).html( newval );
	} );
} );

// Text News
wp.customize( 'pepe_text_news_header', function( value ) {
	value.bind( function( newval ) {
		$( '.pe-flash-responsive span,.marquee-sibling span' ).html( newval );
	} );
} );

// Height Image Header
wp.customize('pepe_height_image_header', function(control) {
	control.bind(function( controlValue ) {
		$('img.pepe-custom-header-image').css('height', controlValue + 'px');
	});
});

// Height Custom Header Image
wp.customize('pepe_height_image_header', function(control) {
	control.bind(function( controlValue ) {
		$('.wp-custom-header img').css('height', controlValue);
	});
});

// Object fit Custom Header Image
wp.customize('pepe_fit_image_header', function(control) {
	control.bind(function( controlValue ) {
		$('.wp-custom-header img').css('object-fit', controlValue);
	});
});

// Margin Top Pepe Slider with tab Block
wp.customize('pepe_margin_top_block_slider', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-block-a').css('margin-top', controlValue + 'em');
	});
});

// Margin Bottom Pepe Slider with tab Block
wp.customize('pepe_margin_bottom_block_slider', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-block-a').css('margin-bottom', controlValue + 'em');
	});
});

// Title Section Slider Tab 1
wp.customize( 'pepe_title_slider_multitab_1', function( value ) {
	value.bind( function( newval ) {
		$( 'p.p-title-live-tab-1' ).html( newval );
	} );
} );

// Title Section Slider Tab 2
wp.customize( 'pepe_title_slider_multitab_2', function( value ) {
	value.bind( function( newval ) {
		$( 'p.p-title-live-tab-2' ).html( newval );
	} );
} );

// Title Section Slider Tab 3
wp.customize( 'pepe_title_slider_multitab_3', function( value ) {
	value.bind( function( newval ) {
		$( 'p.p-title-live-tab-3' ).html( newval );
	} );
} );

// Margin Top Pepe Zero Block
wp.customize('pepe_margin_top_block_pepe_zero', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-block-zero').css('margin-top', controlValue + 'em');
	});
});

// Margin Bottom Pepe Zero Block
wp.customize('pepe_margin_bottom_block_pepe_zero', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-block-zero').css('margin-bottom', controlValue + 'em');
	});
});


// Height Image Pepe Four
wp.customize('image_pepe_four_height', function(control) {
	control.bind(function( controlValue ) {
		$('.image-full-section img').css('height', controlValue + 'px');
	});
});

// Object fit Custom Pepe Four Image
wp.customize('image_pepe_four_fit', function(control) {
	control.bind(function( controlValue ) {
		$('.image-full-section img').css('object-fit', controlValue);
	});
});

// Margin Top Pepe four
wp.customize('pepe_margin_top_pepe_four', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-block-three').css('margin-top', controlValue + 'em');
	});
});

// Margin Bottom Pepe four
wp.customize('pepe_margin_bottom_pepe_four', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-block-three').css('margin-bottom', controlValue + 'em');
	});
});

// Background Color Pepe four
wp.customize( 'pepe_background_color_pepe_four', function( value ) {
	value.bind( function( newval ) {
		$( '.centered' ).css('background-color', newval );

	} );
} );

// Color Pepe four
wp.customize( 'pepe_color_pepe_four', function( value ) {
	value.bind( function( newval ) {
		$( '.image-full-section,.image-full-section p,.image-full-section h1,.image-full-section h2,.image-full-section h3,.image-full-section h4,.image-full-section h5,.image-full-section h6' ).css('color', newval );

	} );
} );

// Text Banner Four
wp.customize( 'pepe_text_banner_four', function( value ) {
	value.bind( function( newval ) {
		$( 'h2.text-banner-four' ).html( newval );
	} );
} );

// Textarea Banner Four
wp.customize( 'pepe_textarea_banner_four', function( value ) {
	value.bind( function( newval ) {
		$( 'p.textarea-banner-four' ).html( newval );
	} );
} );

// Title Section Zero
wp.customize( 'pepe_title_sect_zero', function( value ) {
	value.bind( function( newval ) {
		$( 'h2.titlesect-zero span' ).html( newval );
	} );
} );

// Size Logo Widget Area
wp.customize('pepe_height_logo_widget_footer', function(control) {
	control.bind(function( controlValue ) {
		$('img.logo-img-footer').css('width', controlValue + 'px');
	});
});

// Margin top slider Post
wp.customize('pepe_margin_top_slider_post', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-sidebar-article-margin').css('margin-top', controlValue + 'px');
	});
});

// Text Button Comments
wp.customize( 'pepe_text_button_comments', function( value ) {
	value.bind( function( newval ) {
		$( 'button.pepe-button-submit' ).html( newval );
	} );
} );

// Height Image Category
wp.customize('pepe_height_image_cat', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-archive').css('height', controlValue + 'px');
	});
});

// Padding Top Image Category
wp.customize('pepe_padding_image_cat', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-archive').css('padding-top', controlValue + 'em');
	});
});

// Font Size Title Image Category
wp.customize('pepe_font_size_title_image_cat', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-archive h1.page-title.arc-tit').css('font-size', controlValue + 'px');
	});
});

// Font Size Description Image Category
wp.customize('pepe_font_size_subtitle_image_cat', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-archive .archive-description p').css('font-size', controlValue + 'px');
	});
});

// Color Text Category
wp.customize( 'pepe_color_text_image_cat', function( value ) {
	value.bind( function( newval ) {
		$( '.pepe-archive h1,.pepe-archive p' ).css('color', newval );

	} );
} );

// Height Image Search Page
wp.customize('pepe_height_image_search_page', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-page-search').css('height', controlValue + 'px');
	});
});

// Height Image Search Page not Found
wp.customize('pepe_height_image_search_page_not_found', function(control) {
	control.bind(function( controlValue ) {
		$('img.img-search-none-risult').css('width', controlValue + 'px');
	});
});

// Padding Top Image Search Page
wp.customize('pepe_padding_image_search_page', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-page-search').css('padding-top', controlValue + 'em');
	});
});

// Font Size Title Image Search Page
wp.customize('pepe_font_size_title_image_search_page', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-page-search h1.page-title').css('font-size', controlValue + 'px');
	});
});

// Font Size Description Image Search Page
wp.customize('pepe_font_size_subtitle_image_search_page', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-page-search .page-title span').css('font-size', controlValue + 'px');
	});
});

// Color Text Search Page
wp.customize( 'pepe_color_text_image_search_page', function( value ) {
	value.bind( function( newval ) {
		$( '.pepe-page-search h1,.pepe-page-search span' ).css('color', newval );
	} );
} );

// Margin top sidebar page
wp.customize('pepe_margin_top_sidebar_page', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-sid-page-margin').css('margin-top', controlValue + 'px');
	});
});

// Padding Content Page
wp.customize('pepe_padding_content_page', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-padding-page').css('padding', controlValue + 'px');
	});
});

// Background color Content Page
wp.customize( 'pepe_background_color_content_page', function( value ) {
	value.bind( function( newval ) {
		$( '.pepe-padding-page' ).css('background-color', newval );
	} );
} );

// Background color sect one page
wp.customize( 'pepe_baclground_color_img_sect_one', function( value ) {
	value.bind( function( newval ) {
		$( '.pepe-section-one' ).css('background-color', newval );
	} );
} );

// Background color Footer Info
wp.customize( 'pepe_baclground_color_footer_info', function( value ) {
	value.bind( function( newval ) {
		$( '.site-info' ).css('background-color', newval );
	} );
} );

// Background color Header Topo
wp.customize( 'pepe_baclground_color_top_area', function( value ) {
	value.bind( function( newval ) {
		$( '.pe-top-top-header' ).css('background-color', newval );
	} );
} );

// Background color Menu
wp.customize( 'pepe_baclground_color_navmenu', function( value ) {
	value.bind( function( newval ) {
		$( '.pe-navbar-header,ul.navbar-nav,.pepe-nav-primary,.pe-header .navbar .navbar-nav li.submenu .dropdown-menu,.pepe-navbar-resp' ).css('background-color', newval );
	} );
} );

// Section Block Home Four background color button
wp.customize( 'pepe_background_color_pepe_four_button', function( value ) {
	value.bind( function( newval ) {
		$( '.centered .mc4wp-form input[type=submit]' ).css('background-color', newval );
	} );
} );

// Section Block Home Four background color button
wp.customize( 'pepe_color_pepe_four_button', function( value ) {
	value.bind( function( newval ) {
		$( '.centered .mc4wp-form input[type=submit]' ).css('color', newval );
	} );
} );

// Section Flash News
wp.customize( 'pepe_background_color_flash_news', function( value ) {
	value.bind( function( newval ) {
		$( '.pe-sector-flash-news-header' ).css('background-color', newval );
	} );
} );

wp.customize( 'pepe_border_color_flash_news', function( value ) {
	value.bind( function( newval ) {
		$( '.pe-sector-flash-news-header' ).css('border-color', newval );
	} );
} );

wp.customize( 'pepe_color_news_flash_news', function( value ) {
	value.bind( function( newval ) {
		$( '.marquee-sibling,.pe-flash-responsive' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_post_flash_news', function( value ) {
	value.bind( function( newval ) {
		$( '.marquee-content-items li a' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_background_color_time', function( value ) {
	value.bind( function( newval ) {
		$( '#time' ).css('background-color', newval );
	} );
} );

wp.customize( 'pepe_color_time', function( value ) {
	value.bind( function( newval ) {
		$( '#time' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_background_color_date', function( value ) {
	value.bind( function( newval ) {
		$( '.clock' ).css('background-color', newval );
	} );
} );

wp.customize( 'pepe_color_date', function( value ) {
	value.bind( function( newval ) {
		$( '.clock' ).css('color', newval );
	} );
} );

// Title 
wp.customize( 'pepe_color_title', function( value ) {
	value.bind( function( newval ) {
		$( 'h1,h2,h3,h4,h5,h6,p' ).css('color', newval );
	} );
} );

// Slider
wp.customize( 'pepe_color_slider', function( value ) {
	value.bind( function( newval ) {
		$( '.cat-slider a,.cat-slider a:hover,h2.title-slider,h2.title-slider:hover,.carousel-caption' ).css('color', newval );
	} );
} );

// Tab
wp.customize( 'pepe_color_tab', function( value ) {
	value.bind( function( newval ) {
		$( 'nav > div a.nav-item.nav-link:hover,nav > div a.nav-item.nav-link:focus,nav > div a.nav-item.nav-link.active,nav > .nav.nav-tabs,nav > div a.nav-item.nav-link,nav > div a.nav-item.nav-link.active,p.p-title-live-tab-1, p.p-title-live-tab-2, p.p-title-live-tab-3,.cat-multitab a,.cat-multitab a:hover' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_background_color_tab', function( value ) {
	value.bind( function( newval ) {
		$( 'nav > .nav.nav-tabs,nav > div a.nav-item.nav-link,nav > div a.nav-item.nav-link.active' ).css('background-color', newval );
	} );
} );

wp.customize( 'pepe_color_post_tab', function( value ) {
	value.bind( function( newval ) {
		$( '.pepe-title-sect-multitab h2,.title-multitab-post a' ).css('color', newval );
	} );
} );

// Pagination
wp.customize( 'pepe_background_color_pagination', function( value ) {
	value.bind( function( newval ) {
		$( '.pagination span, .pagination a ' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_pagination', function( value ) {
	value.bind( function( newval ) {
		$( '.pagination span, .pagination a ' ).css('background', newval );
	} );
} );

wp.customize( 'pepe_color_pagination', function( value ) {
	value.bind( function( newval ) {
		$( '.pagination a:hover ' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_background_color_pagination', function( value ) {
	value.bind( function( newval ) {
		$( '.pagination a:hover ' ).css('background', newval );
	} );
} );

wp.customize( 'pepe_color_pagination_current', function( value ) {
	value.bind( function( newval ) {
		$( '.pagination .current ' ).css('color', newval );
	} );
} );

// Breadcrumbs
wp.customize( 'pepe_color_breadcrumbs_link', function( value ) {
	value.bind( function( newval ) {
		$( '#breadcrumbs a' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_breadcrumbs', function( value ) {
	value.bind( function( newval ) {
		$( '#breadcrumbs' ).css('color', newval );
	} );
} );

// Blog
wp.customize( 'pepe_color_entry_meta', function( value ) {
	value.bind( function( newval ) {
		$( '.entry-meta i,.entry-meta a,.entry-meta' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_entry_meta_author', function( value ) {
	value.bind( function( newval ) {
		$( '.entry-meta a:hover,.entry-meta span.author a,.entry-meta span.author a:hover' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_cat', function( value ) {
	value.bind( function( newval ) {
		$( '.pepe-cat-single a,.pepe-cat-single a:hover,.entry-footer a,.entry-footer a:hover' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_background_color_tag', function( value ) {
	value.bind( function( newval ) {
		$( '.entry-footer a' ).css('background-color', newval );
	} );
} );

wp.customize( 'pepe_background_color_comment_title', function( value ) {
	value.bind( function( newval ) {
		$( 'h2.comments-title' ).css('border-color', newval );
	} );
} );

wp.customize( 'pepe_background_color_comment_title', function( value ) {
	value.bind( function( newval ) {
		$( '.comments-title span' ).css('background-color', newval );
	} );
} );

wp.customize( 'pepe_background_color_comment_title', function( value ) {
	value.bind( function( newval ) {
		$( '.comment-author cite' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_comment_title', function( value ) {
	value.bind( function( newval ) {
		$( '.comments-title span' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_comment_area', function( value ) {
	value.bind( function( newval ) {
		$( '.comments-area textarea' ).css('border-color', newval );
	} );
} );

wp.customize( 'pepe_color_comment', function( value ) {
	value.bind( function( newval ) {
		$( '.comment-author a,.reply a,.logged-in-as a,p.logged-in-as' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_comment_border_body', function( value ) {
	value.bind( function( newval ) {
		$( '.comment-body' ).css('border-color', newval );
	} );
} );

wp.customize( 'pepe_background_color_related_post_title', function( value ) {
	value.bind( function( newval ) {
		$( 'h3.related-title' ).css('border-color', newval );
	} );
} );

wp.customize( 'pepe_background_color_related_post_title', function( value ) {
	value.bind( function( newval ) {
		$( '.related-title span' ).css('background-color', newval );
	} );
} );

wp.customize( 'pepe_color_related_post', function( value ) {
	value.bind( function( newval ) {
		$( '#related_posts a' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_related_post_title', function( value ) {
	value.bind( function( newval ) {
		$( '.related-title span' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_header_archive', function( value ) {
	value.bind( function( newval ) {
		$( '.entry-header-archive h2 a' ).css('color', newval );
	} );
} );

// Widget 
wp.customize( 'pepe_color_widget_title_style_one', function( value ) {
	value.bind( function( newval ) {
		$( '.widget_archive .widget-title span,.widget_media_audio .widget-title span,.widget_calendar .widget-title span,.widget_text .widget-title span,.pepe_author_post .widget-title span,.pepe_cat_post .widget-title span,.pepe_multitab_post .widget-title span,.pepe_post_one_post .widget-title span,.pepe_post_two_post .widget-title span,.pepe_social_post .widget-title span,.pepe_stat_post .widget-title span,.pepe_video_post .widget-title span,.widget_media_gallery .widget-title span,.widget_media_image .widget-title span,.widget_meta .widget-title span,.widget_nav_menu .widget-title span,.widget_pages .widget-title span,.widget_recent_comments .widget-title span,.widget_recent_entries .widget-title span,.widget_search .widget-title span,.widget_tag_cloud .widget-title span,.widget_tag_cloud .tagcloud a' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_widget_content', function( value ) {
	value.bind( function( newval ) {
		$( '.widget_archive a,#wp-calendar tbody td a,.wp-calendar-nav a,#wp-calendar tfoot #next a,#wp-calendar tfoot #prev a,#wp-calendar caption,.icon-author i,.title-author a,.cat-widget a,.widget_meta a,.widget_nav_menu a,.widget_pages a,.widget_recent_comments a,.widget_recent_entries a,span.comment-author-link,.textwidget.custom-html-widget,.textwidget p,li.recentcomments,.pepe-class-pepe-post-one-title span.pepe-span-title,.pepe-class-pepe-post-two-title span.pepe-span-title,.pepe-class-pepe-social-title span.pepe-span-title,#wp-calendar thead th' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_color_widget_content', function( value ) {
	value.bind( function( newval ) {
		$( '.widget_media_audio h2.widget-title,.widget_calendar h2.widget-title,.widget_text h2.widget-title,.pepe_author_post h2.widget-title,.pepe_cat_post h2.widget-title,.pepe_multitab_post h2.widget-title,.pepe_post_one_post h2.widget-title,.pepe_post_two_post h2.widget-title,.pepe_social_post h2.widget-title,.pepe_stat_post h2.widget-title,.pepe_video_post h2.widget-title,.widget_media_gallery h2.widget-title,.widget_media_image h2.widget-title,.widget_meta h2.widget-title,.widget_nav_menu h2.widget-title,.widget_pages h2.widget-title,.widget_recent_comments h2.widget-title,.widget_recent_entries h2.widget-title,.widget_search h2.widget-title,.widget_tag_cloud h2.widget-title' ).css('border-color', newval );
	} );
} );

wp.customize( 'pepe_color_widget_number_archive', function( value ) {
	value.bind( function( newval ) {
		$( '.post-count-archive' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_background_color_widget_number_archive', function( value ) {
	value.bind( function( newval ) {
		$( '.post-count-archive' ).css('background-color', newval );
	} );
} );

wp.customize( 'pepe_color_widget_calendar', function( value ) {
	value.bind( function( newval ) {
		$( '#wp-calendar tbody' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_background_color_widget_calendar', function( value ) {
	value.bind( function( newval ) {
		$( '#wp-calendar tbody td' ).css('background', newval );
	} );
} );

wp.customize( 'pepe_background_color_widget_calendar', function( value ) {
	value.bind( function( newval ) {
		$( '#wp-calendar tbody td' ).css('border-color', newval );
	} );
} );

wp.customize( 'pepe_color_widget_number_category', function( value ) {
	value.bind( function( newval ) {
		$( '.post-count-cat' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_background_color_widget_number_category', function( value ) {
	value.bind( function( newval ) {
		$( '.post-count-cat' ).css('background-color', newval );
	} );
} );

wp.customize( 'pepe_border_color_button_widget_search', function( value ) {
	value.bind( function( newval ) {
		$( '.widget_search .search-form input' ).css('border-color', newval );
	} );
} );

wp.customize( 'pepe_color_button_widget_search', function( value ) {
	value.bind( function( newval ) {
		$( '.widget_search .search-form button,.widget_search .search-form input' ).css('color', newval );
	} );
} );

wp.customize( 'pepe_background_color_tag_widget', function( value ) {
	value.bind( function( newval ) {
		$( '.widget_tag_cloud .tagcloud a' ).css('background-color', newval );
	} );
} );

// Color Section Pepe One
wp.customize( 'pepe_color_img_sect_one', function( value ) {
	value.bind( function( newval ) {
		$( '.pepe-section-one h2,.pepe-section-one p,.pepe-section-one a,.pepe-section-one span span,.pepe-section-one span' ).css('color', newval );
	} );
} );

// Margin Top Pepe One Block
wp.customize('pepe_margin_top_block_pepe_one', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-block-one').css('margin-top', controlValue + 'em');
	});
});

// Margin Bottom Pepe One Block
wp.customize('pepe_margin_bottom_block_pepe_one', function(control) {
	control.bind(function( controlValue ) {
		$('.pepe-block-one').css('margin-bottom', controlValue + 'em');
	});
});

// Title Section Two
wp.customize( 'pepe_title_sect_two', function( value ) {
	value.bind( function( newval ) {
		$( '.pepe-titlesect-two h2 span' ).html( newval );
	} );
} );

} )( jQuery );



