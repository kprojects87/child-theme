<?php
add_action('wp_enqueue_scripts', 'ttf_child_enqueue_styles');
function ttf_child_enqueue_styles() {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
    
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        array('parent-style'),
        wp_get_theme()->get('Version')
    );
    
    wp_enqueue_script(
        'child-scripts',
        get_stylesheet_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}

// Register custom navigation menu
function ttf_child_register_menus() {
    register_nav_menus(array(
        'custom-primary' => __('Custom Primary Menu', 'twentytwentyfourchild'),
    ));
}
add_action('after_setup_theme', 'ttf_child_register_menus');

// Custom header template
function ttf_child_custom_header() {
    get_template_part('template-parts/header/custom-header');
}

// Custom footer template with social links
function ttf_child_custom_footer() {
    get_template_part('template-parts/footer/custom-footer');
}