<?php

get_header();

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
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                   


                                    <li><span><i class="far fa-calendar-alt"></i><a href="#"><?php echo get_the_date(); ?></a></span></li>

                                </ul>
                            </div>
                            <h3 class="title"><?php echo get_the_title(); ?></h3>
                            <p> <?php echo the_content(); ?></p>
                            <!-- <div class="content-img">
                                <img src="<?php //echo get_template_directory_uri(); 
                                            ?>/assets/images/standard-3.jpg" alt="">
                            </div>
                            <h4>Designing Better Links For Websites And Emails Guideline Useful VS Code Extensions For Front-End Developers</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernate odit aut fugit quia coquuntur magni dolores eosqui ratione voluptatem nesciunt eque porro quisquam est qui dolorem epsum quia dolor sit amet, consectetur adipise velit sed quia non numquam</p>
                            <ul class="list-style-one mb-45">
                                <li>Digital Creative Agency</li>
                                <li>Professional Problem Solutions</li>
                                <li>Web Design & Development</li>
                            </ul> -->

                            <div class="post-share-tag mb-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="post-tag-cloud mb-30">
                                            <ul>
                                                <li class="item-heading">Tags :</li>
                                                <?php
                                                $post_tags = get_the_tags();
                                                if ($post_tags) {
                                                    foreach ($post_tags as $tag) {
                                                        echo '<li><a href="' . get_tag_link($tag) . '">' . esc_html($tag->name) . '</a></li>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="social-share float-lg-right mb-30">
                                            <ul class="social-link">
                                                <li class="item-heading">Share :</li>

                                                <li><a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink()); ?>"><i class="fab fa-facebook-f"></i></a></li>

                                                <li><a href="https://twitter.com/intent/tweet?url=<?php echo esc_url(get_permalink()); ?>"><i class="fab fa-twitter"></i></a></li>


                                                <li><a href="https://www.behance.net/sharer/project?project_id=<?php echo esc_url(get_permalink()); ?>"><i class="fab fa-behance"></i></a></li>

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
get_footer();
?>