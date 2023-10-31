<?php


vc_map(
    array(
        "name" => __("Agency Section 7", "growth_agency"), // Element name
        "base" => "agency_section_7", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 7',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 7 Title", "growth_agency"),
                "param_name" => "section_7_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 7 Sub Title", "growth_agency"),
                "param_name" => "section_7_sub_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 7 Button Text", "growth_agency"),
                "param_name" => "section_7_button_text",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 7 Short Text", "growth_agency"),
                "param_name" => "section_7_short_text",
                "value" => __("", "growth_agency"),
            ),

        )
    )
);



add_shortcode('agency_section_7', 'agency_section_7_code');

function agency_section_7_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'section_7_title' => '',
        'section_7_sub_title' => '',
        'section_7_button_text' => '',
        'section_7_short_text' => '',
    ), $atts, 'agency_section_7');

    $section_7_title = $atts['section_7_title'] ?? '';
    $section_7_sub_title = $atts['section_7_sub_title'] ?? '';
    $section_7_button_text = $atts['section_7_button_text'] ?? '';
    $section_7_short_text = $atts['section_7_short_text'] ?? '';

?>


    <!-- section 7 -->
    <section class="call-to-action">
        <div class="container">
            <div class="call-action">
                <div class="coll-content coll-content-2">
                    <h3><?php echo $section_7_title; ?></h3>
                    <h4><?php echo $section_7_sub_title; ?></h4>

                    <div class="gobal-btn">
                        <a href="https://usemotion.com/meet/atma/30min" target="_blank"><?php echo $section_7_button_text; ?></a>
                    </div>
                    <p><?php echo $section_7_short_text; ?></p>
                </div>
            </div>
        </div><!-- container -->
    </section><!-- call-to-action -->




<?php
    $result = ob_get_clean();
    return $result;
}
