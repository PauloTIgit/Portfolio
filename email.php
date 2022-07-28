<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['menssagem'];

$to = "suporte@paulodevelop.com.br";
$subject = "Portfolio";

$menssage ="
    <h3>Menssagem do Portfólio</h3>
    <p>Intereçado nos serviços.</p>
    <ul>
    <li>Nome: $nome</li>
    <li>E-mail: $email</li>
    <li>menssagem:</li>
    <p>$msg</p>
    </ul>
";


$headers .='MIME Version: 1.0' . "\r\n";
$headers .='Content-type:text/html;charset=UTF-8' . "\r\n";

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
    <div class="box_sucesso">
        <h3 class="sucesso">Menssagem enviada com Sucesso</h3>
    </div>
    <br>
    <br>
    <div class="bnt">
        <a href="./index.html">Voltar</a>
    </div>
</body>

</html>