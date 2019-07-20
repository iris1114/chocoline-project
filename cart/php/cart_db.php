<?php 
ob_start();
session_start();
$errMsg = "";

	try {
		require_once("../../common/php/connect_choco.php");

	    //啟動交易
	    $pdo->beginTransaction();

		//寫入訂單主檔
		$sql = "INSERT INTO `order_master` (order_no, mem_no, credit_card_no, order_time, order_amount,shipping_status,payment_status) 
		        values (null,:mem_no, :credit_card_no, now(), :order_amount,1,1 ";
		$products = $pdo->prepare( $sql);
		$products->bindValue(":mem_no",  $_SESSION['mem_no']);
		$products->bindValue(":credit_card_no",  $_REQUEST ['credit_card']);
		$products->bindValue(":order_amount",  $_REQUEST ['p_amount']);
		$products->execute();
		

	    $order_no = $pdo->lastInsertId();

		// //寫入訂單明細
		// $sql = "INSERT INTO `order_list` (`order_list_no`, `order_no`,customized_product_no,classic_product_no,product_qty,product_price ) 
		// VALUES (null,$order_no, null, :classic_product_no, :product_qty, :product_price)";
		// $order_items = $pdo->prepare( $sql );
		// foreach( $_SESSION["cart"] as $psn =>$cartItem){
		// 	$orderitems->bindValue(":classic_product_no" , $psn);
		// 	$orderitems->bindValue(":product_qty" ,  $cartItem["qty"]);
		// 	$orderitems->bindValue(":product_price" ,  $cartItem["price"]);
		// 	$orderitems->execute();
		// }
		$pdo->commit();

		//將購物資料自暫存區中刪除
		unset($_SESSION["cart"]);
		echo "下單成功，您的訂單編號為$order_no<br>~~";	

	} catch (PDOException $e) {
		   $pdo->rollBack();
	       $errMsg .=  $e->getMessage(). "<br>"; 
	       $errMsg .=  $e->getLine(). "<br>";    	
	}	


?> 
<center><a href="../cart_done.php">繼續購買</a></center>

</body>
</html>
