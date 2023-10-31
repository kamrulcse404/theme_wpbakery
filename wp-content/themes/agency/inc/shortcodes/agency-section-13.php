<?php


vc_map(
    array(
        "name" => __("Agency Section 13", "growth_agency"), // Element name
        "base" => "agency_section_13", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 13',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 13 Title", "growth_agency"),
                "param_name" => "section_13_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 13 Sub Title", "growth_agency"),
                "param_name" => "section_13_sub_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 13 Short Text", "growth_agency"),
                "param_name" => "section_13_short_text",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 13 Boss Image", "growth_agency"),
                "param_name" => "section_13_boss_image",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 13 Boss Name", "growth_agency"),
                "param_name" => "section_13_boss_name",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 13 Boss Title", "growth_agency"),
                "param_name" => "section_13_boss_title",
                "value" => __("", "growth_agency"),
            ),


            array(
                'type' => 'param_group',
                'param_name' => 'section_13_employee_lists',
                'params' => array(

                    array(
                        "type" => "attach_image",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 13 Employee Image", "growth_agency"),
                        "param_name" => "section_13_employee_image",
                        "value" => __("", "growth_agency"),
                    ),

                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 13 Employee Name", "growth_agency"),
                        "param_name" => "section_13_employee_name",
                        "value" => __("", "growth_agency"),
                    ),

                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 13 Employee Designation", "growth_agency"),
                        "param_name" => "section_13_employee_designation",
                        "value" => __("", "growth_agency"),
                    ),

                )
            ),

        )
    )
);



add_shortcode('agency_section_13', 'agency_section_13_code');

function agency_section_13_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(

        'section_13_title' => '',
        'section_13_sub_title' => '',
        'section_13_short_text' => '',
        'section_13_employee_lists' => '',

        'section_13_boss_image' => '',
        'section_13_boss_name' => '',
        'section_13_boss_title' => '',

    ), $atts, 'agency_section_13');


    $section_13_title = $atts['section_13_title'] ?? '';
    $section_13_sub_title = $atts['section_13_sub_title'] ?? '';
    $section_13_short_text = $atts['section_13_short_text'] ?? '';

    $section_13_boss_name = $atts['section_13_boss_name'] ?? '';
    $section_13_boss_title = $atts['section_13_boss_title'] ?? '';

    $section_13_boss_image = $atts['section_13_boss_image'] ?? '';
    $section_13_boss_image_url = wp_get_attachment_image_url($section_13_boss_image, 'full');

    $section_13_employee_lists = vc_param_group_parse_atts($atts['section_13_employee_lists']);



?>


    <!-- section 13 -->
    <section class="team">
        <div class="container">
            <div class="center-section-title team-title">
                <div class="bor bor2"></div>
                <h2><?php echo $section_13_title; ?></h2>
                <h4><?php echo $section_13_sub_title; ?></h4>
                <p><?php echo $section_13_short_text; ?></p>
            </div>


            <div class="boss">
                <img src="<?php echo $section_13_boss_image_url; ?>" alt="">
                <h5><?php echo $section_13_boss_name; ?></h5>
                <p><?php echo $section_13_boss_title; ?></p>
            </div>


            <div class="team-container">

                <?php
                if ($section_13_employee_lists) {


                    foreach ($section_13_employee_lists as $section_13_employee_list) {
                        $section_13_employee_image =  $section_13_employee_list['section_13_employee_image'];
                        $section_13_employee_image_url = wp_get_attachment_image_url($section_13_employee_image, 'full');

                        $section_13_employee_name =  $section_13_employee_list['section_13_employee_name'];
                        $section_13_employee_designation =  $section_13_employee_list['section_13_employee_designation'];
                ?>

                        <div class="team-iteam">
                            <img src="<?php echo  $section_13_employee_image_url; ?>" alt="">
                            <h5><?php echo  $section_13_employee_name; ?></h5>
                            <p><?php echo  $section_13_employee_designation; ?></p>
                        </div><!-- team-iteam -->

                <?php
                    }
                }
                ?>


            </div>
        </div>
    </section>


<?php
    $result = ob_get_clean();
    return $result;
}
