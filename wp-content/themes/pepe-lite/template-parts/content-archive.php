<?php
/**
* content-archive.php
* @author    Franchi Design
* @package   pepe-lite
*/

?>
<div class="edit-archive">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part('template-parts/content','archive-one'); ?>
  </article><!-- #post-<?php the_ID(); ?> -->
</div>
