<?php get_header(); ?>

<main class="homepage">
  <!-- Background + overlay -->
  <div class="page-background">
    <div class="background-overlay"></div>
  </div>

  <!-- Page Content -->
  <div class="page-content">
    <div class="paragraph">
      <p>OFFICES WITH NOVEL</p>
      <p1>CUSTOMIZED, FURNISHED AND MANAGED OFFICE SPACE IN BANGALORE</p1>
    </div>
    <div class="button-container">
      <a href="#book-tour" class="btn-book">BOOK A TOUR NOW!</a>
    </div>
  </div>
</main>

<!-- ✅ Load Testimonials AFTER main content -->
<?php get_template_part('template-parts/content', 'testimonial'); ?>

<?php get_footer(); ?>
