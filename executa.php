<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  $link=mysql_connect("Localhost", "root", "" )
        or die ("Nao foi possivel conectar");
       mysql_select_db("locadora") or die ("Banco de dados nao disponivel");

                     $genero=$_REQUEST['gen'];

                     $consulta="Select fil.codfilme, fil.descfilme, ge.descgen
                                       from filmes fil inner join generos ge
                                       on fil.genero = ge.codgen
                                       where ge.codgen= '$genero'";

                     $resultado=mysql_query($consulta);

                     if (mysql_num_rows($resultado)>0)
                         {

                     echo "<table border=0>";
                     echo "<TR>";
                     echo "<td><b> CODIGO DO FILME</b></td>";
                     echo "<td><b> TITULO</b></td>";
                     echo "<td><b> GENERO </b></td>";
                     echo "</TR>";
                     while ($registro=mysql_fetch_array($resultado))
                     {
                     echo "<tr>";
                     echo "<td width=20%>" . $registro['codfilme'] . "</td>";
                     echo "<td width=20%>" . $registro['descfilm'] . "</td>";
                     echo "<td width=20%>" . $registro['descgen'] . "</td>";
                     echo "</tr>";
                     }
echo "</table>";
}
else
 echo "<h1>Nao existem filmes cadastrados para este Genero</h1>";
mysql_close($link);
?>
<p><p><br>
<a href="consulta.php"> Voltar </a>
</BODY>
</HTML>
