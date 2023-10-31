<?php


vc_map(
    array(
        "name" => __("Agency Section 3", "growth_agency"), // Element name
        "base" => "agency_section_3", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 3',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 3 Title", "growth_agency"),
                "param_name" => "section_3_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 3 Image", "growth_agency"),
                "param_name" => "section_3_image",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textarea_html",
                "holder" => "",
                "cpluss" => "",
                "heading" => __("Section 3 Content", "growth_agency"),
                "param_name" => "section_3_content",
                "value" => __("", "growth_agency"),
            ),
        )
    )
);



add_shortcode('agency_section_3', 'agency_section_3_code');

function agency_section_3_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'section_3_title' => '',
        'section_3_image' => '',
        'section_3_content' => ''

    ), $atts, 'agency_section_3');

    $section_3_title = $atts['section_3_title'] ?? '';

    $section_3_image = $atts['section_3_image'] ?? '';
    $section_3_image_url = wp_get_attachment_image_url($section_3_image, 'full');

    $section_3_content = $atts['section_3_content'] ?? ''; 

?>


    <!-- section 3 -->
    <section class="why-choose section-padding">
        <div class="container">
            <div class="center-section-title">
                <div class="bor bor2"></div>
                <h2><?php echo $section_3_title; ?></h2>
            </div>
            <div class="row dis-flex">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="choose-img img-fit">
                        <img src="<?php echo $section_3_image_url; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="choose-content">
                        <?php echo $section_3_content; ?>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>




<?php
    $result = ob_get_clean();
    return $result;
}
