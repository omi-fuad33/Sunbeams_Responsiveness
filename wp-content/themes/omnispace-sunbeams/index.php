<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package omnispace-sunbeams
 */

get_header();
?>
<section class="o_full_index_wrapper Container-fluid">
	<!-- Slider starts here -->
	<div id="myCarousel" class="carousel slide o_slider" data-ride="carousel" data-interval="6000" data-pause="false">
						<?php
						  $args = array('category_name' => 'featured',
                              'posts_per_page' => 5, 
                              
                          ); //start counter
                            $slider_query=new WP_Query($args); //Need this to make pagination work
                            ?>
                         <ol class="carousel-indicators o_slider_indicator">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"><div></div></li>
                            <li data-target="#myCarousel" data-slide-to="1"><div></div></li>
                            <li data-target="#myCarousel" data-slide-to="2"><div></div></li>
                            <li data-target="#myCarousel" data-slide-to="3"><div></div></li>
                            <li data-target="#myCarousel" data-slide-to="4"><div></div></li>
                        </ol>
                         <div class="carousel-inner o_featured_slider">
                             <?php
                                if(have_posts()) :  while($slider_query->have_posts()) : $slider_query->the_post(); 

                                $image_id = get_post_thumbnail_id();
                                $image_url = wp_get_attachment_image_src($image_id, 'full', true);
                             ?>
                             <div id="o_slider_img" class="carousel-item <?php if($slider_query->current_post == 0) : ?>active<?php endif; ?>">
                                <img class="o_slider_img" src="<?php echo $image_url[0]; ?>">
                            </div>
                             <?php endwhile;
                               endif;
                                   ?>
                             <?php wp_reset_query(); ?>
                         </div>
                             <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
    </div>
	<!-- Slider ends -->
    <!--    Welcome Section starts-->
    <diV class="o_welcome_section_wrapper">
        <h1 class="o_homepage_heading">Welcome</h1>
        <?php
            $post_id = 37;
            $queried_post = get_post($post_id);
            $content = $queried_post->post_content;
        ?>
        <div class="o_welcome_text_container wow fadeInUp"><?php echo $content; ?></div>
    </diV>
    <!--    About Us Section ends-->
    <div class="o_about_us_container_margin">
        <diV class="o_about_us_section_wrapper">
            <h1 class="o_homepage_heading">About Us</h1>
            <div class="row">
                <div class="col-lg-12 o_about_us_col wow zoomIn">
                    <img class="o_about_us_col_img img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Principal.jpg" alt="image not found">
                    <h2>Message from Head of School</h2>
                    <a href="<?php echo get_home_url(); ?>/principal"><p class="o_about_us_read_more">Read More</p></a>
                </div>
                <!-- <div class="col-lg-6 o_about_us_col wow zoomIn">
                    <img class="o_about_us_col_img img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/school.jpg" alt="image not found">
                    <h2>School Board</h2>
                    <a href="<?php echo get_home_url(); ?>/school"><p class="o_about_us_read_more">Read More</p></a>
                </div> -->
                <!-- <div class="col-lg-4 o_about_us_col wow zoomIn">
                    <img class="o_about_us_col_img img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/mission.JPG" alt="image not found">
                    <h2>Mission & Vision</h2>
                    <a href="<?php echo get_home_url(); ?>/mission"><p class="o_about_us_read_more">Read More</p></a>
                </div> -->
            </div>
        </diV>
        <!--    About us section ends-->
        <!-- News & Notice Section starts -->
    <div class="o_home_news_notice_container">
        <h1 class="o_homepage_heading">News & Notices</h1>
        <div class="row">
            <!-- <div class="col-lg-4 o_home_news_column wow fadeInLeft">
                <?php
                    $args = array(
                        'category_name' => 'newsletter',
                        'posts_per_page' => 1, 
                                );
                    $newsletter_query=new WP_Query($args); //Need this to make pagination work
                    if(have_posts()) :  while($newsletter_query->have_posts()) : $newsletter_query->the_post(); 
                        $image_id = get_post_thumbnail_id();
                        $image_url = wp_get_attachment_image_src($image_id, 'large', true);
                ?>
                <div>
                    <img class="o_home_newsletter_img" src="<?php echo $image_url[0]; ?>" alt="image not found">
                </div>
                <a href="http://sunbeams.edu.bd/newsletter/"><h3 class="o_home_newsletter_heading">Newsletter</h3></a>
                <?php endwhile;
                        endif;
                        wp_reset_query(); 
                ?>
            </div> -->
            <div class="col-lg-6 o_home_news_column wow fadeInLeft">
                <?php
                    $args = array(
                        'category_name' => 'events',
                        'posts_per_page' => 1, 
                                );
                    $newsletter_query=new WP_Query($args); //Need this to make pagination work
                    if(have_posts()) :  while($newsletter_query->have_posts()) : $newsletter_query->the_post(); 
                        $image_id = get_post_thumbnail_id();
                        $image_url = wp_get_attachment_image_src($image_id, 'large', true);
                ?>
                <div>
                    <img class="o_home_newsletter_img" src="<?php echo $image_url[0]; ?>" alt="image not found">
                </div>
                <a href="http://sunbeams.edu.bd/all-events/"><h3 class="o_home_newsletter_heading">Events</h3></a>
                <?php endwhile;
                        endif;
                        wp_reset_query(); 
                ?>
            </div>
            <div class="col-lg-6 o_home_news_column wow fadeInRight">
                <a href="http://sunbeams.edu.bd/notice-board/"><h3 class="o_home_newsletter_heading o_home_noticeboard_heading">Notice Board</h3></a>
                <?php
                    $args = array(
                        'category_name' => 'notice-board',
                        'posts_per_page' => 4, 
                                );
                    $newsletter_query=new WP_Query($args); //Need this to make pagination work
                    if(have_posts()) :  while($newsletter_query->have_posts()) : $newsletter_query->the_post(); 
                        $image_id = get_post_thumbnail_id();
                        $image_url = wp_get_attachment_image_src($image_id, 'large', true);
                ?>
                <div class="o_home_notice_wrap">
                    <div class="o_home_notice_date"><?php echo get_the_date(); ?></div>
                    <h5 class="o_home_notice_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                    <!-- <div class="o_home_notice_blurb"><?php the_excerpt();?></div> -->
                </div>
                <?php endwhile;
                        endif;
                        wp_reset_query(); 
                ?>
            </div>
        </div>
    </div>
    <!-- News & Notice Section ends -->
    <!-- Admission Section starts -->
    <div class="o_home_admission_container">
            <div class="o_home_admission_right_container wow fadeInUp">
                <?php
                    $post_id = 187;
                    $queried_post = get_post($post_id);
                    $content = $queried_post->post_content;
                    $title = $queried_post->post_title;
                    $admission_thumbnail = get_the_post_thumbnail( $post_id, 'large' ); 
                ?>
                <div class="o_facilites_text_headline o_facilites_text_headline_conflict_fix"><a target="_blank" href="<?php echo get_home_url();?>/admission"><?php echo $title; ?></a></div>
                
                
                <div class="o_home_admission_text_content"><?php echo $content; ?></div>
                <p><a class="o_facilities_eca_link o_home_admission_link_buttons" href="<?php echo get_home_url();?>/admission/#process">Admission process</a></p>

<!--                <p><a class="o_facilities_eca_link o_home_admission_link_buttons" href="<?php echo get_home_url();?>/admission/#ongoing">Admission ongoing</a></p>-->

                <!-- <p><a class="o_facilities_eca_link o_home_admission_link_buttons" href="<?php echo get_home_url();?>/admission/#ongoing">Admission ongoing</a></p> -->

                <?php wp_reset_query(); ?>
            </div>
        
    </div>
    <!-- Admission Section ends -->
    <!-- Academic Calender Section starts-->
                <?php
                    $post_id = 192;
                    $queried_post = get_post($post_id);
                    $content = $queried_post->post_content;
                    $title = $queried_post->post_title;
                    $thumbnail = get_the_post_thumbnail( $post_id, 'small' ); 
                ?>
           
    <div class="row o_home_academic_section_container">
            <div class="col-lg-6 col-xs-12 wow fadeInRight">
                <div class="o_home_academic_section_img"><?php echo $thumbnail; ?></div>
            </div>
            <div class="col-lg-6 col-xs-12 wow fadeInLeft o_home_academic_right">
                <a href=""><h1 class="o_facilites_text_headline" style="text-align: left">Academic calendar</h1></a>
            </div>
    </div>
    <!-- Academic Calender Section ends -->
    <!-- Gallery Section starts -->
    <div class="o_home_gallery_container">
        <h4>Gallery</h4>
        <div class="o_home_gallery_wrapper row">
            <div class="col-lg-7">
                <div class="o_home_video_gallery wow zoomIn">
                    <img class="o_gallery_video_img img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/video2.png" alt="image not found">
                </div>
            </div>
            <div class="col-lg-5 o_home_gallery_photo_container">
                <div class="o_home_gallery_photo wow zoomIn">
                    <img class="o_gallery_photo_img_img" src="<?php echo get_template_directory_uri(); ?>/images/gallery 1.png" alt="image not found">
                </div>
                <div class="o_home_gallery_photo wow zoomIn">
                    <img class="o_gallery_photo_img" src="<?php echo get_template_directory_uri(); ?>/images/gallery 2.png" alt="image not found">
                </div>
            </div>
    </div>
    </div>
    <!-- Gallery Section ends -->
     <!-- Facilities Section Starts -->
     <div class="o_home_facilities_section_container">
            <?php
                $post_id = 184;
                $queried_post = get_post($post_id);
                $content = $queried_post->post_content;
                $title = $queried_post->post_title;
                $thumbnail = get_the_post_thumbnail( $post_id, 'large' ); 
            ?>
            <div class="o_facilites_text_container_wrapper row">
                <div class="o_home_facilities_left col-lg-12 col-md-12 col-12 wow fadeInLeft">
                    <div class="o_facilites_text_container">
                        <div class="o_facilites_text_headline o_facilites_text_headline_conflict_fix"><a target="_blank" href="<?php echo get_home_url();?>/facilities"><?php echo $title; ?></a></div>
                        <div class="o_facilites_text_content"><?php echo $content; ?></div>
                        <!--<p><a class="o_facilities_eca_link" href="<?php echo get_home_url(); ?>/facilities/#n_ECAA">ECA</a></p>-->
                    </div>
                </div>
                <!-- <div class="o_home_facilities_right col-lg-6 col-md-6 col-12 wow fadeInRight">
                    <div class="o_facilities_home_img"><?php echo $thumbnail; ?></div>
                    <?php wp_reset_query(); ?>
                </div> -->
            </div>
     </div>
        <!-- Facilities Section ends -->
    <!-- Home Campus Section starts -->
    <div class="o_home_campus_container">
        <?php
            $post_id = 194;
            $queried_post = get_post($post_id);
            $content = $queried_post->post_content;
            $title = $queried_post->post_title;
            $thumbnail = get_the_post_thumbnail( $post_id, 'large' ); 
        ?>
        <div class="o_home_campus_content_wrapper wow fadeInUp">
            <a class="o_homepage_heading" style="text-align: left" target="_blank" href="<?php echo get_home_url();?>/campus"><?php echo $title; ?></a>
            <div class="o_home_campus_content"><?php echo $content; ?></div>
            <div class="row">
                <div class="col-lg-6">
                    <p><a class="o_facilities_eca_link o_home_admission_link_buttons o_home_campus_link_buttons" href="http://omnispace.co/sunbeams/dhanmondi">Dhanmondi</a></p>
                    <div class="o_home_campus_section_img wow zoomIn"><?php echo $thumbnail; ?></div>
                </div>
                <div class="col-lg-6">
                <?php
                    $post_id = 751;
                    $queried_post = get_post($post_id);
                    $thumbnail_uttara_campus = get_the_post_thumbnail( $post_id, 'small' ); 
                ?>
                    <p><a class="o_facilities_eca_link o_home_admission_link_buttons o_home_campus_link_buttons" href="http://omnispace.co/sunbeams/uttara">Uttara</a></p>
                    <div class="o_home_campus_section_img wow zoomIn"><?php echo $thumbnail_uttara_campus; ?></div>
                <div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Home Campus Section ends -->
    <!-- Home Alumni Section Starts -->
    <div class="o_home_alumni_container">
        <div class="row">
            <?php
                $post_id = 196;
                $queried_post = get_post($post_id);
                $content = $queried_post->post_content;
                $title = $queried_post->post_title;
                $thumbnail = get_the_post_thumbnail( $post_id, 'large' ); 
            ?>
            <div class="col-lg-5 wow fadeInLeft">
                <div class="o_home_alumni_section_img"><?php echo $thumbnail; ?></div>
            </div>
            <div class="col-lg-5 wow fadeInRight o_home_alumni_text_container">
                <h1 class="o_homepage_heading o_home_alumni_title"><?php echo $title; ?></h1>
                <div class="o_home_campus_content o_home_alumni_content"><?php echo $content; ?></div>
                <a href="http://omnispace.co/sunbeams/alumni"><p class="o_about_us_read_more o_alumni_read_more">Read More</p></a>
            </div>
            <div class="col-lg-2 wow fadeInLeft">
            </div>
        </div>
    </div>
    <!-- Home Alumni Section Starts -->
</section>
<?php
get_footer();