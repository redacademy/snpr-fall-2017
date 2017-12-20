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
 <ul class="resources-ul" id="resources-ul">
 
   <li id="reports" class="li-container">
     <?php $props = CFS()->get_field_info('reports');?> 
     <h2 class="resources-heading">
     <i class="fa fa-angle-right"></i>
     <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide">
       <p><?php echo CFS()->get('reports');?></p>
       <a class="mobile-button" href="#resources-ul"> <i class="fa fa-angle-up"></i></a>
      </div>
     <a class="desktop-button" href="#top"> <i class="fa fa-angle-up"></i></a>
   </li>

   <li id="videos" class="li-container">
   <?php $props = CFS()->get_field_info('videos');?> 
   <h2 class="resources-heading">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide"><p><?php echo CFS()->get('videos');?></p>
     <a class="mobile-button" href="#resources-ul"> <i class="fa fa-angle-up"></i></a>
      </div>
     <a class="desktop-button" href="#top"> <i class="fa fa-angle-up"></i></a>
     </li>

   <li id="photos" class="li-container">
   <?php $props = CFS()->get_field_info('photos');?> 
   <h2 class="resources-heading owl-block">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide">
       <div class="owl-carousel2">
     <?php
     $photos = CFS()->get('photos');
  foreach ($photos as $image) {
    echo '<img class="owl-image" src="'.$image["image"].'"/>';
  }
  ?>
      </div>
<a class="mobile-button" href="#resources-ul"> <i class="fa fa-angle-up"></i></a>
</div>
<a class="desktop-button" href="#top"> <i class="fa fa-angle-up"></i></a>
</li>

   <li id="#books" class="li-container">
   <?php $props = CFS()->get_field_info('books');?> 
   <h2 class="resources-heading">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>

     <div class="resources-content hide">
       <p><?php echo CFS()->get('books');?></p>
       <a class="mobile-button" href="#resources-ul"> <i class="fa fa-angle-up"></i></a>
      </div>
     <a class="desktop-button" href="#top"> <i class="fa fa-angle-up"></i></a>
     </li>
     
   <li id="news" class="li-container">
   <?php $props = CFS()->get_field_info('in_the_news');?> 
   <h2 class="resources-heading">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide"><p><?php echo CFS()->get('in_the_news');?></p>
     <a class="mobile-button" href="#resources-ul"> <i class="fa fa-angle-up"></i></a>
      </div>
     <a class="desktop-button" href="#top"> <i class="fa fa-angle-up"></i></a>
     </li>

   <li id="radio" class="li-container">
   <?php $props = CFS()->get_field_info('radio');?> 
   <h2 class="resources-heading">
   <i class="fa fa-angle-right"></i>
   <i class="fa fa-angle-down"></i>
     <?php echo $props['label'];?></h2>
     <div class="resources-content hide"><p><?php echo CFS()->get('radio');?></p>
     <a class="mobile-button" href="#resources-ul"> <i class="fa fa-angle-up"></i></a>
      </div>
     <a class="desktop-button" href="#top"> <i class="fa fa-angle-up"></i></a>
     </li>

  <div class="li-container lc-groups-container" id="lc-groups">
    <?php $props = CFS()->get_field_info('local_conservation_groups');?> 
    <h2 class="resources-heading">
    <i class="fa fa-angle-right"></i>
    <i class="fa fa-angle-down"></i>
    <?php echo $props['label'];?></h2>
    <div class="lc-groups resources-content hide">
      <li>
      <?php echo CFS()->get('local_conservation_groups');?>
      </li>
      <li>
        <?php $props = CFS()->get_field_info('local_conservation_groups_2');?> 
        <?php echo CFS()->get('local_conservation_groups_2');?>
        <a class="mobile-button" href="#resources-ul"> <i class="fa fa-angle-up"></i></a>
      </div>
      <a class="desktop-button-end" href="#top"> <i class="fa fa-angle-up"></i></a>
     </li>
    </div>
  </div>
  </div>
 </ul>
 
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();?>