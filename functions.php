<?php

function university_files() {
    wp_enqueue_script('main-university-js', get_theme_file_uri('/inc/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap',get_theme_file_uri('/inc/css/bootstrap.css'), NULL, rand(), false);
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-css', get_template_directory_uri().'/inc/css/custom.css',NULL, rand(), false);
        //  All Javascript
    wp_enqueue_script('main-university-js', get_theme_file_uri('/inc/js/jquery-3.5.1.js'), NULL, rand(), true);
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js');
    wp_enqueue_script('main-university-js', get_theme_file_uri('/inc/js/bootstrap.js'), NULL, rand(), true);

}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'university' ),
        'footer_menu'  => __( 'Footer Menu', 'university' ),
    ) );
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_features');

/**
 * Add a Footer  sidebar.
 */
function university_footer_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'university' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'university' ),
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="headline headline--small">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'university' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'university' ),
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="headline headline--small">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'university' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'university' ),
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="headline headline--small">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'university' ),
        'id'            => 'footer-4',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'university' ),
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="headline headline--small">',
        'after_title'   => '</h3>',
    ) );




}
add_action( 'widgets_init', 'university_footer_sidebar' );
