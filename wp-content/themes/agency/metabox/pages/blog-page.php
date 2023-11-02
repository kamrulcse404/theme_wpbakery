<?php

// metabox for blog container section
function metabox_for_blog_container_section(array $blog_container_section)
{
    $blog_container_section[] = array(
        'id' => 'about-page-header-section',
        'title' => 'Blog Header  Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'blog.php',
        ),
        'fields' => array(

            array(
                'id' => 'blog-container-background',
                'name' => 'Upload Blog Container Background',
                'default' => get_template_directory_uri() . '/assets/images/blog-header.jfif',
                'type' => 'file',
            ),

            array(
                'id' => 'blog-container-title',
                'name' => 'Blogs Title',
                'default' => 'Our Latest Blog',
                'type' => 'text',
            ),

            array(
                'id' => 'blog-container-desc',
                'name' => 'Blogs Short Description',
                'default' => 'We always keep ourselves with the latest trends and manners. See our latest blog to learn more & keep yourself updated.',
                'type' => 'textarea',
            ),

            array(
                'id' => 'blog-contact-number',
                'name' => 'Contact Number',
                'default' => '+0123 (456) 7899',
                'type' => 'text',
            ),

            array(
                'id' => 'blog-contact-email',
                'name' => 'Contact Email',
                'default' => 'support@gmail.com',
                'type' => 'text',
            ),
        ),
    );

    return $blog_container_section;
}

add_filter('cmb2_meta_boxes', 'metabox_for_blog_container_section');



// metabox for blog footer section
// function metabox_for_blog_footer_section(array $blog_footer_section)
// {
//     $blog_footer_section[] = array(
//         'id' => 'about-page-footer-section',
//         'title' => 'Blog Footer Section',
//         'object_types' => array('page'),
//         'show_on' => array(
//             'key' => 'page-template',
//             'value' => 'blog.php',
//         ),
//         'fields' => array(

//             array(
//                 'id' => 'blog-footer-title',
//                 'name' => 'Blogs Footer Title',
//                 'default' => 'Ready to Grow Your Business with Growth Bastards?',
//                 'type' => 'text',
//             ),

//             array(
//                 'id' => 'blog-footer-desc',
//                 'name' => 'Blogs Footer Short Description',
//                 'default' => "Stay connected and we will get back to you. Dont worry, we are here for your business growth not to send you spam emails.",
//                 'type' => 'textarea',
//             ),

//             array(
//                 'id' => 'blog-footer-logo',
//                 'name' => 'Upload Blog Footer Logo',
//                 'default' => get_template_directory_uri() . '/assets/images/footer-logo.png',
//                 'type' => 'file',
//             ),
//         ),
//     );

//     return $blog_footer_section;
// }

// add_filter('cmb2_meta_boxes', 'metabox_for_blog_footer_section');