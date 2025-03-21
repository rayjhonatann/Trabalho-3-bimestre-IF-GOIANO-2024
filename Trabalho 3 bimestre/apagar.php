<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusao de Clientes</title>
</head>

<body>

    <h1>Exclusao de Clientes</h1>

    <?php
    include "conexao.php";

    $codigo = $_GET['Codigo'];

    $sql = mysqli_query($conexao, "SELECT * FROM db_produtos WHERE codigo='$codigo'");
    while ($linha = mysqli_fetch_array($sql)) {
        $xcodigo = $linha['codigo'];
        $xproduto = $linha['produto'];
        $xmarca = $linha['marca'];
        $xpreco = $linha['preco'];
    }
    ?>

    <form method="post" action="deletar.php">

        <label>Codigo: </label>
        <input name="codigo" type="text" readonly="readonly" value="<?php echo $xcodigo; ?>">
        <br>
        <label>Produto: </label>
        <input name="Produto" type="text" value="<?php echo $xproduto; ?>">
        <br>
        <label>Marca: </label>
        <input name="Marca" type="text" value="<?php echo $xmarca; ?>">
        <br>
        <label>Preco: </label>
        <input name="Preco" type="text" value="<?php echo $xpreco; ?>">

        <input type="submit" value="Confirmar Excluir">

    </form>

    <a href="excluir.php">Cancelar</a>
</body>

</html>