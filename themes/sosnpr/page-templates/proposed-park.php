<?php 
/**
* Template Name: Proposed Park Page
*
*/
get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <article id="post-<?php the_ID();?>" <?php post_class();?>>
      <header class="entry-header custom-hero">
        <div class="proposed-hero">
        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page' ); ?>
        
        <?php endwhile; // End of the loop. ?>
          
        </div>

      </header>

      <section class="proposed-banner">


      <section class="proposed-container">

        <div class="menu-item one">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'the_land' )['label'];?></h2>

         <div class="content-container">
            <div class="text"><?php echo CFS()->get( 'the_land' );?></div>
            <div class="image"><img src="<?php echo CFS()->get('land_image');?>"/></div>
        </div>
       </div> <!-- close one -->

       <div class="menu-item two">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'location_of_the_park' )['label'];?></h2>

        <div class="content-container">
         <div class="image"><img src="<?php echo CFS()->get('location_image');?>"/></div>
         <div class="text"><?php echo CFS()->get('location_of_the_park');?></div>
       </div>

        </div> <!-- close two -->

       <div class="menu-item three">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'land_use_regulations' )['label'];?></h2>

        <div class="content-container">

        <div class="content-container-one">
          <div class="text"><?php echo CFS()->get('land_use_regulations');?></div>
          <div class="text"><?php echo CFS()->get('land_two');?></div>
        </div>

        <div class="content-container-two">
          <div class="image"><img src="<?php echo CFS()->get('land_use_one');?>"/></div>
        </div>

        <div class="content-container-three">
          <div class="image"><img src="<?php echo CFS()->get('land_use_two');?>"/></div>
        </div>

        <div class="content-container-four">
          <div class="text"><?php echo CFS()->get('land_three');?></div>
          <div class="text"><?php echo CFS()->get('land_four');?></div>
        </div>

       </div> <!-- closes content-container -->
         

       </div> <!-- close three -->

       <div class="menu-item four">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'why_a_national_park' )['label'];?></h2>

         <div class="content-container">
          <div class="text"><?php echo CFS()->get( 'why_a_national_park' );?></div>
          <div class="image"><img src="<?php echo CFS()->get('why_image');?>"/></div>
         </div>
       </div> <!-- closes four-->


       <div class="menu-item five">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'ranching_agriculture' )['label'];?></h2>


        <div class="content-container">
         <div class="image"><img src="<?php echo CFS()->get('ranch_image');?>"/></div>
         <div class="text"><?php echo CFS()->get('ranching_agriculture');?></div>
       </div>

       </div> <!-- closes five -->

       <div class="menu-item six">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'human_impact' )['label'];?></h2>

         <div class="content-container">
          <div class="text"><?php echo CFS()->get( 'human_impact' );?></div>
          <div class="image"><img src="<?php echo CFS()->get('human_image');?>"/></div>
        </div>
       </div> <!-- closes six -->

       <div class="menu-item seven">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'ecological_benefits' )['label'];?></h2>


         <div class="content-container">
          <div class="image"><img src="<?php echo CFS()->get('ecological_image');?>"/></div>
          <div class="text"><?php echo CFS()->get('ecological_benefits');?></div>
         </div>

       </div> <!-- closes seven -->

       <div class="menu-item eight">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'economic_benefits' )['label'];?></h2>

         <div class="content-container">
          <div class="text"><?php echo CFS()->get('economic_benefits');?></div>
          <div class="image"> <p>Placeholder for a pdf</p></div>
        </div>

       </div> <!-- closes eight -->

       <div class="menu-item nine">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'faq' )['label'];?></h2>

         <div class="content-container-one">
            <div class="text"><?php echo CFS()->get('faq');?></div>
            <div class="image"><img src="<?php echo CFS()->get('faq_image_one');?>"/></div>
        </div>

        <div class="content-container-two">
          <div class="image"><img src="<?php echo CFS()->get('faq_image_two');?>"/></div>
          <div class="text"><?php echo CFS()->get('faq_2');?></div>
        </div>

        <div class="content-container-three">
            <div class="text"><?php echo CFS()->get('faq_three');?></div>
            <div class="image"><img src="<?php echo CFS()->get('faq_image_three');?>"/></div>
        </div>

        </div> <!-- closes nine-->




      
        
      
    </section>

    </article>

  </main><!-- #main -->

</div><!-- #primary -->

<?php get_footer();?>