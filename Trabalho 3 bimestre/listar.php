<html>

<head>
    <title> Listagem de Produtos</title>
</head>

<body>
    <h1>Listagem de Produtos</h1>


    <?php
    include "conexao.php";
    $selbanco = mysqli_query($conexao, "SELECT * FROM 
db_produtos ORDER BY produto");
    while ($l = mysqli_fetch_array($selbanco)) {
        $codigo = $l['codigo'];
        $produto = $l['produto'];
        $marca = $l['marca'];
        $preco = $l['preco'];

        echo "<strong>codigo:</strong> $codigo <br />";
        echo "<strong>produto:</strong> $produto<br />";
        echo "<strong>marca:</strong> $marca <br />";
        echo "<strong>preco:</strong> $preco <br />";
        echo "<hr></hr>";
    }
    ?>
</body>

</html>