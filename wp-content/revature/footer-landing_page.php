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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js" defer></script> 
	
    	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-filestyle.min.js"></script> 

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
	
	<?php if (is_page('index')): ?>
    		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/index.js"></script> 
	<?php endif; ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.autotab.min.js"></script>
	<?php if(is_page_template('blog')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/blog.js"></script>
	<?php endif; ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.sticky.js"></script>
		<?php if(is_page('coding-bootcamp')): ?>
     <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootcamp.js"></script>
	 <?php endif; ?>

<?php if(is_page('online')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stepsreveal.js"></script>
	<?php endif; ?>
 <?php if(is_page('corporate-partners')): ?>
     <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/corporate-partners.js"></script>
	 <?php endif; ?>
	<?php if(is_page('academic-partners')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stepsreveal.js"></script>
	<?php endif; ?>
	<?php if(is_page('revaturepro')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stepsreveal.js"></script>
	 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/revaturepro.js"></script>
	<?php endif; ?>
<?php if(is_page('about-revature')): ?>
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
 <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/request.js"></script>
	<?php if(is_page('contact-us')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/contact.js"></script>
	<?php endif; ?>
	
	
<script type="text/javascript">		
		$(document).ready(function() {		
					
			$(".navbar-toggle").click(function(){		
				  $('.login-revature').hide();		
    		
});		
					
		});		
			</script>	
				<script>		
	$(window).resize(function() {		
			
     $('.mobile_user_icon').hide();		
    var width = $(document).width();		
    if (width < 767) {		
					
      $('.mobile_user_icon').show();		
    }		
});		
	</script>
	<script>		
			
	if ($(window).width() < 767) {		
   $('.mobile_user_icon').show();		
}		
else {		
   $('.mobile_user_icon').hide();		
}		
	</script>
	<script type="text/javascript">
	
		$(document).ready(function(){
			$('#myCarousel,#myCarousel-2').carousel({
			interval: false
			});			
			
		});

	</script>
<?php wp_footer(); ?>
</body>
</html>