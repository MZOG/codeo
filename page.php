<?php get_header(); ?>
	<section>
		<div class="container">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>

		<?php endwhile; ?>
	<?php endif; ?>
	</section>
<?php get_footer(); ?>
