<?php 
include_once("../back/view.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table width="100%">
	<tr>
	<td align="center">Codigo</td>
	<td align="center">Nome</td>
	<?php
	while($var = mysqli_fetch_array($listar)) { 		
		echo "<tr>";
		echo "<td align='center'>".$var['codigo']."</td>";	
		echo "<td align='center'>".$var['nome']."</td>";
		echo "<td align='center'><a href=\"atualizar.php?codigo=$var[codigo]\">Editar</a> | <a href=\"../back/delete.php?codigo=$var[codigo]\" onClick=\"return confirm('Certeza de que quer deletar?')\">Delete</a></td>";		

				
	}
	?>
	
	</table>
</body>
</html>