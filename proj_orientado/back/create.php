<?php
include_once('mysql.php');

$nome = $_POST["nome"];
        
    if($_POST["submit"]){
    	//primeiramente instanciamos o objeto da classe mysql() que incluimos na linha 2
        $mysql = new MySQL();
        $mysql->insert('registro', array('nome' => $nome));
        echo "<script>javascript:window.alert('Cadastro realizado com sucesso.');window.location='../front/cadastro.php';</script>";
    }

?>

