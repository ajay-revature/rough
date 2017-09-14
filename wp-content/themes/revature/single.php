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
.blog-post-single img{
	margin:auto;
}
</style>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
	<script>
	$(document).ready(function() {
		
	$('#menu-item-1385').addClass('active')
	});
	</script>

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
                         	<li><a href="<?php echo esc_url( $category_link ); ?>" class="<?php echo $actcls; ?>"><?php echo   strtoupper($cat->name); ?></a></li>
                         <?php
                        }
			}
                    ?>
                     </ul>
                 </nav>
            </div>
        </div>
    </section>
	

<section class="blog-articals">

      <div class="container">

         <div class="row no-margin">

               <div class="col-lg-12 col-md-12 col-sm-12 blog-bottom-border">

                <h3 class="margin-bottom-25"><?php the_title(); ?></h3>

                 <div class="row margin-bottom-35 margin-top-50">

                     <div class="col-lg-5 col-md-5 col-xs-12 margin-bottom-15">
<p class="mobile_avatar_pic"><?php echo get_avatar( get_the_author_meta('ID'),40); ?></p>
                          <div class="author">
<span class="desktop_avatar_pic"><?php echo get_avatar( get_the_author_meta('ID'),40); ?></span><span class="">&nbsp;&nbsp;</span><b><?php the_author_meta( 'display_name' , $author_id ); ?> </b>
<span class="">|</span><b><?php the_time('m.d.y') ?></b></div>

                     </div>
                      <div class="col-lg-3 col-md-3 col-xs-12"></div>
                     <div class="col-lg-4 col-md-4 col-xs-12">

                         <div class="share pull-left padding-top-10 mobile-share"><b>Share</b></div>
                        <div class="share pull-left"> <span class="">
                         
                         <?php   echo do_shortcode('[addtoany]'); ?>
                         
                             </span></div>

                     </div>

                     <div class="clear"></div>
                     

                 </div>

                <div class="blog-post-single">
				<p class='margin-bottom-25 ins-cont post-paragraph'><?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?></p>
			<p class='margin-bottom-25 ins-cont post-paragraph'>
				<?php
							while ( have_posts() ) : the_post();
					
										the_content();
										
								
							endwhile;							
							
				?>
				</p> 
			<!--	<?php $tags = get_tags(); ?>
<div class="quote-tags-container">
<span class="">
                            <b>Tags:</b>
                        </span>
<?php foreach ( $tags as $tag ) { ?>
    <a class="tags-para-link" href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"><?php echo $tag->name; ?></a>
<?php } ?>
</div>-->

				</div>
               </div>

                
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
    </div>

</section>
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

                 <a href="../contact-us" class="white-read-btn">CONTACT US<i class="fa fa-angle-right" aria-hidden="true"></i></a>

                    </div>

               </div>

            </div>

		</div>

	</div>

</section>

<?php get_footer(); ?>
