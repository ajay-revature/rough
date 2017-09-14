<?php
get_header(); ?>

<style type="text/css">

.nav .active-blog a {
    border-bottom: 2px solid #f26925;
}
.rev-menu li a {
    color: #474c55;
    font-size: 14px;
    text-decoration: none;
    font-family: 'futura-pt';
    padding: 0;
    line-height: 30px;
    background-color: initial !important;
    font-weight: bolder;
}
.text-left-btn
{
float:left;
}
</style>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-filestyle.min.js"></script>
	 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/careerdetail.js"></script>
	<script>
	$(document).ready(function() {
		
	$('#menu-item-306').addClass('active')
	});
	</script>
	<section class="career_detail_section padding-75">
         
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
                <h3 class="margin-bottom-15">Work with us.</h3>
                                                  
               </div>
         
     </div>

</section>
<section class='return'>
<div class="container">
         <div class="row no-margin">
		 <div class="col-lg-8 col-md-8 col-sm-12 blog-bottom-border">
                <a href="../../career"><h3 class="margin-bottom-25"><i class="fa fa-angle-left" aria-hidden="true"></i>RETURN TO REVATURE CAREERS</h3></a>
		 </div>
		 </div>
		 </div>
</section>
<?php	
			if(function_exists('jobs_single_post')){
				jobs_single_post($postid);
       
			}
	
?>


   

       


                
                 <div class="clear"></div>

                <div class="post-arrow-container">

                    <div class="">
                        
                        <div class="text-left-btn">
                          
						  <?php
							$prev_post = get_previous_post();
							if (!empty( $prev_post )): ?>
                          <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
                            <span class=""><img class="post-prev-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/post-left-arrow.svg" /></span><span class="post-arrow-txt">Previous</span></a>
                            <?php endif ?>
                        </div>
                        
							<div class="text-right">
                            <?php
							$next_post = get_next_post();
							if (!empty( $next_post )): ?>
                            <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                            <span class="post-arrow-txt">Next</span>
                            <span class=""><img class="post-prev-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/post-right-arrow.svg" /></span>
                          </a>   
                          	<?php endif; ?>
                        	</div>
                        
                        
                       		
                        

                    </div>

                    <div class="">



                    </div>

                </div>
  

         				<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {

 $first_tag = $tags[0]->term_id;
 
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>5,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);?>
<section class="related-bgcolor">
<div class="container related-container">
         <div class="row margin-bottom-35">
               <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="margin-bottom-15">Related Posts</h2>
                
               </div>
         </div>
		 
<div class="row">
              
			  <?php
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post();
 
 ?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-left related-post-BR">
                  <h4 class="related-post-head"><?php substr( the_title(),0,25); ?></h4>
                  <p class="related-post-sub"><b><?php the_author(); ?> </b><span class="">|</span><b> <?php the_time('m.d.y') ?></b></p>
                  <p class="related-post-content">
                   <?php the_excerpt();?>
                  </p>
                  <a  href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="Orange-read-btn">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </div>

<?php
endwhile;
}
wp_reset_query();
}
?></div>

         </div>
		 </section>
<section class="quickcont-bg">

	<div class="row no-margin">

		<div class="col-lg-12 col-md-12 col-sm-12 no-padding">

			<div>

               <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12">

                <h2 class="margin-bottom-35">Ready to Advance?</h2>

                 <a href="/contact-us" class="white-read-btn">CONTACT US<i class="fa fa-angle-right" aria-hidden="true"></i></a>

                    </div>

               </div>

            </div>

		</div>

	</div>

</section>

<?php get_footer(); ?>
