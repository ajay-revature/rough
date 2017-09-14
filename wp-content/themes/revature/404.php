<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
  <div class="error-background">
        <div class="row no-margin contact-hero-content">
            <div class="col-lg-12 col-md-12 col-sm-12 margin-top-50">
                <h2 class="margin-bottom-15">Page not found</h2>
                
            </div>
        </div>
    </div>
<section>
     <div class="container">
         <div class="row">
		  <div class="col-lg-12 col-md-12 col-sm-12">
		  <div class="error-img text-center">
		  <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/404.png">
		  </div>
		  </div>
		  <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding  margin-bottom-50">
		  <div class="error-img text-center margin-bottom-50">
		  <h3 class="margin-bottom-15">Let's Get You Moving Ahead, Again.</h3>
                <p class="margin-bottom-15 error-cont">It seems the page you're looking for has been moved, removed, renamed or is non-existent. But no need to worry-you have three ways to get the momentum back.</p>
                   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error-read-btn margin-top-25 margin-right-15">RETURN HOME<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <a class="error-read-btn margin-top-25 margin-right-15" href="/contact-us">CONTACT US<i class="fa fa-angle-right" aria-hidden="true"></i></a>
		  </div>
		  </div>
	 </div>
</div>
</section>
<?php get_footer(); ?>
