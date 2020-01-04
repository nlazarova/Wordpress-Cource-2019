<?php
	if (!defined('ABSPATH')) exit;
/*
    Plugin Name: Agro Book
    Plugin URI: http://www.lsoft.info/ntlazarova/
    description: Agro Book
    Version: 0.0.1
    Author: Nedialka Lazarova
    Author URI: http://www.lsoft.info/ntlazarova/
    Textdomain: blog1-time
    License: GPL2
*/

function agro_register_post_type() {
    $labels = array(
        'name' => __( 'Books', 'blog1-time'),        
        'singular_name' => __( 'Book', 'blog1-time' ),
        'add_new' => __( 'New Book', 'blog1-time' ),
        'add_new_item' => __( 'Add New Book', 'blog1-time' ),
        'edit_item' => __( 'Edit Book', 'blog1-time' ),
        'new_item' => __( 'New Book', 'blog1-time' ),
        'view_item' => __( 'View Books', 'blog1-time' ),
        'search_items' => __( 'Search Books', 'blog1-time' ),
        'not_found' =>  __( 'No Books Found', 'blog1-time' ),
        'not_found_in_trash' => __( 'No Books found in Trash', 'blog1-time' ),
       );

       $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
         'title',
         'editor',
         'excerpt',
         'custom-fields',
         'thumbnail',
         'page-attributes'
        ),
        
        'rewrite'   => array( 'slug' => 'book' ),
        'show_in_rest' => true
       );

       register_post_type( 'agro_book', $args );

}
add_action( 'init', 'agro_register_post_type' );






