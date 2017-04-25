<?php get_header(); ?>
<?php if(is_home()) {  ?>
<div class="container-fluid blog-header">
        <div class="jumbotron text-center">
            <h1> <?php wp_title("");  ?> </h1>
            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
        </div>
    </div>


<?php }else{ ?>

<div class="container-fluid blog-header">
        <div class="jumbotron text-center">
            <h1> <?php wp_title(""); ?> </h1>
            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
        </div>
    </div>


<?php } ?>
	<main role="main">
		<!-- section -->
		<section>

		

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
