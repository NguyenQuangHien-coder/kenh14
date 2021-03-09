<?php
/**
* section-social.php
* @author    Franchi Design
* @package   pepe-lite
*/
?>
<ul class="header_social">

<!-- Facebook -->
<?php if ( true ==  get_theme_mod( 'pepe_lite_enable_facebook_social', false ) ) : ?>
<li><a href="<?php echo esc_url( get_theme_mod( 'pepe_link_facebook_social' ));?>">
	  <i class="fab fa-facebook"></i>
	</a>
</li>
<?php endif; ?>

<!-- Twitter -->
<?php if ( true ==  get_theme_mod( 'pepe_lite_enable_twitter_social', false ) ) : ?>
<li><a href="<?php echo esc_url( get_theme_mod( 'pepe_link_twitter_social' ));?>">
		<i class="fab fa-twitter"></i>
	</a>
</li>
<?php endif; ?>

<!-- Dribbble-->
<?php if ( true ==  get_theme_mod( 'pepe_lite_enable_dribbble_social', false ) ) : ?>
<li><a href="<?php echo esc_url( get_theme_mod( 'pepe_link_dribbble_social' )); ?>">
		<i class="fab fa-dribbble"></i>
	</a>
</li>
<?php endif; ?>

<!-- Tumblr -->
<?php if ( true ==  get_theme_mod( 'pepe_lite_enable_tumblr_social', false ) ) : ?>
<li><a href="<?php echo esc_url( get_theme_mod( 'pepe_link_tumblr_social' ));?>">
	   <i class="fab fa-tumblr"></i>
	</a>
</li>
<?php endif; ?>

<!-- Instagram -->
<?php if ( true ==  get_theme_mod( 'pepe_lite_enable_instagram_social', false ) ) : ?>
<li><a href="<?php echo esc_url( get_theme_mod( 'pepe_link_instagram_social' )); ?>">
	   <i class="fab fa-instagram"></i>
	</a>
</li>
<?php endif; ?>


<!-- Linkedin -->
<?php if ( true ==  get_theme_mod( 'pepe_lite_enable_linkedin_social', false ) ) : ?>
<li><a href="<?php echo esc_url( get_theme_mod( 'pepe_link_linkedin_social' )); ?>">
		<i class="fab fa-linkedin"></i>
	</a>
</li>
<?php endif; ?>

<!-- Youtube -->
<?php if ( true ==  get_theme_mod( 'pepe_lite_enable_youtube_social', false) ) : ?>
<li><a href="<?php echo esc_url( get_theme_mod( 'pepe_link_youtube_social' )); ?>">
		<i class="fab fa-youtube-square"></i>
	</a>
</li>
<?php endif; ?>

<!-- Pinterest -->
<?php if ( true ==  get_theme_mod( 'pepe_lite_enable_pinterest_social',false ) ) : ?>
<li><a href="<?php echo esc_url( get_theme_mod( 'pepe_link_pinterest_social' )); ?>">
		<i class="fab fa-pinterest-p"></i>
	</a>
</li>
<?php endif; ?>

<!-- Flickr -->
<?php if ( true ==  get_theme_mod( 'pepe_lite_enable_flickr_social', false) ) : ?>
<li><a href="<?php echo esc_url( get_theme_mod( 'pepe_link_flickr_social' )); ?>">
		<i class="fab fa-flickr"></i>
	</a>
</li>
<?php endif; ?>

<!-- Github -->
<?php if ( true ==  get_theme_mod( 'pepe_lite_enable_github_social', false ) ) : ?>
<li><a href="<?php echo esc_url( get_theme_mod( 'pepe_link_github_social' )); ?>">
		<i class="fab fa-github"></i>
	</a>
</li>
<?php endif; ?>

</ul>
