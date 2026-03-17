<?php

$url = "https://jsonplaceholder.typicode.com/users";

$resposta = file_get_contents($url);

$usuarios = json_decode($resposta, true);

if ($usuarios) {

    $arquivo = "usuarios_api.json";

    file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT));

    echo "Usuários salvos no arquivo JSON com sucesso.";

} else {

    echo "Erro ao consultar a API.";

}

?>