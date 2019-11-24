<?php get_header(); ?>

		<!-- section -->
		<div class="container container-flex">

			<article id="post-404">

				<h1 class="noe"><?php _e( 'Oho.. coś jest nie tak.', 'html5blank' ); ?></h1>

				<p>Informacja o stronie, której szukasz została wysłana do administratora.</p>
				<a href="<?php echo home_url(); ?>" class="btn"><?php _e( 'Return home?', 'html5blank' ); ?></a>

			</article>

		</div>


<?php get_footer(); ?>
