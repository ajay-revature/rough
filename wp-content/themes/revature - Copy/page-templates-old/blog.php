<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

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
                       <li><a href="<?php echo get_site_url(); ?>/insights/" <?php if($SlugChunks[3]=="") { echo "class=rev-pro-active";} ?> >ALL</a></li>
					   <?php 
					    $args = array(
                          'orderby' => 'id'                    
	                      );
                      $categories = get_categories($args);
                      foreach ($categories as $cat) {
						   $category_link = get_category_link($cat->cat_ID);
						   
						   if($SlugChunks[3]==$cat->slug){
							$actcls = "rev-pro-active";   
						   }else{
							   $actcls = "";   
						   }
						   
                         ?>
                         	<li><a href="<?php echo esc_url( $category_link ); ?>" class="<?php echo $actcls; ?>"><?php echo $cat->name; ?></a></li>
                         <?php
                        }
                    ?>
                     </ul>
                 </nav>
            </div>
        </div>
    </section>

		 <?php get_template_part( 'template-parts/content', get_post_format() ); ?>


		<?php get_footer(); ?>