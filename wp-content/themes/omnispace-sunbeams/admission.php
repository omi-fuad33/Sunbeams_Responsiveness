<?php 
/* Template Name: Admission */

get_header();
?>

  <?php
    $post_id = 232;
    $post_id_process = 265;
    $post_id_fees= 245;
    $post_id_ongoing = 283;
    $thumbnail = get_the_post_thumbnail( $post_id);
    $thumbnail_process = get_the_post_thumbnail( $post_id_process);
    $thumbnail_ongoing  = get_the_post_thumbnail( $post_id_ongoing);
    $thumbnail_fees  = get_the_post_thumbnail( $post_id_fees);
    $queried_post_ongoing = get_post($post_id_ongoing);
    $queried_post = get_post($post_id);
    $queried_post_process = get_post($post_id_process);
    $queried_post_fees = get_post($post_id_fees);
 ?>

<div class="d_admission">
    <div class="d_admission_image">
        <?php
           echo $thumbnail;
       ?>
        <div class="d_mission_title">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    
    <div class="d_admission_content row"  id="process">
        <div class="d_admission_home col-md-12"> 
        <p>HOME >  <?php the_title(); ?></p>

        </div>
        
        <div class="col-md-6 col-sm-12 col-12 d_admission_content1">
            <?php echo $content = $queried_post_process->post_content; ?>
        </div>
         <div class="col-md-6 col-sm-12 col-12 d_admission_content2" >
             <?php echo $thumbnail_fees; ?>
            
        </div>
        
    </div>
</div>
<?php get_footer();?> 




