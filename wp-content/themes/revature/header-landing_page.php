<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta name="theme-color" content="#f26925">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/carousel.css" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/favicon_192.png"/>
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/favicon_192.png"/>
	<!-- Add fancyBox main JS and CSS files -->

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
   <script src="https://use.typekit.net/pvo4jdm.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    
      
    <style type="text/css">
    .wf-loading{
    visibility:hidden;
    }
    </style>
<script src="https://use.fontawesome.com/8d8fa1da46.js"></script>
<?php wp_head(); ?>
</head>

<body data-spy="scroll">
<div class="navbar-wrapper hero-bm">
      <div class="container">

        <nav class="navbar navbar-revature navbar-static-top navbar-bg">
          <div class="container">
            <div class="navbar-header">
              
             <div class="logo"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo.png" alt="Revature"/></a></div>
			     </div>
       
          </div>
        </nav>

      </div>
    </div>