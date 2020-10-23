<?php
include_once("conexao.php");
 // caso o arquivo ja tenha sido adicionado ne execução ele nao irá adicionar novamente, podendo causar algum erro.
//include(); serve para incluir um arquivo
//require vai fazer a requisição do arquivo e se ele não estiver, a página dará erro

// estrutura para inserir: INSERT INTO *nome_da_tabela* *campo* VALUES ('$campo');
//para relacionar uma query(consulta ao BD) vc deve relacionar ela a conexao com o banco de dados

//mysqli_query($variavel_da_conexao, "query"); 
if(isset($_POST["submit"])){

$nome = $_POST["nome"];	
$view = mysqli_query($mysqli, "INSERT INTO registro(nome) VALUES ('$nome')");

//para mostrar uma caixa de mensagem, não é possivel no php, entao incluimos codigo em js no php
echo "<script>alert('Cadastro completo')</script>";
//função para redirecionar para uma pagina, pode ser uma pagina de qualquer linguagem
echo "<script>javascript:window.location.replace('../front/cadastro.php');</script>";   
}

?>