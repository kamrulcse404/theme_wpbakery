<?php


function enqueue_custom_styles_and_scripts_1() {
    // Enqueue your stylesheets
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');

    // Enqueue your favicon
    wp_enqueue_style('favicon', get_template_directory_uri() . '/assets/images/fav.png');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts_1');



function enqueue_external_styles_and_scripts() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    // Enqueue Google Font
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=K2D:wght@400;700&family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&display=swap');

    // Enqueue Font Awesome
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/b2b7d27ef0.js', array(), null, false);
}
add_action('wp_enqueue_scripts', 'enqueue_external_styles_and_scripts');

// Add Google Font using wp_head hook (since it's a <link> tag, not a script or style)
function add_google_font_to_head() {
    echo '<link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;700&family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&display=swap" rel="stylesheet">';
}
add_action('wp_head', 'add_google_font_to_head');


function enqueue_my_scripts() {
    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue Popper.js
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array('jquery'), '1.16.0', true);

    // Enqueue Bootstrap
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery', 'popper'), '4.4.1', true);

    // Enqueue Wow.js
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);

    // Enqueue Main.js
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

