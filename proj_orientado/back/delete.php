<?php

include_once('mysql.php');

$codigo = $_GET['codigo'];

    $mysql = new MySQL();

 	$mysql->where('codigo', $codigo)->delete('registro');
    echo "<script>javascript:window.location.replace('../front/visualizar.php');</script>";   

?>