<?php
/*
Plugin Name: Preloader
Plugin URI: http://j.mp/1QRDUN0
Description: Add preloader to your website easily, responsive and retina, full customize, compatible with all major browsers.
Version: 1.0.4
Author: Alobaidi
Author URI: http://j.mp/1HVBgA6
License: GPLv2 or later
*/

/*  Copyright 2015 Alobaidi (email: wp-plugins@outlook.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


// Add plugin meta links
function WPTime_preloader_plugin_row_meta( $links, $file ) {

	if ( strpos( $file, 'preloader.php' ) !== false ) {
		
		$new_links = array(
						'<a href="http://j.mp/1QRDUN0" target="_blank">Explanation of Use</a>',
						'<a href="https://profiles.wordpress.org/alobaidi#content-plugins" target="_blank">More Plugins</a>',
						'<a href="http://j.mp/ET_WPTime_ref_pl" target="_blank">Elegant Themes</a>',
					);
		
		$links = array_merge( $links, $new_links );
		
	}
	
	return $links;
	
}
add_filter( 'plugin_row_meta', 'WPTime_preloader_plugin_row_meta', 10, 2 );


// Add settings page link in before activate/deactivate links.
function WPTime_preloader_plugin_action_links( $actions, $plugin_file ){
	
	static $plugin;

	if ( !isset($plugin) ){
		$plugin = plugin_basename(__FILE__);
	}
		
	if ($plugin == $plugin_file) {
		
		if ( is_ssl() ) {
			$settings_link = '<a href="'.admin_url( 'plugins.php?page=WPTime_preloader_settings', 'https' ).'">Settings</a>';
		}else{
			$settings_link = '<a href="'.admin_url( 'plugins.php?page=WPTime_preloader_settings', 'http' ).'">Settings</a>';
		}
		
		$settings = array($settings_link);
		
		$actions = array_merge($settings, $actions);
			
	}
	
	return $actions;
	
}
add_filter( 'plugin_action_links', 'WPTime_preloader_plugin_action_links', 10, 5 );


// Set default setting of display preloader (default is full website)
if( !get_option('wptpreloader_default_screen') ){
	update_option('wptpreloader_screen', 'full');
	update_option('wptpreloader_default_screen', 'full');
}


// Include Settings page
include( plugin_dir_path(__FILE__).'/settings.php' );


// Add Preloader HTML Element
function WPTime_plugin_preloader_html_element(){

	if(
		(get_option( 'wptpreloader_screen' ) == 'full'
		or get_option( 'wptpreloader_screen' ) == 'homepage' and is_home()
		or get_option( 'wptpreloader_screen' ) == 'frontpage' and is_front_page()
		or get_option( 'wptpreloader_screen' ) == 'posts' and is_single()
		or get_option( 'wptpreloader_screen' ) == 'pages' and is_page()
		or get_option( 'wptpreloader_screen' ) == 'cats' and is_category()
		or get_option( 'wptpreloader_screen' ) == 'tags' and is_tag()
		or get_option( 'wptpreloader_screen' ) == 'attachment' and is_attachment()
		or get_option( 'wptpreloader_screen' ) == '404error' and is_404())
		&& wpmd_is_notdevice()
	){
		?>
    		<div id="wptime-plugin-preloader"></div>
    	<?php
	}

}
add_action('wp_head', 'WPTime_plugin_preloader_html_element');


// Include JavaScript
function WPTime_plugin_preloader_script(){	

	if(
		get_option( 'wptpreloader_screen' ) == 'full'
		or get_option( 'wptpreloader_screen' ) == 'homepage' and is_home()
		or get_option( 'wptpreloader_screen' ) == 'frontpage' and is_front_page()
		or get_option( 'wptpreloader_screen' ) == 'posts' and is_single()
		or get_option( 'wptpreloader_screen' ) == 'pages' and is_page()
		or get_option( 'wptpreloader_screen' ) == 'cats' and is_category()
		or get_option( 'wptpreloader_screen' ) == 'tags' and is_tag()
		or get_option( 'wptpreloader_screen' ) == 'attachment' and is_attachment()
		or get_option( 'wptpreloader_screen' ) == '404error' and is_404()
	){

		wp_enqueue_script( 'wptime-plugin-preloader-script', plugins_url( '/js/preloader-script.js', __FILE__ ), array('jquery'), null, false);

	}

}
add_action('wp_enqueue_scripts', 'WPTime_plugin_preloader_script');


// Add CSS
function WPTime_plugin_preloader_css(){
	
	if( get_option('wptpreloader_bg_color') ){
		$background_color = get_option('wptpreloader_bg_color');
	}else{
		$background_color = '#FFFFFF';
	}
		
	if( get_option('wptpreloader_image') ){
		$preloader_image = get_option('wptpreloader_image');
	}else{
		$preloader_image = plugins_url( '/images/preloader.GIF', __FILE__ );
	}
	
	if(
		get_option( 'wptpreloader_screen' ) == 'full'
		or get_option( 'wptpreloader_screen' ) == 'homepage' and is_home()
		or get_option( 'wptpreloader_screen' ) == 'frontpage' and is_front_page()
		or get_option( 'wptpreloader_screen' ) == 'posts' and is_single()
		or get_option( 'wptpreloader_screen' ) == 'pages' and is_page()
		or get_option( 'wptpreloader_screen' ) == 'cats' and is_category()
		or get_option( 'wptpreloader_screen' ) == 'tags' and is_tag()
		or get_option( 'wptpreloader_screen' ) == 'attachment' and is_attachment()
		or get_option( 'wptpreloader_screen' ) == '404error' and is_404()
	){
		
	?>
    	<style type="text/css">
			#wptime-plugin-preloader{
				position: fixed;
				top: 0;
			 	left: 0;
			 	right: 0;
			 	bottom: 0;
				background:url(<?php echo $preloader_image; ?>) no-repeat <?php echo $background_color; ?> 50%;
				-moz-background-size:64px 64px;
				-o-background-size:64px 64px;
				-webkit-background-size:64px 64px;
				background-size:64px 64px;
				z-index: 99998;
				width:100%;
				height:100%;
			}
		</style>
    <?php
	
	}
	
}
add_action('wp_head', 'WPTime_plugin_preloader_css');

?>