<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <nav class="nav-container">

            <a href="<?php echo home_url(); ?>" class="nav-logo">
                <?php bloginfo('name'); ?>
            </a>

            <ul class="nav-links">
                <li><a href="#about">À propos</a></li>
                <li><a href="#skills">Compétences</a></li>
                <li><a href="#timeline">Parcours</a></li>
                <li><a href="#projects">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <button class="nav-burger" id="navBurger">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </nav>
    </header>