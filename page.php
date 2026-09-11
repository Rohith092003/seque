<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package Seque_Infratech
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="page-hero">
  <div class="wrap page-hero-inner">
    <div class="breadcrumb"><span class="amber">PAGE</span> · <?php the_title(); ?></div>
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<main id="primary" class="site-main section">
  <div class="wrap">
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content' ); ?>>
      <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seque-infratech' ),
        'after'  => '</div>',
      ) );
      ?>
    </article>
  </div>
</main>

<?php endwhile; ?>

<?php
get_footer();
