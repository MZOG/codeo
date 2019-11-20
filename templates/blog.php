<?php /* Template Name: Blog */ get_header();?>

<?php
$blog = new WP_Query( array(
  'category_name' => 'blog, portfolio',
  'posts_per_page' => 15,
));
?>

<!-- intro -->
<section class="blog post">
  <div class="container container-flex">

  <h1 class="noe">Blog</h1>

  <div class="blog-articles">
  <?php if ( $blog->have_posts() ) : ?>
    <?php while ( $blog->have_posts() ) : $blog->the_post();?>
    <article class="blog-articles-item">
      <div class="blog-articles-item__left">
        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php 
          $excerpt = get_the_excerpt();
          $excerpt = substr( $excerpt , 0, 50); 
          ?>
        <p><?php echo $excerpt; ?></p>

        <div class="blog-articles-item__left-more">
          <a href="<?php echo get_permalink(); ?>" class="btn">Czytaj</a>
        </div>
      </div>

      <div class="blog-articles-item__right">
        <a href="<?php echo get_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </a>
      </div>
    </article>
        
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php __('No items'); ?></p>
    <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
