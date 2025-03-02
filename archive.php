<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkling
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

 		<?php
 		if ( have_posts() ) : ?>

 			<header class="page-header">
 				<?php
 					the_archive_title( '<h1 class="page-title">', '</h1>' );
 					the_archive_description( '<div class="archive-description">', '</div>' );
 				?>
 			</header><!-- .page-header -->

 			<?php
 			/* Start the Loop */
 			while ( have_posts() ) : the_post();

 				/*
 				 * Include the Post-Format-specific template for the content.
 				 * If you want to override this in a child theme, then include a file
 				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
 				 */?>
         <a href="<?php get_post_permalink();?>" class="col-md-4 staff">
           <div class="staff__headshot">
             <img src="<?php
             $headshot = get_field('staff_headshot');
              echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>" />
           </div>
           <div class="staff__name"><?php the_field('name');?></div>
           <div class="staff__title"><?php the_field('staff_title');?></div>
         </a>
      <?php
 			endwhile;

 			the_posts_pagination( array(
 	        'prev_text' => '<i class="fa fa-chevron-left"></i> ' . __( 'Newer posts', 'sparkling' ),
 	        'next_text' => __( 'Older posts', 'sparkling' ) . ' <i class="fa fa-chevron-right"></i>' ,
 	    ) );

 		else :

 			get_template_part( 'content', 'none' );

 		endif; ?>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 get_sidebar();
 get_footer();
