<?php 
    include('verifica.php');
    include('../banco/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Notícias News::. - Painel Administrativo</title>
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
                            <a class="nav-link" href="#">Painel Administrativo</a>
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
                    <img src="../imagens/logo.png" width="100px">
                </div>
                <div class="col-md-8">

                </div>
                <div class="col-md-2">
                    <div class="text-center border border-1 rounded p-2 m-3">
                        <h4>Dólar Hoje:</h4><p><strong><?php include('../cotacao.php'); ?></strong></p>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <!-- Painel Esquerdo -->
    <section id="painel">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    <h2>Painel Administrativo</h2>
                    <h3>Olá, <?php echo $_SESSION['login']; ?></h3> <a href="logout.php" class="btn btn-outline-secondary">Sair</a><br>
                </div>
                <div class="col-md-9 border-start border-1">
                    <p><a href="frmCadastrarUsuarios.php" class="btn btn-secondary">Cadastrar usuários</a> <a href="listarUsuarios.php" class="btn btn-secondary">Listar usuários</a> <a href="frmCadastrarNoticias.php" class="btn btn-secondary">Cadastrar notícias</a> <a href="listarNoticias.php" class="btn btn-secondary">Listar notícias</a></p>
                    <!-- Cadastrar Notícias -->
                    <h2>Cadastrar Notícia</h2>
                    <div class="col">
                        <?php if (isset($_SESSION['mensagem1'])) {
                            echo "<div class='alert alert-sucess'>".$_SESSION['mensagem1']."</div>";
                            unset($_SESSION['mensagem1']);
                        }
                        ?>
                        <form action="inserirNoticias.php" method="post" enctype="multipart/form-data">
                            <label for="tituloNoticia" class="form-label">Título da Notícia</label><br>
                            <input type="text" name="tituloNoticia" id="tituloNoticia" class="form-control"><br>
                            <label for="textoNoticia" class="form-label">Texto da Notícia</label><br>
                            <textarea name="textoNoticia" id="textoNoticia" class="form-control" rows="5">Insira o texto da notícia aqui...</textarea><br>
                            <label for="fotoNoticia" class="form-label">Foto da Notícia</label><br>
                            <input type="file" name="fotoNoticia" id="fotoNoticia" class="form-control" accept="image/png, image/jpeg"><br>
                            <button type="submit" name="cadastroNoticia" class="btn btn-secondary">Cadastrar</button>
                        </form>
                    </div>
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