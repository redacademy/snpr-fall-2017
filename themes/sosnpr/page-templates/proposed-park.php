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
        <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			  <?php endwhile; // End of the loop. ?>
          
          

          

          
                      

          
          
        </div>
      </header>
      <div class="container">
        
      </div>

    </article>

  </main><!-- #main -->

</div><!-- #primary -->
<?php get_footer();?>