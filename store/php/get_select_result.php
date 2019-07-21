<?php
$select_data = $_REQUEST["select_data"];
// $select_range = $_REQUEST["select_range"];
// echo json_encode($select_range);
// exit();
$select_data_arr =explode(",", $select_data);

$select_str = implode(" AND ",$select_data_arr);


$errMsg = "";
// 連線資料庫
try{

  require_once("../../common/php/connect_choco.php"); 
  $sql = "select * from classic_product where $select_str";
  $products = $pdo->prepare($sql);



  $products->execute();
  $prodRow = $products->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($prodRow);
}catch(PDOException $e){
  $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
  $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";
}

?>  