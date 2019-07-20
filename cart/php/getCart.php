<?php 
session_start();
$psn = $_REQUEST["p_no"];


if($_REQUEST["qty"] != 0){ //數量不為0, 直接改

	$_SESSION["cart"][$psn]=array("pname"=>$_REQUEST["p_name"],"price"=>$_REQUEST["p_price"],"qty"=>$new_qty,"pimg"=>$_REQUEST["p_img"]);   
    $_SESSION["p_name"][$psn]=$_SESSION["cart"][$psn]["pname"];
    $_SESSION["p_price"][$psn]=$_SESSION["cart"][$psn]["price"];
    $_SESSION["p_img"][$psn]=$_SESSION["cart"][$psn]["pimg"];
    $_SESSION["p_qty"][$psn]=$_SESSION["cart"][$psn]["qty"];


}else{ //數量若為0, 則將其從購物車中移除
	if(isset($_SESSION["cart"]) && isset($_SESSION["cart"][$psn])){
		unset($_SESSION["cart"][$psn]);
	}
}

//將購物車回傳
if(isset($_SESSION["cart"])==false){
	echo "{}";
}else{
	echo json_encode($_SESSION["cart"]);	
}
?>