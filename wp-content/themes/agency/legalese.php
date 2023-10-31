<?php

/**
 * Template Name: legalese
 **/
get_header();

?>


<!-- section 1 -->
<div class="lagacy section-padding">

    <div class="container">
        <div class="legal-content">
            <h1>Legal Disclosures for Growth Bastards</h1>

            <ol>
                <li>
                    <h2>Copyright Notice:</h2>
                    <p>All content on this website, including articles, graphics, logos, and other files, is the property of Growth Bastards and is protected by copyright and other intellectual property laws. Reproduction or reuse of any content without explicit written permission is prohibited.</p>
                </li>

                <li>
                    <h2>Disclaimer:</h2>
                    <p>The content on this website is provided for informational and educational purposes only. While we strive to ensure the accuracy and timeliness of the information, Growth Bastards makes no representations or warranties of any kind, express or implied, about the completeness, accuracy, or suitability of the content for any purpose. Reliance on any information on this website is strictly at the user's own risk.</p>
                </li>

                <li>
                    <h2>Limitation of Liability:</h2>
                    <p>Growth Bastards will not be liable for any direct, indirect, incidental, consequential, or any other damages arising out of the use of this website or the reliance on any information provided herein.</p>
                </li>

                <li>
                    <h2>Privacy Policy:</h2>
                    <p>We respect the privacy of our website visitors. While we do not collect any personal information from users unless provided voluntarily, we might use cookies or similar technologies for analytics and to improve user experience. Please refer to our full Privacy Policy for detailed information on data collection and use.</p>
                </li>

                <li>
                    <h2>Links to External Websites:</h2>
                    <p>This website may contain links to external websites not managed or controlled by Growth Bastards. We do not endorse, nor are we responsible for, the content or privacy practices of those external websites.</p>
                </li>

                <li>
                    <h2>Governing Law:</h2>
                    <p>The laws of the State of New York govern the use of this website and any disputes related to it.</p>
                </li>

                <li>
                    <h2>Changes to Disclosures:</h2>
                    <p>Growth Bastards reserves the right to update or modify these disclosures at any time without prior notice. Users are encouraged to periodically review this page for the latest information.</p>
                </li>
            </ol>
        </div>
    </div>
</div>


<!-- section 2 -->
<section class="footer  team">
    <div class="container">
        <div class="call-action footer-sinup" id="join">
            <div class="coll-content">
                <h3>Ready to Grow Your Business with Growth Bastards?
                </h3>
                <p>Stay connected and we will get back to you. Don't worry, we are here for your business growth not to send you spam emails.</p>

                <form action="">
                    <input type="email" name="" id="" placeholder="  Enter your email" required>
                    <span><input type="submit" name="" id="" value="Subscribe"></span>
                    <div class="icon-mail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" alt="">
                    </div>
                    <div class="rocket-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rocket.png" alt="">
                    </div>
                </form>
            </div>
        </div>
        <div class="fotter-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="">
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </div>
</section>

<?php
get_footer();
?>