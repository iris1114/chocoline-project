<?php
$order_no = $_POST["order_no"];
$shipping_status =$_POST["shipping_status"];
echo $shipping_status;


$msg = $errMsg = "";
try{
    require_once("../../common/php/connect_choco.php");
    $sql="update order_master set shipping_status = :shipping_status where order_no= :order_no";

    $update = $pdo->prepare($sql);
    $update->bindValue(":shipping_status",$shipping_status);
    // $update->bindValue(":payment_status",$payment_status);
    $update->bindValue(":order_no",$order_no);
    $update->execute();
    header("location:../back_end.php");
} catch (PODException $e){
	$errMsg = "錯誤原因:".$e->getMesage()."<br>"."錯誤行號:".$e->getLine()."<br>";
} 
?>