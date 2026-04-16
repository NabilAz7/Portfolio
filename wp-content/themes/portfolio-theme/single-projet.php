<?php get_header(); ?>

<main class="single-projet-main">
    <?php while (have_posts()) : the_post(); ?>

        <section class="projet-hero">
            <div class="projet-hero-container">

                <div class="projet-back reveal">
                    <a href="<?php echo home_url(); ?>#projects" class="back-link">
                        ← Retour aux projets
                    </a>
                </div>

                <div class="projet-header reveal">
                    <span class="timeline-badge">
                        <?php the_field('projet_annee'); ?>
                    </span>
                    <h1 class="projet-title"><?php the_title(); ?></h1>
                    <p class="projet-technologies">
                        <?php the_field('projet_technologies'); ?>
                    </p>
                </div>

                <div class="projet-links-top reveal reveal-delay-1">
                    <?php if (get_field('projet_url')) : ?>
                        <a href="<?php the_field('projet_url'); ?>"
                            target="_blank"
                            class="btn btn-primary">
                            Voir le site
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('projet_github')) : ?>
                        <a href="<?php the_field('projet_github'); ?>"
                            target="_blank"
                            class="btn btn-ghost">
                            GitHub
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        </section>

        <?php if (has_post_thumbnail()) : ?>
            <section class="projet-image reveal">
                <div class="projet-image-container">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            </section>
        <?php endif; ?>

        <section class="projet-content-section">
            <div class="projet-content-container">

                <div class="projet-grid">

                    <div class="projet-description reveal">
                        <h2 class="projet-section-title">Description du projet</h2>
                        <div class="projet-content-text">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <aside class="projet-sidebar reveal reveal-delay-1">

                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Informations</h3>

                            <div class="sidebar-item">
                                <span class="sidebar-label">Année</span>
                                <span class="sidebar-value">
                                    <?php the_field('projet_annee'); ?>
                                </span>
                            </div>

                            <div class="sidebar-item">
                                <span class="sidebar-label">Technologies</span>
                                <span class="sidebar-value">
                                    <?php the_field('projet_technologies'); ?>
                                </span>
                            </div>

                            <?php if (get_field('projet_url')) : ?>
                                <div class="sidebar-item">
                                    <span class="sidebar-label">Site en ligne</span>
                                    <a href="<?php the_field('projet_url'); ?>"
                                        target="_blank"
                                        class="sidebar-link">
                                        Voir le site →
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php if (get_field('projet_github')) : ?>
                                <div class="sidebar-item">
                                    <span class="sidebar-label">Code source</span>
                                    <a href="<?php the_field('projet_github'); ?>"
                                        target="_blank"
                                        class="sidebar-link">
                                        GitHub →
                                    </a>
                                </div>
                            <?php endif; ?>

                        </div>

                    </aside>

                </div>

            </div>
        </section>

        <section class="projet-navigation">
            <div class="projet-nav-container">
                <?php
                $prev = get_previous_post();
                $next = get_next_post();
                ?>

                <?php if ($prev) : ?>
                    <a href="<?php echo get_permalink($prev->ID); ?>" class="projet-nav-item">
                        <span class="nav-direction">← Projet précédent</span>
                        <span class="nav-title"><?php echo get_the_title($prev->ID); ?></span>
                    </a>
                <?php else : ?>
                    <div></div>
                <?php endif; ?>

                <?php if ($next) : ?>
                    <a href="<?php echo get_permalink($next->ID); ?>" class="projet-nav-item projet-nav-right">
                        <span class="nav-direction">Projet suivant →</span>
                        <span class="nav-title"><?php echo get_the_title($next->ID); ?></span>
                    </a>
                <?php endif; ?>

            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>