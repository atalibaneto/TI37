<?php
session_start();
include ("../banco/conexao.php");

if(isset($_FILES['fotoNoticia'])) {
    $fotoNoticia = $_FILES['fotoNoticia'];

    if ($fotoNoticia["error"])
        die ("Falha ao enviar aquivo ");

    if ($fotoNoticia["size"] > 2097152)
       die ("Arquivo muito grande! Máx: 2MB");

    $pasta = "../imagens/noticias/";
    $nomeDoArquivo = $fotoNoticia['name'];
    $novoNomeDoarquivo = uniqid(); // Gerador de identificador único baseado no timestamp em microssegundos.

    //pega o camino do php
    $extensao =  strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION)); //strtolower -> deixa os caracteres em letras minúsculas.

    if ($extensao != 'jpg' && $extensao != 'png')
        die ("Tipo de arquivo não aceito");
    
    $caminho = $pasta.$novoNomeDoarquivo.".".$extensao;
    $talquei = move_uploaded_file($fotoNoticia["tmp_name"], $caminho);
        if($talquei)
            if (isset($_POST['cadastroNoticia'])) {
                $tituloNoticia  = mysqli_real_escape_string($conexao, trim($_POST['tituloNoticia']));
                $textoNoticia = mysqli_real_escape_string($conexao, trim($_POST['textoNoticia']));
                $sql = "INSERT INTO noticias (tituloNoticia, textoNoticia, fotoNoticia) VALUES ('$tituloNoticia', '$textoNoticia', '$caminho')";

                mysqli_query($conexao, $sql);

            if (mysqli_affected_rows($conexao) > 0) {
                $_SESSION['mensagem1'] = 'Notícia cadastrada com sucesso';
                header('Location: frmCadastrarNoticias.php');
                exit;
            } else {
                $_SESSION['mensagem1'] = 'Erro ao cadastrar notícia';
                header('Location: frmCadastrarNoticias.php');
                exit;
    }



        }
           //echo "<p>Arquivo enviado com sucesso</p>";
    } else {
        echo "<p>Falha ao enviar</p>";
    }




/* if (isset($_POST['cadastroNoticia']) || (isset($_FILES['fotoNoticia']))) {
    $tituloNoticia  = mysqli_real_escape_string($conexao, trim($_POST['tituloNoticia']));
    $textoNoticia = mysqli_real_escape_string($conexao, trim($_POST['textoNoticia']));
    $fotoNoticia = mysqli_real_escape_string($conexao, trim($_POST['fotoNoticia']));

    //$hash = password_hash($senhaUsuario, PASSWORD_DEFAULT);

    $sql = "INSERT INTO noticias (tituloNoticia, textoNoticia, fotoNoticia) VALUES ('$tituloNoticia', '$textoNoticia', '$fotoNoticia')";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem1'] = 'Notícia cadastrada com sucesso';
        header('Location: frmCadastrarUsuarios.php');
        exit;
    } else {
        $_SESSION['mensagem1'] = 'Erro ao cadastrar notícia';
        header('Location: frmCadastrarUsuarios.php');
        exit;
    }
} */
?>