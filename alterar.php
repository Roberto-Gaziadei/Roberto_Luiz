<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário

$nome = $_POST['nome'];
$id_produto = $_POST['idproduto'];
$quantidade = $_POST['quantidade'];




$sql = "UPDATE produto SET nome = $nome, quantidade = $quantidade
WHERE id_produto = $id_produto";

// executa o comando no BD
mysqli_query($conexao,$sql);
?>