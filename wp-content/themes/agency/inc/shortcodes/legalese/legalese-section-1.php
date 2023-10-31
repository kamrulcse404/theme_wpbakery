<?php


vc_map(
    array(
        "name" => __("Agency Legalese Section 1", "growth_agency"), // Element name
        "base" => "agency_legalese_section_1", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is Agency legalese section 1',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Legalese Section 1 Title", "growth_agency"),
                "param_name" => "legalese_section_1_title",
                "value" => __("", "growth_agency"),
            ),


            array(
                'type' => 'param_group',
                'param_name' => 'legalese_section_1_lists',
                'params' => array(



                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Legalese Section 1 List Title", "growth_agency"),
                        "param_name" => "legalese_section_1_list_title",
                        "value" => __("", "growth_agency"),
                    ),

                    array(
                        "type" => "textarea",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Legalese Section 1 List Description", "growth_agency"),
                        "param_name" => "legalese_section_1_list_description",
                        "value" => __("", "growth_agency"),
                    ),

                )
            ),

        )
    )
);



add_shortcode('agency_legalese_section_1', 'agency_legalese_section_1_code');

function agency_legalese_section_1_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(

        'legalese_section_1_title' => '',
        'legalese_section_1_lists' => '',


    ), $atts, 'agency_legalese_section_1');


    $legalese_section_1_title = $atts['legalese_section_1_title'] ?? '';

    $legalese_section_1_lists = vc_param_group_parse_atts($atts['legalese_section_1_lists']);

?>


    <!-- section 1 -->
    <div class="lagacy section-padding">

        <div class="container">
            <div class="legal-content">
                <h1><?php echo $legalese_section_1_title; ?></h1>

                <ol>

                    <?php
                    if ($legalese_section_1_lists) {

                        foreach ($legalese_section_1_lists as $legalese_section_1_list) {
                            $legalese_section_1_list_title =  $legalese_section_1_list['legalese_section_1_list_title'];
                            $legalese_section_1_list_description =  $legalese_section_1_list['legalese_section_1_list_description']
                    ?>

                            <li>
                                <h2><?php echo $legalese_section_1_list_title; ?></h2>
                                <p><?php echo $legalese_section_1_list_description; ?></p>
                            </li>

                    <?php
                        }
                    }
                    ?>


                </ol>
            </div>
        </div>
    </div>




<?php
    $result = ob_get_clean();
    return $result;
}
