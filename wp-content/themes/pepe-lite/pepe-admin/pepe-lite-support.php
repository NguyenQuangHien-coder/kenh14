<?php
/**
* pepe-lite-support.php
* @link https://www.denisfranchi.com
*
* @package pepe-lite
*
*/
?>

<div class="at-header-admin">
      <div class="at-logo-admin">
		   	<h2><?php echo esc_html__('Pepe Lite','pepe-lite');?></h2>
		  	<span><?php echo esc_html__('V 1.0.8','pepe-lite');?></span>
		  </div>
		   <div class="at-logo-icon-admin">
		   	<span class="dashicons dashicons-screenoptions"></span>
	     </div>
   </div>
<!-- Tab links -->
<div class="pepe-tab-support">
	<div class="tab">
		<button class="tablinks" onclick="pepeopenGuide(event, 'Welcome')"id="defaultOpen"><?php esc_html_e('Welcome','pepe-lite'); ?></button>
		<button class="tablinks" onclick="pepeopenGuide(event, 'Help')"><?php esc_html_e('Help','pepe-lite'); ?></button>
	</div>
	<!-- Tab content -->
	<!-- Welcome -->
	<div id="Welcome" class="tabcontent">
		<h3 class="pepe-welkome-support-title"><?php esc_html_e('Welcome to Pepe Lite!','pepe-lite' ); ?></h3>
		<p class="pepe-welkome-support"><?php esc_html_e('Thank you for choosing Pepe Lite.','pepe-lite');?><br>
		    <?php esc_html_e('The theme is ready to be used. You can customize everything you want in a few simple clicks directly from the front end.', 'pepe-lite' ); ?><br>
			<?php esc_html_e('Pepe Lite is a fast, clean, modern-looking Best Responsive News Magazine WordPress theme. Pepe Lite is suitable for dynamic news, newspapers, magazine, publishers, blogs, editors, online and gaming magazines, newsportals,personal blogs, newspaper, publishing or review siteand any creative website. The theme is fully widgetized, so users can manage the content by using easy to use widgets. Pepe Lite is SEO friendly.','pepe-lite')?>
		  </p>
		  <p class="pepe-welkome-support"><?php esc_html_e('Here you can view the demos and see the previews:','pepe-lite')?><a class="pepe-lite-supp-a-demo" target="_blank" href="<?php echo esc_url(pepe_url_demos_theme)?>"><?php esc_html_e('Demos Pepe Lite','pepe-lite')?></a></p>
		  <div class="container">
		  <h2><?php esc_html_e('Important links to get you started with Pepe Lite','pepe-lite')?></h2>
		  <div class="row">
		  <div class="col-md-4">
		    <h3><?php esc_html_e('Get Started','pepe-lite')?></h3>
		    <button class="at-button-dem"><a target="_blank" href="<?php echo esc_url(pepe_url_basic_documentation);?>"><?php esc_html_e('Learn Basics','pepe-lite')?></a></button>
		  </div>
		  <div class="col-md-4">
			<h3><?php esc_html_e('Next Steps','pepe-lite')?></h3>
			<ul>
			  <li><span class="dashicons dashicons-media-document"></span><a target="_blank" href="<?php echo esc_url(pepe_url_documentation_theme);?>"><?php esc_html_e('Documentation','pepe-lite')?></a></li>
			  <li><span class="dashicons dashicons-layout"></span><a target="_blank" href="<?php echo esc_url(pepe_url_demos_theme);?>"><?php _e('Starter Demos','pepe-lite')?></a></li>
			</ul>
		</div>
		  <div class="col-md-4">
		    <h3><?php esc_html_e('Further Actions','pepe-lite')?></h3>
			<ul>
			  <li><span class="dashicons dashicons-businessperson"></span><a target="_blank" href="<?php echo esc_url(pepe_url_support_theme);?>"><?php esc_html_e('Got theme support question?','pepe-lite')?></a></li>
			  <li><span class="dashicons dashicons-admin-appearance"></span><a target="_blank" href="<?php echo esc_url(pepe_url_update_details);?>"><?php esc_html_e('Changelog','pepe-lite')?></a></li>
			</ul>
		  </div>
         </div>
		</div>
	</div>
	<!-- Help -->
	<div id="Help" class="tabcontent">
		<div class="at-documentation">
	<div class="at-header-help">
	  <h2><?php echo esc_html__('Documentation','pepe-lite');?></h2>
	</div>
	<div class="at-header-help-p">
	   <p><?php echo esc_html__('In this page you can view general frequently asked questions to help you get started.','pepe-lite')?>
	      <?php echo esc_html__('For more, refer to our documentation site or click the links below:','pepe-lite')?></p>
          <div class="at-button-documentation">
		   	<a class="at-read-documentation" target="_blank" href="<?php echo esc_url(pepe_url_documentation_theme); ?>"><?php echo esc_html('Read Documentation','pepe-lite');?></a>
		   <a class="at-theme-support" target="_blank" href="<?php echo esc_url(pepe_url_support_theme); ?>"><?php echo esc_html('Theme Support','pepe-lite');?></a>
	     </div>
       </div>
    </div>
		<h3 class="pepe-welkome-support-title"><?php esc_html_e('Frequently Asked Questions','pepe-lite' ); ?></h3>
		<a href="#" class="togglefaq"><span class="dashicons dashicons-plus at-plus"></span>
		  <?php esc_html_e('I m having difficulty customizing Pepe, can I follow a guide?','pepe-lite')?>
		  <p class="at-number"><?php esc_html_e('1','pepe-lite')?></p>
		</a>
           <div class="faqanswer">
            <p><?php esc_html_e('Yes, you can follow this guide!','pepe-lite')?></p>
            <div class="at-full-article">
              <a target="_blank" href="<?php echo esc_url(pepe_url_documentation_theme); ?>"><?php esc_html_e('VIEW FULL ARTICLE','pepe-lite')?></a>
            </div>
           </div>
		   <a href="#" class="togglefaq"><span class="dashicons dashicons-plus at-plus"></span>
		  <?php esc_html_e('How can I import a demo?','pepe-lite')?>
		  <p class="at-number"><?php esc_html_e('2','pepe-lite')?></p>
		</a>
           <div class="faqanswer">
            <p><?php esc_html_e('To import a demo you have to proceed in this way: visit the demo page and choose a Free demo, download the file and unpack it in your desktop, inside there are 3 files...','pepe-lite')?></p>
            <div class="at-full-article">
              <a target="_blank" href="<?php echo esc_url(pepe_url_documentation_theme); ?>"><?php esc_html_e('VIEW FULL ARTICLE','pepe-lite')?></a>
            </div>
           </div>
		 
		  <div class="at-margin-bottom-tab"></div>
		<div class="pepe-clear-guide-support-admin"></div>
	</div>
<script>
// Get the element with id="defaultOpen" and click on it
jQuery(function($){ 
    document.getElementById("defaultOpen").click();
	});
</script>