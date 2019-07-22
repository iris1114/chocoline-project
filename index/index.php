<?php
session_start();
if (!isset($_SESSION["mem_id"])) {
    $_SESSION["mem_id"] = null;
}
if (!isset($_SESSION["mem_no"])) {
    $_SESSION["mem_no"] = null;
}
if (!isset($_SESSION["mem_name"])) {
    $_SESSION["mem_name"] = null;
}
if (!isset($_SESSION["mem_headshot"])) {
    $_SESSION["mem_headshot"] = 'icon_member.png';
}

?>

<!-----------問答---------------->


<?php
$errMsg = "";
try {
    require_once("../common/php/connect_choco.php");

    $question_sql = "select * from question";
    $questions = $pdo->query($question_sql);
} catch (PDOException $e) {
    echo "錯誤 : ", $e->getMessage(), "<br>";
    echo "行號 : ", $e->getLine(), "<br>";
}

?>

<!-----------選美---------------->

<?php
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
    $pagenums = ceil($pages->rowCount() / 18);

    //已收藏
    $sql = "select * from favorites where mem_no=:mem_no ";

    $favorite = $pdo->prepare($sql);
    $favorite->bindValue(":mem_no", $_SESSION["mem_no"]);
    $favorite->execute();
    $favorite_rows = $favorite->fetchAll(PDO::FETCH_ASSOC);
    $favorite_arr = array();
    for ($i = 0; $i < count($favorite_rows); $i++) {
        array_push($favorite_arr, $favorite_rows[$i]["contest_no"]);
    }
} catch (PDOException $e) {
    echo "錯誤 : ", $e->getMessage(), "<br>";
    echo "行號 : ", $e->getLine(), "<br>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index2.css">
    <link rel="stylesheet" href="css/contest.css">
    <link rel="icon" type="image/png" href="image/common/logo_icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <script src="js/lazy-line-painter-1.9.6.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js'></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <title>CHOCOLINE</title>
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
                            <img src="../common/image/member/<?php echo $_SESSION["mem_headshot"] ?>" alt="member" />
                            <!-- icon點擊後跳出登入註冊燈箱 -->
                            <span id="mem_id_hide_mobile" style="display:none"><?php echo $_SESSION["mem_id"] ?></span>
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
                    <li><a href="../contest/contest.php">CHOCO 選美</a></li>
                    <li><a href="../game/game.php">CHOCO 遊戲</a></li>
                    <li><a href="../store/store.php">CHOCO 商城</a></li>
                    <li><a href="../about/about.php">關於 CHOCO</a></li>
                </ul>
                <div class="status">
                    <figure>
                        <a class="spanLogin" href="javascript:;">
                            <img src="../common/image/member/<?php echo $_SESSION["mem_headshot"] ?>" alt="member" />
                            <!-- icon點擊後跳出登入註冊燈箱 -->
                        </a>
                        <span id="mem_id_hide" style="display:none"><?php echo $_SESSION["mem_id"] ?></span>
                        <span id="mem_no_hide" style="display:none"><?php echo $_SESSION["mem_no"] ?></span>
                        <span id="mem_name_hide" style="display:none"><?php echo $_SESSION["mem_name"] ?></span>
                        <span id="mem_headshot_hide" style="display:none"><?php echo $_SESSION["mem_headshot"] ?></span>
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
                    <span>*E-mail</span><input type="email" name="mem_email" id="f_mem_email" value="" placeholder="輸入E-mail 必須包括 ( @ 和 . )"><br>
                    <span>*密碼</span><input type="password" name="mem_psw" id="f_mem_psw" value="" maxlength="12" placeholder="設定密碼 (6-12位字母、數字)"><br>
                    <span>*密碼確認</span><input type="password" name="mem_psw" id="f_re_mem_psw" value="" maxlength="12" placeholder="再次確認密碼 (再次確認)"><br>
                    <a href="javascript:;" class="btn orange_l" id="register_btn">送出</a><br>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-----------index container------------->

    <main class="index_container">

        <!-----------sky_wrap------------->

        <div class="sky_wrap">
            <div id="space_ship">
                <a href="../custom/custom.php"><img src="image/index/hero/space_ship.png" alt="space_ship"></a>
            </div>
            <div id="cloud">
                <img src="image/index/hero/cloud.png" alt="cloud">
            </div>

        </div>

        <div id="keypoint"></div>
        <div id="keypoint2"></div>
        <div id="keypoint3"></div>


        <!-----------hero_main------------->

        <section class="hero_main">
            <div class="wrap">
                <div class="choco_slide">
                    <img src="image/index/hero/slide.png" alt="slide">
                </div>
                <div class="choco_black" class="choco_black_m">
                    <div class="left_eye"></div>
                    <div class="left_eyelip"></div>
                    <div class="right_eye"></div>
                    <div class="right_eyelip"></div>

                    <img src="image/index/hero/righthand.png" alt="hand" class="right_hand">
                    <img src="image/index/hero/lefthand.png" alt="hand" class="left_hand">
                    <img src="image/index/hero/leftleg.png" alt="leg" class="left_leg">
                    <img src="image/index/hero/rightleg.png" alt="leg" class="right_leg">
                    <img src="image/index/hero/body1.png" alt="body" class="body">
                </div>
                <div class="choco_white">
                    <a href="../custom/custom.php"><img src="image/index/hero/choco_white.png" alt="choco"></a>
                </div>

                <div class="choco_milk">
                    <a href="../custom/custom.php"><img src="image/index/hero/choco_milk.png" alt="choco"></a>
                </div>

                <div class="love_l">
                    <img src="image/index/hero/love_l.png" alt="love">
                </div>
                <div class="love_m">
                    <img src="image/index/hero/love_m.png" alt="love">
                </div>
                <div class="love_s">
                    <img src="image/index/hero/love_s.png" alt="love">
                </div>
                <div class="card">
                    <a href="../custom/custom.php"> <img src="image/index/hero/card.png" alt="card"></a>
                </div>
                <div class="shadow">
                    <img src="image/index/hero/shadow.png" alt="shadow">
                </div>
                <div class="chocochip">
                    <img src="image/index/hero/bigchoco_buiding.png" alt="river">
                </div>

                <div class="river_custom">
                    <img src="image/index/hero/river_custom3.png" alt="shadow">
                </div>
                <div class="river_move">
                    <img src="image/index/hero/river move.png" alt="river">
                </div>
                <div class="river_move_custom">
                    <img src="image/index/hero/river_move2.png" alt="river">
                </div>

                <div class="river_qa">
                    <img src="image/index/hero/river_qa2.png" alt="river">
                </div>
                <div class="river_move_qa">
                    <img src="image/index/hero/river_move_qa2.png" alt="river">
                </div>


                <div class="river_last">
                    <img src="image/index/hero/river_last2.png" alt="river">
                </div>
                <!-- <div class="river_move_rank">
                    <img src="image/index/hero/rivermove_rank.png" alt="river">
                </div> -->
                <div class="river_move_big">
                    <img src="image/index/hero/rivermove_big.png" alt="river">
                </div>




            </div>
        </section>
        <div id="keypoint4"></div>

        <!-----------index_custom_container------------->

        <section class="index_custom_container">
            <div class="wrap">
                <div class="title_decoration">
                    <img src="image/common/title.png" alt="title" />
                    <h2>動手做專屬CHOCO星人<br />送給想傳情的人吧</h2>
                </div>
                <div class="custom_island ">
                    <div class="island"> <img src="image/index/custom/island.png" alt="island"></div>
                    <div class="roles"><img src="image/index/custom/5roles.png" alt="roles"></div>
                    <div class="roles_shadow"><img src="image/index/custom/5roles_shadow.png" alt="shadow"></div>
                    <div class="custom_text">
                        <p>第一步： </p>
                        <h3>選擇喜愛的巧克力外型</h3>
                    </div>

                </div>

                <div class="custom_type">

                    <div class="shape shapePos0">
                        <img src="image/index/custom/long.png" alt="long" />
                    </div>
                    <div class="shape shapePos1">
                        <img src="image/index/custom/roll.png" alt="roll" />

                    </div>
                    <div class="shape shapePos2">
                        <img src="image/index/custom/bear.png" alt="bear" />
                    </div>
                    <div class="shape shapePos3">
                        <img src="image/index/custom/cake.png" alt="cake" />
                    </div>
                    <div class="shape shapePos4">

                        <img src="image/index/custom/oero.png" alt="oero" />
                    </div>

                    <img src="image/index/custom/right.png" alt="right" class="right_btn" id="toRight" />
                    <img src="image/index/custom/left.png" alt="left" class="left_btn" id="toLeft" />
                </div>
                <a href="../custom/custom.php" class="btn orange_l"><span> 繼續客制</span></a>



            </div>
        </section>



        <!-----------index_qa_container------------->
        <div id="trigger1"></div>
        <section class="index_qa_container">
            <div class="title_decoration col-lg-12">
                <img src="image/common/title.png" alt="title" />
                <h2>CHOCO星人好推薦</h2>
            </div>

            <div class="wrap">

                <!-- description -->

                <div class="qa_choco col-12 col-lg-6">
                    <div class="choco_land">
                        <div class="desc">
                            <h4>還不知道要送什麼嗎？</h4>
                            <p>回答三個問題,讓我們為您推薦～</p>
                        </div>

                        <div class="qa_choco">
                            <img src="image/index/question/choco.png" alt="choco">
                            <div class="love_line">
                                <svg id="loveline" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 590.86 203.6" data-llp-composed="true" class="lazy-line-painter">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #d72d40;
                                                strok36 3e-miterlimit: 10;
                                                stroke-width: 7px;
                                            }
                                        </style>
                                    </defs>
                                    <title>loveline</title>
                                    <path class="cls-1" d="M713.47,405.22C659.87,300,478.67,302.23,462,304c-9.22.93-22.81,1.44-31.05-3.12-7.82-4.35-10.14-13.1-.86-21.83,10.88-10.18,33.19-21.83,37.51-41.1,8-34.76-34.24-43.34-46.94-11.27l-1.11,2.81-.5-3c-6-36-54.72-16.8-26.34,32.08,7.17,12.42,16.2,22.56,18.24,29.69,1.16,3.55-2.68,13.49-13.12,12.21-231.41-28.31-264,86.4-270.92,88.75" transform="translate(-125.73 -203.21)" data-llp-id="loveline-0" data-llp-duration="2330" data-llp-delay="0" fill-opacity="1" style=" " data-llp-stroke-join="" data-llp-stroke-cap="" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $question_rows = $questions->fetchAll(PDO::FETCH_ASSOC);
                shuffle($question_rows);
                ?>
                <div id="qa_box" class="qa_box  col-12  col-lg-6">
                    <img src="image/index/question/question.png" alt="question">
                    <!-- question -->
                    <div class="question">
                        <div class="title">
                            <h3>題庫第<?php echo $question_rows[0]['question_no']; ?>題 <?php echo $question_rows[0]['question_desc']; ?></h3>
                        </div>
                        <label class="option" for="q1_1">
                            <input class="answer" value="<?php echo $question_rows[0]['option1_class']; ?>" class="questions" type="radio" checked="checked" name="q1" id="q1_1" />1. <?php echo $question_rows[0]['option1_desc']; ?>
                        </label>

                        <label class="option" for="q1_2">
                            <input class="answer" value="<?php echo $question_rows[0]['option2_class']; ?>" class="questions" type="radio" name="q1" id="q1_2" />2. <?php echo $question_rows[0]['option2_desc']; ?>
                        </label>

                        <label class="option" for="q1-3">
                            <input class="answer" value="<?php echo $question_rows[0]['option3_class']; ?>" class="questions" type="radio" name="q1" id="q1-3" />3. <?php echo $question_rows[0]['option3_desc']; ?>
                        </label>
                        <a href="javascript:;" class="btn orange_l qa_next_button"><span>下一題</span></a>
                    </div>
                    <div class="question" style="display:none">
                        <div class="title">
                            <h3>題庫第<?php echo $question_rows[1]['question_no']; ?>題 <?php echo $question_rows[1]['question_desc']; ?></h3>
                        </div>

                        <label class="option" for=" q2_1">
                            <input class="answer" value="<?php echo $question_rows[1]['option1_class']; ?>" class="questions" type="radio" checked="checked" name="q2" id="q2_1" />1. <?php echo $question_rows[1]['option1_desc']; ?>
                        </label>

                        <label class="option" for="q2_2">
                            <input class="answer" value="<?php echo $question_rows[1]['option2_class']; ?>" class="questions" type="radio" name="q2" id="q2_2" />2. <?php echo $question_rows[1]['option2_desc']; ?>
                        </label>

                        <label class="option" for="q2_3">
                            <input class="answer" value="<?php echo $question_rows[1]['option3_class']; ?>" class="questions" type="radio" name="q2" id="q2_3" />3. <?php echo $question_rows[1]['option3_desc']; ?>
                        </label>

                        <a href="javascript:;" class="btn orange_l qa_next_button"><span>下一題</span></a>
                    </div>
                    <div class="question" style="display:none">
                        <div class="title">
                            <h3>題庫第<?php echo $question_rows[2]['question_no']; ?>題 <?php echo $question_rows[2]['question_desc']; ?></h3>
                        </div>

                        <label class="option" for="q3_1">
                            <input class="answer" value="<?php echo $question_rows[2]['option1_class']; ?>" class="questions" type="radio" checked="checked" name="q3" id="q3_1" />1. <?php echo $question_rows[2]['option1_desc']; ?>
                        </label>

                        <label class="option" for="q3_2">
                            <input class="answer" value="<?php echo $question_rows[2]['option2_class']; ?>" class="questions" type="radio" name="q3" id="q3_2" />2. <?php echo $question_rows[2]['option2_desc']; ?>
                        </label>

                        <label class="option" for="q3_3">
                            <input class="answer" value="<?php echo $question_rows[2]['option3_class']; ?>" class="questions" type="radio" name="q3" id="q3_3" />3. <?php echo $question_rows[2]['option3_desc']; ?>
                        </label>

                        <a href="javascript:;" id="submit_question_btn" class="btn orange_l"><span>提交</span></a>
                    </div>
                </div>
            </div>
        </section>



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

                    <div class="stage">
                        <?php
                        while ($stage_choco = $stage_chocos->fetchObject()) {
                            ?>
                            <div class="winner">
                                <a href="../role/role.php?contest_no=<?php echo $stage_choco->contest_no ?>" class="player_contest_no"></a>
                                <figure class="CHOCO">
                                    <img src="../common/image/chocos/<?php echo $stage_choco->choco_img_src ?>" alt="<?php echo $stage_choco->choco_img_src ?>">
                                </figure>
                                <figure class="vote player_vote_btn">
                                    <img src="image/contest/vote.png" alt="vote">
                                    <figcaption>
                                        <p>投我</p>
                                        <span class="votenum"><?php echo $stage_choco->number_votes ?>票</span>
                                    </figcaption>
                                </figure>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="board">
                        <div class="lastest_mseeage">
                            <h3>最新留言</h3>
                            <div class="message_block">
                                <?php
                                while ($message = $messages->fetchObject()) {
                                    ?>
                                    <div class="message">
                                        <figure class="cus_photo">
                                            <img src="../common/image/member/<?php echo $message->mem_headshot ?>" alt="memphoto">
                                        </figure>
                                        <div class="message_contain">
                                            <p class="memName"><?php echo $message->mem_name ?></p>
                                            <p class="mseeage_text"><?php echo $message->comment ?></p>
                                        </div>
                                        <div class="status">
                                            <a href="../role/role.php?contest_no=<?php echo $message->contest_no ?>" class="btn cyan_s">
                                                <span>查看</span>
                                            </a>
                                            <p class="message_date"><?php echo $message->comment_date ?></p>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="connect">
                            <a href="../contest/contest.php" class="btn orange_l"><span>去投票</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- stage_container end -->

        <!----------game_container-------------->

        <section class="game_container">
            <div class="wrap">
                <div class="title_decoration">
                    <img src="image/common/title.png" alt="title" />
                    <h2>CHOCO玩遊戲拿點數</h2>
                </div>
                <div class="game_wrap">
                    <div class="game_bg"> <img src="image/index/game/game_bg3.png" alt="game_bg"> </div>
                    <div class="game_board">
                        <img src="image/index/game/game_board.png" alt="game_board">
                        <div class="game_text">
                            <p>遊戲方式：</p>
                            <p>遊戲方式:按下方向鍵 <span class="keyboard"> <img src="image/index/game/keyboard.png" alt=""> </span> 控制CHOCO星人~</p>
                            <p>在時間內接到巧克力來獲取點數</p>
                            <a href="../game/game.php" class="btn orange_xl"><span>START</span></a>
                        </div>
                    </div>
                    <div class="game_things">
                        <img src="image/index/game/allthing3.png" alt="game_things">
                    </div>
                    <div class="chocoman">
                        <img src="image/index/game/chocoman.png" alt="chocoman">
                    </div>
                </div>
            </div>
        </section>









        <!----------map_container-------------->
        <section class="map_container">
            <div class="wrap">
                <div class="title_decoration">
                    <img src="image/common/title.png" alt="title" />
                    <h2>CHOCO 巡迴胖卡車</h2>
                </div>
                <div class="ballon">
                    <img src="image/index/map/ballon.png" alt="ballon">
                </div>
                <div class="cloud">
                    <img src="image/index/map/cloud.png" alt="cloud">
                </div>
                <div class="cloud2">
                    <img src="image/index/map/cloud2.png" alt="cloud">
                </div>
                <div class="river_move_last">
                    <img src="image/index/hero/rivermove_last.png" alt="river">
                </div>

                <!-- map -->
                <div class="map">
                    <img src="image/index/map/map.png" alt="map">
                    <p>TAIWAN</p>
                    <span class="taipei"><a href="../about/about.php">台北</a> </span>
                    <span class="hualian"><a href="../about/about.php">花蓮</a> </span>
                    <span class="taoyuan"><a href="../about/about.php">桃園</a> </span>
                    <span class="taizhong"><a href="../about/about.php">台中</a> </span>
                    <span class="gaoxiong"><a href="../about/about.php">高雄</a> </span>

                    <span class="point taipei_point"><a href="../about/about.php"><img src="image/index/map/point.png" alt="point"></a> </span>
                    <span class="point hualian_point"><a href="../about/about.php"><img src="image/index/map/point.png" alt="point"></a> </span>
                    <span class="point taoyuan_point"><a href="../about/about.php"><img src="image/index/map/point.png" alt="point"></a> </span>
                    <span class="point taizhong_point"><a href="../about/about.php"><img src="image/index/map/point.png" alt="point"></a> </span>
                    <span class="point gaoxiong_point"><a href="../about/about.php"><img src="image/index/map/point.png" alt="point"></a> </span>
                </div>

                <!-- map_bg -->
                <div class="car_area">
                    <div class="map_bg">
                        <img src="image/index/map/map_bg4.png" alt="map_bg">
                    </div>
                    <div class="aboutus_car">
                        <div class="car car_taipai">
                            <a href="../about/about.php"> <img src="image/aboutus/aboutus_taipeicar.png" alt="car_taipai"></a>
                        </div>
                        <div class="car car_taoyuan">
                            <a href="../about/about.php"> <img src="image/aboutus/aboutus_taoyuancar.png" alt="car_taoyuan"></a>
                        </div>
                        <div class="car car_taichung">
                            <a href="../about/about.php"> <img src="image/aboutus/aboutus_taichungcar.png" alt="taichung"></a>
                        </div>
                        <div class="car car_hualien">
                            <a href="../about/about.php"> <img src="image/aboutus/aboutus_hualiencar.png" alt="car_hualien"></a>
                        </div>
                        <div class="car car_kaohsiung">
                            <a href="../about/about.php"> <img src="image/aboutus/aboutus_kaohsiungcar.png" alt="car_kaohsiung"></a>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <div class="index_footer">
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
            <p>Copyright © 2019 CHOCOLINE All rights reserved</p>

        </div>

    </main>





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
                <button id="robot_prev_button" class="prev_button"><i class="fas fa-angle-left"></i></button>
                <div id="keyword_space" class="keyword_space" style="width:200px">
                    <div id="keyword_wrap" class="keyword_wrap" style="margin-left: 0px;">
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






    <script src="../common/js/header.js"></script>
    <script src="../common/js/robot.js"></script>
    <script src="../common/js/login.js"></script>
    <script src="js/index.js"></script>
    <script src="js/contest.js"></script>



    <script type="text/javascript">
        (function() {

            document.onreadystatechange = () => {

                if (document.readyState === 'complete') {
                    let el = document.querySelector('#loveline');
                    let myAnimation = new LazyLinePainter(el, {
                        "ease": "easeLinear",
                        "strokeWidth": 4.5,
                        "strokeOpacity": 1,
                        "strokeColor": "#C0382B",
                        "reverse": true
                    });
                    myAnimation.paint();
                }
            }

        })();
    </script>


    <script>
        function stop_tweenmax() {
            if (screen.width > 1024) {
                setTween(choco_black);
            } else {
                TweenMax.killTweensOf('.choco_black');
                TweenMax.killTweensOf('.choco_white');
                TweenMax.killTweensOf('.choco_milk');
            }
        }
        window.addEventListener('load', stop_tweenmax);
    </script>



</body>

</html>