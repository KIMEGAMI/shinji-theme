<?php

function shinji_enqueue_assets(){

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/style.css'
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        false,
        true
    );

}

add_action('wp_enqueue_scripts', 'shinji_enqueue_assets');