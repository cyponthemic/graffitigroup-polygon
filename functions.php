<?php
function tm_polygon_child_enqueue_scripts() {
  wp_register_style( 'tm-polygon-child-style', get_stylesheet_directory_uri() . '/style.css'  );
  wp_enqueue_style( 'tm-polygon-child-style' );
}
add_action( 'wp_enqueue_scripts', 'tm_polygon_child_enqueue_scripts', 11);