<?php
	$dsn = "mysql:host=localhost;port=3306;dbname=dd101g1;charset=utf8";
	$user = "dd101g1";
	$password = "dd101g1";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO( $dsn, $user, $password, $options);  
?>