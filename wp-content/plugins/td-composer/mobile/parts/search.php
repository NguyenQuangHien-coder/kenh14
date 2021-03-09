<div class="td-search-background"></div>
<div class="td-search-wrap">
	<div class="td-drop-down-search">
		<form method="get" class="td-search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
			<!-- close button -->
			<div class="td-search-close">
				<a href="#"><i class="td-icon-close-mobile"></i></a>
			</div>
			<?php if (td_util::get_option('tds_live_search_mob') != 'hide') { ?>

				<div role="search" class="td-search-input">
				<span><?php _etd('Search', TD_THEME_NAME)?></span>

					<input id="td-header-search" type="text" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
					<input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="<?php _etd('Search', TD_THEME_NAME)?>" />
				</div>

			<?php } else { ?>

				<div role="search" class="td-search-input" >
					<span><?php _etd('Search', TD_THEME_NAME)?></span>
					<input id="td-header-search-no-ajax" type="text" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
				</div>

			<div class="td-search-submit">
					<input class="" type="submit" value="<?php _etd('Search', TD_THEME_NAME)?>" />
			</div>
				<?php } ?>

		</form>
		<div id="td-aj-search"></div>
	</div>
</div>