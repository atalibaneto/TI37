<?php 
session_start();
require "../banco/conexao.php";

if (isset($_POST['editarUsuario'])) {
    $usuario_id = mysqli_real_escape_string($conexao, $_POST['idUsuario']);
    $nomeUsuario = mysqli_real_escape_string($conexao, trim($_POST['nomeUsuário']));
    $emailUsuario = mysqli_real_escape_string($conexao, trim($_POST['emailUsuário']));
    $loginUsuario = mysqli_real_escape_string($conexao, trim($_POST['loginUsuário']));
    $senhaUsuario = mysqli_real_escape_string($conexao, trim($_POST['senhaUsuário']));

    
    

}


?>