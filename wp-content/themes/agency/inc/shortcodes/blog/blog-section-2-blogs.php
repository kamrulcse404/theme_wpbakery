<?php


vc_map(
    array(
        "name" => __("Agency Blog Section 2 Blogs", "growth_agency"), // Element name
        "base" => "agency_blog_section_2_blogs", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is Agency Blog section 2 Blogs',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                'type' => 'param_group',
                'param_name' => 'blog_section_2_blogs',
                'params' => array(

                    array(
                        "type" => "attach_image",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 2 Blog Image", "growth_agency"),
                        "param_name" => "blog_section_2_blog_image",
                        "value" => __("", "growth_agency"),
                    ),

                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 2 Blog Tag", "growth_agency"),
                        "param_name" => "section_2_blog_tag",
                        "value" => __("", "growth_agency"),
                    ),

                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 2 Blog Date", "growth_agency"),
                        "param_name" => "section_2_blog_date",
                        "value" => __("", "growth_agency"),
                    ),


                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 2 Blog Title", "growth_agency"),
                        "param_name" => "section_2_blog_title",
                        "value" => __("", "growth_agency"),
                    ),

                    array(
                        "type" => "textarea",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 2 Blog Description", "growth_agency"),
                        "param_name" => "section_2_blog_description",
                        "value" => __("", "growth_agency"),
                    ),

                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Section 2 Blog Link Text", "growth_agency"),
                        "param_name" => "section_2_blog_link_text",
                        "value" => __("", "growth_agency"),
                    ),

                )
            ),

            



        )
    )
);



add_shortcode('agency_blog_section_2_blogs', 'agency_blog_section_2_code');

function agency_blog_section_2_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(

        'blog_section_2_blogs' => '',


    ), $atts, 'agency_blog_section_2_blogs');


    $blog_section_2_blogs = vc_param_group_parse_atts($atts['blog_section_2_blogs']);

?>


    <!-- section 2 -->
    <!--====== Start Blog Section ======-->
    <section class="blog-standard-section pt-130 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">


                    <div class="blog-standard-wrapper">

                        <?php
                        foreach ($blog_section_2_blogs as $key => $blog_section_2_blog) {

                            $blog_section_2_blog_image = $blog_section_2_blog['blog_section_2_blog_image'];
                            $blog_section_2_blog_image_url = wp_get_attachment_image_url($blog_section_2_blog_image, 'full');

                            $section_2_blog_tag = $blog_section_2_blog['section_2_blog_tag'];
                            $section_2_blog_date = $blog_section_2_blog['section_2_blog_date'];
                            $section_2_blog_title = $blog_section_2_blog['section_2_blog_title'];
                            $section_2_blog_description = $blog_section_2_blog['section_2_blog_description'];
                            $section_2_blog_link_text = $blog_section_2_blog['section_2_blog_link_text'];


                        ?>

                            <div class="blog-standard-post-item mb-60 wow fadeInUp" data-wow-delay=".15s">
                                <div class="post-thumbnail">
                                    <img src="<?php echo $blog_section_2_blog_image_url ?>" alt="Post Image">
                                </div>
                                <div class="entry-content">
                                    <div class="post-meta">
                                        <ul>
                                            <li><span><a href="#" class="cat-link"><?php echo $section_2_blog_tag ?></a></span></li>
                                            <li><span><i class="far fa-calendar-alt"></i><a href="#"><?php echo $section_2_blog_date ?></a></span></li>

                                        </ul>
                                    </div>
                                    <h3 class="title"><a href="#"><?php echo $section_2_blog_title ?></a></h3>
                                    <p><?php echo $section_2_blog_description ?></p>
                                    <a href="#" class="main-btn bordered-btn btn-blue arrow-btn"><?php echo $section_2_blog_link_text ?></a>
                                </div>
                            </div>

                        <?php

                        }
                        ?>


                    </div>


                </div>


                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar-widget-area">
                        <div class="widget search-widget mb-30 wow fadeInUp">
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Search here" name="email" required>
                                    <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget category-widget mb-30 wow fadeInUp">
                            <h4 class="widget-title">Category</h4>
                            <ul class="category-nav">
                                <li><a href="#">Organic Vegetables<span><i class="fa-solid fa-arrow-right"></i></span></a></li>
                                <li><a href="#">Fresh Jack Fruits<span><i class="fa-solid fa-arrow-right"></i></span></a></li>
                                <li><a href="#">Chicken Meat & Eggs<span><i class="fa-solid fa-arrow-right"></i></span></a></li>
                                <li><a href="#">Organic Wheats<span><i class="fa-solid fa-arrow-right"></i></span></a></li>
                                <li><a href="#">Cow Meat & Milk<span><i class="fa-solid fa-arrow-right"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="widget contact-info-widget bg_cover mb-30 wow fadeInUp" style="background-image: url(assets/images/widget/contact-1.jpg);">
                            <div class="contact-info-box text-center">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h4><a href="tel:+01234567899">+0123 (456) 7899</a></h4>
                                    <h5><a href="mailto:support@gmail.com">support@gmail.com</a></h5>

                                </div>
                            </div>
                        </div>
                        <div class="widget recent-post-widget mb-30 wow fadeInUp">
                            <h4 class="widget-title">Recent News</h4>
                            <ul class="recent-post-list">
                                <li class="post-thumbnail-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-1.jpg" alt="post image">
                                    <div class="post-title-date">
                                        <h6><a href="blog-details.html">Guide Modern CSS Colors HWB, LAB</a></h6>
                                        <span class="posted-on">By <a href="#">Somalia D. Silba</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-2.jpg" alt="post image">
                                    <div class="post-title-date">
                                        <h6><a href="blog-details.html">Guide Modern CSS Colors HWB, LAB</a></h6>
                                        <span class="posted-on">By <a href="#">Somalia D. Silba</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-3.jpg" alt="post image">
                                    <div class="post-title-date">
                                        <h6><a href="blog-details.html">Guide Modern CSS Colors HWB, LAB</a></h6>
                                        <span class="posted-on">By <a href="#">Somalia D. Silba</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget tag-cloud-widget mb-30 wow fadeInUp">
                            <h4 class="widget-title">Popular Tags</h4>
                            <div class="tag-list">
                                <a href="#">3D Creative</a>
                                <a href="#">Agency</a>
                                <a href="#">Digital</a>
                                <a href="#">Web Design</a>
                                <a href="#">Strategy</a>
                                <a href="#">UX/UI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Blog Section ======-->




<?php
    $result = ob_get_clean();
    return $result;
}
