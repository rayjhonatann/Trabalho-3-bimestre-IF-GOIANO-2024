<html>

<head>
    <title> editar</title>
</head>

<body>
    <?php
    include "conexao.php";
    $selbanco = mysqli_query($conexao, "SELECT * FROM db_produtos ORDER BY codigo");
    while ($l = mysqli_fetch_array($selbanco)) {


        $codigo = $l['codigo'];
        $produto = $l['produto'];
        $marca = $l['marca'];
        $preco = $l['preco'];

        echo "codigo: $codigo <br />";
        echo "produto: $produto <br />";
        echo "marca: $marca <br />";
        echo "preco:$preco <br />";

        echo "<a href=alterar.php?codigo=$codigo>Editar</a>";
        echo "<hr></hr>";
    }
    ?>
</body>

</html>