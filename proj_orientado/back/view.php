<?php
    include_once('mysql.php');
    
    $mysql = new MySQL();

    $listar = $mysql->order_by('nome','ASC')->get('registro');

?>

