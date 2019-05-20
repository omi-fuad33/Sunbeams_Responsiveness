<?php
   /*
       Template Name: List of Holidays
    */
   ?>
<?php
   get_header();
      ?>
<div>
<?php
   while ( have_posts() ) : the_post(); 
   ?>
   
   <br><br><br><br>
   <!--Home taxt and bottombar -->
   <p class="n_homebarHolidays">HOME>
      <?php the_title_attribute(); ?><br>
   </p>
   <!--<hr class=n_hr>-->
   <br>
    <div class="n_differentfullHolidays">
   <?php the_content();?>
    </div>    

   <?php
      endwhile; //resetting the page loop
      wp_reset_query(); //resetting the page query
      ?>
      <script>$(window).resize(function(){
 If($(window).width()<500){
  $('.n_differentfulHolidays').removeClass('n_differentfulHolidays');
 }
});</script>
</div>

<br><br><br>
<div class="n_foot"><?php get_footer();?></div>