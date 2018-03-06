<HTML>
<HEAD>
 <TITLE>Cadastro de Equipamentos</TITLE>
</HEAD>
<BODY bgcolor="#000000"><font color="White">
<form action="grava.php" method="post">
      <center><H1> Cadastro de Equipamentos </H1></center> <hr><br>

      Codigo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=Codigo maxlenght=20> <p>
      Nome:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=Nome maxlenght=20> <p>
	  Descricao: &nbsp;<input type=text name=Descricao maxlenght=40> <p>
      Alugado: &nbsp;&nbsp;&nbsp;<select name=Alugado> 
			<option value=1> SIM </option>
			<option value=0> NAO </option>
	  </select><p>
	  
	  Status: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name=Status> 
			<option value=1> OK</option>
			<option value=0> Manutencao </option>
	  </select><p>
	  
	  Preco: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=double name=Preco><p>
     
<p><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type=submit value=Enviar>&nbsp &nbsp &nbsp &nbsp &nbsp
<input type=reset value=Limpar>
</form>
</BODY>
</HTML>
