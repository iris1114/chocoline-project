<?php
session_start();
$errMsg = "";
// 連線資料庫
try{
  require_once("../../common/php/connect_choco.php"); 
  
  
  $sql ="INSERT INTO favorites(mem_no,contest_no) VALUES (:mem_no,:contest_no)";
  $favorites = $pdo->prepare($sql);
  $favorites->bindValue(":mem_no",$_SESSION["mem_no"]);
  $favorites->bindValue(":contest_no",$_SESSION["contest_no"]);
  $favorites->execute();

  echo "success";

}catch(PDOException $e){
  echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>  