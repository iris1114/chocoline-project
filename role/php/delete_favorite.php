<?php
session_start();
$errMsg = "";
// 連線資料庫
try{
  require_once("../../common/php/connect_choco.php");

  $sql ="DELETE from favorites where mem_no=:mem_no AND contest_no =:contest_no";
  $favorites = $pdo->prepare($sql);
  $favorites->bindValue(":mem_no",$_SESSION["mem_no"]);
  $favorites->bindValue(":contest_no",$_SESSION["contest_no"]);
  $favorites->execute();

}catch(PDOException $e){
  $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
  $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";
}


?>  