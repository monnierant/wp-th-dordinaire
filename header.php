<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>

<body>

    <!-- Navigation -->
    <nav id="navigation" class="navbar navbar-expand-lg navbar-light bg-light fixed-top mb-5 shadow">
        <div class="container">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'Top',
                    'depth'              => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbarResponsive',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ));
                ?>

            </div>
        </div>
    </nav>