<!-- section 3 done -->
<section class="footer  team">
    <div class="container">
        <div class="call-action footer-sinup" id="contact-form">
            <div class="coll-content">
                <h3><?php global $growth_agency;
                    echo $growth_agency['footer-common-title'] ?>
                </h3>
                <p><?php global $growth_agency;
                    echo $growth_agency['footer-common-short-text'] ?></p>

                <!-- <form id="myForm" method="post">
                    <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="" placeholder="Enter your email" required>
                    <span><input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe"></span>
                </form> -->

                <?php echo do_shortcode('[mc4wp_form id=142]'); ?>


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
            <img src="<?php global $growth_agency;
                        echo $growth_agency['footer-logo']['url'] ?>" alt="">
            <ul>

                <li><a href="<?php global $growth_agency;
                                echo $growth_agency['footer-common-linkedin-url'] ?>"><i class="fa-brands fa-linkedin-in"></i></a></li>



            </ul>
        </div>
    </div>
</section>


<section class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p><?php global $growth_agency;
                    echo $growth_agency['footer-copy-rights'] ?></p>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><a href="#"><?php global $growth_agency;
                                    echo $growth_agency['footer-copy-right-terms'] ?></a></li>
                    <li>|</li>
                    <li><a href="#"><?php global $growth_agency;
                                    echo $growth_agency['footer-copy-right-privacy'] ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php wp_footer(); ?>
</body>

</html>