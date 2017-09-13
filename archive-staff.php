<?php
/**
 *
 *
 * This is the template for the homepage
 *
 * @package sparkling
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
      <div class="row">
        <h1 class="col-lg-12">  Our Staff</h1>
      </div>
      <div class="row">
      <?php
      $args = array(
        'post_type' => 'Staff',
        'posts_per_page' => 20,
        'meta_query' => array(
          array(
            'key' => 'staff_admin_and_accounting',
            'value' => '0',
            'compare' => '=='
          )));
      $loop = new WP_Query( $args );
      if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <a href="<?php the_permalink();?>" class="col-md-4 staff">
                <div class="staff__headshot">
                  <img src="<?php
                  $headshot = get_field('staff_headshot');
                   echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>" />  </div>
            <div class="staff__id">
            <div class="staff__name"><?php the_field('staff_name');?></div>
            <div class="staff__title"><?php the_field('staff_title');?></div>
          </div>
          </a>
          <?php endwhile;
      endif;
      ?>
    </div>
    <div class="row">
      <h3 class="text-center" style="padding:20px 0">Administration and Accounting</h3>
      <?php
      $args2 = array(
        'post_type' => 'Staff',
        'posts_per_page' => 20,
        'meta_query' => array(
          array(
            'key' => 'staff_admin_and_accounting',
            'value' => '1',
            'compare' => '=='
      )));
      $loop2 = new WP_Query( $args2 );
      if ( $loop2->have_posts() ) :
          while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
            <div class="col-md-4 staff">
                <div class="staff__headshot">
                  <img src="<?php
                  $headshot = get_field('staff_headshot');
                   echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>" />  </div>
            <div class="staff__id">
            <div class="staff__name"><?php the_field('staff_name');?></div>
          </div>
        </div>
          <?php endwhile;
      endif;
  ?>
    </div>
    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>
