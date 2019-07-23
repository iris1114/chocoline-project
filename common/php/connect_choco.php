<?php
	$dsn = "mysql:host=localhost;port=3306;dbname=dd101g1;charset=utf8";
	$user = "pokerman";
	$password = "29111129";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO( $dsn, $user, $password, $options);  
?>
