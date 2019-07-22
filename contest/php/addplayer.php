<?php
session_start();
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    
    
    // $mem_id = $_REQUEST["mem_id"];
    $choco_no = $_REQUEST["choco_no"];
    $sql = "INSERT INTO contest(customized_product_no , mem_no) 
    SELECT cp.customized_product_no , m.mem_no 
    FROM customized_product cp , member m 
    WHERE cp.mem_no = m.mem_no AND cp.customized_product_no = :choco_no and not exists( 
        select m.mem_no 
        from contest c ,member m 
        where c.mem_no = m.mem_no and m.mem_id = :mem_id and (month(c.contest_time) = month(CURRENT_DATE)) AND (YEAR(c.contest_time) = YEAR(CURRENT_DATE)))";
    $addchoco = $pdo->prepare($sql); //編譯好指令
    $addchoco->bindValue(":choco_no", $choco_no);
    $addchoco->bindValue(":mem_id", $_SESSION{"mem_id"});
    // $addchoco->bindValue(":mem_id", $mem_id);
    $addchoco->execute();


    
    if($_REQUEST["player_sort"] == "lastest"){
        $player_sort = 'ORDER BY c.contest_time desc limit 0,18';
    }else if($_REQUEST["player_sort"] == "old"){
        $player_sort = 'ORDER BY c.contest_time asc limit 0,18';
    }else if($_REQUEST["player_sort"] == "popular"){
        $player_sort = 'ORDER BY c.number_votes desc , c.contest_time desc limit 0,18';
    }


    // $mem_no = $_REQUEST["mem_no"];
    $sql = "select * from favorites where mem_no=:mem_no ";

    $favorite = $pdo->prepare($sql);
    $favorite->bindValue(":mem_no",$_SESSION{"mem_no"});
    // $favorite->bindValue(":mem_no",$mem_no);
    $favorite->execute();
    $favorite_rows = $favorite->fetchAll(PDO::FETCH_ASSOC);
    $favorite_arr = array();
    for ($i = 0; $i < count($favorite_rows); $i++) {
        array_push($favorite_arr, $favorite_rows[$i]["contest_no"]);
    }


    $sql = "SELECT m.mem_name , cp.customized_product_name , c.number_votes , DATE(c.contest_time) contest_time , c.contest_no ,cp.choco_img_src FROM contest c , customized_product cp , member m WHERE cp.mem_no = m.mem_no AND c.customized_product_no=cp.customized_product_no AND (month(c.contest_time) = month(CURRENT_DATE)) AND (YEAR(c.contest_time) = YEAR(CURRENT_DATE)) $player_sort";
    
    $players = $pdo->prepare($sql);
    // $players->bindValue(":sort",$player_sort);//代入資料
    $players->execute();
    

    while($player = $players->fetchObject()){

        echo "<div class='player'>
        <div class='board'>
            <figure class='like_icon'>";
            if(in_array($player->contest_no, $favorite_arr)){
                    
                echo "<img src='image/contest/wlike.png' alt='like'    class='wlike' style='display:none'>
                <img src='image/contest/plike.png' alt='like' class='plike' style='display:block;'>
                <figcaption style='color:#F6EED4'>收藏</figcaption>";
            }else{
                echo "<img src='image/contest/wlike.png' alt='like' class='wlike' style='display:block'>
                <img src='image/contest/plike.png' alt='like' class='plike' style='display:none;'>
                <figcaption style='color:#592F13'>收藏</figcaption>";
            }
        echo "</figure>
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