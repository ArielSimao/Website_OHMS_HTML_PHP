<?php
include('conecta.php');
$Codigo=$_REQUEST['Codigo'];
$Nome=$_REQUEST['Nome'];
$Descricao=$_REQUEST['Descricao'];
$Alugado=$_REQUEST['Alugado'];
$Status=$_REQUEST['Status'];
$Preco=$_REQUEST['Preco'];

$resultado=mysqli_query($link,$inserir)
or die("Erro no insert");
header('location:index.php');
?>