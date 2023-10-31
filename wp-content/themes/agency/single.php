<?php

get_header();

?>


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