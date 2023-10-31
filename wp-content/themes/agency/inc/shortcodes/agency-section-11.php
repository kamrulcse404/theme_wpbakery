<?php


vc_map(
    array(
        "name" => __("Agency Section 11", "growth_agency"), // Element name
        "base" => "agency_section_11", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 11',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 11 Title", "growth_agency"),
                "param_name" => "section_11_title",
                "value" => __("", "growth_agency"),
            ),        

            

            array(
                "type" => "textarea_html",
                "holder" => "",
                "cpluss" => "",
                "heading" => __("Section 11 Content", "growth_agency"),
                "param_name" => "section_11_content",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 11 Sub Title", "growth_agency"),
                "param_name" => "section_11_sub_title",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 11 Button Text", "growth_agency"),
                "param_name" => "section_11_button_text",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 11 Image", "growth_agency"),
                "param_name" => "section_11_image",
                "value" => __("", "growth_agency"),
            ),

            

        )
    )
);



add_shortcode('agency_section_11', 'agency_section_11_code');

function agency_section_11_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        
        'section_11_image' => '',
        'section_11_button_text' => '',
        'section_11_sub_title' => '',
        'section_11_content' => '',
        'section_11_title' => '',

    ), $atts, 'agency_section_11');

    $section_11_title = $atts['section_11_title'] ?? '';
    $section_11_sub_title = $atts['section_11_sub_title'] ?? '';
    // $section_10_short_text = $atts['section_10_short_text'] ?? '';
    $section_11_button_text = $atts['section_11_button_text'] ?? '';

    $section_11_content = $atts['section_11_content'] ?? '';

    $section_11_image = $atts['section_11_image'] ?? '';
    $section_11_image_url = wp_get_attachment_image_url($section_11_image, 'full');


?>


    <!-- section 11 -->
    <section class="marketing">
        <div class="marketing-banner">
            <div class="row dis-flex dis-reverse">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="markteing-content">
                        <div class="left-section-title">
                            <div class="bor"></div>
                            <h2><?php echo $section_11_title ?></h2>
                        </div>
                        
                        <?php echo $section_11_content ?>


                        <h4><?php echo $section_11_sub_title ?></h4>
                        <div class="gobal-btn dis-flex">
                            <a href="#contact-form"><?php echo $section_11_button_text ?></a>
                        </div>

                    </div><!-- markteing-content -->
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="img-fit mar-top-2">
                        <img src="<?php echo $section_11_image_url ?>" alt="">
                    </div>
                </div>
            </div>
        </div><!-- marketing-banner -->

    </section>



<?php
    $result = ob_get_clean();
    return $result;
}
