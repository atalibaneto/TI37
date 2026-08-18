<?php

session_start();

include("../banco/conexao.php");

//verifica se as variáveis (login e pwd) existem e não são nulas
if (empty($_POST['login']) || empty($_POST['pwd'])) {
    header('Location: index.php');
    exit();
}
//var_dump($_POST['pwd']);
$usuario = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['pwd']);

//var_dump($senha);

$query = "SELECT * FROM usuarios WHERE loginUsuario = '$usuario'";

$result = mysqli_query($conexao, $query);

//retorna o número de linhas da consulta
$row = mysqli_num_rows($result);
//var_dump($row);

if ($row == 1) {
    $dados_banco = mysqli_fetch_assoc($result);
    $senha_banco = $dados_banco['senhaUsuario'];

    if (password_verify($senha, $senha_banco)) {
        $_SESSION['login'] = $usuario;
        header('Location: painel.php');
        exit();
    } else {
        //criação de sessão para usuário não autenticado
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }
}
?>