<?php
/**
 * Front Page Template
 *
 * @package Seque_Infratech
 */

get_header();
?>

<section class="hero">
  <div class="wrap hero-inner">
    <div>
      <div class="hero-kicker reveal"><?php esc_html_e('CAGE 8LH32 · DLA-APPROVED · WOSB-CERTIFIED', 'seque-infratech'); ?></div>
      <h1 class="reveal"><?php esc_html_e('Fuel and logistics, delivered with defense-grade precision.', 'seque-infratech'); ?></h1>
      <p class="hero-lede reveal"><?php esc_html_e('Seque Infratech Inc. sources, moves, and stores aviation, marine, and industrial fuels for governments, defense agencies, and global operators — matching the right product to the right logistics, on time, every time.', 'seque-infratech'); ?></p>
      <div class="hero-cta reveal">
        <a href="<?php echo esc_url(home_url('/capabilities/')); ?>" class="btn btn-amber"><?php esc_html_e('View our capabilities', 'seque-infratech'); ?></a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline"><?php esc_html_e('Partner with us', 'seque-infratech'); ?></a>
      </div>
    </div>
    <div class="hero-diagram reveal">
      <svg viewBox="0 0 420 380" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="<?php esc_attr_e('Tactical fuel supply diagram', 'seque-infratech'); ?>">
        <line x1="60" y1="300" x2="200" y2="120" stroke="#D98A2B" stroke-width="1.4" stroke-dasharray="4 5"/>
        <line x1="200" y1="120" x2="340" y2="60" stroke="#8A93A0" stroke-width="1" stroke-dasharray="3 5"/>
        <line x1="200" y1="120" x2="330" y2="220" stroke="#8A93A0" stroke-width="1" stroke-dasharray="3 5"/>
        <line x1="60" y1="300" x2="230" y2="320" stroke="#8A93A0" stroke-width="1" stroke-dasharray="3 5"/>
        <line x1="230" y1="320" x2="330" y2="220" stroke="#D98A2B" stroke-width="1.4" stroke-dasharray="4 5"/>

        <circle cx="60" cy="300" r="6" fill="#0A1A26" stroke="#D98A2B" stroke-width="2"/>
        <circle cx="200" cy="120" r="6" fill="#0A1A26" stroke="#D98A2B" stroke-width="2"/>
        <circle cx="340" cy="60" r="5" fill="#0A1A26" stroke="#8A93A0" stroke-width="1.5"/>
        <circle cx="330" cy="220" r="5" fill="#0A1A26" stroke="#8A93A0" stroke-width="1.5"/>
        <circle cx="230" cy="320" r="5" fill="#0A1A26" stroke="#8A93A0" stroke-width="1.5"/>

        <text x="30" y="330" fill="#EFEDE6" font-family="IBM Plex Mono" font-size="11">TERMINAL</text>
        <text x="172" y="105" fill="#EFEDE6" font-family="IBM Plex Mono" font-size="11">DEPOT</text>
        <text x="308" y="45" fill="#8A93A0" font-family="IBM Plex Mono" font-size="10">AIRBASE</text>
        <text x="300" y="240" fill="#8A93A0" font-family="IBM Plex Mono" font-size="10">PORT</text>
        <text x="198" y="345" fill="#8A93A0" font-family="IBM Plex Mono" font-size="10">FLEET SITE</text>
      </svg>
    </div>
  </div>

  <div class="wrap">
    <div class="stat-strip">
      <div class="stat reveal"><b>2020</b><span><?php esc_html_e('Founded in Buffalo, New York', 'seque-infratech'); ?></span></div>
      <div class="stat reveal"><b>8LH32</b><span><?php esc_html_e('U.S. Government CAGE Code', 'seque-infratech'); ?></span></div>
      <div class="stat reveal"><b>5</b><span><?php esc_html_e('Countries served: US, UAE, Kuwait, India, Barbados', 'seque-infratech'); ?></span></div>
      <div class="stat reveal"><b>2023</b><span><?php esc_html_e('Certified Women-Owned Small Business', 'seque-infratech'); ?></span></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><?php esc_html_e('WHO WE ARE', 'seque-infratech'); ?></div>
      <h2><?php esc_html_e('A young company built for the demands of critical supply.', 'seque-infratech'); ?></h2>
      <p><?php esc_html_e('Launched in January 2020 on the cusp of global disruption, Seque Infratech grew from a bold idea into a globally engaged enterprise — rooted in project management, procurement, and business collaboration.', 'seque-infratech'); ?></p>
    </div>
    <div class="grid cols-3">
      <div class="spec-card">
        <span class="tag"><?php esc_html_e('01 — ORIGIN', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('Resilience from day one', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Founded amid the pandemic, we established ourselves as a reliable fuel oil supplier across the UAE, Kuwait, and India through strategic global trade.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card">
        <span class="tag"><?php esc_html_e('02 — TRUST', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('A supplier to national defense', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Approved as a supplier to the U.S. Government and Department of Defense, working directly with the Defense Logistics Agency on critical land and maritime goods.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card">
        <span class="tag"><?php esc_html_e('03 — REACH', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('Expanding global delivery', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Since 2022, we\'ve delivered petroleum and biodiesel fuel to Barbados, backed by a strategic logistics alliance in Louisiana.', 'seque-infratech'); ?></p>
      </div>
    </div>
    <div style="margin-top:36px;">
      <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn btn-outline-dark"><?php esc_html_e('Read our full story', 'seque-infratech'); ?></a>
    </div>
  </div>
</section>

<section class="section on-dark">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><?php esc_html_e('CORE CAPABILITIES', 'seque-infratech'); ?></div>
      <h2><?php esc_html_e('Powering industries. Fuelling progress.', 'seque-infratech'); ?></h2>
      <p><?php esc_html_e('Fuel sourcing, delivery logistics, temporary storage, and project management — matched to your operational, regulatory, and geographic needs.', 'seque-infratech'); ?></p>
    </div>
    <div class="grid cols-4" style="background:var(--line-dark); border-color:var(--line-dark);">
      <div class="spec-card" style="background:var(--ink);">
        <span class="tag"><?php esc_html_e('AVIATION', 'seque-infratech'); ?></span>
        <h3 style="color:var(--paper);"><?php esc_html_e('Aviation Fuels', 'seque-infratech'); ?></h3>
        <p style="color:var(--grey-light);"><?php esc_html_e('JP5, Jet A, JA1, F76 — for commercial airlines, defense forces, and naval operations.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card" style="background:var(--ink);">
        <span class="tag"><?php esc_html_e('MARINE', 'seque-infratech'); ?></span>
        <h3 style="color:var(--paper);"><?php esc_html_e('Bunker Fuels', 'seque-infratech'); ?></h3>
        <p style="color:var(--grey-light);"><?php esc_html_e('High-viscosity marine fuel for cargo ships, tankers, offshore rigs, and naval fleets.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card" style="background:var(--ink);">
        <span class="tag"><?php esc_html_e('ROAD &amp; INDUSTRIAL', 'seque-infratech'); ?></span>
        <h3 style="color:var(--paper);"><?php esc_html_e('Diesel &amp; Biodiesel', 'seque-infratech'); ?></h3>
        <p style="color:var(--grey-light);"><?php esc_html_e('ULSD, renewable diesel, and B100–B20 blends for fleets, agriculture, and industry.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card" style="background:var(--ink);">
        <span class="tag"><?php esc_html_e('ON-SITE', 'seque-infratech'); ?></span>
        <h3 style="color:var(--paper);"><?php esc_html_e('Storage &amp; Delivery', 'seque-infratech'); ?></h3>
        <p style="color:var(--grey-light);"><?php esc_html_e('Mobile storage to 1,000 gallons, plus truck, rail, barge, and pipeline delivery.', 'seque-infratech'); ?></p>
      </div>
    </div>
    <div style="margin-top:36px;">
      <a href="<?php echo esc_url(home_url('/capabilities/')); ?>" class="btn btn-amber"><?php esc_html_e('Explore full product line', 'seque-infratech'); ?></a>
    </div>
  </div>
</section>

<?php
get_template_part('template-parts/client-row');

get_template_part('template-parts/cta-band', null, [
    'heading'     => __('Ready to fuel your next mission-critical project?', 'seque-infratech'),
    'button_text' => __('Get in touch', 'seque-infratech'),
    'button_url'  => home_url('/contact/'),
]);

get_footer();
