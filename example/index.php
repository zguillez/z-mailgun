<?php
require 'vendor/autoload.php';
//----------------------------
$mail = new Z\Mailgun('m.mydomain.com', 'key-****************************');
$result = $mail->send("no_reply@mydomain.com", "dummy@gmail.com", "[test] z-mailgun", "this is a test...");
var_dump($result);