<?php


vc_map(
    array(
        "name" => __("Agency Blog Section 1", "growth_agency"), // Element name
        "base" => "agency_blog_section_1", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is Agency Blog section 1',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(           

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Blog Section 1 Title", "growth_agency"),
                "param_name" => "blog_section_1_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Blog Section 1 Description", "growth_agency"),
                "param_name" => "blog_section_1_description",
                "value" => __("", "growth_agency"),
            ),


        )
    )
);



add_shortcode('agency_blog_section_1', 'agency_blog_section_1_code');

function agency_blog_section_1_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        
        'blog_section_1_title' => '',
        'blog_section_1_description' => '',


    ), $atts, 'agency_blog_section_1');

    
    $blog_section_1_title = $atts['blog_section_1_title'] ?? '';
    $blog_section_1_description = $atts['blog_section_1_description'] ?? '';

?>


    <!-- section 1 -->
    <section class="welcome">
        <div class="container">
            <h2>
                <?php echo $blog_section_1_title ?>
            </h2>
            <p><?php echo $blog_section_1_description ?>

            </p>
        </div>
    </section>




<?php
    $result = ob_get_clean();
    return $result;
}
