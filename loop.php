<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="container post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	

		<!-- post title -->
		<h2>
			<?php the_title(); ?>
		</h2>
		<!-- /post title -->

         <p>
			<?php // the_exerpt(); ?>
		</p>
		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Published by', 'bloody-mary' ); ?> <?php the_author_posts_link(); ?></span>
		<!-- /post details -->
        <p class="text-right"><a class="btn btn-primary" role="button" href="<?php the_permalink(); ?>" >Read </a></p>


		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'bloody-mary' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
