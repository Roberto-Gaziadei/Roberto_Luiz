<?php
    include("conecta.php");
$nome = $_GET['nome'];
$quantidade= $_GET['quantidade'];
    $sql = "INSERT INTO produto (quantidade, nome) VALUES ($quantidade, '$nome')";
        header("location: listar.php");
        mysqli_query($conexao, $sql);

?>