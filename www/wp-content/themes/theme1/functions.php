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

    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
     add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' ); 

function woo_style() {
wp_register_style( 'my-woocommerce', get_template_directory_uri() . '/woocommerce.css');
wp_enqueue_style( 'my-woocommerce' ); } add_action( 'wp_enqueue_scripts', 'woo_style');
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
add_action( 'woocommerce_after_shop_loop_item_title', 'shop_sku' );
function shop_sku(){
global $product;
echo '<span itemprop="productID" class="sku">Артикул: ' . $product->sku . '</span>';
}
add_filter( 'woocommerce_currencies', 'add_my_currency' );
function add_my_currency( $currencies ) {
$currencies['ABC'] = __( 'Гривна укр', 'woocommerce' );
return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
switch( $currency ) {
case 'ABC': $currency_symbol = 'грн'; break;
}
return $currency_symbol;
}
add_filter( 'woocommerce_subcategory_count_html', 'jk_hide_category_count' );
function jk_hide_category_count() {
}
/**Добавление меню **/
register_nav_menu('menu', 'Mainmenu');

register_nav_menu('menu_side', 'Left_menu');
