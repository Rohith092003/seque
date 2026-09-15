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
  <a href="https://www.facebook.com/sequeinfratech" class="social-btn social-fb" target="_blank" rel="noopener" aria-label="Facebook">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
  </a>
  <a href="https://www.youtube.com/@sequeinfratech" class="social-btn social-yt" target="_blank" rel="noopener" aria-label="YouTube">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#FF0000"/></svg>
  </a>
  <a href="https://www.instagram.com/sequeinfratech" class="social-btn social-ig" target="_blank" rel="noopener" aria-label="Instagram">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="transparent"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
  </a>
  <a href="https://www.linkedin.com/company/sequeinfratech" class="social-btn social-li" target="_blank" rel="noopener" aria-label="LinkedIn">
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
