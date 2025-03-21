<h1>Cadastro de Produtos</h1>
<form method="post" action="">
    <label>codigo: </label>
    <input name="codigo" size="15" type="text">
    <br>
    <label>produto</label>
    <input name="produto" size="30" type="text">
    <br>
    <label>marca: </label>
    <input name="marca" size="30" type="text">
    <br>
    <label>preco</label>
    <input name="preco" size="30" type="text">
    <br>
    <button type="submit" name="enviar"> Cadastrar
    </button>
    <button type="submit" name="listar"> Listar
    </button>
    <button type="submit" name="buscar"> Pesquisar
    </button>
    <button type="submit" name="excluir"> Excluir
    </button>
    <button type="submit" name="editar"> Editar
    </button>
</form>
</body>

</html>
<?php
include "conexao.php";
if (isset($_POST['enviar'])):
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    $sql = mysqli_query($conexao, "INSERT INTO db_produtos(codigo, produto, marca, preco) VALUES('$codigo', '$produto','$marca' , '$preco')");
endif;
if (isset($_POST['listar'])):
    include "listar.php";
endif;
if (isset($_POST['buscar'])):
    include "pesquisar.php";
endif;
if (isset($_POST['editar'])):
    include "editar.php";
endif;
if (isset($_POST['excluir'])):
    include "excluir.php";
endif;



?>