<?php
/**
* skin-color-two.php
* @author    Denis Franchi
* @package   pepe-lite
*
*/

/* Skin color:#00b352 */

?>

<style>

/* ------------------------------------------------------------------------- *
##  Font */
/* ------------------------------------------------------------------------- */

h1,h2,h3,h4,h5,h6,p{
  color:#3a3a3a;
}

/* ------------------------------------------------------------------------- *
##  Header Top */
/* ------------------------------------------------------------------------- */

/* Login top top */
.header_login_top a:hover{
  color:#00b352;
}

/* Menu Top */
ul.nav-top a:hover{
  color: #00b352;
}

/* Social */
.header_social i:hover,.pe-social-menu-responsive i:hover{
  color:#00b352;
}

/* ------------------------------------------------------------------------- *
##  Header */
/* ------------------------------------------------------------------------- */

.pe-header{
  box-shadow:0px 6px 8px 0px rgba(0,0,0,.08);
}

/* Section Flash News */
.pepe-color-news-hover{
  background-color: #009243!important;
}

.pe-sector-flash-news-header{
    background-color:#fff;
    border: 1px solid #e9e9e9;
}

.marquee-sibling,.pe-flash-responsive {
  background: #00b352;
  color: #ffffff;
}

.marquee-content-items li a{
  color: #3a3a3a;
}

.marquee-content-items i{
  color: #00b352;
}

/* Time */
#time {
	background-color: #fff;
	color: #3a3a3a;
}

.clock {
	color: #fff;
	background-color: #3a3a3a;
}

/* ------------------------------------------------------------------------- *
##  Section Menu Header */
/* ------------------------------------------------------------------------- */

/* Menu active */
[aria-current].nav-link,.current-menu-ancestor a[data-toggle] {
  color: #00b352!important;
}

.current-post-parent a[aria-current]{
  color: #00b352!important;
}

.menu-item.current-menu-item.current_page_item a{
    color: #00b352!important;
}

/* End Menu active */
.pe-header .navbar .navbar-nav li a:hover{
    color: #00b352;
}

.pe-header .navbar .navbar-nav li.submenu .dropdown-menu{
    box-shadow: 6px 6px 8px 6px rgba(0,0,0,.08);
}

/* Menu Responsive */
body.pe-padding-body{
  -webkit-box-shadow: 0px 0px 35px 7px rgba(26,26,26,1);
  -moz-box-shadow: 0px 0px 35px 7px rgba(26,26,26,1);
  box-shadow: 0px 0px 35px 7px rgba(26,26,26,1);
}

.overlay ul.navbar-nav{
  background-color:transparent!important;
}

.overlay a:hover, .overlay a:focus {
  color: #00b352;
}

/* Search Responsive */
button.pe-button-search{
  background-color: #00b352;
  color:#fff;
  border:1px solid #fff;
}

.pepe-class-submit-login-username{
  color:#00b352!important;
  font-weight:bold!important;
  border:none!important;
}

/* ------------------------------------------------------------------------- *
##  Section Zero */
/* ------------------------------------------------------------------------- */

/* Edit */
.image-section-zero:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

/* Text */
.row-zero span{
  color:#9a9a9a;
}

.row-zero h2{
  color:#3a3a3a;
}

.row-zero:hover h2.title-row-zero{
  color:#00b352;
}

/* Comments */
a.pepe-sect-zero-comments{
  color: #fff!important;
}

a.pepe-sect-zero-comments:hover{
  color: #fff!important;
}

/* Category */
.cat-sect-zero a{
  color: #fff;
}

.cat-sect-zero a:hover{
  color: #fff;
}

/* ------------------------------------------------------------------------- *
##  Multitab */
/* ------------------------------------------------------------------------- */

/* Nav */
nav > .nav.nav-tabs{
    color:#fff;
    background:#3a3a3a;
}

nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active{
    color:#fff;
    background:#3a3a3a;
}

.tab-content{
    border-top:4px solid #00b352;
    border-bottom:4px solid #00b352;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus,
nav > div a.nav-item.nav-link.active{
    background: #00b352;
    color:#fff;
}

p.p-title-live-tab-1, p.p-title-live-tab-2, p.p-title-live-tab-3{
  color:#fff;
}

/* Category */
p.cat-multitab:hover{
  background-color:#00b352;
}

.cat-multitab a{
  color: #fff;
}

.cat-multitab a:hover{
  color: #fff;
}

/* Text */
.pepe-title-sect-multitab h2,.title-multitab-post a{
    color:#3a3a3a;
}

/* Edit */
.col-resp-image-multitab-col:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

/* ------------------------------------------------------------------------- *
##  Slider */
/* ------------------------------------------------------------------------- */

a.opacity-image-slider::after{
  background-color: rgba(23, 23, 23, 0.16);
}

/* Category */
.pepe-slider-caption:hover p.cat-slider{
  background-color:#00b352;
}

.cat-slider a{
  color: #fff;
}

.cat-slider a:hover{
  color: #fff;
}

/* Text */
h2.title-slider{
  color: #fff;
}

h2.title-slider:hover{
  color: #fff;
}

/* ------------------------------------------------------------------------- *
##  Card Large */
/* ------------------------------------------------------------------------- */

#progress{
  background: #00b352;
}

.pepe-slider-card-header a::after{
  background-color: rgba(6, 6, 6, 0.201);
}

.pepe-slider-card-header h2,.pepe-slider-card-header span{
  color:#fff ;
}

.pepe-capture-slider-card p{
  color: #fff;
}

.pepe-slider-card-header:hover .pepe-capture-slider-card p{ 
  background-color: #00b352;
}

a.card-large-2-comments,a.card-large-3-comments{
  color: #fff;
}

a.card-large-2-comments:hover,a.card-large-3-comments:hover{
  color: #fff;
}

.card-large-2:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

.pepe-capture-card-one p{
  color: #fff;
}

.card-large-2:hover .pepe-capture-card-one p{
  background-color: #00b352;
}

.pepe-capture-card-one h2{
  color: #fff;
}

.card-large-3:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

.pepe-capture-card-two p{
  color: #fff;
}

.card-large-3:hover .pepe-capture-card-two p{
  background-color: #00b352;
}

.pepe-capture-card-two h2{
  color: #fff;
}

.card-large-4:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

.pepe-capture-card-three p{
  color: #fff;
}

.card-large-4:hover .pepe-capture-card-three p{
  background-color: #00b352;
}

.pepe-capture-card-three h2{
  color: #fff;
}

/* ------------------------------------------------------------------------- *
##  Card */
/* ------------------------------------------------------------------------- */

.capture-card-1 p{
  color: #fff;
}

.capture-card-1 h2{
  color: #fff;
}

a.card-pepe-card-comments{
  color: #fff;
}

a.card-pepe-card-comments:hover{
  color: #fff;
}

.capture-card-1 span{
  color: #fff;
}

.card-pepe-1:hover a.post-edit-link,.card-pepe-2:hover a.post-edit-link,.card-pepe-center:hover a.post-edit-link,
.card-pepe-3:hover a.post-edit-link,.card-pepe-4:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

/* Content */
.card-pepe-1:hover .capture-card-1 p{
  background-color: #00b352;
}

.card-pepe-2:hover .capture-card-1 p{
  background-color: #00b352;
}

.card-pepe-center:hover .capture-card-1 p{
  background-color: #00b352;
}

.card-pepe-3:hover .capture-card-1 p{
  background-color: #00b352;
}

.card-pepe-4:hover .capture-card-1 p{
  background-color: #00b352;
}

/* ------------------------------------------------------------------------- *
##  Section Pepe One */
/* ------------------------------------------------------------------------- */

a.pepe-sect-comments:hover{
  color: #3a3a3a;
}

.pepe-section-one:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}


.pepe-divide-section-one{
  background-color: #00b352;
}

.pepe-section-one:hover .pepe-divide-section-one{
  color: #fff;
}

.pepe-section-one:hover h2{
  color:#00b352;
}

.pepe-section-one a:hover{
  background-color:#00b352;
  color: #fff;
}

a.pepe-sect-comments:hover{
  background-color: #fff!important;
}

/* ------------------------------------------------------------------------- *
##  Section Pepe Two */
/* ------------------------------------------------------------------------- */

/* Edit */
.pepe-img-sect-two:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

/* Title Section */
.pepe-content-sect-two:hover .pepe-title-sect-two a h2{
  color:#00b352;
}

/* Date */
.pepe-title-sect-two a{
  color: #3a3a3a;
}

.pepe-title-sect-two a:hover{
  color:#00b352;
}

.pepe-title-sect-two span{
  color: #aaa;
}

/* Comments */

a.pepe-sect-two-comments{
  color: #fff!important;
}

a.pepe-sect-two-comments:hover{
  color: #fff!important;
}

/* ------------------------------------------------------------------------- *
##  Section Pepe Three */
/* ------------------------------------------------------------------------- */

/* Edit */
.pepe-img-sect-three:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

/* Date */
.pepe-title-sect-three a{
  color: #3a3a3a;
}

.pepe-title-sect-three a:hover{
  color:#00b352;
}

.pepe-title-sect-three span{
  color: #aaa;
}

/* Title */
.pepe-img-sect-three:hover .pepe-title-sect-three a h2{
  color:#00b352;
}

/* Comments */
a.pepe-sect-three-comments{
  color: #fff!important;
}

a.pepe-sect-three-comments:hover{
  color: #fff!important;
}

/* Post Bottom */

/* Edit */
.pepe-img-sect-three-bottom:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

/* Date */
.pepe-title-sect-three-bottom a{ 
  color: #3a3a3a;
}

.pepe-title-sect-three-bottom:hover h2{
  color:#00b352;
}

.pepe-title-sect-three-bottom span{
  color: #aaa;
}

/* Multitabs */
.tab + label {
  color: #3a3a3a;
}

/* ------------------------------------------------------------------------- *
##  Section Pepe Four */
/* ------------------------------------------------------------------------- */

.pepe-input-mail{
  background-color:#00b352;
  color: #fff;
}

/* ------------------------------------------------------------------------- *
##  Section Pepe Five */
/* ------------------------------------------------------------------------- */

/* Edit */
.pepe-img-sect-five:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

/* Date */
.pepe-title-sect-five a{
  color: #3a3a3a;
}

.pepe-title-sect-five a:hover{
  color:#00b352;
}

.pepe-title-sect-five span{
  color: #aaa;
}

/* Title */
.pepe-img-sect-five:hover .pepe-title-sect-five a h2{
  color:#00b352;
}

/* Comments */
a.pepe-sect-five-comments{
  color: #fff!important;
}

a.pepe-sect-five-comments:hover{
  color: #fff!important;
}

/* Edit Primary Post */
.pepe-current-post-five:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

.pepe-current-post-five:hover h2{
  color:#00b352!important;
}

/* ------------------------------------------------------------------------- *
##  Contact Page */
/* ------------------------------------------------------------------------- */

.content-contact-widget .widget-title span,input.wpcf7-form-control.wpcf7-text{
  color: #3a3a3a!important;
}

.pepe-left-7 input,.pepe-right-7 input{
  border: 1px solid #ccc;
}

textarea.wpcf7-form-control.wpcf7-textarea{
  border-color: #ccc;
}

/* ------------------------------------------------------------------------- *
##  Widgets */
/* ------------------------------------------------------------------------- */

/* Pepe One */

/* Edit Link */
.pepe-post-one-widget-content:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

/* Categories */
.cat_title a{
  color: #fff;
}

.cat_title a:hover{
  text-decoration:none;
  color:#ccc;
}

/* Title */
h2.cat_cont a{
  color:#3a3a3a;
}

/* Date */
.pepe-post-one-widget-title span{
  color:#aaa;
}

/* Pepe Two */

/* Edit Link */
.pepe-class-pepe-post-two:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

/* Title */
.pepe-class-pepe-post-two h3{
  color:#3a3a3a;
}

/* Date */
.pepe-post-two-widget-title span{
  color:#aaa;
}

/* Pepe Social */

/* Icons */
.social-link i{
  color: #fff;
}

.social-link i:hover{
  background-color:  #00b352;
}

/* Pepe Statistics */

/* Bar Title */
span.tit-bar{
  color: #3a3a3a;
}

/* Pepe Multitab */

/* Edit Link */
.row-multitab-content:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

#pepe-tabs-widget .nav-tabs li a {
  color: #3a3a3a;
}

/* ------------------------------------------------------------------------- *
##  Setup */
/* ------------------------------------------------------------------------- */

/* Pagination */
.pagination span, .pagination a {
  color:#3a3a3a;
  background: #fff;
}

.pagination a:hover{
  color:#fff;
  background: #3a3a3a;
}

.pagination .current{
  background: #00b352;
  color:#fff;
}

/* Back To Top Right */
.btn-back-to-top-right i{
  color:#00b352;
}

.btn-back-to-top-right {
  border: 1px solid #00b352;
}

/* Back To Top Left */
.btn-back-to-top-left i{
  color:#00b352;
}

.btn-back-to-top-left {
  border: 1px solid #00b352;
}

/* Breadcrumbs */

#breadcrumbs a{
  color:#3a3a3a;
}

#breadcrumbs{
  color: #808080;
}

/* ------------------------------------------------------------------------- *
##  Footer */
/* ------------------------------------------------------------------------- */

.site-info{
  border-top: 1px solid #00b352;
}

.site-info-copyright a:hover{
  color:  #00b352;
}

/* ------------------------------------------------------------------------- *
##  Blog */
/* ------------------------------------------------------------------------- */

/* Post Single */
.entry-meta i,.entry-meta a,.entry-meta{
  color: #808080;
}

.entry-meta a:hover{
  color: #3a3a3a;
}

.entry-meta span.author a{
  color: #3a3a3a;
}

.entry-meta span.author a:hover{
  color: #3a3a3a;
}

/* Category */

.pepe-cat-single a{
  color: #fff;
}

.pepe-cat-single a:hover{
  color:#fff;
}

/* Tag */
.entry-footer a{
  background-color: #1e1f1f ;
  color: #fff;
}

.entry-footer a:hover{
  color:#fff;
}

/* Comments*/
.comment-author cite{
  color:#3a3a3a;
}

h2.comments-title{
  border-bottom: 2px solid #3a3a3a;
}

.comments-title span{
  background-color: #3a3a3a;
  color: #fff;
}

.comments-area textarea{
  border-color: #ccc;
}

.comment-author a,.reply a,.logged-in-as a,p.logged-in-as{
  color: #aaa;
}

.comment-body{
  border-bottom: 1px solid #eaeaea;
}

/* Related Post */
h3.related-title{
  border-bottom: 2px solid #3a3a3a;
}

#related_posts a{
  color: #222;
}

#related_posts a:hover{
  color:#00b352;
}

.related-title span{
  background-color: #3a3a3a;
  color: #fff;
}

/* Edit */
.pepe-article:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

/* Archive */

.entry-header-archive h2 a{
  color: #5584b0;
}

/* Edit Archive */
.edit-archive:hover a.post-edit-link{
  color: #fff;
  background-color: rgba(0, 0, 0, 0.48);
}

.entry-header-archive h2 a:hover{
  color: #00b352;
}

.edit-archive:hover .entry-header-archive h2 a{
  color: #00b352;
}

/* Navigation */
.navigation.posts-navigation a{
  color: #3a3a3a;
}

</style>
