<?php
session_start();

$p_no = $_REQUEST["p_no"];
if(isset($_SESSION["p_name"][$p_no]) === false){
	$_SESSION["p_total"][$p_no] = $_REQUEST["sumtotal"];
  	
}


if( isset($_REQUEST["btn_delete"])===true){//修改

    unset($_SESSION["p_img"][$p_no]);
	unset($_SESSION["p_name"][$p_no]);
	unset($_SESSION["p_price"][$p_no]);
	unset($_SESSION["p_qty"][$p_no]);
}


header("location:cart2.php");
?>

