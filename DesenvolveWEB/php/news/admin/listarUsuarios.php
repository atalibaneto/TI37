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
    <!-- Lista -->
    <h2>Usuários Cadastrados</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM usuarios";
                    $usuarios = mysqli_query($conexao, $sql);
                    if(mysqli_num_rows($usuarios) > 0) {
                        foreach($usuarios as $usuario) {
                            /* print_r($usuarios);
                            exit; */
                ?>
                <tr>
                    <td><?= $usuario['idUsuario'] ?></td>
                    <td><?= $usuario['nomeUsuario'] ?></td>
                    <td><?= $usuario['emailUsuario'] ?></td>
                    <td><?= $usuario['loginUsuario'] ?></td>
                    <td><?= $usuario['senhaUsuario'] ?></td>
                    <td>
                        <a href="verUsuario.php?idUsuario=<?= $usuario['idUsuario'] ?>" class="btn btn-secondary btn-sm">Ver</a>
                        <a href="editarUsuario.php?idUsuario=<?= $usuario['idUsuario'] ?>" class="btn btn-success btn-sm">Editar</a>
                        <form action="frmApagarUsuario.php" method="POST" class="d-inline">
                            <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit" name="apagarUsuario" value="<?= $usuario['idUsuario'] ?>" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
                <?php 
                    }
                } else {
                    echo "<h5>Nenhum usuário cadastrado</h5>";
                }
                ?>
            </tbody>

        </table>


    <!-- Rodapé -->
    <section id="rodape">
        <div class="container text-center">
            <p>Copyright &copy; 2026. Orgulhosamente feito com <i class="bi bi-heart-fill"></i> na Terra do Saci.</p>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>