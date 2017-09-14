<?php
/**
 * Template Name: Blog
 */

get_header(); ?>
<style>
div#main-subnav-blogs-sticky-wrapper.rev-pro-sticky-wrapper
{
height:0px!important;	
}
</style>
					   <div class="blog-hero">

	        <div class="row no-margin contact-hero-content">

            <div class="col-lg-12 col-md-12 col-sm-12 margin-top-50 margin-bottom-50">
				
				<h1>Empowering Insights.</h1>

                <p class="">
					When you're on the leading edge of talent development and business technologies, things happen fast. See some of Revature's latest thinking that's helping to drive the industry forward.
				</p>

            </div>

		</div>

		</div>
		<section id='insightpage' class="blog-search-bg">
           <form id="" method="get" target="" action="<?php echo esc_url( home_url( '/' ) ); ?>">

                <div class="container">

                   <div class="row">

                  <div class="col-lg-12 col-md-12 col-xs-12">

                    <input class="form-control blog-search-field" placeholder="Search" type="text" name="s" id="search" required/>

							<span id="" class="blog-search-icon"><button class="btn-style-none"><i class="fa fa-search" aria-hidden="true"></i></button></span>

                   </div>

                  </div>

                </div>

            </form>
 </section>
 <?php 
$url = $_SERVER['REQUEST_URI'];
$getURL = $_SERVER['REQUEST_URI'];
					   $SlugChunks = explode("/", $getURL);					   
 
		 $id = substr($url, strrpos($url, '/') + 1,8);
		 $SlugChunks[1];
		  $mkurl=$SlugChunks[1].'/'.$id;
		if(($mkurl)=='insights/?mkt_tok')
		{?>
			 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
	<script>
	$(document).ready(function() {
		
		
		$('section#main-subnav-blogs').hide();
		$('#insightpage').hide();
		 $('.blog-category-thought').hide();
	});
	</script>
		<?php
		}
		
			 ?>
 <?php 
$getURL = $_SERVER['REQUEST_URI'];
					   $SlugChunks = explode("/", $getURL);

		 if($SlugChunks[2]=='page')
		 {
			
			 ?>
			 
			 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
	<script>
	$(document).ready(function() {
		
		
		$('section#main-subnav-blogs').hide();
		$('#insightpage').hide();
		 $('.blog-category-thought').hide();
	});
	</script>
		 <?php
		 }
				  
?>
    <section  id='main-subnav-blogs' class="revpro-sub-nav subnavinsight">
    
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

		 <?php get_template_part( 'template-parts/content', get_post_format() ); ?>


		<?php get_footer(); ?>