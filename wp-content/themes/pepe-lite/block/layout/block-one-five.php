<?php
/**
* block-one-five.php
*
* @author    Denis Franchi
* @package   pepe lite
*/


if ( wp_is_mobile() ) { get_template_part( 'block/layout/mobileblockonefive');}
else{ get_template_part( 'block/layout/desktopblockonefive');}
