<?php
/**
 * Template Name: Inner Page Header and Footer only
 */

get_header(); ?>


<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
?>
<?php
get_footer();

