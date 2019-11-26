<?php get_header(); ?>

		<!-- section -->
		<div class="container container-flex">

			<article id="post-404" class="page-404">

				<h1 class="noe"><?php _e( 'Ups, page not found.', 'html5blank' ); ?></h1>

				<p>Looks like the page you are looking for does not exist. Check the URL.</p>

				<div class="page-404-cta">
					<a href="<?php echo home_url(); ?>" class="btn"><?php _e( 'Back to homepage', 'html5blank' ); ?></a>
				</div>

			</article>

		</div>


<?php get_footer(); ?>
