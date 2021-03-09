<?php
/**
* block-one-one.php
*
* @author    Denis Franchi
* @package   pepe lite
*/


if ( wp_is_mobile() ) { get_template_part( 'block/layout/mobileblockoneone');}
else{ get_template_part( 'block/layout/desktopblockoneone');}