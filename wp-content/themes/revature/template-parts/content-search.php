<div class="col-lg-12 col-md-12 col-sm-12 blog-bottom-border">

                <h3 class="margin-bottom-25"><?php the_title(); ?></h3>

                 <div class=""><b><?php the_author(); ?> </b><span class="">|</span><b> <?php the_time('m.d.y') ?></b></div>

                <?php twentysixteen_excerpt(); ?>

                   <a href="<?php the_permalink(); ?>" class="orange-invert-btn margin-top-25 margin-bottom-25">READ MORE<i class="fa fa-angle-right"></i></a>

               </div>


<?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


	<?php //twentysixteen_post_thumbnail(); ?>

	<?php //twentysixteen_excerpt(); ?>

	<?php if ( 'post' === get_post_type() ) : ?>

			<?php twentysixteen_entry_meta(); ?>
			<?php
				edit_post_link(
					sprintf(
						__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>

	<?php else : ?>

		<?php
			edit_post_link(
				sprintf(
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<footer class="entry-footer"><span class="edit-link">',
				'</span></footer><!-- .entry-footer -->'
			);
		?>

	<?php endif; ?>