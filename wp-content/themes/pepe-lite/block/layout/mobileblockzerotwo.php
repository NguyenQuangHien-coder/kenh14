<?php
/**
* mobileblockzerotwo.php
*
* @author    Denis Franchi
* @package   pepe-lite
*/
?>

<!-- Content -->
<div class="sticky-pepe-zero-padding col-md-8">
        <!-- Section Pepe Two -->
        <?php get_template_part('sections/section','pepe-zero');?>
          <div class="col-md-12 text-center">
            <?php
            the_posts_pagination( array(
            'prev_text'          => '<i class="fa fa-angle-left"></i>',
            'next_text'          => '<i class="fa fa-angle-right"></i>',
            'screen_reader_text' => __('Posts navigation', 'pepe-lite')
            ) ); 
            ?>
          </div>
</div>
<!-- Sidebar two -->
<div class="pepe-sid-zero-margin col-md-4">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>  
</div>