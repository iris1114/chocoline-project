<?php
$mem_no = $_REQUEST["mem_no"];
$classic_product_no= $_REQUEST["p_no"];
$errMsg = "";
// 連線資料庫
try{
  require_once("../../common/php/connect_choco.php"); 

  $sql ="DELETE from favorites where mem_no=:mem_no AND classic_product_no=:classic_product_no";
  $favorites = $pdo->prepare($sql);
  $favorites->bindValue(":mem_no", $mem_no);
  $favorites->bindValue(":classic_product_no", $classic_product_no);
  $favorites->execute();

//   $prodRow = $products->fetchAll(PDO::FETCH_ASSOC);
//   echo json_encode($prodRow);
}catch(PDOException $e){
  $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
  $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";
}


?>  