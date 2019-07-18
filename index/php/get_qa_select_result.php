<?php
$select_data = $_REQUEST["select_data"];
$select_data_arr = explode(",", $select_data);
$select_str = implode(" AND ", $select_data_arr);
$select_str2 = implode(" OR ", $select_data_arr);


$errMsg = "";
// 連線資料庫
try {

    require_once("../connectChoco.php");
    $sql = "select * from classic_product where $select_str";
    $products = $pdo->prepare($sql);
    $products->execute();
    if ($products->rowCount() == 0) {
        $sql2 = "select * from classic_product where $select_str2";
        $products2 = $pdo->prepare($sql2);
        $products2->execute();
        $prodRow2 = $products2->fetchAll(PDO::FETCH_ASSOC);
        shuffle($prodRow2);
        echo json_encode($prodRow2);
    } else {
        $prodRow = $products->fetchAll(PDO::FETCH_ASSOC);
        shuffle($prodRow);
        echo json_encode($prodRow);
    }
} catch (PDOException $e) {
    $errMsg .= "錯誤原因 : " . $e->getMessage() . "<br>";
    $errMsg .= "錯誤行號 : " . $e->getLine() . "<br>";
}
