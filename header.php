<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Background + overlay -->
<div class="page-background">
  <div class="background-overlay"></div>
</div>

<!-- Header -->
<header class="custom-header">
  <div class="container">
    <div class="logo-section">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Novel.png" class="logo-img" alt="Logo">
      <div class="logo-text">
        <h1>NOVEL OFFICE</h1>
        <p>customizable offices • flexible terms</p>
      </div>
    </div>

    <!-- ✅ WordPress Menu (No hardcoded <ul>) -->
    <nav class="nav-menu">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'menu-list',
        'container' => false
      ));
      ?>
    </nav>
  </div>
</header>
