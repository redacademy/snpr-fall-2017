<?php
/**
 * The main template file.
 *
 * @package SOSNPR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- front page hero -->
    <div class="front-page-hero">
			<h1> <?php echo get_bloginfo( 'name' )?></h1>
			<h2 class="front-page-blurb"><?php echo get_bloginfo( 'description' )?> </h2>
			<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'Proposed Park' ) ) ); ?>" class="learn-more-button">Learn More</a>
		</div>

		<!-- end of front-page-hero -->
		<h1 class="recent-updates-header"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Recent Updates</a></h1>
		<!-- owl carousel -->
		<div class="owl-carousel">
			<?php query_posts(array(
			'category__not_in' => array(),
			'paged' => $paged,
			'posts_per_page' => 5,
			)); if ( have_posts() ) : 
			?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="carousel-cell">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
					<header class="entry-header">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php sosnpr_posted_on(); ?> 
					</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->
				</article><!-- #post-## -->
			</div>
			<!-- end of carousel-cell -->

			<?php endwhile; ?>
		</div><!-- end of owl-carousel -->

		<div class="posts-navigation"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Older Posts</a></div>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
