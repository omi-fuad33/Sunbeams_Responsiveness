<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omnispace-sunbeams
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Header Starts -->
<div class="o_top_nav_wrapper" id="o_top_nav_wrapper">
	<div class="row">
		<div class="col-lg-2">
			<a href="http://sunbeams.edu.bd/"><img class="o_navbar_top_logo img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/sunbeamslogo.png" alt="logo not found"></a>
            <!-- <div class="o_hamburger_container" id="o_hamburger_container" onclick="main_menu_open(this)">
                <div class="o_hamburger_bar o_hamburger_bar1"></div>
                <div class="o_hamburger_bar o_hamburger_bar2"></div>
                <div class="o_hamburger_bar o_hamburger_bar3"></div>
            </div> -->
		</div>
		<div class="col-lg-10 o_topbar_right_menu_wrapper">
			<ul>
				<!-- <li id="o_top_quick_menu_button" onclick="main_quick_menu_open(this)"><i class="fas fa-info o_icon"></i>QUICK INFO</li> -->
				<li id="o_top_call_menu_button" onclick="main_call_menu_open(this)"><i class="fas fa fa-phone o_icon"></i>CALL</li>
				<!-- <li id="o_top_visit_menu_button" onclick="main_visit_menu_open(this)"><i class="fas fa-map-marker-alt o_icon"></i>VISIT</li> -->
				<li><i class="fas fa-search o_search_icon"></i></li>
			</ul>
			<div class="o_header_main_menu">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                ) );
             ?>
		</div>
		</div>
	</div>
</div>
<!-- Header Ends -->
<div class="o_all_menu_wrap" id="o_all_menu_wrap">
<!-- Header Quick Menu Starts -->
	<div class="o_top_quick_menu" id="o_top_quick_menu">
			<div class="o_top_quick_menu_wrap">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'quick-info-menu',
					) );
				?>
			</div>
	</div>
<!-- Header Quick Menu ends -->
<!-- Header Call menu Starts -->
	<div class="o_top_call_menu" id="o_top_call_menu">
		<div class="o_top_call_menu_wrap">
		</div>
	</div>
<!-- Header Call menu ends -->
<!-- Header Call menu Starts -->
<div class="o_top_visit_menu" id="o_top_visit_menu">
		<div class="o_top_visit_menu_wrap">
		</div>
	</div>
<!-- Header Call menu ends -->
</div>