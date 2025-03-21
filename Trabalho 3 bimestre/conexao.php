<?php
    $host="localhost";
    $user="root";
    $pass="";
    $banco="bd_cad_produtos";
    $conexao=mysqli_connect($host, $user, $pass, $banco);
    mysqli_select_db($conexao, $banco);
?> 