<?php
get_header(); ?>
<div class="quickcont-bg" style="height:auto;">
		<h2><?php  the_title(); ?></h2> 
 </div>
<section class="RevPro-bgcolor">
  
        <div class="container text-left margin-bottom-50">
            
                <?php
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                ?>
        </div>

</section>
<?php
get_footer();