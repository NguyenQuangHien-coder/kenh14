<?php
/**
* header-description.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<!-- Description -->
<div class="col-md-3 col-sm-12 pe-description-header"> 
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	    <?php
		  $pepe_lite_description = get_bloginfo( 'description', 'display' );
		  if ( $pepe_lite_description || is_customize_preview() ) :
		?>
		<p class="site-description"><?php echo $pepe_lite_description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>
</div>