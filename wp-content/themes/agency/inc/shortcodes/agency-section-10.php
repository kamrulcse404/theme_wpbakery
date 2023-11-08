<?php


vc_map(
    array(
        "name" => __("Agency Section 10", "growth_agency"), // Element name
        "base" => "agency_section_10", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 10',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 10 Image", "growth_agency"),
                "param_name" => "section_10_image",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 10 Title", "growth_agency"),
                "param_name" => "section_10_title",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textarea_html",
                "holder" => "",
                "cpluss" => "",
                "heading" => __("Section 10 Content", "growth_agency"),
                "param_name" => "section_10_content",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 10 Short Text", "growth_agency"),
                "param_name" => "section_10_short_text",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 10 Sub Title", "growth_agency"),
                "param_name" => "section_10_sub_title",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 10 Button Text", "growth_agency"),
                "param_name" => "section_10_button_text",
                "value" => __("", "growth_agency"),
            ),

        )
    )
);



add_shortcode('agency_section_10', 'agency_section_10_code');

function agency_section_10_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'section_10_title' => '',
        'section_10_short_text' => '',

        'section_10_image' => '',
        'section_10_button_text' => '',

        'section_10_sub_title' => '',

        'section_10_content' => ''

    ), $atts, 'agency_section_10');

    $section_10_title = $atts['section_10_title'] ?? '';
    $section_10_sub_title = $atts['section_10_sub_title'] ?? '';
    $section_10_short_text = $atts['section_10_short_text'] ?? '';
    $section_10_button_text = $atts['section_10_button_text'] ?? '';

    $section_10_content = $atts['section_10_content'] ?? '';

    $section_10_image = $atts['section_10_image'] ?? '';
    $section_10_image_url = wp_get_attachment_image_url($section_10_image, 'full');


?>


    <!-- section 10 -->
    <section class="why-choose section-padding">
        <div class="container">

            <div class="row dis-flex">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="choose-img img-fit">
                        <img src="<?php echo  $section_10_image_url; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="choose-content inbound">
                        <div class="left-section-title">
                            <div class="bor"></div>
                            <h2><?php echo  $section_10_title; ?></h2>

                            <ul>
                                <?php echo  $section_10_content; ?>

                            </ul>

                            <p><?php echo  $section_10_short_text; ?></p>

                            <h4><?php echo  $section_10_sub_title; ?></h4>
                            <div class="gobal-btn dis-flex">
                                <a href="https://usemotion.com/meet/atma/30min" target="_blank"><?php echo  $section_10_button_text; ?></a>
                            </div>
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
