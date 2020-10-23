<?php
include_once("../back/update.php");
include_once("../back/mysql.php");
$codigo = $_GET['codigo'];
        $mysql = new MySQL();
        $result = $mysql->where('codigo', $codigo)->get('registro');
        $resultado = mysqli_fetch_assoc($result);
        $usuario= array($resultado['codigo'], $resultado['nome']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="nome" value="<?php echo $usuario[1];?>">
		<input type="hidden" name="codigo" value=<?php echo $_GET['codigo'];?>>
		<input type="submit" name="update">
	</form>
</body>
</html>