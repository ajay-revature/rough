<?php
include('../../wp-load.php')


$results = $wpdb->get_results( "SELECT * FROM $wpdb->posts WHERE `post_type`='post' LIMIT 4" );
?>