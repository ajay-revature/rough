<?php
/**
 * Template Name: Landing Page Template
 */

get_header('landing_page'); ?>


<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
?>
<?php
get_footer('landing_page');
