<?php

function services_widget_init() {

    register_sidebar( array(
        'name'          => 'Servicios',
        'before_widget' => '<div class="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => 'Texto principal',
        'before_widget' => '<p>',
        'after_widget'  => '</p>',
        'before_title'  => '<h1>',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => 'Sobre nosotros 1',
        'before_widget' => '',
        'after_widget'  => '',
    ) );

    register_sidebar( array(
        'name'          => 'Sobre nosotros 2',
        'before_widget' => '',
        'after_widget'  => '',
    ) );

}
add_action( 'widgets_init', 'services_widget_init' );