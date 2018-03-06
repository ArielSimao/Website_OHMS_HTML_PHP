<html>
<title>OHMS</title>
<body>
<form action="incluir.php" method="post">
<h1>Controle de Equipamentos</h1>
<p>
<table border="1">

</form>
	<?php
		include('conecta.php');
		$consulta="select * from equipamentos";
		$resultado=mysqli_query($link,$consulta)
		or die("Erro no select");
		echo"<table border=1><tr><td>CODIGO</td><td>NOME</td><td>DESCRICAO</td><td>ALUGADO</td><td>STATUS</td><td>PRECO</td><tr>";
		while ($registro=mysqli_fetch_array($resultado))
		{
			echo "<tr><td>".$registro['Codigo']."</td><td>".$registro['Nome']."</td><td>".$registro['Descricao']."</td><td>".$registro['Alugado']."</td><td>".$registro['Status']."</td><td>".$registro['Preco']."</td><td><a href='alterar.html'>Alterar</a></td><td><a href='deletar.html'>Deletar</a></td></tr>";
		}
	?>
</body>
</html>