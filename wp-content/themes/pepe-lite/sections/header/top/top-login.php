<?php
/**
* top-login.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<!-- Login Top -->
<?php if (true == get_theme_mod('show_login',true)):?>
<ul class="header_login_top">
    <?php wp_register('','<span>'.__('|','pepe-lite').'</span>'); ?>
	<li><?php wp_loginout(); ?></li>
	<?php wp_meta(); ?>
</ul>
<?php endif;?>
