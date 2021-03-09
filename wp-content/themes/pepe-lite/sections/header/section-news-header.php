<?php
/**
* section-news-header.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>
<section class="container<?php if (false == get_theme_mod('size_news_block_header',false)):?>-fluid<?php endif;?> pepe-cont-large pepe-container-time">
<div class="row pe-flash-news-header">
    <!-- Layout Header News -->
	<?php get_template_part('sections/header/news/header','newsl');?>  
</div>
</section>

  