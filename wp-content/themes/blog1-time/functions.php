<?php

function load_stylesheet()

{
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    wp_register_style('stylesheet', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(),
false, 'all');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300");
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');

/*function add_menu_support()
{
     add_theme_support('menus');
}
add_action('after_setup_theme', 'add_menu_support');*/

/*register_nav_menus(
    array(
        'top-menu' => __('Top Menu Location', 'blog1-time'),
        'main-menu' => __('Main Menu Location', 'blog1-time'),
        'footer-menu' => __('Footer Menu Location', 'blog1-time'),
    )
);*/

function add_menu_support() 
{ 
    add_theme_support( 'menus' ); 
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'add_menu_support' );

register_nav_menus (
    array(
        'top-menu' => __('Top Menu', 'blog1-time'),
        'main-menu' => __('Main Menu', 'blog1-time'),
        'footer-menu' => __('Footer Menu', 'blog1-time'),
    )
);

add_image_size ('smallest1', 75, 75, true);
add_image_size ('smallest', 100, 100, true);
add_image_size ('my-size-img', 1110, 300, true);
add_image_size ('my-size-img-post', 800, 300, true);

function codex_widgets_init() {
    register_sidebar( array(
      'name' => __( 'Main Sidebar', 'wpb' ),
      'id' => 'sidebar-1',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
  }
  add_action( 'widgets_init', 'codex_widgets_init' );


  function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
  

