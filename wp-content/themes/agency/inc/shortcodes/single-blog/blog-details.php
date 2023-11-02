<?php


vc_map(
    array(
        "name" => __("Agency Blog Details", "growth_agency"), // Element name
        "base" => "agency_blog_details", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is Agency Details',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section 2 Blog Image", "growth_agency"),
                "param_name" => "blog_section_2_blog_image",
                "value" => __("", "growth_agency"),
            ),


        )
    )
);



add_shortcode('agency_blog_details', 'agency_blog_details_code');

function agency_blog_details_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(

        'blog_section_1_title' => '',


    ), $atts, 'agency_blog_details');



?>


    <!-- single section 1  -->
    <!--====== Start Blog Details section ======-->
    <section class="blog-details-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 ">
                    <div class="blog-details-wrapper wow fadeInUp">


                        <div class="blog-post-item">
                            <div class="post-thumbnail mb-30">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/standard-2.jpg" alt="">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <ul>
                                        <li><span><a href="#" class="cat-link">Web Design</a></span></li>
                                        <li><span><i class="far fa-calendar-alt"></i><a href="#">25 March 2022</a></span></li>

                                    </ul>
                                </div>
                                <h3 class="title">Powerful Terminal And Command Line Seeny Tools Modern Designing Better Links For Websites</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau
                                    dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernate
                                    aut odit aut fugit, sed quia consequuntur magni dolores eosqui ratione voluptatem nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipise velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                                <div class="content-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/standard-3.jpg" alt="">
                                </div>
                                <h4>Designing Better Links For Websites And Emails Guideline Useful VS Code Extensions For Front-End Developers</h4>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernate odit aut fugit quia coquuntur magni dolores eosqui ratione voluptatem nesciunt eque porro quisquam est qui dolorem epsum quia dolor sit amet, consectetur adipise velit sed quia non numquam</p>
                                <ul class="list-style-one mb-45">
                                    <li>Digital Creative Agency</li>
                                    <li>Professional Problem Solutions</li>
                                    <li>Web Design & Development</li>
                                </ul>

                                <div class="post-share-tag mb-30">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="post-tag-cloud mb-30">
                                                <ul>
                                                    <li class="item-heading">Tags :</li>
                                                    <li><a href="#">Graphics</a></li>
                                                    <li><a href="#">Digital</a></li>
                                                    <li><a href="#">Web UX/UI</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="social-share float-lg-right mb-30">
                                                <ul class="social-link">
                                                    <li class="item-heading">Share :</li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--====== End Blog Details section ======-->




<?php
    $result = ob_get_clean();
    return $result;
}
