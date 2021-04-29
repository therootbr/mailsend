<?php
//printf('<pre>%s</pre>',  var_export($_POST,true));
//exit;
$nome = $_POST['nome'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$ip = $_SERVER["REMOTE_ADDR"];
$hora=date("H:i:s");
$ch = @curl_init();
$cc=$cc;
$emailremetente = "SEUEMAIL";
$store = @curl_exec ($ch);
$var = $store;
$q = explode("<i>", $var);
$q2 = explode("</i>", $q[1]);
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $emailremetente\r\n";
$conteudo.="<b>IP Cliente: </b>$ip <br>"; // IP usuario
$conteudo.="<b>======== BY @MARQUINHOSLPX ========</b><br>"; // Corpo da Mensagem
$conteudo.="<b>Nome:</b> $nome<br>";
$conteudo.="<b>Email:</b> $email<br>";
$conteudo.="<b>Telefone</b> $phone<br>";
$conteudo.="<b>Tamanho:</b> $message<br>";
$conteudo.="<b>======== BY @MARQUINHOSLPX =======</b><br>";// Corpo da Mensagem
mail($emailremetente, $ip, $conteudo, $headers); 
header ("location: ../index.html"); // Redirecionamento e tempo em segundos.
?>
