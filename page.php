<?php get_header(); ?>
<?php if(is_front_page()) {  ?>
<div class="container-fluid blog-header">
        <div class="jumbotron text-center">
            <h1> <?php bloginfo('name'); ?> </h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </div>


<?php }else{ ?>

<div class="container-fluid blog-header">
        <div class="jumbotron text-center">
            <h1> <?php wp_title(""); ?> </h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </div>


<?php } ?>
	<main role="main" class="container">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
