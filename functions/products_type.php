<?php

function products_type() {
  $args = [
    'label'         => 'Productos',
    'description'   => 'Productos de Platzi',
    'labels'        => [
      'name'          => 'Productos',
      'singular_name' => 'Producto',
      'menu_name'     => 'Productos',
    ],
    'supports'      => [
      'title',
      'editor',
      'thumbnail',
      'revisions',
    ],
    'public'        => true,
    'show_in_menu'  => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-cart',
    'can_export'    => true,
    'publicy_queryable' => true,
    'rewrite'       => true,
    'show_in_rest'  => true,
  ];

  register_post_type('productos', $args);
}

add_action('init', 'products_type');