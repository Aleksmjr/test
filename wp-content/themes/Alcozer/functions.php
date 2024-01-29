<?php

// подключение стилей и скриптов


add_action( 'wp_enqueue_scripts', 'alcozer_styles' );

function alcozer_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array('main') );
	wp_enqueue_style( 'lineicons', get_template_directory_uri() . '/assets/css/lineicons.css', array('bootstrap') );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array('lineicons') );
	
}
add_action( 'wp_footer', 'alcozer_scripts' );

function alcozer_scripts() {
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
wp_enqueue_script( 'main_script', get_template_directory_uri() . '/assets/js/script.js', array('bootstrap'));



}