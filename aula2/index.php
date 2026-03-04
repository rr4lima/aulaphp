<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php require_once "dados.php"; ?> 
     <link rel="stylesheet" href="style.css">
    <title>Aula 2</title>
</head>

<body>
    <div class="card">
        <?php
        echo "Nome: " . $nome . " | Idade: " . $idade . " | Cidade: " . $cidade;
        ?>

        <p><?php echo $mensagem; ?></p>

        <?php echo $cauculoMsg; ?>

        <?php echo comparacao($n1, $n2); ?>
        <br>

        <?php echo idade($idade); ?>
        <br>

        <?php echo nota($nota); ?>
        <br>

        <?php echo incremento($numero); ?>
        <br>

        <?php echo tabuada($tabuada); ?>
        <br>

        <?php foreach ($nomes as $nome) {
            echo "Nome: $nome <br>";
        }
        ?>
        <br>

        <?php echo "O resultado da soma é: $soma"; ?>
        <br>
        <br>
        <?php echo "A média das notas é: " . media($notas); ?>
        <br>


    </div>

</body>

</html>