<?php
$mem_no = $_POST["mem_no"];
$mem_status =$_POST["mem_status"];




$msg = $errMsg = "";
try{
    require_once("../../common/php/connect_choco.php");
    $sql="update member set mem_status = :mem_status where mem_no= :mem_no";
    $member = $pdo->prepare($sql);
    $member->bindValue(":mem_status",$mem_status);
    $member->bindValue(":mem_no",$mem_no);
    $member->execute();
    header("location:../back_member.php");
} catch (PODException $e){
	$errMsg = "錯誤原因:".$e->getMesage()."<br>"."錯誤行號:".$e->getLine()."<br>";
} 
?>


<!-- 
$member = $pdo->prepare($sql);
    $mem_status=1;
	if($_POST["mem_status"]=="停權"){
		$mem_status=0;
	}
	else {
        $mem_status=1
        ;
	} -->
