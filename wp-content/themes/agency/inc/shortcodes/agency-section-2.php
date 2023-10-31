<?php


vc_map(
    array(
        "name" => __("Agency Section 2", "growth_agency"), // Element name
        "base" => "agency_section_2", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 2',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 2 Title", "growth_agency"),
                "param_name" => "section_2_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 2 Description", "growth_agency"),
                "param_name" => "section_2_description",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 2 Sub Title", "growth_agency"),
                "param_name" => "section_2_sub_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 2 Schedule Title", "growth_agency"),
                "param_name" => "section_2_schedule_title",
                "value" => __("", "growth_agency"),
            ),

        )
    )
);



add_shortcode('agency_section_2', 'agency_section_2_code');

function agency_section_2_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'section_2_title' => '',
        'section_2_description' => '',
        'section_2_sub_title' => '',
        'section_2_sub_title' => '',
        'section_2_schedule_title' => '',
    ), $atts, 'agency_section_2');

    $section_2_title = $atts['section_2_title'] ?? '';
    $section_2_description = $atts['section_2_description'] ?? '';
    $section_2_sub_title = $atts['section_2_sub_title'] ?? '';
    $section_2_schedule_title = $atts['section_2_schedule_title'] ?? '';

?>


    <!-- section 2 -->
    <section class="call-to-action">
        <div class="container">
            <div class="call-action">
                <div class="coll-content">
                    <h3><?php  echo $section_2_title; ?></h3>
                    <p><?php  echo $section_2_description; ?></p>
                    <h4><?php  echo $section_2_sub_title; ?></h4>
                    <div class="gobal-btn">
                        <a href="https://usemotion.com/meet/atma/30min" target="_blank"><?php  echo $section_2_schedule_title; ?></a>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </section><!-- call-to-action -->




<?php
    $result = ob_get_clean();
    return $result;
}
