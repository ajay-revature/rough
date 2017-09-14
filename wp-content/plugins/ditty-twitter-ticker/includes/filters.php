<?php


/* --------------------------------------------------------- */
/* !Add the ticker type to the ticker - 2.0.0 */
/* --------------------------------------------------------- */

function mtphr_dnt_twitter_type( $types ) {
	$types['twitter'] = array(
		'button' => __('Twitter', 'ditty-twitter-ticker'),
		'metabox_id' => 'mtphr-dnt-twitter-metabox',
		'icon' => 'dashicons dashicons-twitter'
	);
	return $types;
}
add_filter( 'mtphr_dnt_types', 'mtphr_dnt_twitter_type' );



/* --------------------------------------------------------- */
/* !Add a new settings page - 1.2.3 */
/* --------------------------------------------------------- */

function mtphr_dnt_twitter_add_settings( $settings ) {
	$settings['twitter'] = 'mtphr_dnt_twitter_settings';
	return $settings;
}
add_filter( 'mtphr_dnt_settings', 'mtphr_dnt_twitter_add_settings' );



/* --------------------------------------------------------- */
/* !Modify the settings submit button  - 1.0.0 */
/* --------------------------------------------------------- */

function mtphr_dnt_twitter_settings_submit_button( $button ) {
	
	if( isset($_GET['tab']) && ($_GET['tab'] == 'twitter') ) {
	
		$settings = mtphr_dnt_twitter_settings();
		
		if( $settings['access_token'] == '' && ($settings['key'] == '' || $settings['secret'] == '') ) {
			return get_submit_button();
		} else {
			return '';
		}	
	}

	return $button;
}
//add_filter( 'mtphr_dnt_settings_submit_button', 'mtphr_dnt_twitter_settings_submit_button' );



/* --------------------------------------------------------- */
/* !Redirect the user to the Twitter tab - 2.1.5 */
/* --------------------------------------------------------- */

function mtphr_dnt_twitter_redirect() {
	
	if( is_admin() && isset($_GET['ditty_login_helper']) ) {
  	
  	$url = 'https://api.twitter.com/oauth/request_token';
		$callback = get_admin_url().'?ditty_twitter_authorize=true';
		
		// Remove any tildes from the callback
		$callback = preg_replace( '%~%', '', $callback );
		
		$args = array(
			'oauth_callback' => urlencode( $callback ),
		);
		$fields = array(
			'oauth_callback' => $callback
		);
		
		$twitter = mtphr_dnt_twitter_oauth( $url, $args, $fields, false );
		
		if( is_wp_error($twitter) ) {
		
	   $error_string = $twitter->get_error_message();
	   echo '<div id="message" class="error"><p>' . $error_string . '</p></div>';
	   
		} elseif( $twitter['response']['code'] == '200' ) {

			parse_str( $twitter['body'], $response );
			$location = 'https://api.twitter.com/oauth/authorize?oauth_token='.$response['oauth_token'];	
			wp_redirect( $location );
			exit;

		} else {
			echo '<div id="message" class="error"><p>'.sprintf(__('Error: %s', 'ditty-twitter-ticker'), $twitter['body']).'</p></div>';
		}
  }

  if( is_admin() && isset($_GET['ditty_twitter_authorize']) && isset($_GET['oauth_token']) && isset($_GET['oauth_verifier']) ) {
  	$location = get_admin_url().'edit.php?post_type=ditty_news_ticker&page=mtphr_dnt_settings&tab=twitter&oauth_token='.$_GET['oauth_token'].'&oauth_verifier='.$_GET['oauth_verifier'];
    wp_redirect( $location );
		exit;
  }
}
add_action( 'wp_loaded', 'mtphr_dnt_twitter_redirect' );



/* --------------------------------------------------------- */
/* !Reset the twitter options - 1.0.0 */
/* --------------------------------------------------------- */

/*
function mtphr_dnt_twitter_reset() {

  if( is_admin() && isset($_GET['page']) && isset($_GET['tab']) && isset($_GET['settings-updated']) ) {
  	if( $_GET['page'] == 'mtphr_dnt_settings' && $_GET['tab'] == 'twitter' && $_GET['settings-updated'] == 'reset' ) {
  		$settings = mtphr_dnt_twitter_settings();
  		$defaults = mtphr_dnt_twitter_settings_defaults();
  		$cache_time = $settings['cache_time'];
  		$defaults['cache_time'] = $cache_time;
	  	update_option( 'mtphr_dnt_twitter_settings', $defaults );
		}
  }
}
add_action( 'wp_loaded', 'mtphr_dnt_twitter_reset' );
*/


/* --------------------------------------------------------- */
/* !Reset the Twitter settings - 1.0.0 */
/* --------------------------------------------------------- */

function mtphr_dnt_twitter_reset() {

  if( is_admin() && isset($_GET['page']) && isset($_GET['tab']) && isset($_GET['settings-updated']) ) {
	  
	  if( $_GET['page'] == 'mtphr_dnt_settings' && $_GET['tab'] == 'twitter' ) {
	  	
	  	if( $_GET['settings-updated'] == 'reset-all' ) {
		  	mtphr_dnt_twitter_delete_transients();
		  	$settings = mtphr_dnt_twitter_settings();
		  	$defaults = mtphr_dnt_twitter_settings_defaults();
		  	$defaults['key'] = $settings['key'];
		  	$defaults['secret'] = $settings['secret'];
		  	$defaults['cache_time'] = $settings['cache_time'];
		  	
		  	update_option( 'mtphr_dnt_twitter_settings', $defaults );
			}
			
			if( $_GET['settings-updated'] == 'reset-app' ) {
		  	mtphr_dnt_twitter_delete_transients();
		  	$settings = mtphr_dnt_twitter_settings();
		  	$defaults = mtphr_dnt_twitter_settings_defaults();
		  	$defaults['cache_time'] = $settings['cache_time'];
		  	
		  	update_option( 'mtphr_dnt_twitter_settings', $defaults );
			}
			
		}
		
  }
}
add_action( 'wp_loaded', 'mtphr_dnt_twitter_reset' );



/* --------------------------------------------------------- */
/* !Delete all Twitter transients - 1.0.0 */
/* --------------------------------------------------------- */

function mtphr_dnt_twitter_reset_transients() {

  if( is_admin() && isset($_GET['page']) && isset($_GET['tab']) && isset($_GET['settings-updated']) ) {
  	if( $_GET['page'] == 'mtphr_dnt_settings' && $_GET['tab'] == 'twitter' && $_GET['settings-updated'] == 'reset-transients' ) {
	  	mtphr_dnt_twitter_delete_transients();
		}
  }
}
add_action( 'wp_loaded', 'mtphr_dnt_twitter_reset_transients' );
