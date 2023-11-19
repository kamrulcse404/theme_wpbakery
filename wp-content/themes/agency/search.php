<?php
get_header();
?>

<!-- single section 1 -->
<!--====== Start Blog Details section ======-->
<section class="blog-details-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="blog-details-wrapper wow fadeInUp">

                    <?php if (is_search()) : ?>
                        <!-- Display search results -->
                        <h2>Search Results for: "<?php echo get_search_query(); ?>"</h2>
                        <?php if (have_posts()) : ?>
                            <div class="search-results">
                                <?php while (have_posts()) : the_post(); ?>
                                    <div class="search-result-item">
                                        <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php else : ?>
                            <p>No search results found.</p>
                        <?php endif; ?>
                    <?php else : ?>
                        <!-- Display regular post content -->
                        <div class="blog-post-item">
                            <!-- Your existing post content code goes here -->
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Blog Details section ======-->

<?php
get_footer();
?>
