<?php

function services_widget_init() {

    register_sidebar( array(
        'name'          => 'Servicios',
        'before_widget' => '<div class="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'services_widget_init' );