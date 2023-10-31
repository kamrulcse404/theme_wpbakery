<?php


vc_map(
    array(
        "name" => __("Agency Section 8", "growth_agency"), // Element name
        "base" => "agency_section_8", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 8',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 8 Title", "growth_agency"),
                "param_name" => "section_8_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 8 Description", "growth_agency"),
                "param_name" => "section_8_description",
                "value" => __("", "growth_agency"),
            ),

            array(
                'type' => 'param_group',
                'param_name' => 'section_8_marketing_list',
                'params' => array(

                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 8 Marketing List", "growth_agency"),
                        "param_name" => "section_8_marketing_list_item",
                        "value" => __("", "growth_agency"),
                    ),

                )
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 8 Short Description", "growth_agency"),
                "param_name" => "section_8_short_description",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 8 Image", "growth_agency"),
                "param_name" => "section_8_image",
                "value" => __("", "growth_agency"),
            ),
        )
    )
);



add_shortcode('agency_section_8', 'agency_section_8_code');

function agency_section_8_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'section_8_image' => '',
        'section_8_title' => '',
        'section_8_description' => '',

        'section_8_marketing_list' => '',

        'section_8_short_description' => '',

    ), $atts, 'agency_section_8');

    $section_8_title = $atts['section_8_title'] ?? '';
    $section_8_short_description = $atts['section_8_short_description'] ?? '';
    $section_8_description = $atts['section_8_description'] ?? '';
    $section_8_image = $atts['section_8_image'] ?? '';
    $section_8_image_url = wp_get_attachment_image_url($section_8_image, 'full');

    $section_8_marketing_lists = vc_param_group_parse_atts($atts['section_8_marketing_list']);

?>


    <!-- section 8 -->
    <section class="why-choose section-padding">
        <div class="container">

            <div class="row dis-flex">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="choose-img img-fit">
                        <img src="<?php echo $section_8_image_url ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="choose-content growth">
                        <div class="left-section-title">
                            <div class="bor"></div>
                            <h2><?php echo $section_8_title ?></h2>
                            <p><?php echo $section_8_description ?></p>
                            <ul>



                                <?php
                                foreach ($section_8_marketing_lists as $section_8_marketing_list) {
                                    $section_8_marketing_list_item =  $section_8_marketing_list['section_8_marketing_list_item']
                                ?>
                                    <li><?php echo $section_8_marketing_list_item; ?></li>
                                <?php
                                }
                                ?>



                            </ul>
                            <p><?php echo $section_8_short_description ?></p>
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
