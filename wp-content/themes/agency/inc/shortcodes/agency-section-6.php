<?php


vc_map(
    array(
        "name" => __("Agency Section 6", "growth_agency"), // Element name
        "base" => "agency_section_6", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 5',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 6 Image", "growth_agency"),
                "param_name" => "section_6_image",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 6 Title", "growth_agency"),
                "param_name" => "section_6_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 6 Description", "growth_agency"),
                "param_name" => "section_6_description",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea_html",
                "holder" => "",
                "cpluss" => "",
                "heading" => __("Section 6 Content", "growth_agency"),
                "param_name" => "section_6_content",
                "value" => __("", "growth_agency"),
            ),



        )
    )
);



add_shortcode('agency_section_6', 'agency_section_6_code');

function agency_section_6_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'section_6_image' => '',
        'section_6_title' => '',
        'section_6_description' => '',

        'section_6_content' => '',

    ), $atts, 'agency_section_6');

    $section_6_title = $atts['section_6_title'] ?? '';
    $section_6_description = $atts['section_6_description'] ?? '';

    $section_6_content = $atts['section_6_content'] ?? '';

    $section_6_image = $atts['section_6_image'] ?? '';
    $section_6_image_url = wp_get_attachment_image_url($section_6_image, 'full');

?>


    <!-- section 6 -->
    <section class="challenge">
        <div class="marketing-banner">
            <div class="row dis-flex">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="markteing-content">
                        <div class="left-section-title">
                            <div class="bor"></div>
                            <h2><?php echo $section_6_title; ?></h2>
                        </div>
                        <p><?php echo $section_6_description; ?></p>

                        <div class="evidence">
                            <?php echo $section_6_content; ?>
                        </div>



                    </div><!-- markteing-content -->
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="img-fit">
                        <img src="<?php echo $section_6_image_url; ?>" alt="">
                    </div>
                </div>
            </div>
        </div><!-- marketing-banner -->

    </section>



<?php
    $result = ob_get_clean();
    return $result;
}
