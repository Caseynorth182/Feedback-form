<?php
var_dump($_POST);


$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_NUMBER_INT);
$text = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);

echo $name . '___'. $email . '___'. $phone. '___'. $text. "   ";

