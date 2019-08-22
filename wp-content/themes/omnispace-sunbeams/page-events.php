    <?php
       /*
           Template Name: Events
        */
       get_header(); ?>


    <div class="n_allEvents">
       <br><br><br><br>
       <!--Home taxt and bottombar -->
       <p class="n_homebarAllEvents">HOME>
          <?php the_title_attribute(); ?><br>

       </p>

        <div class="n_upcomingEvents">
        <?php
    if (have_posts()):
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    else:
      echo '<p>Sorry, no posts matched your criteria.</p>';
    endif;
    ?>
      </div>  
    </div>


    <?php get_footer(); ?>