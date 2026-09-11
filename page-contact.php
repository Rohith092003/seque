<?php
/**
 * Template Name: Contact Us
 * Description: Contact page template featuring Buffalo HQ coordinates, vector radar map, and direct RFQ form.
 *
 * @package Seque_Infratech
 */

get_header();
?>

<section class="page-hero">
  <div class="wrap page-hero-inner">
    <div class="breadcrumb"><span class="amber">04</span> · <?php esc_html_e( 'Contact', 'seque-infratech' ); ?></div>
    <h1><?php esc_html_e( "Let's fuel your next project.", 'seque-infratech' ); ?></h1>
    <p><?php esc_html_e( "Whether you're managing an international logistics operation, fueling a defense fleet, or powering remote infrastructure — Seque Infratech Inc. stands ready to meet your challenge.", 'seque-infratech' ); ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="contact-grid">

      <div>
        <div class="eyebrow"><?php esc_html_e( 'GET IN TOUCH', 'seque-infratech' ); ?></div>
        <div class="contact-detail">
          <span class="label"><?php esc_html_e( 'OFFICE', 'seque-infratech' ); ?></span>
          <span class="value"><?php esc_html_e( '10 Lafayette Square, Suite #1502', 'seque-infratech' ); ?><br><?php esc_html_e( 'Buffalo, New York 14203', 'seque-infratech' ); ?></span>
        </div>
        <div class="contact-detail">
          <span class="label"><?php esc_html_e( 'EMAIL', 'seque-infratech' ); ?></span>
          <span class="value"><a href="mailto:iola@sequeinfratech.com">iola@sequeinfratech.com</a></span>
        </div>
        <div class="contact-detail">
          <span class="label"><?php esc_html_e( 'PHONE', 'seque-infratech' ); ?></span>
          <span class="value"><a href="tel:+17167046184">+1 716 704 6184</a></span>
        </div>
        <div class="contact-detail" style="border-bottom:none;">
          <span class="label"><?php esc_html_e( 'CREDENTIALS', 'seque-infratech' ); ?></span>
          <span class="value" style="font-size:15px; font-family:var(--font-mono); color:var(--grey);"><?php esc_html_e( 'CAGE 8LH32 · WOSB Certified · DLA-Approved', 'seque-infratech' ); ?></span>
        </div>

        <div class="map-figure" style="margin-top:32px;">
          <svg viewBox="0 0 400 260" xmlns="http://www.w3.org/2000/svg" aria-label="Buffalo, New York Coordinates Map">
            <rect width="400" height="260" fill="#0A1A26"/>
            <g stroke="#1B4258" stroke-width="1">
              <line x1="0" y1="43" x2="400" y2="43"/>
              <line x1="0" y1="86" x2="400" y2="86"/>
              <line x1="0" y1="129" x2="400" y2="129"/>
              <line x1="0" y1="172" x2="400" y2="172"/>
              <line x1="0" y1="215" x2="400" y2="215"/>
              <line x1="66" y1="0" x2="66" y2="260"/>
              <line x1="133" y1="0" x2="133" y2="260"/>
              <line x1="200" y1="0" x2="200" y2="260"/>
              <line x1="266" y1="0" x2="266" y2="260"/>
              <line x1="333" y1="0" x2="333" y2="260"/>
            </g>
            <circle cx="200" cy="129" r="7" fill="#D98A2B"/>
            <circle cx="200" cy="129" r="16" fill="none" stroke="#D98A2B" stroke-width="1" opacity="0.5"/>
            <circle cx="200" cy="129" r="26" fill="none" stroke="#D98A2B" stroke-width="1" opacity="0.25"/>
            <text x="20" y="30" fill="#8A93A0" font-family="IBM Plex Mono" font-size="11">BUFFALO, NEW YORK</text>
            <text x="20" y="240" fill="#5B6670" font-family="IBM Plex Mono" font-size="10">42.8864° N, 78.8784° W</text>
          </svg>
        </div>
      </div>

      <div>
        <div class="eyebrow"><?php esc_html_e( 'SEND A MESSAGE', 'seque-infratech' ); ?></div>
        <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="inquiry-form">
          <input type="hidden" name="action" value="seque_contact_form">
          <?php wp_nonce_field( 'seque_contact_nonce', 'seque_contact_nonce_field' ); ?>

          <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
            <div class="field">
              <label for="name"><?php esc_html_e( 'FULL NAME', 'seque-infratech' ); ?></label>
              <input type="text" id="name" name="name" required placeholder="<?php esc_attr_e( 'Jordan Reyes', 'seque-infratech' ); ?>">
            </div>
            <div class="field">
              <label for="company"><?php esc_html_e( 'COMPANY / AGENCY', 'seque-infratech' ); ?></label>
              <input type="text" id="company" name="company" placeholder="<?php esc_attr_e( 'Organization name', 'seque-infratech' ); ?>">
            </div>
          </div>
          <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
            <div class="field">
              <label for="email"><?php esc_html_e( 'EMAIL', 'seque-infratech' ); ?></label>
              <input type="email" id="email" name="email" required placeholder="<?php esc_attr_e( 'you@company.com', 'seque-infratech' ); ?>">
            </div>
            <div class="field">
              <label for="phone"><?php esc_html_e( 'PHONE', 'seque-infratech' ); ?></label>
              <input type="tel" id="phone" name="phone" placeholder="<?php esc_attr_e( '+1 (___) ___ ____', 'seque-infratech' ); ?>">
            </div>
          </div>
          <div class="field">
            <label for="need"><?php esc_html_e( 'WHAT DO YOU NEED?', 'seque-infratech' ); ?></label>
            <input type="text" id="need" name="need" placeholder="<?php esc_attr_e( 'e.g. JP5 supply, temporary storage, pipeline delivery', 'seque-infratech' ); ?>">
          </div>
          <div class="field">
            <label for="message"><?php esc_html_e( 'MESSAGE', 'seque-infratech' ); ?></label>
            <textarea id="message" name="message" rows="5" placeholder="<?php esc_attr_e( 'Tell us about your project, timeline, and volume requirements.', 'seque-infratech' ); ?>"></textarea>
          </div>
          <button type="submit" class="btn btn-amber"><?php esc_html_e( 'Send message', 'seque-infratech' ); ?></button>
        </form>
      </div>

    </div>
  </div>
</section>

<?php
get_footer();
