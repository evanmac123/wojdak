<?php
/**
	* Template Name: Testimonials
	*
	* This is the template for the Testimoials
 *
 * @package sparkling
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

 <h1> <?php the_title(); ?></h1>

			<?php
			if( have_rows('flexible_content') ):
				while ( have_rows("flexible_content") ) : the_row();
				if( get_row_layout() == '2_column_text_left_photo_right' ): ?>
				<div class="row">
					<div class="col-md-6 col-md-push-6">
					<img class="testimonial__image" src="<?php the_sub_field('testimonial_image_right'); ?>"/>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<h5 class="testimonial__title"> <?php the_sub_field('testimonial_title_left'); ?></h5>
						<p class="testimonial__text"><?php the_sub_field('testimonials_text_left'); ?></p>
					</div>

				</div>
			<?php elseif( get_row_layout() == '2_column_photo_left_text_right' ): ?>
				<div class="row">
					<div class="col-md-6">
					<img class="testimonial__image" src="<?php the_sub_field('testimonial_image_left'); ?>"/>
					</div>
					<div class="col-md-6">
					<h5 class="testimonial__title"> <?php the_sub_field('testimonial_title_right'); ?></h5>
					<p class="testimonial__text"><?php the_sub_field('testimonials_text_right'); ?></p>
					</div>
				</div>
				<?php endif;
endwhile;
else :
	echo "hello";

endif;

endwhile;?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
