<?php
/**
 * Template Name: School Template
 */

?>

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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="icon" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/favicon_192.png"/>
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/favicon_192.png"/>
    <meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri(); ?>/favicon_150.png"/>  
    
   <script src="https://use.typekit.net/pvo4jdm.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    
       
    <meta content="We’re a leading-edge technology solutions firm with an unparalleled talent development platform that empowers people and companies to move forward, faster." name="description">
    <meta name="keywords" content="training program, software development, find developers, hire software developer" />
    <style type="text/css">
    .wf-loading{
    visibility:hidden;
    }
    </style>
    <script src="https://use.fontawesome.com/8d8fa1da46.js"></script>
<?php wp_head(); ?>
</head>

<body>

<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
    	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.autotab.min.js"></script> 
<?php if(!is_page('vetswhocode')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/recruitment.js"></script>
<?php endif; ?>
<?php if(is_page('vetswhocode')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/veterans.js"></script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>