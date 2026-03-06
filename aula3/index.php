<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="processa.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <br>
        <label>Idade:</label>
        <input type="number" name="idade">
        <br>
        <br>
        <label>Email:</label>
        <input type="email" name="email">
        <br>
        <br>
        <input type="radio" name="gen" value="masculino">Masculino
        <input type="radio" name="gen" value="feminino">Feminino
        <br>
        <br>

        <select name="cidades" id="cidades">
            <option value="sapucaia">Sapucaia</option>
            <option value="esteio">Esteio</option>
            <option value="sao_leopoldo">São Leopoldo</option>
            <option value="porto_alegre">Porto Alegre</option>
        </select>
        <br>
        <br>
        <input type="checkbox" id="opcao1" name="opcoes[]" value="HTML">HTML
        <input type="checkbox" id="opcao1" name="opcoes[]" value="CSS">CSS
        <input type="checkbox" id="opcao1" name="opcoes[]" value="JavaScript">JavaScript
        <input type="checkbox" id="opcao1" name="opcoes[]" value="PHP">PHP
        <input type="checkbox" id="opcao1" name="opcoes[]" value="Java">Java
        <br>
        <br>
        <label>Número 1:</label>
        <input type="number" name="n1">
        <br>
        <br>
        <label>Número 2:</label>
        <input type="number" name="n2">
        <br>

        <br>
        <select name="operacoes" id="operacoes">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <br>

        <br>
        <br>
        <label>Digite um número aqui:</label>
        <input type="number" name="numero">
        <br>
        <br>

        <button type="submit">Enviar</button>


    </form>


</body>

</html>