<?php
defined('ABSPATH') || exit;

// Basic Settings //

// section start 
Redux::setSection($opt_name, array(
    'title'            => __('Header Section', 'growth_agency'),
    'id'               => 'header-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'header-logo',
            'type'    => 'media',
            'title' => __('Website Logo', 'growth_agency'),
            'subtitle' => __('Upload Your Website Logo', 'growth_agency'),
            'default' => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png',
            )

        ),
    )
));

Redux::setSection($opt_name, array(
    'title'            => __('Footer Section', 'growth_agency'),
    'id'               => 'footer-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(

        array(
            'id' => 'footer-copy-rights',
            'type' => 'text',
            'title' => __('Copy Rights', 'growth_agency'),
            'default' => '© Copyright 2023 | All rights are reserved.',
        ),

        array(
            'id' => 'footer-copy-right-terms',
            'type' => 'text',
            'title' => __('Copy Right Terms', 'growth_agency'),
            'default' => 'Terms & Conditions ',
        ),

        array(
            'id' => 'footer-copy-right-privacy',
            'type' => 'text',
            'title' => __('Copy Right Privacy', 'growth_agency'),
            'default' => 'Privacy Policy',
        ),


    )
));
