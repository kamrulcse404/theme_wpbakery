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



                )
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
                    if ($section_12_table_rows) {


                        foreach ($section_12_table_rows as $section_12_table_row) {
                            $section_12_table_row_title =  $section_12_table_row['section_12_table_row_title'];

                    ?>


                            <div class="step-iteam">
                                <div class="step-left bule-dark ">
                                    <p><?php echo  $section_12_table_row_title ?></p>
                                </div>
                                <div class="step-right bule-light firstbule-light">
                                    <ul>
                                        <li>Audit marketing's revenue contribution potential based on internal unit economics
                                            and external competitive environment.</li>
                                        <li>Establish a prioritized roadmap for marketing to execute against and needed
                                            resources</li>
                                        <h5>CHECKLIST:</h5>
                                    </ul>
                                    <div class="list-box">
                                        <ul>
                                            <li>Channel and Campaign Analysisg</li>
                                            <li>Data-driven Marketing Roadmap</li>
                                            <li>Trackin</li>
                                        </ul>
                                        <ul>
                                            <li>Recommendations</li>
                                            <li>Tech Stack Recommendations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- step-iteam -->


                            <div class="step-iteam">
                                <div class="step-left red-dark ">
                                    <p>2. Paid Media (Outbound)</p>
                                </div>
                                <div class="step-right red-light ">
                                    <ul>
                                        <li>Identify quick wins to scale short-term lead flow and pipeline</li>
                                        <li>Build long-term demand generation strategy and forecast budget required.</li>
                                        <li>Train in-house team to manage and optimize campaigns</li>
                                        <h5>CHECKLIST:</h5>
                                    </ul>
                                    <div class="list-box">
                                        <ul>
                                            <li>Current Paid Media Analysis</li>
                                            <li>Paid Media Opportunity Mapping</li>

                                        </ul>
                                        <ul>
                                            <li>Quick Wins and Optimizations Roadmap</li>
                                            <li>Spend Recommendations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- step-iteam -->


                    <?php
                        }
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
