<?php
$nome = "Rafaela";
$cidade = "São Paulo";
$curso = "Programação Web";

$disciplina = "PHP";
$periodo = "Noturno";
$mensagem = "Você está matriculado na disciplina " . $disciplina . 
            " no período " . $periodo . ".";

function saudacao($nome) {
    return "Olá, " . $nome . "! Seja bem-vindo(a).";
}

$ano = date("Y");

function dobro($numero) {
    return $numero * 2;
}

$preco = 150;
$precoFormatado = number_format($preco, 2, ",", ".");

$nota = 8.5;

$hora = date("H");
?>