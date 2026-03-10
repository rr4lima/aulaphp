<?php
session_start();

$nome = $_SESSION['nome'];

$respostas = [
$_SESSION['p1'] ?? null,
$_SESSION['p2'] ?? null,
$_SESSION['p3'] ?? null,
$_SESSION['p4'] ?? null,
$_SESSION['p5'] ?? null,
$_SESSION['p6'] ?? null,
$_SESSION['p7'] ?? null,
$_SESSION['p8'] ?? null,
$_SESSION['p9'] ?? null,
$_SESSION['p10'] ?? null
];

$frontend = 0;
$backend = 0;
$games = 0;
$dados = 0;

foreach($respostas as $r){

if($r == "frontend"){ $frontend++; }
if($r == "backend"){ $backend++; }
if($r == "games"){ $games++; }
if($r == "dados"){ $dados++; }

}

if($frontend >= $backend && $frontend >= $games && $frontend >= $dados){

$perfil = "🧑‍🎨 Ninja do Front-end";
$desc = "Você adora criar interfaces bonitas e funcionais.";
$img = "img/frontend.png";

}

elseif($backend >= $frontend && $backend >= $games && $backend >= $dados){

$perfil = "🛠️ Arquiteto do Código";
$desc = "Você gosta da lógica por trás dos sistemas.";
$img = "img/backend.png";

}

elseif($games >= $frontend && $games >= $backend && $games >= $dados){

$perfil = "🎮 Criador de Mundos";
$desc = "Jogos são sua paixão.";
$img = "img/games.png";

}

else{

$perfil = "🤖 Mestre dos Dados";
$desc = "Você ama analisar informações e encontrar padrões.";
$img = "img/dados.png";

}

setcookie("jogador",$nome,time()+3600);

$arquivo = "contador.txt";

$contador = file_get_contents($arquivo);
$contador++;

file_put_contents($arquivo,$contador);

$_SESSION = [];
$_SESSION["pergunta"] = 1;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Resultado</title>
</head>

<body>

<div class="container">

<h1>Resultado do Quiz</h1>

<p>Jogador: <?php echo $nome; ?></p>

<h2><?php echo $perfil; ?></h2>

<img src="<?php echo $img; ?>" width="250">

<p><?php echo $desc; ?></p>

<p>🎯 Este quiz já foi jogado <?php echo $contador; ?> vezes!</p>

<a href="index.php">
<button>Jogar novamente</button>
</a>

</div>

</body>
</html>