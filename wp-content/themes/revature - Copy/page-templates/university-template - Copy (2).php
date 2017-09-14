<?php
/**
 * Template Name: University
 */

 ?>
 <!DOCTYPE html>
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
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/imagehover.min.css" rel="stylesheet">
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
    
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.flexslider.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/flexslider.css?v=1.0.7" />

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/> 
    <style type="text/css">
    .wf-loading{
    visibility:hidden;
    }
    </style>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   
<script src="https://use.fontawesome.com/8d8fa1da46.js"></script>
<?php wp_head(); ?>
</head>

<body data-spy="scroll">


<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
?>
<?php
get_footer('landing_page');

