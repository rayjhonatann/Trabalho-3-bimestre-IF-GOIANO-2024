<html>
<head>
<title> Consulta de produtos</title>
</head>
<body>
<?php
include "conexao.php";
$buscar = $_POST['pesquisar'];
$sql = mysqli_query($conexao, "SELECT * FROM
db_produtos WHERE codigo LIKE ".$buscar);
$row = mysqli_num_rows($sql);
if ($row > 0)
{
    while ($linha=mysqli_fetch_array($sql))
    {
        $codigo = $linha['codigo'];
        $produto = $linha['produto'];
        $marca= $linha['marca'];
        $preco= $linha['preco'];
        
        echo "<strong>codigo:</strong> $codigo <br />";
        echo "<strong>produto:</strong> $produto<br />";
        echo "<strong>marca:</strong> $marca <br />";
        echo "<strong>preco:</strong> $preco <br />";
        echo "<hr></hr>";
    }
}
else
{
    echo "produto nao encontrado...";
}
?>
</body>
</html>
__________________________________________________________________________