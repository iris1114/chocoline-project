<?php
session_start();
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    
    $comment_no = $_REQUEST["comment_no"];
    $report_reason = $_REQUEST["report_reason"];
    $sql = "INSERT INTO report(comment_no,mem_no,report_reason) VALUES(:comment_no , :mem_no , :reason)";

    $addreport = $pdo->prepare($sql); //編譯好指令
    $addreport->bindValue(":comment_no", $comment_no);
    $addreport->bindValue(":mem_no", $_SESSION["mem_no"]);
    $addreport->bindValue(":reason", $report_reason);
    $addreport->execute();

    echo '0';
    
 
} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?> 