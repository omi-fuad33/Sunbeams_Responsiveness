<?php
   /*
       Template Name: Calendar
    */
   ?>
<?php

get_header();
   ?>

<div class="n_differentfullCal">
        
 <div class="n_calCustom">
     

     
     <br><br>
    <h1 class="n_calMonthHead"><?php echo sp_get_current_month_text()?></h1><br><br>

<ul class="n_calMenu">
    
  
    <li class="n_calMenuSingle"><a class="btn btn-info" href="http://sunbeams.edu.bd/calendars/">All</a></li>
  <li class="n_calMenuSingle"><a class="btn btn-primary active" href="http://sunbeams.edu.bd/calendars/category/dhanmondi-branch/">Dhanmondi Branch</a></li>
  <li class="n_calMenuSingle"><a class="n_success active btn"href="http://sunbeams.edu.bd/calendars/category/uttara-branch/">Uttara Branch</a></li>
    
    <li class="n_calMenuSingle"><a class="btn n_grey"href="http://sunbeams.edu.bd/calendars/category/junior-section/">Junior Section</a></li>
    
    <li class="n_calMenuSingle"><a class="btn n_middle"href="http://sunbeams.edu.bd/calendars/category/middle-section/">Middle Section</a></li>
    
    <li class="n_calMenuSingle"><a class="btn n_senior"href="http://sunbeams.edu.bd/calendars/category/senior-section/">Senior Section</a></li>
    
    <li class="n_calMenuSingle"><a class="btn n_holidays" target="_blank" href="http://sunbeams.edu.bd/list-of-holidays/">List of Holidays</a></li>
</ul>
     </div>
   <?php
      while ( have_posts() ) : the_post(); ?>
      
     <?php the_content() ?>
            

     
      <?php
         endwhile; //resetting the page loop
         wp_reset_query(); //resetting the page query
         ?>
   </div>
<br><br><br><br><br>
<div class="n_foot"><?php get_footer();?></div>