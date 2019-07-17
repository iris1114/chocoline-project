<?php 
session_start();


$psn = $_REQUEST["psn"];
// $subTotal =$_REQUEST["p_qty"]*$_REQUEST["p_price"];
// $total=0;
// $total= $_session["cart"][$psn]["total"]+=$subTotal - $_session["cart"][$psn]["price"];

if($_REQUEST["p_qty"] != 0){ //數量不為0, 直接改

	$_SESSION["cart"][$psn]=array(
	"psn"=> $_REQUEST["psn"],	
	"pname"=>$_REQUEST["p_name"],
	"price"=>$_REQUEST["p_price"],
	"qty"=>$_REQUEST["p_qty"],
	"pimg"=>$_REQUEST["p_img"],);
	// "subTotal"=>$subTotal );
 
}

// else{ //數量若為0, 則將其從購物車中移除
// 	if(isset($_SESSION["cart"]) && isset($_SESSION["cart"][$psn])){
// 		unset($_SESSION["cart"][$psn]);
// 	}
// }

//將購物車回傳
if(isset($_SESSION["cart"])==false){
	echo "{}";
}else{
	echo json_encode($_SESSION["cart"]);	
}
?>