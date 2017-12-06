<?php 
/**
* Template Name: About Us Page
*
*/
get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
  
      <header class="entry-header custom-hero">
       
          <?php while ( have_posts() ) : the_post(); ?>

			  	<?php get_template_part( 'template-parts/content', 'page' ); ?>

		    	<?php endwhile; // End of the loop. ?>
       
      </header>

      <ul class="about-us-content-wrapper">
      
        <li>
          <?php $props = CFS()->get_field_info( 'ssosnp_network' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="about-us-essay-hide">
            <p><?php echo CFS()->get('ssosnp_network');?></p>
          </div>
        </li>

        <li>
          <?php $props = CFS()->get_field_info( 'first_nation_support' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="about-us-essay-hide">
            <p><?php echo CFS()->get('first_nation_support');?></p>
          </div>
        </li>

        <li>
          <?php $props = CFS()->get_field_info( 'community_support' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="about-us-essay-hide">
          <p><?php echo CFS()->get('community_support');?></p>
          </div>
        </li>

        <li>
          <?php $props = CFS()->get_field_info( 'provincial_government_support' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="about-us-essay-hide">
          <p><?php echo CFS()->get('provincial_government_support');?></p>
          </div>
        </li>

        <li>
          <?php $props = CFS()->get_field_info( 'federal_government_parks_canada_support' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="about-us-essay-hide">
          <p><?php echo CFS()->get('federal_government_parks_canada_support');?></p>
          </div>
        </li>

        <li>
          <?php $props = CFS()->get_field_info( 'proposal_history' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="about-us-essay-hide">
          <p><?php echo CFS()->get('proposal_history');?></p>
          </div>
        </li>

      </ul>

   

  </main><!-- #main -->

</div><!-- #primary -->
<?php get_footer();?>