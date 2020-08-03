<?php

function university_files() {
    wp_enqueue_script('main-university-js', get_theme_file_uri('/inc/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    wp_enqueue_style('university_main_styles', get_template_directory_uri().'/inc/css/style.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
        //  All Javascript
    wp_enqueue_script('main-university-js', get_theme_file_uri('/inc/js/jquery-3.5.1.js'), NULL, rand(), true);
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js');
    wp_enqueue_script('jquery', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');