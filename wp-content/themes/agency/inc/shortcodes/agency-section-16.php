<?php


vc_map(
    array(
        "name" => __("Agency Section 16", "growth_agency"), // Element name
        "base" => "agency_section_16", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency section 16',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(




            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 16 Title", "growth_agency"),
                "param_name" => "section_16_title",
                "value" => __("", "growth_agency"),
            ),



            array(
                'type' => 'param_group',
                'param_name' => 'section_16_blogs',
                'params' => array(



                    array(
                        "type" => "attach_image",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 16 Blog Image", "growth_agency"),
                        "param_name" => "section_16_blog_image",
                        "value" => __("", "growth_agency"),
                    ),


                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 16 Blog Title", "growth_agency"),
                        "param_name" => "section_16_blog_title",
                        "value" => __("", "growth_agency"),
                    ),


                   


                    array(
                        "type" => "textarea",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 16 Blog Details", "growth_agency"),
                        "param_name" => "section_16_blog_details",
                        "value" => __("", "growth_agency"),
                    ),


                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 16 Blog Link Text", "growth_agency"),
                        "param_name" => "section_16_blog_link_text",
                        "value" => __("", "growth_agency"),
                    ),



                )
            ),


            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 16 All Blogs", "growth_agency"),
                "param_name" => "section_16_all_blogs_text",
                "value" => __("", "growth_agency"),
            ),

        )
    )
);



add_shortcode('agency_section_16', 'agency_section_16_code');

function agency_section_16_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(

        'section_16_title' => '',
        'section_16_blogs' => '',
        'section_16_all_blogs_text' => '',

    ), $atts, 'agency_section_16');

    $section_16_title = $atts['section_16_title'] ?? '';
    $section_16_all_blogs_text = $atts['section_16_all_blogs_text'] ?? '';

    $section_16_blogs = vc_param_group_parse_atts($atts['section_16_blogs']);


    // $section_15_image = $atts['section_15_image'] ?? '';
    // $section_15_image_url = wp_get_attachment_image_url($section_15_image, 'full');


?>


    <!-- section 16 -->
    <section class="blog section-padding">
        <div class="container">
            <div class="center-section-title">
                <div class="bor bor2"></div>
                <h2>
                    <?php echo $section_16_title; ?>
                </h2>
            </div>
            <div class="row">


                <?php
                if ($section_16_blogs) {


                    foreach ($section_16_blogs as $section_16_blog) {

                        $section_16_blog_image =  $section_16_blog['section_16_blog_image'];
                        $section_16_blog_image_url = wp_get_attachment_image_url($section_16_blog_image, 'full');
                        $section_16_blog_title =  $section_16_blog['section_16_blog_title'];
                        $section_16_blog_link_text =  $section_16_blog['section_16_blog_link_text'];
                        $section_16_blog_details =  $section_16_blog['section_16_blog_details'];

                ?>


                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-content">
                                <img src="<?php echo $section_16_blog_image_url; ?>" alt="">
                                <h3><?php echo $section_16_blog_title; ?></h3>
                                <p><?php echo $section_16_blog_details; ?></p>
                                <a href="#"><?php echo $section_16_blog_link_text; ?></a>
                            </div>
                        </div>



                <?php
                    }
                }
                ?>


            </div>

            <div class="gobal-btn center-btn">
                <a href="#"><?php echo $section_16_all_blogs_text; ?></a>
                
            </div>
        </div>
    </section>



<?php
    $result = ob_get_clean();
    return $result;
}
