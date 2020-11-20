<?php get_header(); ?>

    <main>
        <section>
            <div class="container">
            <h1>
                <?php single_cat_title('', true); ?>
            </h1>
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