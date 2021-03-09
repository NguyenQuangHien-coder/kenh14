<?php
/**
*
* @author    Denis Franchi
* @package   pepe-lite
*/

get_header();?>

<!-- Section Card Primary -->
<?php get_template_part('block/block-slidertab');?>

<!-- Sector Zero -->
<?php get_template_part('block/block-zero'); ?>

<!-- Sector Two -->
<?php if (true == get_theme_mod('pepe_show_block_one',false)):
 get_template_part('block/block-one'); 
endif;
?>

<!-- Sector Three -->
<?php if (true == get_theme_mod('pepe_show_block_four',false)):
 get_template_part('block/block-three'); 
endif;

get_footer(); ?>