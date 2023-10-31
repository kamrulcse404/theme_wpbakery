<?php


vc_map(
    array(
        "name" => __("Agency Hero Section", "growth_agency"), // Element name
        "base" => "agency_hero_section", // Element shortcode
        // 'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
        'description' => 'This is agency hero section',
        // "class" => "operiamo-banner",
        "category" => __('Agencty Growth Theme', 'growth_agency'),
        'params' => array(

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Hero Section Background Image", "growth_agency"),
                "param_name" => "hero_section_background_image",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Hero Section Image", "growth_agency"),
                "param_name" => "hero_section_image",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Hero Title", "growth_agency"),
                "param_name" => "hero_section_title",
                "value" => __("", "growth_agency"),
            ),

            array(
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Hero Description", "growth_agency"),
                "param_name" => "hero_section_description",
                "value" => __("", "growth_agency"),
            ),

        )
    )
);



add_shortcode('agency_hero_section', 'agency_hero_section_code');

function agency_hero_section_code($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'hero_section_background_image' => '',
        'hero_section_image' => '',
        'hero_section_title' => '',
        'hero_section_description' => '',
    ), $atts, 'agency_hero_section');

    $hero_section_background_image = $atts['hero_section_background_image'] ?? '';
    $hero_section_background_image_url = wp_get_attachment_image_url($hero_section_background_image, 'full');

    $hero_section_image = $atts['hero_section_image'] ?? '';
    $hero_section_image_url = wp_get_attachment_image_url($hero_section_image, 'full');

    $hero_section_title = $atts['hero_section_title'] ?? '';
    $hero_section_description = $atts['hero_section_description'] ?? '';

?>


    <section id="hero" class="section-padding">
        <div class="container">
            <div class="row dis-flex">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="hero-content">
                        <div class="bor"></div>
                        <h1><?php echo $hero_section_title; ?></h1>
                        <p><?php echo $hero_section_description; ?></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="hero-img">
                        <img src="<?php  echo $hero_section_image_url; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-opicty">
            <img src="<?php  echo $hero_section_background_image_url; ?>" alt="">
        </div>
    </section>




<?php
    $result = ob_get_clean();
    return $result;
}
