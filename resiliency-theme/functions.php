<?php
/**
 * Resiliency Mind + Body Medicine Theme
 * Theme Functions
 */

// Enqueue parent/child assets
function resiliency_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style(
        'resiliency-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Google Fonts
    wp_enqueue_style(
        'resiliency-google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Custom CSS (from root css/styles.css)
    wp_enqueue_style(
        'resiliency-custom-css',
        get_template_directory_uri() . '/css/styles.css',
        array(),
        wp_get_theme()->get('Version')
    );

    // Main JavaScript
    wp_enqueue_script(
        'resiliency-main-js',
        get_template_directory_uri() . '/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Lucide Icons
    wp_enqueue_script(
        'resiliency-lucide',
        'https://unpkg.com/lucide@latest',
        array(),
        null,
        false
    );

    // Tailwind CSS CDN (for production, compile locally for best performance)
    wp_enqueue_script(
        'resiliency-tailwind',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false
    );

    // Tailwind Config (must load AFTER Tailwind)
    wp_add_inline_script(
        'resiliency-tailwind',
        "tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0B2035',
                        secondary: '#23bfe2',
                        accent: '#23bfe2',
                        lightblue: '#23bfe2',
                        surface: '#FDFDFD',
                        neutral: '#F3F4F6'
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 10px 40px -10px rgba(11,32,53,0.08)',
                        'hover': '0 20px 40px -10px rgba(11,32,53,0.12)',
                    }
                }
            }
        }"
    );
}
add_action('wp_enqueue_scripts', 'resiliency_enqueue_assets');

// Theme setup
function resiliency_theme_setup() {
    // Enable title tag
    add_theme_support('title-tag');

    // Enable post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'resiliency'),
        'footer'    => __('Footer Menu', 'resiliency'),
        'mobile'    => __('Mobile Menu', 'resiliency'),
    ));

    // Support HTML5 features
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Support custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Support custom background
    add_theme_support('custom-background', array(
        'default-color' => 'FDFDFD',
    ));

    // Support wide alignment
    add_theme_support('align-wide');

    // Support editor styles
    add_theme_support('editor-styles');

    // Support responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'resiliency_theme_setup');

// Register widget areas
function resiliency_widgets_init() {
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'resiliency'),
        'id'            => 'sidebar-blog',
        'description'   => __('Add widgets here for the blog sidebar.', 'resiliency'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 1', 'resiliency'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here for footer column 1.', 'resiliency'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 2', 'resiliency'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here for footer column 2.', 'resiliency'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'resiliency_widgets_init');

// Custom excerpt length
function resiliency_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'resiliency_excerpt_length');

// Custom excerpt more
function resiliency_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'resiliency_excerpt_more');

// Register custom image sizes
function resiliency_custom_image_sizes() {
    add_image_size('resiliency-hero', 1920, 1080, true);
    add_image_size('resiliency-card', 600, 400, true);
    add_image_size('resiliency-thumbnail', 300, 200, true);
}
add_action('after_setup_theme', 'resiliency_custom_image_sizes');

// SVG MIME type support
function resiliency_custom_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'resiliency_custom_mime_types');

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Disable WordPress emojis
function resiliency_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji');
}
add_action('init', 'resiliency_disable_emojis');

// Disable Gutenberg block styles for better performance
function resiliency_disable_block_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');
}
add_action('wp_enqueue_scripts', 'resiliency_disable_block_styles', 100);

// Add body classes
function resiliency_body_classes($classes) {
    if (is_singular()) {
        $classes[] = 'singular-page';
    }
    if (is_front_page()) {
        $classes[] = 'front-page';
    }
    return $classes;
}
add_filter('body_class', 'resiliency_body_classes');

// ACF Option Pages (if ACF Pro is available)
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false,
    ));
}