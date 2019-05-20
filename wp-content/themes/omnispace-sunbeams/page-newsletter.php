<?php
   /*
       Template Name: Newsletter
    */
   ?>
<?php
   get_header();
   ?>
<!-- Featured image from the News and Notice page-->
<div class="n_allNewsletter">
    <br><br><br><br>
   <!--Home taxt and bottombar -->
   <p class="n_homebar">HOME>
      <?php the_title_attribute(); ?><br>
   </p>
   
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?><br><br>
   <!--News and Notices Div-->

    
  
      
       
         <!--Column-2-->    
        
          <!--  <a class="n_colorHover" href="#"><h3 class="n_columnHead">Newsletter</h3></a>
            <br> -->
    
           <div class="row">
            <?php static $count2 = 0; ?>
            <?php $catquery = new WP_Query( 'cat=5 &posts_per_page=9' ); ?>
            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            
            
            
            <?php if ($count2 == 0): ?>
            <div class="col-xl-4 n_news1">
               <div>
                  <a class="n_newsletter" href="<?php the_permalink() ?>"><?php the_content(); ?></a>
               </div>
            </div>
            <br><br>
            <?php elseif ($count2 == 1): ?>
            <div class="col-xl-4 n_news2">
               <div>
                  <?php echo the_post_thumbnail(array());?>   
                  <div class="n_inside"><a class="n_newsletter" href="<?php the_permalink() ?>"><?php the_content(); ?></a></div>
               </div>
            </div>
            <br><br>
              <?php elseif ($count2 == 2): ?>
            <div class="col-xl-4 n_news2">
               <div>
                  <?php echo the_post_thumbnail(array());?>   
                  <div class="n_inside"><a class="n_newsletter" href="<?php the_permalink() ?>"><?php the_content(); ?></a></div>
               </div>
            </div>
            <br><br>
             
            <?php else: ?>
            <div class="col-xl-4 n_news2">
               <div>
                  <?php echo the_post_thumbnail(array());?>   
                  <div class="n_inside"><a class="n_newsletter" href="<?php the_permalink() ?>"><?php the_content(); ?></a></div>
               </div>
            </div>
             </div>
    
    
    
            <?php endif; ?>
            <?php $count2++; ?>
            <?php endwhile; ?>    
         
          
          
        

       
   </div>
   <?php get_footer();?> 


<?php endwhile;
   else: ?>
<p>Sorry no post so fat</p>
<?php endif; ?>


