<?php
$mem_no = $_REQUEST["mem_no"];
$classic_product_no= $_REQUEST["classic_product_no"];
$errMsg = "";
// 連線資料庫
try{
  require_once("../../common/php/connect_choco.php"); 

  $sql ="INSERT INTO favorites (favorites_no, mem_no, contest_no, classic_product_no)
  VALUES ('', ':mem_no', '', ':classic_product_no')";
//   $sql = "update favorites SET number_votes = number_votes+1 WHERE mem_no = :mem_no";
  $products = $pdo->prepare($sql);
  $products->bindValue(":mem_no", $mem_no);
  $products->bindValue(":classic_product_no", $classic_product_no);
  $products->execute();

//   $prodRow = $products->fetchAll(PDO::FETCH_ASSOC);
//   echo json_encode($prodRow);
}catch(PDOException $e){
  $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
  $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";
}


?>  