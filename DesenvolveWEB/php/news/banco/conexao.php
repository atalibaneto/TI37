<?php

    define('HOST', 'localhost');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('BANCO', 'news');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA,BANCO) or die ('Não foi possível conectar ao banco');

    
    //var_dump($conexao);

?>