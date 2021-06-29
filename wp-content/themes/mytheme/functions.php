<?php
/**
 * My Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package My_Theme
 */

function pioneer_scripts() {
  wp_enqueue_style( 'pioneer-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );

  wp_enqueue_script( 'jquery-3.5.1', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/script.js', array('jquery-3.5.1'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'pioneer_scripts' );

function pioneer_setup() {
  load_theme_textdomain( 'pioneer' );
  /* Add menu support */
  add_theme_support('menus');
  /* Add excerpt for pages */
  add_post_type_support( 'page', 'excerpt' );
  /* Add excerpt for resources */
  add_post_type_support( 'macd-resource', 'excerpt' );
  /* Add default posts and comments RSS feed links to head. */
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  /* Enable support for Post Thumbnails on posts and pages. */
  add_theme_support( 'post-thumbnails' );
  add_theme_support('html5', array('search-form'));
  /* Add theme support for Custom Logo. */
  add_theme_support( 'custom-logo', array(
    'width'       => 500,
    'height'      => 500,
    'flex-height' => true,
    'flex-width'  => true,
  ) );
  // register menus
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary Navigation', 'pioneer' ),
  ) );
}
add_action( 'after_setup_theme', 'pioneer_setup' );

/* Disable content editor for CPT */
function remove_default_content_editor() {
  remove_post_type_support( 'macd-resource', 'editor' );
}
add_action('admin_init', 'remove_default_content_editor');

/* Action for upload SVG file */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter('use_block_editor_for_post', '__return_false');

// Custom Post Type (News)
function create_custom_post_type() {
  $supports = array(
      'title', // post title
      'editor', // post content
      'author', // post author
      'thumbnail', // featured images
      'excerpt', // post excerpt
      'custom-fields', // custom fields
      'comments', // post comments
      'revisions', // post revisions
      'post-formats', // post formats
      'page-attributes' // page attributes 
  );

  $labels = array(
      'name' => _x('News', 'plural'),
      'singular_name' => _x('News', 'singular'),
      'menu_name' => _x('News', 'admin menu'),
      'name_admin_bar' => _x('News', 'admin bar'),
      'add_new' => _x('Add New', 'add new'),
      'add_new_item' => __('Add New news'),
      'new_item' => __('New news'),
      'edit_item' => __('Edit news'),
      'view_item' => __('View news'),
      'all_items' => __('All news'),
      'search_items' => __('Search news'),
      'not_found' => __('No news found.'),
  );

  $args = array(
      'labels' => $labels,
      'supports' => $supports,
      'public' => true,
      'taxonomies' => array( 'category', 'post_tag' ),
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'show_in_admin_bar' => true,
      'can_export' => true,
      'capability_type' => 'post',
      'show_in_rest' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'news'),
      'has_archive' => true,
      'hierarchical' => true,
      'menu_position' => 6,
      'menu_icon' => 'dashicons-megaphone',
  );

  register_post_type('news', $args);
}
add_action('init', 'create_custom_post_type');
