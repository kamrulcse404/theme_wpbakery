<?php

/**
 * Template Name: legalese
 **/
get_header();

?>


<!-- section 1 done -->
<div class="lagacy section-padding">

    <div class="container">
        <div class="legal-content">
            <h1><?php echo get_post_meta(get_the_ID(), 'legalese-container-title', true) ?></h1>

            <ol>

                <?php

                $legaleses = get_post_meta(get_the_ID(), 'legalese-page-items', true);

                foreach ($legaleses as $key => $legalese) {

                    $title = $des = '';

                    if (isset($legalese['legalese-container-item-title'])) {
                        $title = $legalese['legalese-container-item-title'];
                    }

                    if (isset($legalese['legalese-container-item-desc'])) {
                        $des = $legalese['legalese-container-item-desc'];
                    }
                ?>

                    <li>
                        <h2><?php echo $title ?></h2>
                        <p><?php echo $des ?></p>
                    </li>

                <?php
                }
                ?>


            </ol>
        </div>
    </div>
</div>


<!-- section 2 done -->
<!-- <section class="footer  team">
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
</section> -->

<?php
get_footer();
?>