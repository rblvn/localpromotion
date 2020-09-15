<?php

add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', 'localpromotion_assets');

function localpromotion_assets() {

	wp_enqueue_style('maincss', get_template_directory_uri().'/assets/css/main.css');

	wp_enqueue_style('stylecss', get_template_directory_uri().'/assets/css/style.css');

	// wp_enqueue_script('jsmin', get_template_directory_uri() . '/assets/js/js-min.js', array(), '1.0.0', true );

	// wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );

	// wp_enqueue_script('lazysize', get_template_directory_uri() . '/assets/js/lazysizes.min.js');


	// wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery') );

	

	

	if (is_singular('post')){

		wp_enqueue_style('blogcss', get_template_directory_uri().'/assets/css/blog.css');

		wp_enqueue_style('blogmincss', get_template_directory_uri().'/assets/css/blog_1.css');
		

	}

}

