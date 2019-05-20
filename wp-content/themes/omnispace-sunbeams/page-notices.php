<?php
   /*
       Template Name: News and notices
    */
   ?>
<?php
   get_header();
   ?>
<!-- Featured image from the News and Notice page-->
<div class="n_full">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      $image_id=get_post_thumbnail_id();
      $image_url=wp_get_attachment_image_src($image_id,'full',true);
      ?>
   <img class="img-responsive" src="<?php echo $image_url[0];?>"><br><br>
   <!--News and Notices Div-->
   <div class="n_noticeNewsEvents">
      <p class="n_homebarNotice">HOME>
         <?php the_title_attribute(); ?><br>
      </p>
      <hr class="n_hrNotice">
      <br> 
      <div class="n_writingFirstNotice col-xl-10 col-lg-9 col-md-11 col-sm-11 col-xs-12">
         <?php the_content();?>
      </div>
      
       
       
      <!--Three column starts here-->
      <div class="row">
         <!--Column-1-->
         <div class="col-xl-4">
             <a class="n_colorHover" href="#"><h3 class="n_columnHead">Events</h3></a>
            <br>    
            <?php static $count = 0; ?>
            <?php $catquery = new WP_Query( 'cat=4 &posts_per_page=3' ); ?>
            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            <?php if ($count == 0): ?>
            <div class="n_events1">
               <div class="n_events_pic1"><?php echo the_post_thumbnail(array());?></div>
                     
            </div><br>
            <?php elseif ($count == 1): ?>
            <div class="n_events1">
               <div class="n_events_pic1"><?php echo the_post_thumbnail(array());?></div>
                  
            </div>
            <?php endif; ?>
            <?php $count++; ?>
            <?php endwhile; ?>
         </div>
          
         <!--Column-2-->    
         <div class="col-xl-4">
            <a class="n_colorHover" href="#"><h3 class="n_columnHead">Newsletter</h3></a>
            <br> 
            <?php static $count2 = 0; ?>
            <?php $catquery = new WP_Query( 'cat=5 &posts_per_page=3' ); ?>
            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            <?php if ($count2 == 0): ?>
            <div class="n_news1">
               <div>
                  <a class="n_newsletter" href="<?php the_permalink() ?>"><?php the_content(); ?></a>
               </div>
            </div>
            <br><br>
            <?php elseif ($count2 == 1): ?>
            <div class="n_news2">
               <div>
                  <?php echo the_post_thumbnail(array());?>   
                  <div class="n_inside"><a class="n_newsletter" href="<?php the_permalink() ?>"><?php the_content(); ?></a></div>
               </div>
            </div>
            <br><br>
            <?php else: ?>
            <div class="n_news2">
               <div>
                  <?php echo the_post_thumbnail(array());?>   
                  <div class="n_inside"><a class="n_newsletter" href="<?php the_permalink() ?>"><?php the_content(); ?></a></div>
               </div>
            </div>
            <?php endif; ?>
            <?php $count2++; ?>
            <?php endwhile; ?>    
         </div>
          
          
         <!--Column-3-->
         <div class="col-xl-4"><!--FULL DIV of Column 3-->
            <a class="n_colorHover" href="#"><h3 class="n_columnHead">Notice Board</h3></a>
            <br> 
            
            <?php $catquery = new WP_Query( 'cat=6 &posts_per_page=4' ); ?>
            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            
            
            <div class="n_notice1">
                <?php echo '<span class="n_excerpt">' . get_the_date().'</span>' ?><br>
                <a class="n_noticeHead n_newsletter" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                <?php  echo '<p class="n_excerpt">' . get_the_excerpt() . '</p>' ?><hr>
            </div>
             
             
             
             
             
             
             
             
            
            <?php endwhile; ?>    
         </div><!--FULL DIV of Column 3 ENDS-->
         <br><br>
          
      </div>
       
   </div>
   <?php get_footer();?> 

</div>
<?php endwhile;
   else: ?>
<p>Sorry no post so fat</p>
<?php endif; ?>


