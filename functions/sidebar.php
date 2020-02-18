<?php

function sidebar() {
  register_sidebar([
    'name'          => 'Pie de pagina',
    'id'            => 'footer',
    'description'   => 'Zona de widget para pie de pagina',
    'before_title'  => '<p>',
    'after_title'   => '</p>',
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget'  => '</div>',
  ]);
}

add_action('widgets_init', 'sidebar');