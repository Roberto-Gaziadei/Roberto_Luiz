<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$id_produto = $_POST['idproduto'];



$sql = "UPDATE historia SET id_historia = $id, 
WHERE idproduto = $id_produto";

// executa o comando no BD
mysqli_query($conexao,$sql);