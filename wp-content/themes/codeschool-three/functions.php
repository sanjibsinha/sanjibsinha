<?php
function fetch_code_two_files() {
    wp_enqueue_script('code-one-js', get_theme_file_uri('/js/scripts-bundled.js',), NULL, '1.0', true);
    wp_enqueue_style('google-custom-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('code_one_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'fetch_code_two_files');

function add_codeschool_features() {
    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('footer-menu-one', 'Footer Menu One');
    register_nav_menu('footer-menu-two', 'Footer Menu Two');
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'add_codeschool_features' );