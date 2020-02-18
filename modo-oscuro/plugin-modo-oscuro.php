<?php

/*

Plugin name: Modo Oscuro
Description: Activa el modo oscuro en tu theme
Version: 1.0
Author: Bernardino Villagra
Author URI: https://github.com/villagrabaez

*/

function styles_plugin() {

  $styles_uri = plugin_dir_url( __FILE__ );

  wp_enqueue_style('modo-oscuro', $styles_uri . '/css/styles.css', '', '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'styles_plugin');