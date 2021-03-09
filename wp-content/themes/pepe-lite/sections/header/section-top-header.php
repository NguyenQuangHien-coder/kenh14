<?php
/**
* section-top-header.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>
 
<!-- Top Header --> 

<section class="pe-top-top-header">
    <div class="container<?php if (false == get_theme_mod('size_top_header',false)):?>-fluid<?php endif;?> pepe-cont-large pe-container-top-header"> 
       <div class="row">
          <!-- Layout Header Top -->
          <?php get_template_part('sections/header/top/top-three');?>
       </div>  
    </div>
</section>
   
