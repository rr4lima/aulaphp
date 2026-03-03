<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php require_once "dados.php"; ?>
    <title>Aula PHP</title>
</head>
<body>
 <div class="card">

    <h2><?= saudacao($nome); ?></h2>

    <p>Cidade: <?= $cidade; ?></p>
    <p>Curso: <?= $curso; ?></p>

    <p><?php echo $mensagem; ?></p>

    <hr>

    <p>Ano atual: <?= $ano; ?></p>

    <?php if ($ano >= 2025): ?>
        <p>Sistema Atualizado</p>
    <?php else: ?>
        <p>Sistema Antigo</p>
    <?php endif; ?>

    <hr>
    <?php $valor = 15; ?>
    <p>O dobro de 15 é <?= dobro($valor); ?></p>

    <p>Preço do produto: R$ <?= $precoFormatado; ?></p>

    <p>Nota: <?= $nota; ?></p>
    <?php if ($nota >= 7): ?>
        <p class="aprovado">Aprovado</p>
    <?php else: ?>
        <p class="reprovado">Reprovado</p>
    <?php endif; ?>

    <hr>
    <p>Hora atual: <?= $hora; ?>h</p>

    <?php if ($hora < 12): ?>
        <p>Bom dia</p>
    <?php elseif ($hora <= 18): ?>
        <p>Boa tarde</p>
    <?php else: ?>
        <p>Boa noite</p>
    <?php endif; ?>
</div>
    
</body>
</html>