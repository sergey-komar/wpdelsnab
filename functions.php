<?php

function delsnab_script(){
    wp_enqueue_style('delsnab-style', get_template_directory_uri() . '/assets/css/style.min.css', [], '2024', 'all' );
    wp_enqueue_style('delsnab-custom', get_template_directory_uri() . '/assets/css/custom.css', [], '2024', 'all');

    wp_enqueue_script('delsnab-js', get_template_directory_uri() . '/assets/js/main.min.js', [], '2024', true );
}
add_action('wp_enqueue_scripts', 'delsnab_script');


function delsnab() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
   


    register_nav_menus([
        'menu-header' => 'меню в шапке',
        'menu-footer' => 'меню в подвале',
        'menu-category' => 'меню в подвале категории',
        'menu-nerzhaveila' => 'меню нержавейка',
        'menu-metall' => 'металлические конструкции'
    ]);
}
add_action('after_setup_theme', 'delsnab');


if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
        'page_title' 	=> 'Основные настройки',
        'menu_title'	=> 'Настройки шапки и подвала',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    )); 
}


require_once get_template_directory() . '/inc/custom-type.php';


