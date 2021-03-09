<?php
/**
* style-one.php
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<style> 

/* ------------------------------------------------------------------------- *
## Pepe Archive */
/* ------------------------------------------------------------------------- */

.widget_archive .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_archive','#F500F5'));?>;
}
.widget_archive:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_archive','#F500F5'));?>;
}

.widget_archive .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_archive','#F500F5'));?>;
}

.widget_archive h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_archive','#F500F5'));?>;
}

/* Content */
.widget_archive a{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
  -webkit-transition: all 200ms ease-out;
  -o-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
}

.widget_archive a:hover{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_archive','#F500F5'));?>;
}

/* Number */
.post-count-archive{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_number_archive','#fff'));?>;
  background-color:<?php echo esc_attr(get_theme_mod('pepe_background_color_widget_number_archive','#3a3a3a'));?>;
}

/* ------------------------------------------------------------------------- *
## Pepe Audio */
/* ------------------------------------------------------------------------- */

/* Title widget */
.widget_media_audio .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_audio','#1764b7'));?>;
}

.widget_media_audio:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_audio','#1764b7'));?>;
}

.widget_media_audio .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_audio','#1764b7'));?>;
}

.widget_media_audio h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_audio','#1764b7'));?>;
}

/* ------------------------------------------------------------------------- *
## Pepe Calender */
/* ------------------------------------------------------------------------- */

.widget_calendar .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_calendar','#ff8100'));?>;
}
.widget_calendar:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_calendar','#ff8100'));?>;
}
.widget_calendar .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_calendar','#ff8100'));?>;
}

.widget_calendar h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_calendar','#ff8100'));?>;
}

#wp-calendar tbody { 
  color: <?php echo esc_attr(get_theme_mod('pepe_color_widget_calendar','#aaa'));?>;
}

#wp-calendar tbody td { 
  background: <?php echo esc_attr(get_theme_mod('pepe_background_color_widget_calendar','#f5f5f5'));?>;
  border: 1px solid;
}

#wp-calendar tbody td{
    border-color:<?php echo esc_attr(get_theme_mod('pepe_background_color_hover_widget_calendar','#fff'));?>; 
}

#wp-calendar tbody td:hover { 
  background: <?php echo esc_attr(get_theme_mod('pepe_background_color_hover_widget_calendar','#fff'));?>; 
}

#wp-calendar tfoot #next a:hover,#wp-calendar tfoot #prev a:hover{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_calendar','#ff8100'));?>;
}

#wp-calendar tbody td a,.wp-calendar-nav a,#wp-calendar tfoot #next a,#wp-calendar tfoot #prev a,#wp-calendar caption {
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
}

.wp-calendar-nav a:hover{
  text-decoration:none;
  color:<?php echo esc_attr(get_theme_mod('pepe_color_calendar','#ff8100'));?>;
}

#wp-calendar thead th{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
}

/* ------------------------------------------------------------------------- *
## Pepe Html */ 
/* ------------------------------------------------------------------------- */

.widget_text .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_html','#008282'));?>;
}
.widget_text:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_html','#008282'));?>;
}
.widget_text .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_html','#008282'));?>;
}

.widget_text h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_html','#008282'));?>;
}

.textwidget.custom-html-widget,.textwidget p{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
}

/* ------------------------------------------------------------------------- *
##  About */
/* ------------------------------------------------------------------------- */

.pepe_about_post:hover .widget-about-title h2{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_about','#F5067E'));?>;
    font-weight:bold;
    -webkit-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
}

/* ------------------------------------------------------------------------- *
##  Author */
/* ------------------------------------------------------------------------- */

/* Title widget */
.pepe_author_post .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_author','#d700ff'));?>;
}

.pepe_author_post:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_author','#d700ff'));?>;
}

.pepe_author_post .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_author','#d700ff'));?>;
}

.pepe-class-pepe-author-title h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_author','#d700ff'));?>;
}

/* Icon */
.icon-author i{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
}

/* Title Author */
.title-author a{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
  -webkit-transition: all 200ms ease-out;
  -o-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
}

.title-author a:hover{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_author','#d700ff'));?>;
}

/* ------------------------------------------------------------------------- *
##  Category */ 
/* ------------------------------------------------------------------------- */

.pepe_cat_post .widget-title span::before{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_color_category','#ec1b1b'));?>;
}
.pepe_cat_post:hover h2.widget-title{
  border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_category','#ec1b1b'));?>;
}

.pepe_cat_post .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_category','#ec1b1b'));?>;
}

.pepe_cat_post h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_category','#ec1b1b'));?>;
}

/* Content */
.cat-widget a{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
    -webkit-transition: all 200ms ease-out;
    -o-transition: all 200ms ease-out;
    transition: all 200ms ease-out;
}

.cat-widget a:hover{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_category','#ec1b1b'));?>;
}

/* Number */
.post-count-cat{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_number_category','#fff'));?>;
  background-color:<?php echo esc_attr(get_theme_mod('pepe_background_color_widget_number_category','#3a3a3a'));?>;
}

/* ------------------------------------------------------------------------- *
##  Pepe Multitabs */ 
/* ------------------------------------------------------------------------- */

.pepe_multitab_post .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_multitab','#4c6977'));?>;
}

.pepe_multitab_post:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_multitab','#4c6977'));?>;
}

.pepe_multitab_post .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_multitab','#4c6977'));?>;
}

.pepe_multitab_post h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_multitab','#4c6977'));?>;
}

.row-multitab-content:hover .title-multitab-post a{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_multitab','#4c6977'));?>;
}

#pepe-tabs-widget ul li a:hover{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_multitab','#4c6977'));?>;
}

#pepe-tabs-widget .list-wrap {
  background: <?php echo esc_attr(get_theme_mod('pepe_color_multitab_bac','#f3f3f3'));?>;
}

#pepe-tabs-widget li a.current,
#pepe-tabs-widget li a.current:hover {
  background-color: <?php echo esc_attr(get_theme_mod('pepe_color_multitab_bac','#f3f3f3'));?>!important;
}


/* ------------------------------------------------------------------------- *
##  Pepe Post One */
/* ------------------------------------------------------------------------- */

.pepe_post_one_post .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_pepe_post_one','#F5067E'));?>;
}
.pepe_post_one_post:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_pepe_post_one','#F5067E'));?>;
}
.pepe_post_one_post .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_pepe_post_one','#F5067E'));?>;
}

.pepe_post_one_post h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_pepe_post_one','#F5067E'));?>;
}

.pepe-post-one-widget-content:hover h2.cat_cont a{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_pepe_post_one','#F5067E'));?>;
}

/* ------------------------------------------------------------------------- *
##  Pepe Post Two */
/* ------------------------------------------------------------------------- */

.pepe_post_two_post .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_pepe_post_two','#3a3a3a'));?>;
}
.pepe_post_two_post:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_pepe_post_two','#3a3a3a'));?>;
}
.pepe_post_two_post .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_pepe_post_two','#3a3a3a'));?>;
}

.pepe_post_two_post h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_pepe_post_two','#3a3a3a'));?>;
}

.pepe-class-pepe-post-two:hover .pepe-img-widget-two h3{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_pepe_post_two','#3a3a3a'));?>;
}

/* ------------------------------------------------------------------------- *
##  Pepe Social */ 
/* ------------------------------------------------------------------------- */

.pepe_social_post .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_social','#21a1f1'));?>;
}
.pepe_social_post:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_social','#21a1f1'));?>;
}
.pepe_social_post .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_social','#21a1f1'));?>;
}

.pepe_social_post h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_social','#21a1f1'));?>;
}

/* One Color*/
<?php if (true == get_theme_mod('pepe_color_social_one',false)):?> 
.widget.pepe_social_post ul i{
  background-color:<?php echo esc_attr(get_theme_mod('pepe_background_color_widget_social_uni','#3a3a3a'));?>!important;
}
<?php endif;?>

/* ------------------------------------------------------------------------- *
##  Pepe Statistics */ 
/* ------------------------------------------------------------------------- */

.pepe_stat_post .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_statistic','#4c6977'));?>;
}
.pepe_stat_post:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_statistic','#4c6977'));?>;
}
.pepe_stat_post .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_statistic','#4c6977'));?>;
}

.pepe_stat_post h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_statistic','#4c6977'));?>;
}

/* Bar */
.content-bar-stat{
    border: 1px solid <?php echo esc_attr(get_theme_mod('pepe_color_statistic','#4c6977'));?>;
}
.chartBars .bars li .bar {
    background: <?php echo esc_attr(get_theme_mod('pepe_color_statistic','#4c6977'));?>;
}

/* ------------------------------------------------------------------------- *
## Pepe Video */
/* ------------------------------------------------------------------------- */

/* Title widget */
.pepe_video_post .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_video','#ec1b1b'));?>;
}

.pepe_video_post:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_video','#ec1b1b'));?>;
}

.pepe_video_post .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_video','#ec1b1b'));?>;
}

.pepe_video_post h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_video','#ec1b1b'));?>;
}

/* ------------------------------------------------------------------------- *
## Pepe Gallery */
/* ------------------------------------------------------------------------- */

/* Title widget */
.widget_media_gallery .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_gallery','#ec1b1b'));?>;
}

.widget_media_gallery:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_gallery','#ec1b1b'));?>;
}

.widget_media_gallery .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_gallery','#ec1b1b'));?>;
}

.widget_media_gallery h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_gallery','#ec1b1b'));?>;
}

/* ------------------------------------------------------------------------- *
## Pepe Image */
/* ------------------------------------------------------------------------- */

/* Title widget */
.widget_media_image .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_image','#ec1b1b'));?>;
}

.widget_media_image:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_image','#ec1b1b'));?>;
}

.widget_media_image .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_image','#ec1b1b'));?>;
}

.widget_media_image h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_image','#ec1b1b'));?>;
}

/* ------------------------------------------------------------------------- *
## Pepe Meta */
/* ------------------------------------------------------------------------- */

/* Title */
.widget_meta .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_meta','#ff8100'));?>;
}

.widget_meta:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_meta','#ff8100'));?>;
}

.widget_meta .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_meta','#ff8100'));?>;
}

.widget_meta h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_meta','#ff8100'));?>;
}

.widget_meta a{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
}

.widget_meta a:hover{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_meta','#ff8100'));?>;
}

/* ------------------------------------------------------------------------- *
## Pepe Nav Menu */
/* ------------------------------------------------------------------------- */

/* Title widget */
.widget_nav_menu .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_menunav','#ff8100'));?>;
}

.widget_nav_menu:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_menunav','#ff8100'));?>;
}

.widget_nav_menu .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_menunav','#ff8100'));?>;
}

.widget_nav_menu h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_menunav','#ff8100'));?>;
}

.widget_nav_menu a{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
}

/* ------------------------------------------------------------------------- *
## Pepe Pages */
/* ------------------------------------------------------------------------- */

/* Title widget */
.widget_pages .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_pages','#ec1b1b'));?>;
}

.widget_pages:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_pages','#ec1b1b'));?>;
}

.widget_pages .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_pages','#ec1b1b'));?>;
}

.widget_pages h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_pages','#ec1b1b'));?>;
}

.widget_pages a{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
}

.widget_pages a:hover{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_pages','#ec1b1b'));?>;
}

/* ------------------------------------------------------------------------- *
##  Pepe Recent Comments */
/* ------------------------------------------------------------------------- */

/* Title widget */
.widget_recent_comments .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_comments','#F5067E'));?>;
}
.widget_recent_comments:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_comments','#F5067E'));?>;
}
.widget_recent_comments .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_comments','#F5067E'));?>;
}

.widget_recent_comments h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_comments','#F5067E'));?>;
}

.widget_recent_comments a{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
}

.widget_recent_comments a:hover{
 color:<?php echo esc_attr(get_theme_mod('pepe_color_comments','#F5067E'));?>;
}

span.comment-author-link,li.recentcomments{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
}

/* ------------------------------------------------------------------------- *
## Pepe Recent Post */
/* ------------------------------------------------------------------------- */

/* Title widget */
.widget_recent_entries .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_post','#F5067E'));?>;
}

.widget_recent_entries:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_post','#F5067E'));?>;
}

.widget_recent_entries .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_post','#F5067E'));?>;
}

.widget_recent_entries h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_post','#F5067E'));?>;
}

.widget_recent_entries a{
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_content','#3a3a3a'));?>;
}

.widget_recent_entries a:hover{
 color:<?php echo esc_attr(get_theme_mod('pepe_color_post','#F5067E'));?>;
}

/* ------------------------------------------------------------------------- *
## Search */
/* ------------------------------------------------------------------------- */

/* Title widget */
.widget_search .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_search','#F5067E'));?>;
}
.widget_search:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_search','#F5067E'));?>;
}
.widget_search .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_search','#F5067E'));?>;
}

.widget_search h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_search','#F5067E'));?>;
}

/* Input */
.widget_search .search-form input {
  border: 2px solid;
}

.widget_search .search-form input {
  border-color:<?php echo esc_attr(get_theme_mod('pepe_border_color_button_widget_search','#3a3a3a'));?>;
  color:<?php echo esc_attr(get_theme_mod('pepe_color_button_widget_search','#3a3a3a'));?>;
}

.widget_search .search-form button{
  color:<?php echo esc_attr(get_theme_mod('pepe_color_button_widget_search','#3a3a3a'));?>;
}

/* Effect Title none*/
<?php if (false == get_theme_mod('pepe_color_title_search',false)):?> 
.widget_search h2{
    border:none!important;
}

.widget_search .widget-title::before{
    background:none!important;
}

.widget_search .widget-title span{
    background:none!important;
}
<?php endif;?>

/* ------------------------------------------------------------------------- *
## Pepe Tags */
/* ------------------------------------------------------------------------- */

/* Title widget */
.widget_tag_cloud .widget-title span::before{
    background-color:<?php echo esc_attr(get_theme_mod('pepe_color_tag','#F500F5'));?>;
}

.widget_tag_cloud:hover h2.widget-title{
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_tag','#F500F5'));?>;
}

.widget_tag_cloud .widget-title span{
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    font-size: 14px;
    color:<?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
    background-color: <?php echo esc_attr(get_theme_mod('pepe_color_tag','#F500F5'));?>;
}

.widget_tag_cloud h2.widget-title {
    border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('pepe_color_tag','#F500F5'));?>;
}

.widget_tag_cloud .tagcloud a{
  background-color: <?php echo esc_attr(get_theme_mod('pepe_background_color_tag_widget','#3a3a3a'));?>;
  color: <?php echo esc_attr(get_theme_mod('pepe_color_widget_title_style_one','#fff'));?>;
}

</style>