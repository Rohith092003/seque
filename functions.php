<?php
/**
 * Seque Infratech Theme Functions and Definitions
 *
 * @package Seque_Infratech
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function seque_theme_setup() {
    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', [
        'height'      => 44,
        'width'       => 180,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Switch default core markup for search form, comment form, etc. to valid HTML5
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Register navigation menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'seque-infratech'),
        'footer'  => __('Footer Menu', 'seque-infratech'),
    ]);
}
add_action('after_setup_theme', 'seque_theme_setup');

/**
 * Enqueue scripts and styles
 */
function seque_enqueue_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style(
        'seque-google-fonts',
        'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Sans+Condensed:wght@500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap',
        [],
        null
    );

    // Enqueue primary stylesheet
    wp_enqueue_style(
        'seque-style',
        get_stylesheet_uri(),
        ['seque-google-fonts'],
        '1.0.0'
    );

    // Enqueue main interactive script
    wp_enqueue_script(
        'seque-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        '1.0.0',
        true
    );

    // Pass dynamic URLs to frontend scripts
    wp_localize_script(
        'seque-main',
        'sequeData',
        [
            'homeUrl'         => esc_url(home_url('/')),
            'capabilitiesUrl' => esc_url(home_url('/capabilities/')),
            'contactUrl'      => esc_url(home_url('/contact/')),
        ]
    );
}
add_action('wp_enqueue_scripts', 'seque_enqueue_scripts');

/**
 * Helper to display custom logo or fallback image
 */
function seque_the_logo($class = 'brand-logo') {
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        $logo_url = get_template_directory_uri() . '/Logo-light.png';
        echo '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="' . esc_attr($class) . '">';
    }
}

/**
 * Fallback for Primary Navigation
 */
function seque_primary_menu_fallback() {
    $home_url = esc_url(home_url('/'));
    $about_url = esc_url(home_url('/about/'));
    $capabilities_url = esc_url(home_url('/capabilities/'));
    $logistics_url = esc_url(home_url('/logistics/'));
    $contact_url = esc_url(home_url('/contact/'));

    echo '<nav class="nav-links">';
    echo '<a href="' . $home_url . '" ' . (is_front_page() ? 'class="active"' : '') . '>Home</a>';
    echo '<a href="' . $about_url . '" ' . (is_page('about') ? 'class="active"' : '') . '>About</a>';
    echo '<a href="' . $capabilities_url . '" ' . (is_page('capabilities') ? 'class="active"' : '') . '>Capabilities</a>';
    echo '<a href="' . $logistics_url . '" ' . (is_page('logistics') ? 'class="active"' : '') . '>Logistics &amp; Network</a>';
    echo '<a href="' . $contact_url . '" class="nav-cta ' . (is_page('contact') ? 'active' : '') . '">Contact Us</a>';
    echo '</nav>';
}

/**
 * Fallback for Footer Navigation
 */
function seque_footer_menu_fallback() {
    echo '<ul>';
    echo '<li><a href="' . esc_url(home_url('/about/')) . '">About Us</a></li>';
    echo '<li><a href="' . esc_url(home_url('/capabilities/')) . '">Capabilities</a></li>';
    echo '<li><a href="' . esc_url(home_url('/logistics/')) . '">Logistics &amp; Network</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
    echo '</ul>';
}
