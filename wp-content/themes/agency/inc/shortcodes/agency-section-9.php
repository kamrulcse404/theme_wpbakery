<?php


vc_map(
    array(
        "name" => __("Agency Section 9", "growth_agency"), // Element name
        "base" => "agency_section_9", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 9',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 9 Title", "growth_agency"),
                "param_name" => "section_9_title",
                "value" => __("", "growth_agency"),
            ),           


            array(
                "type" => "textarea_html",
                "holder" => "",
                "cpluss" => "",
                "heading" => __("Section 9 Content", "growth_agency"),
                "param_name" => "section_9_content",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 9 Sub Title", "growth_agency"),
                "param_name" => "section_9_sub_title",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 9 Button Text", "growth_agency"),
                "param_name" => "section_9_button_text",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 9 Image", "growth_agency"),
                "param_name" => "section_9_image",
                "value" => __("", "growth_agency"),
            ),



        )
    )
);



add_shortcode('agency_section_9', 'agency_section_9_code');

function agency_section_9_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'section_9_title' => '',
        'section_9_sub_title' => '',
        'section_9_image' => '',
        'section_9_button_text' => '',

        'section_9_content' => ''

    ), $atts, 'agency_section_9');

    $section_9_title = $atts['section_9_title'] ?? '';
    $section_9_sub_title = $atts['section_9_sub_title'] ?? '';
    $section_9_button_text = $atts['section_9_button_text'] ?? '';

    $section_9_content = $atts['section_9_content'] ?? '';

    $section_9_image = $atts['section_9_image'] ?? '';
    $section_9_image_url = wp_get_attachment_image_url($section_9_image, 'full');


?>


    <!-- section 9 -->
    <section class="challenge">
        <div class="marketing-banner mar-banner">
            <div class="row dis-flex dis-reverse">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="markteing-content ol-list">
                        <div class="left-section-title">
                            <div class="bor"></div>
                            <h2><?php echo $section_9_title ?></h2>
                        </div>
                        <ol>
                            <?php echo $section_9_content ?>
                        </ol>

                        <h4><?php echo $section_9_sub_title ?></h4>
                        <div class="gobal-btn dis-flex">
                            <a href="https://usemotion.com/meet/atma/30min" target="_blank"><?php echo $section_9_button_text  ?></a>
                        </div>

                    </div><!-- markteing-content -->
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="img-fit mar-top-2">
                        <img src="<?php echo $section_9_image_url  ?>" alt="">
                    </div>
                </div>
            </div>
        </div><!-- marketing-banner -->

    </section>



<?php
    $result = ob_get_clean();
    return $result;
}
