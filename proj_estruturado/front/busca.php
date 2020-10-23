<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="busca.php" method="post">
		<input type="text" name="busca" placeholder="nome">
		<input type="submit" name="submit" value="Buscar"><br><br><br>
	</form>
<table width="100%">
	<tr>
	<td>NOME</td>
<?php
include_once("../back/conexao.php");
if(isset($_POST["submit"])){

	$nome = $_POST["busca"];
	//estrutura para fazer uma busca: SELECT *campo* FROM *nome_da_tabela* WHERE *campo* like ''
	//podemos usar o sinal igual(=) quando estamos trabalhando com coisas exatas, mas quando se trata do like ele tem condições especificas mto uteis
	//no like podemos usar dentro das aspas '%$nome' ou '$nome%' ou '%$nome%'
	$busca = mysqli_query($mysqli, "SELECT nome FROM registro WHERE nome='$nome'");
	while($var = mysqli_fetch_array($busca)) { 		
		echo "<tr>";
		echo "<td align='center'>".$var['nome']."</td>";
	}
}
?>
</table>
</body>
</html>