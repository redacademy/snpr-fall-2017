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
        <div id="top" class="proposed-hero">
          <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'page' ); ?>

          <?php endwhile; // End of the loop. ?>

        </div>

      </header>

      <section class="proposed-banner">
        <ul class="banner-list">
          <li><a href="#land">the place</a></li>
          <li><a href="#human">human impact</a></li>
        </ul>
        <ul class="banner-list">
          <li><a href="#land-use">land use regulations</a></li>
          <li><a href="#benefits">local benefits</a></li>
        </ul>
        <ul class="banner-list">
          <li><a href="#why">why a national park reserve</a></li>
          <li><a href="#faq">faq</a></li>
        </ul>
      </section>


      <section class="proposed-container" id="start">

        <div class="prop-item land" id="land">
          <h2 class="title"><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            <?php echo CFS()->get_field_info( 'the_place' )['label'];?>
          </h2>

          <div class="content-container">
            <div class="content-container-one">
            <div class="text">
              <?php echo CFS()->get( 'the_place' );?>

              <div class="close-section">
              <i class="fa fa-angle-up" aria-hidden="true"></i>
              </div>
            </div>

            
            <div class="image"><img src="<?php echo CFS()->get('land_image');?>" alt="a hiker in neon gazing out reflectively at a river in the valley below"
              /></div>
            </div>
            <div class="content-container-two">
            <div class="image"><img src="<?php echo CFS()->get('location_image');?>" alt="a map of the southern okanagan" /></div>
            <div class="text">
              <?php echo CFS()->get('park_proposal_history');?>

            </div>
            </div>
          </div>
          <a href="#top"><button class="page-top"><i class="fa fa-angle-up" aria-hidden="true"></i></button></a>
        </div>
        <!-- close the land -->

        <div class="prop-item why" id="why">
          <h2 class="title"><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            <?php echo CFS()->get_field_info( 'why_a_national_park' )['label'];?>
          </h2>

          <div class="content-container">
            <div class="text">
              <?php echo CFS()->get( 'why_a_national_park' );?>

              <div class="close-section">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
              </div>

            </div>
            <div class="image"><img src="<?php echo CFS()->get('why_image');?>" alt="an aerial shot of a river" /></div>
          </div>

          <a href="#top"><button class="page-top"><i class="fa fa-angle-up" aria-hidden="true"></i></button></a>
        </div>
        <!-- closes why national park-->


        <div class="prop-item human" id="human">
          <h2 class="title"><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            <?php echo CFS()->get_field_info( 'human_impact' )['label'];?>
          </h2>

          <div class="content-container-one">
            <div class="text">
              <?php echo CFS()->get( 'human_impact' );?>

              <div class="close-section">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
              </div>

            </div>
            <div class="image"><img src="<?php echo CFS()->get('human_image');?>" alt="three men standing on a hill wearing sunglasses and holding papers"
              /></div>
          </div>


          <div class="content-container-two">
            <div class="image"><img src="<?php echo CFS()->get('ranch_image');?>" alt="a standing brown cow and a sitting white cow staring at the photographer through some light foliage"
              /></div>
            <div class="text">
              <?php echo CFS()->get('ranching_agriculture');?>

              <div class="close-section">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
              </div>

            </div>
          </div>
          <a href="#top"><button class="page-top"><i class="fa fa-angle-up" aria-hidden="true"></i></button></a>
        </div>
        <!--close human impact -->


        <section class="prop-item benefits" id="benefits">
          <h2 class="title"><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            <?php echo CFS()->get_field_info( 'local_benefits' )['label'];?>
          </h2>


          <div class="content-container-one">
            <div class="image"><img src="<?php echo CFS()->get('ecological_image');?>" alt="several white tail deer grazing next to a lake"
              /></div>
            <div class="text">
              <?php echo CFS()->get('local_benefits');?>

              <div class="close-section">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
              </div>

            </div>
          </div>


          <div class="content-container-two">
            <div class="text">
              <?php echo CFS()->get('economic_benefits');?>

              <div class="close-section">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
              </div>

            </div>
            <div class="image">
              <div class="pdf-container">
                <?php echo CFS()->get('economic_link');?>

              </div>

            </div>
          </div>

          <a href="#top"><button class="page-top"><i class="fa fa-angle-up" aria-hidden="true"></i></button></a>
        </section>
        <!-- closes local benefits -->



        <section class="prop-item faq" id="faq">
          <h2 class="title"><span class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            <?php echo CFS()->get_field_info( 'faq' )['label'];?>
          </h2>

          <div class="content-container-one">
            <div class="text">
              <?php echo CFS()->get('faq');?>
            </div>
            <div class="image"><img src="<?php echo CFS()->get('faq_image_one');?>" alt="an aerial view of a river" /></div>
          </div>

          <div class="content-container-two">
            <div class="image"><img src="<?php echo CFS()->get('faq_image_two');?>" alt="a small group of people walking down a hill" /></div>
            <div class="text">
              <?php echo CFS()->get('faq_2');?>
            </div>
          </div>

          <div class="content-container-three">
            <div class="text">
              <?php echo CFS()->get('faq_three');?>
            </div>
            <div class="image"><img src="<?php echo CFS()->get('faq_image_three');?>" alt="a helicopter over a snowy mountain top with clouds in the background"
              />
            </div>
          </div>
          <div class="content-container">
            
            <div class="content-container-four">
              <div class="image"><img src="<?php echo CFS()->get('land_use_one');?>" alt="a pristine lake with a graphic in the top left corner that has a fish with a checkmark indicating that fishing will still be allowed"
                /></div>
            </div>
          
            <div class="content-container-five">
              <div class="text">
                <?php echo CFS()->get('faq_land_use_reg');?>
              </div>
              <div class="text fish">
                <?php echo CFS()->get('faq_land_use_two');?>
              </div>
            </div>

            <div class="content-container-six">
              <div class="text">
                <?php echo CFS()->get('faq_land_use_three');?>
              </div>
              <div class="text">
                <?php echo CFS()->get('faq_land_use_four');?>

                <div class="close-section">
                  <i class="fa fa-angle-up" aria-hidden="true"></i>
                </div>
              </div>
            </div>

            <div class="content-container-seven">
              <div class="image"><img src="<?php echo CFS()->get('land_use_two');?>" alt="a brown field with two graphics, one of a person shooting a rifle and one of an atv, both with exes"
                /></div>
            </div>
          </div><!-- closes content-container -->
          
          <a href="#top"><button class="page-top last"><i class="fa fa-angle-up" aria-hidden="true"></i></button></a>
        </section>
        <!-- closes FAQ-->

      </section>

    </article>


  </main>
  <!-- #main -->

</div>
<!-- #primary -->

<?php get_footer();?>