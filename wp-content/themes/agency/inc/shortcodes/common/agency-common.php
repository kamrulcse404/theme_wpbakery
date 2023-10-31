<?php


vc_map(
    array(
        "name" => __("Agency Common Widget", "growth_agency"), // Element name
        "base" => "agency_blog_section_3", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is Agency Blog section 3',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Blog Section 3 Title", "growth_agency"),
                "param_name" => "blog_section_3_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea_html",
                "holder" => "",
                "class" => "",
                "heading" => __("Blog Section 3 Description", "growth_agency"),
                "param_name" => "blog_section_3_description",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Blog Section 3 Footer Logo", "growth_agency"),
                "param_name" => "blog_section_3_footer_logo",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Blog Section 3 Footer LinkedIn Url", "growth_agency"),
                "param_name" => "blog_section_3_footer_linkedin_url",
                "value" => __("", "growth_agency"),
            ),


        )
    )
);



add_shortcode('agency_blog_section_3', 'agency_blog_section_3_code');

function agency_blog_section_3_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(

        'blog_section_3_title' => '',
        'blog_section_3_description' => '',

        'blog_section_3_footer_logo' => '',

        'blog_section_3_footer_linkedin_url' => '',


    ), $atts, 'agency_blog_section_3');


    $blog_section_3_title = $atts['blog_section_3_title'] ?? '';
    $blog_section_3_description = $atts['blog_section_3_description'] ?? '';

    $blog_section_3_footer_linkedin_url = $atts['blog_section_3_footer_linkedin_url'] ?? '';

    $blog_section_3_footer_logo = $atts['blog_section_3_footer_logo'] ?? '';
    $blog_section_3_footer_logo_url = wp_get_attachment_image_url($blog_section_3_footer_logo, 'full');

?>



    <!-- section 3 -->
    <section class="footer  team">
        <div class="container">
            <div class="call-action footer-sinup" id="contact-form">
                <div class="coll-content">
                    <h3>
                        <?php echo $blog_section_3_title; ?>
                    </h3>
                    <p> <?php echo $blog_section_3_description; ?></p>

                    <form id="myForm" method="post">
                        <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="" placeholder="Enter your email" required>
                        <span><input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe"></span>
                    </form>

                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script type="text/javascript">
                        document.getElementById('myForm').addEventListener('submit', function(e) {
                            e.preventDefault();

                            var email = document.getElementById('mce-EMAIL').value;

                            // Create a unique callback function name
                            var callbackName = 'jsonp_callback_' + Math.round(100000 * Math.random());

                            // Define the callback function
                            window[callbackName] = function(response) {
                                if (response.result === 'success') {
                                    swal("Good job!", "You are subscribed!", "success");
                                } else {
                                    swal("Oops!", "Something went wrong!", "error");
                                }

                                // Clean up the callback function
                                delete window[callbackName];
                            };

                            // Replace with your Mailchimp URL and append the callback function name
                            var mailchimpUrl = 'https://startupecology.us14.list-manage.com/subscribe/post-json?u=89fd2f33d62af8ac28515df07&id=8d30b461a0&EMAIL=' + encodeURIComponent(email) + '&c=' + callbackName;

                            // Use JSONP to submit the form data
                            var script = document.createElement('script');
                            script.src = mailchimpUrl;
                            document.body.appendChild(script);
                            script.onload = function() {
                                // Remove the script element after the form is submitted
                                document.body.removeChild(script);
                            };
                        });
                    </script>

                </div>
            </div>
            <div class="fotter-logo">
                <img src="<?php echo $blog_section_3_footer_logo_url; ?>" alt="">
                <ul>

                    <li><a href="<?php echo $blog_section_3_footer_linkedin_url; ?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </section>




<?php
    $result = ob_get_clean();
    return $result;
}
