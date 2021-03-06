<?php
/**
 * Template Name: Full-width
 *
 * Template for displaying pages without sidebar.
 *
 * @package Food Express
 */

get_header(); ?>

<?php if ( !is_front_page() ) : ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->
<?php endif; ?>

<?php get_footer(); ?>
