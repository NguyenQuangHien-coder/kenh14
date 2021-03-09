<?php
/**
* content-search.php
* @author    Franchi Design
* @package   pepe-lite
*/

?>

<div class="edit-archive pepe-page-search-ok">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part('template-parts/content', 'archive-two');?> 
    </article><!-- #post-<?php the_ID(); ?> -->
</div>


