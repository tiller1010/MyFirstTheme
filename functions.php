<?php
	
function load_styles(){
	wp_register_style('style',get_template_directory_uri() . '/style.css',array(),false,'all');
	wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts','load_styles');

function load_scripts(){
	wp_register_script('scripts',get_template_directory_uri() . '/js/scripts.js','',1,true);
	wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts','load_scripts');

add_theme_support('menus');

add_theme_support('post-thumbnails');

add_theme_support('automatic-feed-links');

register_nav_menus(
	array(
		'top-menu' => __('Top Menu','theme'),
	)
);

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 500, 500, true);