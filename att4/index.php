<?php

$mensagem = "";
$endereco = null;

if (isset($_POST["buscar"])) {

    $cep = trim($_POST["cep"]);

    // validar se foi preenchido
    if ($cep == "") {
        $mensagem = "Digite um CEP.";

    // validar se tem apenas números
    } elseif (!ctype_digit($cep)) {
        $mensagem = "O CEP deve conter apenas números.";

    } else {

        $url = "https://viacep.com.br/ws/$cep/json/";

        $resposta = file_get_contents($url);

        if ($resposta !== false) {

            $dados = json_decode($resposta, true);

            // tratar CEP não encontrado
            if (isset($dados["erro"])) {
                $mensagem = "CEP não encontrado.";
            } else {
                $endereco = $dados;
            }

        } else {
            $mensagem = "Erro ao consultar a API.";
        }
    }
}

?>

<form method="POST">

    CEP: <input type="text" name="cep"><br><br>

    <button type="submit" name="buscar">Buscar</button>

</form>

<?php

if ($mensagem != "") {
    echo "<p>" . htmlspecialchars($mensagem) . "</p>";
}

if ($endereco) {

    echo "<h2>Endereço</h2>";

    echo "Logradouro: " . htmlspecialchars($endereco["logradouro"]) . "<br>";
    echo "Bairro: " . htmlspecialchars($endereco["bairro"]) . "<br>";
    echo "Cidade: " . htmlspecialchars($endereco["localidade"]) . "<br>";
    echo "Estado: " . htmlspecialchars($endereco["uf"]) . "<br>";
}

?>