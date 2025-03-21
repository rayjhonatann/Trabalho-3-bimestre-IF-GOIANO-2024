<?php
include "conexao.php";
$codigo = $_POST['codigo'];
$produto = $_POST['Produto'];
$marca = $_POST['Marca'];
$preco = $_POST['Preco'];

$sql = mysqli_query($conexao, "DELETE FROM db_produtos WHERE 
codigo=$codigo");
echo "excluido com sucesso!";
?>
<a href="excluir.php">Voltar</a>