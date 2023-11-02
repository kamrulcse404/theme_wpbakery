<?php

add_action('vc_before_init', 'agency_vc_elements');

function agency_vc_elements()
{
    require_once(__DIR__ . '/shortcodes/agency-hero-section-1.php');
    require_once(__DIR__ . '/shortcodes/agency-section-2.php');
    require_once(__DIR__ . '/shortcodes/agency-section-3.php');
    require_once(__DIR__ . '/shortcodes/agency-section-4.php');
    require_once(__DIR__ . '/shortcodes/agency-section-5.php');
    require_once(__DIR__ . '/shortcodes/agency-section-6.php');
    require_once(__DIR__ . '/shortcodes/agency-section-7.php');
    require_once(__DIR__ . '/shortcodes/agency-section-8.php');
    require_once(__DIR__ . '/shortcodes/agency-section-9.php');
    require_once(__DIR__ . '/shortcodes/agency-section-10.php');
    require_once(__DIR__ . '/shortcodes/agency-section-11.php');

    require_once(__DIR__ . '/shortcodes/agency-section-12.php');

    require_once(__DIR__ . '/shortcodes/agency-section-13.php');
    require_once(__DIR__ . '/shortcodes/agency-section-14.php');

    require_once(__DIR__ . '/shortcodes/agency-section-15.php');

    require_once(__DIR__ . '/shortcodes/agency-section-16.php');
    
    
    
    
    //blog
    require_once(__DIR__ . '/shortcodes/blog/blog-section-1.php');
    require_once(__DIR__ . '/shortcodes/blog/blog-section-2-blogs.php');
    
    //single blog
    require_once(__DIR__ . '/shortcodes/single-blog/blog-details.php');

    // legalese
    require_once(__DIR__ . '/shortcodes/legalese/legalese-section-1.php');
    require_once(__DIR__ . '/shortcodes/legalese/legalese-section-2.php');
    
    //common for every template before footer means last widget
    require_once(__DIR__ . '/shortcodes/common/agency-common.php');

} 

