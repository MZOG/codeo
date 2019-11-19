<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container">
			
			<h1 class="noe"><?php the_title(); ?></h1>

			<div class="post-left">
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
				<!-- <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span> -->
				<!-- <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -->
			</div>

			<div class="post-right">
			<?php the_content(); // Dynamic Content ?>
			</div>

			
			</div>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
