<?php
/**
 * Template part for displaying CTA Band
 *
 * @package Seque_Infratech
 */

$heading = !empty($args['heading']) ? $args['heading'] : __('Ready to fuel your next mission-critical project?', 'seque-infratech');
$btn_text = !empty($args['button_text']) ? $args['button_text'] : __('Get in touch', 'seque-infratech');
$btn_url = !empty($args['button_url']) ? $args['button_url'] : home_url('/contact/');
?>
<section class="cta-band">
  <div class="wrap">
    <h2><?php echo esc_html($heading); ?></h2>
    <a href="<?php echo esc_url($btn_url); ?>" class="btn btn-outline-dark"><?php echo esc_html($btn_text); ?></a>
  </div>
</section>
