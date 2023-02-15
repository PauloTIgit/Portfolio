<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['menssagem'];
//Esse será o e-mail que enviara a mensagem para o destinatario.
$to = "email@email.com";
$subject = "Portfolio ";

$menssage ="
    <h2>Menssagem do Portfólio</h2>
    <p>Intereçado nos serviços.</p>
    <p><strong>Nome:</strong> $nome</p>
    <p><strong>E-mail:</strong> $email</p>
    <p><strong>menssagem:</strong>:$msg </p>
    <h4>Portfólio Paulo Ferreira</h4>
";


$headers ="MIME-Version: 1.0" . "\r\n";
$headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .='From: <pauloferreiradevs@gmail.com>' . "\r\n";

mail($to, $subject, $menssage, $headers);

include("index.php");

?>
