<?php
$labels = array(
    'name' => _x( 'Clientes', 'post type general name' ),
    'singular_name' => _x( 'Clientes', 'post type singular name' ),
    'add_new' => _x( 'Agregar nuevo', 'Conductor' ),
    'add_new_item' => __( 'Agregar nuevo' ),
    'edit_item' => __( 'Editar' ),
    'new_item' => __( 'Nuevo' ),
    'view_item' => __( 'Ver' ),
    'search_items' => __( 'Buscar' ),
    'not_found' =>  __( 'No se han encontrado resultados' ),
    'not_found_in_trash' => __( 'No se han encontrado resultados en la papelera' ),
    'parent_item_colon' => ''
);

$args = array( 'labels' => $labels,
    'public' => false,
    'publicly_queryable' => false,
    'show_ui' => true,
    'has_archive' => false,
    'show_in_menu' => true,
    'show_in_nav_menu' => false,
    'exclude_from_search' => true,
    'can_export' => true,
    'query_var' => false,
    'menu_icon' => 'dashicons-admin-users',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'thumbnail' )
);

register_post_type('clients', $args ); 