<?php
include('conecta.php');
$Codigo=$_REQUEST['Codigo'];
$deletar="Delete from equipamentos where Codigo='$Codigo'";
$resultado=mysqli_query($link,$deletar)
or die("Erro no Delete");

header("location:index.php");

?>
