<?php get_header(); ?>

<main>
        <section>
            <div class="page-wrap d-flex flex-row align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center">
                            <span class="display-1 d-block">404</span>
                            <div class="mb-4 lead">A página que tentou acessar não foi encontrada.</div>
                            <a href="<?= get_site_url(); ?>" class="btn btn-link">Voltar para home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>