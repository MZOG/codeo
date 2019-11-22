<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container container-flex">
			
			<h1 class="noe post_name"><?php the_title(); ?></h1>

			<div class="post__left">
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				<?php endif; ?>
				<aside class="why-me">
					<h2>Karolina Wawrzyniak</h2>
					<p>Marcin wykonał świetną pracę nad stroną <strong>Doradca Językowy</strong>. Dbałość o szczegóły to coś na czym nam zależało. Projekt został zakończony na czas. Polecam Marcina poineważ to profesjonalista w każdym szczególe.</p>
					<p><a href="https://www.doradcajezykowy.com">www.doradcajezykowy.com</a></p>
				</aside>
			</div>

			<div class="post__right">
			<?php the_content(); // Dynamic Content ?>
			</div>

			
			</div>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
