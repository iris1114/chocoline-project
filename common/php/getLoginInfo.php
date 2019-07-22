<?php 
session_start();
$_SESSION["innerwidth"] = $_REQUEST["innerwidth"];
if( isset($_SESSION["mem_id"]) == true){
	echo $_SESSION["mem_name"];
}else{
	echo "notLogin";
}	
 ?>
