<?php
   /**
    * The template for displaying all single posts
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
    *
    * @package omnispace-sunbeams
    */
   
   get_header();
   ?>
<br>
<div class="n_allEventsSingle">
   <br><br><br><br>
   <!--Home taxt and bottombar -->
   <p class="n_homebar">HOME>
      <?php $category = get_the_category();
         $firstCategory = $category[0]->cat_name; echo $firstCategory;?>
   </p>
   <br>
   <?php
      // Start the loop.
      while ( have_posts() ) : the_post(); ?>
   <div class="col-xl-10 offset-xl-1">
      <h3 class="n_allEventsHeading"> <?php echo the_title(); ?></h3>
   </div>
   <div class="col-xl-10  offset-xl-1">
      <?php  echo the_post_thumbnail(); ?>
   </div>
   <div class="col-xl-10 offset-xl-1 n_allESingleDetails">
      <?php echo the_excerpt(); ?>
      <?php echo the_content(); ?>
   </div>
   <?php
      endwhile;
      ?>
</div>
<br><br>
<?php
get_footer();