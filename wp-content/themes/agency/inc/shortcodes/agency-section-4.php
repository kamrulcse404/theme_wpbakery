<?php


vc_map(
    array(
        "name" => __("Agency Section 4", "growth_agency"), // Element name
        "base" => "agency_section_4", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 4',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 4 Title", "growth_agency"),
                "param_name" => "section_4_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea_html",
                "holder" => "",
                "cpluss" => "",
                "heading" => __("Section 4 Content", "growth_agency"),
                "param_name" => "section_4_content",
                "value" => __("", "growth_agency"),
            ),




            array(
                'type' => 'param_group',
                'param_name' => 'section_4_marketing_list_1',
                'params' => array(

                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 4 Left Marketing List", "growth_agency"),
                        "param_name" => "section_4_left_marketing_list",
                        "value" => __("", "growth_agency"),
                    ),

                )
            ),


            array(
                'type' => 'param_group',
                'param_name' => 'section_4_marketing_list_2',
                'params' => array(

                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 4 Right Marketing List", "growth_agency"),
                        "param_name" => "section_4_right_marketing_list",
                        "value" => __("", "growth_agency"),
                    ),

                )
            ),



            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 4 Sub-Title", "growth_agency"),
                "param_name" => "section_4_sub_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 4 Button Text", "growth_agency"),
                "param_name" => "section_4_button_text",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 4 Short Text", "growth_agency"),
                "param_name" => "section_4_short_text",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 4 Image", "growth_agency"),
                "param_name" => "section_4_image",
                "value" => __("", "growth_agency"),
            ),
        )
    )
);



add_shortcode('agency_section_4', 'agency_section_4_code');

function agency_section_4_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'section_4_title' => '',
        'section_4_content' => '',

        'section_4_marketing_list_1' => '',
        'section_4_marketing_list_2' => '',

        'section_4_sub_title' => '',
        'section_4_button_text' => '',
        'section_4_short_text' => '',
        'section_4_image' => '',

    ), $atts, 'agency_section_4');

    $section_4_title = $atts['section_4_title'] ?? '';
    $section_4_content = $atts['section_4_content'] ?? '';

    $section_4_marketing_list_1 = vc_param_group_parse_atts($atts['section_4_marketing_list_1']);
    $section_4_marketing_list_2 = vc_param_group_parse_atts($atts['section_4_marketing_list_2']);

    $section_4_sub_title = $atts['section_4_sub_title'] ?? '';

    $section_4_button_text = $atts['section_4_button_text'] ?? '';
    $section_4_short_text = $atts['section_4_short_text'] ?? '';

    $section_4_image = $atts['section_4_image'] ?? '';
    $section_4_image_url = wp_get_attachment_image_url($section_4_image, 'full');

?>


    <!-- section 4 -->
    <section class="marketing">
        <div class="marketing-banner">
            <div class="row dis-flex">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="markteing-content">
                        <div class="left-section-title">
                            <div class="bor"></div>
                            <h2>
                                <?php echo $section_4_title; ?>
                            </h2>
                        </div>
                        <?php echo $section_4_content; ?>

                        <div class="list-marketing">


                            <ul>
                                <?php
                                foreach ($section_4_marketing_list_1 as $section_4_marketing_list_1_item) {
                                    $section_4_marketing_list_1_item_list =  $section_4_marketing_list_1_item['section_4_left_marketing_list']
                                ?>
                                    <li><?php echo $section_4_marketing_list_1_item_list; ?></li>
                                <?php
                                }
                                ?>
                            </ul>


                            <ul>
                                <?php
                                foreach ($section_4_marketing_list_2 as $section_4_marketing_list_2_item) {
                                    $section_4_marketing_list_2_item_list =  $section_4_marketing_list_2_item['section_4_right_marketing_list']
                                ?>
                                    <li><?php echo $section_4_marketing_list_2_item_list; ?></li>
                                <?php
                                }
                                ?>
                            </ul>


                        </div>
                        <h4>
                            <?php echo $section_4_sub_title; ?>
                        </h4>
                        <div class="gobal-btn dis-flex">
                            <a href="https://usemotion.com/meet/atma/30min" target="_blank"><?php echo $section_4_button_text; ?></a>
                            <p><?php echo $section_4_short_text; ?></p>
                        </div>

                    </div><!-- markteing-content -->
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="img-fit">
                        <img src="<?php echo $section_4_image_url; ?>" alt="">
                    </div>
                </div>
            </div>
        </div><!-- marketing-banner -->

    </section>




<?php
    $result = ob_get_clean();
    return $result;
}
