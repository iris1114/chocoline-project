<?php
session_start();
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    // $mem_no = $_REQUEST["mem_no"];

    $sql = "SELECT * FROM contest WHERE mem_no = :mem_no AND (month(contest_time) = month(CURRENT_DATE)) AND (YEAR(contest_time) = YEAR(CURRENT_DATE))";
    
    $joined = $pdo->prepare($sql);
    $joined->bindValue(":mem_no",$_SESSION{"mem_no"});//代入資料
    // $joined->bindValue(":mem_no",$mem_no);//代入資料
    $joined->execute();
    
    $join = $joined->fetchObject();

    if($join!=""){
        echo $join->mem_no;
    }else{
        echo "";
    }

} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?> 