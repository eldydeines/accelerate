<?php
/**
 * The template for displaying all case studies
 *
 * This is the template that displays all case studies by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
		<?php query_posts('order=ASC&post_type=case_studies'); ?>
			
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$featured_image = get_field('featured_image');
				$size = "full"; ?>
				<div class="case-archives">
					<aside class="case-archives-sidebar">
						
						<h2><?php the_title(); ?></h2>
						<h3><?php echo $services; ?></h3>
						<?php the_excerpt(); ?>
						<h3><a href="<?php the_permalink(); ?>">View Project</a></h3>
					
					</aside>
					<div class="case-archives-images">
						
						<?php if($featured_image) { ?>
							<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $featured_image, $size ); ?></a>
						<?php } ?>

					</div><!-- #case-study-images -->
				</div>
			<?php endwhile; // end of the loop. ?>


		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
