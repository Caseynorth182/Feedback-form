<?php
require_once "rb.php";

define('DRIVER','mysql');
define('HOST','localhost');
define('DB_NAME','test_1');
define('LOGIN','root');
define('PASS','root');

$conn = R::setup(DRIVER.':host='.HOST.';dbname='.DB_NAME,LOGIN,PASS);

