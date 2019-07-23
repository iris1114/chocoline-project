<?php 
session_start();
if( isset($_SESSION["mem_id"]) == true){
	echo $_SESSION["mem_name"];
}else{
	echo "notLogin";
}	
 ?>
