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