<?php
require_once( explode( "wp-content" , __FILE__ )[0] . "wp-load.php" );
echo $s=$_POST['s'];
echo $post_type=$_POST['post_type'];

 $args = array (
		'post_type'              => 'tmrd_faq'
		);

	// The Query
	$tmrd_faq = new WP_Query( $args );
	echo"<pre>";
	var_dump($tmrd_faq);
	echo"</pre>";
// First FAQ Active
	$count = 0;
	// Code
	?>
	<div id="tmrd-colorful-faqs">
		<div class="panel-group" id="accordion">
			<?php if ( $tmrd_faq->have_posts() ) {
				while ( $tmrd_faq->have_posts() ) {
					$tmrd_faq->the_post(); $count ++; ?>
					<?php if($count == 1) { ?>
					<div class="panel panel-default">
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#faq-<?php the_ID(); ?>">
									<span class="pull-right icon"></span>
									<?php the_title() ?>
								</a>
							</h4>
						</div>
						<div id="faq-<?php the_ID(); ?>" class="panel-collapse in">
							<div class="panel-body">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
					<?php } else { ?>
					<div class="panel panel-default">
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#faq-<?php the_ID(); ?>" class="collapsed">
									<span class="pull-right icon"></span>
									<?php the_title() ?>
								</a>
							</h4>
						</div>
						<div id="faq-<?php the_ID(); ?>" class="panel-collapse collapse">
							<div class="panel-body">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
					<?php	} }
				} else {
					echo "No FAQs Found";
				}
				?>
			</div>
		</div><!-- /#ccr-colorful-faqs -->
	<?php wp_reset_postdata();
?>
  
   

     