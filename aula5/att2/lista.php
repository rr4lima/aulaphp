<?php

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