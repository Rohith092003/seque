<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package Seque_Infratech
 */

get_header();
?>

<section class="page-hero">
  <div class="wrap page-hero-inner">
    <div class="breadcrumb"><span class="amber">DISPATCHES</span> · <?php esc_html_e( 'Latest News & Insights', 'seque-infratech' ); ?></div>
    <h1><?php esc_html_e( 'Industry Insights & Operations', 'seque-infratech' ); ?></h1>
    <p><?php esc_html_e( 'Updates, strategic announcements, and fuel procurement analysis from Seque Infratech Inc.', 'seque-infratech' ); ?></p>
  </div>
</section>

<main id="primary" class="site-main section">
  <div class="wrap">
    <?php if ( have_posts() ) : ?>

      <div class="grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
        <?php
        while ( have_posts() ) :
          the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> style="background:var(--white); border:1px solid var(--line); padding:32px; display:flex; flex-direction:column; justify-content:space-between;">
            <div>
              <div style="font-family:var(--font-mono); font-size:12px; color:var(--grey); margin-bottom:12px;">
                <?php echo esc_html( get_the_date() ); ?>
              </div>
              <h2 style="font-size:22px; color:var(--ink); margin-bottom:12px;">
                <a href="<?php the_permalink(); ?>" style="color:inherit; text-decoration:none;"><?php the_title(); ?></a>
              </h2>
              <div style="color:var(--grey); font-size:15px; line-height:1.6; margin-bottom:20px;">
                <?php the_excerpt(); ?>
              </div>
            </div>
            <div>
              <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="font-size:13px; padding:8px 16px;">
                <?php esc_html_e( 'Read Article', 'seque-infratech' ); ?> →
              </a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="pagination" style="margin-top:48px; text-align:center;">
        <?php
        the_posts_pagination( array(
          'mid_size'  => 2,
          'prev_text' => __( '← Previous', 'seque-infratech' ),
          'next_text' => __( 'Next →', 'seque-infratech' ),
        ) );
        ?>
      </div>

    <?php else : ?>

      <div style="background:var(--steel-light); border:1px solid var(--line); padding:48px; text-align:center;">
        <h2 style="font-size:24px; color:var(--ink); margin-bottom:12px;"><?php esc_html_e( 'No Posts Found', 'seque-infratech' ); ?></h2>
        <p style="color:var(--grey); max-width:50ch; margin:0 auto 24px;"><?php esc_html_e( 'There are currently no articles published. Check back soon for industry reports and updates.', 'seque-infratech' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-amber"><?php esc_html_e( 'Return to Homepage', 'seque-infratech' ); ?></a>
      </div>

    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
