<?php
get_header(); ?>
 <div class="quickcont-bg2" style="height:auto;">
		
	</div>
    <section class="RevPro-bgcolor">
	<div class="container text-left margin-bottom-50">
    	<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
		?>
	</div>
	</div>
	</section>
<?php
get_footer();
