<?php
/**
 * Template Name: Code Page
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
		.vc_row {
    
    overflow: visible !important;
}
    </style>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   
<script src="https://use.fontawesome.com/8d8fa1da46.js"></script>
<?php wp_head(); ?>
</head>

<body data-spy="scroll">
<section class="header_background">
      <div class="container">
<div style="float:left;" ><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/revature_logo_transparent.png" alt="Revature"/></a></div>
<div style="float:right;"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/code-logo.png" alt="Revature"/></a></div>
       
          </div>
        </nav>
	

      </div>
    </section>


<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
?>
	<section class="footer padding-50">
<div class="container">
        <div class="row no-margin border-bottom-line padding-bottom-35">
            <div class="foot-1 col-lg-12 col-md-12 col-sm-12">
                <div class="address social-icon-foot">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/revature/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/facebook-logo.svg" /></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/WeAreRevature" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/twitter.svg" /></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/revature" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/linkedin.svg" /></a>
                        </li>
                    </ul>
                </div>
            </div>
          
            
           
        <div class="row no-margin">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <nav class="under-footer">
                <ul>
                    <li><a href="/eeo-policy/">Equal Employment</a></li>
                    <li><a href="/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="/terms-and-conditions/">Terms & Service</a></li>
                    <li><a href="/revaturepro/#faq">FAQ</a></li>
                </ul>
            </nav>
           </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-top-20">
                <span class="copyright">
                    <i class="fa fa-copyright"></i><?php echo date('Y'); ?> All rights reserved.
                </span>
            </div>
        </div>
    </div>
	</div>
	</section>
<?php wp_footer(); ?>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<!-- jQuery (necessary for Fancybox for Leadership Section) --> 
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/fancybox-custom.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/source/jquery.fancybox.js?v=2.1.5"></script>
	 <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.flexslider.js"></script>	
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/js.cookie.js"></script> 	
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.sticky.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
    	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.autotab.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-filestyle.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/recruitment-1.0.js"></script>
			<?php if(is_page('witny')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/careerdetail.js"></script>
	<?php endif; ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
	
	 <?php get_template_part( 'template-parts/content-searchresult', get_post_format() ); ?>
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
 <?php // Create our arguments for getting our post
		 $args = [
		  'post_type'=>'rev_faq',
		 'posts_per_page' => -1
		];

// we get an array of posts objects
    $posts = get_posts($args);

// start our string

// then we create an option for each post
    foreach($posts as $key=>$post){
	// $str .= '<option>'.$post->post_title.'</option>';
	
    $str .= "'".$post->post_title."',";
  
}
    $str = trim($str, ',');

?>
   <script>
    
  $( function() {
    var availableTags = [
      <?php echo $str;?>
      
    ];
		
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
  
  <script>
 $(document).ready(function() {
 $(".owl-carousel").owlCarousel({
    margin: 1,
    loop: true,
    autoplay: true,
    autoplaySpeed:500,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });
});
</script>
</body>
	</html>