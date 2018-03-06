<?php
  include "conecta.php";
  $usuario=$_REQUEST["usuario"];//nome da variavel no html
  $senha=$_REQUEST["senha"];//nome da variavel no html
  $consulta="Select * from usuarios where usuario='$usuario' and senha='$senha'";
  $resultado=mysqli_query($link, $consulta)or die ("Erro no select");
  
  if (mysqli_num_rows($resultado)>0)			
         header('Location: index.htm');// troca a pagina
  else
  {
		echo "Senha invalida <br>";
		echo "<a href='index.html'>Voltar";
   }
mysqli_close($link);
?>