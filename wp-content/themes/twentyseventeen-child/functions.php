<?php


// changes text of excerpt read more
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">More Shinies!</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

// adds twitter and facebook to contact methods of users
function wpb_new_contactmethods( $contactmethods ) {
    // Add Twitter
    $contactmethods['twitter'] = 'Twitter';
    //add Facebook
    $contactmethods['facebook'] = 'Facebook';
     
    return $contactmethods;
    }
    add_filter('user_contactmethods','wpb_new_contactmethods',10,1);


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
       get_stylesheet_directory_uri() . '/style.css',
       array('parent-style')
   );
}
