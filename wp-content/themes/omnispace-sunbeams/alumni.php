<?php 
/* Template Name: Alumni */

get_header();
?>

<?php
    $post_id = 460;
    $thumbnail = get_the_post_thumbnail( $post_id);
    $queried_post = get_post($post_id);
 ?>

<div class="d_alumni">
    <div class="d_admission_image">
        <?php
           echo $thumbnail;
       ?>
        <div class="d_mission_title">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <div class="d_alumni_content row">
        <div class="d_admission_home col-lg-12"> 
        <p>HOME >  <?php the_title(); ?></p>
        </div>
        <div class="d_alumni_text">
            <?php echo $content = $queried_post->post_content; ?>
        </div>
        
</div>
<?php get_footer();?> 




