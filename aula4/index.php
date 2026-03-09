<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <?php include_once "resultado.php"; ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="telaInicial">
        <header class="header">
            <nav>

                <div class="nome">
                    <h1>Inira seu nome aqui:</h1>
                    <label>Nome:</label>
                    <input type="text" name="nome">
                </div>
                <h3>Seja Bem-vindo ao Quiz de Personalidade Tecnológica!</h3>

            </nav>
        </header>

        <div id="texto">
            <h1>Qual sua personalidade técnologica?</h1>
            <span id="diferente">
                Responda o quiz abaixo e descubra!
            </span>


        </div>

        <a href="quiz.php" class="botao">Começar Quiz</a>


    </section>




</body>

</html>