<?php
session_start();

$total = 10;

if(!isset($_SESSION["pergunta"])){
    $_SESSION["pergunta"] = 1;
}

$pergunta = $_SESSION["pergunta"];

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST["nome"])){
        $_SESSION["nome"] = $_POST["nome"];
    }

    if(isset($_POST["resposta"])){
        $_SESSION["p".$pergunta] = $_POST["resposta"];
    }

    if(isset($_POST["proximo"])){
        $_SESSION["pergunta"]++;
    }

    if(isset($_POST["voltar"])){
        $_SESSION["pergunta"]--;
    }

    if(isset($_POST["resultado"])){

        if(isset($_POST["resposta"])){
            $_SESSION["p".$pergunta] = $_POST["resposta"];
        }

        header("Location: resultado.php");
        exit();
    }

    header("Location: quiz.php");
    exit();
}

$pergunta = $_SESSION["pergunta"];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Quiz</title>
</head>

<body>

<div class="container">

<h1>Pergunta <?php echo $pergunta; ?> de <?php echo $total; ?></h1>

<form method="POST">

<?php

switch($pergunta){

case 1:
echo '
<p>Qual é o seu nome?</p>
<input type="text" name="nome" required>

<br><br>

<p>Qual atividade você prefere?</p>

<label><input type="radio" name="resposta" value="frontend" required> Criar sites</label><br>
<label><input type="radio" name="resposta" value="backend"> Programar sistemas</label><br>
<label><input type="radio" name="resposta" value="games"> Criar jogos</label><br>
<label><input type="radio" name="resposta" value="dados"> Analisar dados</label>
';
break;

case 2:
echo '
<p>Qual linguagem parece mais interessante?</p>

<label><input type="radio" name="resposta" value="frontend" required> HTML/CSS</label><br>
<label><input type="radio" name="resposta" value="backend"> PHP</label><br>
<label><input type="radio" name="resposta" value="games"> C#</label><br>
<label><input type="radio" name="resposta" value="dados"> Python</label>
';
break;

case 3:
echo '
<p>Você prefere trabalhar com:</p>

<label><input type="radio" name="resposta" value="frontend" required> Layout</label><br>
<label><input type="radio" name="resposta" value="backend"> Banco de dados</label><br>
<label><input type="radio" name="resposta" value="games"> Personagens</label><br>
<label><input type="radio" name="resposta" value="dados"> Algoritmos</label>
';
break;

case 4:
echo '
<p>Qual parece mais divertido?</p>

<label><input type="radio" name="resposta" value="frontend" required> Criar interfaces</label><br>
<label><input type="radio" name="resposta" value="backend"> Resolver bugs</label><br>
<label><input type="radio" name="resposta" value="games"> Criar fases</label><br>
<label><input type="radio" name="resposta" value="dados"> Analisar gráficos</label>
';
break;

case 5:
echo '
<p>O que mais te atrai na tecnologia?</p>

<label><input type="radio" name="resposta" value="frontend" required> Design</label><br>
<label><input type="radio" name="resposta" value="backend"> Estrutura</label><br>
<label><input type="radio" name="resposta" value="games"> Criatividade</label><br>
<label><input type="radio" name="resposta" value="dados"> Inteligência artificial</label>
';
break;

case 6:
echo '
<p>Qual ferramenta parece mais legal?</p>

<label><input type="radio" name="resposta" value="frontend" required> Figma</label><br>
<label><input type="radio" name="resposta" value="backend"> MySQL</label><br>
<label><input type="radio" name="resposta" value="games">NetBeansy</label><br>
<label><input type="radio" name="resposta" value="dados">Vscode</label>
';
break;

case 7:
echo '
<p>Você prefere:</p>

<label><input type="radio" name="resposta" value="frontend" required> Cores e layouts</label><br>
<label><input type="radio" name="resposta" value="backend"> Lógica</label><br>
<label><input type="radio" name="resposta" value="games"> Histórias</label><br>
<label><input type="radio" name="resposta" value="dados"> Estatísticas</label>
';
break;

case 8:
echo '
<p>Qual frase você concorda mais?</p>

<label><input type="radio" name="resposta" value="frontend" required> Design é essencial</label><br>
<label><input type="radio" name="resposta" value="backend"> Estrutura é tudo</label><br>
<label><input type="radio" name="resposta" value="games"> Jogos são arte</label><br>
<label><input type="radio" name="resposta" value="dados"> Dados revelam padrões</label>
';
break;

case 9:
echo '
<p>Qual dessas áreas te atrai?</p>

<label><input type="radio" name="resposta" value="frontend" required> UX/UI</label><br>
<label><input type="radio" name="resposta" value="backend"> APIs</label><br>
<label><input type="radio" name="resposta" value="games"> Game engines</label><br>
<label><input type="radio" name="resposta" value="dados"> Machine learning</label>
';
break;

case 10:
echo '
<p>Qual frase te define?</p>

<label><input type="radio" name="resposta" value="frontend" required> Amo criar interfaces</label><br>
<label><input type="radio" name="resposta" value="backend"> Amo resolver problemas</label><br>
<label><input type="radio" name="resposta" value="games"> Amo criar mundos</label><br>
<label><input type="radio" name="resposta" value="dados"> Amo descobrir padrões</label>
';
break;

}

?>

<br><br>

<?php if($pergunta > 1){ ?>
<button type="submit" name="voltar">⬅ Pergunta anterior</button>
<?php } ?>

<?php if($pergunta < $total){ ?>
<button type="submit" name="proximo">Próxima ➜</button>
<?php } else { ?>
<button type="submit" name="resultado">Ver Resultado</button>
<?php } ?>

<br><br>

<a href="index.php" class="btn-voltar">Voltar à página inicial</a>

</form>

</div>

</body>
</html>