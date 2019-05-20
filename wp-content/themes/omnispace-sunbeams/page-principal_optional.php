<?php
   /*
       Template Name: Principal's message
    */
   ?>
<?php
   get_header();
   ?>
<!--Taking the featured image from Principal page-->

<div class="n_differentfull">    
<?php
   while ( have_posts() ) : the_post(); 
   $image_id = get_post_thumbnail_id();
   $image_url = wp_get_attachment_image_src($image_id, 'full', true);
   ?>
<div class="n_contain"><img class="n_prinImage img-responsive" src="<?php echo $image_url[0]; ?>">
<div class="n_principalBox"><h1 class="n_prinTitle"><?php the_title(); ?></h1></div>
    </div>
   
<br><br>

<!--Home taxt and bottombar -->

<p class="n_homebar">HOME>
   <?php the_title_attribute(); ?><br>
</p>
<hr class=n_hr><br>

<?php static $count = 0; ?>
<?php $catquery = new WP_Query( 'cat=2 &posts_per_page=2' ); ?>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
<?php if ($count == 0): ?>
<div class="n_writingFirst col-xl-10 col-lg-9 col-md-9 col-sm-8 col-9">
   <?php the_content();?>
</div>
<br><br>

<!--Taking the second portion of the content from post -->


<?php elseif ($count == 1): ?>

<div class="container-fluid  n_fullSecond">

<span class="float-right col-xl-5 n_writingSecond">

</span>
</div>    

<?php endif; ?>
<?php $count++; ?>
<?php endwhile; ?>

<?php
   endwhile; //resetting the page loop
   wp_reset_query(); //resetting the page query
   ?>
   
    </div>
 <div class="n_foot"><?php get_footer();?></div>
   

 

