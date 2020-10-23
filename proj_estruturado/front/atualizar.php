<?php
$mysqli = mysqli_connect("localhost", "root","", "exemplo");

if (isset($_POST["update"])) {
	$codigo = $_POST['codigo'];
	$nome = $_POST["nome"];
	if(empty($nome)){
		echo "<font color='red'>O campo Nome está vazio.</font><br/>";
	}else{

		
		$result = mysqli_query($mysqli, "UPDATE registro SET nome='$nome' WHERE codigo=$codigo");
		echo "<script>javascript:window.location.replace('visualizar.php');</script>";   

	}
}
?>
<?php
//obtendo codigo de url
$id = $_GET['codigo'];

//selecionando dados associados a essa codigo particular

$resu = mysqli_query($mysqli, "SELECT * FROM registro WHERE codigo=$id");

//array para os dados serem exibcodigoos
while($res = mysqli_fetch_array($resu)){

	$nome = $res['nome'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="atualizar.php" method="post">
		<input type="text" name="nome" value="<?php echo $nome;?>">
		<input type="hidden" name="codigo" value="<?php echo $_GET['codigo'];?>">
		<input type="submit" name="update">
	</form>
</body>
</html>