<?php

function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    ); 


    $parenthandleWC = 'kota-woocommerce-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandleWC, get_template_directory_uri() . '/woocommerce.css', 
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'woo-child-style', get_stylesheet_directory_uri() . '/woocommerce_child.css',
        array( $parenthandleWC ),
        $theme->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function wpb_widgets_init() {
    register_sidebar( array(
    'name' => 'Header Widget',
    'id' => 'header-widget',
    'before_widget' => '<div class="hw-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="hw-title">',
    'after_title' => '</h2>',
    ) );
    
    }
    add_action( 'widgets_init', 'wpb_widgets_init' );
?>
