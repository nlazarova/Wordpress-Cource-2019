<?php

function load_stylesheet()

{
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
   /* wp_register_style('stylesheet', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(),
false, 'all');*/
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(),
false, 'all');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'),
false, true);
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

  function codex_widgets_init2() {
    register_sidebar( array(
      'name' => __( 'Main Sidebar 2', 'wpb' ),
      'id' => 'sidebar-2',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
  }
  add_action( 'widgets_init', 'codex_widgets_init2' );


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


   // Our custom post type function
    function create_posttype() {
    
        register_post_type( 'plants',
        // CPT Options
            array(
                'labels' => array(
                    'name' => __( 'Plants' ),
                    'singular_name' => __( 'Plant' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'plants'),
            )
        );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'create_posttype' );


    /*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Plants', 'Post Type General Name', 'blog1-time' ),
            'singular_name'       => _x( 'Plant', 'Post Type Singular Name', 'blog1-time' ),
            'menu_name'           => __( 'Plants', 'blog1-time' ),
            'parent_item_colon'   => __( 'Parent Plant', 'blog1-time' ),
            'all_items'           => __( 'All Plants', 'blog1-time' ),
            'view_item'           => __( 'View Plant', 'blog1-time' ),
            'add_new_item'        => __( 'Add New Plant', 'blog1-time' ),
            'add_new'             => __( 'Add New', 'blog1-time' ),
            'edit_item'           => __( 'Edit Plant', 'blog1-time' ),
            'update_item'         => __( 'Update Plant', 'blog1-time' ),
            'search_items'        => __( 'Search Plant', 'blog1-time' ),
            'not_found'           => __( 'Not Found', 'blog1-time' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'blog1-time' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'plants', 'blog1-time' ),
            'description'         => __( 'Plant news and reviews', 'blog1-time' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
         
        // Registering your Custom Post Type
        register_post_type( 'plants', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
    add_action( 'init', 'custom_post_type', 0 );
  

