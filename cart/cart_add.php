<?php 
session_start();
$p_no = $_REQUEST["p_no"];
if(isset($_SESSION["p_name"][$p_no]) === false){
	$_SESSION["p_name"][$p_no] = $_REQUEST["p_name"];
    $_SESSION["p_price"][$p_no] = $_REQUEST["p_price"];
    $_SESSION["p_img"][$p_no] = $_REQUEST["p_img"];
	$_SESSION["p_qty"][$p_no] =$_REQUEST["p_qty"];	
}



header("location:cart.php");
 ?>
