<?php

/**
 * Template Name: blog
 **/
get_header();

?>

<!-- section 1 -->
<section class="welcome">
    <div class="container">
        <h2>Our Latest Blog
        </h2>
        <p>We always keep ourselves with the latest trends and manners. See our latest blog to learn more & keep yourself updated.

        </p>
    </div>
</section>



<!--====== Start Blog Section ======-->
<section class="blog-standard-section pt-130 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-standard-wrapper">
                    <div class="blog-standard-post-item mb-60 wow fadeInUp" data-wow-delay=".15s">
                        <div class="post-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg3-672x448.jpg" alt="Post Image">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                    <li><span><a href="#" class="cat-link">Web Design</a></span></li>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">25 March 2022</a></span></li>

                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">Powerful Terminal And Command Line Seeny
                                    Tools Modern Web Development</a></h3>
                            <p>Sit amet consectetur adipiscing elit sed do eiusmod temp didunt ut labore et dolore magna aliqua suspendisse</p>
                            <a href="blog-details.html" class="main-btn bordered-btn btn-blue arrow-btn">Read More</a>
                        </div>
                    </div>

                    <div class="blog-standard-post-item mb-60 wow fadeInUp" data-wow-delay=".20s">
                        <div class="post-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.png" alt="Post Image">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                    <li><span><a href="#" class="cat-link">Web Design</a></span></li>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">25 March 2022</a></span></li>

                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">Everything You Want To Know About Creating Voice User Interfaces Powerful Terminal</a></h3>
                            <p>Sit amet consectetur adipiscing elit sed do eiusmod temp didunt ut labore et dolore magna aliqua suspendisse</p>
                            <a href="blog-details.html" class="main-btn bordered-btn btn-blue arrow-btn">Read More</a>
                        </div>
                    </div>

                    <div class="blog-standard-post-item post-without-thumbnail mb-60 wow fadeInUp" data-wow-delay=".25s">
                        <div class="post-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/standard-3.jpg" alt="Post Image">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                    <li><span><a href="#" class="cat-link">Web Design</a></span></li>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">25 March 2022</a></span></li>

                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">Designing Better Link Websites And Emails Guideline
                                    Everything You Want To Know Creating Voice</a></h3>
                            <p>On the other hand, we denounce with righteous indignation and dislike men aresc
                                beguiled and demoralized by the charms of pleasure of the moment</p>
                            <a href="blog-details.html" class="main-btn bordered-btn btn-blue arrow-btn">Read More</a>
                        </div>
                    </div>
                    <div class="blog-standard-post-item mb-60 wow fadeInUp" data-wow-delay=".30s">
                        <div class="post-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/standard-2.jpg" alt="Post Image">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                    <li><span><a href="#" class="cat-link">Web Design</a></span></li>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">25 March 2022</a></span></li>

                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">Everything You Want To Know About Creating Voice User Interfaces Powerful Terminal</a></h3>
                            <p>Sit amet consectetur adipiscing elit sed do eiusmod temp didunt ut labore et dolore magna aliqua suspendisse</p>
                            <a href="blog-details.html" class="main-btn bordered-btn btn-blue">Read More</a>
                        </div>
                    </div>

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


<section class="footer  team">
    <div class="container">
        <div class="call-action footer-sinup" id="contact-form">
            <div class="coll-content">
                <h3>Ready to Grow Your Business with Growth Bastards?
                </h3>
                <p>Stay connected and we will get back to you. Don’t worry, we are here for your business growth not to send you spam emails.</p>

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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="">
            <ul>

                <li><a href="https://www.linkedin.com/company/growth-bastards/"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </div>
</section>


<?php
get_footer();
?>