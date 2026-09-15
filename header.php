<?php
/**
 * Header Template
 *
 * @package Seque_Infratech
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>

<!-- Sticky Social Sidebar -->
<aside class="social-sidebar" aria-label="Social media links">
  <a href="https://www.facebook.com/share/19N5kKEtQu/" class="social-btn social-fb" target="_blank" rel="noopener" aria-label="Facebook">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
  </a>
  <a href="https://www.linkedin.com/company/seque-infratech-inc/?viewAsMember=true" class="social-btn social-li" target="_blank" rel="noopener" aria-label="LinkedIn">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
  </a>
</aside>

<header class="site-header">
  <div class="wrap nav">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="brand" rel="home">
      <?php seque_the_logo('brand-logo'); ?>
      <span class="sub">EST. 2020</span>
    </a>

    <?php
    if (has_nav_menu('primary')) {
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class'=> 'nav-links',
            'fallback_cb'    => 'seque_primary_menu_fallback',
            'depth'          => 1,
        ]);
    } else {
        seque_primary_menu_fallback();
    }
    ?>

    <button class="nav-toggle" aria-label="<?php esc_attr_e('Toggle navigation', 'seque-infratech'); ?>"><span></span></button>
  </div>
</header>
