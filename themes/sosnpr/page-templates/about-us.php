<?php 
/**
* Template Name: About Us Page
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
      <?php 
      // $props = CFS()->get_field_info( 'ssosnp_network' );
      //     echo $props['label'];
      //     echo CFS()->get('ssosnp_network');


      $fields = CFS()->get( 'about_us_fields' );
       d($fields);
      // foreach( $fields as $field ) {
      //     var_dump($field) ;
          // echo $field['upload'];
      // }
      ?>
      </div>

    </article>

  </main><!-- #main -->

</div><!-- #primary -->
<?php get_footer();?>