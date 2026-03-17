<?php

$mensagem = "";
$endereco = null;
$arquivo = "consultas.json";

if (isset($_POST["buscar"])) {

    $cep = trim($_POST["cep"]);

    if ($cep == "") {

        $mensagem = "Digite um CEP.";

    } elseif (!ctype_digit($cep)) {

        $mensagem = "O CEP deve conter apenas números.";

    } else {

        $url = "https://viacep.com.br/ws/$cep/json/";

        $resposta = file_get_contents($url);

        if ($resposta) {

            $dados = json_decode($resposta, true);

            if (isset($dados["erro"])) {

                $mensagem = "CEP não encontrado.";

            } else {

                $endereco = $dados;

                $consulta = [
                    "cep" => $dados["cep"],
                    "logradouro" => $dados["logradouro"],
                    "bairro" => $dados["bairro"],
                    "cidade" => $dados["localidade"],
                    "estado" => $dados["uf"],
                    "data_hora" => date("d/m/Y H:i:s")
                ];

                if (file_exists($arquivo)) {

                    $conteudo = file_get_contents($arquivo);
                    $consultas = json_decode($conteudo, true);

                    if (!$consultas) {
                        $consultas = [];
                    }

                } else {

                    $consultas = [];
                }

                $consultas[] = $consulta;

                file_put_contents($arquivo, json_encode($consultas, JSON_PRETTY_PRINT));
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

    echo "<h3>Endereço encontrado</h3>";

    echo "Logradouro: " . htmlspecialchars($endereco["logradouro"]) . "<br>";
    echo "Bairro: " . htmlspecialchars($endereco["bairro"]) . "<br>";
    echo "Cidade: " . htmlspecialchars($endereco["localidade"]) . "<br>";
    echo "Estado: " . htmlspecialchars($endereco["uf"]) . "<br>";
}

?>

<h2>Histórico de Consultas</h2>

<?php

if (file_exists($arquivo)) {

    $conteudo = file_get_contents($arquivo);
    $consultas = json_decode($conteudo, true);

    if (!empty($consultas)) {

        foreach ($consultas as $consulta) {

            echo "CEP: " . htmlspecialchars($consulta["cep"]) . "<br>";
            echo "Logradouro: " . htmlspecialchars($consulta["logradouro"]) . "<br>";
            echo "Bairro: " . htmlspecialchars($consulta["bairro"]) . "<br>";
            echo "Cidade: " . htmlspecialchars($consulta["cidade"]) . "<br>";
            echo "Estado: " . htmlspecialchars($consulta["estado"]) . "<br>";
            echo "Data/Hora: " . htmlspecialchars($consulta["data_hora"]) . "<br>";
            echo "<hr>";
        }

    } else {

        echo "Nenhuma consulta registrada.";
    }

} else {

    echo "Nenhuma consulta registrada.";
}

?>