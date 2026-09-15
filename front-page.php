<?php
/**
 * Front Page Template
 *
 * @package Seque_Infratech
 */

get_header();
?>

<section class="hero">
  <!-- Hero Background Video -->
  <video class="hero-video" autoplay muted loop playsinline poster="<?php echo esc_url(get_template_directory_uri() . '/screenshot.png'); ?>">
    <source src="<?php echo esc_url(get_template_directory_uri() . '/Video/Video2.mp4'); ?>" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>
  <div class="wrap hero-inner">
    <div>
      <div class="hero-kicker reveal"><?php esc_html_e('CAGE 8LH32 · DLA-APPROVED · WOSB-CERTIFIED', 'seque-infratech'); ?></div>
      <h1 class="reveal"><?php echo wp_kses_post( __( 'Fuel and logistics,<br>delivered with defense-grade precision.', 'seque-infratech' ) ); ?></h1>
      <p class="hero-lede reveal"><?php esc_html_e('Seque Infratech Inc. sources, moves, and stores aviation, marine, and industrial fuels for governments, defense agencies, and global operators — matching the right product to the right logistics, on time, every time.', 'seque-infratech'); ?></p>
      <div class="hero-cta reveal">
        <a href="<?php echo esc_url(home_url('/capabilities/')); ?>" class="btn btn-amber"><?php esc_html_e('View our capabilities', 'seque-infratech'); ?></a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline"><?php esc_html_e('Partner with us', 'seque-infratech'); ?></a>
      </div>
    </div>
    <div class="hero-diagram reveal">
      <svg viewBox="0 0 420 380" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="<?php esc_attr_e('Tactical fuel supply diagram', 'seque-infratech'); ?>">
        <defs>
          <filter id="glow-amber">
            <feGaussianBlur stdDeviation="2.5" result="blur"/>
            <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
          </filter>
          <filter id="text-shadow">
            <feDropShadow dx="0" dy="1" stdDeviation="2" flood-color="rgba(0,0,0,0.9)" flood-opacity="1"/>
          </filter>
        </defs>

        <!-- Connecting Lines -->
        <line x1="60" y1="300" x2="200" y2="120" stroke="#D98A2B" stroke-width="2" stroke-dasharray="5 5" opacity="0.95"/>
        <line x1="200" y1="120" x2="340" y2="60" stroke="#FFFFFF" stroke-width="1.5" stroke-dasharray="4 5" opacity="0.7"/>
        <line x1="200" y1="120" x2="330" y2="220" stroke="#FFFFFF" stroke-width="1.5" stroke-dasharray="4 5" opacity="0.7"/>
        <line x1="60" y1="300" x2="230" y2="320" stroke="#FFFFFF" stroke-width="1.5" stroke-dasharray="4 5" opacity="0.7"/>
        <line x1="230" y1="320" x2="330" y2="220" stroke="#D98A2B" stroke-width="2" stroke-dasharray="5 5" opacity="0.95"/>

        <!-- Glow rings behind amber dots -->
        <circle cx="60" cy="300" r="12" fill="rgba(217,138,43,0.2)" />
        <circle cx="200" cy="120" r="12" fill="rgba(217,138,43,0.2)" />

        <!-- Dots -->
        <circle cx="60" cy="300" r="7" fill="#0A1A26" stroke="#D98A2B" stroke-width="2.5" filter="url(#glow-amber)"/>
        <circle cx="200" cy="120" r="7" fill="#0A1A26" stroke="#D98A2B" stroke-width="2.5" filter="url(#glow-amber)"/>
        <circle cx="340" cy="60" r="5.5" fill="#1B4258" stroke="#FFFFFF" stroke-width="1.8"/>
        <circle cx="330" cy="220" r="5.5" fill="#1B4258" stroke="#FFFFFF" stroke-width="1.8"/>
        <circle cx="230" cy="320" r="5.5" fill="#1B4258" stroke="#FFFFFF" stroke-width="1.8"/>

        <!-- Labels with shadow for readability -->
        <text x="30" y="330" fill="#FFFFFF" font-family="IBM Plex Mono" font-size="11" font-weight="600" filter="url(#text-shadow)">TERMINAL</text>
        <text x="172" y="105" fill="#FFFFFF" font-family="IBM Plex Mono" font-size="11" font-weight="600" filter="url(#text-shadow)">DEPOT</text>
        <text x="308" y="45" fill="#D98A2B" font-family="IBM Plex Mono" font-size="10" font-weight="600" filter="url(#text-shadow)">AIRBASE</text>
        <text x="300" y="240" fill="#D98A2B" font-family="IBM Plex Mono" font-size="10" font-weight="600" filter="url(#text-shadow)">PORT</text>
        <text x="198" y="345" fill="#D98A2B" font-family="IBM Plex Mono" font-size="10" font-weight="600" filter="url(#text-shadow)">FLEET SITE</text>
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
      <h2 style="white-space: nowrap;"><?php esc_html_e('Powering industries. Fuelling progress.', 'seque-infratech'); ?></h2>
      <p><?php esc_html_e('Fuel sourcing, delivery logistics, temporary storage, and project management — matched to your operational, regulatory, and geographic needs.', 'seque-infratech'); ?></p>
    </div>
    <div class="grid cols-4" style="background:var(--line-dark); border-color:var(--line-dark);">
      <div class="spec-card" style="background:var(--ink);">
        <div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-capabilities-aviation.jpg' ); ?>" alt="<?php esc_attr_e('Aviation Fuels', 'seque-infratech'); ?>" loading="lazy"></div>
        <span class="tag"><?php esc_html_e('AVIATION', 'seque-infratech'); ?></span>
        <h3 style="color:var(--paper);"><?php esc_html_e('Aviation Fuels', 'seque-infratech'); ?></h3>
        <p style="color:var(--grey-light);"><?php esc_html_e('JP5, Jet A, JA1, F76 — for commercial airlines, defense forces, and naval operations.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card" style="background:var(--ink);">
        <div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-capabilities-marine.jpg' ); ?>" alt="<?php esc_attr_e('Bunker Fuels', 'seque-infratech'); ?>" loading="lazy"></div>
        <span class="tag"><?php esc_html_e('MARINE', 'seque-infratech'); ?></span>
        <h3 style="color:var(--paper);"><?php esc_html_e('Bunker Fuels', 'seque-infratech'); ?></h3>
        <p style="color:var(--grey-light);"><?php esc_html_e('High-viscosity marine fuel for cargo ships, tankers, offshore rigs, and naval fleets.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card" style="background:var(--ink);">
        <div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-capabilities-diesel.jpg' ); ?>" alt="<?php esc_attr_e('Diesel & Biodiesel', 'seque-infratech'); ?>" loading="lazy"></div>
        <span class="tag"><?php esc_html_e('ROAD &amp; INDUSTRIAL', 'seque-infratech'); ?></span>
        <h3 style="color:var(--paper);"><?php esc_html_e('Diesel &amp; Biodiesel', 'seque-infratech'); ?></h3>
        <p style="color:var(--grey-light);"><?php esc_html_e('ULSD, renewable diesel, and B100–B20 blends for fleets, agriculture, and industry.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card" style="background:var(--ink);">
        <div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-capabilities-storage.jpg' ); ?>" alt="<?php esc_attr_e('Storage & Delivery', 'seque-infratech'); ?>" loading="lazy"></div>
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
?>

<section class="section on-steel">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><?php esc_html_e('WHY CHOOSE US', 'seque-infratech'); ?></div>
      <h2 style="white-space: nowrap;"><?php esc_html_e("We don't just deliver fuel — we deliver value.", 'seque-infratech'); ?></h2>
      <p><?php esc_html_e('From tailored fuel solutions to seamless global logistics, Seque Infratech brings the full spectrum of expertise, partnerships, and execution to every engagement.', 'seque-infratech'); ?></p>
    </div>
    <div class="grid cols-3">
      <div class="spec-card why-card">
        <div class="why-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
        </div>
        <h3><?php esc_html_e('Tailored Products', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Fuel customized to your exact technical and performance specifications — from aviation-grade turbine fuels to renewable biodiesel blends.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card why-card">
        <div class="why-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <h3><?php esc_html_e('Global Logistics Network', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Powered by key partnerships with Gasa USA, Huntaway Midstream West, and Pemex USA — connecting your supply chain across continents.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card why-card">
        <div class="why-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
        </div>
        <h3><?php esc_html_e('Pipeline Delivery Expertise', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Uniquely positioned to deliver across major U.S. fuel corridors — West Coast, Rockies, Gulf Coast, and East Coast pipeline networks.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card why-card">
        <div class="why-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <h3><?php esc_html_e('Export Excellence', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Full-spectrum international support — from documentation to shipping — with FOB, CNF, and Ex-Works terms available for global clients.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card why-card">
        <div class="why-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8"/><path d="M12 17v4"/></svg>
        </div>
        <h3><?php esc_html_e('Integrated Project Support', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Technical assistance, program management, and flexible payment terms — providing end-to-end support beyond just fuel delivery.', 'seque-infratech'); ?></p>
      </div>
      <div class="spec-card why-card">
        <div class="why-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3><?php esc_html_e('Trusted Transport Partners', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Including Chevron and Hornbeck Offshore Services for high-reliability fuel movement — ensuring safe, timely delivery wherever you operate.', 'seque-infratech'); ?></p>
      </div>
    </div>
  </div>
</section>

<?php
get_template_part('template-parts/cta-band', null, [
    'heading'     => __('Ready to fuel your next mission-critical project?', 'seque-infratech'),
    'button_text' => __('Get in touch', 'seque-infratech'),
    'button_url'  => home_url('/contact/'),
]);

get_footer();
