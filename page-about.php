<?php
/**
 * Template Name: About Us
 * Description: About page template displaying Seque Infratech's journey, leadership, and community engagements.
 *
 * @package Seque_Infratech
 */

get_header();
?>

<section class="page-hero">
  <div class="wrap page-hero-inner">
    <div class="breadcrumb"><span class="amber">01</span> · <?php esc_html_e( 'About Us', 'seque-infratech' ); ?></div>
    <h1><?php echo wp_kses_post( __( 'Founded amid uncertainty.<br>Built for resilience.', 'seque-infratech' ) ); ?></h1>
    <p><?php esc_html_e( 'Founded in January 2020, Seque Infratech Inc emerged at a time of unprecedented global disruption. Launched on the cusp of the COVID-19 pandemic, our company began its journey amid uncertainty—yet with a clear vision: to become a trusted partner in delivering people, products, and technology solutions across diverse industries. Rooted in our core competencies of project management, procurement, and business collaboration, Seque Infratech has grown from a bold idea into a globally engaged enterprise.', 'seque-infratech' ); ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><?php esc_html_e( 'OUR JOURNEY SO FAR', 'seque-infratech' ); ?></div>
      <h2><?php esc_html_e( 'A story of resilience, reliability, and rising ambitions.', 'seque-infratech' ); ?></h2>
    </div>
    <div class="journey-grid">
      <div class="timeline">
        <div class="tl-item">
          <div class="tl-year"><?php esc_html_e( 'JANUARY 2020', 'seque-infratech' ); ?></div>
          <h3><?php esc_html_e( 'A Story of Resilience, Reliability, and Rising Ambitions', 'seque-infratech' ); ?></h3>
          <p><?php esc_html_e( 'Despite the headwinds of the pandemic, our early years were marked not by hesitation, but by decisive action. Seque Infratech swiftly identified critical market needs and responded by establishing itself as a reliable supplier of fuel oil, extending our reach into key international markets including the United Arab Emirates, Kuwait, and India. Through strategic global trade operations, we fortified our reputation as a company that delivers with integrity and precision — even under the most challenging circumstances.', 'seque-infratech' ); ?></p>
        </div>
        <div class="tl-item">
          <div class="tl-year"><?php esc_html_e( 'DEFENSE APPROVAL', 'seque-infratech' ); ?></div>
          <h3><?php esc_html_e( 'A Trusted Partner in National and International Arenas', 'seque-infratech' ); ?></h3>
          <p><?php esc_html_e( 'Our growth trajectory reached a pivotal milestone with our approval as a supplier to the U.S. Government and the Department of Defense, earning the prestigious CAGE Code (8LH32). This recognition is more than a symbol of compliance — it is a testament to our ability to meet the rigorous standards required for critical land and maritime goods supply. Our engagements with the Defense Logistics Agency (DLA) have opened doors to high-impact collaborations with major corporations, affirming Seque Infratech\'s capability to support complex, large-scale contracts with consistency and excellence.', 'seque-infratech' ); ?></p>
        </div>
        <div class="tl-item">
          <div class="tl-year"><?php esc_html_e( 'JANUARY 2023', 'seque-infratech' ); ?></div>
          <h3><?php esc_html_e( 'Empowered by Purpose, Led by Diversity', 'seque-infratech' ); ?></h3>
          <p><?php esc_html_e( 'In January 2023, Seque Infratech became a certified Women-Owned Small Business (WOSB) under the U.S. Small Business Administration (SBA), further defining our identity as a forward-thinking, values-driven enterprise. This designation not only positions us for expanded opportunities across sectors — it also reflects our commitment to fostering diversity, innovation, and inclusive growth within the global supply ecosystem.', 'seque-infratech' ); ?></p>
        </div>
        <div class="tl-item">
          <div class="tl-year"><?php esc_html_e( 'SINCE 2022', 'seque-infratech' ); ?></div>
          <h3><?php esc_html_e( 'Proving Capability, Delivering Confidence', 'seque-infratech' ); ?></h3>
          <p><?php esc_html_e( 'While some may question whether a young, agile firm can manage the complexities of large-scale fuel supply, we invite them to examine our results. Since 2022, Seque Infratech has successfully delivered petroleum and biodiesel fuel solutions to Barbados, underscoring our proactive expansion into new markets and our dedication to building long-term, reliable partnerships. To support this, we have secured a strategic alliance with a trusted logistics transporter in Louisiana, a key DLA contractor, ensuring seamless end-to-end supply chain operations.', 'seque-infratech' ); ?></p>
        </div>
      </div>
      <div class="journey-img-wrap">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/about-journey.jpg' ); ?>"
             alt="<?php esc_attr_e( 'Fuel tanker on highway at sunset — Seque Infratech journey', 'seque-infratech' ); ?>"
             class="journey-img">
      </div>
    </div>
  </div>
</section>

<section class="section on-steel">
  <div class="wrap">
    <div class="commitment-grid">
      <div>
        <div class="eyebrow"><?php esc_html_e( 'OUR COMMITMENT', 'seque-infratech' ); ?></div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); line-height:1.15; color:var(--paper); margin-bottom:20px;"><?php esc_html_e( 'Every project is a chance to prove our values.', 'seque-infratech' ); ?></h2>
        <p style="color:var(--grey-light); font-size:16px; line-height:1.65;"><?php esc_html_e( 'At Seque Infratech, every project is an opportunity to demonstrate our values: resilience, dependability, and a commitment to excellence. We understand the critical nature of the industries we serve, and we bring the full strength of our global partnerships, technical expertise, and proven processes to deliver on every promise.', 'seque-infratech' ); ?></p>
        <p style="color:var(--grey-light); font-size:16px; line-height:1.65; margin-top:18px;"><?php esc_html_e( 'As we continue to expand our reach and capabilities, we remain steadfast in our mission — to provide high-quality fuel solutions, logistical efficiency, and a standard of service that exceeds expectations. We are proud of our journey so far, and even more excited for what lies ahead.', 'seque-infratech' ); ?></p>
        <p style="margin-top:24px; font-family:var(--font-mono); font-size:13.5px; color:var(--amber); letter-spacing:0.04em;"><?php esc_html_e( 'Seque Infratech Inc. — Driven by trust. Defined by performance.', 'seque-infratech' ); ?></p>
      </div>
      <div>
        <div class="commitment-media reveal-scale">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/about-commitment.jpg' ); ?>" alt="<?php esc_attr_e( 'Seque Infratech fuel quality assurance and operational excellence', 'seque-infratech' ); ?>" loading="lazy">
          <div class="commitment-badge"><?php esc_html_e( 'QUALITY ASSURANCE · MISSION INTEGRITY', 'seque-infratech' ); ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><?php esc_html_e( 'LEADERSHIP', 'seque-infratech' ); ?></div>
      <h2><?php esc_html_e( 'Led by two decades of procurement and global trade expertise.', 'seque-infratech' ); ?></h2>
    </div>
    <div class="leadership-grid">
      <div>
        <div class="monogram has-photo">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/ms-iola-edwards.jpeg' ); ?>" alt="<?php esc_attr_e( 'Ms. Iola Edwards — Founder & CEO', 'seque-infratech' ); ?>" class="monogram-img">
        </div>
      </div>
      <div>
        <h3 style="font-size:26px; color:var(--ink); margin-bottom:6px;"><?php esc_html_e( 'Ms. Iola Edwards', 'seque-infratech' ); ?></h3>
        <p style="color:var(--grey); font-family:var(--font-mono); font-size:13.5px; margin-bottom:24px;"><?php esc_html_e( 'FOUNDER & CHIEF EXECUTIVE OFFICER', 'seque-infratech' ); ?></p>
        <p style="color:var(--grey); font-size:16px; margin-bottom:18px;"><?php esc_html_e( 'With over two decades of leadership in procurement, infrastructure advisory, and global trade, Ms. Edwards brings both vision and depth to Seque Infratech Inc., building an organization focused on delivering agile, efficient, and forward-thinking solutions to complex business challenges.', 'seque-infratech' ); ?></p>
        <p style="color:var(--grey); font-size:16px; margin-bottom:18px;"><?php esc_html_e( 'Before founding Seque Infratech in 2020, she served as a Loan Officer at the U.S. Small Business Administration, helping drive small business growth through funding support. She later led Crumb Rubber Solutions Inc. as CEO, guiding it through successful recycling and export ventures while positioning it as a recognized Women, Minority, and Disadvantaged Business supplier.', 'seque-infratech' ); ?></p>
        <p style="color:var(--grey); font-size:16px;"><?php esc_html_e( 'At Seque Infratech, Ms. Edwards blends strategic insight with a strong belief in global collaboration and inclusive business practices — building a company that delivers high-quality fuel and infrastructure solutions while fostering trust, innovation, and resilience across markets.', 'seque-infratech' ); ?></p>

        <div class="quote-block">
          <p><?php esc_html_e( '"Leadership is not about size, but about clarity of purpose and strength of execution. At Seque Infratech, we believe that smaller, agile teams — driven by integrity and insight — can deliver world-class results."', 'seque-infratech' ); ?></p>
          <cite><?php esc_html_e( '— MS. IOLA EDWARDS, FOUNDER & CEO', 'seque-infratech' ); ?></cite>
        </div>
        <p style="color:var(--grey); font-size:16px; margin-top:20px;"><?php esc_html_e( 'Under her guidance, Seque Infratech continues to grow as a trusted partner to governments, defense agencies, and global clients — proving that leadership rooted in innovation and purpose can move industries forward.', 'seque-infratech' ); ?></p>
      </div>
    </div>

    <div class="leadership-grid">
      <div>
        <div class="monogram has-photo">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/Neil.jpeg' ); ?>" alt="<?php esc_attr_e( 'Neil — Chief Financial Officer', 'seque-infratech' ); ?>" class="monogram-img">
        </div>
      </div>
      <div>
        <h3 style="font-size:24px; color:var(--ink); margin-bottom:6px;"><?php esc_html_e( 'Neil', 'seque-infratech' ); ?></h3>
        <p style="color:var(--grey); font-family:var(--font-mono); font-size:13.5px; margin-bottom:20px;"><?php esc_html_e( 'CHIEF FINANCIAL OFFICER', 'seque-infratech' ); ?></p>
        <p style="color:var(--grey); font-size:16px; margin-bottom:16px;"><?php esc_html_e( 'Overseeing financial strategy, capital allocation, contract compliance, and cross-border fiscal operations across commercial and defense procurement programs.', 'seque-infratech' ); ?></p>
        <p style="color:var(--grey); font-size:16px;"><?php esc_html_e( 'Ensures financial resilience and rigorous audit readiness for federal contracting, international logistics bonding, and high-volume commodity trade.', 'seque-infratech' ); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="section on-dark tight">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><?php esc_html_e( 'ENGAGEMENTS & EVENTS', 'seque-infratech' ); ?></div>
      <h2><?php esc_html_e( 'Industry presence and community impact.', 'seque-infratech' ); ?></h2>
      <p><?php esc_html_e( 'Active participation in defense logistics forums, workforce initiatives, and regional economic development.', 'seque-infratech' ); ?></p>
    </div>

    <div class="event-grid">
      <div class="event-card" style="background:var(--ink); border-color:var(--line-dark);">
        <div class="event-media-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/event-industry-day.jpg' ); ?>" alt="<?php esc_attr_e( 'Industry Day 2023', 'seque-infratech' ); ?>" class="event-media-img">
          <span class="event-badge"><?php esc_html_e( 'DEFENSE PROCUREMENT · 2023', 'seque-infratech' ); ?></span>
        </div>
        <span class="event-tag"><?php esc_html_e( 'ANNUAL FORUM', 'seque-infratech' ); ?></span>
        <h3 style="color:var(--paper);"><?php esc_html_e( 'Industry Day 2023', 'seque-infratech' ); ?></h3>
        <p style="color:var(--grey-light);"><?php esc_html_e( "High-level engagement with defense agencies, prime contractors, and global energy partners — presenting Seque Infratech's CAGE 8LH32 readiness, fuel capabilities, and multimodal supply chain logistics frameworks.", 'seque-infratech' ); ?></p>
      </div>

      <div class="event-card" style="background:var(--ink); border-color:var(--line-dark);">
        <div class="event-media-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/event-dream-it-do-it.jpg' ); ?>" alt="<?php esc_attr_e( 'Dream It Do It WNY 2024', 'seque-infratech' ); ?>" class="event-media-img">
          <span class="event-badge"><?php esc_html_e( 'COMMUNITY & STEM · 2024', 'seque-infratech' ); ?></span>
        </div>
        <span class="event-tag"><?php esc_html_e( 'REGIONAL INITIATIVE', 'seque-infratech' ); ?></span>
        <h3 style="color:var(--paper);"><?php esc_html_e( 'Dream It Do It WNY 2024', 'seque-infratech' ); ?></h3>
        <p style="color:var(--grey-light);"><?php esc_html_e( 'Championing the next generation of infrastructure, logistics, and STEM leaders across Western New York, fostering industry collaboration and inclusive economic growth in our home community of Buffalo.', 'seque-infratech' ); ?></p>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/cta-band' ); ?>

<?php
get_footer();
