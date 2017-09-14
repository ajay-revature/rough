<?php
 $post_type = $_GET['post_type'];
if($post_type=='post')
{
get_header(); ?>
<section class="blog-search-bg">
           <form id="" method="get" target="" action="<?php echo esc_url( home_url( '/' ) ); ?>">

                <div class="container">

                   <div class="row">

                  <div class="col-lg-12 col-md-12 col-xs-12">

                    <input class="form-control blog-search-field" placeholder="Search" type="text" name="s" id="search" required/>
                      <input type="hidden" value="post" name="post_type" />
					<span id="" class="blog-search-icon"><button class="btn-style-none"><i class="fa fa-search" aria-hidden="true"></i></button></span>

                   </div>

                  </div>

                </div>

            </form>
 </section>
    <section  id='main-subnav-blog' class="revpro-sub-nav">
    
        <div class="container blog-sticky-nav">
    
            <div class="">
    
                 <nav class="rev-pro-menu blogs">
    			<?php
					   $getURL = $_SERVER['REQUEST_URI'];
					   $SlugChunks = explode("/", $getURL);	
                   				   
					  
				?>
                
                     <ul id='insight-subnav' class="text-center">
                       <li><a href="<?php echo get_site_url(); ?>/insights/" <?php if($SlugChunks[2]=="") { echo "class=rev-pro-active";} ?> >ALL</a></li>
					   <?php 
					    $args = array(
			'hide_empty'=>0,
                          'orderby' => 'id'                    
	                      );
                      $categories = get_categories($args);
                      foreach ($categories as $cat) {
				if($cat->cat_name!='Uncategorized'){
						   $category_link = get_category_link($cat->cat_ID);
						   
						   if($SlugChunks[2]==$cat->slug){
							$actcls = "rev-pro-active";   
						   }else{
							   $actcls = "";   
						   }
						   
                         ?>
                         	<li><a href="<?php echo esc_url( $category_link ); ?>" class="<?php echo $actcls; ?>"><?php echo $cat->name; ?></a></li>
                         <?php
                        }
}
                    ?>
                     </ul>
                 </nav>
            </div>
        </div>
    </section>
    
 <?php
$s=get_search_query();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
	   'posts_per_page' => 5,
	   'paged' => $paged,
	   'category_name'=> $cat_name,
	    's' =>$s
	);
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
	?>
        <section class="blog-category-thought padding-75" style="height: 140px;">
    <div class="mob-container-unset">

         <div class="row no-margin">

               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
				
                
                <h3 class="margin-bottom-15">Results for" <?php echo get_query_var('s')?>"</h3>

                

                                   

               </div>

         </div>

     </div>
    </section>	
	
<section class="blog-articals blog-lists">

		  <div class="container">

			 <div class="row no-margin">
			 <?php 
	while($the_query->have_posts()) : 
	   $the_query->the_post();	
	?>
	  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
	<script>
	$(document).ready(function() {
	$('#menu-item-1385').addClass('active')
	});
	</script>
	   <div class="col-lg-12 col-md-12 col-sm-12 blog-bottom-border">

					 <a href="<?php echo get_permalink()?>"><h3 class="margin-bottom-25"><?php the_title(); ?></h3></a>
					 <p class="mobile_avatar_pic"><?php echo get_avatar( get_the_author_meta('ID'),40); ?></p>
					 <div class=""><span class="desktop_avatar_pic"><?php echo get_avatar( get_the_author_meta('ID'),40); ?></span><span class="">&nbsp;&nbsp;</span><b><?php the_author(); ?> </b><span class="">|</span><b> <?php the_time('m.d.y'); ?></b></div>

					<p><?php echo the_excerpt(); ?></p>

					   <a href="<?php echo get_permalink()?>" class="orange-invert-btn margin-top-25 margin-bottom-25">READ MORE<i class="fa fa-angle-right" aria-hidden="true"></i></a>

				   </div>

		<!-- end blog posts -->	
												
		 <?php endwhile; ?>		
	  </div>
	  </div>
	  
	  <?php if (function_exists("pagination")) {
		pagination($custom_query->max_num_pages);
	} ?>
  </section>
       <?php 
    }else{
?>   <section class="blog-category-thought padding-75" style="height: 140px;">
    <div class="mob-container-unset">

         <div class="row no-margin">

               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
				
                
                <h3 class="margin-bottom-15">Results for "<?php echo get_query_var('s')?>"</h3>

                

                                   

               </div>

         </div>

     </div>
    </section> 
        
        <div style="text-align:center;font-family: 'futura-pt';" class="alert alert-danger">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>  

 <?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = array(
	   'posts_per_page' => 5,
	   'paged' => $paged,
	   'category_name'=> $cat_name
	);

	$custom_query = new WP_Query( $args );
	?>

<?php get_footer();
}
elseif($post_type=='rev_faq')

{
  get_header(); 
    //echo $search_term = $_POST['s'];
         // $search_term = $_GET['s'];
 
    //echo $search_term = $_POST['s'];
         // $search_term = $_GET['s'];
 // Create our arguments for getting our post
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
    
 var $jqq = jQuery.noConflict();
	$jqq(document).ready(function(){
    var availableTags = [
      <?php echo $str;?>
      
    ];
		
    $jqq( "#search-tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>

<?php
    $view_all = $_GET['s'];
	$search_term = get_search_query();
    global $wpdb;
  $query="SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID,wp_posts.post_title,wp_posts.post_content FROM wp_posts  WHERE 1=1  AND (((wp_posts.post_title LIKE '%".$search_term."%') OR (wp_posts.post_excerpt LIKE '%".$search_term."%') OR (wp_posts.post_content LIKE '%".$search_term."%')))  AND wp_posts.post_type = 'rev_faq' AND (wp_posts.post_status = 'publish' OR wp_posts.post_status = 'private')  ORDER BY wp_posts.post_title LIKE '%".$search_term."%' DESC, wp_posts.post_date DESC LIMIT 0, 5";
	$result=$wpdb->get_results($query);?>
		<section class="blog-search-bg">
          <form id="" method="get" target="" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="container">
                   <div class="row">
                  <div class="col-lg-12 col-md-12 col-xs-12">
                    <input class="form-control blog-search-field" placeholder="Search" type="text" name="s" id="search-tags" required/>
                      <input type="hidden" value="rev_faq" name="post_type" />
					<span id="" class="blog-search-icon"><button class="btn-style-none"><i class="fa fa-search" aria-hidden="true"></i></button></span>

                   </div>

                  </div>

                </div>

            </form>
 </section>
	<section class="blog-category-thought padding-75" style="height: 165px;">
    <div class="mob-container-unset">

         <div class="row no-margin">

               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
				
                
                
				<?php 
				if($view_all=='viewall')
				{
					echo'<h4 class="faq_search_result margin-bottom-15">FAQ</h4>';	
							
                }
				else
				{
				?>
				<h4 class="faq_search_result margin-bottom-15">Results for "<?php echo $search_term;?>"</h4>
                <?php
				}
				?>
           </div>
     </div>
    </div>
    </section>
 <?php
	if (empty($result) )
	{
		 $view_all = $_GET['s'];
		if($view_all=='viewall')
 {
echo '<div style="display:none;" class="alert alert-danger">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>';
 }
 else
 {
 echo '<div style="margin-top:12px;text-align:center;"  class="alert alert-danger">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>';
 }
}
else
{
	?>
	
	

	<div class="">
	
		   <ul class="faq">
	<?php
foreach ($result as $page) {
	?>
	<li class="qq showList"><img src="<?php bloginfo('template_directory')?>/imgs/faq-actdown-arrow.svg"> <h4 class="cod-active"><?php echo $page->post_title; ?></h4></li>
        <li class="a faq-content"><p>
		<?php echo $page->post_content; ?>
		</p>          
         </li>
		
					<?php
           

    }
	}
	
	
	?>
	</ul>
		</div>
	<?php
 $view_all = $_GET['s'];
 if($view_all=='viewall')
 {
	$args = array (
		'post_type' => 'ajay_faq',
		'posts_per_page' => -1
		);

	// The Query
	$ajay_faq = new WP_Query( $args );
 /* echo"<pre>";
var_dump($ajay_faq);
echo"</pre>";  */
	
	?>
	<div class="margin-top-25"><h3 class="faq-head-txt">Have Questions? We Have Answers.</h3></div>
	<div class="clear"></div>
	<div class="">
		   <ul class="faq">
			<?php if ( $ajay_faq->have_posts() ) {
				while ( $ajay_faq->have_posts() ) {
					$ajay_faq->the_post();?>
				
					<li class="q showList"><img src="wp-content/themes/revature/imgs/faq-actdown-arrow.svg"> <h4 class="cod-active"><?php the_title() ?></h4></li>
        <li class="a faq-content"><p>
		<?php the_content() ?>
		</p>          
         </li>
		 		<?php 
				}
				} else {
					echo "No FAQs Found";
				}
				?>
			</ul>
		</div>
	<?php	get_footer();
		
	 wp_reset_postdata();
	return;
	
 }
	?>
		<div style="width:100%;text-align:center;">
		<form id="" method="get" target="" action="<?php echo esc_url( home_url( '/' ) ); ?>">

                <div class="container">

                   <div class="row">

                  <div class="col-lg-12 col-md-12 col-xs-12">

                    <input  type="hidden" name="s" value='viewall'/>
                    <input type="hidden" value="rev_faq" name="post_type" />

     <div style="text-align:center;margin-top:17px;" class="col-lg-12 col-xs-12 form-group"> <span><input type="submit" class="orange-invert-btn" value="VIEW ALL"></span></div>
                   </div>

                  </div>

                </div>

            </form>
		
		</div>
	
	<?php wp_reset_postdata();
	get_footer();
}
else
{
echo"nothing";
}