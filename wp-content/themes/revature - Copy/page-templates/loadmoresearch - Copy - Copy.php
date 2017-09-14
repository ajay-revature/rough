<?php
 
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

if($_POST["limit"]!="" && $_POST["start"]!="" && $_POST["s1"]!="" && $_POST["sS"]!="")
{
 $args = "SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID, wp_posts.post_title FROM wp_posts  INNER JOIN wp_postmeta ON ( wp_posts.ID = wp_postmeta.post_id )  INNER JOIN wp_postmeta AS mt1 ON ( wp_posts.ID = mt1.post_id )  INNER JOIN wp_postmeta AS mt2 ON ( wp_posts.ID = mt2.post_id ) WHERE 1=1  AND ( 
  ( wp_postmeta.meta_key = 'meta_checkbox' AND wp_postmeta.meta_value = 'yes' ) 
  AND 
  ( 
    ( mt1.meta_key = 'jobs_work_location' AND mt1.meta_value = '".$_POST["s1"]."' ) 
    AND 
    ( mt2.meta_key = 'jobs_department' AND mt2.meta_value = '".$_POST["sS"]."' )
  )
) AND wp_posts.post_type = 'jobs' AND ((wp_posts.post_status = 'publish')) GROUP BY wp_posts.ID ORDER BY wp_posts.post_title ASC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 
}
else if($_POST["limit"]!="" && $_POST["start"]!="" && $_POST["s1"]!="")
{

$args = "SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID, wp_posts.post_title FROM wp_posts  INNER JOIN wp_postmeta ON ( wp_posts.ID = wp_postmeta.post_id )  INNER JOIN wp_postmeta AS mt1 ON ( wp_posts.ID = mt1.post_id ) WHERE 1=1  AND ( 
  ( wp_postmeta.meta_key = 'jobs_work_location' AND wp_postmeta.meta_value = '".$_POST["s1"]."' ) 
  AND 
  ( 
    ( mt1.meta_key = 'meta_checkbox' AND mt1.meta_value = 'yes' )
  )
) AND wp_posts.post_type = 'jobs' AND ((wp_posts.post_status = 'publish')) GROUP BY wp_posts.ID ORDER BY wp_posts.post_title ASC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
}
else if($_POST["limit"]!="" && $_POST["start"]!="" && $_POST["sS"]!="")
{
$args = "SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID , wp_posts.post_title FROM wp_posts  INNER JOIN wp_postmeta ON ( wp_posts.ID = wp_postmeta.post_id )  INNER JOIN wp_postmeta AS mt1 ON ( wp_posts.ID = mt1.post_id ) WHERE 1=1  AND ( 
  ( wp_postmeta.meta_key = 'jobs_department' AND wp_postmeta.meta_value = '".$_POST["sS"]."' ) 
  AND 
  ( 
    ( mt1.meta_key = 'meta_checkbox' AND mt1.meta_value = 'yes' )
  )
) AND wp_posts.post_type = 'jobs' AND ((wp_posts.post_status = 'publish')) GROUP BY wp_posts.ID ORDER BY wp_posts.post_title ASC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 


}
else
{
	  $args = "SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID, wp_posts.post_title FROM wp_posts  INNER JOIN wp_postmeta ON ( wp_posts.ID = wp_postmeta.post_id ) WHERE 1=1  AND ( 
  ( wp_postmeta.meta_key = 'meta_checkbox' AND wp_postmeta.meta_value = 'yes' )
) AND wp_posts.post_type = 'jobs' AND ((wp_posts.post_status = 'publish')) GROUP BY wp_posts.ID ORDER BY wp_posts.post_date ASC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
}
	     global $wpdb;
        $jobs_posts = $wpdb->get_results( $args );
	 
		if(count($jobs_posts) > 0){?>
	<section class="blog-articals" id="benefits">

      <div class="container">
<?php  foreach($jobs_posts as $post){
	 
    setup_postdata($post);
                                    
                                 $meta_checkbox     = get_post_meta($post->ID, "meta_checkbox", true )? get_post_meta($post->ID, "meta_checkbox", true ): "Not Mentioned";									
                                    $jobs_department     = get_post_meta($post->ID, "jobs_department", true )? get_post_meta($post->ID, "jobs_department", true ): "Not Mentioned"; 
                                    $jobs_country       = get_post_meta($post->ID, "jobs_country", true )? get_post_meta($post->ID, "jobs_country", true ): "Not Mentioned"; 
                                    $jobs_start_date    = get_post_meta($post->ID, "_jobs_start_date", true )? get_post_meta($post->ID, "_jobs_start_date", true ): "Not Mentioned"; 
                                    $jobs_end_date      = get_post_meta($post->ID, "_jobs_end_date", true )? get_post_meta($post->ID, "_jobs_end_date", true ): "Not Mentioned"; 
                                    $jobs_work_location = get_post_meta($post->ID, "jobs_work_location", true)? get_post_meta($post->ID, "jobs_work_location", true ): "Not Mentioned";
									$jobs_responsibility = get_post_meta($post->ID, "jobs_responsibility", true)? get_post_meta($post->ID, "jobs_responsibility", true ): "Not Mentioned";
									$jobs_requirement = get_post_meta($post->ID, "jobs_requirement", true)? get_post_meta($post->ID, "jobs_requirement", true ): "Not Mentioned";
									$jobs_preferred = get_post_meta($post->ID, "jobs_preferred", true)? get_post_meta($post->ID, "jobs_preferred", true ): "Not Mentioned";
                                         ?>
                                           
											

         <div class="row no-margin">

  
   <div class="col-lg-12 col-md-12 col-sm-12 blog-bottom-border">

                <h3 class="margin-bottom-25"><?php echo $post->post_title; ?></h3>

                 <div class=""><b><?php echo $jobs_department; ?></b><span class="">|</span><b><?php echo $jobs_work_location; ?>,<?php echo $jobs_country; ?></b></div>

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
											
    	
  
                                        <?php
                                    }
                                    wp_reset_postdata();
									?>
									</div>
  
  </section><?php
}
else
{
	return "0";
}
                          ?>

  