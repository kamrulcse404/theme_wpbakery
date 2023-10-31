<?php


vc_map(
    array(
        "name" => __("Agency Section 14", "growth_agency"), // Element name
        "base" => "agency_section_14", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 14',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(




            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 14 Title", "growth_agency"),
                "param_name" => "section_14_title",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "textarea_html",
                "holder" => "",
                "cpluss" => "",
                "heading" => __("Section 14 Content", "growth_agency"),
                "param_name" => "section_14_content",
                "value" => __("", "growth_agency"),
            ),



            array(
                'type' => 'param_group',
                'param_name' => 'section_14_modules',
                'params' => array(



                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 14 Module Price", "growth_agency"),
                        "param_name" => "section_14_module_price",
                        "value" => __("", "growth_agency"),
                    ),

                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 14 Module ", "growth_agency"),
                        "param_name" => "section_14_module_duration",
                        "value" => __("", "growth_agency"),
                    ),


                    array(
                        'type' => 'param_group',
                        'param_name' => 'section_14_module_tags',
                        'params' => array(

                            array(
                                "type" => "attach_image",
                                "holder" => "",
                                "class" => "",
                                "heading" => __("Section 14 Icon", "growth_agency"),
                                "param_name" => "section_14_icon",
                                "value" => __("", "growth_agency"),
                            ),

                            array(
                                "type" => "textfield",
                                "holder" => "",
                                "class" => "",
                                "heading" => __("Section 14 Module Tag", "growth_agency"),
                                "param_name" => "section_14_module_tag",
                                "value" => __("", "growth_agency"),
                            ),

                        )
                    ),


                )
            ),




        )
    )
);



add_shortcode('agency_section_14', 'agency_section_14_code');

function agency_section_14_code($atts, $content = null)
{
    ob_start();
    $atts = shortcode_atts(array(
        'section_14_title' => '',
        'section_14_content' => '',
        'section_14_modules' => '',
    ), $atts, 'agency_section_14');

    $section_14_title = $atts['section_14_title'] ?? '';
    $section_14_content = $atts['section_14_content'] ?? '';
    $section_14_modules = vc_param_group_parse_atts($atts['section_14_modules']);

    // Start rendering the section
?>
    <!-- section 14 -->
    <section class="section-padding price">
        <div class="container">
            <div class="center-section-title">
                <div class="bor bor2"></div>
                <h2 id="pricing"><?php echo $section_14_title ?></h2>
            </div>
            <div class="price-content">
                <?php echo $section_14_content ?>
            </div>
            <div class="row">
                <?php
                if ($section_14_modules) {
                    foreach ($section_14_modules as $section_14_module) {
                        $section_14_module_price = $section_14_module['section_14_module_price'];
                        $section_14_module_duration = $section_14_module['section_14_module_duration'];
                ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price-box">
                                <h3><?php echo $section_14_module_price; ?>/</h3>
                                <p><?php echo $section_14_module_duration; ?></p>
                                <ul>
                                    <?php
                                    if (isset($section_14_module['section_14_module_tags'])) {
                                        $section_14_module_tags = vc_param_group_parse_atts($section_14_module['section_14_module_tags']);
                                        foreach ($section_14_module_tags as $section_14_module_tag_list) {
                                            $section_14_module_tag = $section_14_module_tag_list['section_14_module_tag'];
                                            $section_14_icon = $section_14_module_tag_list['section_14_icon'];
                                            $section_14_icon_url = wp_get_attachment_image_url($section_14_icon, 'full');
                                    ?>
                                            <li><img src="<?php echo $section_14_icon_url; ?>" alt=""><?php echo $section_14_module_tag; ?></li>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
<?php
    // End rendering the section
    $result = ob_get_clean();
    return $result;
}
