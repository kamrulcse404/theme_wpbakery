<?php


vc_map(
    array(
        "name" => __("Agency Section 5", "growth_agency"), // Element name
        "base" => "agency_section_5", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 5',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 5 Image", "growth_agency"),
                "param_name" => "section_5_image",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 5 Title", "growth_agency"),
                "param_name" => "section_5_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 5 Description", "growth_agency"),
                "param_name" => "section_5_description",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 5 Sub Title", "growth_agency"),
                "param_name" => "section_5_sub_title",
                "value" => __("", "growth_agency"),
            ),

        )
    )
);



add_shortcode('agency_section_5', 'agency_section_5_code');

function agency_section_5_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'section_5_image' => '',
        'section_5_title' => '',
        'section_5_description' => '',
        'section_5_sub_title' => '',
    ), $atts, 'agency_section_5');

    $section_5_title = $atts['section_5_title'] ?? '';
    $section_5_description = $atts['section_5_description'] ?? '';
    $section_5_sub_title = $atts['section_5_sub_title'] ?? '';

    $section_5_image = $atts['section_5_image'] ?? '';
    $section_5_image_url = wp_get_attachment_image_url($section_5_image, 'full');

?>


    <!-- section 5 -->
<section class="why-choose section-padding">
    <div class="container">

        <div class="row dis-flex">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="choose-img img-fit">
                    <img src="<?php echo $section_5_image_url; ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="choose-content result">
                    <div class="left-section-title">
                        <div class="bor"></div>
                        <h2><?php echo $section_5_title; ?>
                        </h2>
                        <p><?php echo $section_5_description; ?></p>
                        <h4><?php echo $section_5_sub_title; ?></h4>
                    </div>
                </div>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section>



<?php
    $result = ob_get_clean();
    return $result;
}
