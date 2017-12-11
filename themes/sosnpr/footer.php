<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">

<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

     <div class="feedback hide">
			 
			 
			 <?php echo do_shortcode('[contact-form-7 id="99" title="Contact form 1"]'); ?>
      
		</div>
		
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		
		<?php echo do_shortcode("[mc4wp_form id='98']");?>
		
		
	</body>
</html>
