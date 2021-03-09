<?php
/**
* block-one-three.php
*
* @author    Denis Franchi
* @package   pepe lite
*/


if ( wp_is_mobile() ) { get_template_part( 'block/layout/mobileblockonethree');}
else{ get_template_part( 'block/layout/desktopblockonethree');}