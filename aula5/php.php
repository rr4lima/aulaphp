<?php




if (isset($_POST["nome"])) {

    $nome = trim($_POST["nome"]);
    $idade = trim($_POST["idade"]);
    $curso = trim($_POST["curso"]);

    $novoUsuario = [
        "nome" => $nome,
        "idade" => $idade,
        "curso" => $curso
    ];

    if (file_exists($arquivo)) {
        $conteudo = file_get_contents($arquivo);
        $usuarios = json_decode($conteudo, true);
    } else {
        $usuarios = [];
    }

    $usuarios[] = $novoUsuario;


    file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT));

    echo "Aluno cadastrado com sucesso!";
}
?>

<form method="POST">
    Nome: <input type="text" name="nome"><br><br>
    Idade: <input type="number" name="idade"><br><br>
    Curso: <input type="text" name="curso"><br><br>

    <button type="submit" name="cadastrar">Cadastrar</button>
</form>

<?php
if (file_exists($arquivo)) {

    $conteudo = file_get_contents($arquivo);
    $usuarios = json_decode($conteudo, true);

    echo "<h2>Lista de alunos</h2>";

    foreach ($usuarios as $u) {

        echo "Nome: " . $u["nome"] . "<br>";
        echo "Idade: " . $u["idade"] . "<br>";
        echo "Curso: " . $u["curso"] . "<br><br>";

    }

}

if (isset($_POST["buscar"])) {

    $cep = trim($_POST["cep"]);

    if ($cep == "") {
        echo "Digite um CEP.";
    } else {

        $url = "https://viacep.com.br/ws/$cep/json/";

        $resposta = file_get_contents($url);

        $dados = json_decode($resposta, true);

        if (isset($dados["erro"])) {
            echo "CEP não encontrado.";
        } else {

            echo "Rua: " . htmlspecialchars($dados["logradouro"]) . "<br>";
            echo "Bairro: " . htmlspecialchars($dados["bairro"]) . "<br>";
            echo "Cidade: " . htmlspecialchars($dados["localidade"]) . "<br>";
            echo "Estado: " . htmlspecialchars($dados["uf"]) . "<br>";
        }
    }
}
?>

<form method="POST">

    CEP: <input type="text" name="cep">
    <button type="submit" name="buscar">Buscar</button>

</form>

<?php

$url = "https://jsonplaceholder.typicode.com/users";

$resposta = file_get_contents($url);

$usuarios = json_decode($resposta, true);

foreach ($usuarios as $usuario) {

    echo "<div style='border:1px solid #ccc;padding:10px;margin:10px'>";

    echo "Nome: " . htmlspecialchars($usuario["name"]) . "<br>";
    echo "Email: " . htmlspecialchars($usuario["email"]) . "<br>";
    echo "Telefone: " . htmlspecialchars($usuario["phone"]) . "<br>";
    echo "Cidade: " . htmlspecialchars($usuario["address"]["city"]) . "<br>";

    echo "</div>";
}


$url = "https://jsonplaceholder.typicode.com/posts";

$resposta = file_get_contents($url);

$posts = json_decode($resposta, true);

$contador = 0;

foreach ($posts as $post) {

    if ($contador == 10) {
        break;
    }

    echo "<h3>" . $post["id"] . " - " . htmlspecialchars($post["title"]) . "</h3>";
    echo "<p>" . htmlspecialchars($post["body"]) . "</p>";

    $contador++;
}

if (isset($_POST["buscar"])) {

    $pais = trim($_POST["pais"]);

    $url = "https://restcountries.com/v3.1/name/$pais";

    $resposta = file_get_contents($url);

    $dados = json_decode($resposta, true);

    if (!$dados) {
        echo "País não encontrado.";
    } else {

        $pais = $dados[0];

        echo "Nome: " . htmlspecialchars($pais["name"]["official"]) . "<br>";
        echo "Capital: " . htmlspecialchars($pais["capital"][0]) . "<br>";
        echo "Região: " . htmlspecialchars($pais["region"]) . "<br>";
        echo "População: " . htmlspecialchars($pais["population"]) . "<br>";

        echo "<img src='" . $pais["flags"]["png"] . "' width='200'>";
    }
}


?>

<form method="POST">
    País: <input type="text" name="pais">
    <button name="buscar">Buscar</button>
</form>

<?php

$url = "https://jsonplaceholder.typicode.com/users";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($curl);

curl_close($curl);
$dados = json_decode($resposta, true);
foreach ($dados as $usuario) {
    echo $usuario["name"] . "<br>";
}



$url = "https://jsonplaceholder.typicode.com/users";

$resposta = file_get_contents($url);

$usuarios = json_decode($resposta, true);

file_put_contents("usuarios_api.json", json_encode($usuarios, JSON_PRETTY_PRINT));

echo "Dados salvos!";

?>