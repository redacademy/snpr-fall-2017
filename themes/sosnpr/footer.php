<?php
/**
 * The template for displaying the footer.
 *
 * @package SOSNPR_Theme
 */

?>

	</div>
	<!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

<?php
if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'footer-1' ); ?>
	
</div><!-- #secondary -->

<div class="form-popup">
	<!-- Begin MailChimp Signup Form -->
	
	<form action="https://facebook.us17.list-manage.com/subscribe/post?u=c0f3e105252be2f936f3920b6&amp;id=d1e5c1f991" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">
			<div class="closing-icon"><i class="fa fa-times" aria-hidden="true" id="closing-icon"></i></div>
			<label for="mce-EMAIL"><p>Want to stay updated?<br>Enter your email and we'll be in touch!</p></label>
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
			<input type="text" value="" name="NAME" id="mce-NAME" placeholder="Name" required>
			<input type="text" value="" name="POSTAL" id="mce-POSTAL" placeholder="Postal Code" required>
			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c0f3e105252be2f936f3920b6_d1e5c1f991" tabindex="-1" value=""></div>
			<!-- <div class="clear"> -->
			<button type="submit" class="subscribe-submit"><i class="fa fa-angle-right" aria-hidden="true" id="mc-embedded-subscribe"></i></button>
		</div>
	</form>
	
</div>
<!--End mc_embed_signup-->

     
    <!-- <div class="feedback no-see"> -->

			<!-- saved and commented this out in case you'll need to return the feedback btn with the same functions again in the future -->
			 
			 <!-- <button class="close"> <i class="fa fa-times" aria-hidden="true"></i> </button> -->
			 <?php /* echo do_shortcode('[contact-form-7 id="100" title="Contact form 1"]'); */ ?>
      
		<!-- </div> -->

		<!-- .site-info -->
	</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->

	<?php wp_footer(); ?>




	</body>

	</html>