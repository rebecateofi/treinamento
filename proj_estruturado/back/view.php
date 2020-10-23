<?php
include_once("conexao.php");
//estrutura para visualizar todos os arquivos: mysqli_query($variavel_de_conexao, "SELECT * from *nome_da_tabela");
//select * (o asterisco indica "todos")
$query = mysqli_query($mysqli, "SELECT * FROM registro");

?>