<?php
include('conecta.php');
$Codigo=$_REQUEST['Codigo'];
$Nome=$_REQUEST['Nome'];
$Descricao=$_REQUEST['Descricao'];
$Alugado=$_REQUEST['Alugado'];
$Status=$_REQUEST['Status'];
$Preco=$_REQUEST['Preco'];

$alterar="update equipamentos SET Codigo='$Codigo', Nome='$Nome', Descricao='$Descricao', 
			Alugado=$Alugado, Status=$Status, Preco=$Preco where Codigo='$Codigo'";

$resultado=mysqli_query($link,$alterar)
or die("Erro no Update");

header("location:index.php");

?>