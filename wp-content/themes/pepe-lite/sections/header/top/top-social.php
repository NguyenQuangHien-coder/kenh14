<?php
/**
* top-social.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>
 <!-- Social Top -->
 <?php 
   if (true == get_theme_mod('show_top_social',true)):
     get_template_part( 'sections/section','social');
   endif
?>