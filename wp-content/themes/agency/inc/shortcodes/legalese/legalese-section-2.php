<?php


vc_map(
    array(
        "name" => __("Agency Legalese Section 2", "growth_agency"), // Element name
        "base" => "agency_legalese_section_2", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is Agency legalese section 2',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Legalese Section 2 Title", "growth_agency"),
                "param_name" => "legalese_section_2_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Legalese Section 2 Short Text", "growth_agency"),
                "param_name" => "legalese_section_2_short_text",
                "value" => __("", "growth_agency"),
            ),


            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Legalese Section 2 Footer Mail Icon", "growth_agency"),
                "param_name" => "legalese_section_2_footer_mail_icon",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Legalese Section 2 Footer Subscribe Icon", "growth_agency"),
                "param_name" => "legalese_section_2_footer_sub_icon",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Legalese Section 2 Footer Logo", "growth_agency"),
                "param_name" => "legalese_section_2_footer_logo",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Legalese Section 2 Footer Facebook Url", "growth_agency"),
                "param_name" => "legalese_section_2_footer_fb_url",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Legalese Section 2 Footer Instagram Url", "growth_agency"),
                "param_name" => "legalese_section_2_footer_insta_url",
                "value" => __("", "growth_agency"),
            ),
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Legalese Section 2 Footer LinkedIn Url", "growth_agency"),
                "param_name" => "legalese_section_2_footer_linkedin_url",
                "value" => __("", "growth_agency"),
            ),

        )
    )
);



add_shortcode('agency_legalese_section_2', 'agency_legalese_section_2_code');

function agency_legalese_section_2_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(

        'legalese_section_2_title' => '',
        'legalese_section_2_short_text' => '',

        'legalese_section_2_footer_logo' => '',
        'legalese_section_2_footer_mail_icon' => '',
        'legalese_section_2_footer_sub_icon' => '',


        'legalese_section_2_footer_fb_url' => '', 
        'legalese_section_2_footer_insta_url' => '', 
        'legalese_section_2_footer_linkedin_url' => '', 


    ), $atts, 'agency_legalese_section_2');


    $legalese_section_2_title = $atts['legalese_section_2_title'] ?? '';
    $legalese_section_2_short_text = $atts['legalese_section_2_short_text'] ?? '';

    $legalese_section_2_footer_fb_url = $atts['legalese_section_2_footer_fb_url'] ?? '';
    $legalese_section_2_footer_insta_url = $atts['legalese_section_2_footer_insta_url'] ?? '';
    $legalese_section_2_footer_linkedin_url = $atts['legalese_section_2_footer_linkedin_url'] ?? '';

    $legalese_section_2_footer_logo = $atts['legalese_section_2_footer_logo'] ?? '';
    $legalese_section_2_footer_logo_url = wp_get_attachment_image_url($legalese_section_2_footer_logo, 'full');

    $legalese_section_2_footer_mail_icon = $atts['legalese_section_2_footer_mail_icon'] ?? '';
    $legalese_section_2_footer_mail_icon_url = wp_get_attachment_image_url($legalese_section_2_footer_mail_icon, 'full');

    $legalese_section_2_footer_sub_icon = $atts['legalese_section_2_footer_sub_icon'] ?? '';
    $legalese_section_2_footer_sub_icon_url = wp_get_attachment_image_url($legalese_section_2_footer_sub_icon, 'full');

?>


    <!-- section 2 -->
    <section class="footer  team">
        <div class="container">
            <div class="call-action footer-sinup" id="join">
                <div class="coll-content">
                    <h3>
                        <?php echo $legalese_section_2_title ?>
                    </h3>
                    <p> <?php echo $legalese_section_2_short_text ?></p>

                    <form action="">
                        <input type="email" name="" id="" placeholder="  Enter your email" required>
                        <span><input type="submit" name="" id="" value="Subscribe"></span>
                        <div class="icon-mail">
                            <img src="<?php echo $legalese_section_2_footer_mail_icon_url; ?>" alt="">
                        </div>
                        <div class="rocket-icon">
                            <img src="<?php echo $legalese_section_2_footer_sub_icon_url; ?>" alt="">
                        </div>
                    </form>
                </div>
            </div>
            <div class="fotter-logo">
                <img src="<?php echo $legalese_section_2_footer_logo_url; ?>" alt="">
                <ul>
                    <li><a href="<?php echo $legalese_section_2_footer_fb_url ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href<?php echo $legalese_section_2_footer_insta_url ?>"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href<?php echo $legalese_section_2_footer_linkedin_url ?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </section>



<?php
    $result = ob_get_clean();
    return $result;
}
