<?php
/**
 * Template Name: Logistics & Network
 * Description: Logistics page template showcasing delivery modes, international export terms, pipeline corridors, and partners.
 *
 * @package Seque_Infratech
 */

get_header();
?>

<section class="page-hero">
  <div class="wrap page-hero-inner">
    <div class="breadcrumb"><span class="amber">03</span> · <?php esc_html_e( 'Logistics & Network', 'seque-infratech' ); ?></div>
    <h1 class="desktop-nowrap" style="text-align: left;"><?php esc_html_e( 'Wherever the project is, we deliver.', 'seque-infratech' ); ?></h1>
    <p><?php esc_html_e( 'No matter your location or project scale, we ensure seamless fuel delivery using a robust and reliable logistics network — by road, rail, sea, and pipeline.', 'seque-infratech' ); ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><?php esc_html_e( 'DELIVERY MODES', 'seque-infratech' ); ?></div>
      <h2><?php esc_html_e( 'Seven ways to move fuel, chosen to fit the job.', 'seque-infratech' ); ?></h2>
    </div>
    <div>
      <div class="mode-row">
        <span class="mode-name"><?php esc_html_e( 'Truck Tankers', 'seque-infratech' ); ?></span>
        <span class="mode-desc"><?php esc_html_e( 'Direct delivery to remote or urban sites', 'seque-infratech' ); ?></span>
      </div>
      <div class="mode-row">
        <span class="mode-name"><?php esc_html_e( 'ISO Containers', 'seque-infratech' ); ?></span>
        <span class="mode-desc"><?php esc_html_e( 'Ideal for international and intermodal transport', 'seque-infratech' ); ?></span>
      </div>
      <div class="mode-row">
        <span class="mode-name"><?php esc_html_e( 'Flexi-tanks', 'seque-infratech' ); ?></span>
        <span class="mode-desc"><?php esc_html_e( 'Efficient liquid transport within standard containers', 'seque-infratech' ); ?></span>
      </div>
      <div class="mode-row">
        <span class="mode-name"><?php esc_html_e( 'Pipeline', 'seque-infratech' ); ?></span>
        <span class="mode-desc"><?php esc_html_e( 'Extensive reach across the U.S. West Coast, Rockies, Gulf Coast, and East Coast', 'seque-infratech' ); ?></span>
      </div>
      <div class="mode-row">
        <span class="mode-name"><?php esc_html_e( 'Barge', 'seque-infratech' ); ?></span>
        <span class="mode-desc"><?php esc_html_e( 'Cost-efficient delivery for marine and offshore projects', 'seque-infratech' ); ?></span>
      </div>
      <div class="mode-row">
        <span class="mode-name"><?php esc_html_e( 'Rail', 'seque-infratech' ); ?></span>
        <span class="mode-desc"><?php esc_html_e( 'Large-volume transport for industrial hubs', 'seque-infratech' ); ?></span>
      </div>
      <div class="mode-row">
        <span class="mode-name"><?php esc_html_e( 'Mobile On-Site Delivery', 'seque-infratech' ); ?></span>
        <span class="mode-desc"><?php esc_html_e( 'Real-time fueling at job sites', 'seque-infratech' ); ?></span>
      </div>
    </div>

    <div style="margin-top:56px; display:grid; grid-template-columns:1fr 1fr; gap:1px; background:var(--line); border:1px solid var(--line);">
      <div class="spec-card">
        <span class="tag"><?php esc_html_e( 'GLOBAL EXPORT', 'seque-infratech' ); ?></span>
        <h3><?php esc_html_e( 'Terms built for international clients', 'seque-infratech' ); ?></h3>
        <p><?php esc_html_e( 'We offer FOB (Free on Board), CNF (Cost & Freight), and Ex-Works terms for clients worldwide, with full-spectrum support from documentation to shipping.', 'seque-infratech' ); ?></p>
      </div>
      <div class="spec-card">
        <span class="tag"><?php esc_html_e( 'MARKETS SERVED', 'seque-infratech' ); ?></span>
        <h3><?php esc_html_e( 'Active in five countries and growing', 'seque-infratech' ); ?></h3>
        <p><?php esc_html_e( 'United States, United Arab Emirates, Kuwait, India, and Barbados — supported by our strategic alliance with a key DLA logistics contractor in Louisiana.', 'seque-infratech' ); ?></p>
      </div>
    </div>

    <div style="margin-top:64px; padding-top:48px; border-top:1px solid var(--line);">
      <div class="eyebrow"><?php esc_html_e( 'PIPELINE & DEFENSE CORRIDORS', 'seque-infratech' ); ?></div>
      <h3 style="font-size:24px; color:var(--ink); margin-bottom:12px;"><?php esc_html_e( 'Strategic Reach Across Major North American Corridors', 'seque-infratech' ); ?></h3>
      <p style="color:var(--grey); max-width:68ch; font-size:16px;"><?php esc_html_e( 'We are uniquely positioned to deliver bulk fuel products across major U.S. pipeline infrastructures and strategic shipping waterways, ensuring secure and resilient supply lines for domestic and overseas missions.', 'seque-infratech' ); ?></p>

      <div class="media-banner" style="margin-bottom:24px;">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logistics-multimodal.jpg' ); ?>" alt="<?php esc_attr_e( 'Multimodal North American Energy Transport & Pipeline Corridors', 'seque-infratech' ); ?>" loading="lazy">
      </div>

      <div class="corridor-strip">
        <div class="corridor-badge">
          <span class="region"><?php esc_html_e( 'CORRIDOR 01', 'seque-infratech' ); ?></span>
          <span class="name"><?php esc_html_e( 'U.S. West Coast', 'seque-infratech' ); ?></span>
        </div>
        <div class="corridor-badge">
          <span class="region"><?php esc_html_e( 'CORRIDOR 02', 'seque-infratech' ); ?></span>
          <span class="name"><?php esc_html_e( 'Rocky Mountains', 'seque-infratech' ); ?></span>
        </div>
        <div class="corridor-badge">
          <span class="region"><?php esc_html_e( 'CORRIDOR 03', 'seque-infratech' ); ?></span>
          <span class="name"><?php esc_html_e( 'Gulf Coast (PADD 3)', 'seque-infratech' ); ?></span>
        </div>
        <div class="corridor-badge">
          <span class="region"><?php esc_html_e( 'CORRIDOR 04', 'seque-infratech' ); ?></span>
          <span class="name"><?php esc_html_e( 'U.S. East Coast', 'seque-infratech' ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/client-row' ); ?>

<section class="section on-dark">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><?php esc_html_e( 'WHY CHOOSE SEQUE INFRATECH', 'seque-infratech' ); ?></div>
      <h2 class="desktop-nowrap"><?php esc_html_e( "We don't just deliver fuel — we deliver value.", 'seque-infratech' ); ?></h2>
    </div>
    <ul class="checklist">
      <li>
        <span class="num">01</span>
        <div>
          <h3><?php esc_html_e( 'Tailored products', 'seque-infratech' ); ?></h3>
          <p><?php esc_html_e( 'Fuel customized to your exact technical and performance specifications.', 'seque-infratech' ); ?></p>
        </div>
      </li>
      <li>
        <span class="num">02</span>
        <div>
          <h3><?php esc_html_e( 'Global logistics network', 'seque-infratech' ); ?></h3>
          <p><?php esc_html_e( 'Powered by key partnerships with Gasa USA, Huntaway Midstream West, and Pemex USA.', 'seque-infratech' ); ?></p>
        </div>
      </li>
      <li>
        <span class="num">03</span>
        <div>
          <h3><?php esc_html_e( 'Pipeline delivery expertise', 'seque-infratech' ); ?></h3>
          <p><?php esc_html_e( 'Uniquely positioned to deliver across major U.S. fuel corridors.', 'seque-infratech' ); ?></p>
        </div>
      </li>
      <li>
        <span class="num">04</span>
        <div>
          <h3><?php esc_html_e( 'Export excellence', 'seque-infratech' ); ?></h3>
          <p><?php esc_html_e( 'Full-spectrum support for international clients, from documentation to shipping.', 'seque-infratech' ); ?></p>
        </div>
      </li>
      <li>
        <span class="num">05</span>
        <div>
          <h3><?php esc_html_e( 'Integrated project support', 'seque-infratech' ); ?></h3>
          <p><?php esc_html_e( 'Technical assistance, program management, and flexible payment terms.', 'seque-infratech' ); ?></p>
        </div>
      </li>
      <li>
        <span class="num">06</span>
        <div>
          <h3><?php esc_html_e( 'Trusted transport partners', 'seque-infratech' ); ?></h3>
          <p><?php esc_html_e( 'Including Chevron and Hornbeck Offshore Services for high-reliability fuel movement.', 'seque-infratech' ); ?></p>
        </div>
      </li>
    </ul>
  </div>
</section>

<?php
get_template_part( 'template-parts/cta-band', null, array(
  'heading'     => __( "Managing an international logistics operation? Let's talk.", 'seque-infratech' ),
  'button_text' => __( 'Contact our team', 'seque-infratech' ),
  'button_url'  => home_url( '/contact/' ),
) );
?>

<?php
get_footer();
