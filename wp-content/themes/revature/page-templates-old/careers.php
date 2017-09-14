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
 $s1= $jobs_country[0];
 $jobs_country[1];
 $sS=$_GET['Department'];
 
 if($s1!="" &&  $sS!="")
 {
	 $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	   $args = array(
	  'posts_per_page' => 3,
	   'paged' => $paged,
	  'post_type' => 'jobs',
	  'post_status' => 'publish',
      'orderby'     => 'title', 
      'order'       => 'ASC',    
      'meta_query' => array(
      'relation' => 'AND',
        array(
            'key' => 'jobs_work_location',
            'value' => $s1,
            'compare' => '='
        ),

      array(
            'key' => 'jobs_department',
            'value' => $sS,
            'compare' => '='
        )
    )
);

	
	$the_query = new WP_Query( $args );
	//echo"<pre>";
	//var_dump($the_query);
 //echo"</pre>";
 }
 
 else if($s1!="" && $sS =="")
{
     
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
	 'posts_per_page' => 3,
	'paged' => $paged,
    'post_type' => 'jobs',
    'meta_key'		=> 'jobs_work_location', 
    'meta_value'		=> $s1,
    'post_status' => 'publish',
    'orderby'     => 'title', 
    'order'       => 'ASC', 
    'meta_query' => array(
      'relation' => 'AND',
       
      array(
            'key' => 'meta_checkbox',
            'value' => 'yes',
            'compare' => '='
        )
    )	
);
$the_query = new WP_Query( $args );
echo"<pre>";
var_dump($the_query);
echo"</pre>";
}
else if($s1=="" && $sS !=""){
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
	 'posts_per_page' => 3,
	'paged' => $paged,
    'post_type' => 'jobs',
    'meta_key'		=> 'jobs_department', 
    'meta_value'		=>$sS,
    'post_status' => 'publish',
    'orderby'     => 'title', 
    'order'       => 'ASC' ,  
  'meta_query' => array(
      'relation' => 'AND',
       
      array(
            'key' => 'meta_checkbox',
            'value' => 'yes',
            'compare' => '='
        )
    )	
);
$the_query = new WP_Query( $args );
echo"<pre>";
var_dump($the_query);
echo"</pre>";
}
else
{
	echo "<p style='padding:12px 0px 12px 0px;font-size:14px;'><b><center>No selection occur.Please Select  atleast one drop down.</center> </p></span>";
}
    // The Query
//echo"<pre>";
///	var_dump($the_query);
//echo"</pre>";
$the_query = new WP_Query( $args );

if ($the_query->have_posts() ) {
	//var_dump($the_query->have_posts());
       
	while($the_query->have_posts()) : 
		//var_dump($the_query->the_post());
	   $the_query->the_post();	
	
	?>
	 	
	  <section class="blog-articals" id="benefits">

      <div class="container">

         <div class="row no-margin">

  
   <div class="col-lg-12 col-md-12 col-sm-12 blog-bottom-border">

 <h3 class="margin-bottom-25"><?php echo $post->post_title; ?></h3>
 <?php  $jobs_department     = get_post_meta($post->ID, "jobs_department", true )? get_post_meta($post->ID, "jobs_department", true ): "Not Mentioned";?>
 <?php   $jobs_country       = get_post_meta($post->ID, "jobs_country", true )? get_post_meta($post->ID, "jobs_country", true ): "Not Mentioned"; ?>
 <?php   $jobs_work_location = get_post_meta($post->ID, "jobs_work_location", true)? get_post_meta($post->ID, "jobs_work_location", true ): "Not Mentioned";?>
                 <div class=""><b><?php echo $jobs_department; ?></b><span class="">|</span><b><?php echo $jobs_country; ?>,<?php echo $jobs_work_location ?></b></div>

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