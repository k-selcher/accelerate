<?php
/**
 * The template for displaying the case study archive.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<div id="primary" class="site-content">
		<div class="main-content" role="main">
	<?php while ( have_posts() ) : the_post();
			$image_1 = get_field("image_1");
			$image_4 = get_field("image_4");
			$image_5 = get_field("image_5");
			$size = "full";
			$services = get_field('services'); ?>

		<article class="case-study clearfix">
			<aside class="case-study-sidebar">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<h4><?php echo $services; ?></h4>
				<?php the_excerpt(); ?>
                <p>This is a project I made for this company. Here is the early stage startup that I helped design and do front-end and back-end dev for. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project &rsaquo;</a></p>
			</aside>
			<div class="case-study-images">
				<a href="<?php the_permalink(); ?>">
					<?php if($image_1) {
						echo wp_get_attachment_image( $image_1, $size );
					} ?>
				</a>

				<a href="<?php the_permalink(); ?>">
					<?php if($image_4) {
						echo wp_get_attachment_image( $image_4, $size );
					} ?>
				</a>

				<a href="<?php the_permalink(); ?>">
					<?php if($image_5) {
						echo wp_get_attachment_image( $image_5, $size );
					} ?>
				</a>



			</div>
		</article>
	<?php endwhile; // end of the loop. ?>

	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>