<?php
session_start();
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    $months = $_REQUEST["month"];
    $year = $_REQUEST["year"];
    $nowmonth = date("m");
    $nowyear = date("Y");


    $sql = "SELECT c.contest_no , cp.choco_img_src , c.number_votes , c.contest_no from customized_product cp , contest c where (cp.customized_product_no = c.customized_product_no) AND (month(c.contest_time) = :months) AND (YEAR(c.contest_time) = :years) order BY c.number_votes DESC , c.contest_time DESC LIMIT 0,5";

    $months_ranks = $pdo->prepare($sql); //編譯好指令
    $months_ranks->bindValue(":months", $months);//代入資料
    $months_ranks->bindValue(":years", $year);//代入資料
    $months_ranks->execute();
    
    while($months_rank = $months_ranks->fetchObject()){

        echo "<div class='winner'>
                <a href='../role/role.php?contest_no=$months_rank->contest_no' class='player_contest_no'></a>
                <figure class='CHOCO'>
                    <img src='../common/image/chocos/$months_rank->choco_img_src' alt='$months_rank->choco_img_src'>
                </figure>";
            if($months == $nowmonth && $year ==$nowyear){
        echo "<figure class='vote player_vote_btn'>
                    <img src='image/contest/vote.png' alt='vote'>
                    <figcaption>
                        <p>投我</p>
                        <span class='votenum'>{$months_rank->number_votes}票</span>
                    </figcaption>
                </figure>";
            }
        echo "</div>";
    }
    
} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	// echo "系統暫時發生狀況，請通知系統維護人員<br>";
}
?> 
