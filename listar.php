<?php
//conectar ao banco de dados.
include("conecta.php");

// Seleciona todos os dados da tabela historia
$sql = "SELECT * FROM historia";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);

while ($dados = mysqli_fetch_assoc($resultado)) 

?>