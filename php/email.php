<?php
if(isset($_POST ['email'] ) && !empty($_POST['email']))
{

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mesage = addslashes($_POST['mesage']);



$to = "odadkoasoda@gmail.com";
$assunto = "Contato - Prime Franca";
$corpo =" Nome: ".$nome. "\r\n ".
        "Email: ".$email."\r\n ".
        "Mensagem: ".$mesage;
 $cabecalho= "From:vitortitz@gmail.com"."\r\n"
                ."Reply-To: ".$email."\r\n"
                ."X=MAILER:PHP/".phpversion();
 if(mail($to,$assunto,$corpo,$cabecalho)){

    echo("Email Enviado com sucesso");

 }else{
     echo("Email não pode ser enviado");
                  
 }


 }






?>