<?php
/**
 * Created by PhpStorm.
 * User: TUPOLEV
 * Date: 10.04.2017
 * Time: 14:01
 */
// include jQuery
add_action('wp_enqueue_scripts', 'my_script_method');
function my_script_method(){
    wp_enqueue_script( 'jquery' );
}

function wptest_scripts_styles(){
    //Регистрация стилей
    wp_register_style('my_main', get_template_directory_uri() . '/css/main.css');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    //Подключение стилей
    wp_enqueue_style('my_main');
    wp_enqueue_style('bootstrap');

    //Регистрация скриптов
    wp_register_script('js1', get_template_directory_uri() . '/js/js1.js', array('jquery'));
    //Подключение скриптов
    wp_enqueue_script('js1');
}
add_action('wp_enqueue_scripts', 'wptest_scripts_styles', 1);


// Sidebar functions
function testwp_widgets_init(){
    register_sidebar( array(
        'name'          => __('Sidebar', 'testWP'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div>',
        'befor_title'   => '',
        'after_title'   => '',
        'after_widget'  => '</div>'
    ));
}

add_action('widgets_init', 'testwp_widgets_init');

register_nav_menus(array(
    'top' => 'Верхнее меню',
    'bottom' => 'Нижнее меню',
    'float' => 'Плавающее меню'
));

//Turn ON thumbnails
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
set_post_thumbnail_size(100, 100, true);
