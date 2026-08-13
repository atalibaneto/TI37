<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Notícias News::.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- Barra de Navegação -->
    <section id="navegacao">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">News!:-)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notícias</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Regionais ABC
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Anhembi</a></li>
                                <li><a class="dropdown-item" href="#">Bofete</a></li>
                                <li><a class="dropdown-item" href="#">Conchas</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">São Paulo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Agora!</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/index.php">Painel Administrativo</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search"/>
                        <button class="btn btn-secondary" type="submit">Busca</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    </section>
    <!-- Cabeçalho -->
     <section id="cabecalho">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="imagens/logo.png" width="100px">
                </div>
                <div class="col-md-8">

                </div>
                <div class="col-md-2">
                    <div class="text-center border border-1 rounded p-2 m-3">
                        <h4>Dólar Hoje:</h4><p><strong><?php include('cotacao.php'); ?></strong></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Corousel -->
    <section id="carousel">
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens/banner1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagens/banner2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagens/banner3.png" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            <hr>
        </div>
    </section>
    <!-- Últimas notícias -->
     <section id="noticias">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="imagens/n1.jpg" class="img-fluid">
                    <h5>Título notícia 1</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p</p>
                    <a href="#" class="icon-link icon-link-hover">Saiba Mais
                        <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
                <div class="col-md-3">
                    <img src="imagens/n2.jpg" class="img-fluid">
                    <h5>Título notícia 2</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p</p>
                    <a href="#" class="icon-link icon-link-hover">Saiba Mais
                        <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
                <div class="col-md-3">
                    <img src="imagens/n3.jpg" class="img-fluid">
                    <h5>Título notícia 3</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p</p>
                    <a href="#" class="icon-link icon-link-hover">Saiba Mais
                        <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
                <div class="col-md-3">
                    <img src="imagens/n4.jpg" class="img-fluid">
                    <h5>Título notícia 4</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p</p>
                    <a href="#" class="icon-link icon-link-hover">Saiba Mais
                        <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <hr>
        </div>
     </section>
<!-- Rodapé -->
 <section id="rodape">
    <div class="container text-center">
        <p>Copyright &copy; 2026. Orgulhosamente feito com <i class="bi bi-heart-fill"></i> na Terra do Saci.</p>
    </div>
 </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>