<?php 
/**
* Template Name: Resources
*
*/
get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
  <header id="top" class="resources-hero">
  
     <?php while ( have_posts() ) : the_post(); ?>

     <?php get_template_part( 'template-parts/content', 'page' ); ?>

     <?php endwhile; // End of the loop. ?>
  
 </header>

<section class="resources-nav">
  <div class="nav-links">
  <ul class="resources-nav-1">
      <li>
        <a href="#reports">Reports</a>
      </li>
      <li>
        <a href="#books">Books</a>
      </li>
  </ul>
  <ul class="resources-nav-2">
      <li>
        <a href="#videos">Videos</a>
      </li>
      <li>
        <a href="#news">In the News</a>
      </li>
      <li>
        <a href="#lc-groups">Local Conservation Groups</a>
      </li>
  </ul>
  <ul class="resources-nav-3">
      <li>
        <a href="#photos">Photos</a>
      </li>
      <li>
        <a href="#radio">Radio</a>
      </li>
  </ul>
</div>
</section>

 <ul class="resources-ul">
 
   <li id="reports">
     <?php $props = CFS()->get_field_info( 'reports' );?> 
     <h2 class="resources-heading">
     <i class="fa fa-angle-right"></i>
     <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide">
       <p><?php echo CFS()->get('reports');?></p>
       <div class="borders"></div>
      </div>
   </li>

<section class="divider">
  <a href="#top" class="scroll-up">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
  </a>
</section>

   <li id="videos">
   <?php $props = CFS()->get_field_info( 'videos' );?> 
   <h2 class="resources-heading">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide"><p><?php echo CFS()->get('videos');?></p></div>
     </li>

<section class="divider">
  <a href="#top" class="scroll-up">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
  </a>
</section>

   <li id="photos">
   <?php $props = CFS()->get_field_info( 'photos' );?> 
   <h2 class="resources-heading">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide"><p><?php echo CFS()->get('photos');?></p></div>
     </li>

<section class="divider">
  <a href="#top" class="scroll-up">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
  </a>
</section>

   <li id="#books">
   <?php $props = CFS()->get_field_info( 'books' );?> 
   <h2 class="resources-heading">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide"><p><?php echo CFS()->get('books');?></p></div>
     </li>

<section class="divider">
  <a href="#top" class="scroll-up">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
  </a>
</section>

   <li id="news">
   <?php $props = CFS()->get_field_info( 'in_the_news' );?> 
   <h2 class="resources-heading">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide"><p><?php echo CFS()->get('in_the_news');?></p></div>
     </li>

<section class="divider">
  <a href="#top" class="scroll-up">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
  </a>
</section>

   <li id="radio">
   <?php $props = CFS()->get_field_info( 'radio' );?> 
   <h2 class="resources-heading">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide"><p><?php echo CFS()->get('radio');?></p></div>
     </li>

  <section class="divider">
  <a href="#top" class="scroll-up">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
  </a>
  </section>

   <div class="lc-groups-container" id="lc-groups">
   <?php $props = CFS()->get_field_info( 'local_conservation_groups' );?> 
   <h2 class="resources-heading">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
  <?php echo $props['label'];?></h2>
   <div class="lc-groups resources-content hide">
   <li>
   <p><?php echo CFS()->get('local_conservation_groups');?></p>
   </li>
   <li>
     <?php $props = CFS()->get_field_info( 'local_conservation_groups_2' );?> 
     <p><?php echo CFS()->get('local_conservation_groups_2');?></p>
   </li>
</div>
</div>
 </ul>

<section class="divider">
  <a href="#top" class="scroll-up-from-bottom">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
  </a>
</section>

</main><!-- #main -->

</div><!-- #primary -->
<?php get_footer();?>