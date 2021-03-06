<?php

// time: 1495384779


function themify_import_get_term_id_from_slug( $slug ) {
	$menu = get_term_by( "slug", $slug, "nav_menu" );
	return is_wp_error( $menu ) ? 0 : (int) $menu->term_id;
}

	$widgets = get_option( "widget_archives" );
$widgets[1002] = array (
  'title' => '',
  'count' => 0,
  'dropdown' => 0,
);
update_option( "widget_archives", $widgets );

$widgets = get_option( "widget_meta" );
$widgets[1003] = array (
  'title' => '',
);
update_option( "widget_meta", $widgets );

$widgets = get_option( "widget_search" );
$widgets[1004] = array (
  'title' => '',
);
update_option( "widget_search", $widgets );

$widgets = get_option( "widget_categories" );
$widgets[1005] = array (
  'title' => '',
  'count' => 0,
  'hierarchical' => 0,
  'dropdown' => 0,
);
update_option( "widget_categories", $widgets );

$widgets = get_option( "widget_recent-posts" );
$widgets[1006] = array (
  'title' => '',
  'number' => 5,
);
update_option( "widget_recent-posts", $widgets );

$widgets = get_option( "widget_recent-comments" );
$widgets[1007] = array (
  'title' => '',
  'number' => 5,
);
update_option( "widget_recent-comments", $widgets );

$widgets = get_option( "widget_themify-feature-posts" );
$widgets[1008] = array (
  'title' => 'Recent Posts',
  'category' => '0',
  'show_count' => '3',
  'show_date' => 'on',
  'show_thumb' => 'on',
  'display' => 'none',
  'hide_title' => NULL,
  'thumb_width' => '50',
  'thumb_height' => '50',
  'excerpt_length' => '55',
  'orderby' => 'date',
  'order' => 'DESC',
);
update_option( "widget_themify-feature-posts", $widgets );

$widgets = get_option( "widget_themify-feature-posts" );
$widgets[1009] = array (
  'title' => 'Recent Posts',
  'category' => '0',
  'show_count' => '2',
  'show_date' => 'on',
  'show_thumb' => 'on',
  'display' => 'none',
  'hide_title' => NULL,
  'thumb_width' => '50',
  'thumb_height' => '50',
  'excerpt_length' => '55',
  'orderby' => 'date',
  'order' => 'DESC',
);
update_option( "widget_themify-feature-posts", $widgets );

$widgets = get_option( "widget_themify-social-links" );
$widgets[1010] = array (
  'title' => '',
  'show_link_name' => NULL,
  'open_new_window' => NULL,
  'icon_size' => 'icon-medium',
  'orientation' => 'horizontal',
);
update_option( "widget_themify-social-links", $widgets );

$widgets = get_option( "widget_themify-social-links" );
$widgets[1011] = array (
  'title' => '',
  'show_link_name' => NULL,
  'open_new_window' => NULL,
  'icon_size' => 'icon-medium',
  'orientation' => 'horizontal',
);
update_option( "widget_themify-social-links", $widgets );

$widgets = get_option( "widget_themify-social-links" );
$widgets[1012] = array (
  'title' => '',
  'show_link_name' => NULL,
  'open_new_window' => NULL,
  'icon_size' => 'icon-large',
  'orientation' => 'horizontal',
);
update_option( "widget_themify-social-links", $widgets );

$widgets = get_option( "widget_themify-twitter" );
$widgets[1013] = array (
  'title' => 'Latest Tweets',
  'username' => 'themify',
  'show_count' => '3',
  'hide_timestamp' => NULL,
  'show_follow' => 'on',
  'follow_text' => '→ Follow me',
  'include_retweets' => 'on',
  'exclude_replies' => NULL,
);
update_option( "widget_themify-twitter", $widgets );

$widgets = get_option( "widget_themify-twitter" );
$widgets[1014] = array (
  'title' => 'Latest Tweets',
  'username' => 'themify',
  'show_count' => '2',
  'hide_timestamp' => NULL,
  'show_follow' => NULL,
  'follow_text' => '→ Follow me',
  'include_retweets' => NULL,
  'exclude_replies' => NULL,
);
update_option( "widget_themify-twitter", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1015] = array (
  'title' => 'Widget 1',
  'text' => 'Optional widget here',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1016] = array (
  'title' => 'Widget 2',
  'text' => 'Display any widget here',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1017] = array (
  'title' => 'Widget 3',
  'text' => 'For example, phone #: 123-333-4567',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_archives" );
$widgets[1018] = array (
  'title' => '',
  'count' => 0,
  'dropdown' => 0,
);
update_option( "widget_archives", $widgets );

$widgets = get_option( "widget_meta" );
$widgets[1019] = array (
  'title' => '',
);
update_option( "widget_meta", $widgets );

$widgets = get_option( "widget_search" );
$widgets[1020] = array (
  'title' => '',
);
update_option( "widget_search", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1021] = array (
  'title' => 'Widget 1',
  'text' => 'Optional widget here',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1022] = array (
  'title' => 'Widget 2',
  'text' => 'Optional widget here',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1023] = array (
  'title' => 'Widget 3',
  'text' => 'Optional widget here',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_categories" );
$widgets[1024] = array (
  'title' => '',
  'count' => 0,
  'hierarchical' => 0,
  'dropdown' => 0,
);
update_option( "widget_categories", $widgets );

$widgets = get_option( "widget_recent-posts" );
$widgets[1025] = array (
  'title' => '',
  'number' => 5,
);
update_option( "widget_recent-posts", $widgets );

$widgets = get_option( "widget_recent-comments" );
$widgets[1026] = array (
  'title' => '',
  'number' => 5,
);
update_option( "widget_recent-comments", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1027] = array (
  'title' => 'Address',
  'text' => '25 Ohio St. Cleveland. MA<br/>
(912) 555-8900<br/>
<a href="https://themify.me/">themify.me</a>',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1028] = array (
  'title' => 'Hours',
  'text' => 'MON - FRI 9AM -11PM<br/>
SAT - SUN 5PM - 2AM<br/>
Bar open only on weekends',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_themify-twitter" );
$widgets[1029] = array (
  'title' => 'Latest Tweets',
  'username' => 'themify',
  'show_count' => '2',
  'hide_timestamp' => NULL,
  'show_follow' => NULL,
  'follow_text' => '→ Follow me',
  'include_retweets' => 'on',
  'exclude_replies' => NULL,
);
update_option( "widget_themify-twitter", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1030] = array (
  'title' => 'Address',
  'text' => '25 Ohio St. Cleveland. MA<br/>
(912) 555-8900<br/>
<a href="https://themify.me/">themify.me</a>',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_mc4wp_form_widget" );
$widgets[1031] = array (
  'title' => 'Subscribe',
);
update_option( "widget_mc4wp_form_widget", $widgets );

$widgets = get_option( "widget_themify-social-links" );
$widgets[1032] = array (
  'title' => '',
  'show_link_name' => NULL,
  'open_new_window' => NULL,
  'icon_size' => 'icon-large',
  'orientation' => 'horizontal',
);
update_option( "widget_themify-social-links", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1033] = array (
  'title' => 'Hours',
  'text' => 'MON - FRI 9AM -11PM<br/>
SAT - SUN 5PM - 2AM<br/>
Bar open only on weekends',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1034] = array (
  'title' => '',
  'text' => '',
  'filter' => false,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1035] = array (
  'title' => 'About',
  'text' => 'The Ultra theme is Themify\'s flagship theme. It\'s a WordPress designed to give you more control on the design of your theme. Built to work seamlessly with our drag & drop Builder plugin, it gives you the ability to customize the look and feel of your content. ',
  'filter' => false,
);
update_option( "widget_text", $widgets );



$sidebars_widgets = array (
  'wp_inactive_widgets' => 
  array (
    0 => 'archives-1002',
    1 => 'meta-1003',
    2 => 'search-1004',
    3 => 'categories-1005',
    4 => 'recent-posts-1006',
    5 => 'recent-comments-1007',
    6 => 'themify-feature-posts-1008',
    7 => 'themify-feature-posts-1009',
    8 => 'themify-social-links-1010',
    9 => 'themify-social-links-1011',
    10 => 'themify-social-links-1012',
    11 => 'themify-twitter-1013',
    12 => 'themify-twitter-1014',
    13 => 'text-1015',
    14 => 'text-1016',
    15 => 'text-1017',
    16 => 'archives-1018',
    17 => 'meta-1019',
    18 => 'search-1020',
    19 => 'text-1021',
    20 => 'text-1022',
    21 => 'text-1023',
    22 => 'categories-1024',
    23 => 'recent-posts-1025',
    24 => 'recent-comments-1026',
  ),
  'sidebar-main' => 
  array (
    0 => 'text-1027',
    1 => 'text-1028',
    2 => 'themify-twitter-1029',
  ),
  'footer-widget-1' => 
  array (
    0 => 'text-1030',
  ),
  'footer-widget-2' => 
  array (
    0 => 'mc4wp_form_widget-1031',
    1 => 'themify-social-links-1032',
  ),
  'footer-widget-3' => 
  array (
    0 => 'text-1033',
  ),
  'orphaned_widgets_1' => 
  array (
    0 => 'text-1034',
  ),
  'orphaned_widgets_5' => 
  array (
    0 => 'text-1035',
  ),
); 
update_option( "sidebars_widgets", $sidebars_widgets );

$menu_locations = array();
$menu = get_terms( "nav_menu", array( "slug" => "restaurant-menu" ) );
if( is_array( $menu ) && ! empty( $menu ) ) $menu_locations["main-nav"] = $menu[0]->term_id;
$menu = get_terms( "nav_menu", array( "slug" => "restaurant-menu" ) );
if( is_array( $menu ) && ! empty( $menu ) ) $menu_locations["footer-nav"] = $menu[0]->term_id;
set_theme_mod( "nav_menu_locations", $menu_locations );


$homepage = get_posts( array( 'name' => 'home', 'post_type' => 'page' ) );
			if( is_array( $homepage ) && ! empty( $homepage ) ) {
				update_option( 'show_on_front', 'page' );
				update_option( 'page_on_front', $homepage[0]->ID );
			}
			
	ob_start(); ?>a:249:{s:15:"setting-favicon";s:0:"";s:23:"setting-custom_feed_url";s:0:"";s:19:"setting-header_html";s:0:"";s:19:"setting-footer_html";s:0:"";s:23:"setting-search_settings";s:0:"";s:16:"setting-page_404";s:4:"5859";s:21:"setting-feed_settings";s:0:"";s:21:"setting-webfonts_list";s:11:"recommended";s:24:"setting-webfonts_subsets";s:0:"";s:22:"setting-default_layout";s:12:"sidebar-none";s:27:"setting-default_post_layout";s:9:"list-post";s:27:"setting-post_content_layout";s:0:"";s:23:"setting-disable_masonry";s:3:"yes";s:19:"setting-post_gutter";s:6:"gutter";s:30:"setting-default_layout_display";s:7:"content";s:25:"setting-default_more_text";s:4:"More";s:21:"setting-index_orderby";s:4:"date";s:19:"setting-index_order";s:4:"DESC";s:26:"setting-default_post_title";s:0:"";s:33:"setting-default_unlink_post_title";s:0:"";s:25:"setting-default_post_meta";s:0:"";s:32:"setting-default_post_meta_author";s:3:"yes";s:34:"setting-default_post_meta_category";s:0:"";s:33:"setting-default_post_meta_comment";s:0:"";s:29:"setting-default_post_meta_tag";s:0:"";s:25:"setting-default_post_date";s:0:"";s:30:"setting-default_media_position";s:5:"above";s:26:"setting-default_post_image";s:0:"";s:33:"setting-default_unlink_post_image";s:0:"";s:31:"setting-image_post_feature_size";s:5:"blank";s:24:"setting-image_post_width";s:0:"";s:25:"setting-image_post_height";s:0:"";s:32:"setting-default_page_post_layout";s:8:"sidebar1";s:37:"setting-default_page_post_layout_type";s:7:"classic";s:31:"setting-default_page_post_title";s:0:"";s:38:"setting-default_page_unlink_post_title";s:0:"";s:30:"setting-default_page_post_meta";s:2:"no";s:37:"setting-default_page_post_meta_author";s:3:"yes";s:39:"setting-default_page_post_meta_category";s:0:"";s:38:"setting-default_page_post_meta_comment";s:0:"";s:34:"setting-default_page_post_meta_tag";s:0:"";s:30:"setting-default_page_post_date";s:0:"";s:31:"setting-default_page_post_image";s:0:"";s:38:"setting-default_page_unlink_post_image";s:0:"";s:38:"setting-image_post_single_feature_size";s:5:"blank";s:31:"setting-image_post_single_width";s:0:"";s:32:"setting-image_post_single_height";s:0:"";s:27:"setting-default_page_layout";s:8:"sidebar1";s:23:"setting-hide_page_title";s:0:"";s:23:"setting-hide_page_image";s:0:"";s:33:"setting-page_featured_image_width";s:0:"";s:34:"setting-page_featured_image_height";s:0:"";s:38:"setting-default_portfolio_index_layout";s:12:"sidebar-none";s:43:"setting-default_portfolio_index_post_layout";s:5:"grid3";s:32:"setting-portfolio_content_layout";s:0:"";s:33:"setting-portfolio_disable_masonry";s:3:"yes";s:24:"setting-portfolio_gutter";s:6:"gutter";s:39:"setting-default_portfolio_index_display";s:4:"none";s:37:"setting-default_portfolio_index_title";s:0:"";s:49:"setting-default_portfolio_index_unlink_post_title";s:0:"";s:50:"setting-default_portfolio_index_post_meta_category";s:3:"yes";s:49:"setting-default_portfolio_index_unlink_post_image";s:3:"yes";s:48:"setting-default_portfolio_index_image_post_width";s:0:"";s:49:"setting-default_portfolio_index_image_post_height";s:0:"";s:54:"setting-default_portfolio_single_portfolio_layout_type";s:9:"fullwidth";s:38:"setting-default_portfolio_single_title";s:0:"";s:50:"setting-default_portfolio_single_unlink_post_title";s:0:"";s:51:"setting-default_portfolio_single_post_meta_category";s:0:"";s:50:"setting-default_portfolio_single_unlink_post_image";s:3:"yes";s:49:"setting-default_portfolio_single_image_post_width";s:0:"";s:50:"setting-default_portfolio_single_image_post_height";s:0:"";s:22:"themify_portfolio_slug";s:7:"project";s:53:"setting-customizer_responsive_design_tablet_landscape";s:4:"1024";s:43:"setting-customizer_responsive_design_tablet";s:3:"768";s:43:"setting-customizer_responsive_design_mobile";s:3:"480";s:33:"setting-mobile_menu_trigger_point";s:4:"1200";s:24:"setting-gallery_lightbox";s:8:"lightbox";s:26:"setting-page_builder_cache";s:2:"on";s:27:"setting-script_minification";s:7:"disable";s:27:"setting-page_builder_expiry";s:1:"2";s:20:"setting-color_design";s:7:"default";s:19:"setting-font_design";s:7:"default";s:21:"setting-header_design";s:17:"header-horizontal";s:28:"setting-exclude_site_tagline";s:2:"on";s:27:"setting-exclude_search_form";s:2:"on";s:19:"setting-exclude_rss";s:2:"on";s:30:"setting-exclude_header_widgets";s:2:"on";s:29:"setting-exclude_social_widget";s:2:"on";s:22:"setting-header_widgets";s:4:"none";s:21:"setting-footer_design";s:12:"footer-block";s:32:"setting-exclude_footer_site_logo";s:2:"on";s:38:"setting-exclude_footer_menu_navigation";s:2:"on";s:22:"setting-footer_widgets";s:17:"footerwidget-3col";s:30:"setting-footer_widget_position";s:3:"top";s:27:"setting-imagefilter_options";s:0:"";s:33:"setting-imagefilter_options_hover";s:0:"";s:27:"setting-imagefilter_applyto";s:12:"featuredonly";s:25:"setting-page_loader_color";s:0:"";s:24:"setting-page_loader_icon";s:0:"";s:29:"setting-color_animation_speed";s:1:"5";s:20:"setting-color_stop_1";s:0:"";s:20:"setting-color_stop_2";s:0:"";s:20:"setting-color_stop_3";s:0:"";s:20:"setting-color_stop_4";s:0:"";s:20:"setting-color_stop_5";s:0:"";s:20:"setting-color_stop_6";s:0:"";s:20:"setting-color_stop_7";s:0:"";s:29:"setting-relationship_taxonomy";s:8:"category";s:37:"setting-relationship_taxonomy_entries";s:1:"3";s:45:"setting-relationship_taxonomy_display_content";s:4:"none";s:30:"setting-single_slider_autoplay";s:3:"off";s:27:"setting-single_slider_speed";s:6:"normal";s:28:"setting-single_slider_effect";s:5:"slide";s:28:"setting-single_slider_height";s:4:"auto";s:18:"setting-more_posts";s:8:"infinite";s:19:"setting-entries_nav";s:8:"numbered";s:24:"setting-footer_text_left";s:0:"";s:25:"setting-footer_text_right";s:0:"";s:27:"setting-global_feature_size";s:5:"blank";s:22:"setting-link_icon_type";s:9:"font-icon";s:32:"setting-link_type_themify-link-0";s:10:"image-icon";s:33:"setting-link_title_themify-link-0";s:7:"Twitter";s:32:"setting-link_link_themify-link-0";s:0:"";s:31:"setting-link_img_themify-link-0";s:110:"https://themify.me/demo/themes/ultra-restaurant/wp-content/themes/themify-ultra/themify/img/social/twitter.png";s:32:"setting-link_type_themify-link-1";s:10:"image-icon";s:33:"setting-link_title_themify-link-1";s:8:"Facebook";s:32:"setting-link_link_themify-link-1";s:0:"";s:31:"setting-link_img_themify-link-1";s:111:"https://themify.me/demo/themes/ultra-restaurant/wp-content/themes/themify-ultra/themify/img/social/facebook.png";s:32:"setting-link_type_themify-link-2";s:10:"image-icon";s:33:"setting-link_title_themify-link-2";s:7:"Google+";s:32:"setting-link_link_themify-link-2";s:0:"";s:31:"setting-link_img_themify-link-2";s:114:"https://themify.me/demo/themes/ultra-restaurant/wp-content/themes/themify-ultra/themify/img/social/google-plus.png";s:32:"setting-link_type_themify-link-3";s:10:"image-icon";s:33:"setting-link_title_themify-link-3";s:7:"YouTube";s:32:"setting-link_link_themify-link-3";s:0:"";s:31:"setting-link_img_themify-link-3";s:110:"https://themify.me/demo/themes/ultra-restaurant/wp-content/themes/themify-ultra/themify/img/social/youtube.png";s:32:"setting-link_type_themify-link-4";s:10:"image-icon";s:33:"setting-link_title_themify-link-4";s:9:"Pinterest";s:32:"setting-link_link_themify-link-4";s:0:"";s:31:"setting-link_img_themify-link-4";s:112:"https://themify.me/demo/themes/ultra-restaurant/wp-content/themes/themify-ultra/themify/img/social/pinterest.png";s:32:"setting-link_type_themify-link-8";s:9:"font-icon";s:33:"setting-link_title_themify-link-8";s:7:"YouTube";s:32:"setting-link_link_themify-link-8";s:19:"https://themify.me/";s:33:"setting-link_ficon_themify-link-8";s:10:"fa-youtube";s:35:"setting-link_ficolor_themify-link-8";s:0:"";s:37:"setting-link_fibgcolor_themify-link-8";s:0:"";s:33:"setting-link_type_themify-link-10";s:9:"font-icon";s:34:"setting-link_title_themify-link-10";s:9:"Instagram";s:33:"setting-link_link_themify-link-10";s:19:"https://themify.me/";s:34:"setting-link_ficon_themify-link-10";s:12:"fa-instagram";s:36:"setting-link_ficolor_themify-link-10";s:0:"";s:38:"setting-link_fibgcolor_themify-link-10";s:0:"";s:32:"setting-link_type_themify-link-5";s:9:"font-icon";s:33:"setting-link_title_themify-link-5";s:7:"Twitter";s:32:"setting-link_link_themify-link-5";s:19:"https://themify.me/";s:33:"setting-link_ficon_themify-link-5";s:10:"fa-twitter";s:35:"setting-link_ficolor_themify-link-5";s:0:"";s:37:"setting-link_fibgcolor_themify-link-5";s:0:"";s:32:"setting-link_type_themify-link-6";s:9:"font-icon";s:33:"setting-link_title_themify-link-6";s:8:"Facebook";s:32:"setting-link_link_themify-link-6";s:19:"https://themify.me/";s:33:"setting-link_ficon_themify-link-6";s:11:"fa-facebook";s:35:"setting-link_ficolor_themify-link-6";s:0:"";s:37:"setting-link_fibgcolor_themify-link-6";s:0:"";s:22:"setting-link_field_ids";s:309:"{"themify-link-0":"themify-link-0","themify-link-1":"themify-link-1","themify-link-2":"themify-link-2","themify-link-3":"themify-link-3","themify-link-4":"themify-link-4","themify-link-8":"themify-link-8","themify-link-10":"themify-link-10","themify-link-5":"themify-link-5","themify-link-6":"themify-link-6"}";s:23:"setting-link_field_hash";s:2:"11";s:30:"setting-page_builder_is_active";s:6:"enable";s:41:"setting-page_builder_animation_appearance";s:0:"";s:42:"setting-page_builder_animation_parallax_bg";s:0:"";s:46:"setting-page_builder_animation_parallax_scroll";s:6:"mobile";s:55:"setting-page_builder_responsive_design_tablet_landscape";s:4:"1024";s:45:"setting-page_builder_responsive_design_tablet";s:3:"768";s:45:"setting-page_builder_responsive_design_mobile";s:3:"680";s:22:"setting-google_map_key";s:39:"AIzaSyAxCUxWKTKZqXOzxdUSVQFaLbh3UnkhLc4";s:23:"setting-hooks_field_ids";s:2:"[]";s:27:"setting-custom_panel-editor";s:7:"default";s:27:"setting-custom_panel-author";s:7:"default";s:32:"setting-custom_panel-contributor";s:7:"default";s:25:"setting-customizer-editor";s:7:"default";s:25:"setting-customizer-author";s:7:"default";s:30:"setting-customizer-contributor";s:7:"default";s:22:"setting-backend-editor";s:7:"default";s:22:"setting-backend-author";s:7:"default";s:27:"setting-backend-contributor";s:7:"default";s:23:"setting-frontend-editor";s:7:"default";s:23:"setting-frontend-author";s:7:"default";s:28:"setting-frontend-contributor";s:7:"default";s:16:"setting-fontello";s:0:"";s:4:"skin";s:106:"https://themify.me/demo/themes/ultra-restaurant/wp-content/themes/themify-ultra/skins/restaurant/style.css";s:27:"setting-search_exclude_post";s:0:"";s:31:"setting-search_settings_exclude";s:0:"";s:32:"setting-search_exclude_portfolio";s:0:"";s:23:"setting-exclude_img_rss";s:0:"";s:20:"setting-excerpt_more";s:0:"";s:35:"setting-default_display_date_inline";s:0:"";s:27:"setting-auto_featured_image";s:0:"";s:40:"setting-default_page_display_date_inline";s:0:"";s:22:"setting-comments_posts";s:0:"";s:23:"setting-post_author_box";s:0:"";s:24:"setting-post_nav_disable";s:0:"";s:25:"setting-post_nav_same_cat";s:0:"";s:22:"setting-comments_pages";s:0:"";s:29:"setting-portfolio_nav_disable";s:0:"";s:30:"setting-portfolio_nav_same_cat";s:0:"";s:33:"setting-disable_responsive_design";s:0:"";s:31:"setting-lightbox_content_images";s:0:"";s:18:"setting-cache_gzip";s:0:"";s:29:"setting-fixed_header_disabled";s:0:"";s:26:"setting-full_height_header";s:0:"";s:25:"setting-exclude_site_logo";s:0:"";s:31:"setting-exclude_menu_navigation";s:0:"";s:30:"setting-exclude_footer_widgets";s:0:"";s:28:"setting-exclude_footer_texts";s:0:"";s:27:"setting-exclude_footer_back";s:0:"";s:38:"setting-header_color_animation_enabled";s:0:"";s:38:"setting-footer_color_animation_enabled";s:0:"";s:40:"setting-relationship_taxonomy_hide_image";s:0:"";s:20:"setting-autoinfinite";s:0:"";s:29:"setting-footer_text_left_hide";s:0:"";s:30:"setting-footer_text_right_hide";s:0:"";s:38:"setting-page_builder_disable_shortcuts";s:0:"";s:34:"setting-page_builder_exc_accordion";s:0:"";s:28:"setting-page_builder_exc_box";s:0:"";s:32:"setting-page_builder_exc_buttons";s:0:"";s:32:"setting-page_builder_exc_callout";s:0:"";s:32:"setting-page_builder_exc_contact";s:0:"";s:32:"setting-page_builder_exc_divider";s:0:"";s:38:"setting-page_builder_exc_fancy-heading";s:0:"";s:32:"setting-page_builder_exc_feature";s:0:"";s:32:"setting-page_builder_exc_gallery";s:0:"";s:34:"setting-page_builder_exc_highlight";s:0:"";s:29:"setting-page_builder_exc_icon";s:0:"";s:30:"setting-page_builder_exc_image";s:0:"";s:36:"setting-page_builder_exc_layout-part";s:0:"";s:28:"setting-page_builder_exc_map";s:0:"";s:33:"setting-page_builder_exc_maps-pro";s:0:"";s:29:"setting-page_builder_exc_menu";s:0:"";s:35:"setting-page_builder_exc_plain-text";s:0:"";s:34:"setting-page_builder_exc_portfolio";s:0:"";s:29:"setting-page_builder_exc_post";s:0:"";s:37:"setting-page_builder_exc_service-menu";s:0:"";s:31:"setting-page_builder_exc_slider";s:0:"";s:28:"setting-page_builder_exc_tab";s:0:"";s:43:"setting-page_builder_exc_testimonial-slider";s:0:"";s:36:"setting-page_builder_exc_testimonial";s:0:"";s:29:"setting-page_builder_exc_text";s:0:"";s:30:"setting-page_builder_exc_video";s:0:"";s:31:"setting-page_builder_exc_widget";s:0:"";s:35:"setting-page_builder_exc_widgetized";s:0:"";}<?php $themify_data = unserialize( ob_get_clean() );

	// fix the weird way "skin" is saved
	if( isset( $themify_data['skin'] ) ) {
		$parsed_skin = parse_url( $themify_data['skin'], PHP_URL_PATH );
		$basedir_skin = basename( dirname( $parsed_skin ) );
		$themify_data['skin'] = trailingslashit( get_template_directory_uri() ) . 'skins/' . $basedir_skin . '/style.css';
	}

	themify_set_data( $themify_data );
	?>