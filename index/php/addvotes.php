<?php
session_start();
$errMsg = "";
try {
    require_once("../../common/php/connect_choco.php");
    
    $contest_no = $_REQUEST["contest_no"];
    
    if($_SESSION["mem_rest_vote"]>0){
        //如果沒票就不能投
        $_SESSION["mem_rest_vote"]-=1;
        $sql = "UPDATE contest
        set	number_votes = number_votes + 1
        WHERE contest_no = :contest_no";
        
        $addvote = $pdo->prepare($sql); //編譯好指令
        $addvote->bindValue(":contest_no", $contest_no);
        $addvote->execute();
    
    
        $sql = "SELECT number_votes from contest where contest_no = :contest_no";
        $showvotes = $pdo->prepare($sql); //編譯好指令
        $showvotes->bindValue(":contest_no", $contest_no);
        $showvotes->execute();
        $showvote = $showvotes->fetchObject();
        
        echo $showvote->number_votes;
    }else{
        $sql = "select number_votes from contest where contest_no = :contest_no";
        $showvotes = $pdo->prepare($sql); //編譯好指令
        $showvotes->bindValue(":contest_no", $contest_no);
        $showvotes->execute();
        $showvote = $showvotes->fetchObject();
        
        echo $showvote->number_votes;
    }

} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?> 