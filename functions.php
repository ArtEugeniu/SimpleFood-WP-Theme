<?php
function SimpleFood_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.min.css');

    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'pagesLogic-js',
        get_template_directory_uri() . '/js/pagesLogic.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'SimpleFood_assets');
?>