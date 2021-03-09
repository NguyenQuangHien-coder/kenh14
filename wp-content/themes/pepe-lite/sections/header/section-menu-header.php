<?php
/**
* section-menu-header.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<!-- Menu Header -->
<section class="pepe-nav-primary">
<div class="nav-wrapper">
<div class="pe-navbar-header pe-no-responsive-header <?php if (true== get_theme_mod('sticky_menu_header',true)):?>pe-sticky-menu-header<?php endif;?>">
    <div class="container<?php if (false == get_theme_mod('size_menu_block_header',false)):?>-fluid<?php endif;?> pepe-cont-large pe-container-menu-header"> 
    <div class="row">
  <!-- Menu -->
<nav class="navbar navbar-dark navbar-expand-lg col-md-9 col-sm-12 p-0">
    <div class="collapse navbar-collapse" id="navbarPepePrimary">
        <?php
            wp_nav_menu( array( 
            'theme_location' => 'menu-1',
            'fallback_cb'    => 'pepe_lite_link_to_menu_editor',
            'items_wrap'     =>'<ul class="navbar-nav">%3$s</ul>', ) );
         ?>
    </div>
</nav>
<!-- Search -->
<?php if (true== get_theme_mod('enable_search_menu',true)):?>
<div class="col-md-3 col-sm-12 text-right pe-div-search-header">
    <div class="pe-wrap-search-header">
	    <form method="get" class="pe-search-form-header" action="<?php echo esc_url( home_url( '/' ) ) ?>">
		    <label for="search-field-header"><span class="screen-reader-text"><?php __('To search this site, enter a search term','pepe-lite')?></span></label>
		    <input class="search-field-header" id="search-field-header" type="text" name="s" value="<?php echo esc_attr(get_search_query()) ?>" aria-required="false" autocomplete="off" placeholder="<?php echo esc_attr('Search&hellip;')?>"/>
		    <button class="search-submit-header"><span class="screen-reader-text"><?php __('Search','pepe-lite')?></span><i class="fas fa-search"></i></button>
	    </form>
    </div>
</div>
<?php endif;?>
</div>  
</div>       
</div>
</div>
</section>
  

           
           