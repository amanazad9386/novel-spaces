<section class="testimonials-section">
  <h2>What Our Clients Say</h2>
  <div class="testimonial-slider">
    <?php
    $args = array(
      'post_type' => 'testimonial',
      'posts_per_page' => 5
    );
    $testimonial_query = new WP_Query($args);
    if ($testimonial_query->have_posts()):
      while ($testimonial_query->have_posts()): $testimonial_query->the_post(); ?>
        <div class="testimonial-slide">
          <p><?php the_content(); ?></p>
          <h4>- <?php the_title(); ?></h4>
        </div>
      <?php endwhile;
      wp_reset_postdata();
    else: ?>
      <p>No testimonials found.</p>
    <?php endif; ?>
  </div>
</section>
