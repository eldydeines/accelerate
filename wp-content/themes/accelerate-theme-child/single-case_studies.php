<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
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
			<?php while ( have_posts() ) : the_post(); 

				$services = get_field('services');
				$client = get_field('client');
				$site_link = get_field('site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$size = "full"; ?>


				<aside class="case-study-sidebar">

					<h2><?php the_title(); ?></h2>
					<h3><?php echo $services; ?></h3>
					<h4>Client: <?php echo $client; ?></h4>
					
					<?php the_content(); ?>

					<a href="<?php echo $site_link; ?>" target="_blank">VISIT LIVE SITE</a>

				</aside>

				<div class="case-study-images">
					
					<?php if($image_1) { ?>
						<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					<?php } ?>

					<?php if($image_2) { ?>
						<?php echo wp_get_attachment_image( $image_2, $size ); ?>
					<?php } ?>

					<?php if($image_3) { ?>
						<?php echo wp_get_attachment_image( $image_3, $size ); ?>
					<?php } ?>

				</div>

			<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->

</div><!-- #primary -->

<?php get_footer(); ?>
