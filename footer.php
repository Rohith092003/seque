<?php
/**
 * Footer Template
 *
 * @package Seque_Infratech
 */
?>
<footer class="site-footer">
  <div class="wrap">
    <div class="footer-grid">
      <div>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-brand" aria-label="<?php bloginfo('name'); ?>">
          <?php seque_the_logo('footer-logo'); ?>
        </a>
        <p><?php esc_html_e('Driven by trust. Defined by performance. A DLA-approved, WOSB-certified fuel and logistics partner.', 'seque-infratech'); ?></p>
      </div>

      <div>
        <h4><?php esc_html_e('COMPANY', 'seque-infratech'); ?></h4>
        <?php
        if (has_nav_menu('footer')) {
            wp_nav_menu([
                'theme_location' => 'footer',
                'container'      => false,
                'fallback_cb'    => 'seque_footer_menu_fallback',
                'depth'          => 1,
            ]);
        } else {
            seque_footer_menu_fallback();
        }
        ?>
      </div>

      <div>
        <h4><?php esc_html_e('CONTACT', 'seque-infratech'); ?></h4>
        <ul>
          <li><a href="https://maps.app.goo.gl/3ZBm2KGMsPB7rSFC9" target="_blank" rel="noopener noreferrer" style="color:inherit; text-decoration:none;" title="<?php esc_attr_e('View in Google Maps', 'seque-infratech'); ?>">10 Lafayette Square, Suite #1502<br>Buffalo, New York 14203</a></li>
          <li><a href="mailto:iola@sequeinfratech.com">iola@sequeinfratech.com</a></li>
          <li><a href="tel:+17167046184">+1 716 704 6184</a></li>
        </ul>
      </div>

      <div>
        <h4><?php esc_html_e('CREDENTIALS', 'seque-infratech'); ?></h4>
        <ul>
          <li>CAGE Code: 8LH32</li>
          <li>WOSB Certified — SBA, 2023</li>
          <li>DLA-Approved Supplier</li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?> Inc. <?php esc_html_e('All rights reserved.', 'seque-infratech'); ?></span>
      <span>Buffalo, New York</span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
