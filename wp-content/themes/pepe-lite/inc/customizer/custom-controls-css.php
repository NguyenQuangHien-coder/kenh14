<?php
/**
* custom-controls-css.php
*
* @author    Franchi Design
* @package   pepe-lite
*/

function pepe_lite_customizer_css() {


/* ------------------------------------------------------------------------ *
##  Widget */
/* ------------------------------------------------------------------------- */

get_template_part('inc/customizer/widget-style/style',esc_attr(get_theme_mod('pepe_style_widget','one')));?>

<style>

/* ------------------------------------------------------------------------- *
##  Header */
/* ------------------------------------------------------------------------- */

.site-branding{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_background_color_header','#fff'));?>; 
}


/* Section Logo */
.pe-description-header h1.site-title a,.pe-description-header p.site-description{
   color: <?php echo esc_attr(get_theme_mod('pepe_color_header','#3a3a3a'));?>; 
}

/* ------------------------------------------------------------------------- *
##  Banner Header */
/* ------------------------------------------------------------------------- */

.pe-advise::before,.pe-advise-widget::before { 
  background-color: <?php echo esc_attr(get_theme_mod('pepe_color_banner','rgba(246, 6, 125, 0.48);'));?>; 
}

.pe-banner-top-header-text,.pe-banner-top-header-text p,.pe-banner-top-header-text h3,.pe-banner-top-header-text h2, .pe-banner-top-header-text h3,
.pe-banner-top-header-text h4, .pe-banner-top-header-text h5, .pe-banner-top-header-text h6{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_color_banner','#fff'));?>; 
}

/* ------------------------------------------------------------------------- *
##  Slider */
/* ------------------------------------------------------------------------- */

<?php if (true == get_theme_mod('pepe_show_shadow_slider',true)):?>
a.opacity-image-slider::before{
  background: -webkit-linear-gradient(0deg,rgba(0,0,0,.7),rgba(0,0,0,0) 60%,rgba(0,0,0,0));
  background: linear-gradient(0deg,rgba(0,0,0,.7),rgba(0,0,0,0) 60%,rgba(0,0,0,0));
}
<?php endif;?>

/* ------------------------------------------------------------------------- *
##  Category */
/* ------------------------------------------------------------------------- */

/* Category color badge */ 
.pepe-capture-slider-card p,.pepe-capture-card-one p,.pepe-capture-card-two p,.pepe-capture-card-three p,p.cat-sect-zero,.cat_title,.capture-card-1 p,
p.cat-slider,p.cat-multitab,.pepe-cat-single a{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_color_badge_category','#3a3a3a'));?>; 
}

/* Comment color badge */
a.card-pepe-card-comments,a.card-large-2-comments,a.card-large-3-comments,a.pepe-sect-zero-comments,a.pepe-sect-two-comments,a.pepe-sect-three-comments,
a.pepe-sect-five-comments{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_color_badge_comment','#3a3a3a'));?>!important;
}

a.card-large-2-comments::after,a.card-large-3-comments::after,a.card-pepe-card-comments::after,a.pepe-sect-zero-comments::after,a.pepe-sect-two-comments::after,
a.pepe-sect-three-comments::after,a.pepe-sect-five-comments::after{
  border-color: <?php echo esc_attr(get_theme_mod('pepe_color_badge_comment','#3a3a3a'));?> transparent transparent;
}

/* Category background color badge sect one */
.cat-pepe-sect-one a{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_color_badge_category_sect_one','#fff'));?>; 
}

/* Category color badge sect one */
.cat-pepe-sect-one a{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_badge_category_sect_one_color','#3a3a3a'));?>!important; 
}

/* Comment background color badge sect one */
a.pepe-sect-comments{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_color_badge_comment_sect_one','#fff'));?>!important;
}

/* Comment color badge sect one */
a.pepe-sect-comments{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_badge_comment_sect_one_color','#3a3a3a'));?>!important;
}

a.pepe-sect-comments::after{
  border-color: <?php echo esc_attr(get_theme_mod('pepe_color_badge_comment_sect_one','#fff'));?> transparent transparent;
}

/* Background image sect one */
.pepe-section-one{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_baclground_color_img_sect_one','#3a3a3a'));?> ;
}

/* Background Color Footer info */
.site-info{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_baclground_color_footer_info','#3a3a3a'));?>;
}

/* Color Footer info */
.site-info-copyright a,.site-info,.pepe-social-info-footer .header_social i,.site-info-menu,.site-info-menu a,.site-info-menu ul.nav-top a{
  color: <?php echo esc_attr(get_theme_mod('pepe_color_footer_info','#fff'));?>;
}

/* Background Color Header Top */
.pe-top-top-header{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_baclground_color_top_area','#3a3a3a'));?>;
}

/* Color Header Top */
.header_login_top a,ul.nav-top a,.header_social i,.pe-social-menu-responsive i{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_top_area','#fff'));?>;
}

/* Background Color Menu */
.pe-navbar-header,ul.navbar-nav,.pepe-nav-primary,.pe-header .navbar .navbar-nav li.submenu .dropdown-menu,.pepe-navbar-resp{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_baclground_color_navmenu','#3a3a3a'));?>; 
}

/* Color Menu */
.pe-header .navbar .navbar-nav li a,li.menu-item.menu-item-has-children::after,.pe-wrap-search-header i,li.menu-item.menu-item-has-children.show::before,li.menu-item.menu-item-has-children::before{
    color: <?php echo esc_attr(get_theme_mod('pepe_color_navmenu','#fff'));?>;
}

.search-field-header{
  border-bottom: 1px solid <?php echo esc_attr(get_theme_mod('pepe_color_navmenu','#fff'));?>!important;
  color: <?php echo esc_attr(get_theme_mod('pepe_color_navmenu','#fff'));?>;
}

.pepe-menu-resp-hambur{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_color_navmenu','#fff'));?>;
}

.search-field-header::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: <?php echo esc_attr(get_theme_mod('pepe_color_navmenu','#fff'));?>;
  opacity: 1; /* Firefox */
}

.search-field-header:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color:<?php echo esc_attr(get_theme_mod('pepe_color_navmenu','#fff'));?>;
}

.search-field-header::-ms-input-placeholder { /* Microsoft Edge */
  color: <?php echo esc_attr(get_theme_mod('pepe_color_navmenu','#fff'));?>;
}

@media (max-width: 769px) {
.pe-header .navbar .navbar-nav li{
  border-bottom:1px solid <?php echo esc_attr(get_theme_mod('pepe_color_navmenu_border_resp','#ccc'));?>;
}
}

/* Section Block Home Four */
.centered .mc4wp-form input[type=submit]{
  color: <?php echo esc_attr(get_theme_mod('pepe_color_pepe_four_button','#fff'));?>; 
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#3a3a3a'));?>; 
}

/* Section Widget Area Footer */
.site-footer .widget_text .widget-title span,.site-footer .widget-title,.site-footer,.site-footer p,.site-footer h2,.site-footer a,.site-footer h1,
.site-footer h3,.site-footer h4,.site-footer h5,.site-footer h6,.site-footer span,.site-footer #wp-calendar caption,.site-footer #wp-calendar thead th,.site-footer .textwidget.custom-html-widget,.site-footer .textwidget p{
  color: <?php echo esc_attr(get_theme_mod('pepe_color_widget_area','#fff'));?>!important;
}

.site-footer hr{
  border-top: 1px solid <?php echo esc_attr(get_theme_mod('pepe_color_widget_area','#fff'));?>!important;
  opacity:0.9;
}

/* ------------------------------------------------------------------------- *
##  Pepe Four */
/* ------------------------------------------------------------------------- */

.centered{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four','#fff'))?>;
}

.image-full-section,.image-full-section p,.image-full-section h1,.image-full-section h2,.image-full-section h3,.image-full-section h4,.image-full-section h5,.image-full-section h6{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_pepe_four','#3a3a3a'))?>;
}

/* ------------------------------------------------------------------------- *
##  Footer*/
/* ------------------------------------------------------------------------- */

/* Background Color Widget Area */
.site-footer::before{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_background_color_widget_area','#333333'))?>;
}

/* Archive */
.pepe-archive h1,.pepe-archive p{
  color: <?php echo esc_attr(get_theme_mod('pepe_color_text_image_cat','#3a3a3a'))?>;
}

/* Search Page */
.pepe-page-search h1,.pepe-page-search span{ 
  color: <?php echo esc_attr(get_theme_mod('pepe_color_text_image_search_page','#3a3a3a'))?>;
}

.pepe-padding-page{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_background_color_content_page','rgba(255,255,255,0)'))?>;
}

/* ------------------------------------------------------------------------- *
##  Header */
/* ------------------------------------------------------------------------- */

/* Header Image */
.wp-custom-header img{
  height:<?php echo esc_attr(get_theme_mod('pepe_height_image_header',253));?>px;
  object-fit:<?php echo esc_attr(get_theme_mod('pepe_fit_image_header','unset'));?>;
}

/* Section Logo */
.pe-logo-header{
  text-align:left;
}

.pe-logo-header img.custom-logo{
  width:<?php echo esc_attr( get_theme_mod( 'pepe_height_logo',150))?>px;
}

.pe-container-logo-header{
  margin-top:<?php echo esc_attr( get_theme_mod( 'pepe_top_block_logo',0))?>em;
  margin-bottom:<?php echo esc_attr( get_theme_mod( 'pepe_bottom_block_logo',0))?>em;
}

/* Section Description */
.pe-description-header a{
  font-size:<?php echo esc_attr( get_theme_mod( 'pepe_height_description_title',40))?>px;
}

.pe-description-header p{
  font-size:<?php echo esc_attr( get_theme_mod( 'pepe_height_description_subtitle',16))?>px;
}

.pe-description-header-responsive a{
  font-size:<?php echo esc_attr( get_theme_mod( 'pepe_height_description_title_responsive',40))?>px;
}

.pe-description-header-responsive p{
  font-size:<?php echo esc_attr( get_theme_mod( 'pepe_height_description_subtitle_responsive',16))?>px;
}

.pe-logo-responsive img{
  width:<?php echo esc_attr( get_theme_mod( 'pepe_height_logo_responsive',180))?>px;
}

/* Header */
.pe-responsive-header{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_header_resp','#3a3a3a'));?>;
}

.pe-span-menu{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_header_resp','#fff'));?>;
}

.pe-description-header-responsive h1.site-tile,.pe-description-header-responsive h1.site-title a,.pe-description-header-responsive p{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_header_resp','#fff'));?>;
}

.search__icon{
  border: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_header_resp','#fff'));?>; 
}

.search__icon:after{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_color_header_resp','#fff'));?>; 
}

/* ------------------------------------------------------------------------- *
##  Buttons Banner Header */
/* ------------------------------------------------------------------------- */

/* Color Button */
.pe-button-banner-header .pep-0,.pe-button-banner-header  .pep-1,.pe-button-banner-header  .pep-2,.pe-button-banner-header  .pep-3,
.pe-button-banner-header .pep-4,.pe-button-banner-header .pep-5,.pe-button-banner-header .pep-6,.pe-button-banner-header .pep-7,.pe-button-banner-header .pep-8,
.pe-button-banner-header .pep-9,.pe-button-banner-header .pep-10,.pe-button-banner-header .pep-11,.pe-button-banner-header .pep-12{
  color: <?php echo esc_attr(get_theme_mod('pepe_color_button_banner_header','#fff'));?>; 
}

.pe-button-banner-header .pep-0:before {
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>; 
}

.pe-button-banner-header .pep-0:hover,.pe-button-banner-header .pep-1:hover,.pe-button-banner-header .pep-2:hover,.pe-button-banner-header .pep-3:hover,
.pe-button-banner-header .pep-4:hover,.pe-button-banner-header .pep-5:hover,.pe-button-banner-header .pep-6:hover,.pe-button-banner-header .pep-7:hover,
.pe-button-banner-header .pep-8:hover,.pe-button-banner-header .pep-9:hover,.pe-button-banner-header .pep-10:hover,.pe-button-banner-header .pep-11:hover,.pe-button-banner-header .pep-12:hover{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_button_banner_header','#fff'));?>; 
}

.pe-button-banner-header .pep-1:before,.pe-button-banner-header .pep-2:before,.pe-button-banner-header .pep-12:before,.pe-button-banner-header .pep-12:after{
  border-bottom: 80px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>
}

.pe-button-banner-header .pep-2:after{
  border-top: 80px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>
}

.pe-button-banner-header .pep-3:before,.pe-button-banner-header .pep-3:after{
  border-top: 40px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>
  border-bottom: 40px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>
}

.pe-button-banner-header .pep-4:before,.pe-button-banner-header .pep-4:after,
.pe-button-banner-header .pep-4 span:before,
.pe-button-banner-header .pep-4 span:after,.pe-button-banner-header .pep-7:before,.pe-button-banner-header .pep-7:after,
.pe-button-banner-header .pep-7 span:before,
.pe-button-banner-header .pep-7 span:after {
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>;
}

.pe-button-banner-header .pep-5:after{
  border-color: transparent <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?> transparent transparent;
}

.pe-button-banner-header .pep-5:before{
  border-color: transparent transparent transparent <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>;
}

.pe-button-banner-header .pep-6 span{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>;
}

.pe-button-banner-header .pep-6:active,.pe-button-banner-header .pep-9:active,.pe-button-banner-header .pep-10:active{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>;
}

.pe-button-banner-header .pep-8:before,.pe-button-banner-header .pep-8:after,.pe-button-banner-header .pep-11:before,.pe-button-banner-header .pep-11:after{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>;
}

.pe-button-banner-header .pep-9:before,.pe-button-banner-header .pep-9:after,
.pe-button-banner-header .pep-9 span:before,
.pe-button-banner-header .pep-9 span:after,.pe-button-banner-header .pep-10:before,.pe-button-banner-header .pep-10:after,
.pe-button-banner-header .pep-10 span:before,
.pe-button-banner-header .pep-10 span:after{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_button_banner_header','#F5067E'));?>
}

/* ------------------------------------------------------------------------- *
##  Buttons Banner Section Four */
/* ------------------------------------------------------------------------- */

/* Color Button */
.pe-button-widgetfour .pep-0,.pe-button-widgetfour  .pep-1,.pe-button-widgetfour  .pep-2,.pe-button-widgetfour  .pep-3,
.pe-button-widgetfour .pep-4,.pe-button-widgetfour .pep-5,.pe-button-widgetfour .pep-6,.pe-button-widgetfour .pep-7,.pe-button-widgetfour .pep-8,
.pe-button-widgetfour .pep-9,.pe-button-widgetfour .pep-10,.pe-button-widgetfour .pep-11,.pe-button-widgetfour .pep-12{
  color: <?php echo esc_attr(get_theme_mod('pepe_color_pepe_four_button','#3a3a3a'));?>; 
}

.pe-button-widgetfour .pep-0:before {
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>; 
}

.pe-button-widgetfour .pep-0:hover,.pe-button-widgetfour .pep-1:hover,.pe-button-widgetfour .pep-2:hover,.pe-button-widgetfour .pep-3:hover,
.pe-button-widgetfour .pep-4:hover,.pe-button-widgetfour .pep-5:hover,.pe-button-widgetfour .pep-6:hover,.pe-button-widgetfour .pep-7:hover,
.pe-button-widgetfour .pep-8:hover,.pe-button-widgetfour .pep-9:hover,.pe-button-widgetfour .pep-10:hover,.pe-button-widgetfour .pep-11:hover,.pe-button-widgetfour .pep-12:hover{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_pepe_four_button','#3a3a3a'));?>; 
}

.pe-button-widgetfour .pep-1:before,.pe-button-widgetfour .pep-2:before,.pe-button-widgetfour .pep-12:before,.pe-button-widgetfour .pep-12:after{
  border-bottom: 80px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>
}

.pe-button-widgetfour .pep-2:after{
  border-top: 80px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>
}

.pe-button-widgetfour .pep-3:before,.pe-button-widgetfour .pep-3:after{
  border-top: 40px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>
  border-bottom: 40px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>
}

.pe-button-widgetfour .pep-4:before,.pe-button-widgetfour .pep-4:after,
.pe-button-widgetfour .pep-4 span:before,
.pe-button-widgetfour .pep-4 span:after,.pe-button-widgetfour .pep-7:before,.pe-button-widgetfour .pep-7:after,
.pe-button-widgetfour .pep-7 span:before,
.pe-button-widgetfour .pep-7 span:after {
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>;
}

.pe-button-widgetfour .pep-5:after{
  border-color: transparent <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?> transparent transparent;
}

.pe-button-widgetfour .pep-5:before{
  border-color: transparent transparent transparent <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>;
}

.pe-button-widgetfour .pep-6 span{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>;
}

.pe-button-widgetfour .pep-6:active,.pe-button-widgetfour .pep-9:active,.pe-button-widgetfour .pep-10:active{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>;
}

.pe-button-widgetfour .pep-8:before,.pe-button-widgetfour .pep-8:after,.pe-button-widgetfour .pep-11:before,.pe-button-widgetfour .pep-11:after{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>;
}

.pe-button-widgetfour .pep-9:before,.pe-button-widgetfour .pep-9:after,
.pe-button-widgetfour .pep-9 span:before,
.pe-button-widgetfour .pep-9 span:after,.pe-button-widgetfour .pep-10:before,.pe-button-widgetfour .pep-10:after,
.pe-button-widgetfour .pep-10 span:before,
.pe-button-widgetfour .pep-10 span:after{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_four_button','#F5067E'));?>
}

/* ------------------------------------------------------------------------- *
##  Buttons Page Search content none */
/* ------------------------------------------------------------------------- */

/* Color Button */
.button-content-none-page .pep-0,.button-content-none-page  .pep-1,.button-content-none-page  .pep-2,.button-content-none-page  .pep-3,
.button-content-none-page .pep-4,.button-content-none-page .pep-5,.button-content-none-page .pep-6,.button-content-none-page .pep-7,.button-content-none-page .pep-8,
.button-content-none-page .pep-9,.button-content-none-page .pep-10,.button-content-none-page .pep-11,.button-content-none-page .pep-12{
  color: <?php echo esc_attr(get_theme_mod('pepe_color_pepe_content_none_button','#3a3a3a'));?>; 
}

.button-content-none-page .pep-0:before {
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>; 
}

.button-content-none-page .pep-0:hover,.button-content-none-page .pep-1:hover,.button-content-none-page .pep-2:hover,.button-content-none-page .pep-3:hover,
.button-content-none-page .pep-4:hover,.button-content-none-page .pep-5:hover,.button-content-none-page .pep-6:hover,.button-content-none-page .pep-7:hover,
.button-content-none-page .pep-8:hover,.button-content-none-page .pep-9:hover,.button-content-none-page .pep-10:hover,.button-content-none-page .pep-11:hover,.button-content-none-page .pep-12:hover{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_pepe_content_none_button','#3a3a3a'));?>; 
}

.button-content-none-page .pep-1:before,.button-content-none-page .pep-2:before,.button-content-none-page .pep-12:before,.button-content-none-page .pep-12:after{
  border-bottom: 80px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>
}

.button-content-none-page .pep-2:after{
  border-top: 80px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>
}

.button-content-none-page .pep-3:before,.button-content-none-page .pep-3:after{
  border-top: 40px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>
  border-bottom: 40px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>
}

.button-content-none-page .pep-4:before,.button-content-none-page .pep-4:after,
.button-content-none-page .pep-4 span:before,
.button-content-none-page .pep-4 span:after,.button-content-none-page .pep-7:before,.button-content-none-page .pep-7:after,
.button-content-none-page .pep-7 span:before,
.button-content-none-page .pep-7 span:after {
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>;
}

.button-content-none-page .pep-5:after{
  border-color: transparent <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?> transparent transparent;
}

.button-content-none-page .pep-5:before{
  border-color: transparent transparent transparent <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>;
}

.button-content-none-page .pep-6 span{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>;
}

.button-content-none-page .pep-6:active,.button-content-none-page .pep-9:active,.button-content-none-page .pep-10:active{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>;
}

.button-content-none-page .pep-8:before,.button-content-none-page .pep-8:after,.button-content-none-page .pep-11:before,.button-content-none-page .pep-11:after{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>;
}

.button-content-none-page .pep-9:before,.button-content-none-page .pep-9:after,
.button-content-none-page .pep-9 span:before,
.button-content-none-page .pep-9 span:after,.button-content-none-page .pep-10:before,.button-content-none-page .pep-10:after,
.button-content-none-page .pep-10 span:before,
.button-content-none-page .pep-10 span:after{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_content_none_button','#F5067E'));?>
}

/* ------------------------------------------------------------------------- *
##  Buttons Page 404 */
/* ------------------------------------------------------------------------- */

/* Color Button */
.pepe-button-404 .pep-0,.pepe-button-404  .pep-1,.pepe-button-404  .pep-2,.pepe-button-404  .pep-3,
.pepe-button-404 .pep-4,.pepe-button-404 .pep-5,.pepe-button-404 .pep-6,.pepe-button-404 .pep-7,.pepe-button-404 .pep-8,
.pepe-button-404 .pep-9,.pepe-button-404 .pep-10,.pepe-button-404 .pep-11,.pepe-button-404 .pep-12{
  color: #3a3a3a; 
}

.pepe-button-404 .pep-0:before {
  background-color: #F5067E; 
}

.pepe-button-404 .pep-0:hover,.pepe-button-404 .pep-1:hover,.pepe-button-404 .pep-2:hover,.pepe-button-404 .pep-3:hover,
.pepe-button-404 .pep-4:hover,.pepe-button-404 .pep-5:hover,.pepe-button-404 .pep-6:hover,.pepe-button-404 .pep-7:hover,
.pepe-button-404 .pep-8:hover,.pepe-button-404 .pep-9:hover,.pepe-button-404 .pep-10:hover,.pepe-button-404 .pep-11:hover,.pepe-button-404 .pep-12:hover{
  color:#3a3a3a; 
}

.pepe-button-404 .pep-1:before,.pepe-button-404 .pep-2:before,.pepe-button-404 .pep-12:before,.pepe-button-404 .pep-12:after{
  border-bottom: 80px solid #F5067E;
}

.pepe-button-404 .pep-2:after{
  border-top: 80px solid #F5067E;
}

.pepe-button-404 .pep-3:before,.pepe-button-404 .pep-3:after{
  border-top: 40px solid #F5067E;
  border-bottom: 40px #F5067E;
}

.pepe-button-404 .pep-4:before,.pepe-button-404 .pep-4:after,
.pepe-button-404 .pep-4 span:before,
.pepe-button-404 .pep-4 span:after,.pepe-button-404 .pep-7:before,.pepe-button-404 .pep-7:after,
.pepe-button-404 .pep-7 span:before,
.pepe-button-404 .pep-7 span:after {
  background-color: #F5067E;
}

.pepe-button-404 .pep-5:after{
  border-color: transparent #F5067E transparent transparent;
}

.pepe-button-404 .pep-5:before{
  border-color: transparent transparent transparent #F5067E;
}

.pepe-button-404 .pep-6 span{
  background-color: #F5067E;
}

.pepe-button-404 .pep-6:active,.pepe-button-404 .pep-9:active,.pepe-button-404 .pep-10:active{
  background-color: #F5067E;
}

.pepe-button-404 .pep-8:before,.pepe-button-404 .pep-8:after,.pepe-button-404 .pep-11:before,.pepe-button-404 .pep-11:after{
  background-color: #F5067E;
}

.pepe-button-404 .pep-9:before,.pepe-button-404 .pep-9:after,
.pepe-button-404 .pep-9 span:before,
.pepe-button-404 .pep-9 span:after,.pepe-button-404 .pep-10:before,.pepe-button-404 .pep-10:after,
.pepe-button-404 .pep-10 span:before,
.pepe-button-404 .pep-10 span:after{
  background-color: #F5067E;
}

/* ------------------------------------------------------------------------- *
##  Buttons Comments */
/* ------------------------------------------------------------------------- */

/* Color Button */
.form-submit .pep-0,.form-submit  .pep-1,.form-submit  .pep-2,.form-submit  .pep-3,
.form-submit .pep-4,.form-submit .pep-5,.form-submit .pep-6,.form-submit .pep-7,.form-submit .pep-8,
.form-submit .pep-9,.form-submit .pep-10,.form-submit .pep-11,.form-submit .pep-12,button.pepe-button-submit{
  color: <?php echo esc_attr(get_theme_mod('pepe_color_pepe_comment_button','#3a3a3a'));?>; 
}

.form-submit .pep-0:before {
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>; 
}

.form-submit .pep-0:hover,.form-submit .pep-1:hover,.form-submit .pep-2:hover,.form-submit .pep-3:hover,
.form-submit .pep-4:hover,.form-submit .pep-5:hover,.form-submit .pep-6:hover,.form-submit .pep-7:hover,
.form-submit .pep-8:hover,.form-submit .pep-9:hover,.form-submit .pep-10:hover,.form-submit .pep-11:hover,.form-submit .pep-12:hover{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_pepe_comment_button','#3a3a3a'));?>; 
}

.form-submit .pep-1:before,.form-submit .pep-2:before,.form-submit .pep-12:before,.form-submit .pep-12:after{
  border-bottom: 80px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>
}

.form-submit .pep-2:after{
  border-top: 80px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>
}

.form-submit .pep-3:before,.form-submit .pep-3:after{
  border-top: 40px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>
  border-bottom: 40px solid <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>
}

.form-submit .pep-4:before,.form-submit .pep-4:after,
.form-submit .pep-4 span:before,
.form-submit .pep-4 span:after,.form-submit .pep-7:before,.form-submit .pep-7:after,
.form-submit .pep-7 span:before,
.form-submit .pep-7 span:after {
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>;
}

.form-submit .pep-5:after{
  border-color: transparent <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?> transparent transparent;
}

.form-submit .pep-5:before{
  border-color: transparent transparent transparent <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>;
}

.form-submit .pep-6 span{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>;
}

.form-submit .pep-6:active,.form-submit .pep-9:active,.form-submit .pep-10:active{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>;
}

.form-submit .pep-8:before,.form-submit .pep-8:after,.form-submit .pep-11:before,.form-submit .pep-11:after{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>;
}

.form-submit .pep-9:before,.form-submit .pep-9:after,
.form-submit .pep-9 span:before,
.form-submit .pep-9 span:after,.form-submit .pep-10:before,.form-submit .pep-10:after,
.form-submit .pep-10 span:before,
.form-submit .pep-10 span:after{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_pepe_comment_button','#F5067E'));?>
}

/* ------------------------------------------------------------------------- *
##  Buttons Contact Form 7 */
/* ------------------------------------------------------------------------- */

/* Color Button */
.pepe-color-button-7 .pep-0 input,.pepe-color-button-7 .pep-1 input,.pepe-color-button-7 .pep-2 input,.pepe-color-button-7 .pep-3 input,
.pepe-color-button-7 .pep-4 input,.pepe-color-button-7 .pep-5 input,.pepe-color-button-7 .pep-6 input,.pepe-color-button-7 .pep-7 input,.pepe-color-button-7 .pep-8 input,
.pepe-color-button-7 .pep-9 input,.pepe-color-button-7 .pep-10 input,.pepe-color-button-7 .pep-11 input,.pepe-color-button-7 .pep-12 input{
  color: #3a3a3a!important; 
}

.pepe-color-button-7 .pep-0,.pepe-color-button-7  .pep-1,.pepe-color-button-7  .pep-2,.pepe-color-button-7  .pep-3,
.pepe-color-button-7 .pep-4,.pepe-color-button-7 .pep-5,.pepe-color-button-7 .pep-6,.pepe-color-button-7 .pep-7,.pepe-color-button-7 .pep-8,
.pepe-color-button-7 .pep-9,.pepe-color-button-7 .pep-10,.pepe-color-button-7 .pep-11,.pepe-color-button-7 .pep-12{
  color: #3a3a3a!important; 
}

.pepe-color-button-7 .pep-0:before {
  background-color: #F5067E; 
}

.pepe-color-button-7 .pep-0:hover,.pepe-color-button-7 .pep-1:hover,.pepe-color-button-7 .pep-2:hover,.pepe-color-button-7 .pep-3:hover,
.pepe-color-button-7 .pep-4:hover,.pepe-color-button-7 .pep-5:hover,.pepe-color-button-7 .pep-6:hover,.pepe-color-button-7 .pep-7:hover,
.pepe-color-button-7 .pep-8:hover,.pepe-color-button-7 .pep-9:hover,.pepe-color-button-7 .pep-10:hover,.pepe-color-button-7 .pep-11:hover,.pepe-color-button-7 .pep-12:hover{
  color:#3a3a3a; 
}

.pepe-color-button-7 .pep-1:before,.pepe-color-button-7 .pep-2:before,.pepe-color-button-7 .pep-12:before,.pepe-color-button-7 .pep-12:after{
  border-bottom: 80px solid #F5067E;
}

.pepe-color-button-7 .pep-2:after{
  border-top: 80px solid #F5067E;
}

.pepe-color-button-7 .pep-3:before,.pepe-color-button-7 .pep-3:after{
  border-top: 40px solid #F5067E;
  border-bottom: 40px solid #F5067E;
}

.pepe-color-button-7 .pep-4:before,.pepe-color-button-7 .pep-4:after,
.pepe-color-button-7 .pep-4 span:before,
.pepe-color-button-7 .pep-4 span:after,.pepe-color-button-7 .pep-7:before,.pepe-color-button-7 .pep-7:after,
.pepe-color-button-7 .pep-7 span:before,
.pepe-color-button-7 .pep-7 span:after {
  background-color: #F5067E;
}

.pepe-color-button-7 .pep-5:after{
  border-color: transparent #F5067E transparent transparent;
}

.pepe-color-button-7 .pep-5:before{
  border-color: transparent transparent transparent #F5067E;
}

.pepe-color-button-7 .pep-6 span{
  background-color: #F5067E;
}

.pepe-color-button-7 .pep-6:active,.pepe-color-button-7 .pep-9:active,.pepe-color-button-7 .pep-10:active{
  background-color: #F5067E;
}

.pepe-color-button-7 .pep-8:before,.pepe-color-button-7 .pep-8:after,.pepe-color-button-7 .pep-11:before,.pepe-color-button-7 .pep-11:after{
  background-color: #F5067E;
}

.pepe-color-button-7 .pep-9:before,.pepe-color-button-7 .pep-9:after,
.pepe-color-button-7 .pep-9 span:before,
.pepe-color-button-7 .pep-9 span:after,.pepe-color-button-7 .pep-10:before,.pepe-color-button-7 .pep-10:after,
.pepe-color-button-7 .pep-10 span:before,
.pepe-color-button-7 .pep-10 span:after{
  background-color: #F5067E;
}

/* ------------------------------------------------------------------------- *
##  Section Menu Header */
/* ------------------------------------------------------------------------- */

/* End Menu active */
.pe-header .navbar .navbar-nav li a{
    font-size:<?php echo esc_attr( get_theme_mod( 'pepe_height_menu',14))?>px;
}

.pe-header .navbar .navbar-nav li{
  padding-left:<?php echo esc_attr( get_theme_mod( 'pepe_padding_menu',12))?>px;
  padding-right:<?php echo esc_attr( get_theme_mod( 'pepe_padding_menu',12))?>px;
}

/* ------------------------------------------------------------------------- *
##  Section Pepe One */
/* ------------------------------------------------------------------------- */
.pepe-section-one h2,.pepe-section-one p,.pepe-section-one a,.pepe-section-one span span,.pepe-section-one span{
  color: #fff;
}

.pepe-section-one span{
  opacity:0.8;
}

/* Category background color badge sect one */
.cat-pepe-sect-one a{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_color_badge_category_sect_one','#fff'));?>; 
}

/* Category color badge sect one */
.cat-pepe-sect-one a{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_badge_category_sect_one_color','#3a3a3a'));?>!important; 
}

/* Comment background color badge sect one */
a.pepe-sect-comments{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_color_badge_comment_sect_one','#fff'));?>!important;
}

/* Comment color badge sect one */
a.pepe-sect-comments{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_badge_comment_sect_one_color','#3a3a3a'));?>!important;
}

a.pepe-sect-comments::after{
  border-color: <?php echo esc_attr(get_theme_mod('pepe_color_badge_comment_sect_one','#fff'));?> transparent transparent;
}

/* Background image sect one */
.pepe-section-one{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_baclground_color_img_sect_one','#3a3a3a'));?> ;
}

/* ------------------------------------------------------------------------- *
##  Section Pepe Zero*/
/* ------------------------------------------------------------------------- */
</style>
<?php get_template_part('inc/customizer/section-style/section-zero',esc_attr(get_theme_mod('pepe_style_sect_zero','one')));?>
<style>

/* ------------------------------------------------------------------------- *
##  Section Pepe Two */
/* ------------------------------------------------------------------------- */
</style>
<?php get_template_part('inc/customizer/section-style/section-two',esc_attr(get_theme_mod('pepe_style_sect_two','one')));?>
<style>

/* Sidebar Responsive Block One */
<?php if (false == get_theme_mod('pepe_show_sid_mobile_sect_one',true)): ?>
@media (max-width: 769px) {
  .pepe-sid-one-advise,.pepe-sid-two-advise{
    display:none;
  }
}
<?php endif;?>

/* ------------------------------------------------------------------------- *
##  Block Card Slider with tab */
/* ------------------------------------------------------------------------- */

.pepe-block-a{
  margin-top:<?php echo esc_attr(get_theme_mod('pepe_margin_top_block_slider',1))?>em;
  margin-bottom:<?php echo esc_attr(get_theme_mod('pepe_margin_bottom_block_slider',0))?>em;
}

/* ------------------------------------------------------------------------- *
##  Block Pepe Zero */
/* ------------------------------------------------------------------------- */

.pepe-block-zero{
  margin-top:<?php echo esc_attr(get_theme_mod('pepe_margin_top_block_pepe_zero',2))?>em;
  margin-bottom:<?php echo esc_attr(get_theme_mod('pepe_margin_bottom_block_pepe_zero',4))?>em;
}

/* ------------------------------------------------------------------------- *
##  Block Pepe One */
/* ------------------------------------------------------------------------- */

.pepe-block-one{
  margin-top:<?php echo esc_attr(get_theme_mod('pepe_margin_top_block_pepe_one',0))?>em;
  margin-bottom:<?php echo esc_attr(get_theme_mod('pepe_margin_bottom_block_pepe_one',0))?>em;
}


/* ------------------------------------------------------------------------- *
##  Pepe Four */
/* ------------------------------------------------------------------------- */

.image-full-section img{
  height:<?php echo esc_attr(get_theme_mod('image_pepe_four_height',400))?>px;
  object-fit: <?php echo esc_attr(get_theme_mod('image_pepe_four_fit','cover'))?>;
}

.pepe-block-three{
  margin-top:<?php echo esc_attr(get_theme_mod('pepe_margin_top_pepe_four',-2))?>em;
  margin-bottom:<?php echo esc_attr(get_theme_mod('pepe_margin_bottom_pepe_four',0))?>em;
}

/* ------------------------------------------------------------------------- *
##  Footer*/
/* ------------------------------------------------------------------------- */

/* Logo */
img.logo-img-footer{
  width:<?php echo esc_attr(get_theme_mod('pepe_height_logo_widget_footer',250))?>px;
}

/* Height Info Area Footer */
.site-info{
  height: 80px;
  line-height: 80px;
}

/* ------------------------------------------------------------------------- *
##  Blog */
/* ------------------------------------------------------------------------- */

<?php if (false == get_theme_mod('pepe_enable_update_post',true)):?> 

time.updated{
  display: none;
}

<?php endif;?>

.entry-meta img.avatar{
  border-radius: 50%;
}

/* Sidebar */
.pepe-sidebar-article-margin{
  margin-top:<?php echo esc_attr(get_theme_mod('pepe_margin_top_slider_post',0))?>px;
}

/* Archive */
.pepe-archive{
  height: <?php echo esc_attr(get_theme_mod('pepe_height_image_cat',30))?>px;
  padding-top: <?php echo esc_attr(get_theme_mod('pepe_padding_image_cat',0))?>em; 
}

h1.page-title.arc-tit{
  font-size:<?php echo esc_attr(get_theme_mod('pepe_font_size_title_image_cat',38))?>px; 
}

.pepe-archive .archive-description p{
  font-size:<?php echo esc_attr(get_theme_mod('pepe_font_size_subtitle_image_cat',16))?>px; 
}

/* Search Page */
.pepe-page-search{
  height: <?php echo esc_attr(get_theme_mod('pepe_height_image_search_page',30))?>px;
  padding-top: <?php echo esc_attr(get_theme_mod('pepe_padding_image_search_page',0))?>em; 
}

.pepe-page-search h1.page-title{
  font-size:<?php echo esc_attr(get_theme_mod('pepe_font_size_title_image_search_page',38))?>px; 
}

.pepe-page-search .page-title span{
  font-size:<?php echo esc_attr(get_theme_mod('pepe_font_size_subtitle_image_search_page',38))?>px; 
}

/* Search Page not found */
img.img-search-none-risult{
  width: <?php echo esc_attr(get_theme_mod('pepe_height_image_search_page_not_found',30))?>px;
}

/* Page */
.pepe-sid-page-margin{
  margin-top:<?php echo esc_attr(get_theme_mod('pepe_margin_top_sidebar_page',0))?>px;
}

.pepe-padding-page{
  padding:<?php echo esc_attr(get_theme_mod('pepe_padding_content_page',0))?>px;
}

/* Bck To Top */
<?php if (false == get_theme_mod('pepe_enable_totop_responsive',false)):?> 
@media (max-width: 769px) {
.btn-back-to-top-left,.btn-back-to-top-right{
  display:none;
}
}

<?php endif;?>

/* ------------------------------------------------------------------------- *
##  Footer */
/* ------------------------------------------------------------------------- */

/* Info */
<?php if (true == get_theme_mod('pepe_lite_footer_large',false)):?>
.container-fluid.pepe-fluid-footer-padding{
  padding-left: 50px;
  padding-right: 50px;
}
<?php endif;?>

/* Widget */
<?php if (true == get_theme_mod('pepe_footer_widget_large',false)):?>
.container-fluid.pepe-fluid-footer-widget-padding{
  padding-left: 35px;
  padding-right: 35px;
}
<?php endif;?>

</style>


<?php
}
add_action( 'wp_head', 'pepe_lite_customizer_css' ); // End Customizer CSS















