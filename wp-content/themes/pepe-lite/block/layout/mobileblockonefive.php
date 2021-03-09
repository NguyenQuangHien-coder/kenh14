<?php
/**
* mobileblocktwofive.php
*
* @author    Denis Franchi
* @package   pepe lite
*/
?>

<!-- Content -->
<div class="<?php if (true == get_theme_mod('pepe_show_sid_stiky_sect_two',true)):?>sticky-pepe-two<?php endif;?> content-block-two col-md-6">
      <div class="theiaStickySidebar">
        <?php get_template_part('sections/section','pepe-three');?> 
      </div>
</div>
<!-- Sidebar three -->
<div class="<?php if (true == get_theme_mod('pepe_show_sid_stiky_sect_two',true)):?>pepe-sid-three<?php endif;?> pepe-sid-three-padding col-md-3">
      <div class="theiaStickySidebar">
        <?php dynamic_sidebar( 'sidebar-three' ); ?>  
      </div>
</div>
