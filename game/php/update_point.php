<?php
session_start();
// $memId = $_REQUEST["memId"];
// $memPsw = $_REQUEST["memPsw"];
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    $points = $_REQUEST["points"];
    $mem_Id = $_REQUEST["memId"];
    // $mem_no = $_REQUEST("mem_no");
    
    $sql = "update test_member set mem_point = mem_point + :points where mem_id = :mem_id  ";

    $mem_points = $pdo->prepare($sql); //編譯好指令
    $mem_points->bindValue(":points", $points);//代入資料
    $mem_points->bindValue(":mem_id", $mem_Id);//代入資料
    $mem_points->execute();

} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	// echo "系統暫時發生狀況，請通知系統維護人員<br>";
}
?> 
