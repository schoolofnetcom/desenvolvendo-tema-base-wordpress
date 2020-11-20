<?php get_header(); ?>

    <main>
        <section>
            <div class="container">
                <h2>Busca por: <?= get_query_var('s'); ?></h2>
                <?php
                if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                        ?>
                        <h3>
                            <?php the_title(); ?>
                            <a href="<?= get_the_permalink($post->ID); ?>">Ler</a>
                        </h3>
                        <hr>
                    <?php
                    }
                }
            ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>