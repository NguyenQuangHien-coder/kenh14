<?php
/**
* top-menu.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>
<!-- Menu Top -->
<?php
  if (true == get_theme_mod('show_top_menu',true)):
   wp_nav_menu( array( 
   'theme_location' => 'menu-2',
   'link_class'     => 'link-top',  
   'fallback_cb'    => 'pepe_lite_link_to_menu_editor',
   'items_wrap'     =>'<ul class="nav-top">%3$s</ul>', ) );
  endif
?>