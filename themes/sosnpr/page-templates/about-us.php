<?php 
/**
* Template Name: About Us Page
*
*/
get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
  
      <header id="top" class="entry-header custom-hero">
       
          <?php while ( have_posts() ) : the_post(); ?>

			  	<?php get_template_part( 'template-parts/content', 'page' ); ?>

		    	<?php endwhile; // End of the loop. ?>
       
      </header>

      <ul class="about-us-page-navigation">
        <li>
          <a href="#sosnp-network">s.o.s.n.p. network</a>
        </li>
        <li>
          <a href="#first-nation-support">first nation support</a>
        </li>
        <li>
          <a href="#community-support">community support</a>
        </li>
        <li>
          <a href="#government-support">government support</a>
        </li>
        <li>
          <a href="#parks-canada-support">parks canada support</a>
        </li>
        <li>
          <a href="#proposal-history">proposal history</a>
        </li>
        
      </ul>

      <ul class="about-us-content-wrapper">
      
        <li id="sosnp-network" class="section-one">
          <?php $props = CFS()->get_field_info( 'sosnp_network' );?> 
          <h2 class="about-us-heading" ><?php echo $props['label'];?></h2>
          <div class="essay-content">
            <div class="about-us-essay-hide">
              <p><?php echo CFS()->get('sosnp_network');?></p>
            </div>
            <div class="image-wrapper">
              <img src="<?php echo CFS()->get('sosnp_network_image');?>" alt="sosnp network support image">
            </div>
            
          </div>
          
            <a href="#top" class="scroll-up">
              <i class="fa fa-angle-up" aria-hidden="true"></i>
            </a>
          
        </li>

      

        <li id="first-nation-support" class="section-two">
          <?php $props = CFS()->get_field_info( 'first_nation_support' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="essay-content">
            <div class="about-us-essay-hide">
              <p><?php echo CFS()->get('first_nation_support');?></p>
            </div>
            <div class="image-wrapper">
              <img src="<?php echo CFS()->get('first_nation_support_image');?>" alt="first nation support image">
            </div>
          </div>
          
            <a href="#top" class="scroll-up">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
            </a>
          
        </li>
<!-- 
      <section class="divider">
        <a href="#top" class="scroll-circle">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
        </a>
      </section> -->

        <li id="community-support" class="section-three">
          <?php $props = CFS()->get_field_info( 'community_support' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="essay-content">

            <div class="about-us-essay-hide">
              <p><?php echo CFS()->get('community_support');?></p>
            </div>

            <div class="image-wrapper">
              <img src="<?php echo CFS()->get('community_support_image');?>" class="section-three-image" alt="community conference image">
            </div>
            
          </div>
          
            <a href="#top" class="scroll-up">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
            </a>
          
        </li>

      <!-- <section class="divider">
        <a href="#top" class="scroll-circle">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
        </a>
      </section> -->
      
        <li id="government-support" class="section-four">
          <?php $props = CFS()->get_field_info( 'provincial_government_support' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="essay-content">

            <div class="about-us-essay-hide">
              <p><?php echo CFS()->get('provincial_government_support');?></p>
            </div>

            <div class="image-wrapper">
              <img src="<?php echo CFS()->get('provincial_gov_support_image');?>" class="section-four-image" alt="provincial flag image">
            </div>
            
          </div>
          <a href="#top" class="scroll-up">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
          </a>
        </li>

      <!-- <section class="divider">
        <a href="#top" class="scroll-circle">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
        </a>
      </section> -->

        <li id="parks-canada-support" class="section-five">
          <?php $props = CFS()->get_field_info( 'federal_government_parks_canada_support' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="essay-content">

            <div class="about-us-essay-hide">
              <p><?php echo CFS()->get('federal_government_parks_canada_support');?></p>
            </div>

            <div class="image-wrapper">
              <img src="<?php echo CFS()->get('federal_gov_support_image');?>" class="section-five-image" alt="canadian flag">
            </div>
            
          </div>
          <a href="#top" class="scroll-up">
          <i class="fa fa-angle-up" aria-hidden="true"></i>
          </a>
        </li>

      <!-- <section class="divider">
        <a href="#top" class="scroll-circle">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
        </a>
      </section> -->

        <li id="proposal-history" class="section-six"> 
          <?php $props = CFS()->get_field_info( 'proposal_history' );?> 
          <h2 class="about-us-heading"><?php echo $props['label'];?></h2>
          <div class="essay-content-1">
            <div class="about-us-essay-hide">
              <p><?php echo CFS()->get('proposal_history');?></p>
            </div>
            <div class="image-wrapper">
              <img src="<?php echo CFS()->get('proposal_history_image_1');?>" class="section-six-image" alt="park field research image">
            </div>
          </div>
          <div class="essay-content-2">

            <div class="about-us-essay-hide">
              <p><?php echo CFS()->get('proposal_history_2');?></p>
            </div>

            <div class="image-wrapper">
              <img src="<?php echo CFS()->get('proposal_history_image_2');?>" class="section-six-image" alt="group field research of the park">
            </div>
            
          </div>
          <div class="essay-content-3">

            <div class="about-us-essay-hide">
              <p><?php echo CFS()->get('proposal_history_3');?></p>
            </div>

            <div class="image-wrapper">
              <img src="<?php echo CFS()->get('proposal_history_image_3');?>" class="section-six-image" alt="group taking pictures of the park">
            </div>
            
          </div>
          <a href="#top" class="scroll-up">
          <i class="fa fa-angle-up" aria-hidden="true"></i>
          </a>
        </li>

      </ul>
  <!-- <div class="divider-clear">
    <a href="#top" class="scroll-half-circle">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>
  </div> -->

  </main><!-- #main -->

</div><!-- #primary -->
<?php get_footer();?>