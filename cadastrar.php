<?php

//conectar ao banco de dados.
include("conecta.php");

//receber os dados do formulário.
/*$id = $_POST['id'];
$texto = $_POST['texto'];
$imagem = $_POST['imagem'];
$escolha1 = $_POST['escolha1'];
$texto1 = $_POST['texto1'];
$escolha2 = $_POST['escolha2'];
$texto2 = $_POST['texto2'];*/

$id_produto = $_POST['id_produto'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];


//comando sql.
$sql = "INSERT INTO robertoluiz (id_produto, nome, quantidade)
        VALUES ($id_produto, $nome, $quantidade)";
 
//executar o comando sql.
mysqli_query($conexao, $sql);

?>