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
