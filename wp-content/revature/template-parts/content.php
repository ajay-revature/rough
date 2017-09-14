		
<?php
					   $getURL = $_SERVER['REQUEST_URI'];
					   $SlugChunks = explode("/", $getURL);	
                   				   
					  
				?>

    <?php
	
	if($SlugChunks[2]!=""){
	?>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
	<script>
	$(document).ready(function() {
	$('#menu-item-1385').addClass('active')
	});
	</script>
	
	<section class="blog-search-bg">
           <form id="" method="get" target="" action="<?php echo esc_url( home_url( '/' ) ); ?>">

                <div class="container">

                   <div class="row">

                  <div class="col-lg-12 col-md-12 col-xs-12">

                    <input class="form-control blog-search-field" placeholder="Search" type="text" name="s" id="search"/>

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
       
    <section class="blog-category-thought padding-75">
    <div class="mob-container-unset">

         <div class="row no-margin">

               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
				<?php
					$category = $wp_query->get_queried_object();
					$cat_name = $category->name;
					$cat_description = $category->description;
					?>
                
                <h3 class="margin-bottom-15"><?php echo $cat_name; ?></h3>

                <p class="margin-bottom-15 acd-part-today-cont"><?php echo $cat_description; ?> </p>

                                   

               </div>

         </div>

     </div>
    </section>
    <?php
	}
	?>
	 		

 <?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = array(
	   'posts_per_page' =>5,
	   'paged' => $paged,
	   'category_name'=> $cat_name
	);

	$custom_query = new WP_Query( $args );
	?>
	<section class="blog-articals blog-lists">

		  <div class="container">

			 <div class="row no-margin">
			 <?php 
	while($custom_query->have_posts()) : 
	   $custom_query->the_post();	
	?>
	  
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
   

<section class="quickcont-bg">

	<div class="row no-margin">

		<div class="col-lg-12 col-md-12 col-sm-12 no-padding">

			<div>

               <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12">

                <h2 class="margin-bottom-35">Ready to Advance?</h2>

                 <a href="../../contact-us" class="white-read-btn">CONTACT US<i class="fa fa-angle-right" aria-hidden="true"></i></a>

                    </div>

               </div>

            </div>

		</div>

	</div>

</section>