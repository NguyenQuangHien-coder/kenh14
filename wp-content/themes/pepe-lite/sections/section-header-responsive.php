<?php
/**
* header-responsive.php
* @author    Franchi Design
* @package   pepe-lite
*/

?>
  
<div class="row pe-responsive-header">
<!-- Social -->
<?php if ( true ==  get_theme_mod( 'pepe_enable_social_menu_resp', false ) ) : ?>
<div class="col text-center pe-social-menu-responsive">
  <?php get_template_part( 'sections/section','social-responsive');?>
</div>
<?php endif;?>
<!-- Logo -->
<div class="pe-logo-responsive col-md-12 text-center p-0">
    <a href="<?php echo esc_url(home_url()); ?>">
      <img src="<?php if ( get_theme_mod( 'pepe_logo_responsive' ) > 0 ) { 
          echo esc_url(wp_get_attachment_url( get_theme_mod( 'pepe_logo_responsive' )) ); 
          }  ?>"/>
    </a>
</div>
<!-- Description -->
<?php if (true== get_theme_mod('pepe_lite_enable_description_responsive',true)):?>
    <div class="col-md-12 text-center pe-description-header-responsive">
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <?php
    $pepe_lite_description = get_bloginfo( 'description', 'display' );
      if ( $pepe_lite_description || is_customize_preview() ) :
    ?>
    <p class="site-description"><?php echo $pepe_lite_description; /* WPCS: xss ok. */ ?></p>
    <?php endif; ?>
</div>
<?php endif;?>
    
<!-- Menu -->
<nav class="p-0 navbar navbar-expand-lg navbar-light col-lg-12 col-md-12 pepe-navbar-resp" role="navigation">
<button class="navbar-toggler pepe-button-resp-tog" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr__('Toggle navigation','pepe-lite')?>">
        <div class="pepe-menu-resp-hambur"></div>
        <div class="pepe-menu-resp-hambur"></div>
        <div class="pepe-menu-resp-hambur"></div>
</button>
    <!-- Search -->
    <?php if (true== get_theme_mod('enable_search_menu',true)):?>
      <div class="col text-right">
          <div class="pe-wrap-search-header">
            <form method="get" class="pe-search-form-header" action="<?php echo esc_url( home_url( '/' ) ) ?>">
              <label for="search-field-header"><span class="screen-reader-text"><?php __('To search this site, enter a search term','pepe-lite')?></span></label>
              <input class="search-field-header" id="search-field-header" type="text" name="s" value="<?php echo esc_attr(get_search_query()) ?>" aria-required="false" autocomplete="off" placeholder="<?php echo esc_attr('Search&hellip;','pepe-lite')?>"/>
              <button class="search-submit-header"><span class="screen-reader-text"><?php __('Search','pepe-lite')?></span><i class="fas fa-search"></i></button>
            </form>
          </div>
      </div>
      <?php endif;?>
      <div class="collapse navbar-collapse mb-4" id="navbarSupportedContent">
          <?php
            wp_nav_menu( array( 
            'theme_location' => 'menu-1',
            'link_class'     => 'nav-link dropdown-toggle',  
            'fallback_cb'    => 'pepe_lite_link_to_menu_editor',
            'items_wrap'     =>'<ul class="navbar-nav">%3$s</ul>', ) );
          ?>
      </div>     
</nav>
<!-- Banner for responsive enable/disable -->
<?php if (true== get_theme_mod('pepe_enable_banner_responsive',true)):?>
<div class="col-md-12 col-sm-12 pepe-selector-banner">
    <?php get_template_part('sections/header/logo/header',esc_attr(get_theme_mod('pepe_banner_header_post_widget','banner-post')));?>
</div>
<?php endif;?>
</div>





