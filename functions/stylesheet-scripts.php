<?php

function assets() {

  // CSS
  wp_register_style('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', '', 'all');

  wp_register_style('Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap', '', 'all');
  
  wp_enqueue_style('Estilos', THEMEROOT . '/css/styles.css', ['Bootstrap', 'Montserrat'] , '1.0', 'all');

  // JS
  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', '1.16.0', true);

  wp_register_script('Font-Awesome', 'https://kit.fontawesome.com/4e79ed1d59.js', '', '5', true);

  wp_register_script('App', THEMEROOT . '/js/app.js', '', '1.0', 'all');

  wp_enqueue_script('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['jquery', 'popper', 'Font-Awesome', 'App'], '4.4.1', true);
}

add_action('wp_enqueue_scripts', 'assets');