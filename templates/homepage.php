<?php /* Template Name: Homepage */ get_header();?>

<?php
 $portfolio = new WP_Query( array(
  'category_name' => 'portfolio',
  'posts_per_page' => 2,
));
?>

<!-- intro -->
<section class="intro">
  <div class="container ">
    <h1 class="noe">Strona internetowa dla Ciebie</h1>
  </div>
</section>


<!-- portfolio -->
<section class="portfolio">
  <div class="container">
    <h2 class="noe">Realizacje</h2>
    <p>Zobacz ostatnie realizacje wykonane przez nasz zespół.</p>

    <div class="portfolio-container">
    <?php if ( $portfolio->have_posts() ) : ?>
    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post();?>
      <article class="portfolio-item">
          <div class="portfolio-image">
              <a href="<?php echo get_permalink(); ?>">
                  <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>">
              </a>
          </div>
          <div class="more"><a class="noe" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
      </article>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php __('No items'); ?></p>
    <?php endif; ?>
    </div>

    <div class="portfolio-cta">
      <a href="#" class="btn">Zobacz więcej</a>
    </div>

  </div>
</section>

<?php get_footer(); ?>
