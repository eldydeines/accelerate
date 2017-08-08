<?php
/**
 * The template for displaying all company about groups
 *
 * This is the template that displays all about groups by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>


<section class="about-page">
		<?php while ( have_posts() ) : the_post(); ?>
				<div class="about-content">
					<?php the_content(); ?>
				</div><!-- .about-content -->
		<?php endwhile; // end of the loop. ?>
</section><!-- .home-page -->

<div id="primary" class="site-content">
	<div class="main-content" role="main">

	<?php query_posts('post_type=about_groups'); ?>
	<?php $count = 1; ?>

		<?php while ( have_posts() ) : the_post(); 
			$work_description = get_field('work_description');
			$description_icon = get_field('description_icon');
			$size = "full"; ?>

			<?php if(($count % 2)==1) { ?>

				<div class="about-group-service">
					<div class="about-group-left">
						<h2><?php the_title(); ?></h2>
						<p><?php echo $work_description; ?></p>
					</div>
					<div class="about-group-right-img">
						<?php echo wp_get_attachment_image( $description_icon, $size ); ?>
					</div>
				</div><!-- #about-group-service -->

			<?php } else { ?>

				<div class="about-group-service">
					<div class="about-group-left-img">
						<?php echo wp_get_attachment_image( $description_icon, $size ); ?>
					</div>
					<div class="about-group-right">
						<h2><?php the_title(); ?></h2>
						<p><?php echo $work_description; ?></p>
					</div>
				</div><!-- #about-group-service -->

			<?php } ?><!-- End of If/Else -->

			<?php $count=$count+1; ?>	

		<?php endwhile; // end of the loop. ?>

	</div><!-- #main content -->
</div><!-- #primary -->

<?php get_footer(); ?>
