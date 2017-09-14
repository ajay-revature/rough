<?php
/**
 * Template Name: Career
 */

get_header(); ?>
 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/filter-career.js"></script>

<div class="careers_hero">
	        <div class="row no-margin contact-hero-content">
            <div class="col-lg-12 col-md-12 col-sm-12 margin-top-50 margin-bottom-50">
                <h1>Careers at Revature</h1>
                <p class="">
When you're on the leading edge of talent development and business technologies, things happen fast. See some of Revature's latest thinking that's helping to drive the industry forward.				</p>
            </div>
		</div>
		</div>
		<?php	
			if(function_exists('career_search_filter')){
				career_search_filter($postid);
       
			}
	
?>
  <?php
  if (isset($_GET["submit"])) {
   $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];



  $s=$_GET['Location'];
  $jobs_country= explode("/",$s);
  $jobs_country[0];
    $jobs_country[1];
 $sS=$_GET['Department'];

     

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
	     'posts_per_page' => 3,
	     'paged' => $paged,
	     'meta_key'		=> 'jobs_work_location', 
	     'meta_value'		=> $s,
		 'meta_key'		=> 'jobs_department', 
	     'meta_value'		=> $sS,
	     'meta_compare'	=> 'LIKE',
		 'post_type'=> 'jobs',
		'post_status' => 'publish'
	);
    // The Query
$the_query = new WP_Query( $args );

if ($the_query->have_posts() ) {
	
       
	while($the_query->have_posts()) : 
	   $the_query->the_post();	
	
	?>
	 	
	  <section class="blog-articals" id="benefits">

      <div class="container">

         <div class="row no-margin">

  
   <div class="col-lg-12 col-md-12 col-sm-12 blog-bottom-border">

                <h3 class="margin-bottom-25"><?php echo $post->post_title; ?></h3>

                 <div class=""><b><?php echo $sS; ?></b><span class="">|</span><b><?php echo $jobs_country[0]; ?>,<?php echo $jobs_country[1] ?></b></div>

              <?php if(($post->post_content)!="")
				{
					?>
				  <div class="blog-post-single">
				 <p class="career-paragraph">
			         <?php  echo get_the_excerpt();	?>
					  </p>
					 </div>
                
				<?php
				     }
				  else
				   {
				   ?>
				<p>We are looking for a passionate <?php echo $post->post_title; ?> to join our team. Don't miss this exciting opportunity!&nbsp; Start the Ultimate Tech Career with a job as an <?php echo $post->post_title; ?> at Revature, where you will learn the latest technologies and work at some of the most respected organizations in <?php echo $jobs_work_location; ?>, <?php echo $jobs_country; ?> </p>
<?php 
				   }
				?>
                   <a href="<?php echo  get_permalink($post->ID) ?>" class="orange-invert-btn margin-top-25 margin-bottom-25">READ MORE<i class="fa fa-angle-right" aria-hidden="true"></i></a>

               </div>

   </div> <!-- end blog posts -->	
											
    	
  </div>
  </div>
  </section>
												
		 <?php endwhile; ?>		
	  </div>
	  </div>
	  
	  <?php if (function_exists("pagination")) {
		 
		pagination($the_query->max_num_pages);
	} ?>
  </section>
       <?php 
    }
  }
else
{
	

	
			if(function_exists('jobs_all_posts')){
				jobs_all_posts();
			}
	
}
	?>

  
<?php if (function_exists("pagination")) {
    pagination($custom_query->max_num_pages);
} ?>

		<?php get_footer(); ?>