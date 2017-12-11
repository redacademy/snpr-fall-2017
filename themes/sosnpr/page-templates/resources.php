<?php 
/**
* Template Name: Resources
*
*/
get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
  <header class="resources-hero">
  
     <?php while ( have_posts() ) : the_post(); ?>

     <?php get_template_part( 'template-parts/content', 'page' ); ?>

     <?php endwhile; // End of the loop. ?>
  
 </header>

<ul class="resources-nav">
        <li>
          <a href="#reports">reports</a>
        </li>
</ul>

 <ul class="resources-ul">
 
   <li>
     <?php $props = CFS()->get_field_info( 'reports' );?> 
     <h2><?php echo $props['label'];?></h2>
     <p><?php echo CFS()->get('reports');?></p>
   </li>

   <li>
     <?php $props = CFS()->get_field_info( 'video' );?> 
     <h2><?php echo $props['label'];?></h2>
     <p><?php echo CFS()->get('video');?></p>
   </li>

   <li>
     <?php $props = CFS()->get_field_info( 'photos' );?> 
     <h2><?php echo $props['label'];?></h2>
     <p><?php echo CFS()->get('photos');?></p>
   </li>

   <li>
     <?php $props = CFS()->get_field_info( 'books' );?> 
     <h2><?php echo $props['label'];?></h2>
     <p><?php echo CFS()->get('books');?></p>
   </li>

   <li>
     <?php $props = CFS()->get_field_info( 'in_the_news' );?> 
     <h2><?php echo $props['label'];?></h2>
     <p><?php echo CFS()->get('in_the_news');?></p>
   </li>
   
   <li>
     <?php $props = CFS()->get_field_info( 'radio' );?> 
     <h2><?php echo $props['label'];?></h2>
     <p><?php echo CFS()->get('radio');?></p>
   </li>

   <li>
     <?php $props = CFS()->get_field_info( 'local_conservation_groups' );?> 
     <h2><?php echo $props['label'];?></h2>
     <p><?php echo CFS()->get('local_conservation_groups');?></p>
   </li>

   <li>
     <?php $props = CFS()->get_field_info( 'local_conservation_groups_2' );?> 
     <p><?php echo CFS()->get('local_conservation_groups_2');?></p>
   </li>

 </ul>



</main><!-- #main -->

</div><!-- #primary -->
<?php get_footer();?>