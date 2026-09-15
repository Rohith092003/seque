<?php
/**
 * Template Name: Capabilities
 *
 * @package Seque_Infratech
 */

get_header();
?>

<section class="page-hero">
  <div class="wrap page-hero-inner">
    <div class="breadcrumb"><span class="amber">02</span> · <?php esc_html_e('Capabilities', 'seque-infratech'); ?></div>
    <h1><?php esc_html_e('Powering industries. Fuelling progress.', 'seque-infratech'); ?></h1>
    <p><?php esc_html_e('At Seque Infratech Inc., we are redefining what it means to be a reliable energy solutions partner in a rapidly evolving global market. Founded in 2020 and backed by over three decades of industry experience, we specialize in fuel sourcing, delivery logistics, temporary storage, and project management. Our strength lies in our ability to match the right product with the right logistics, at the right time — customized for your operational, regulatory, and geographic needs.', 'seque-infratech'); ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap">

    <div class="filter-bar">
      <button class="filter-btn active" data-filter="all"><?php esc_html_e('All Divisions (6)', 'seque-infratech'); ?></button>
      <button class="filter-btn" data-filter="aviation"><?php esc_html_e('Aviation Fuels', 'seque-infratech'); ?></button>
      <button class="filter-btn" data-filter="marine"><?php esc_html_e('Marine & Bunker', 'seque-infratech'); ?></button>
      <button class="filter-btn" data-filter="diesel"><?php esc_html_e('Diesel & Biodiesel', 'seque-infratech'); ?></button>
      <button class="filter-btn" data-filter="gasoline"><?php esc_html_e('Gasoline & Motor Oils', 'seque-infratech'); ?></button>
    </div>

    <div class="grid cols-2" id="specGrid" style="margin-bottom:1px;">

      <div class="spec-card" data-category="aviation">
        <div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/fuel-aviation.jpg' ); ?>" alt="<?php esc_attr_e('Aviation Fuels', 'seque-infratech'); ?>" loading="lazy"></div>
        <span class="tag"><?php esc_html_e('AVIATION FUELS', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('Turbine fuels for air & sea power', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Aviation-grade fuels tailored to the stringent demands of commercial airlines, defense forces, and naval operations — refined for optimal combustion, engine performance, and compliance with global standards.', 'seque-infratech'); ?></p>
        <ul class="spec-list">
          <li><span class="code">JP5</span><span class="desc"><?php esc_html_e('High flash-point fuel for military aircraft, especially carrier-based operations', 'seque-infratech'); ?></span></li>
          <li><span class="code">Jet A</span><span class="desc"><?php esc_html_e('Standard fuel for commercial aviation with wide global usability', 'seque-infratech'); ?></span></li>
          <li><span class="code">JA1</span><span class="desc"><?php esc_html_e('Kerosene-type fuel for international airlines, higher freezing-point tolerance', 'seque-infratech'); ?></span></li>
          <li><span class="code">F76</span><span class="desc"><?php esc_html_e('Naval distillate for marine diesel engines and warship gas turbines', 'seque-infratech'); ?></span></li>
        </ul>
        <div class="apps"><b><?php esc_html_e('Applications:', 'seque-infratech'); ?></b> <?php esc_html_e('commercial airlines, military aviation, naval vessels, defense contractors', 'seque-infratech'); ?></div>
        <a href="<?php echo esc_url(add_query_arg('product', 'Aviation Fuels', home_url('/contact/'))); ?>" class="card-quote-btn"><?php esc_html_e('Request Product Specification →', 'seque-infratech'); ?></a>
      </div>

      <div class="spec-card" data-category="marine">
        <div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/fuel-marine-bunker.jpg' ); ?>" alt="<?php esc_attr_e('Marine & Bunker Fuels', 'seque-infratech'); ?>" loading="lazy"></div>
        <span class="tag"><?php esc_html_e('BUNKER FUELS', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('Fuel for maritime operations', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Powering vessels navigating global shipping lanes, with consistent fuel availability and delivery to ports and offshore platforms.', 'seque-infratech'); ?></p>
        <ul class="spec-list">
          <li><span class="code">Bunker Fuel</span><span class="desc"><?php esc_html_e('High-viscosity marine fuel for cargo ships, tankers, offshore rigs, and naval vessels', 'seque-infratech'); ?></span></li>
        </ul>
        <div class="apps"><b><?php esc_html_e('Applications:', 'seque-infratech'); ?></b> <?php esc_html_e('shipping companies, offshore energy operations, naval fleets', 'seque-infratech'); ?></div>
        <a href="<?php echo esc_url(add_query_arg('product', 'Bunker Fuels', home_url('/contact/'))); ?>" class="card-quote-btn"><?php esc_html_e('Request Maritime Bunkering Quote →', 'seque-infratech'); ?></a>
      </div>

      <div class="spec-card" data-category="diesel">
        <div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/fuel-diesel-fleet.jpg' ); ?>" alt="<?php esc_attr_e('Diesel Products', 'seque-infratech'); ?>" loading="lazy"></div>
        <span class="tag"><?php esc_html_e('DIESEL PRODUCTS', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('Conventional & renewable diesel', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('From transportation fleets to industrial machinery, our diesel products meet a wide range of energy demands while supporting cleaner energy goals.', 'seque-infratech'); ?></p>
        <ul class="spec-list">
          <li><span class="code">CA ULSD</span><span class="desc"><?php esc_html_e('Ultra Low Sulfur Diesel for highway & non-road vehicles, environmental compliance', 'seque-infratech'); ?></span></li>
          <li><span class="code">CA ULSD Red Dye</span><span class="desc"><?php esc_html_e('Off-road diesel for agricultural, construction, and industrial use', 'seque-infratech'); ?></span></li>
          <li><span class="code">Renewable Diesel</span><span class="desc"><?php esc_html_e('Chemically similar to petroleum diesel, produced from renewable resources', 'seque-infratech'); ?></span></li>
          <li><span class="code">Standard Diesel</span><span class="desc"><?php esc_html_e('High-performance conventional diesel for all-purpose use', 'seque-infratech'); ?></span></li>
        </ul>
        <div class="apps"><b><?php esc_html_e('Applications:', 'seque-infratech'); ?></b> <?php esc_html_e('logistics, fleet management, heavy equipment, power generation', 'seque-infratech'); ?></div>
        <a href="<?php echo esc_url(add_query_arg('product', 'Diesel Products', home_url('/contact/'))); ?>" class="card-quote-btn"><?php esc_html_e('Request Diesel Bulk Pricing →', 'seque-infratech'); ?></a>
      </div>

      <div class="spec-card" data-category="diesel">
        <div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/fuel-biodiesel.jpg' ); ?>" alt="<?php esc_attr_e('Blended Biodiesel', 'seque-infratech'); ?>" loading="lazy"></div>
        <span class="tag"><?php esc_html_e('BLENDED BIODIESEL', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('Sustainable performance blends', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Engineered for sustainability without compromising engine performance, with blend ratios to support different energy transition strategies.', 'seque-infratech'); ?></p>
        <ul class="spec-list">
          <li><span class="code">B100</span><span class="desc"><?php esc_html_e('100% biodiesel for fleets prioritizing carbon neutrality', 'seque-infratech'); ?></span></li>
          <li><span class="code">B99</span><span class="desc"><?php esc_html_e('Near-pure biodiesel for large-scale industrial clients', 'seque-infratech'); ?></span></li>
          <li><span class="code">B30 / B20</span><span class="desc"><?php esc_html_e('Balanced blends — environmental benefit, minimal system modification', 'seque-infratech'); ?></span></li>
        </ul>
        <div class="apps"><b><?php esc_html_e('Applications:', 'seque-infratech'); ?></b> <?php esc_html_e('sustainable transportation, agricultural machinery, municipal fleets', 'seque-infratech'); ?></div>
        <a href="<?php echo esc_url(add_query_arg('product', 'Blended Biodiesel', home_url('/contact/'))); ?>" class="card-quote-btn"><?php esc_html_e('Request Biodiesel Supply Terms →', 'seque-infratech'); ?></a>
      </div>

      <div class="spec-card" data-category="gasoline">
        <span class="tag"><?php esc_html_e('GASOLINE GRADES', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('Clean-burning gasoline', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('Various octane levels to suit commercial and industrial requirements, meeting regulatory standards for emissions and performance.', 'seque-infratech'); ?></p>
        <ul class="spec-list">
          <li><span class="code">Octane 89</span><span class="desc"><?php esc_html_e('Standard grade for general use', 'seque-infratech'); ?></span></li>
          <li><span class="code">Octane 91</span><span class="desc"><?php esc_html_e('Mid-grade performance fuel', 'seque-infratech'); ?></span></li>
          <li><span class="code">Octane 96</span><span class="desc"><?php esc_html_e('Premium grade for high-compression engines', 'seque-infratech'); ?></span></li>
        </ul>
        <div class="apps"><b><?php esc_html_e('Applications:', 'seque-infratech'); ?></b> <?php esc_html_e('automobiles, small machinery, power tools, industrial engines', 'seque-infratech'); ?></div>
        <a href="<?php echo esc_url(add_query_arg('product', 'Gasoline Grades', home_url('/contact/'))); ?>" class="card-quote-btn"><?php esc_html_e('Request Gasoline Supply Terms →', 'seque-infratech'); ?></a>
      </div>

      <div class="spec-card" data-category="gasoline">
        <span class="tag"><?php esc_html_e('MOTOR OIL SOLUTIONS', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('Lubrication for every engine', 'seque-infratech'); ?></h3>
        <p><?php esc_html_e('A complete suite of motor oil options supporting engine lubrication, efficiency, and longevity — new and recycled, chosen for performance or sustainability.', 'seque-infratech'); ?></p>
        <ul class="spec-list">
          <li><span class="code">Virgin</span><span class="desc"><?php esc_html_e('Premium oil for optimal lubrication', 'seque-infratech'); ?></span></li>
          <li><span class="code">Recycled</span><span class="desc"><?php esc_html_e('Cost-effective and eco-friendly option', 'seque-infratech'); ?></span></li>
          <li><span class="code">Used</span><span class="desc"><?php esc_html_e('Collected and processed for industrial reuse or disposal', 'seque-infratech'); ?></span></li>
        </ul>
        <div class="apps"><b><?php esc_html_e('Applications:', 'seque-infratech'); ?></b> <?php esc_html_e('automotive maintenance, repair shops, industrial equipment servicing', 'seque-infratech'); ?></div>
        <a href="<?php echo esc_url(add_query_arg('product', 'Motor Oil Solutions', home_url('/contact/'))); ?>" class="card-quote-btn"><?php esc_html_e('Request Motor Oil Catalog →', 'seque-infratech'); ?></a>
      </div>

    </div>
  </div>
</section>

<section class="section on-steel">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><?php esc_html_e('TRUSTED BY INDUSTRY LEADERS', 'seque-infratech'); ?></div>
      <h2><?php esc_html_e('Earning trust across sectors and geographies.', 'seque-infratech'); ?></h2>
      <p><?php esc_html_e('Seque Infratech is proud to have earned the trust of both private and government clients across sectors and geographies. Each engagement is a testament to our reliability, technical excellence, and ability to deliver on promise.', 'seque-infratech'); ?></p>
    </div>
    <div class="grid cols-3">
      <div class="spec-card">
        <span class="tag"><?php esc_html_e('USA', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('CleanTech Environmental', 'seque-infratech'); ?></h3>
      </div>
      <div class="spec-card">
        <span class="tag"><?php esc_html_e('INDIA', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('ESSAR Power Ltd', 'seque-infratech'); ?></h3>
      </div>
      <div class="spec-card">
        <span class="tag"><?php esc_html_e('SAUDI ARABIA', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('Saleh A. AlRashed &amp; Sons Co.', 'seque-infratech'); ?></h3>
      </div>
      <div class="spec-card">
        <span class="tag"><?php esc_html_e('USA', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('BioMass Energys', 'seque-infratech'); ?></h3>
      </div>
      <div class="spec-card">
        <span class="tag"><?php esc_html_e('DEFENSE', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('U.S. Department of Defense', 'seque-infratech'); ?></h3>
      </div>
      <div class="spec-card">
        <span class="tag"><?php esc_html_e('UAE', 'seque-infratech'); ?></span>
        <h3><?php esc_html_e('TROID', 'seque-infratech'); ?></h3>
      </div>
    </div>
  </div>
</section>

<section class="section on-dark tight">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><?php esc_html_e('TEMPORARY FUEL STORAGE', 'seque-infratech'); ?></div>
      <h2><?php esc_html_e('Flexible, short-term storage wherever the project takes you.', 'seque-infratech'); ?></h2>
      <p><?php esc_html_e('Tailored for construction zones, remote worksites, military deployments, and emergency response scenarios.', 'seque-infratech'); ?></p>
    </div>
    <div class="media-banner" style="border-color:var(--line-dark); margin-bottom:28px;">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/fuel-temporary-storage.jpg' ); ?>" alt="<?php esc_attr_e('Tactical Temporary Fuel Storage Depot', 'seque-infratech'); ?>" loading="lazy">
    </div>
    <div class="grid cols-2" style="background:var(--line-dark); border-color:var(--line-dark);">
      <div class="spec-card" style="background:var(--ink);">
        <span class="tag"><?php esc_html_e('CAPABILITIES', 'seque-infratech'); ?></span>
        <ul class="spec-list" style="border-top:1px solid var(--line-dark);">
          <li style="border-bottom:1px solid var(--line-dark);"><span class="code" style="color:var(--paper);"><?php esc_html_e('Capacity', 'seque-infratech'); ?></span><span class="desc" style="color:var(--grey-light);"><?php esc_html_e('Up to 1,000 gallons', 'seque-infratech'); ?></span></li>
          <li style="border-bottom:1px solid var(--line-dark);"><span class="code" style="color:var(--paper);"><?php esc_html_e('Format', 'seque-infratech'); ?></span><span class="desc" style="color:var(--grey-light);"><?php esc_html_e('Mobile and secure tanks', 'seque-infratech'); ?></span></li>
          <li style="border-bottom:1px solid var(--line-dark);"><span class="code" style="color:var(--paper);"><?php esc_html_e('Compliance', 'seque-infratech'); ?></span><span class="desc" style="color:var(--grey-light);"><?php esc_html_e('Meets safety & environmental standards', 'seque-infratech'); ?></span></li>
        </ul>
      </div>
      <div class="spec-card" style="background:var(--ink);">
        <span class="tag"><?php esc_html_e('BENEFITS', 'seque-infratech'); ?></span>
        <ul class="spec-list" style="border-top:1px solid var(--line-dark);">
          <li style="border-bottom:1px solid var(--line-dark);"><span class="code" style="color:var(--paper);"><?php esc_html_e('Speed', 'seque-infratech'); ?></span><span class="desc" style="color:var(--grey-light);"><?php esc_html_e('Fast deployment', 'seque-infratech'); ?></span></li>
          <li style="border-bottom:1px solid var(--line-dark);"><span class="code" style="color:var(--paper);"><?php esc_html_e('Access', 'seque-infratech'); ?></span><span class="desc" style="color:var(--grey-light);"><?php esc_html_e('On-demand fuel access', 'seque-infratech'); ?></span></li>
          <li style="border-bottom:1px solid var(--line-dark);"><span class="code" style="color:var(--paper);"><?php esc_html_e('Reach', 'seque-infratech'); ?></span><span class="desc" style="color:var(--grey-light);"><?php esc_html_e('Ideal for hard-to-reach locations', 'seque-infratech'); ?></span></li>
        </ul>
      </div>
    </div>
    <div style="margin-top:28px;">
      <a href="<?php echo esc_url(add_query_arg('product', 'Temporary Fuel Storage', home_url('/contact/'))); ?>" class="btn btn-amber"><?php esc_html_e('Request Temporary Tank Deployment', 'seque-infratech'); ?></a>
    </div>
  </div>
</section>

<?php
get_template_part('template-parts/cta-band', null, [
    'heading'     => __('Need a fuel solution matched to your exact specifications?', 'seque-infratech'),
    'button_text' => __('Talk to our team', 'seque-infratech'),
    'button_url'  => home_url('/contact/'),
]);

get_footer();
