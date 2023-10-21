<?php

function lubeca_files(){
    wp_enqueue_style('lubeca_wp_styles', get_stylesheet_uri());
    wp_enqueue_style('lubeca_main_styles', get_theme_file_uri('/assets/css/main.css'));
    wp_enqueue_style('pe-icon-7-stroke-styles', get_theme_file_uri('/assets/css/pe-icon-7-stroke.css'));
    wp_enqueue_style('themefy-icons', get_theme_file_uri('/assets/css/themify-icons.css'));

    wp_enqueue_script('lubeca-jquery-js', get_theme_file_uri('/assets/js/jquery.min.js'), array('jquery'), '1.0', true );
    wp_enqueue_script('lubeca-jquery-dropotron-js', get_theme_file_uri('/assets/js/jquery.dropotron.min.js'), array('jquery'), '1.0', true );
    wp_enqueue_script('lubeca-util-js', get_theme_file_uri('/assets/js/util.js'), array('jquery'), '1.0', true );
    wp_enqueue_script('lubeca-main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0', true );

}

add_action('wp_enqueue_scripts', 'lubeca_files');


function lubeca_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('banner_news_list', 920, 400, true);
    add_image_size('banner_news_detail', 920, 400, true);
}

add_action('after_setup_theme', 'lubeca_features');

function ourLoginCSS() {
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/login-styles.css', false);
}

add_action('login_enqueue_scripts', 'ourLoginCSS');