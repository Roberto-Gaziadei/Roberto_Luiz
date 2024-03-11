<?php

//conectar ao banco de dados.
include("conecta.php");


$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];


//comando sql.
$sql = "INSERT INTO produto (nome, quantidade)
        VALUES ('$nome', $quantidade)";
$sql = "INSERT INTO produto ( nome, quantidade)
        VALUES ($nome, $quantidade)";
 
//executar o comando sql.
mysqli_query($conexao, $sql);

?>