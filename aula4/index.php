<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Geek</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Pixelify+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">

<h1>⑅⋅˚₊‧ ୨Pink Dev Quiz୧ ‧₊˚⋅</h1>

<?php
if(isset($_COOKIE['jogador'])){
echo "<p>Bem-vinda de volta, ".$_COOKIE['jogador']." 💖</p>";
}
?>

<p>
Descubra qual tipo de desenvolvedora você seria
no universo da tecnologia!
</p>

<a href="quiz.php">
<button>Start Game</button>
</a>

</div>

</body>
</html>