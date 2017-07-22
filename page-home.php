<?php
/**
 * Template Name: Home
 *
 * This is the template for the homepage
 *
 * @package sparkling
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <div class="entry-content">
      		<?php
      			the_content();
      			wp_link_pages( array(
      				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sparkling' ),
      				'after'  => '</div>',
      			) );
      		?>'
        </div>
      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>
