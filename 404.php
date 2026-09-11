<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Seque_Infratech
 */

get_header();
?>

<section class="page-hero" style="padding: 100px 0 80px;">
  <div class="wrap page-hero-inner">
    <div class="breadcrumb"><span class="amber">STATUS 404</span> · <?php esc_html_e( 'Route Not Found', 'seque-infratech' ); ?></div>
    <h1><?php esc_html_e( 'Coordinates Unresolved.', 'seque-infratech' ); ?></h1>
    <p><?php esc_html_e( 'The corridor or document you requested could not be located on our network.', 'seque-infratech' ); ?></p>
  </div>
</section>

<main id="primary" class="site-main section">
  <div class="wrap" style="text-align: center; max-width: 680px; margin: 0 auto;">
    <div style="background: var(--white); border: 1px solid var(--line); padding: 48px 36px; box-shadow: 0 12px 32px rgba(10,26,38,0.06);">
      <div style="font-family: var(--font-mono); font-size: 13px; color: var(--amber); margin-bottom: 12px; letter-spacing: 0.1em;">
        <?php esc_html_e( 'SYSTEM DIAGNOSTIC: 404_PAGE_NOT_FOUND', 'seque-infratech' ); ?>
      </div>
      <p style="color: var(--grey); font-size: 16px; line-height: 1.6; margin-bottom: 32px;">
        <?php esc_html_e( 'The requested URL does not exist or may have been relocated during system updates. Please verify the address or navigate using the direct links below.', 'seque-infratech' ); ?>
      </p>

      <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-amber">
          <?php esc_html_e( 'Return to Homepage', 'seque-infratech' ); ?>
        </a>
        <a href="<?php echo esc_url( home_url( '/capabilities/' ) ); ?>" class="btn btn-outline">
          <?php esc_html_e( 'View Capabilities', 'seque-infratech' ); ?>
        </a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">
          <?php esc_html_e( 'Contact Dispatch', 'seque-infratech' ); ?>
        </a>
      </div>
    </div>
  </div>
</main>

<?php
get_footer();
