<?php

$nome = "João";
$idade = "18";
$cidade = "Sapiranga";
$mensagem = "Olá, meu nome é $nome, tenho $idade anos e moro em $cidade.";

$numero1 = 7;
$numero2 = 14;
$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;

$cauculoMsg = "A soma de $numero1 e $numero2 é $soma. <hr>"
    . "A subtração de $numero1 e $numero2 é $subtracao. <hr>"
    . "A multiplicação de $numero1 e $numero2 é $multiplicacao. <hr>"
    . "A divisão de $numero1 e $numero2 é $divisao. <hr>";

$n1 = 77;
$n2 = 14;

function comparacao($n1, $n2)
{
    if ($n1 > $n2) {
        return "O número $n1 é maior que o número $n2.";
    } elseif ($n1 < $n2) {
        return "O número $n1 é menor que o número $n2.";
    } else {
        return "O número $n1 é igual ao número $n2.";
    }
}

$idade = 17;

function idade($idade)
{
    if ($idade >= 18) {
        return "Você é maior de idade.";
    } else {
        return "Você é menor de idade.";
    }
}

$nota = 2;

function nota($nota)
{
    if ($nota >= 7) {
        return "Você foi aprovado.";
    } else if ($nota >= 5 && $nota < 7) {
        return "Você está de recuperação.";
    } else {
        return "Você foi reprovado.";
    }
}

$numero = 0;

function incremento($numero)
{
    for ($i = 0; $i < 10; $i++) {
        $numero++;
    }
    return "O número é: $numero.";
}


$tabuada = 7;

function tabuada($tabuada)
{
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $tabuada * $i;
        echo "$tabuada x $i = $resultado <br>";
    }

}

$nomes = array("Ana", "Carlos", "Julia", "Pedro", "Marina");
foreach ($nomes as $nome) {
}

function soma($a, $b)
{
    $resultado = $a + $b; {
        return $resultado;

        $soma = somar(7, 14);
    }
}

$notas = array(7, 8, 9, );

function media($notas)
{
    $soma = array_sum($notas);
    $quantidade = count($notas);
    $media = $soma / $quantidade;

    if ($media >= 7) {
        return "A média é $media. Você foi aprovado.";
    } else if ($media >= 5 && $media < 7) {
        return "A média é $media. Você está de recuperação.";
    } else {
        return "A média é $media. Você foi reprovado.";
    }
}

?>