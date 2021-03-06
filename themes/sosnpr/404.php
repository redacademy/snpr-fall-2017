<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SOSNPR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="hero-404">
					<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( "Page Not Found" ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class="error-p"><?php echo esc_html( "Sorry, we can't find the page you're looking for." ); ?></p>
					<p class="error-p"><?php echo esc_html( "Please contact us to request for more information." ); ?></p>

		<?php echo do_shortcode('[contact-form-7 id="100" title="Contact form 1"]'); ?>

					<!-- <?php
					// the_widget( 'WP_Widget_Recent_Posts' ); ?> -->

					<!-- <?php
					// if ( sosnpr_categorized_blog() ) : -->
						// Only show the widget if site has multiple categories. ?>
					<! <div class="widget widget_categories"> -->
						<!-- <h2 class="widget-title"><?php
						// echo esc_html( 'Most Used Categories' ); ?></h2> -->
						<!-- <ul> -->
						<!-- <?php
							// wp_list_categories( array(
							// 	'orderby'    => 'count',
							// 	'order'      => 'DESC',
							// 	'show_count' => 1,
							// 	'title_li'   => '',
							// 	'number'     => 10,
							// ) );
						?>
						</ul>
					</div><! .widget -->
					<!-- <?php
				// endif; ?> -->

					<!-- <?php
						// $archive_content = '<p>' . sprintf( esc_html( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
						// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>-->

				</div>
				</div><!-- .hero-404 -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>