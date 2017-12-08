<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="front-page-hero">
  <h1> <span class="bold-title-span">South Okanagan SimilKameen</span> <span>National Park</span></h1>
  <h2 class="front-page-blurb">A place where biodiversity is preserved for future generations to enjoy<h2>
  <button class="learn-more-button"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Proposed Park' ) ) ); ?>">Learn More</a></button>
	</div>
	<h1 class="recent-updates-header">Recent Updates</h1>
  <div class="owl-carousel">
		<?php query_posts(array(
'category__not_in' => array(),
'paged' => $paged,
'posts_per_page' => 3,
)); if ( have_posts() ) : ?>



			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="carousel-cell">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium' ); ?>
			<?php endif; ?>
			<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
		</article><!-- #post-## -->
</div>

			<?php endwhile; ?>

		
</div><!-- owl-carousel -->

<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
