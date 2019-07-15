<?php
$select_data = $_REQUEST["select_data"];
$select_data_arr =explode(",", $select_data);

$milk_chocolate =$select_data_arr[0];
$white_chocolate =$select_data_arr[1];
$black_chocolate =$select_data_arr[2];
$fruit =$select_data_arr[3];
$berry =$select_data_arr[4];
$nut =$select_data_arr[5];
$circle_shape =$select_data_arr[6];
$heart_shape =$select_data_arr[7];
$special_shape =$select_data_arr[8];
$exclusive =$select_data_arr[9];
$family =$select_data_arr[10];
$lover =$select_data_arr[11];
$friend =$select_data_arr[12];

// echo json_encode($fruit);


$errMsg = "";
// 連線資料庫
try{
  require_once("../connectChoco.php");
  $sql = "select * from classic_product where (milk_chocolate_class=:milk_chocolate) AND (white_chocolate_class=:white_chocolate) AND (black_chocolate_class=:black_chocolate) AND (fruit_class=:fruit)";
  $products = $pdo->prepare($sql);
  $products->bindValue(":milk_chocolate", $milk_chocolate);
  $products->bindValue(":white_chocolate", $white_chocolate);
  $products->bindValue(":black_chocolate", $black_chocolate);
  $products->bindValue(":fruit", $fruit);
//   $products->bindValue(":berry", $berry);
//   $products->bindValue(":nut", $nut);
//   $products->bindValue(":circle_shape", $circle_shape);
//   $products->bindValue("heart_shape", $heart_shape);
//   $products->bindValue(":special_shape", $special_shape);
//   $products->bindValue(":exclusive", $exclusive);
//   $products->bindValue(":family", $family);
//   $products->bindValue(":lover", $lover);
//   $products->bindValue(":friend", $friend);
  $products->execute();
  $prodRow = $products->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($prodRow);
}catch(PDOException $e){
  $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
  $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";
}



// if ($products->num_rows > 0) {
//     # code...
//     $arr = [];
//     $inc = 0;
//     while ($row = $products->fetch_assoc()) {
//         # code...
//         $jsonArrayObject = (array('lat' => $row["lat"], 'lon' => $row["lon"], 'addr' => $row["address"]));
//         $arr[$inc] = $jsonArrayObject;
//         $inc++;
//     }
//     $json_array = json_encode($arr);
//     echo $json_array;
// }
// else{
//     echo "0 results";
// }





?>  