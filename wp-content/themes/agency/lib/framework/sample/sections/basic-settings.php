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
    'title'            => __('Footer Common Section', 'growth_agency'),
    'id'               => 'footer-common-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(

        array(
            'id' => 'footer-logo',
            'type'    => 'media',
            'title' => __('Website Footer Logo', 'growth_agency'),
            'subtitle' => __('Upload Your Website Footer Logo', 'growth_agency'),
            'default' => array(
                'url' => get_template_directory_uri() . '/assets/images/footer-logo.png',
            )

        ),

        array(
            'id' => 'footer-common-title',
            'type' => 'text',
            'title' => __('Footer Title', 'growth_agency'),
            'default' => 'Ready to Grow Your Business with Growth Bastards?',
        ),

        array(
            'id' => 'footer-common-short-text',
            'type' => 'editor',
            'title' => __('Footer Short Text', 'growth_agency'),
            'default' => 'Stay connected and we will get back to you. Dont worry, we are here for your business growth not to send you spam emails.',
        ),


        array(
            'id' => 'footer-common-linkedin-url',
            'type' => 'text',
            'title' => __('LinkIn Url', 'growth_agency'),
            'default' => 'https://www.linkedin.com/',
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
