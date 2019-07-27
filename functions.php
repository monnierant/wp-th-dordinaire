<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function themeslug_enqueue_style()
{
    wp_enqueue_style('core', trailingslashit(get_template_directory_uri()) . 'style.css', false);
    //wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
}

function themeslug_enqueue_script()
{
    wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'themeslug_enqueue_style');
add_action('wp_enqueue_scripts', 'themeslug_enqueue_script');

register_nav_menu('Top', 'NavigationPrincipale');
