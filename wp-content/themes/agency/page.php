<?php

/**
 * Template Name: vc_template
 **/
get_header();

?>

<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>
<?php
while (have_posts()) {
    the_post();
    // get_template_part('loop-templates/content', 'page');
?>




<?php the_content(); ?> 




<?php

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
}
?>
<?php
get_footer();
