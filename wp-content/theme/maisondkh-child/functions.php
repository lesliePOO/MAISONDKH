<?php
/**
 * Chargement du CSS du thème parent + CSS du thème enfant
 */
function maisondhk_enqueue_styles() {
    // Charger le style du thème parent (Twenty Twenty-Five)
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
    
    // Charger le style du thème enfant (vos modifications)
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'maisondhk_enqueue_styles');

/**
 * Ajout du support pour les images mises en avant (thumbnails)
 */
add_theme_support('post-thumbnails');