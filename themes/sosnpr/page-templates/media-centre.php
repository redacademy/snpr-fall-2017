<?php 
/**
* Template Name: Media Centre
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
            <a href="#videos">Videos</a>
          </li>
          <li>
            <a href="#news">In the News</a>
          </li>
        </ul>
        <ul class="resources-nav-2">
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
      <li id="videos" class="li-container">
        <?php $props = CFS()->get_field_info('videos');?> 
        <h2 class="resources-heading">
          <i class="fa fa-angle-right"></i>
          <i class="fa fa-angle-down"></i>
          <?php echo $props['label'];?>
        </h2>
        <div class="resources-content hide">
          <p><?php echo CFS()->get('videos');?></p>
          <a class="mobile-button" href="#resources-ul"> <i class="fa fa-angle-up"></i></a>
        </div>
        <a class="desktop-button" href="#top"> <i class="fa fa-angle-up"></i></a>
      </li>

      <li id="photos" class="li-container">
        <?php $props = CFS()->get_field_info('photos');?> 
        <h2 class="resources-heading owl-block">
          <i class="fa fa-angle-right"></i>
          <i class="fa fa-angle-down"></i>
          <?php echo $props['label'];?>
        </h2>
        <div class="resources-content hide">
          <div class="owl-carousel2">
            <?php
              $photos = CFS()->get('photos');
              foreach ($photos as $image) {
                echo '<img class="owl-image" src="'.$image["image"].'"/>';
              }
            ?>
          </div>
          <a class="mobile-button" href="#resources-ul"> 
            <i class="fa fa-angle-up"></i>
          </a>
        </div>
        <a class="desktop-button" href="#top"> <i class="fa fa-angle-up"></i></a>
      </li>

      <li id="news" class="li-container">
        <?php $props = CFS()->get_field_info('in_the_news');?> 
        <h2 class="resources-heading">
          <i class="fa fa-angle-right"></i>
          <i class="fa fa-angle-down"></i>
          <?php echo $props['label'];?>
        </h2>
        <div class="resources-content hide">
          <p><?php echo CFS()->get('in_the_news');?></p>
          <a class="mobile-button" href="#resources-ul"> <i class="fa fa-angle-up"></i></a>
        </div>
        <a class="desktop-button" href="#top"> <i class="fa fa-angle-up"></i></a>
      </li>
    </ul>
    <div class="recent-updates">
        <h2 class="resources-heading-owl">
          <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Recent Updates</a>
        </h2>
        <div class="owl-carousel">
          <?php query_posts(array(
            'category__not_in' => array(),
            'paged' => $paged,
            'posts_per_page' => 5,
            )); if ( have_posts() ) : 
          ?>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="carousel-cell">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'large' ); ?>
                  <?php endif; ?>
                  <header class="entry-header">
                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                    <?php if ( 'post' === get_post_type() ) : ?>
                      <div class="entry-meta">
                        <?php sosnpr_posted_on(); ?> 
                      </div><!-- .entry-meta -->
                    <?php endif; ?>
                  </header><!-- .entry-header -->
                </article><!-- #post-## -->
              </div><!-- end of carousel-cell -->

            <?php endwhile; ?>
          <?php endif; ?>
        </div><!-- end of owl-carousel -->
        <div class="posts-navigation"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Older Posts</a></div>
      </div><!-- end of radio -->
      <a class="desktop-button-end" href="#top"> <i class="fa fa-angle-up"></i></a>
  </main>
</div><!-- end of primary -->
<?php get_footer();?>
