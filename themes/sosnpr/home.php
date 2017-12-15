<?php
/**
 * The template for displaying all pages.
 *
 * @package SOSNPR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="updates-hero">
				<h2>
					<?php echo single_post_title();?>
				</h2>
			</div>

			<section class="stories-container">
				<?php while ( have_posts() ) : the_post(); ?>


				<div class="journal-container">


					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'large' ); }
						else { ?>
					<img src="<?php echo get_template_directory_uri() . '/sos_assets/owl-conservation.jpg'?>" alt="a friendly owl" />
					<?php } ?>
					<div class="button-container">
						<p class="post-title">
							<?php the_title();?>
						</p>
						<?php sosnpr_posted_on(); ?>
						<a href="<?php echo the_permalink();?>"><button class="read-more">Read More</button></a>
					</div>
				</div>



				<?php endwhile; // End of the loop. ?>

				<?php sosnpr_numbered_pagination(); ?>

			</section>


		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

<<<<<<< HEAD
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> 119625b3102d6829c4080c6fae848f0519554b21
