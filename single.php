<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article <?php post_class('post'); ?>>
			<div class="container container-flex">
			
			<h1 class="noe post_name"><?php the_title(); ?></h1>

			<div class="post__left">
				<!-- featured image -->
				<?php if ( has_post_thumbnail()) :?>
					<?php the_post_thumbnail();?>
				<?php endif; ?>
				<!-- featured image end -->
			</div>

			<div class="post__right">
			<?php the_content(); // Dynamic Content ?>
			</div>

			
			</div>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
