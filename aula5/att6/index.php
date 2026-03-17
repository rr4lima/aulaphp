<?php
$url = "https://jsonplaceholder.typicode.com/posts";

$resposta = file_get_contents($url);

$posts = json_decode($resposta, true);

$contador = 0;

foreach ($posts as $post) {


    if ($post["userId"] == 1) {

        echo "ID: " . htmlspecialchars($post["id"]) . "<br>";
        echo "Título: " . htmlspecialchars($post["title"]) . "<br>";
        echo "Conteúdo: " . htmlspecialchars($post["body"]) . "<br>";
        echo "<hr>";

        $contador++;

        if ($contador == 10) {
            break;
        }
    }
}

?>