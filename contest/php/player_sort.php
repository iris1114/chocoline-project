<?php
session_start();
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    
      
    $nowpage = $_REQUEST["nowpage"];
    $fromnum = 18*($nowpage - 1);
    $many = 18*($nowpage);
    // $wantpage = "limit {$fromnum},{$many}";

    if($_REQUEST["player_sort"] == "lastest"){
        $player_sort = "ORDER BY c.contest_time desc limit {$fromnum},{$many}";
    }else if($_REQUEST["player_sort"] == "old"){
        $player_sort = "ORDER BY c.contest_time asc limit {$fromnum},{$many}";
    }else if($_REQUEST["player_sort"] == "popular"){
        $player_sort = "ORDER BY c.number_votes desc , c.contest_time desc limit {$fromnum},{$many}";
    }

    $sql = "SELECT m.mem_name , cp.customized_product_name , c.number_votes , DATE(c.contest_time) contest_time , c.contest_no ,cp.choco_img_src FROM contest c , customized_product cp , member m WHERE cp.mem_no = m.mem_no AND c.customized_product_no=cp.customized_product_no AND (month(c.contest_time) = month(CURRENT_DATE)) AND (YEAR(c.contest_time) = YEAR(CURRENT_DATE)) $player_sort";

    $players = $pdo->prepare($sql);
    // $players->bindValue(":player_sort",$player_sort);//代入資料
    // $players->bindValue(":wantpage",$wantpage);//代入資料
    $players->execute();
    

    while($player = $players->fetchObject()){

        echo "<div class='player'>
        <div class='board'>
            <figure class='like_icon'>
                <img src='image/contest/wlike.png' alt='like' class='wlike'>
                <img src='image/contest/plike.png' alt='like' class='plike' style='display:none;'>
                <figcaption>收藏</figcaption>
            </figure>
            <p class='choconame'>$player->customized_product_name</p>
            <p class='votenum'>$player->number_votes 票</p>
            <a href='../role/role.php?contest_no=$player->contest_no' class='btn cyan_s player_contest_no'><span>留言</span></a>
            <a href='javascript:;' class='btn orange_s player_vote_btn'><span>投票</span></a>
        </div>
        <figure class='CHOCO'>
            <img src='../common/image/chocos/$player->choco_img_src' alt='$player->choco_img_src'>
            <figcaption>
                <p class='date'>參賽日期 : <span class='date_ymd'>$player->contest_time</span></p>
                <p class='memname'>$player->mem_name</p>
            </figcaption>
        </figure>
        <figure class='ring'>
        </figure>
    </div>";
    
    }
    


} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?> 