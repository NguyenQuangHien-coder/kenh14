<?php
/**
* archive.php
* @author    Franchi Design
* @package   pepe-lite
*/

get_header();
  if (true == get_theme_mod('pepe_show_breadcrumbs_cat',true)):
    pepe_lite_custom_breadcrumbs(); 
  endif;
  get_template_part('archive/template-archive','one'); 
get_footer();
