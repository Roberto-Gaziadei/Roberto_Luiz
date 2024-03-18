<?php
include("conecta.php");
$id_produto = $_GET['id_produto'];
$sql = "DELETE FROM produto WHERE id_produto = $id_produto";
    mysqli_query($conexao,$sql);
    header("location: listar.php");
?>