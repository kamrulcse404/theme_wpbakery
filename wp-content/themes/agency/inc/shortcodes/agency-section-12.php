<?php


vc_map(
    array(
        "name" => __("Agency Section 12", "growth_agency"), // Element name
        "base" => "agency_section_12", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 12',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 12 Title", "growth_agency"),
                "param_name" => "section_12_title",
                "value" => __("", "growth_agency"),
            ),


            array(
                'type' => 'param_group',
                'param_name' => 'section_12_table_rows',
                'params' => array(

                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 12 Table Row Title", "growth_agency"),
                        "param_name" => "section_12_table_row_title",
                        "value" => __("", "growth_agency"),
                    ),

                    array(
                        'type' => 'param_group',
                        'param_name' => 'section_12_table_row_description_lists',
                        'params' => array(

                            array(
                                "type" => "textfield",
                                "holder" => "",
                                "class" => "",
                                "heading" => __("Section 12 Table Row Description Lists", "growth_agency"),
                                "param_name" => "section_12_table_description_list",
                                "value" => __("", "growth_agency"),
                            ),

                        )
                    ),


                    array(
                        'type' => 'param_group',
                        'param_name' => 'section_12_table_row_check_lists',
                        'params' => array(

                            array(
                                "type" => "textfield",
                                "holder" => "",
                                "class" => "",
                                "heading" => __("Section 12 Table Row Check Lists", "growth_agency"),
                                "param_name" => "section_12_table_checklist",
                                "value" => __("", "growth_agency"),
                            ),

                        )
                    ),

                    array(
                        'type' => 'param_group',
                        'param_name' => 'section_12_table_row_check_lists_right',
                        'params' => array(

                            array(
                                "type" => "textfield",
                                "holder" => "",
                                "class" => "",
                                "heading" => __("Section 12 Table Row Check Lists Right", "growth_agency"),
                                "param_name" => "section_12_table_checklist_right",
                                "value" => __("", "growth_agency"),
                            ),

                        )
                    ),

                    // Landing Page & Optimizations Roadmap
                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 12 Row Sub Title", "growth_agency"),
                        "param_name" => "section_12_row_sub_title",
                        "value" => __("", "growth_agency"),
                    ),


                    array(
                        'type' => 'param_group',
                        'param_name' => 'section_12_table_row_desc_after_lists',
                        'params' => array(

                            array(
                                "type" => "textfield",
                                "holder" => "",
                                "class" => "",
                                "heading" => __("Section 12 Table Row Description After List", "growth_agency"),
                                "param_name" => "section_12_table_row_desc_after_check_list",
                                "value" => __("", "growth_agency"),
                            ),

                        )
                    ),

                ),


            ),

        )
    )
);



add_shortcode('agency_section_12', 'agency_section_12_code');

function agency_section_12_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(

        'section_12_title' => '',
        'section_12_table_rows' => '',


    ), $atts, 'agency_section_12');


    $section_12_title = $atts['section_12_title'] ?? '';
    $section_12_table_rows = vc_param_group_parse_atts($atts['section_12_table_rows']);



?>


    <!-- section 12 -->
    <section class="section-padding the-steps">
        <div class="container">
            <div class="center-section-title">
                <div class="bor bor2"></div>
                <h2 id=features><?php echo $section_12_title; ?></h2>
            </div>
            <div class="step-conatiner">
                <div class="step-inner">

                    <?php
                    foreach ($section_12_table_rows as $key => $section_12_table_row) {

                        $len = count($section_12_table_rows);
                        $section_12_table_row_title =  $section_12_table_row['section_12_table_row_title'] ?? '';

                    ?>



                        <div class="step-iteam">
                            <div class="step-left <?php if (($key + 1) % 2 == 0) {
                                                        echo 'red-dark';
                                                    } elseif (($key + 1) % 2 == 1) {
                                                        echo 'bule-dark';
                                                    }
                                                    ?> 
                                                                 <?php if ($key == 0) {
                                                                        echo 'firstbule';
                                                                    } elseif ($key == $len - 1) {
                                                                        echo 'seceond-dark';
                                                                    }
                                                                    ?> ">
                                <p><?php echo $section_12_table_row_title; ?></p>
                            </div>
                            <div class="step-right 
                                <?php if (($key + 1) % 2 == 0) {
                                    echo 'red-light';
                                } elseif (($key + 1) % 2 == 1) {
                                    echo 'bule-light';
                                }
                                ?>  <?php if ($key == 0) {
                                        echo 'firstbule-light';
                                    } elseif ($key == $len - 1) {
                                        echo 'seceond-light';
                                    }
                                    ?> ">
                                <ul>







                                    <?php


                                    if (isset($section_12_table_row['section_12_table_row_description_lists'])) {

                                        $section_12_table_row_description_lists = vc_param_group_parse_atts($section_12_table_row['section_12_table_row_description_lists']);

                                        foreach ($section_12_table_row_description_lists as $section_12_table_description_list) {

                                            $section_12_table_description_list = $section_12_table_description_list['section_12_table_description_list'] ?? '';

                                    ?>
                                            <?php if (!empty($section_12_table_description_list)) { ?>

                                                <li><?php echo $section_12_table_description_list; ?></li>

                                            <?php } ?>


                                    <?php
                                        }
                                    }
                                    ?>


                                    <?php


                                    if (isset($section_12_table_row['section_12_table_row_check_lists'])) {

                                        $section_12_table_row_check_lists = vc_param_group_parse_atts($section_12_table_row['section_12_table_row_check_lists']);

                                        if (isset($section_12_table_row_check_lists['section_12_table_checklist'])) {

                                    ?>

                                            <h5>CHECKLIST:</h5>

                                    <?php
                                        }
                                    }

                                    ?>






                                </ul>
                                <div class="list-box">



                                    <ul>


                                        <?php
                                        if (isset($section_12_table_row['section_12_table_row_check_lists'])) {

                                            $section_12_table_row_check_lists = vc_param_group_parse_atts($section_12_table_row['section_12_table_row_check_lists']);



                                            foreach ($section_12_table_row_check_lists as $section_12_table_row_check_list) {

                                                $section_12_table_checklist = $section_12_table_row_check_list['section_12_table_checklist'] ?? '';

                                                // print_r($section_12_table_checklist);

                                        ?>

                                                <?php if (!empty($section_12_table_checklist)) { ?>

                                                    <li><?php echo $section_12_table_checklist; ?></li>
                                                <?php } ?>


                                        <?php
                                            }
                                        }
                                        ?>

                                    </ul>

                                    <ul>


                                        <?php
                                        if (!empty($section_12_table_row['section_12_table_row_check_lists_right'])) {

                                            $section_12_table_row_check_lists_right = vc_param_group_parse_atts($section_12_table_row['section_12_table_row_check_lists_right']);


                                            foreach ($section_12_table_row_check_lists_right as $section_12_table_row_check_list_right) {

                                                $section_12_table_checklist_right = $section_12_table_row_check_list_right['section_12_table_checklist_right'] ?? '';

                                        ?>

                                                <?php if (!empty($section_12_table_checklist_right)) { ?>

                                                    <li><?php echo $section_12_table_checklist_right; ?></li>

                                                <?php } ?>

                                        <?php
                                            }
                                        }
                                        ?>

                                    </ul>






                                </div>

                                <!-- sub title  -->
                                <?php

                                if (!empty($section_12_table_row['section_12_row_sub_title'])) {
                                    $section_12_row_sub_title =  $atts['section_12_title'] ?? '';
                                    if (!empty($section_12_row_sub_title)) {

                                ?>

                                        <h5>
                                            <?php echo $section_12_row_sub_title ?>

                                        </h5>

                                <?php
                                    }
                                }
                                ?>


                                <!-- after lists  -->

                                <ul>


                                    <?php


                                    if (isset($section_12_table_row['section_12_table_row_desc_after_lists'])) {

                                        $section_12_table_row_desc_after_lists = vc_param_group_parse_atts($section_12_table_row['section_12_table_row_desc_after_lists']);

                                        foreach ($section_12_table_row_desc_after_lists as $section_12_table_row_desc_after_list) {

                                            $section_12_table_row_desc_after_check_list = $section_12_table_row_desc_after_list['section_12_table_row_desc_after_check_list'] ?? '';

                                    ?>
                                            <?php if (!empty($section_12_table_row_desc_after_check_list)) { ?>

                                                <li><?php echo $section_12_table_row_desc_after_check_list; ?></li>

                                            <?php } ?>


                                    <?php
                                        }
                                    }
                                    ?>


                                </ul>







                            </div>
                        </div>



                    <?php

                    }
                    ?>




                </div>
            </div><!-- step-conatiner -->
        </div>
    </section>


<?php
    $result = ob_get_clean();
    return $result;
}
