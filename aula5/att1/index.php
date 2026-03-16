<?php
$arquivo = "produtos.json";
$conteudo = file_get_contents($arquivo);
$produtos = json_decode($conteudo, true);

foreach ($produtos as $produto) {
    echo "Nome: " . $produto["nome"] . "<br>";
    echo "Preço: R$ " . $produto["preco"] . "<br>";
    echo "Categoria: " . $produto["categoria"] . "<br><br>";
}
?>