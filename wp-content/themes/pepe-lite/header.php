<?php
/**
* header.php
* @author    Franchi Design
* @package   pepe-lite
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Back to top -->
<?php if (true == get_theme_mod('pepe_lite_enable_totop',true)):?>
  <div class="btn-back-to-top-right"><i class="fa fa-angle-up"></i></div>
<?php endif;?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pepe-lite' ); ?></a>
      <!-- Layout Header -->
      <?php get_template_part('sections/header/sector',esc_attr(get_theme_mod('pepe_mod_sector_header','header-one' )));?>       
<div id="content" class="site-content <?php echo esc_attr(get_theme_mod('pepe_layout_site','container-fluid' ));?> pepe-cont-large">