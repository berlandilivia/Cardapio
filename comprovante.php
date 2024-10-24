<?php
$quantidade1 = $_POST["quantidade1"]; //X-Burguer
$quantidade2 = $_POST["quantidade2"]; //X-Jpzao
$quantidade3 = $_POST["quantidade3"]; //X-Baconese
$quantidade4 = $_POST["quantidade4"]; //Coca-Cola
$quantidade5 = $_POST["quantidade5"]; //Fanta
$quantidade6 = $_POST["quantidade6"]; //Conquista
$obs = $_POST["obs"]; //obs
$valortotal = 0.00;

if (isset($_POST["opcao1"])) {
    $valortotal += (8.50 * $quantidade1); // X-Burguer
}

if (isset($_POST["opcao2"])) {
    $valortotal += (28.90 * $quantidade2); // X-Jpzao
}

if (isset($_POST["opcao3"])) {
    $valortotal += (8.50 * $quantidade3); // X-Baconese
}

if (isset($_POST["opcao5"])) {
    $valortotal += (10.30 * $quantidade4); // Coca-Cola
}

if (isset($_POST["opcao5"])) {
    $valortotal += (8.90 * $quantidade5); // Fanta
}

if (isset($_POST["opcao6"])) {
    $valortotal += (5.30 * $quantidade6); // Conquista
}

echo "Pedido realizado com sucesso!<br>";
echo "Sua conta ficou em R$: ", $valortotal;
echo "<br> Obs: ", $obs;
echo "<br><a href= 'cardapio.html'>Voltar</a>";