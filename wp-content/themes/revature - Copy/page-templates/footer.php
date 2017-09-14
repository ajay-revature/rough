<section class="footer padding-50">
<div class="container">

        <div class="row no-margin border-bottom-line padding-bottom-35">

            <div class="foot-1 col-lg-4 col-md-4 col-sm-12">

              <span class="s-title"> FOLLOW US</span>

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

            <div class="foot-2 col-lg-3 col-md-3 col-sm-12">

                <div class="footer-nav">

                    <ul>


                        <li>

                           <a href="/talent-creation" class="main-head">HIRE TALENT</a>

                        </li> 
</ul>
<ul>

                        <li class="hidden-xs">

                            <a href="/join-our-team" class="main-head">GET HIRED</a>

                        </li>
</ul>

<ul>

                        <li class="hidden-xs">

                            <a href="/learn-to-code" class="main-head">LEARN TO CODE</a>

                        </li>
</ul>
<ul>

                        <li>

                           <a href="/universities" class="main-head">UNIVERSITIES</a>

                        </li>
                        
                    </ul>

                </div>

            </div>

            <div class="foot-3 col-lg-3 col-md-3 col-sm-12">

                <div class="footer-nav">
<ul>

                        <li>

                           <a href="/our-story" class="main-head">OUR STORY</a>

                        </li>
                        <li class="hidden-xs">

                            <a href="/our-story/#leadership" class="sub-head">Leadership</a>

                        </li>
                        <li class="hidden-xs">

                            <a href="/careers" class="sub-head">Careers</a>

                        </li>  

                    </ul>

                    <ul>

                        <li>

                           <a href="/insights" class="main-head">INSIGHTS</a>

                        </li>

                    </ul>                    
                </div>

            </div>

            <div class="foot-4 col-lg-2 col-md-2 col-sm-12">

                  <div class="footer-nav">

                    <ul>

                        <li>

                           <a href="/contact-us" class="main-head">CONTACT US</a>

                        </li>

                        <li>

                           <a href="mailto:info@revature.com" class="sub-head">info@revature.com</a>

                        </li>

                        <li class="margin-top-5">

                            <a href="tel:703 570 8181" class="sub-head">

                            <span class="small padding-right-5">P</span>703 570 8181</a>

                        </li>

                         <li class="">

                            <a href="tel:703 995 4500" class="sub-head">

                            <span class="small padding-right-5">F</span>703 995 4500</a>

                        </li>

                        <li>

                           <span href="" class="main-head-contact">CORPORATE HEADQUARTERS</span>

                        </li>



                         <li>

                            <span href="" class="sub-head">11730 Plaza America Dr.<br/>2nd Floor <br/> Reston, VA 20190.

                             </span>

                        </li>

                         <li class="margin-top-5">

                            <a href="/contact-us" class="sub-head" style="color:#e9e9e9;">

                            All Locations <i class="fa fa-angle-right"></i></a>

                        </li>

                    </ul>

                  </div>

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

                    <i class="fa fa-copyright"></i> <?php echo date('Y'); ?>  All rights reserved.

                </span>

            </div>

        </div>

    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/js.cookie.js"></script> 
<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js" defer></script> 
	
    	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script> 
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
	
	<?php if (is_page('index')): ?>
    		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/index.js"></script> 
	<?php endif; ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.autotab.min.js"></script>
	<?php if(is_page_template('blog')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/blog.js"></script>
	<?php endif; ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.sticky.js"></script>
		<?php if(is_page('join-our-team')): ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-filestyle.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stepsreveal.js"></script>
	 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/revaturepro.js"></script>
	 <?php endif; ?>

		<?php if(is_page('revpro-sign-form-test')): ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-filestyle.min.js"></script>
	 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/revpro_signup.js"></script>
	 <?php endif; ?>

<?php if(is_page('learn-to-code')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stepsreveal.js"></script>
	<?php endif; ?>
 <?php if(is_page('talent-creation')): ?>
     <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/corporate-partners.js"></script>
	 <?php endif; ?>
	<?php if(is_page('universities')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stepsreveal.js"></script>
	<?php endif; ?>
<?php if(is_page('our-story')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/index.js"></script>
	<?php endif; ?>
	<!-- jQuery (necessary for Fancybox for Leadership Section) --> 
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/fancybox-custom.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/source/jquery.fancybox.js?v=2.1.5"></script>
<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<?php if(is_page('contact-us')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/contact.js"></script>
	<?php endif; ?>
	
 <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.flexslider.js"></script>
 <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
  	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script type="text/javascript">
    var $jq = jQuery.noConflict();
	$jq(document).ready(function(){
     $jq('.autoplay').slick({
  slidesToShow: 8,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
   arrows: false,
variableWidth:true,
adaptiveHeight:true,
pauseOnHover:false,
pauseOnFocus:false,  
responsive: [
    {
      breakpoint: 1224,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
    
    });
  </script>	
<?php wp_footer(); ?>
</body>
</html>