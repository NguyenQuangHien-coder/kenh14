<?php
/**
* section-widgetfour.php
*
* @author    Franchi Design
* @package   pepe-lite
*/
?>

<h2 class="text-banner-four"><?php echo esc_html(get_theme_mod('pepe_text_banner_four',__('Pepe Magazine','pepe-lite')))?></h2>
<p class="textarea-banner-four"><?php echo esc_html(get_theme_mod('pepe_textarea_banner_four',__('Welcome to Pepe!','pepe-lite')))?></p>
<div class="row">
    <div class="col-md-12 pe-button-widgetfour">
        <a class="pep-6 pep3" href="<?php echo esc_url( get_theme_mod( 'pepe_link_widgetfour' )); ?>"><?php echo esc_html(get_theme_mod( 'pepe_text_button_widgetfour',__('More','pepe-lite')))?><span></span></a>
    </div>
</div>