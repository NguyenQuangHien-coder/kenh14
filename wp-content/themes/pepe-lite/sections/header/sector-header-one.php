<?php
/**
* sector-header-one.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<header id="masthead" class="site-header pe-header"> 
      <div class="container-fluid site-branding">
        <?php the_custom_header_markup(); ?>
        <!-- Header Responsive -->
        <?php get_template_part('sections/section','header-responsive');?> 
        <!-- Header sector 1 Top Header -->
        <?php if (true == get_theme_mod('show_section_top',true)):?>
         <?php get_template_part('sections/header/section','top-header');?> 
        <?php endif;?>
        <!-- Header sector 2 Logo Header -->
        <?php get_template_part('sections/header/section','logo-header');?> 
        <!-- Header sector 3 Menu Header -->
        <?php get_template_part('sections/header/section','menu-header');?> 
      </div>
</header>
<!-- Header sector 4 News Header -->
<?php if (true == get_theme_mod('enable_news_block_header',true)):
  get_template_part('sections/header/section','news-header');
endif;?>


 

