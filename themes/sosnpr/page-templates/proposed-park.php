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
      <section class="proposed-container">

        <div class="menu-item one">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'the_land' )['label'];?></h2>
         <div class="text"><?php echo CFS()->get( 'the_land' );?></div>
       </div>

       <div class="menu-item two">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'location_of_the_park' )['label'];?></h2>
         <div class="text"><?php echo CFS()->get('location_of_the_park');?></div>
       </div>

       <div class="menu-item three">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'land_use_regulations' )['label'];?></h2>
         <div class="text"><?php echo CFS()->get('land_use_regulations');?></div>
       </div>

       <div class="menu-item four">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'why_a_national_park' )['label'];?></h2>
         <div class="text"><?php echo CFS()->get('why_a_national_park');?></div>
       </div>

       <div class="menu-item five">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'ranching_agriculture' )['label'];?></h2>
         <div class="text"><?php echo CFS()->get('ranching_agriculture');?></div>
       </div>

       <div class="menu-item six">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'human_impact' )['label'];?></h2>
         <div class="text"><?php echo CFS()->get('human_impact');?></div>
       </div>

       <div class="menu-item seven">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'ecological_benefits' )['label'];?></h2>
         <div class="text"><?php echo CFS()->get('ecological_benefits');?></div>
       </div>

       <div class="menu-item eight">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'economic_benefits' )['label'];?></h2>
         <div class="text"><?php echo CFS()->get('economic_benefits');?></div>
       </div>

       <div class="menu-item nine">
         <h2><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php echo CFS()->get_field_info( 'faq' )['label'];?></h2>
         <div class="text"><?php echo CFS()->get('faq');?></div>
       </div>
        
      
    </section>

    </article>

  </main><!-- #main -->

</div><!-- #primary -->

<?php get_footer();?>