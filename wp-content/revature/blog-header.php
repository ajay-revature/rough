 <section class="blog-search-bg">

           <form id="" method="post" target="" action="">

                <div class="container">

                   <div class="row">

                  <div class="col-lg-12 col-md-12 col-xs-12">

                    <input class="form-control blog-search-field" placeholder="Search" type="text" name="search" id="search"/>

							<span id="" class="blog-search-icon"><button class="btn-style-none"><i class="fa fa-search" aria-hidden="true"></i></button></span>

                   </div>

                  </div>

                </div>

            </form>



       </section>
	   <section  id='main-subnav-blog' class="revpro-sub-nav" data-spy="affix" data-offset-top="397">

        <div class="container blog-sticky-nav">
    
            <div class="">
    
                 <nav class="rev-pro-menu blog" id="stickyNav">
    
                     <ul class="text-center">
                     <li><a href="<?php echo get_site_url(); ?>/insights/" class="rev-pro-active">ALL</a></li>
                     
                     <?php
								$cat_args=array(
								 'hide_empty'=>0,
								  'orderby' => 'name',
								  'current_category' => 1,
								  'order' => 'ASC'
								   );
								$categories=get_categories($cat_args);
								  foreach($categories as $category) {
									$args=array(
									  'showposts' => -1,
									  'category__in' => array($category->term_id),
									  'caller_get_posts'=>1
									);
									$posts=get_posts($args);
									  if ($posts) {
									if($category->cat_name!='Uncategorized'){
										echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </li> ';
									}	
									  } 
									} 
				?>
                     </ul>
                 </nav>
            </div>
        </div>
    </section>