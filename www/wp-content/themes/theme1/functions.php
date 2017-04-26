<?php

function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}    
 
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function register_scripts(){
	wp_enqueue_script('my_script', get_template_directory_uri() . '/js/script.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'register_scripts');

function register_styles(){
	wp_register_style('my_style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('my_style');
}
add_action('wp_enqueue_scripts', 'register_styles');

/**
Добавление меню
**/

