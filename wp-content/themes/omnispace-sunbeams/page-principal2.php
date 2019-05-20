<?php
   /*
       Template Name: Principal's message
    */
   ?>
<?php
   get_header();
   ?>


 <!--Taking the featured image from Principal page-->

<?php
   while ( have_posts() ) : the_post(); 
   $image_id = get_post_thumbnail_id();
   $image_url = wp_get_attachment_image_src($image_id, 'full', true);
   ?>

<img class=""n_prinBack" img-responsive" src="<?php echo $image_url[0]; ?>"><br><br>

 <!--Taking the first portion of the content from post -->

<?php $catquery = new WP_Query( 'cat=2' ); ?>

<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

<!--Home taxt and bottombar -->
<p class="n_homebar">HOME> <?php the_title_attribute(); ?></p>
<hr class=n_hr>

<div class="n_writingFirst col-6"><?php the_content();?></div>

<?php 
   endwhile;
   wp_reset_postdata();
   ?><br>

<!-- This is the content portion from page-->

<div class="n_writing"><?php the_content();?></div>
<?php
   endwhile; //resetting the page loop
   wp_reset_query(); //resetting the page query
   ?>