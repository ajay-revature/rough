<?php
/*
Plugin Name: Ditty Twitter Ticker
Plugin URI: https://wwww.metaphorcreations.com/
Description: Add a twitter ticker type to your <a href="http://wordpress.org/extend/plugins/ditty-news-ticker/">Ditty News Tickers</a>. Display twitter feeds in a ticker, rotator, or list.
Text Domain: ditty-twitter-ticker
Domain Path: languages
Version: 2.1.9
Author: Metaphor Creations
Author URI: http://www.metaphorcreations.com
Contributors: metaphorcreations
License: GPL2
*/

/*
Copyright 2012 Metaphor Creations  (email : joe@metaphorcreations.com)

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



define( 'MTPHR_DNT_TWITTER_VERSION', '2.1.9' );
define( 'MTPHR_DNT_TWITTER_DIR', trailingslashit(plugin_dir_path(__FILE__)) );
define( 'MTPHR_DNT_TWITTER_STORE_URL', 'https://www.metaphorcreations.com' );
define( 'MTPHR_DNT_TWITTER_ITEM_NAME', 'Ditty Twitter Ticker' );


	
/* --------------------------------------------------------- */
/* !Initialize the plugin - 2.1.0 */
/* --------------------------------------------------------- */

function mtphr_dnt_twitter_init() {
	
	require_once( MTPHR_DNT_TWITTER_DIR.'includes/scripts.php' );
	require_once( MTPHR_DNT_TWITTER_DIR.'includes/filters.php' );
	require_once( MTPHR_DNT_TWITTER_DIR.'includes/helpers.php' );
	require_once( MTPHR_DNT_TWITTER_DIR.'includes/functions.php' );
	require_once( MTPHR_DNT_TWITTER_DIR.'includes/settings.php' );
	require_once( MTPHR_DNT_TWITTER_DIR.'includes/templates.php' );
	require_once( MTPHR_DNT_TWITTER_DIR.'eddsl/eddsl.php' );
	
	if( is_admin() ) {
		require_once( MTPHR_DNT_TWITTER_DIR.'includes/admin/scripts.php' );
		require_once( MTPHR_DNT_TWITTER_DIR.'includes/admin/helpers.php' );
		require_once( MTPHR_DNT_TWITTER_DIR.'includes/admin/meta-boxes.php' );
		require_once( MTPHR_DNT_TWITTER_DIR.'includes/admin/notices.php' );
	}
}



/* --------------------------------------------------------- */
/* !Setup localization - 1.1.7 */
/* --------------------------------------------------------- */

function mtphr_dnt_twitter_localization() {
	load_plugin_textdomain( 'ditty-twitter-ticker', false, 'ditty-twitter-ticker/languages/' );
}
add_action( 'plugins_loaded', 'mtphr_dnt_twitter_localization' );



/* --------------------------------------------------------- */
/* !Ensure that Ditty News Ticker is active - 2.1.0 */
/* --------------------------------------------------------- */

function mtphr_dnt_twitter_check_base_plugin() {
	
	if( !function_exists('is_plugin_active_for_network') ) {
		require_once( ABSPATH.'/wp-admin/includes/plugin.php' );
	}
	
	// Initialize Ditty News Ticker
	if( is_plugin_active('ditty-news-ticker/ditty-news-ticker.php') || is_plugin_active_for_network('ditty-news-ticker/ditty-news-ticker.php') ) {
		mtphr_dnt_twitter_init();	
		
	// Activate Ditty News Ticker
	} elseif( file_exists(trailingslashit(WP_PLUGIN_DIR).'ditty-news-ticker/ditty-news-ticker.php') ) {
		$result = activate_plugin( 'ditty-news-ticker/ditty-news-ticker.php' );
		
	// Tell users to install Ditty News Ticker
	} else {
		global $mtphr_dnt_active_extensions;
		$mtphr_dnt_active_extensions[] = __('Ditty Twitter Ticker', 'ditty-twitter-ticker');	
	}
}
add_action( 'init', 'mtphr_dnt_twitter_check_base_plugin' );



/* --------------------------------------------------------- */
/* !Add an admin notice - 2.1.0 */
/* --------------------------------------------------------- */

function mtphr_dnt_twitter_admin_notice(){	
	
	global $mtphr_dnt_active_extensions;
	
	if( is_array($mtphr_dnt_active_extensions) && count($mtphr_dnt_active_extensions) > 0 ) {
		
		$url = get_bloginfo('wpurl').'/wp-admin/plugin-install.php?tab=plugin-information&plugin=ditty-news-ticker&TB_iframe=true&width=640&height=500';
    echo '<div class="error">';

    	echo '<p>'.sprintf(__('<a class="thickbox" href="%s"><strong>Ditty News Ticker</strong></a> must be installed and activated to use the following plugins:', 'ditty-posts-ticker'), $url).'</p>';

	    echo '<ul style="list-style:inside;">';
			foreach( $mtphr_dnt_active_extensions as $i=>$extension ) {
				echo '<li>'.$extension.'</li>';
			}
			echo '</ul>';

			echo '<p>'.sprintf(__('Click <a class="thickbox" href="%s"><strong>here</strong></a> to install Ditty News Ticker.', 'ditty-posts-ticker'), $url).'</p>';
			
    echo '</div>';
    
    // Clear the variables
    $mtphr_dnt_active_extensions = false;
  }
}
add_action('admin_notices', 'mtphr_dnt_twitter_admin_notice');