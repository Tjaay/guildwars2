<?php

// changes text of excerpt
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">By Ogdens Hammer what savings!</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );



add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
       get_stylesheet_directory_uri() . '/style.css',
       array('parent-style')
   );
}
