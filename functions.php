<?php


add_action('wp_enqueue_scripts', function() {

	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap');
    wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
	wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );

	
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('menus');

add_filter( 'upload_mimes', 'svg_upload_allow' );


function svg_upload_allow( $mimes ) {	
	$mimes['svg']  = 'image/svg+xml';
	
	return $mimes;
}

?>