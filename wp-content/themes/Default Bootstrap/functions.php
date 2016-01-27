<?php 


/* Default functions.php */


/* Stylesheets */

function default_scripts() {

	/* wp_enqueue_style('google-fonts', ''); */

	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'onlymarketing-style', get_template_directory_uri() . '/css/main-stylesheet.css' );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array() , false, true );
	wp_enqueue_script( 'website-js', get_template_directory_uri() . '/js/min/site_function-min.js', array() , false, true );

	wp_enqueue_script( 'jquery', 'http://code.jquery.com/jquery-1.11.0.min.js', array() , false, false );

	
}	
add_action( 'wp_enqueue_scripts', 'default_scripts' );


/* Auto rel=canonical removal */

remove_action('wp_head', 'rel_canonical');