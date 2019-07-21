<?php
session_start();
$imgPath = "../image/custom_img";  //照片路徑
if (!file_exists($imgPath)) { 
  echo"no"; //檢查資料夾存不存在
  mkdir($imgPath);
}

$custName = $_POST['cust_name_data'];
$custPrice = $_POST['cust_price_data'];
$imgDataStr = $_POST['hidden_data']; //收到convas.toDataURL()送來的資料
$imgDataStr = str_replace('data:image/png;base64,', '', $imgDataStr); //將檔案格式的資訊拿掉
$imgDataStr = str_replace(' ', '+', $imgDataStr);
$data = base64_decode($imgDataStr);
echo '$imgDataStr--->' . $data;
//準備好要存的filename
$fileName = date("Ymd");  //time()
// $fileName = session_id();
$file = $imgPath . $fileName . uniqid() . ".png";
$success = file_put_contents($file, $data);
$memNo = $_SESSION["memNo"];

try {
  require_once("connectBooks.php");

  $sql = "insert into custprod (memId, prodPrice, imgPath, prodName,attend ) values (:memId,:prodPrice,:imgPath,:prodName,:attend)";


  $custProd = $pdo->prepare($sql);
  $custProd->bindValue(':memId', $memNo);
  $custProd->bindValue(':prodPrice', $custPrice);
  $custProd->bindValue(':imgPath', $file);
  $custProd->bindValue(':prodName', $custName);
  $custProd->bindValue(':attend', 0);
  // $custProd->bindValue(':ctoPrice', $ctoPrice);
  $custProd->execute();

  // 判斷sql命令執行結果
  if ($custProd) {
    // 成功寫入資料庫

    // 取得寫入資料的編號（會員編號）
    $custProdNo = $pdo->lastInsertId();
    // 寫入 session
    $_SESSION["custProdName"] = $custName;
    $_SESSION["custProdrice"] = $custPrice;
    $_SESSION["custImgPath"] = $file;
    // $_SESSION["memPsw"] = $psw;
    // $_SESSION["tel"] = $tel;
    // $_SESSION["address"] = $address;
    // $_SESSION["memPhoto"] = $memRow["memPhoto"];
    // $_SESSION["memPhoto"] = "";

    // 回傳資料給 js
    // $response["success"] = "1";
    // $response["mesg"] = "" . $name;
  } else {
    echo "幹，寫不進去";
  }
  //  else {
  // $response["success"] = "0";
  // $response["mesg"] = "寫入資料庫錯誤";
  // }
} catch (PDOException $e) {
  $errMsg .= "錯誤訊息:" . $e->getMessage() . "<br>";
  $errMsg .= "行數:" . $e->getLine() . "<br>";
  echo $errMsg;
};


// $_SESSION["choTmpName"] = $file;
// echo $success ? $file : 'error';
// echo "123";
