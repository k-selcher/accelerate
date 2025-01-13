<?php
/**
 * The template for displaying a single case study.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>



<div id="main" class="site-main clearfix">


<div id="primary" class="home-page hero-content">
	<div class="main-content" role="main">
                            <div class="about-hero">
                    <h3>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
                </div>
                    </div>
    </div>
			

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
							<div class = "services-intro">
					<h3>Our Services</h3>
					<p><p style="text-align: center;">We take pride in our clients and the services we create for them.<br>
Here is a brief overview of our offered services.</p>
<p>&nbsp;</p>
</p>
	</div>

	<?php while ( have_posts() ) : the_post();
		$description = get_field('description');
		$subheading_1 = get_field('subheading_1');
		$subheading_2 = get_field('subheading_2');
		$subheading_3 = get_field('subheading_3');
		$subheading_4 = get_field('subheading_4');
		$page_title = get_field('page_title');
		$image_1 = get_field('image_1');
		$image_2 = get_field('image_2');
		$image_3 = get_field('image_3');
		$image_4 = get_field('image_4');
		$size = "full";
		?>

	<article class="about-page-sidebar clearfix">
		<aside class="about-page-sidebar">
		<div class="our-services-image-left">
		<?php echo wp_get_attachment_image($image_1, $size); ?>
			</div> 
			<div class="about-page-sidebar-text">
				<h3><span><?php echo $subheading_1;?></span></h3>
				<p><?php echo $description; ?></p>
		</div>
		</aside>

		<aside class="about-page-sidebar">
		<?php echo wp_get_attachment_image($image_2, $size); ?>
			<div class="about-page-sidebar-text">
				<h3><span><?php echo $subheading_2;?></span></h3>
				<p><?php echo $description; ?></p>
			</div>
		</aside>

		<aside class="about-page-sidebar">
		<?php echo wp_get_attachment_image($image_3, $size); ?>
			<div class="about-page-sidebar-text">
				<h3><span><?php echo $subheading_3;?></span></h3>
				<p><?php echo $description; ?></p>
			</div>
		</aside>

		<aside class="about-page-sidebar">
		<?php echo wp_get_attachment_image($image_4, $size); ?>
			<div class="about-page-sidebar-text">
				<h3><span><?php echo $subheading_4;?></span></h3>
				<p><?php echo $description; ?></p>
			</div>
		</aside>

			</div>
		</div>
	</article>
		<?php endwhile; // end of the loop. ?>

		<div class= "about-contact clearfix">
			<ul class="about-contact-blurb">
				<li><h2>Interested in working with us?</h2></li>
				<li><a class="button" href="http://localhost/accelerate/contact">Contact Us</a></li>
			</ul>
		</div>
	</div><!-- .main-content -->


	</div><!-- #primary -->


		</div><!-- #main -->

<?php get_footer(); ?>


