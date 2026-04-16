<section id="projects" class="projects-section">
    <div class="projects-container">

        <p class="section-label">Projets</p>
        <h2 class="section-title">Réalisations récentes</h2>

        <?php
        $projets = new WP_Query([
            'post_type'      => 'projet',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ]);

        if ($projets->have_posts()) : ?>
            <div class="projects-grid">
                <?php while ($projets->have_posts()) : $projets->the_post(); ?>

                    <article class="project-card reveal">

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="project-thumbnail">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="project-content">

                            <span class="project-year">
                                <?php the_field('projet_annee'); ?>
                                — <?php the_field('projet_technologies'); ?>
                            </span>

                            <h3 class="project-title">
                                <a href="<?php the_permalink(); ?>" style="color:inherit;">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <p class="project-excerpt">
                                <?php the_excerpt(); ?>
                            </p>

                            <div class="project-links">
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

                    </article>

                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>

        <?php else : ?>
            <p class="no-projects">Aucun projet pour le moment.</p>
        <?php endif; ?>

    </div>
</section>