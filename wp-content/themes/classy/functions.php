<?php 
/**
 * Init our WordPress Theme.
 */
require_once( __DIR__ . '/vendor/autoload.php' );
\Classy\Classy::get_instance();

function show_pre($arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

function add_theme_scripts() {
    $ver = null;
    $template_name = is_page() && get_page_template_slug() ? str_replace('classy-', '', get_page_template_slug()) : false;

//    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('global', get_stylesheet_directory_uri() . '/dist/style.css', array(), $ver, false);

    if ($template_name)
    {
        wp_enqueue_style('page-styles', get_stylesheet_directory_uri() . '/dist/pages/'. $template_name . '.css', array(), $ver, false);

        wp_enqueue_script( 'page-script', get_template_directory_uri() . '/dist/pages/'. $template_name . '.js', array (), $ver, true);
    }

    wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/index.js', array (), $ver, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => __('Theme Settings', 'classy'),
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
}