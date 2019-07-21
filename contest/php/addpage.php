<?php
session_start();
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    

    $sql = "";
    
    $players = $pdo->prepare($sql);
    // $players->bindValue(":sort",$player_sort);//代入資料
    $players->execute();
    

    while($player = $players->fetchObject()){

    }
    


} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?> 