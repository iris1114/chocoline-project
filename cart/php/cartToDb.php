<?php 
session_start();
$errMsg = "";
//檢查是否已登入取得登入者資料
if(isset($_SESSION["mem_id"]) === false){
	//尚未登入
	$_SESSION["where"] = $_SERVER["PHP_SELF"]; //記錄目前所在的位置
	//echo "<a href='login.html'>尚未登入, 請登入</a>";
	echo "<script>window.alert('尚未登入, 請登入');location.href='login.html';</script>";
	$errMsg="尚未登入";
}else{ //已登入
	try {
		require_once("connectChoco.php");//連線到資庫

		$orderMemNo = $_SESSION["mem_no"];
		$email = $_SESSION["email"];
		// $orderMemNo = 3;
		// $email = "Handsome@gmail.com";

	    //啟動交易
	    $pdo->beginTransaction();

		//寫入訂單主檔
	    //INSERT INTO `bookorder` (`orderNo`, `orderMemNo`, `orderTime`, `email`, `payStatus`) values ...
		$sql = "INSERT INTO `bookorder` (`orderNo`, `orderMemNo`, `orderTime`, `email`, `payStatus`) 
		        values (null, :orderMemNo, now(), :email, '0')";
		$products = $pdo->prepare( $sql);
		$products->bindValue(":orderMemNo", $orderMemNo);
		$products->bindValue(":email", $email);
		$products->execute();
		//取回自動創號的訂單編號
	    $orderNo = $pdo->lastInsertId();

		//寫入訂單明細
		//INSERT INTO `orderitems` (`orderNo`, `productNo`, `quantity`) VALUES
		$sql = "INSERT INTO `orderitems` (`orderNo`, `productNo`, `quantity`) VALUES ($orderNo, :productNo, :quantity)";
		$orderitems = $pdo->prepare( $sql );
		foreach( $_SESSION["qty"] as $psn =>$qty){
			$orderitems->bindValue(":productNo" , $psn);
			$orderitems->bindValue(":quantity" , $qty);
			$orderitems->execute();
		}
		$pdo->commit();

		//將購物資料自暫存區中刪除
		unset($_SESSION["pname"]);
		unset($_SESSION["price"]);
		unset($_SESSION["qty"]);

	} catch (PDOException $e) {
		   $pdo->rollBack();
	       $errMsg .=  $e->getMessage(). "<br>"; 
	       $errMsg .=  $e->getLine(). "<br>";    	
	}	

}



?> 

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
if( $errMsg !="" ){
	if( $errMsg != "尚未登入" ){
		exit($errMsg);
	}
	
}else{
	echo "<center>下訂成功,您的訂單編號為 $orderNo</center>";
}

?>


<center><a href="prodList.php">繼續瀏覽</a></center>
</body>
</html>