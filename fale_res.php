<?php 
//email 
$msg = "<font face=’Verdana’ size=’4'><b>Nome:</b> \t $_POST[nome]</font><br>";
$msg .= "<font face=’Verdana’ size=’4'><b>E-mail</b> \t$_POST[email]</font><br>";
$msg .= "<font face=’Verdana’ size=’4'><b>Telefone</b> \t$_POST[telefone]</font><br>";
$msg .= "<font face=’Verdana’ size=’4'><b>Celular</b> \t$_POST[celular]</font><br>";
$msg .= "<font face=’Verdana’ size=’4'><b>Mensagem</b> \t$_POST[mensagem]</font><br>";






$mensagem = "$msg";
$remetente = "contato@somec.org.br";
$destinatario = "$_POST[destino]";
$assunto = "$_POST[assunto]".date("d/m/Y");
$headers = "From: ".$remetente."\nContent-type: text/html"; # o ‘text/html’ é o tipo mime da mensagem
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: contato@somec.org.br\r\n"; // remetente
$headers .= "Return-Path: contato@somec.org.br\r\n";
# o ‘text/html’ é o tipo mime da mensagem

 if(!mail($destinatario, $assunto, $mensagem, $headers ,"-r".$remetente)){ // Se for Postfix
    $headers .= "Return-Path: " . $remetente . $quebra_linha; // Se "não for Postfix"
    mail($destinatario, $assunto, $mensagem, $headers );
} 





echo "<script> document.location.href='contatos.php?var=1'; 
</script>";

?>