<?php
/**
* block-zero-two.php
*
* @author    Denis Franchi
* @package   pepe-lite
*/


if ( wp_is_mobile() ) { get_template_part( 'block/layout/mobileblockzerotwo');}
else{ get_template_part( 'block/layout/desktopblockzerotwo');}

