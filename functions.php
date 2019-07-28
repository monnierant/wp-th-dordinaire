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

register_nav_menu('BottomLeft', 'NavigationFooterLeft');
register_nav_menu('BottomMiddle', 'NavigationFooterMiddle');
register_nav_menu('BottomRight', 'NavigationFooterRight');


function themeslug_customize_register($wp_customize)
{
    $wp_customize->add_section('dordinaire_section', array(
        'title' => 'DorDinAire',
        'description'   => 'Les réglages du thème'
    ));

    $wp_customize->add_setting('dordinaire_bg_img_settings', array(
        //default value
    ));

    $wp_customize->add_setting('dordinaire_logo_img_settings', array(
        //default value
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dordinaire_bg_img_control', array(
        'label' => 'Image de fond',
        'settings'  => 'dordinaire_bg_img_settings',
        'section'   => 'dordinaire_section'
    )));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dordinaire_logo_img_control', array(
        'label' => 'Image de Logo',
        'settings'  => 'dordinaire_logo_img_settings',
        'section'   => 'dordinaire_section'
    )));
}

add_action('customize_register', 'themeslug_customize_register');
