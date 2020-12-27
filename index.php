<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

//var_dump($email);

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "rogarfil@gmail.com", "Gmail Mandou", "rogarfil@yahoo.com.br", "Rogarfil");

var_dump($novoEmail);