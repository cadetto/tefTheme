<?php



add_theme_support( 'post-thumbnails' );

function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function enqueue_main_scripts(){
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/assets/css/tef-theme-main.css',
    );

    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/assets/js/tef-theme-main.js',
        array('jquery')
    );

    wp_enqueue_style(
        'slick-carousel-css',
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'
    );

    wp_enqueue_script(
        'slick-carousel-js',
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array('jquery')
    );

    wp_enqueue_script(
        'font-awesome-icons',
        'https://kit.fontawesome.com/f7a2194c2f.js',
    );

}
add_action( 'wp_enqueue_scripts', 'enqueue_main_scripts' );


function tef_custom_menu() {
    register_nav_menu('tef-custom-menu',__( 'Menu principal' ));
}
add_action( 'after_setup_theme', 'tef_custom_menu' );

add_filter( 'widget_title', 'remove_widget_title' );
function remove_widget_title( $widget_title ) {
    if ( substr ( $widget_title, 0, 1 ) == '!' )
        return;
    else
        return ( $widget_title );
}

function ms_setup() {
    add_image_size( 'slider', 100, 100, true );
}
    add_action( 'after_setup_theme', 'ms_setup' );



require_once get_template_directory() . '/inc/carousel-cpt.php';
require_once get_template_directory() . '/inc/clients-cpt.php';
require_once get_template_directory() . '/inc/widget-areas.php';

