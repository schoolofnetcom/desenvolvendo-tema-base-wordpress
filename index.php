<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/app.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Página de Exemplo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Olá Mundo</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Item 1</a>
                                <a class="dropdown-item" href="#">Item 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Item 3</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Digite sua busca..." aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container">
            <h2>HEADER</h2>
        </div>
    </header>

    <main>
        <section>
            <div class="container">
            <h2>Section SON Theme</h2>
            <p>Vivamus euismod mauris. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Curabitur vestibulum aliquam leo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Curabitur nisi.</p>
            <p>Nulla porta dolor. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Cras varius. Etiam imperdiet imperdiet orci.</p>
            <p>Proin magna. Nunc nonummy metus. Sed cursus turpis vitae tortor. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. In auctor lobortis lacus.</p>
            <p>Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Praesent blandit laoreet nibh. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi.</p>
            <p>Donec vitae sapien ut libero venenatis faucibus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Aenean commodo ligula eget dolor. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Pellentesque posuere.</p>
            </div>
        </section>
    </main>

        <footer>
            <div class="container">
                <h2>FOOTER</h2>
            </div>
        </footer>

        <div class="credit container">
            <div class="row">
                <div class="col-sm">
                    <span class="copyright">Copyright  ©2018. Todos os direitos reservados.</span>
                </div>
                <div class="col-sm tw-logo">
                        <span class="copyright">
                            <a href="https://schoolofnet.com/" target="_blank" title="School Of Net" rel="nofollow">
                                <img src="https://sonassets.s3.amazonaws.com/img/logo-top.png">
                            </a>
                        </span>
                </div>
            </div>
        </div>
        <script src="<?php get_template_directory_uri(); ?>/assets/js/app.js"></script>
    </body>
</html>