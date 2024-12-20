<?php
/**
 * The template for displaying the homepage
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

<section class="home-page">
	div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class='homepage-hero'>
			<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/blog/') ?>">View Our Work</a>
		</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</section><!-- #primary -->



<!-- RECENT BLOG POST -->
<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h4>From the Blog</h4>
			<?php query_posts('posts_per_page=1'); ?>
				<!-- the loop -->
				<?php while ( have_posts() ) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="read-more-link">Read More <span>
				<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>