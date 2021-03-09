<?php
/**
* descktopblockzerotwo.php
*
* @author    Denis Franchi
* @package   pepe-lite
*/
?>



<!-- Sidebar two -->
<div class="<?php if (true == get_theme_mod('pepe_show_sid_stiky_sect_zero',true)):?>pepe-sid-zero<?php endif;?> pepe-sid-zero-margin col-md-4">
  <div class="theiaStickySidebar">
<div class="pepe-sid-zero-margin col-md-4">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>  
</div>
</div>
</div>
<!-- Content -->
<div class="sticky-pepe-zero-padding col-md-8 pep-zer-padding-left">
<div class="theiaStickySidebar">
        <!-- Section Pepe Two -->
        <?php get_template_part('sections/section','pepe-zero');?>
          <div class="col-md-12 text-center"><?php
            the_posts_pagination( array(
            'prev_text'          => '<i class="fa fa-angle-left"></i>',
            'next_text'          => '<i class="fa fa-angle-right"></i>',
            'screen_reader_text' => __('Posts navigation', 'pepe-lite')
            ) ); 
            ?>
          </div>
  </div>
</div>