<?php
/**
* header-banner.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<!-- Banner -->
<div class="col-md-6 col-sm-12 pepe-selector-banner">
<?php if (true == get_theme_mod('pepe_lite_show_banner_header',true)):
  get_template_part('sections/header/logo/header',esc_attr(get_theme_mod('pepe_banner_header_post_widget','banner-post')));  
 endif;?>
</div>