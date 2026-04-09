<?php
/**
 * Nexus Shell — Theme setup
 */

function nexus_shell_setup() {
  add_theme_support('title-tag');
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script',
  ));

  register_nav_menus(array(
    'primary' => __('Primary Menu', 'nexus-shell'),
  ));
}
add_action('after_setup_theme', 'nexus_shell_setup');

function nexus_shell_enqueue_styles() {
  wp_enqueue_style('nexus-shell-style', get_stylesheet_uri(), array(), '1.1.0');
}
add_action('wp_enqueue_scripts', 'nexus_shell_enqueue_styles');
