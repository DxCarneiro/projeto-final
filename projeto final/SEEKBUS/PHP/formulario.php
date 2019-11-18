<?php

$para = "miramakerscontact@gmail.com";

$nome = $_POST['nome'];
$email = $_POST['email'];

$email = $_POST['email'];

$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem = "<strong>Email:  </strong>".$email;
$mensagem .= "<br>  <strong>Mensagem: </strong>"
.$_POST['mensagem'];
 

$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n"; 

$headers .= "X-Sender:  <sistema@dominio.com.br>\n"; 

$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <sistema@dominio.com.br>\n"; 

$headers .= "MIME-Version: 1.0\n";

header('Location: https://seekbus.000webhostapp.com/formularioSeekBus.html');
 
mail($para,  $nome, $mensagem,  $headers);
?>

