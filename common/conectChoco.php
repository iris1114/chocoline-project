<?php 
   $dsn = "mysql:host=localhost;port=3306;dbname=chocoline;charset=utf8";
   $user = "root";
   $password = "";
   $options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
   $pdo = new PDO($dsn, $user, $password, $options);
?>


<!--  現在目前是使用在local端 可以自己進行測試 ，連上sever端會再更新 -->