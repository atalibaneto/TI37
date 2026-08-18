<?php 
    session_start();
    session_destroy();
    header('Locaion: index.php');
    exit();
?>