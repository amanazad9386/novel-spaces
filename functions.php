<?php
// ✅ Enqueue styles and scripts
function mytheme_enqueue_assets() {
    $version = wp_get_theme()->get('Version');

    // Main stylesheet (style.css)
    wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(), $version);

    // Custom JS file (main.js)
    wp_enqueue_script(
        'mytheme-custom-js',
        get_template_directory_uri() . '/main.js',
        array('jquery'),
        $version,
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

// ✅ Theme setup
function mytheme_setup() {
    // Enable support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');

    // ✅ Register Primary Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

// ✅ Custom Post Type: Testimonials
function create_testimonial_cpt() {
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => __('Testimonials'),
            'singular_name' => __('Testimonial')
        ),
        'public' => true,
        'has_archive' => false,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
    ));
}
add_action('init', 'create_testimonial_cpt');

// ✅ Custom Contact Form Handler (if using your own HTML form)
function handle_contact_form() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = sanitize_text_field($_POST['name'] ?? '');
        $email = sanitize_email($_POST['email'] ?? '');
        $message = sanitize_textarea_field($_POST['message'] ?? '');

        wp_mail('your@email.com', 'Contact Form Message', "From: $name <$email>\n\n$message");

        wp_redirect(home_url('/thank-you'));
        exit;
    }
}
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form');
add_action('admin_post_submit_contact_form', 'handle_contact_form');
