<?php
/**
 * Plugin Name: Revature FAQ List 
 * Plugin URI: www.revature.com
 *Description:  Revature FAQ List Plugin used for list out of all FAQ and helps in  getting results.
 * Version:  1.1.0
 * Author: Ajay and Joon Park
 * Author URI:Http://www.revature.com
 */
function rev_faq_post_type() {

	$labels = array(
		'name'                => _x( 'FAQs', 'ak' ),
		'singular_name'       => _x( 'FAQ', 'ak' ),
		'menu_name'           => __( 'FAQs', 'ak' ),
		'parent_item_colon'   => __( 'Parent FAQs:', 'ak' ),
		'all_items'           => __( 'All FAQs', '' ),
		'view_item'           => __( 'View FAQ', 'ak' ),
		'add_new_item'        => __( 'Add New FAQ', 'ak' ),
		'add_new'             => __( 'New FAQ', 'ak' ),
		'edit_item'           => __( 'Edit FAQ', 'ak' ),
		'update_item'         => __( 'Update FAQ', 'ak' ),
		'search_items'        => __( 'Search FAQs', 'ak' ),
		'not_found'           => __( 'No FAQs found', 'ak' ),
		'not_found_in_trash'  => __( 'No FAQs found in Trash', 'ak' ),
		);
	$args = array(
		'labels'              => $labels,
		'description'         => __( 'Theme Road FAQs Post Type', 'ak' ),
		
		'supports'            => array( 'title', 'editor' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-cart',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => false,
		'capability_type'     => 'post',
		);
		$argss = array(
		'taxonomies' => array('category', 'post_tag'));
		
	register_post_type( 'rev_faq', $args , $argss);
	
}

// Hook into the 'init' action
add_action( 'init', 'rev_faq_post_type');



/*
 * FAQ Post Query And Short Code
 */
function rev_faqs_query_shortcode() {

	$args = array (
		'post_type' => 'rev_faq',
		'posts_per_page' => -1
		);

	// The Query
	$rev_faq = new WP_Query( $args );
/*   echo"<pre>";
var_dump($rev_faq);
echo"</pre>";   */
		

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
				
                
                
				<h4 class="faq_search_result margin-bottom-15">FAQ</h4>
							
                
           </div>
     </div>
    </div>
    </section>
	
	<div class="">
		   <ul class="faq">
			<?php if ( $rev_faq->have_posts() ) {
				while ( $rev_faq->have_posts() ) {
					$rev_faq->the_post();?>
				
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
		
		
	<?php wp_reset_postdata();
	return;

}
add_shortcode( 'rev_faqs', 'rev_faqs_query_shortcode' );




