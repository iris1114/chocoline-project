
<?php
session_start();
if(isset($_SESSION["mem_id"])!=true){
    $_SESSION["mem_id"] = null;
}
if (!isset($_SESSION["mem_headshot"])) {
    $_SESSION["mem_headshot"] = 'icon_member.png';
}
$errMsg = "";
try {
	require_once("../common/php/connect_choco.php");

    //最新留言
    $sql = "SELECT mem_name , mem_headshot , comment , DATE(comment_date) comment_date , c.mem_no , c.contest_no from comment_record c , member m where c.mem_no=m.mem_no order by comment_date desc limit 3";    
    $messages = $pdo->query($sql); 

    //本月前五名
    $sql = "SELECT c.contest_no , cp.choco_img_src , c.number_votes from customized_product cp , contest c where (cp.customized_product_no = c.customized_product_no) AND (month(c.contest_time) = (month(CURRENT_DATE))) AND (YEAR(c.contest_time) = (YEAR(CURRENT_DATE))) order BY c.number_votes DESC LIMIT 0,5";
    $stage_chocos = $pdo->query($sql);

    //投票區角色數量
    $sql = "SELECT m.mem_name , cp.customized_product_name , c.number_votes , DATE(c.contest_time) contest_time, c.contest_no ,cp.choco_img_src FROM contest c , customized_product cp , member m WHERE cp.mem_no = m.mem_no AND c.customized_product_no=cp.customized_product_no AND (month(c.contest_time) = (month(CURRENT_DATE))) AND (YEAR(c.contest_time) = (YEAR(CURRENT_DATE))) ORDER BY c.contest_time DESC limit 0,18";
    $players = $pdo->query($sql);

    //目前有多少頁碼
    $sql = "SELECT * FROM contest WHERE (month(contest_time) = (month(CURRENT_DATE))) AND (YEAR(contest_time) = (YEAR(CURRENT_DATE)))";
    $pages = $pdo->query($sql);
    $pagenums = ceil($pages->rowCount()/18);

    //已收藏
    $sql = "select * from favorites where mem_no=:mem_no ";

    $favorite = $pdo->prepare($sql);
    $favorite->bindValue(":mem_no",$_SESSION["mem_no"]);
    $favorite->execute();
    $favorite_rows = $favorite->fetchAll(PDO::FETCH_ASSOC);
    $favorite_arr = array();
    for ($i = 0; $i < count($favorite_rows); $i++) {
        array_push($favorite_arr, $favorite_rows[$i]["contest_no"]);
    }

} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <link rel="icon" type="image/png" href="image/common/logo_icon.png">
    <link rel="stylesheet" href="css/contest.css">
    <title>CHOCO 選美</title>
</head>
<body class="contest_body">
    <?php
        echo $pages->rowCount();
    ?>
<!-- header start -->
    <header>
        <div class="m_header">
            <div class="navbar">
                <div class="burger">
                    <figure>
                        <img src="../common/image/headerfooter/burger.png" alt="burger">
                    </figure>
                </div>
                <div class="logo">
                    <h1>
                        CHOCOLINE
                    </h1>
                    <a href="../index/index.php">
                        <img src="../common/image/headerfooter/logo.png" alt="CHOCOLINE">
                    </a>
                </div> 
                <div class="status">
                    <figure>
                        <a class="spanLogin" href="javascript:;">
                            <img src="../common/image/member/<?php echo $_SESSION["mem_headshot"]?>" alt="member"/>
                            <!-- icon點擊後跳出登入註冊燈箱 -->
                            <span id="mem_id_hide_mobile" style="display:none"><?php echo $_SESSION["mem_id"]?></span>
                            <span id="spanLoginText_mobile" style="display:none">登入</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="../cart/cart.php">
                            <img src="../common/image/headerfooter/icon_cart.png" alt="cart" />
                        </a>
                    </figure>
                </div>
            </div>
            <ul class="menubox">
                <li><a href="../custom/custom.php">客製 CHOCO</a></li>
                <li><a href="../contest/contest.php">CHOCO 選美</a></li>
                <li><a href="../game/game.php">CHOCO 遊戲</a></li>
                <li><a href="../store/store.php">CHOCO 商城</a></li>
                <li><a href="../about/about.php">關於 CHOCO</a></li>
                <figure id="menuclose">
                    <img src="../common/image/headerfooter/menuclose.png" alt="close">
                </figure>
            </ul>
        </div>
        <div class="d_header">
            <div class="logo">
                <h1>
                    CHOCOLINE
                </h1>
                <a href="../index/index.php">
                    <img src="../common/image/headerfooter/logo.png" alt="CHOCOLINE">
                </a>
            </div>
            <div class="navbar">
                <ul class="menubox">
                    <li><a href="../custom/custom.php">客製 CHOCO</a></li>
                    <li class="nowpage"><a href="../contest/contest.php">CHOCO 選美</a></li>
                    <li><a href="../game/game.php">CHOCO 遊戲</a></li>
                    <li><a href="../store/store.php">CHOCO 商城</a></li>
                    <li><a href="../about/about.php">關於 CHOCO</a></li>
                </ul>
                <div class="status">
                <figure>
                    <a class="spanLogin" href="javascript:;">
                        <img src="../common/image/member/<?php echo $_SESSION["mem_headshot"]?>" alt="member" />
                        <!-- icon點擊後跳出登入註冊燈箱 -->
                    </a>
                    <span id="mem_id_hide" style="display:none"><?php echo $_SESSION["mem_id"]?></span>
                    <span id="mem_no_hide" style="display:none"><?php echo $_SESSION["mem_no"]?></span>
                    <span id="mem_name_hide" style="display:none"><?php echo $_SESSION["mem_name"]?></span>
                    <span id="mem_headshot_hide" style="display:none"><?php echo $_SESSION["mem_headshot"]?></span>
                    <span id="spanLoginText" style="display:none">登入</span>
                </figure>
                <figure>
                    <a href="../cart/cart.php">
                        <img src="../common/image/headerfooter/icon_cart.png" alt="cart" />
                    </a>
                </figure>
                </div>
            </div>
        </div>
        <!-- 燈箱：登入 -->
        <div id="lightBox" style="display:none">
            <div id="tableLogin">
                <img class="login_bg" src="../common/image/login/login_bg.png" alt="login_bg">
                <div class="login_password">
                    <a href="javascript:;" class="btnLoginCancel">
                        <img src="../common/image/login/login_closeicon.png" alt="">
                    </a>			
                    <h3>會員登入</h3>
                    <input type="text" name="mem_id" id="mem_id" value="" placeholder="帳號"><br>
                    <input type="password" name="mem_psw" id="mem_psw" value="" maxlength="12" placeholder="密碼"><br>
                    <a href="javascript:;" id="forget_password">忘記密碼</a><br>
                    <a href="javascript:;" class="btn orange_l" id="btnLogin">登入</a><br>
                    <span>不是會員嗎?</span>
                    <a href="javascript:;" id="register">立即註冊</a><br>
                </div>
            </div>
        </div>
        <!-- 重設密碼 -->
        <div id="passwordLightBox" style="display:none">
            <div id="getPassword">
                <img class="login_bg" src="../common/image/login/login_bg.png" alt="login_bg">
                <div class="login_password">
                    <a href="javascript:;" class="btnLoginCancel">
                        <img src="../common/image/login/login_closeicon.png" alt="">
                    </a>			
                    <a href="javascript:;" id="rebtnLogin">會員登入</a><br>
                    <h3>重設密碼</h3>
                    <p>請輸入帳號註冊時所留的電子<br>
                        郵件地址，以驗證您的資料</p>
                    <input type="email" name="mem_email" id="mem_email" value="" placeholder="輸入E-mail"><br>
                    <input type="password" name="mem_psw" id="new_mem_psw" value="" maxlength="12" placeholder="輸入新密碼  (6-12位字母、數字)"><br>
                    <input type="password" name="mem_psw" id="re_new_mem_psw" value="" maxlength="12" placeholder="再次確認新密碼"><br>
                    <a href="javascript:;" class="btn orange_l" id="repassword">送出</a><br>
                </div>
            </div>
        </div>
        <!-- 會員註冊 -->
        <div id="registerLightBox" style="display:none">
            <div id="registered">
                <img class="login_bg" src="../common/image/login/login_bg.png" alt="login_bg">
                <div class="login_register">
                    <a href="javascript:;" class="btnLoginCancel">
                        <img src="../common/image/login/login_closeicon.png" alt="btnLoginCancel">
                    </a>			
                    <h3>會員註冊</h3>
                    <p>嗨！新朋友～歡迎加入CHOCOLINE會員<br>
                            請填下您的個人資料！* 為必填。</p>
                    <span>*帳號</span><input type="text" name="mem_id" id="f_mem_id" value="" placeholder="設定帳號"><br>
                    <span><input type="button" id="btnCheckId" value="檢查帳號是否可用"></span>
                    <p id="idMsg">請輸入帳號</p><br>
                    <span>*E-mail</span><input type="email" name="mem_email" id="f_mem_email" value="" placeholder="輸入E-mail 必須包括 ( @ 和 . )" ><br>
                    <span>*密碼</span><input type="password" name="mem_psw" id="f_mem_psw" value="" maxlength="12" placeholder="設定密碼 (6-12位字母、數字)"><br>
                    <span>*密碼確認</span><input type="password" name="mem_psw" id="f_re_mem_psw" value="" maxlength="12" placeholder="再次確認密碼 (再次確認)"><br>
                    <a href="javascript:;" class="btn orange_l" id="register_btn">送出</a><br>
                </div>
            </div>
        </div>
    </header>
<!-- header end -->
<!-- stage_container start -->
    <section class="stage_container">   
        <div class="wrap">
            <div class="title">
                <div class="title_decoration">
                    <img src="image/contest/contest_title.png" alt="contest_title">
                    <h2>CHOCO星人選美排名 </h2>
                </div>
            </div>
            <div class="contain">
                <select class="select_dropdown search_month">
                    <option value="2019_7" selected>2019年7月</option>
                    <option value="2019_6">2019年6月</option>
                    <option value="2019_5">2019年5月</option>
                </select>
                <div class="stage">
                    <?php 
                        while($stage_choco = $stage_chocos->fetchObject()){
                    ?>
                        <div class="winner">
                            <a href="../role/role.php?contest_no=<?php echo $stage_choco->contest_no?>" class="player_contest_no"></a>
                            <figure class="CHOCO">
                                <img src="../common/image/chocos/<?php echo $stage_choco->choco_img_src?>" alt="<?php echo $stage_choco->choco_img_src?>">
                            </figure>
                            <figure class="vote player_vote_btn">
                                <img src="image/contest/vote.png" alt="vote">
                                <figcaption>
                                    <p>投我</p>
                                    <span class="votenum"><?php echo $stage_choco->number_votes?>票</span>
                                </figcaption>
                            </figure>
                        </div>
                    <?php }?>
                </div>
                <div class="board">
                    <div class="lastest_mseeage">
                        <h3>最新留言</h3>
                        <div class="message_block">
                        <?php 
                        while($message = $messages->fetchObject()){
                        ?>
                            <div class="message">
                                <figure class="cus_photo">
                                    <img src="../common/image/member/<?php echo $message->mem_headshot?>" alt="memphoto">
                                </figure>
                                <div class="message_contain">
                                    <p class="memName"><?php echo $message->mem_name?></p>
                                    <p class="mseeage_text"><?php echo $message->comment?></p>
                                </div>
                                <div class="status">
                                    <a href="../role/role.php?contest_no=<?php echo $message->contest_no?>" class="btn cyan_s">
                                        <span>查看</span>
                                    </a>
                                    <p class="message_date"><?php echo $message->comment_date?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        </div>
                    </div>
                    <div class="connect">
                        <a href="javascrupt:;" class="btn orange_l"><span>客製CHOCO星人</span></a>
                        <a href="javascrupt:;" class="btn cyan_l"><span>購買第一名商品</span></a>
                    </div>
                </div>
            </div>
        </div>
        <figure class="firstlc">
            <img src="image/contest/firstlc.png" alt="firstlc">
        </figure>
        <figure class="secondlc">
            <img src="image/contest/secondlc.png" alt="secondlc">
        </figure>
        <figure class="thirdlc">
            <img src="image/contest/thirdlc.png" alt="thirdlc">
        </figure>
        <figure class="fourthlc">
            <img src="image/contest/fourthlc.png" alt="fourthlc">
        </figure>
        <figure class="shinel">
            <img src="image/contest/shine.png" alt="shine">
        </figure>
        <figure class="shiner">
            <img src="image/contest/shine.png" alt="shine">
        </figure>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        <!-- <div class="love1">
            <img src="image/contest/love_l.png" alt="love">
        </div>
        <div class="love2">
            <img src="image/contest/love_m.png" alt="love">
        </div>
        <div class="love3">
            <img src="image/contest/love_s.png" alt="love">
        </div> -->
    </section>
<!-- stage_container end -->
<!-- active_container start -->
    <section class="active_container">
        <div class="circle_bg"></div>
        <div class="wrap">
            <figure class="CHOCO bear">
                <img src="image/contest/bearhand.png" alt="bearhand" class="bearhand">
                <img src="image/contest/beareye.png" alt="beareye" class="eyeleft">
                <img src="image/contest/bearblink.png" alt="bearblink" class="blinkleft">
                <img src="image/contest/bearne.png" alt="bear" class="bearne">
            </figure>
            <figure class="CHOCO cake">
                <img src="image/contest/cakeeye.png" alt="cakeeye"
                class="eye">
                <figure class="blink">
                    <img src="image/contest/cakeblink.png" alt="cakeblink">
                </figure>
                <img src="image/contest/cakene.png" alt="cake"
                class="cakene">
            </figure>
            <div class="rule_introduce">
                <div class="title">
                    <h2>活動說明</h2>
                </div>
                <div class="contain">
                    <table>
                        <tbody>
                            <tr>
                                <th>活動日期</th>
                                <td colspan="4">2019年07月</td>
                            </tr>
                            <tr>
                                <th>參賽條件</th>
                                <td colspan="4">完成結帳且未曾獲獎角色</td>
                            </tr>
                            <tr>
                                <th>規則說明</th>
                                <td colspan="4">會員每日三票</td>
                            </tr>
                            <tr class="prize">
                                <th></th>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <th>活動獎勵</th>
                                <td colspan="4">第一名，隔月在CHOCO商城裡上架販售</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>前五名可獲得<span> 得票數 X 5倍 </span>點數獎勵</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="javascrupt:;" class="btn orange_l" id="joingame"><span>報名參賽</span></a>
                </div>
            </div>
            <div class="my_CHOCO">
                <div class="title">
                    <h2>CHOCO星人</h2>
                </div>
                <div class="contain">
                    <div class="touch_hidden">
                        <div class="CHOCO_list">
                            <figure class="CHOCO" style="display:none">
                            </figure>
                        </div>
                    </div>
                    <span id="prev_btn">❮</span> 
                    <span id="next_btn">❯</span>  
                </div>
                <div class="status">
                    <a href="../custom/custom.php" class="btn cyan_m"><span>去客製</span></a>
                    <a href="javascript:;" class="btn cyan_m" id="canceljoin"><span>取消</span></a>
                    <a href="javascript:;" class="btn orange_m" id="join_submit"><span>參賽</span></a>
                </div>
            </div>
        </div>
    </section>
<!-- active_container end -->
<!-- player_container start -->
    <section class="player_container">
        <div class="wrap">
            <select name="" class="select_dropdown player_sort">
                <option value="lastest" selected>參賽日期 / 最新</option>
                <option value="old">參賽日期 / 最舊</option>
                <option value="popular">得票總數 / 最高</option>
            </select>
            <div class="contain">
            <?php 
                while($player = $players->fetchObject()){
            ?>
                <div class="player">
                    <div class="board">
                        <figure class="like_icon">
                    <?php
                        if(in_array($player->contest_no, $favorite_arr)){
                    
                            echo "<img src='image/contest/wlike.png' alt='like'    class='wlike' style='display:none'>
                            <img src='image/contest/plike.png' alt='like' class='plike' style='display:block;'>
                            <figcaption style='color:#F6EED4'>收藏</figcaption>";
                        }else{
                            echo "<img src='image/contest/wlike.png' alt='like' class='wlike' style='display:block'>
                            <img src='image/contest/plike.png' alt='like' class='plike' style='display:none;'>
                            <figcaption style='color:#592F13'>收藏</figcaption>";
                        }
                    ?>
                        </figure>
                        <p class="choconame"><?php echo $player->customized_product_name?></p>
                        <p class="votenum"><?php echo $player->number_votes?>票</p>
                        <a href="../role/role.php?contest_no=<?php echo $player->contest_no?>" class="btn cyan_s player_contest_no"><span>留言</span></a>
                        <a href="javascript:;" class="btn orange_s player_vote_btn"><span>投票</span></a>
                    </div>
                    <figure class="CHOCO">
                        <img src="../common/image/chocos/<?php echo $player->choco_img_src?>" alt="<?php echo $player->choco_img_src?>">
                        <figcaption>
                            <p class="date">參賽日期 : <span class="date_ymd"><?php echo $player->contest_time?></span></p>
                            <p class="memname"><?php echo $player->mem_name?></p>
                        </figcaption>
                    </figure>
                    <figure class="ring">
                    </figure>
                </div>
            <?php
                }
            ?>
            </div>
            <div class="page">
                <div class="pagination">
                    <a href="javascript:;" id="prevpage_btn">❮</a>
                    <?php
                    for($i=1;$i<=$pagenums;$i++){
                    ?>
                        <a class="pagenums"  href="javascript:;"><?php echo $i?></a>
                    <?php
                    }
                    ?>
                    <a href="javascript:;" id="nextpage_btn">❯</a>
                </div>
            </div>
        </div>
    </section>
<!-- player_container end -->
<!-- footer start -->
    <footer>
        <div class="connect">
            <figure>
                <a href="javascript:;">
                    <img src="image/headerfooter/icon_fb.png" alt="Facebook">
                </a>
            </figure>
            <figure>
                <a href="javascript:;">
                    <img src="image/headerfooter/icon_pinterest.png" alt="Pinterest">
                </a>
            </figure>
            <figure>
                <a href="javascript:;">
                    <img src="image/headerfooter/icon_ig.png" alt="Instagram">
                </a>
            </figure>
        </div>
        <p>Copyright © 2019  CHOCOLINE All rights reserved</p>
        <div class="bg">
            <figure class="footer_water">
                <img src="image/headerfooter/footer_water_bg.png" alt="water">
            </figure>
            <figure class="footer_square1">
                <img src="image/headerfooter/footer_1_bg.png" alt="chocolate">
            </figure>
            <figure class="footer_square2">
                <img src="image/headerfooter/footer_2_bg.png" alt="chocolate">
            </figure>
            <figure class="footer_square3">
                <img src="image/headerfooter/footer_3_bg.png" alt="chocolate">
            </figure>
            <figure class="footer_square4">
                <img src="image/headerfooter/footer_4_bg.png" alt="chocolate">
            </figure>
        </div>
    </footer>
<!-- footer end -->
<!-- robot start -->
<input id="robot_close_control" type="checkbox" />

<div id="robot" class="robot">
    <span class="robot_prompt">快來詢問我!!</span>
    <div class="eye1"></div>
    <div class="eyelid1"></div>
    <div class="eye2"></div>
    <div class="eyelid2"></div>

    <label for="robot_close_control">
    <div id="robot_close" class="robot_close"></div>
    <div class="robot_click1"></div>
    <div class="robot_click2"></div>
    <div class="robot_click3"></div>
    </label>
    <div class="robot_content">
    <div id="robot_message" class="message_area">
        <p id="message_answer_sample" class="message message_answer">有什麼需要我幫忙的嗎?</p>
        <p
        id="message_ask_sample"
        class="message message_ask"
        style="display:none"
        >
        歡迎光臨CHOCOLINE....!!
        </p>
    </div>
    <div class="keyword_area">
        <button id="robot_prev_button"  class="prev_button"><i class="fas fa-angle-left"></i></button>
        <div id="keyword_space" class="keyword_space" style="width:200px">
        <div id="keyword_wrap" class="keyword_wrap" style="margin-left: 0px;" >
            <span class="keyword">客製商品</span>
            <span class="keyword">玩遊戲拿點數</span>
            <span class="keyword">選美比賽</span>
            <span class="keyword">推薦商品</span>
            <span class="keyword">CHOCOLINE</span>
        </div>
        </div>
        <button id="robot_next_button" class="next_button">
        <i class="fas fa-angle-right"></i>
        </button>
    </div>
    <form onsubmit="return returnR(this)" class="query_area">
        <input id="leave_message" type="text" placeholder="請問..." autocomplete="off" />
        <input id="message_submit" type="submit" value="送出" />
    </form>
    </div>
</div>
<!-- robot end -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src="../common/js/header.js"></script>
<script src="../common/js/login.js"></script>
<script src="../common/js/robot.js"></script>
<script src="js/contest.js"></script>
</body>
</html>



