<?php

add_theme_support( 'post-thumbnails' ); 

register_nav_menu( 'primary', 'Primary Menu' );

function add_scripts() {
  wp_enqueue_script( 'responsive_nav', get_template_directory_uri() . '/scripts/nav.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'add_scripts' );