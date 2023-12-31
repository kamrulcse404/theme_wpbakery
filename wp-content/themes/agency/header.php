<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>

    <!-- Bootstrap -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <?php wp_head(); ?>
</head>

<body class="body_class">


    <!--Navbar-->
    <nav class="navbar navbar-light light-blue lighten-4">
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php global $growth_agency;
                                                                                echo $growth_agency['header-logo']['url'] ?>" alt=""></a>

            <!-- Collapse button -->
            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">


                <?php

                // wp_nav_menu(array(
                //     'theme_location' => 'header_menu',
                //     'container' => 'ul',
                //     'menu_class' => 'navbar-nav mr-auto',
                //     'link_before' => '<a class="nav-link">',
                //     'link_after' => '</a>',
                // ));

                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'container' => 'ul',
                    'menu_class' => 'navbar-nav mr-auto',
                   
                ));



                ?>


                <!-- Links -->


            </div>
            <!-- Collapsible content -->
        </div>

    </nav>
    <!--/.Navbar-->