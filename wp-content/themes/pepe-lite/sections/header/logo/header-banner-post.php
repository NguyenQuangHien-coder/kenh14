<?php
/**
* header-banner-pst.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<!-- Banner Post --> 
<?php
    $pepe_lite_name_post_banner = esc_attr(get_theme_mod('pepe_post_name_banner_header'));
    $pepe_lite_args = array(
    'post_type'      => 'post',
    'order'          => 'ASC',
    'post__in'       => array( $pepe_lite_name_post_banner),
    'posts_per_page' => 1, );
    $pepe_lite_banner = new WP_Query($pepe_lite_args);
    if( $pepe_lite_banner->have_posts() ) :
    while ( $pepe_lite_banner->have_posts() ) : $pepe_lite_banner->the_post(); 
    $pepe_lite_image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'pepe-header-banner');?>
    <div class="pe-advise" style="background-image:url('<?php if ( $pepe_lite_image_attributes[0] ) :
                echo esc_url($pepe_lite_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/pepe-default.jpg'; endif; ?>')">
        <div class="pe-banner-top-header-text row">
            <div class="col-md-7">
                <h6><?php the_title_attribute(); ?></h6>
            </div>
            <div class="col-md-5 text-right pe-button-banner-header">
                <a class="pep-6 pep3" href="<?php the_permalink();?>"><?php echo esc_html(get_theme_mod( 'pepe_text_button_banner_header',__('More','pepe-lite')))?><span></span></a>
            </div>
        </div>
	</div>
<?php endwhile;
    endif;
    wp_reset_postdata(); // End postdata Banner ?>
