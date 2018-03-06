<HTML>
<HEAD>
 <TITLE>Consulta de Equipamentos</TITLE>
</HEAD>
<BODY>
<?php
    $link=mysqli_connect("Localhost", "root", "root" )
      or die ("Nao foi possivel conectar");
      mysqli_select_db($link,"ohms") 
	  or die ("Banco de dados nao disponivel");

                     $Codigo=$_REQUEST['Codigo'];
                     $Nome=$_REQUEST['Nome'];
                     $Descricao=$_REQUEST['Descricao'];
					 $Alugado=$_REQUEST['Alugado'];
					 $Status=$_REQUEST['Status'];
					 $Preco=$_REQUEST['Preco'];

        $consulta="Select * from Equipamentos";

                     $resultado=mysqli_query($link,$consulta)
				
                     or die ("Consulta nao disponivel");

                     echo "<center><h1> Equipamentos Cadastrados</h1></center><hr>";
					 echo "Codigo &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Nome  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp Descricao      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp Alugado      &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp Status    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Preco    <hr>";
                     $consulta="Select * from Equipamentos";

                     $resultado=mysqli_query($link,$consulta);

                     echo "<table border=0>";
                     while ($registro=mysqli_fetch_array($resultado))
                     {
                     echo "<tr>";
                     echo "<td width=20%>" . $registro['Codigo'] . "</td>";
                     echo "<td width=20%>" . $registro['Nome'] . "</td>";
                     echo "<td width=20%>" . $registro['Descricao'] . "</td>";
					 echo "<td width=20%>" . $registro['Alugado'] . "</td>";
					 echo "<td width=20%>" . $registro['Status'] . "</td>";
					 echo "<td width=20%>" . $registro['Preco'] . "</td>";
                     echo "</tr>";
                     }
echo "</table>";
mysqli_close($link);
?>
<p><p><hr>
<center><h3><a href="home.htm"> Voltar </a><h3></center>
</BODY>
</HTML>
