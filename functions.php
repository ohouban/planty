<?php
/**
 ** activation theme
 ** test
 **/
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));

}

function mytheme_register_assets()
{
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}
function mytheme_supports()
{
    // Ajouter la prise en charge des images mises en avant
    add_theme_support( 'post-thumbnails' );
    // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support( 'title-tag' );
    register_nav_menu('header', 'Menu principal');
    register_nav_menu('footer', 'Pied de page');
}

function mytheme_menu_class($classes){
    $classes[] = 'nav-item';
    return $classes;
}

function mytheme_menu_link_class($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_action('after_setup_theme', 'mytheme_supports');
add_action('wp_enqueue_scripts', 'mytheme_register_assets');
add_filter('nav_menu_css_class', 'mytheme_menu_class');
add_filter('nav_menu_link_attributes', 'mytheme_menu_link_class');

add_action( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );

function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'header') {
        $items .= '<li class="menu"><a href="http://planty.local/admin/">Admin</a></li>';
    }

    return $items;
}