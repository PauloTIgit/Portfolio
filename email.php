<?php
$to = "suporte@paulodevelop.com.br";
$subject = "Portfólio";

$menssage ="Menssagem teste";


$headers ="MIME Version: 1.0"."\r\n";
$headers .="Content-type:text/html;charset=UTF-8"."\r\n";

$headers .='From: <pauloferreiradevs@gmail.com>'."\r\n";

mail($to, $subject, $menssage, $headers);