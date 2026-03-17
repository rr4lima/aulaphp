<link rel="stylesheet" href="style.css">
<?php

$url = "https://jsonplaceholder.typicode.com/users";

$resposta = file_get_contents($url);

$usuarios = json_decode($resposta, true);

?>

<h2>Usuários</h2>

<?php

if ($usuarios) {

    foreach ($usuarios as $usuario) {

        echo "<div class='caixa'>";

        echo "Nome: " . htmlspecialchars($usuario["name"]) . "<br>";
        echo "Email: " . htmlspecialchars($usuario["email"]) . "<br>";
        echo "Telefone: " . htmlspecialchars($usuario["phone"]) . "<br>";
        echo "Cidade: " . htmlspecialchars($usuario["address"]["city"]) . "<br>";

        echo "</div>";

    }

} else {

    echo "Erro ao consultar a API.";

}

?>