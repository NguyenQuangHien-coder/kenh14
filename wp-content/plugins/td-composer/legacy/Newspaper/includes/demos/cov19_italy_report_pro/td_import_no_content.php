<?php
/*  ---------------------------------------------------------------------------- 
	PAGES
*/
$page_homepage_id = td_demo_content::add_page(array(
	'title' => 'Homepage',
	'file' => 'homepage.txt',
	'homepage' => true,
));


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_tag_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Tag Template - Italy Report PRO',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_italy_report_pro_id);


$template_date_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Date Template - Italy Report PRO',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));
td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_italy_report_pro_id);


$template_404_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => '404 Template - Italy Report PRO',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));
td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_italy_report_pro_id);


$template_search_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Search Template - Italy Report PRO',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_italy_report_pro_id);


$template_author_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Author Template - Italy Report PRO',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_italy_report_pro_id);


$template_category_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Category Template - Italy Report PRO',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_italy_report_pro_id);


$template_single_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Single Template - Italy Report PRO',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_italy_report_pro_id);


$template_footer_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Footer Template - Italy Report PRO',
	'file' => 'footer_cloud_template.txt',
	'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_italy_report_pro_id);


$template_header_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Header Template - Italy Report PRO',
	'file' => 'header_cloud_template.txt',
	'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_italy_report_pro_id);



/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_7');

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
