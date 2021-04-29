<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "SEUEMAIL";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "Nome:  ".$nome;
$mensagem .= "     Assunto: SEUASSUNTO"
.$_POST['message'];
$_POST['email'];
$_POST['phone'];

//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "     Nome: " .$nome;
$headers .= "     Email: " .$email;
$headers .= "     Celular: " .$phone;
$headers .= "     Tamanho: " .$message;

mail($para, $mensagem, $headers);  //função que faz o envio do email.
header ("location: ../pagamento.html"); // Redirecionamento e tempo em segundos.
?>

// by @marquinhoslpx
