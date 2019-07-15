<?php
session_start();
// $memId = $_REQUEST["memId"];
// $memPsw = $_REQUEST["memPsw"];
$errMsg = "";
try {
    
    $dsn="mysql:host=localhost;port=3306;dbname=chocoline;charset=utf8";
	$user="root";
	$password="root";
	$options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);

    $points = $_REQUEST["points"];
    $mem_no = $_REQUEST["memId"];
    // $mem_no = $_REQUEST("mem_no");
    
    $sql = "update member set mem_point = mem_point + :points where mem_no = :mem_no  ";

    $mem_points = $pdo->prepare($sql); //編譯好指令
    $mem_points->bindValue(":points", $points);//代入資料
    $mem_points->bindValue(":mem_no", $mem_no);//代入資料
    $mem_points->execute();

} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	// echo "系統暫時發生狀況，請通知系統維護人員<br>";
}
?> 
