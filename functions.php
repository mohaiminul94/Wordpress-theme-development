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
		'add_new_item' => 'Add New Slider'
	),
	'public' => true,
	'supports' => array('title','thumbnail')
));

register_post_type('zboomservices', array(
	'labels' => array(
		'name' =>  'Blocks',
		'add_new_item' => __('Add New Block','zboom')
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
		'before_widget' => '<div class="box">',
		'after_widget' => '</div></div>',
		'before_title' => '<div class="heading"><h2>',
		'after_title' => '</h2></div><div class="content">',
	));
}

add_action('widgets_init','zboom_right_sidebar');

?>