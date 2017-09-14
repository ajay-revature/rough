<?php
// Get the global data
global $mtphr_dnt_meta_data, $mtphr_dnt_twitter_item;

// Extract the meta
extract( $mtphr_dnt_meta_data );

// Set variables
$id = isset($mtphr_dnt_twitter_item['id_str']) ? $mtphr_dnt_twitter_item['id_str'] : $mtphr_dnt_twitter_item['id'];
$tweet_link = 'http://twitter.com/'.$mtphr_dnt_twitter_item['user']['screen_name'].'/status/'.$id;
$direct_link = (isset($_mtphr_dnt_twitter_direct_link) && $_mtphr_dnt_twitter_direct_link != '') ? true : false;

echo '<span style="display:'.$_mtphr_dnt_twitter_image_display.'" class="mtphr-dnt-twitter-image">';
	if( $_mtphr_dnt_twitter_image_link && !$direct_link ) {
		echo '<a href="'.$tweet_link.'" target="_blank">';
	}
	echo mtphr_dnt_twitter_image( $mtphr_dnt_twitter_item, $mtphr_dnt_meta_data );
	if( $_mtphr_dnt_twitter_image_link && !$direct_link ) {
		echo '</a>';
	}
echo '</span>';