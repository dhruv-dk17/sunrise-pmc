<?php
/**
 * SunRise PMC Theme Functions
 */

if (!defined('ABSPATH')) exit;

function sunrise_pmc_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'sunrise_pmc_theme_setup');

function sunrise_pmc_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'sunrise-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Main Compiled Theme Stylesheet
    wp_enqueue_style(
        'sunrise-main-style',
        get_template_directory_uri() . '/assets/main-D3rC1b1d.css',
        array(),
        '1.0.0'
    );

    // CDN Libraries: GSAP & ScrollTrigger
    wp_enqueue_script(
        'sunrise-gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'sunrise-gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        array('sunrise-gsap'),
        '3.12.5',
        true
    );

    // Lenis Smooth Scroll
    wp_enqueue_script(
        'sunrise-lenis',
        'https://cdn.jsdelivr.net/npm/lenis@1.1.14/dist/lenis.min.js',
        array(),
        '1.1.14',
        true
    );

    // Main Compiled Theme Script (ES Module)
    wp_enqueue_script(
        'sunrise-main-script',
        get_template_directory_uri() . '/assets/main-lARl-QsZ.js',
        array('sunrise-gsap', 'sunrise-gsap-scrolltrigger', 'sunrise-lenis'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'sunrise_pmc_enqueue_scripts');

// Allow type="module" for the bundled script
function sunrise_add_module_type_attribute($tag, $handle, $src) {
    if ('sunrise-main-script' === $handle) {
        return '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}
add_filter('script_loader_tag', 'sunrise_add_module_type_attribute', 10, 3);
