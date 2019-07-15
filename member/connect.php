<?php
	$dsn = "mysql:host=localhost;port=3306;dbname=popotest;charset=utf8";
	$user = "root";
	$password = "";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO( $dsn, $user, $password, $options);  
?>