<?php
include "conexao.php";

$codigo = $_POST['Codigo'];
$produto = $_POST['Produto'];
$marca = $_POST['Marca'];
$preco = $_POST['Preco'];

$sql = mysqli_query($conexao, "UPDATE db_produtos SET Produto='$produto', Marca='$marca',
Preco='$preco' WHERE Codigo=$codigo");
echo "alterado com sucesso!";
?>
<a href="editar.php">Voltar</a>