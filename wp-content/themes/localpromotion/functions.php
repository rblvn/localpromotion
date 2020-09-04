<?php

add_action('wp_enqueue_scripts', 'localpromotion_assets');

add_theme_support( 'post-thumbnails' );

function localpromotion_assets() {

	wp_enqueue_style('maincss', get_template_directory_uri().'/assets/css/main.css');

	wp_enqueue_style('stylecss', get_template_directory_uri().'/assets/css/style.css');

	wp_enqueue_script('jsmin', get_template_directory_uri() . '/assets/js/js-min.js', array(), '1.0.0', true );

	wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );

	wp_enqueue_script('lazysizesminjs', get_template_directory_uri() . '/assets/js/lazysizes.min.js', array(), '1.0.0', true );

 	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery') );

	if (is_singular('post')){

		// require_once(get_template_directory_uri() . '/assets/ratings/rating.php');
		
		wp_enqueue_style('blogcss', get_template_directory_uri().'/assets/ratings/rating.css');

		wp_enqueue_script('jsmin', get_template_directory_uri() . '/assets/ratings/rating.js', array(), '1.0.0', true );
		
		wp_enqueue_style('blogcss', get_template_directory_uri().'/assets/css/blog.css');

		wp_enqueue_style('blogmincss', get_template_directory_uri().'/assets/css/blog_1.css');
		

	}

}

// //ajax load
// function true_load_posts(){
 
// 	$args = unserialize( stripslashes( $_POST['query'] ) );
// 	$args['paged'] = $_POST['page'] + 1; // следующая страница
// 	$args['post_status'] = 'publish';
 
// 	query_posts( $args );
// 	// если посты есть
// 	if( have_posts() ) :
 
// 		// запускаем цикл
// 		while( have_posts() ): the_post();
 
// 			get_template_part( 'template-parts/post/content', get_post_format() );
 
// 		endwhile;
 
// 	endif;
// 	die();
// }
 
 
