<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

//var_dump($email);

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "canutampp@gmail.com", "Gustavo Web", "rogarfil@hotmail.com", "Gustavo");

var_dump($novoEmail);