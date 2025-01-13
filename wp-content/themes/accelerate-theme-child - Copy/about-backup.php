<?php
/**
 * The template for displaying the About Page
 *
 * This is the template that displays the About Page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>



<div id="primary" class="home-page hero-content">
	<div class="main-content" role="main">
                            <div class="about-hero">
                    <h3>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
                </div>
                    </div>
    </div>
			
	
<h1><?php the_field('page_title');?>

<section id="about">
    <div class="about-body">
        <h3>Our Services</h3>
        <p class="about-intro">
<p style="text-align:center">We take pride in our clients and the content we create for them. </p>

<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>

<article class="about-page clearfix">
	<aside class="about-page-sidebar">
	
			
			</div>


		</aside>

	

		</div><!-- #main -->

		</div>
	</article>
		<?php endwhile; // end of the loop. ?>

		
                <div class= "about-contact clearfix">
			<ul class="about-contact-blurb">
				<li><h2>Want to work with us?</h2></li>
                <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
			</ul>
		</div>
	</div><!-- .main-content -->


	</div><!-- #primary -->




<?php get_footer(); ?>
