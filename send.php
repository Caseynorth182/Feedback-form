<?php

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_NUMBER_INT);
$text = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);

//Для передачи ТЕМЫ письма
$subject = "=?utf-8?B?".base64_encode('Сообщение с сайта')."?=";

//
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

if(!empty($_POST['name'])){
    $success = mail('Caseynorth182@gmail.com', $subject, $message, $headers);
}

