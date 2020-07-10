<?php

function load_features(){

wp_enqueue_style('bootstrap',get_theme_file_uri('css/bootstrap.min.css'));
wp_enqueue_style('font-awesome',get_theme_file_uri('css/font-awesome.css'));
wp_enqueue_style('custom-font',get_theme_file_uri('css/custom-font.css'));
wp_enqueue_style('style',get_theme_file_uri('css/style.css'));
wp_enqueue_style('responsive',get_theme_file_uri('css/responsive.css'));
wp_enqueue_style('owl.carousel',get_theme_file_uri('css/owl.carousel.min.css'));
wp_enqueue_style('style1',get_theme_file_uri('css/style1.css'));

wp_enqueue_script('jquery',get_theme_file_uri('js/jquery.js'));
wp_enqueue_script('jquery',get_theme_file_uri('js/jquery.min.js'));
wp_enqueue_script('owl.carousel',get_theme_file_uri('js/owl.carousel.js'));
wp_enqueue_script('bootstrap',get_theme_file_uri('js/bootstrap.min.js'));
wp_enqueue_script('slider',get_theme_file_uri('js/slider.js'));
wp_enqueue_script('mobile-menu',get_theme_file_uri('js/mobile-menu.js'));
wp_enqueue_script('addtoany','https://static.addtoany.com/menu/page.js');

}

add_action('wp_enqueue_scripts','load_features');


add_theme_support('menus');
add_theme_support( 'post-thumbnails',array('post'));
add_theme_support( 'post-thumbnails',array('columbia_blog'));
add_theme_support( 'post-thumbnails',array('Greenville_blog'));

function features(){
	register_nav_menu('Colubia','Columbia Header Menu');
	register_nav_menu('Greenville','Greenville Header Menu');
}

add_action('after_setup_theme','features');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

function create_posttype(){
	register_post_type('columbia_blog',array(
		'supports'=>array('title','editor','thumbnail'),
		'public'=>true,
		'labels'=>array(
			'name'=>'Columbia Blog',
			'add_new_item'=>'Add New Blog',
			'edit_item'=>'Edit Blog',
			'all_items'=>'All Blog',
			'singular_name'=>'Blog'
		),	
		'menu_icon'=>'dashicons-book-alt'
	));

	register_post_type('Greenville_blog',array(
		'supports'=>array('title','editor','thumbnail'),
		'public'=>true,
		'labels'=>array(
			'name'=>'Greenville Blog',
			'add_new_item'=>'Add New Blog',
			'edit_item'=>'Edit Blog',
			'all_items'=>'All Blog',
			'singular_name'=>'Blog'
		),	
		'menu_icon'=>'dashicons-welcome-write-blog',
	));
}

add_action('init','create_posttype');

function my_custom_theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    // other options
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );

function create_taxonomy(){

register_taxonomy('col_cat',array('columbia_blog'), array(
    'hierarchical' => true,
  ));

register_taxonomy('grn_cat',array('greenville_blog'),array(
	'hierarchical' => true,
));
}

add_action( 'init', 'create_taxonomy');