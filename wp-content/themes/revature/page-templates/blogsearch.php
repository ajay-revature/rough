<?php
 
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

if($_POST["limit"]!="" && $_POST["start"]!="" && $_POST["page"]!="")
{
	
 $page=$_POST["page"];
 $args = "SELECT SQL_CALC_FOUND_ROWS   wp_posts.ID,wp_posts.post_title,wp_posts.post_content ,wp_posts.post_author FROM wp_posts  LEFT JOIN wp_term_relationships ON (wp_posts.ID = wp_term_relationships.object_id) WHERE 1=1  AND ( 
  wp_term_relationships.term_taxonomy_id IN (".$page.")
) AND wp_posts.post_type = 'post' AND (wp_posts.post_status = 'publish' OR wp_posts.post_status = 'private') GROUP BY wp_posts.ID ORDER BY wp_posts.post_date DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
}
else if($_POST["limit"]!="" && $_POST["start"]!="" && $_POST["s"]!="")
{
	
$args ="SELECT SQL_CALC_FOUND_ROWS   wp_posts.ID,wp_posts.post_title,wp_posts.post_content ,wp_posts.post_author FROM wp_posts  WHERE 1=1  AND (((wp_posts.post_title LIKE '%".$_POST["s"]."%') OR (wp_posts.post_excerpt LIKE '%".$_POST["s"]."%') OR (wp_posts.post_content LIKE '%".$_POST["s"]."%')) AND ((wp_posts.post_title LIKE '%".$_POST["s"]."%') OR (wp_posts.post_excerpt LIKE '%".$_POST["s"]."%') OR (wp_posts.post_content LIKE '%".$_POST["s"]."%')))  AND wp_posts.post_type = 'post' AND (wp_posts.post_status = 'publish' OR wp_posts.post_status = 'private')  ORDER BY (CASE WHEN wp_posts.post_title LIKE '%".$_POST["s"]."%' THEN 1 WHEN wp_posts.post_title LIKE '%".$_POST["s"]."%' AND wp_posts.post_title LIKE '%".$_POST["s"]."%' THEN 2 WHEN wp_posts.post_title LIKE '%".$_POST["s"]."%' OR wp_posts.post_title LIKE '%".$_POST["s"]."%' THEN 3 WHEN wp_posts.post_excerpt LIKE '%".$_POST["s"]."%' THEN 4 WHEN wp_posts.post_content LIKE '%".$_POST["s"]."%' THEN 5 ELSE 6 END), wp_posts.post_date DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
  
  }
else
{
	$args = "SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID,wp_posts.post_title,wp_posts.post_content  FROM wp_posts  WHERE 1=1  AND wp_posts.post_type = 'post' AND (wp_posts.post_status = 'publish' OR wp_posts.post_status = 'private')  ORDER BY wp_posts.post_date DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
}
   global $wpdb;
   
     $custom_query = $wpdb->get_results( $args );
	// $custom_query = new WP_Query( $args );
	
		if(count($custom_query) > 0){?>
	<section class="blog-articals" id="benefits">

      <div class="container">
<?php  foreach($custom_query as $post){
	 
    setup_postdata($post);
                                    
                                ?>
                                           
											

         <div class="row no-margin">

  
 <div class="col-lg-12 col-md-12 col-sm-12 blog-bottom-border">

					<a href="<?php echo get_post_permalink()?>"><h3 class="margin-bottom-25"><?php the_title(); ?></h3></a>
                      <p class="mobile_avatar_pic"><?php echo get_avatar( get_the_author_meta('ID'),40); ?></p>
					 <div class=""><span class="desktop_avatar_pic"><?php echo get_avatar( get_the_author_meta('ID'),40); ?></span><span class="">&nbsp;&nbsp;</span><b><?php the_author(); ?> </b><span class="">|</span><b> <?php the_time('m.d.y'); ?></b></div>

					<p><?php echo the_excerpt(); ?></p>

					   <a href="<?php echo get_post_permalink()?>" class="orange-invert-btn margin-top-25 margin-bottom-25">READ MORE<i class="fa fa-angle-right" aria-hidden="true"></i></a>

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

  