<?php
/**
* block-one-six.php
*
* @author    Denis Franchi
* @package   pepe lite
*/
?>

<!-- Content -->
<div class="<?php if (true == get_theme_mod('pepe_show_sid_stiky_sect_one',true)):?>sticky-pepe-one<?php endif;?> col-md-12">
  <div class="theiaStickySidebar">
   <?php get_template_part('block/layout/section-block-one',esc_attr(get_theme_mod('pepe_section_block_one','one'))); ?>
  </div>
</div>
