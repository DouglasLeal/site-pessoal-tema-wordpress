<?php

function dl_scripts_e_estilos(): void
{
    wp_enqueue_style(
        'my-custom-styles',
        get_template_directory_uri() . '/assets/css/style.css' );
}
add_action('wp_enqueue_scripts', 'dl_scripts_e_estilos');

function dl_register_nav_menu(){
    register_nav_menu('menu_principal', "Menu Principal");
}
add_action('after_setup_theme', 'dl_register_nav_menu');

function dl_register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'dl_register_navwalker' );

function dl_features_theme(){
    add_theme_support("post-thumbnails");
}
add_action('after_setup_theme', 'dl_features_theme');