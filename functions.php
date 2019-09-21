<?php

function zboom_theme() {

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');

}

load_theme_textdomain('zboom',get_template_directory_uri().'/languages');

add_action('after_setup_theme','zboom_theme');

if(function_exists('register_nav_menu')) {
	register_nav_menu('main-menu',__('Main menu','zboom'));
}

?>