<?php
/**
* footer.php
* @author    Franchi Design
* @package   pepe-lite
*/

?>

</div><!-- #content -->
<footer id="colophon">
    <?php if (false == get_theme_mod('pepe_lite_footer_large',true)):?>
	<div class="container">
    <?php endif;?>
		<div class="site-footer container<?php if (true == get_theme_mod('pepe_lite_footer_large',true)):?>-fluid<?php endif;?>">
			<?php get_template_part('template-parts/footer','one');?> 
		</div> 
		<!-- Site Info -->
		<div class="container<?php if (true == get_theme_mod('pepe_lite_footer_large',true)):?>-fluid p-0<?php endif;?>">
			<div class="site-info row <?php if (true == get_theme_mod('pepe_lite_footer_large',true)):?>m-0<?php endif;?>">
				<?php get_template_part('template-parts/footer','info-one');?>  
			</div><!-- .site-info -->
		</div>
	<?php if (true == get_theme_mod('pepe_lite_footer_large',true)):?>
	</div>
	<?php endif;?>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
