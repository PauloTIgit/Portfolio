<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['menssagem'];

//$to = "suporte@paulodevelop.com.br";
$to = "pauloferreiradevs@gmail.com";
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

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Desenvolvedor Web">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/email.css">
</head>

<body>
        <div class="container-modal">
            <div class="modal">
                <h3 class="text">Email enviado com <span>Sucesso</span> !</h3>
                <br>
                <p class="text">Informações enviadas</p>
                <div class="info">
                <p>Obrigado pela mensagem entraremos em contato.</p>
                </div>
                <div class="contaoner-link">
                    <a href="./index.html" class="neon">Voltar</a>
                </div>
            </div>
        </div>

</body>

</html>