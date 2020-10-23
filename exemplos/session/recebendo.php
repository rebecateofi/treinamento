<?php
session_start();
echo $_SESSION["oi"];
//para chamar uam session nos temos que startar ela no topo do codigo e chamar ela desse jeito $_SESSION["nome_que _vc_deu"]
session_destroy();
?>