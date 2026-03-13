<?php

$arquivo = "usuarios.json";
if(isset($_POST["nome"])){

$nome = trim($_POST["nome"]);
$idade = trim($_POST["idade"]);
$curso = trim($_POST["curso"]);

$novoUsuario = [
    "nome" => $nome,
    "idade" => $idade,
    "curso" => $curso
];

if(file_exists($arquivo)){
$conteudo = file_get_contents($arquivo);
$usuarios = json_decode($conteudo, true);
}else{
$usuarios = [];
}

$usuarios[] = $novoUsuario;


file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT));

echo "Aluno cadastrado com sucesso!";

}


if(file_exists($arquivo)){

$conteudo = file_get_contents($arquivo);
$usuarios = json_decode($conteudo, true);

echo "<h2>Lista de alunos</h2>";

foreach($usuarios as $u){

echo "Nome: ".$u["nome"]."<br>";
echo "Idade: ".$u["idade"]."<br>";
echo "Curso: ".$u["curso"]."<br><br>";

}

}

?>
