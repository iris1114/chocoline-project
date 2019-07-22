
<?php
session_start();
if(isset($_SESSION["mem_id"])!=true){
    $_SESSION["mem_id"] = null;
}
if(isset($_SESSION["mem_no"])!=true){
    $_SESSION["mem_no"] = null;
}
if(isset($_SESSION["mem_name"])!=true){
    $_SESSION["mem_name"] = null;
}
if(isset($_SESSION["innerwidth"])!=true){
    $_SESSION["innerwidth"] = null;
}
if (!isset($_SESSION["mem_headshot"])) {
    $_SESSION["mem_headshot"] = 'icon_member.png';
}
$errMsg = "";
try {
	require_once("../common/php/connect_choco.php");

    $contest_no = $_REQUEST["contest_no"];
    $_SESSION["contest_no"] = $_REQUEST["contest_no"];
    
    //角色資訊
    $sql = "SELECT c.contest_no, cp.customized_product_name, m.mem_name, DATE(c.contest_time) contest_time, cb.choco_base_name, cb.base_desc, cf.choco_flavor_name, cf.choco_flavor_desc, cp.choco_img_src, cp.card_back_src, c.number_votes FROM contest c, customized_product cp, member m, choco_base cb, choco_flavor cf WHERE (c.contest_no = :contest_no) AND (cp.mem_no = m.mem_no) AND (cp.choco_base_no = cb.choco_base_no) AND (cp.choco_flavor_no = cf.choco_flavor_no) AND (c.customized_product_no = cp.customized_product_no)";    
    $chocos = $pdo->prepare($sql);
    $chocos->bindValue(":contest_no",$contest_no);
    $chocos->execute();
    $choco = $chocos->fetchObject();

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

    //留言
    if($_SESSION["innerwidth"]<767){
        $show_message_num = 3;
    }else{
        $show_message_num = 5;
    }

    $sql = "SELECT m.mem_name , m.mem_headshot , c.comment , DATE(comment_date) comment_date , c.comment_no from comment_record c , member m where c.mem_no=m.mem_no  AND c.contest_no  = $contest_no order by comment_date desc limit $show_message_num";    
    $messages = $pdo->query($sql);


    //目前有多少頁碼
    $sql = "SELECT * FROM comment_record WHERE contest_no  = $contest_no";
    $pages = $pdo->query($sql);
    $pagenums = ceil($pages->rowCount()/$show_message_num);




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
    <link rel="stylesheet" href="css/role.css">
    <title>CHOCO 角色詳情</title>
</head>
<body>
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
<!-- introduce_container start -->
    <section class="introduce_container">
        <figure class="back">
            <img src="image/role/light.png" alt="light">
        </figure>
        <div class="front">
            <div class="choco_playing">
                <figure class="peanut_bg">
                    <img src="image/role/peanut_bg.png" alt="peanut">
                </figure>
                <figure class="donut_bg">
                    <img src="image/role/donut_bg.png" alt="donut">
                </figure>
                <figure class="cake_bg">
                    <img src="image/role/cake_bg.png" alt="cake">
                </figure>
                <figure class="cookies_bg">
                    <img src="image/role/cookies_bg.png" alt="cookies">
                </figure>
                <figure class="bear_bg">
                    <img src="image/role/bear_bg.png" alt="bear">
                </figure>
            </div>
            <div class="wrap">
                <div class="bread">
                    <img src="image/role/bread.png" alt="bread">
                    <p>CHOCO選美 > <span class="choconame"><?php echo $choco->customized_product_name?></span> 角色詳情</p>
                </div>
                <div class="contain">
                    <div class="player">
                        <figure class="CHOCO">
                            <img src="../common/image/chocos/<?php echo $choco->choco_img_src?>" alt="chocoimg">
                            <figcaption>
                                <p class="date">參賽日期 : <span class="date_ymd"><?php echo $choco->contest_time?></span></p>
                                <p class="memname"><?php echo $choco->mem_name?></p>
                            </figcaption>
                        </figure>
                        <figure class="ring">
                            <img src="image/role/p_ring.png" alt="p_ring">
                        </figure>
                    </div>
                    <div class="detail">
                        <div class="information">
                            <div class="choco_information rotate_l">
                                <ul>
                                    <li><p>角色名稱 : </p></li>
                                    <li><p id="choco_name"><?php echo $choco->customized_product_name?></p></li>
                                    <li></li>
                                    <li><p>內容物 : <span id="choco_content"></span><?php echo $choco->choco_base_name?> <?php echo $choco->choco_flavor_name?></p></li>
                                    <li><p>效用 : <span id="choco_ability"><?php echo $choco->base_desc?> <?php echo $choco->choco_flavor_desc?></span></p></li>
                                </ul>
                            </div>
                            <figure class="cardfront rotate_m">
                                <img src="../common/image/cardback/card.png" alt="card">
                                <figcaption>
                                    <h3>目前票數 : </h3>
                                    <p><?php echo $choco->number_votes?>票</p>
                                </figcaption>
                            </figure>
                            <figure class="cardback rotate_r">
                                <img src="../common/image/cardback/<?php echo $choco->card_back_src?>" alt="card">
                            </figure>
                        </div>
                        <div class="collect_vote">
                            <a href="javascript:;" class="collect_btn btn cyan_l">
                                <span>
                                <?php
                                    if (in_array($choco->contest_no, $favorite_arr)) {
                                        echo '<i class="heart_unclick far fa-heart" style="display:none"></i><i class="heart_clicked fas fa-heart"></i>';
                                    } else {
                                        echo '<i class="heart_unclick far fa-heart"></i><i class="heart_clicked fas fa-heart" style="display:none"></i>';
                                    }
                                ?>
                                    收藏
                                </span>
                            </a>
                            <a href="javascript:;" class="btn orange_l player_vote_btn"><span>投票</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="firstlc">
            <img src="image/role/firstlc.png" alt="firstlc">
        </figure>
        <figure class="secondlc">
            <img src="image/role/secondlc.png" alt="secondlc">
        </figure>
        <figure class="thirdlc">
            <img src="image/role/thirdlc.png" alt="thirdlc">
        </figure>
        <figure class="fourthlc">
            <img src="image/role/fourthlc.png" alt="fourthlc">
        </figure>
        <figure class="shinel">
            <img src="image/role/shine.png" alt="shine">
        </figure>
        <figure class="shiner">
            <img src="image/role/shine.png" alt="shine">
        </figure>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        
    </section>
<!-- introduce_container end -->
<!-- message_board start -->
    <section class="message_board_container">
        <div class="phone_message_title">
            <p>留言池</p>
        </div>
        <div class="wrap message_board_wrap" id="message_board_wrap">
            <?php 
            while($message = $messages->fetchObject()){
            ?>                      
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="../common/image/member/<?php echo $message->mem_headshot?>" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName"><?php echo $message->mem_name?></p>
                            <p class="mseeage_text"><?php echo $message->comment?></p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date"><?php echo $message->comment_date?></p>
                            <span style="display:none" class="message_comment_no"><?php echo $message->comment_no?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="wrap page_wrap">
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
        <div class="wrap input_message_wrap">
            <div class="input_message">
                <input type="text" name="" id="input_text" placeholder="快來留言..." maxlength="50">
                <button id="submit_btn">送出</button>
            </div>
        </div>
        <div class="report">
            <div class="contain">
                <p>檢舉原因 : </p>
                    <textarea name="report" id="report" cols="30" rows="3" maxlength="50" placeholder="他壞壞嗎?"></textarea>
                <a href="javascrupt:;" class="btn cyan_s" id="report_submit">
                    <span>送出</span>
                </a>
            </div>
            <figure class="close_btn">
                <img src="image/role/board_close.png" alt="close_btn">
            </figure>
            <figure class="report_bear">
                <img src="image/role/report_bear.png" alt="bear">
            </figure>
        </div>
    </section>
<!-- message_board end -->
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
        <p id="message_ask_sample" class="message message_ask" style="display:none">
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
<script src="js/role.js"></script>
</body>
</html>