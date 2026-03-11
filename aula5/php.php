

<?php

$arquivo = "usuarios.json";

$conteudo = file_get_contents($arquivo);
$usuarios = json_decode($conteudo, true);

    echo "<pre>";
    print_r($usuarios);
    echo "</pre>";
    
$nome = $_POST["nome"];
$idade = $_POST['idade'];
$curso = $_POST['curso'];



?>