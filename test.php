<?php 
/* Template Name: Blog*/

get_header();
?>
    <!--Blog content section wrapper-->
    <div style="margin-top: 10.5vh"></div>
    <section class="o_our_work_wrapper container-fluid">
        <!--Blog headline-->
        <h1 class="o_our_work_headline">BLOG</h1>
        <p class="o_our_work_sub_paragraph">SOME OF OUR BLOGS</p>

        <div class="o_our_work_post_wrap_container">
            <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
    $args = array(
        'cat' => '34',
        'posts_per_page' => 24,
        'paged' => $paged,
        );
        ?>
                <div class="o_bootstrap_row_margin_fix row">
                    <!--Post starts here-->
                    <?php $query = new WP_Query($args); ?>
                        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, 'large', true);
            ?>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                <div class="o_our_work_single_post_wrap col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="o_our_work_thumbnail_container">
                                        <img class="o_our_work_thumbnail_img" src="<?php echo $image_url[0]; ?>">
                                        <div class="o_img_overlay">
                                            <!--                             <div class="o_post_view_work">VIEW PROJECT</div>-->
                                        </div>
                                    </div>
                                    <div class="o_our_work_title_wrap">
                                        <!-- <div class="o_our_work_brands_name"><?php the_field('brands_name'); ?></div> -->
                                        <h2 class="o_our_work_post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                            <p class="o_our_work_view_project">View Post</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                            <!-- closes the first div box -->

                            <?php endwhile; ?>
                </div>
        </div>
    </section>
    <div class="our_work_pagination_wrapper">
        <div class="o_our_work_previous_pagination">
            <?php previous_posts_link('<i class="fas fa-arrow-left"></i> PREVIOUS', $query -> max_num_pages); ?></div>
        <div class="o_our_work_next_pagination">
            <?php next_posts_link('NEXT <i class="fas fa-arrow-right"></i>', $query -> max_num_pages); ?></div>
    </div>
    <?php
         wp_reset_postdata();
         else : ?>
        <p>
            <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
        </p>
        <?php endif; ?>
            <?php 
get_footer(); ?>