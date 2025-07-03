<!-- page.php -->
<?php get_header(); ?>

<main class="page-content">
  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_content();  // ye tumhara contact form ya editor ka content dikhayega
      endwhile;
    endif;
  ?>
</main>

<?php get_footer(); ?>
