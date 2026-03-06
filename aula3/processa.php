<link rel="stylesheet" href="style2.css">


<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];

echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";

if ($nome == "") {
    echo "O campo nome é obrigatório.<br>";
}

if ($idade == "") {
    echo "O campo idade é obrigatório.<br>";
}

if ($idade < 18) {
    echo "Você é menor de idade.<br>";
} else {
    echo "Você é maior de idade.<br>";
}

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

echo "Soma: " . ($n1 + $n2) . "<br>";

$opcao = $_POST["operacoes"];

$soma = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;
$divisao = $n1 / $n2;

if ($opcao == "soma") {
    echo "Resultado da soma: " . $soma . "<br>";
} elseif ($opcao == "subtracao") {
    echo "Resultado da subtração: " . $subtracao . "<br>";
} elseif ($opcao == "multiplicacao") {
    echo "Resultado da multiplicação: " . $multiplicacao . "<br>";
} elseif ($opcao == "divisao") {
    echo "Resultado da divisão: " . $divisao . "<br>";
} else {
    echo "Operação inválida.<br>";
}

$cidades = $_POST["cidades"];

if ($cidades == "sapucaia") {
    echo "$nome mora na cidade de Sapucaia.<br>";
} elseif ($cidades == "esteio") {
    echo "$nome mora na cidade de Esteio.<br>";
} elseif ($cidades == "sao_leopoldo") {
    echo "$nome mora na cidade de São Leopoldo.<br>";
} elseif ($cidades == "porto_alegre") {
    echo "$nome mora na cidade de Porto Alegre.<br>";
} else {
    echo "Cidade inválida.<br>";
}

$numero = $_POST["numero"];

if ($numero % 2 == 0) {
    echo "O número $numero é par.<br>";
} else {
    echo "O número $numero é impar.<br>";
}

$checkbox = $_POST["opcoes"];

if (!isset($_POST["opcoes"])) {
    echo "Selecione pelo menos uma opção.<br>";
    echo '<button type="button" onclick="window.location.href=\'index.php\'">Voltar</button>';
} else {
    echo "Opções selecionadas: ";

    foreach ($checkbox as $opcao) {
        echo $opcao . ", ";
    }
}

?>

<button type="button" onclick="window.location.href='index.php'">Voltar</button>