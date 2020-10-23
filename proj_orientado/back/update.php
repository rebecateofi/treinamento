<?php
    include_once('mysql.php');

        
    

    if(isset($_POST['update'])){

        $mysql = new MySQL();
        $nome = $_POST["nome"];
        $codigo = $_POST["codigo"];
        $mysql->where('codigo', $codigo)->update('registro', array('nome' => $nome));

            
    	echo "<script>javascript:window.alert('Alteração realizada com sucesso.');window.location='../front/visualizar.php';</script>";
    }
    
?>

