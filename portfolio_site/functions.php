<?php

function setup_my_theme()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'setup_my_theme');

/* -------------------------------------
読み込み
--------------------------------------*/
function my_theme_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );

    // Font Awesome Kit
    wp_enqueue_script(
        'font-awesome-kit',
        'https://kit.fontawesome.com/fc6651f65d.js',
        array(),
        null,
        false
    );

    // WordPress 同梱の jQuery を読み込む
    wp_enqueue_script('jquery');

    wp_enqueue_style('all', get_theme_file_uri('./assets/css/style.css'), [], '20250829');
    wp_enqueue_script('all', get_theme_file_uri('./assets/js/app.js'), ['jquery'], '20250829', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');
