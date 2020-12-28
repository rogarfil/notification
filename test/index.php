<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

//var_dump($email);

$novoEmail = new Email(2, "smtp.gmail.com", "rxxxxxxl@gmail.com", "r1o2g3a4r", "tls",
    "587", "cxxxxxxxp@gmail.com", "Equipe Gustavo Web");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "cxxxxxxxp@gmail.com", "Gustavo Web", "rxxxxxxl@hotmail.com", "Gustavo");

var_dump($novoEmail);