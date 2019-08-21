<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omnispace-sunbeams
 */

?>
<!-- Footer nav Section starts -->
    <div class="o_footer_wrap" id="footer">
        <div class="o_footer_container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3 class="o_facilites_text_headline o_footer_headline">Contact Us</h3>
                    <h5 class="o_footer_sub_title">Dhanmondi</h5>
                    <p class="o_footer_paragraph">info@sunbeams.com<br>
                        Road 4, House 46<br>
                        Dhanmondi, Dhaka<br>
                        Phone: 95536254, 0171568459</p>
                    <h5 class="o_footer_sub_title">Uttara</h5>
                    <p class="o_footer_paragraph">sunbeams.uttara@gmail.com<br>
                        Road 13, House 51,<br>
                        Sector 11, Uttara, Dhaka<br>
                        Phone: 8564236, 0171523678<p>
                </div>
                <div class="col-lg-4 col-md-4 d_qInfo">
                    <h3 class="o_facilites_text_headline o_footer_headline">Quick Info</h3>
                    <div class="o_footer_quick_info_menu_wrap">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'quick-info-menu',
                            ) );
                        ?>
                    </div>
                    <p class="o_footer_sub_title o_footer_copyright_symbol">&copy; Sunbeams Ltd.</p>
                </div>
                <div class="col-lg-4 col-md-4 ">
                    <h3 class="o_facilites_text_headline o_footer_headline">For Admissions</h3>
                    <p class="o_footer_admission_paragraph">Mail us<br>
                        <span>sunbeams@info.com</span></p>
                        <!-- <div class="o_footer_logo_wrap d_footer_logo">
                            <img class="o_footer_logo" src="<?php echo get_template_directory_uri(); ?>/images/sunbeamsLogoFooter.png">
                        </div> -->
                        <div class="o_footer_logo_wrap d_footer_padding">
                            <img class="o_footer_logo" src="<?php echo get_template_directory_uri(); ?>/images/sunbeamsLogoFooter.png">
                        </div>
                </div>

            </div>
        </div>
    </div>
<!-- Footer nav Section ends -->
    <div class="o_footer_developer">
            <p class="o_footer_developer_text">Design & Development:<span><a href="https://omnispace.co/"><img class="o_footer_omni_logo" src="<?php echo get_template_directory_uri(); ?>/images/Omni_twitter.png" alt="logo not found"></a></span></p>
    </div>
<?php wp_footer(); ?>
    <script>
            new WOW().init();
    </script>
</body>
</html>
