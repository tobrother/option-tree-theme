<?php
/**
 * Register Theme Features
 */
function option_tree_theme_setup()  {

  // Add theme support for Translation
  load_theme_textdomain( 'option-tree-theme', get_template_directory() . '/languages' );
  
}
add_action( 'after_setup_theme', 'option_tree_theme_setup' );

/**
 * Filters the Theme Options ID
 */
function filter_demo_options_id() {
  return 'demo_option_tree';
}
add_filter( 'ot_options_id', 'filter_demo_options_id' );

/**
 * Filters the Settings ID
 */
function filter_demo_settings_id() {
  return 'demo_option_tree_settings';
}
add_filter( 'ot_settings_id', 'filter_demo_settings_id' );

/**
 * Filters the Layouts ID
 */
function filter_demo_layouts_id() {
  return 'demo_option_tree_layouts';
}
add_filter( 'ot_layouts_id', 'filter_demo_layouts_id' );

/**
 * Filters the Theme Option header list.
 */
function filter_demo_header_list() {
   echo '<li id="theme-version"><span>OptionTree Theme 2.3.0</span></li>';
}
add_action( 'ot_header_list', 'filter_demo_header_list' );

/**
 * Theme Mode
 */
add_filter( 'ot_theme_mode', '__return_false' );

/**
 * Child Theme Mode
 */
add_filter( 'ot_child_theme_mode', '__return_false' );

/**
 * Show Settings Pages
 */
add_filter( 'ot_show_pages', '__return_true' );

/**
 * Show Theme Options UI Builder
 */
add_filter( 'ot_show_options_ui', '__return_true' );

/**
 * Show Settings Import
 */
add_filter( 'ot_show_settings_import', '__return_true' );

/**
 * Show Settings Export
 */
add_filter( 'ot_show_settings_export', '__return_true' );

/**
 * Show New Layout
 */
add_filter( 'ot_show_new_layout', '__return_true' );

/**
 * Show Documentation
 */
add_filter( 'ot_show_docs', '__return_true' );

/**
 * Custom Theme Option page
 */
add_filter( 'ot_use_theme_options', '__return_true' );

/**
 * Meta Boxes
 */
add_filter( 'ot_meta_boxes', '__return_true' );

/**
 * Allow Unfiltered HTML in textareas options
 */
add_filter( 'ot_allow_unfiltered_html', '__return_false' );

/**
 * OptionTree in Theme Mode
 */
# load_template( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

/**
 * Theme Options
 */
load_template( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );

/**
 * Meta Boxes
 */
load_template( trailingslashit( get_template_directory() ) . 'inc/meta-boxes.php' );

/**
 * Theme Customizer
 */
load_template( trailingslashit( get_template_directory() ) . 'inc/customizer.php' );

/**
 * Demo Functions (for demonstration purposes only!)
 */
load_template( trailingslashit( get_template_directory() ) . 'inc/functions.php' );