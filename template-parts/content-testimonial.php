<section class="testimonials-section">
  <h2>What Our Clients Say</h2>

  <div class="testimonial-slider-track">
    <?php
    $args = array(
      'post_type' => 'testimonial',
      'posts_per_page' => -1
    );
    $testimonial_query = new WP_Query($args);

    if ($testimonial_query->have_posts()):
      $count = 0;
      echo '<div class="testimonial-slide-pair">'; // Start first pair

      while ($testimonial_query->have_posts()): $testimonial_query->the_post();
        $image = get_field('testimonial_image');
        ?>
        <div class="testimonial-card">
          <div class="testimonial-image-wrapper">
            <?php if ($image): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="Testimonial Image" />
            <?php endif; ?>
          </div>
          <div class="testimonial-content">
            <p><?php the_content(); ?></p>
            <h4>- <?php the_title(); ?></h4>
          </div>
        </div>
        <?php
        $count++;
        if ($count % 2 == 0 && $count != $testimonial_query->post_count) {
          echo '</div><div class="testimonial-slide-pair">';
        }
      endwhile;

      echo '</div>'; // End last pair
      wp_reset_postdata();
    else:
      echo '<p>No testimonials found.</p>';
    endif;
    ?>
  </div>
</section>
