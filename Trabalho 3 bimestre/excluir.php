</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Clientes</title>
</head>

<body>

    <?php

    include "conexao.php";
    $selbanco = mysqli_query($conexao, "SELECT * FROM db_produtos ORDER BY codigo");
    while ($l = mysqli_fetch_array($selbanco)) {
        $vcodigo = $l['codigo'];
        $produto = $l['produto'];
        $marca = $l['marca'];
        $preco = $l['preco'];

        echo "<strong>Codigo:</strong> $vcodigo <br />";
        echo "<strong>Produto:</strong> $produto <br />";
        echo "<strong>Marca:</strong> $marca <br />";
        echo "<strong>Preco:</strong> $preco <br />";
        echo "<a href=apagar.php?Codigo=$vcodigo> Excluir </a>";
        echo "<hr></hr>";
    }
    ?>

</body>

</html>