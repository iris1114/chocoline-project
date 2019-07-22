<?php
session_start();
$errMsg = "";
// 連線資料庫
try{
  require_once("../../common/php/connect_choco.php");

  // $mem_no = $_REQUEST["mem_no"];
  $contest_no = $_REQUEST["contest_no"];

  $sql ="DELETE from favorites where mem_no=:mem_no AND contest_no =:contest_no";
  $favorites = $pdo->prepare($sql);
  $favorites->bindValue(":mem_no", $_SESSION{"mem_no"});
  // $favorites->bindValue(":mem_no", $mem_no);
  $favorites->bindValue(":contest_no", $contest_no);
  $favorites->execute();

//   $prodRow = $products->fetchAll(PDO::FETCH_ASSOC);
//   echo json_encode($prodRow);
}catch(PDOException $e){
  $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
  $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";
}


?>  