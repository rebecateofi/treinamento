<?php
include_once("conexao.php");

// variavel pra identificar o campo de codigo
$id = $_GET['codigo'];

// estrutura para deletar um registro: mysqli_query($mysqli, "DELETE FROM *nome_da_tabela* WHERE *nome_do_campo_para_codigo_do_registro=$variavel_do_codigo");
$delete = mysqli_query($mysqli, "DELETE FROM registro WHERE codigo=$id");

echo "<script>javascript:window.location.replace('../front/visualizar.php');</script>";   
?>