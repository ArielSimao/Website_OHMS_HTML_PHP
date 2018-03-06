<?php
$link=mysqli_connect("localhost","root","root")
or die ("Não conectei no mysql");
mysqli_select_db($link,"ohms")//nome do banco de dados
or die ("Nâo achei o banco");
?>