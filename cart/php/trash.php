<?php 
session_start();
$psn = $_REQUEST["psn"];

    unset($_SESSION["cart"][$psn]);
	
if(isset($_SESSION["cart"][$psn])==false){
	echo "{}";
}else{
	echo json_encode($_SESSION["cart"][$psn]);	
}
?>