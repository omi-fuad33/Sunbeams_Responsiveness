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
        <div class="d_alumni_text2">
            <p>Please enter your information below</p>
            <p>*indicates required field</p>
        </div>
            
    </div>
    
    <div class="d_alumni_form-News row">
        <div class="d_alumni_form col-lg-6 col-sm-12">
            <form class= "d_form" action="/action_page.php">
              <fieldset class="d_fieldset">
                  Name *<br>
                <input type="text" name="firstname"><br>
                Address *<br>
                <input type="text" name="address"><br>
                  Email * <br>
                <input type="text" name="email"><br>
                Year graduated *<br>
                <input type="text" name="graduate"><br>
                 Comment <br>
                  <textarea rows="3"></textarea><br>
                <input type="submit" value="SUBMIT">
              </fieldset>
            </form>
        </div>
        <div class="d_alumni_news col-lg-6 col-sm-12">
            <p class="d_alumni_p"> Alumni news and update </p>
            <div class="d_alumni_update">
                            <?php
                    $args = array(
                        'category_name' => 'alumni',
                        'posts_per_page' => 3, 
                                );
                
                    $alumni_query=new WP_Query($args); //Need this to make pagination work
                    
                    if(have_posts()) :  while($alumni_query->have_posts()) : $alumni_query->the_post(); ?>
                <div class="d_alumni_news_wrap">
                <p class="d_alumni_date"><?php echo get_the_date('j F Y'); ?> <span> | </span> <?php the_time(); ?> </p>
                
                    <h4> <?php the_title(); ?> </h4>
                <p class="d_alumni_text_3">
                    <?php
                       the_content(); ?>
                </p>
                </div>
                    <?php
                    endwhile;
                        endif;
                        wp_reset_query(); 
                ?>
                <p class="d_alumni_more">...more</p>
            </div>
            
        </div>
    </div>
</div>
<?php get_footer();?> 




