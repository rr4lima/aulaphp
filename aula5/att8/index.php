<?php

$mensagem = "";
$endereco = null;

if (isset($_POST["buscar"])) {

    $cep = trim($_POST["cep"]);

    if ($cep == "") {

        $mensagem = "Digite um CEP.";

    } else {

        $url = "https://viacep.com.br/ws/$cep/json/";

     
        $curl = curl_init($url);

  
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

      
        $resposta = curl_exec($curl);

 
        curl_close($curl);

        if ($resposta) {

            $dados = json_decode($resposta, true);

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

    echo "<h3>Endereço</h3>";

    echo "Logradouro: " . htmlspecialchars($endereco["logradouro"]) . "<br>";
    echo "Bairro: " . htmlspecialchars($endereco["bairro"]) . "<br>";
    echo "Cidade: " . htmlspecialchars($endereco["localidade"]) . "<br>";
    echo "Estado: " . htmlspecialchars($endereco["uf"]) . "<br>";
}

?>