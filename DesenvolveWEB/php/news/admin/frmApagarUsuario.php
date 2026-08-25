<?php 
session_start();
require "../banco/conexao.php";

if (isset($_POST['apagarUsuario'])) {
    $usuario_id = mysqli_real_escape_string($conexao, $_POST['apagarUsuario']);

    $sql = "DELETE FROM usuarios WHERE idUsuario = '$usuario_id'";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Usuário apagado com sucesso';
        header('Location: listarUsuarios.php');
    } else {
        $_SESSION['mensagem'] = 'Erro ao apagar usuário';
        header('Localtion: listarUsuarios.php');
    }

}



?>