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

                           <a href="index.html" class="main-head">ABOUT REVATURE</a>

                        </li>

						<!--Phase II-->

						<!--

                        <li class="hidden-xs">

                            <a href="" class="sub-head">News</a>

                        </li>

						-->

                    </ul>

					<!--Phase II-->

					<!--

                    <ul>

                         <li>

                           <a href="revaturepro.html" class="main-head">REVATUREPRO</a>

                        </li>

                        <li class="hidden-xs">

                            <a href="" class="sub-head">Online</a>

                        </li>

                        <li class="hidden-xs">

                            <a href="" class="sub-head">Bootcamp</a>

                        </li>

                    </ul>

					-->

                </div>

            </div>

            <div class="foot-3 col-lg-3 col-md-3 col-sm-12">

                <div class="footer-nav">

				                    <ul>

                         <li>

                           <a href="revaturepro.html" class="main-head">REVATUREPRO</a>

                        </li>

                        <li class="hidden-xs">

                            <a href="revatureonline.html" class="sub-head">Online</a>

                        </li>

                        <li class="hidden-xs">

                            <a href="bootcamp.html" class="sub-head">Bootcamp</a>

                        </li>

                    </ul>

                    <ul>

                        <li>

                           <a href="academicpartners.html" class="main-head">ACADEMIC PARTNERS</a>

                        </li>

                        

                    </ul>

					<!--Phase II-->

					<!--

                    <ul>

                         <li>

                           <a href="" class="main-head">SOLUTIONS</a>

                        </li>

                        <li class="hidden-xs">

                            <a href="" class="sub-head">Workforce Development</a>

                        </li>

                        <li class="hidden-xs">

                            <a href="" class="sub-head">Technology Practices</a>

                        </li>

                    </ul>

					-->

					<!--Phase II-->

					

                    <ul>

                        <li>

                           <a href="" class="main-head">INSIGHTS</a>

                        </li>

                    </ul>

					

                </div>

            </div>

            <div class="foot-4 col-lg-2 col-md-2 col-sm-12">

                  <div class="footer-nav">

                    <ul>

                        <li>

                           <a href="contactus.html" class="main-head">CONTACT US</a>

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

                            <span href="" class="sub-head">11730 Plaza America Dr.<br/>Suite 205 <br/> Reston, VA 20190.

                             </span>

                        </li>

                         <li class="margin-top-5">

                            <a href="contactus.html" class="sub-head" style="color:#e9e9e9;">

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

                    <li><a href="eeopolicy.html">Equal Employment</a></li>

                    <li><a href="privacypolicy.html">Privacy Policy</a></li>

                    <li><a href="terms.html">Terms & Service</a></li>

                    <li><a href="revaturepro.html#faq">FAQ</a></li>

                </ul>

            </nav>

           </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-top-20">

                <span class="copyright">

                    <i class="fa fa-copyright"></i>2016 All rights reserved.

                </span>

            </div>

        </div>

    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
    	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script> 
	<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js"></script> 
	<?php if (is_page('index')): ?>
    		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/index.js"></script> 
	<?php endif; ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.autotab.min.js"></script>
	<?php if(is_page_template('blog')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/blog.js"></script>
	<?php endif; ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.sticky.js"></script>
	<?php if(is_page('revaturepro')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
	<?php endif; ?>
	<?php if(is_page('bootcamp')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootcamp.js"></script>
	<?php endif; ?>
	<?php if(is_page('bootcamp')||is_page('online')): ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stepsreveal.js"></script>
	<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>