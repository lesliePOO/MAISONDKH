<?php
/**
 * Chargement du CSS du thème parent + CSS du thème enfant
 */
function maisondhk_enqueue_styles() {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'maisondhk_enqueue_styles');

/**
 * Support images mises en avant
 */
add_theme_support('post-thumbnails');

/**
 * Custom Post Type : Plat
 */
function maisondkh_register_cpt_plat() {
    $labels = array(
        'name'               => 'Plats',
        'singular_name'      => 'Plat',
        'add_new'            => 'Ajouter un plat',
        'add_new_item'       => 'Ajouter un nouveau plat',
        'edit_item'          => 'Modifier le plat',
        'view_item'          => 'Voir le plat',
        'search_items'       => 'Rechercher un plat',
        'not_found'          => 'Aucun plat trouvé',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies'         => array('categorie_plat'),
        'menu_icon'          => 'dashicons-food',
        'rewrite'            => array('slug' => 'plats'),
        'show_in_rest'       => true,
    );
    register_post_type('plat', $args);
}
add_action('init', 'maisondkh_register_cpt_plat');

/**
 * Taxonomie : Catégorie de plat
 */
function maisondkh_register_taxonomie_plat() {
    $labels = array(
        'name'              => 'Catégories de plats',
        'singular_name'     => 'Catégorie de plat',
        'search_items'      => 'Rechercher une catégorie',
        'all_items'         => 'Toutes les catégories',
        'edit_item'         => 'Modifier la catégorie',
        'add_new_item'      => 'Ajouter une catégorie',
    );
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'categorie-plat'),
    );
    register_taxonomy('categorie_plat', array('plat'), $args);
}
add_action('init', 'maisondkh_register_taxonomie_plat');