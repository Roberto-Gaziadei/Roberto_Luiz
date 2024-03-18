<?php
include("conecta.php");
$id_produto = $_GET['id_produto'];
$nome = $_GET['nome'];
$quantidade = $_GET['quantidade'];
$sql = "UPDATE produto SET 
nome = '$nome', quantidade = '$quantidade' WHERE id_produto = $id_produto";
    mysqli_query($conexao,$sql);
        if ($conexao->error) {

    die("Falha ao editar usuário no sistema:". $conexao->error);

        }else {
    header("location: listar.php");
}
?>