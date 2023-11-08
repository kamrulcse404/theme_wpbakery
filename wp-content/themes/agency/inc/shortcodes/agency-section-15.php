<?php


vc_map(
    array(
        "name" => __("Agency Section 15", "growth_agency"), // Element name
        "base" => "agency_section_15", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 15',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 15 Image", "growth_agency"),
                "param_name" => "section_15_image",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 15 Title", "growth_agency"),
                "param_name" => "section_15_title",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textarea_html",
                "holder" => "",
                "cpluss" => "",
                "heading" => __("Section 15 Content", "growth_agency"),
                "param_name" => "section_15_content",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 15 Short Text", "growth_agency"),
                "param_name" => "section_15_short_text",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 15 Button Text", "growth_agency"),
                "param_name" => "section_15_button_text",
                "value" => __("", "growth_agency"),
            ),

        )
    )
);



add_shortcode('agency_section_15', 'agency_section_15_code');

function agency_section_15_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(

        'section_15_image' => '',
        'section_15_title' => '',
        // 'section_11_sub_title' => '',
        'section_15_content' => '',
        'section_15_short_text' => '',
        'section_15_content' => '',
        'section_15_button_text' => '',
        // 'section_11_title' => '',

    ), $atts, 'agency_section_15');

    $section_15_title = $atts['section_15_title'] ?? '';

    $section_15_short_text = $atts['section_15_short_text'] ?? '';

    $section_15_button_text = $atts['section_15_button_text'] ?? '';

    $section_15_content = $atts['section_15_content'] ?? '';

    $section_15_image = $atts['section_15_image'] ?? '';
    $section_15_image_url = wp_get_attachment_image_url($section_15_image, 'full');


?>


    <!-- section 15 -->
    <section class="team concrete">
        <div class="container">
            <div class="concrete-img">
                <img src="<?php echo $section_15_image_url; ?>" alt="">
                <h2><?php echo $section_15_title; ?></h2>
            </div>
            <div class="concrete-content">


                <ul>
                    <?php echo $section_15_content; ?>
                </ul>


                <p><?php echo $section_15_short_text; ?></p>
            </div>
            <div class="gobal-btn center-btn">
                <a href="https://usemotion.com/meet/atma/30min" target="_blank"><?php echo $section_15_button_text; ?></a>
            </div>
        </div>
    </section>



<?php
    $result = ob_get_clean();
    return $result;
}
