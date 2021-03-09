<?php
/**
* mobileblockoneone.php
*
* @author    Denis Franchi
* @package   pepe lite
*/
?>

<!-- Content -->
<div class="<?php if (true == get_theme_mod('pepe_show_sid_stiky_sect_one',true)):?>sticky-pepe-one<?php endif;?> col-md-6">
  <div class="theiaStickySidebar">
    <?php get_template_part('block/layout/section-block-one',esc_attr(get_theme_mod('pepe_section_block_one','one'))); ?>
  </div>
</div>
<!-- Sidebar one -->
<div class="<?php if (true == get_theme_mod('pepe_show_sid_stiky_sect_one',true)):?>pepe-sid-one<?php endif;?> pepe-sid-one-advise col-md-3">
    <div class="theiaStickySidebar">
      <?php dynamic_sidebar( 'sidebar-one' ); ?>  
    </div>
</div>
<!-- Sidebar two -->
<div class="<?php if (true == get_theme_mod('pepe_show_sid_stiky_sect_one',true)):?>pepe-sid-two<?php endif;?> pepe-sid-two-advise col-md-3">
  <div class="theiaStickySidebar">
      <?php dynamic_sidebar( 'sidebar-two' ); ?>  
  </div>
</div>