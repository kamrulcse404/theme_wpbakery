<?php

/**
 * Template Name: blog
 **/
get_header();

?>

<!-- section 1 done -->
<section class="welcome" style="background: linear-gradient(90deg, rgba(19, 19, 19, 0.501) 0%, rgba(0, 0, 0, 0.7959558823529411) 100%), url('<?php echo get_post_meta(get_the_ID(), 'blog-container-background', true) ?>') bottom center;">
    <div class="container">
        <h1><?php echo get_post_meta(get_the_ID(), 'blog-container-title', true) ?></h1>
        <p><?php echo get_post_meta(get_the_ID(), 'blog-container-desc', true) ?></p>
    </div>


</section>



<!-- section 2 -->
<!--====== Start Blog Section ======-->
<section class="blog-standard-section pt-130 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">


                <div class="blog-standard-wrapper">

                    <?php

                    $blogs = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'paged' => $paged,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ));



                    while ($blogs->have_posts()) {
                        $blogs->the_post();
                    ?>

                        <div class="blog-standard-post-item mb-60 wow fadeInUp" data-wow-delay=".15s">
                            <div class="post-thumbnail">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Image">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <ul>
                                        <?php
                                        $tags = get_the_tags(); // Get the post's tags
                                        if ($tags) {
                                            foreach ($tags as $tag) {
                                                echo '<li><span><a href="' . esc_url(get_tag_link($tag)) . '" class="tag-link">' . esc_html($tag->name) . '</a></span></li>';
                                            }
                                        }
                                        ?>


                                        <li><span><i class="far fa-calendar-alt"></i><a href="#"><?php echo get_the_date(); ?></a></span></li>


                                    </ul>
                                </div>
                                <h3 class="title"><a href<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="main-btn bordered-btn btn-blue arrow-btn">Read More</a>
                            </div>
                        </div>


                    <?php

                    }
                    wp_reset_postdata()

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

                        <?php
                        // echo get_search_form();
                        ?>
                    </div>


                    <div class="widget category-widget mb-30 wow fadeInUp">
                        <h4 class="widget-title">Category</h4>


                        <ul class="category-nav">
                            <?php
                            // Get the categories
                            $categories = get_categories();

                            // Loop through the categories and generate list items
                            foreach ($categories as $category) {
                                $category_link = get_category_link($category->term_id);
                            ?>
                                <li><a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category->name); ?><span><i class="fa-solid fa-arrow-right"></i></span></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>


                    <div class="widget contact-info-widget bg_cover mb-30 wow fadeInUp" style="background-image: url(assets/images/widget/contact-1.jpg);">
                        <div class="contact-info-box text-center">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="info">

                                <h4><a href="tel:<?php echo get_post_meta(get_the_ID(), 'blog-contact-number', true) ?>"><?php echo get_post_meta(get_the_ID(), 'blog-contact-number', true) ?></a></h4>

                                <h5><a href="mailto:<?php echo get_post_meta(get_the_ID(), 'blog-contact-email', true) ?>"><?php echo get_post_meta(get_the_ID(), 'blog-contact-email', true) ?></a></h5>

                            </div>
                        </div>
                    </div>


                    <div class="widget recent-post-widget mb-30 wow fadeInUp">
                        <h4 class="widget-title">Recent News</h4>
                        <ul class="recent-post-list">

                            <?php
                            $blogs = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'paged' => $paged,
                                'orderby' => 'date',
                                'order' => 'DESC',
                            ));

                            while ($blogs->have_posts()) {
                                $blogs->the_post(); ?>

                                <li class="post-thumbnail-content">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="post image">
                                    <div class="post-title-date">
                                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                        <span class="posted-on">By <a href="#"><?php the_author(); ?></a></span>
                                    </div>
                                </li>

                            <?php
                            }

                            wp_reset_postdata();
                            ?>



                        </ul>
                    </div>


                    <div class="widget tag-cloud-widget mb-30 wow fadeInUp">
                        <h4 class="widget-title">Popular Tags</h4>

                        <div class="tag-list">
                            <?php
                            $tags = get_tags(); // Retrieve the list of tags

                            foreach ($tags as $tag) {
                                echo '<a href="' . get_tag_link($tag) . '">' . $tag->name . '</a>';
                            }
                            ?>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Blog Section ======-->




<?php
get_footer();
?>