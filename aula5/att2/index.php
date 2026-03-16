<?php
$mensagem = "";

if (isset($_POST["cadastrar"])) {

    $nome = trim($_POST["nome"]);
    $idade = trim($_POST["idade"]);
    $curso = trim($_POST["curso"]);

    if ($nome == "" || $idade == "" || $curso == "") {
        $mensagem = "Preencha todos os campos.";
    } else {

        $aluno = [
            "nome" => $nome,
            "idade" => $idade,
            "curso" => $curso
        ];

        $arquivo = "alunos.json";

        if (file_exists($arquivo)) {
            $conteudo = file_get_contents($arquivo);
            $alunos = json_decode($conteudo, true);
        } else {
            $alunos = [];
        }

        $alunos[] = $aluno;

        file_put_contents($arquivo, json_encode($alunos, JSON_PRETTY_PRINT));

        $mensagem = "Aluno cadastrado com sucesso!";
    }
}

?>

<form method="POST">

    Nome: <input type="text" name="nome"><br><br>
    Idade: <input type="number" name="idade"><br><br>
    Curso: <input type="text" name="curso"><br><br>

    <button type="submit" name="cadastrar">Cadastrar</button>

</form>

<?php
if ($mensagem != "") {
    echo "<p>" . htmlspecialchars($mensagem) . "</p>";
}


$arquivo = "alunos.json";
$alunos = [];

if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    $alunos = json_decode($conteudo, true);

    if (!$alunos) {
        $alunos = [];
    }
}

?>

<h2>Alunos Cadastrados</h2>

<?php

if (!empty($alunos)) {

    foreach ($alunos as $aluno) {

        echo "Aluno: " . $aluno["nome"] . "<br>";
        echo "Idade: " . $aluno["idade"] . "<br>";
        echo "Curso: " . $aluno["curso"] . "<br>";
        echo "<hr>";
    }

} else {
    echo "Nenhum aluno cadastrado.";
}

?>

