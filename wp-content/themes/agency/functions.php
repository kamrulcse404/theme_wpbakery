<?php

add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 337, true);
add_image_size('single-thumbnail', 600, 337, true);


// include title & js_css  
add_theme_support('title-tag');
require_once('enqueue.php');



// header menus 
function register_header_menu()
{
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'growth_agency')
        )
    );
}
add_action('after_setup_theme', 'register_header_menu');




// vc composer 
require_once(__DIR__ . '/inc/vc-elements.php');



// redux Framework //
require_once('lib/framework/ReduxCore/framework.php');
require_once('lib/framework/sample/config.php');


//cmb2
require_once('metabox/init.php');
require_once('metabox/functions.php');


function add_svg_to_upload_mimes($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_svg_to_upload_mimes');

function fix_svg_thumb_display()
{
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
}
add_action('admin_head', 'fix_svg_thumb_display');



// menu design custom 


function add_nav_link_class($atts, $item, $args) {
    $atts['class'] = 'nav-link';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_nav_link_class', 10, 3);


function custom_search_form($form) {
    $form = '<form role="search" method="get" class="search-form" action="' . esc_url(home_url('/')) . '">
                <div class="form_group">
                    <input type="search" class="form_control" placeholder="' . esc_attr_x('Search here', 'placeholder', 'growth_agency') . '" value="' . get_search_query() . '" name="s" required>
                    <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>';

    return $form;
}

add_filter('get_search_form', 'custom_search_form');
