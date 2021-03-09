<?php
/**
* headernewsl.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>
 
<!-- News -->
<div class="<?php if (false == get_theme_mod('pepe_lite_show_date_time_header',true)):?> col-md-12 <?php endif;?><?php if (true == get_theme_mod('pepe_lite_show_date_time_header',true)):?>col-md-8<?php endif;?> col-sm-12 news-header">
    <div class="row">
        <div class="col align-self-start"></div>
           <div class="pe-flash-responsive col align-self-center">
               <span>
                 <?php echo esc_html(get_theme_mod( 'pepe_text_news_header',__('FLASH NEWS','pepe-lite')))?>
               </span>
           </div>
          <div class="col align-self-end"></div>
    </div>
    <div class="pe-sector-flash-news-header">   
		   <div class="simple-marquee-container">
		    	<div class="marquee-sibling">
               <span>
                 <?php echo esc_html(get_theme_mod( 'pepe_text_news_header',__('FLASH NEWS','pepe-lite')))?>
               </span>
		    	</div>
			    <div class="marquee">
			     	<ul class="marquee-content-items">
                <?php
                $pepe_lite_cat_news = esc_attr(get_theme_mod('pepe_cat_news_header'));
                $pepe_lite_args = array(
                    'cat' => $pepe_lite_cat_news,);
                $pepe_lite_news_header = new WP_Query($pepe_lite_args);
                if( $pepe_lite_news_header->have_posts() ) :
                while ( $pepe_lite_news_header->have_posts() ) : $pepe_lite_news_header->the_post(); ?>
                <li><i class="fas fa-arrow-alt-circle-right"></i>
                    <a href="<?php the_permalink();?>"><?php the_title_attribute(); ?></a></li>
                <?php endwhile;
                  endif;
                  wp_reset_postdata(); // End postdata News ?>
            </ul>
			    </div>
        </div>
    </div>
</div>
<!-- Time -->
<?php if (true == get_theme_mod('pepe_lite_show_date_time_header',true)):?>
<div class="col-md-4 col-sm-12 time-header">
       <div class="clock">
            <div id="date"><?php echo esc_html(date_i18n(__('l, F d, Y','pepe-lite'))); ?></div>
               <?php if (true == get_theme_mod('pepe_show_time_header',true)):?>
            <div id="time"></div>
            <?php endif;?>
       </div>
</div>
<?php endif;?>




