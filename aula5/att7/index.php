<?php

$mensagem = "";
$pais = null;

if (isset($_POST["buscar"])) {

    $nomePais = trim($_POST["pais"]);

    if ($nomePais == "") {

        $mensagem = "Digite o nome de um país.";

    } else {

        $url = "https://restcountries.com/v3.1/name/" . urlencode($nomePais);

        $resposta = @file_get_contents($url);

        if ($resposta === false) {

            $mensagem = "País não encontrado.";

        } else {

            $dados = json_decode($resposta, true);

            if (!$dados) {

                $mensagem = "Erro ao consultar a API.";

            } else {

                $pais = $dados[0];
            }
        }
    }
}

?>

<form method="POST">

País: <input type="text" name="pais"><br><br>

<button type="submit" name="buscar">Buscar</button>

</form>

<?php

if ($mensagem != "") {
    echo "<p>" . htmlspecialchars($mensagem) . "</p>";
}

if ($pais) {

    echo "<h2>Informações do país</h2>";

    echo "Nome oficial: " . htmlspecialchars($pais["name"]["official"]) . "<br>";
    echo "Capital: " . htmlspecialchars($pais["capital"][0]) . "<br>";
    echo "Região: " . htmlspecialchars($pais["region"]) . "<br>";
    echo "População: " . htmlspecialchars($pais["population"]) . "<br>";

    echo "<br>Bandeira:<br>";
    echo "<img src='" . htmlspecialchars($pais["flags"]["png"]) . "' width='200'>";
}

?>