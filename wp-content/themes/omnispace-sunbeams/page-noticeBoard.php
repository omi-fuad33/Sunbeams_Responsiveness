<?php
   /*
       Template Name: Notice Board 
    */
   get_header(); ?>

<div class="n_differentfull">
   <br><br><br><br><br>
    <div class="n_allEvents">
   <!--Home taxt and bottombar -->
   <p class="n_homebarAllEvents">HOME>
      <?php the_title_attribute(); ?><br>
   </p>
   <!--  Event & updates post row starts  -->
   <?php
      $counter = 1; //start counter
      $args = array(
                    'posts_per_page' => 7,
                     'category_name' => 'notice-board',
                  ); //start counter
                  $front_query=new WP_Query($args); //Need this to make pagination work
                 
      if(have_posts()) :	while($front_query->have_posts()) :  $front_query->the_post(); ?>
   <?php if($counter == 1) :?>
   <div class="row">
      <div class="col-xl-10">
         <h4 class="n_allEventsHeading"><?php the_title(); ?></h4>
         <div class="n_allEExcerpt">
            <?php the_excerpt(); ?>
            <a class="n_allEExcerpt" href="<?php echo get_permalink(); ?>"> Read More...</a>
         </div>
      </div>
   </div>
   <hr>
   <div class="row">
      <?php elseif($counter == 2) : ?>
      <div class="col-xl-10">
         <h4 class="n_allEventsHeading"><?php the_title(); ?></h4>
         <div class="n_allEExcerpt">
            <?php the_excerpt(); ?>
            <a class="n_allEExcerpt" href="<?php echo get_permalink(); ?>"> Read More...</a>
         </div>
      </div>
   </div>
   <hr>
   <div class="row">
      <?php elseif($counter == 3) : ?>
      <div class="col-xl-10">
         <h4 class="n_allEventsHeading"><?php the_title(); ?></h4>
         <div class="n_allEExcerpt">
            <?php the_excerpt(); ?>
            <a class="n_allEExcerpt" href="<?php echo get_permalink(); ?>"> Read More...</a>
         </div>
      </div>
   </div>
   <hr>
   <div class="row">
      <?php elseif($counter == 4) : ?>
      <div class="col-xl-10">
         <h4 class="n_allEventsHeading"><?php the_title(); ?></h4>
         <div class="n_allEExcerpt">
            <?php the_excerpt(); ?>
            <a class="n_allEExcerpt" href="<?php echo get_permalink(); ?>"> Read More...</a>
         </div>
      </div>
   </div>
   <hr>
   <div class="row">
      <?php elseif($counter == 5) : ?>
      <div class="col-xl-10">
         <h4 class="n_allEventsHeading"><?php the_title(); ?></h4>
         <div class="n_allEExcerpt">
            <?php the_excerpt(); ?>
            <a class="n_allEExcerpt" href="<?php echo get_permalink(); ?>"> Read More...</a>
         </div>
      </div>
   </div>
   <hr>
   <div class="row">
      <?php elseif($counter == 6) : ?>
      <div class="col-xl-10">
         <h4 class="n_allEventsHeading"><?php the_title(); ?></h4>
         <div class="n_allEExcerpt">
            <?php the_excerpt(); ?>
            <a class="n_allEExcerpt" href="<?php echo get_permalink(); ?>"> Read More...</a>
         </div>
      </div>
   </div>
   <hr>
   <div class="row">
      <?php elseif($counter == 7) : ?>
      <div class="col-xl-10">
         <h4 class="n_allEventsHeading"><?php the_title(); ?></h4>
         <div class="n_allEExcerpt">
            <?php the_excerpt(); ?>
            <a class="n_allEExcerpt" href="<?php echo get_permalink(); ?>"> Read More...</a>
         </div>
      </div>
   </div>
   <hr>
   <br><br><br>

<?php
   $counter = 0;
   endif;
   ?>
<?php
   $counter++;
   endwhile; 
   //Pagination can go here if you want it.
   endif;
   ?>

</div><br><br><br><br><br><br><br><br>
</div>
    
<div class="n_foot"><?php get_footer();?></div>

