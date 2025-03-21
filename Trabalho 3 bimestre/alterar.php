<html>

<head>
    <title> Alteracao de Clientes</title>
</head>

<body>
    <?php
    include "conexao.php";
    $codigo = $_GET['codigo'];
    $sql = mysqli_query($conexao, "SELECT * FROM db_produtos WHERE codigo='$codigo'");
    while ($linha = mysqli_fetch_array($sql)) {

        $codigo = $linha['codigo'];
        $produto = $linha['produto'];
        $marca = $linha['marca'];
        $preco = $linha['preco'];
    }
    ?>

    <form method="post" action="validar.php">
        codigo:<input name="Codigo" type="number" readonly="readonly" value="<?php
                                                                                echo $codigo; ?>">
        <br>
        produto: <input name="Produto" type="text" value="<?php echo
                                                            $produto; ?>">
        <br>
        marca: <input name="Marca" type="text" value="<?php echo $marca; ?>">
        <br>
        preco: <input name="Preco" type="text" value="<?php echo
                                                        $preco; ?>">
        <input type="submit" value="validar">
    </form>
</body>

</html>