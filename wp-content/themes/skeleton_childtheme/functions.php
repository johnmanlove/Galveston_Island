<?php
/**
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 *
 * Layout Hooks:
 *
 * skeleton_above_header // Opening header wrapper
 * skeleton_header // header tag and logo/header text
 * skeleton_header_extras // Additional content may be added to the header
 * skeleton_below_header // Closing header wrapper
 * skeleton_navbar // main menu wrapper
 * skeleton_before_content // Opening content wrapper
 * skeleton_after_content // Closing content wrapper
 * skeleton_before_sidebar // Opening sidebar wrapper
 * skeleton_after_sidebar // Closing sidebar wrapper
 * skeleton_footer // Footer
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, skeleton_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 2.0
 */

function register_my_menu() {
  register_nav_menu('tertiary-menu',__( 'Tertiary Menu' ));
}
add_action( 'init', 'register_my_menu' );


/*-----------------------------------------------------------------------------------*/
/* Navigation Hook (skeleton_navbar)
/*-----------------------------------------------------------------------------------*/


if ( !function_exists( 'skeleton_main_menu' ) ) {

	function skeleton_main_menu() {
		echo '<div id="navigation" class="row sixteen columns">';
		wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary'));
		wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'tertiary-menu'));
		echo '</div><!--/#navigation-->';
	}

	add_action('skeleton_navbar','skeleton_main_menu', 1);

}


 function my_custom_creditlink(){
 	$credits = '<div class="left">FRESH ROASTED | FAIR TRADE | ORGANIC</div><div class="right">©2015 Galveston Island Coffee | All Rights Reserved<br />Powered by <a href="http://www.johnmanlove.com" target="_blank">John Manlove Marketing & Communications</a></div><div class="clear"></div>';
 	return $credits;
 }
 add_filter('skeleton_author_credits','my_custom_creditlink');

 /*-----------------------------------------------------------------------------------*/
/* Before Footer
/*-----------------------------------------------------------------------------------*/

if (!function_exists('skeleton_before_footer'))  {
    function skeleton_before_footer() {
			$footerwidgets = is_active_sidebar('footer-widget-area-1') + is_active_sidebar('footer-widget-area-2') + is_active_sidebar('footer-widget-area-3') + is_active_sidebar('footer-widget-area-4');
			$class = ($footerwidgets == '0' ? 'noborder' : 'normal');
			echo('<div class="instagram-icon"><img src="/Galveston_Island/wp-content/uploads/2016/01/follow_ribbon.jpg" alt="Follow us on Instagram!" /></div>');
			echo do_shortcode( '[instagram-feed]' );
			echo '<div class="clear"></div><div id="footer" class="'.$class.' sixteen columns">';
    }
    add_action('skeleton_footer', 'skeleton_before_footer',1);
}


// For completely overriding the theme options and removal of inline styles
// You must dequeue custom.css and redeclare these styles in your child theme
//
// add_action( 'wp_enqueue_scripts', 'remove_theme_options', 11);
// function remove_theme_options() {
//     wp_dequeue_style( 'skeleton-custom' );
// }


?>