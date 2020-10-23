<?php
session_start();
// a função do php session_start deve ser chamada sempre na primeira linha do codigo
$_SESSION["oi"] = "Ola";
//para definir uma session devemos colocar $_SESSION["nome_que_queremos dar para ela"] = *qualquer_tipo_de_variavel"
//podemos atribuir a ela uma string um int, etc e para colo dentro dos [] devemos colocar somente string, e ele deve ser diferente das outras SESSIONS q vc deseja setar
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="recebendo.php">Visualizar</a>
</body>
</html>