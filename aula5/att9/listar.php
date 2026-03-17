<?php

$arquivo = "usuarios_api.json";

if (file_exists($arquivo)) {

    $conteudo = file_get_contents($arquivo);

    $usuarios = json_decode($conteudo, true);

    echo "<h2>Usuários</h2>";

    foreach ($usuarios as $usuario) {

        echo "Nome: " . htmlspecialchars($usuario["name"]) . "<br>";
        echo "Email: " . htmlspecialchars($usuario["email"]) . "<br>";
        echo "Telefone: " . htmlspecialchars($usuario["phone"]) . "<br>";
        echo "Cidade: " . htmlspecialchars($usuario["address"]["city"]) . "<br>";
        echo "<hr>";

    }

} else {

    echo "Arquivo JSON não encontrado.";

}

?>