principal

<!--
       


<div class="n_newIm"><img class="float-right n_im img-responsive"  src="<?php echo $image_url[0]; ?>"></div>
          
          
          <div class="n_writingSecond">
         <?php the_content();?>
-->

Admission ongoing

<br><br><br>
<div id="ongoing" style="font-size20px;"><marquee direction="left"><b>ADMISSIONS ARE GOING ON FOR CURRENT AND NEXT SESSION</b></marquee></div>

ECA LIST

 <ul class="n_newECAClassList"><li class="n_fiveSix n_newECAClassSingle"><a class="" href="#">Click to view the ECA clubs of class V-VI</a></li><br>
<li class="n_sevenEight n_newECAClassSingle"><a class="" href="#">Click to view the ECA clubs of class VII-VIII</a></li><br>
</ul>

All events
<!--  Event & updates post row starts  -->
   <?php
      $counter = 1; //start counter
      $args = array(
                    'posts_per_page' => 8,
                     'category_name' => 'events',
                  ); //start counter
                  $front_query=new WP_Query($args); //Need this to make pagination work
                 
      if(have_posts()) :	while($front_query->have_posts()) :  $front_query->the_post(); ?>
   <?php if($counter == 1) :
      $image_id = get_post_thumbnail_id();
      $image_url = wp_get_attachment_image_src($image_id, 'slider-thumbnail', true); ?>
   <div class="row">
      <div class="col-lg-5">
         <img class="" src="<?php echo $image_url[0]; ?>">
      </div>
      <div class="col-lg-5">
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
      <div class="col-lg-5">
         <?php $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, 'slider-thumbnail', true); ?>
         <img class="" src="<?php echo $image_url[0]; ?>">
      </div>
      <div class="col-lg-5">
         <h4 class="n_allEventsHeading"><?php the_title(); ?></h4>
         <div class="n_allEExcerpt">
            <?php the_excerpt(); ?>
            <a class="n_allEExcerpt" href="<?php echo get_permalink(); ?>"> Read More...</a>
         </div>
      </div>
   </div>
   <hr>
   <br><br><br>
</div>
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
<?php wp_reset_query(); ?>
<!--  Event & updates post row ends -->
<!--<div class="n_allEButton">
   <a href="<?php echo get_template_directory_uri(); ?>/events/all-events/">
       <button class="o_all_blogs_button">All Events</button>
   </a><br><br><br>
   </div>-->
</div>
</section>
      