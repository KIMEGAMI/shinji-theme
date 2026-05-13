<?php

function shinji_theme_scripts(){

    wp_enqueue_style(
        'style',
        get_stylesheet_uri()
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        false,
        true
    );
}


add_action(
    'wp_enqueue_scripts',
    'shinji_theme_scripts'
);