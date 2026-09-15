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
        '1.0.10'
    );

    // Enqueue main interactive script
    wp_enqueue_script(
        'seque-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        '1.0.9',
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
 * Helper to check if a core page is current (supporting both DB pages and fallback routes)
 */
function seque_is_current_page($slug) {
    if (is_page($slug)) {
        return true;
    }
    $path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?? '', '/');
    $site_path = trim(parse_url(home_url(), PHP_URL_PATH) ?? '', '/');
    if ($site_path && strpos($path, $site_path) === 0) {
        $path = trim(substr($path, strlen($site_path)), '/');
    }
    $aliases = [
        'about'        => ['about', 'about-us'],
        'capabilities' => ['capabilities', 'our-capabilities'],
        'logistics'    => ['logistics', 'logistics-network', 'logistics-and-network'],
        'contact'      => ['contact', 'contact-us'],
    ];
    if (isset($aliases[$slug]) && in_array($path, $aliases[$slug], true)) {
        return true;
    }
    return false;
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
    echo '<a href="' . $about_url . '" ' . (seque_is_current_page('about') ? 'class="active"' : '') . '>About</a>';
    echo '<a href="' . $capabilities_url . '" ' . (seque_is_current_page('capabilities') ? 'class="active"' : '') . '>Capabilities</a>';
    echo '<a href="' . $logistics_url . '" ' . (seque_is_current_page('logistics') ? 'class="active"' : '') . '>Logistics &amp; Network</a>';
    echo '<a href="' . $contact_url . '" class="nav-cta ' . (seque_is_current_page('contact') ? 'active' : '') . '">Contact Us</a>';
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

/**
 * Core Route Definitions Helper
 */
function seque_get_core_routes() {
    return [
        'about' => [
            'template' => 'page-about.php',
            'title'    => __('About Us', 'seque-infratech'),
            'slugs'    => ['about', 'about-us'],
        ],
        'capabilities' => [
            'template' => 'page-capabilities.php',
            'title'    => __('Capabilities', 'seque-infratech'),
            'slugs'    => ['capabilities', 'our-capabilities'],
        ],
        'logistics' => [
            'template' => 'page-logistics.php',
            'title'    => __('Logistics & Network', 'seque-infratech'),
            'slugs'    => ['logistics', 'logistics-network', 'logistics-and-network'],
        ],
        'contact' => [
            'template' => 'page-contact.php',
            'title'    => __('Contact Us', 'seque-infratech'),
            'slugs'    => ['contact', 'contact-us'],
        ],
    ];
}

/**
 * Early Route & Title Detection for Core Pages
 * Runs at priority 1 of template_redirect to clear 404 state before any headers or titles are generated.
 */
function seque_detect_core_page_early() {
    $request_uri = $_SERVER['REQUEST_URI'] ?? '';
    $path = trim(parse_url($request_uri, PHP_URL_PATH) ?? '', '/');

    // Handle WordPress installed in a subdirectory
    $site_path = trim(parse_url(home_url(), PHP_URL_PATH) ?? '', '/');
    if ($site_path && strpos($path, $site_path) === 0) {
        $path = trim(substr($path, strlen($site_path)), '/');
    }

    $routes = seque_get_core_routes();

    foreach ($routes as $key => $route) {
        if (in_array($path, $route['slugs'], true)) {
            $GLOBALS['seque_fallback_page_key'] = $key;
            $GLOBALS['seque_fallback_page_title'] = $route['title'];

            global $wp_query;
            if ($wp_query) {
                $wp_query->is_404 = false;
                $wp_query->is_page = true;
                $wp_query->is_singular = true;
            }
            status_header(200);
            break;
        }
    }
}
add_action('template_redirect', 'seque_detect_core_page_early', 1);

/**
 * Direct Fallback Router for Core Theme Pages
 * Guarantees that /about/, /capabilities/, /logistics/, and /contact/
 * always display their full template, even if pages haven't been created in WP Admin yet.
 */
function seque_route_core_pages_fallback($template) {
    if (empty($GLOBALS['seque_fallback_page_key'])) {
        return $template;
    }

    $routes = seque_get_core_routes();
    $key = $GLOBALS['seque_fallback_page_key'];

    if (isset($routes[$key])) {
        $located = locate_template($routes[$key]['template']);
        if ($located) {
            return $located;
        }
    }

    return $template;
}
add_filter('template_include', 'seque_route_core_pages_fallback', 99);

/**
 * Enforce Page Titles (pre_get_document_title)
 * Ensures browser tab title is NEVER "Page not found"
 */
add_filter('pre_get_document_title', function($title) {
    if (!empty($GLOBALS['seque_fallback_page_title'])) {
        $sep = apply_filters('document_title_separator', '—');
        return $GLOBALS['seque_fallback_page_title'] . ' ' . $sep . ' ' . get_bloginfo('name', 'display');
    }
    return $title;
}, 999);

/**
 * Filter Document Title Parts
 */
add_filter('document_title_parts', function($title_parts) {
    if (!empty($GLOBALS['seque_fallback_page_title'])) {
        $title_parts['title'] = $GLOBALS['seque_fallback_page_title'];
        unset($title_parts['error']);
    }
    return $title_parts;
}, 999);

/**
 * Legacy wp_title Filter
 */
add_filter('wp_title', function($title, $sep = '—') {
    if (!empty($GLOBALS['seque_fallback_page_title'])) {
        return $GLOBALS['seque_fallback_page_title'] . ' ' . $sep . ' ';
    }
    return $title;
}, 999, 2);

/**
 * SEO Plugin Compatibility (Yoast, Rank Math, AIOSEO)
 */
add_filter('wpseo_title', function($title) {
    if (!empty($GLOBALS['seque_fallback_page_title'])) {
        return $GLOBALS['seque_fallback_page_title'] . ' — ' . get_bloginfo('name', 'display');
    }
    return $title;
}, 999);

add_filter('rank_math/frontend/title', function($title) {
    if (!empty($GLOBALS['seque_fallback_page_title'])) {
        return $GLOBALS['seque_fallback_page_title'] . ' — ' . get_bloginfo('name', 'display');
    }
    return $title;
}, 999);

add_filter('aioseo_title', function($title) {
    if (!empty($GLOBALS['seque_fallback_page_title'])) {
        return $GLOBALS['seque_fallback_page_title'] . ' — ' . get_bloginfo('name', 'display');
    }
    return $title;
}, 999);

/**
 * Filter Body Classes for Fallback Routes
 */
add_filter('body_class', function($classes) {
    if (!empty($GLOBALS['seque_fallback_page_key'])) {
        $key = $GLOBALS['seque_fallback_page_key'];
        $classes[] = 'page';
        $classes[] = 'page-template';
        $classes[] = 'page-template-page-' . $key;
        $classes = array_diff($classes, ['error404']);
    }
    return $classes;
});

/**
 * Automatically ensure core pages exist in WordPress database
 */
function seque_ensure_core_pages() {
    // Only check if not marked complete or if an administrator is browsing
    if (get_option('seque_core_pages_installed_v1') && !is_user_logged_in()) {
        return;
    }

    $pages = [
        'about' => [
            'title'    => 'About Us',
            'template' => 'page-about.php',
            'aliases'  => ['about', 'about-us'],
        ],
        'capabilities' => [
            'title'    => 'Capabilities',
            'template' => 'page-capabilities.php',
            'aliases'  => ['capabilities', 'our-capabilities'],
        ],
        'logistics' => [
            'title'    => 'Logistics & Network',
            'template' => 'page-logistics.php',
            'aliases'  => ['logistics', 'logistics-network', 'logistics-and-network'],
        ],
        'contact' => [
            'title'    => 'Contact Us',
            'template' => 'page-contact.php',
            'aliases'  => ['contact', 'contact-us'],
        ],
    ];

    $needs_flush = false;

    foreach ($pages as $slug => $data) {
        $found_page = get_page_by_path($slug);

        // Check alternate aliases
        if (!$found_page) {
            foreach ($data['aliases'] as $alias) {
                $p = get_page_by_path($alias);
                if ($p) {
                    $found_page = $p;
                    break;
                }
            }
        }

        // Check by title using get_posts
        if (!$found_page) {
            $existing_posts = get_posts([
                'post_type'      => 'page',
                'title'          => $data['title'],
                'post_status'    => ['publish', 'draft', 'private'],
                'posts_per_page' => 1,
                'no_found_rows'  => true,
            ]);
            if (!empty($existing_posts)) {
                $found_page = $existing_posts[0];
            }
        }

        if ($found_page) {
            // Ensure publish status and proper template
            if ($found_page->post_status !== 'publish') {
                wp_update_post([
                    'ID'          => $found_page->ID,
                    'post_status' => 'publish',
                ]);
            }
            $current_template = get_post_meta($found_page->ID, '_wp_page_template', true);
            if ($current_template !== $data['template']) {
                update_post_meta($found_page->ID, '_wp_page_template', $data['template']);
            }
        } else {
            // Create page automatically
            $new_page_id = wp_insert_post([
                'post_title'     => $data['title'],
                'post_name'      => $slug,
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
                'ping_status'    => 'closed',
            ]);
            if ($new_page_id && !is_wp_error($new_page_id)) {
                update_post_meta($new_page_id, '_wp_page_template', $data['template']);
                $needs_flush = true;
            }
        }
    }

    if ($needs_flush) {
        flush_rewrite_rules(false);
    }
    update_option('seque_core_pages_installed_v1', 1);
}
add_action('init', 'seque_ensure_core_pages');

/**
 * Customizer settings for Forminator and Contact Form
 */
function seque_customize_register($wp_customize) {
    $wp_customize->add_section('seque_contact_section', [
        'title'       => __('Contact Form Settings', 'seque-infratech'),
        'priority'    => 130,
        'description' => __('Configure Forminator contact form for the Contact page.', 'seque-infratech'),
    ]);

    $wp_customize->add_setting('seque_forminator_form_id', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);

    $wp_customize->add_control('seque_forminator_form_id', [
        'label'       => __('Forminator Form ID or Shortcode', 'seque-infratech'),
        'description' => __('Enter your Forminator Form ID (e.g. 123) or complete shortcode (e.g. [forminator_form id="123"]). If left empty, the theme automatically detects published Forminator forms or page content.', 'seque-infratech'),
        'section'     => 'seque_contact_section',
        'type'        => 'text',
    ]);
}
add_action('customize_register', 'seque_customize_register');

