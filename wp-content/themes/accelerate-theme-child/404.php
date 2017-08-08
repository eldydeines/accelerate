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
			<div class="four-o-four">
				<video src="http://localhost/accelerate/wp-content/uploads/2017/08/giphy.mp4" autoplay></video>
				<div class="four-o-four-content">
					<h1>Oh-oh!</h1>
					<p>This page has disappeared and as you can see Miss Piggy really feels for you.</p>
					<h5>Search our site</h5>
					<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="" />
						<input type="submit" id="searchsubmit" value=">" />
					</form>
				</div>
			</div>
		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
