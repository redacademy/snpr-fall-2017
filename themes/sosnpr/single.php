<?php
/**
 * The template for displaying all single posts.
 *
 * @package SOSNPR_Theme
 */

get_header(); ?>

<div class="single-hero"><h1 class="single-header">Recent Updates</h1>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<div class="single-navigation">
				<div class="return-home">
				<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Recent Updates' ) ) ); ?>">	Back to List</a>
</div>
			<?php 
			the_post_navigation(array(
				'prev_text' => 'Prev',
				'next_text' => 'Next'
			)); 
			?> 
</div>
		


		<?php endwhile; // End of the loop. ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
