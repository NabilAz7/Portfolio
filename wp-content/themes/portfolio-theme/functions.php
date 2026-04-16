<?php

// =============================================
// 1. CONFIGURATION DE BASE DU THÈME
// =============================================
function portfolio_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['script', 'style']);
}
add_action('after_setup_theme', 'portfolio_setup');


// =============================================
// 2. CHARGEMENT DES STYLES ET SCRIPTS
// =============================================
function portfolio_enqueue_assets()
{
    wp_enqueue_style(
        'portfolio-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0'
    );
    wp_enqueue_script(
        'portfolio-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_assets');


// =============================================
// 3. CUSTOM POST TYPE : PROJETS
// =============================================
function portfolio_register_cpt()
{
    $labels = [
        'name'          => 'Projets',
        'singular_name' => 'Projet',
        'add_new'       => 'Ajouter',
        'add_new_item'  => 'Ajouter un projet',
        'edit_item'     => 'Modifier le projet',
        'menu_name'     => 'Projets',
    ];

    register_post_type('projet', [
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon'    => 'dashicons-portfolio',
        'rewrite'      => ['slug' => 'projets'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'portfolio_register_cpt');
