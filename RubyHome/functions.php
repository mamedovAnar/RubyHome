<?php

/**
 * Styles and scripts 
 */
function myFont()
{
   wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
}

add_action('wp_enqueue_scripts', 'myFont');

function style_theme()
{
   wp_enqueue_style('style', get_stylesheet_uri());
   wp_enqueue_style('bootstrap_5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
   wp_enqueue_style('slick', get_template_directory_uri() . '/libs/slick/slick.css');
   wp_enqueue_style('slick_theme', get_template_directory_uri() . '/libs/slick/slick-theme.css');
   wp_enqueue_style('custom_style', get_template_directory_uri() . '/assets/css/custom.css');
   wp_enqueue_style('adaptive', get_template_directory_uri() . '/assets/css/adaptive.css');
}
add_action('wp_enqueue_scripts', 'style_theme');

function include_custom_jquery()
{
   wp_deregister_script('jquery');
   wp_enqueue_script('jQuery', get_template_directory_uri() . '/libs/jquery.min.js');
}
add_action('wp_footer', 'include_custom_jquery');

function script_theme()
{

   wp_enqueue_script('bootstrap_5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
   wp_enqueue_script('slick', get_template_directory_uri() . '/libs/slick/slick.min.js');
   wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}
add_action('wp_footer', 'script_theme');

/**
 * Register menu 
 */

function myMenu()
{
   register_nav_menu('header', 'Header_menu');
}
add_action('after_setup_theme', 'myMenu');

/**
 * Register sidebar
 */


function register_my_widgets()
{

   register_sidebar([
      'name'          => 'Page sidebar',
      'id'            => "page_sidebar",
      'description'   => '',
      'class'         => '',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => "</div>\n",
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => "</h2>\n",
      'before_sidebar' => '', // WP 5.6
      'after_sidebar'  => '', // WP 5.6
   ]);
}
add_action('widgets_init', 'register_my_widgets');
