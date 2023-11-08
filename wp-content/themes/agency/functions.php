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
