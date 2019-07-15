 <?php
    session_start();
    if(isset($_SESSION["mem_id"])!=true){
        $_SESSION["mem_id"] = null;
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
    <link rel="stylesheet" href="css/game.css">
    <title>CHOCO 遊戲</title>
</head>
<body class="game_body">
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
                    <a class="spanLogin" href="../member/member.php">
                        <img src="../common/image/headerfooter/icon_member.png" alt="member" />
                        <!-- icon點擊後跳出登入註冊燈箱 -->
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
                <li class="nowpage"><a href="../game/game.php">CHOCO 遊戲</a></li>
                <li><a href="../store/store.php">CHOCO 商城</a></li>
                <li><a href="../about/about.php">關於 CHOCO</a></li>
            </ul>
            <div class="status">
            <figure>
                <a class="spanLogin" href="javascript:;">
                    <img src="../common/image/headerfooter/icon_member.png" alt="member" />
                    <!-- icon點擊後跳出登入註冊燈箱 -->
                </a>
                <!-- <span id="mem_name">&nbsp;</span> -->
                <span id="mem_id_hide" style="display:none"><?php echo $_SESSION["mem_id"]?></span>
                <span id="spanLoginText">登入</span>
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
                <input type="password" name="mem_psw" id="mem_psw" value="" placeholder="密碼"><br>
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
                <input type="password" name="mem_psw" id="new_mem_psw" value="" placeholder="輸入新密碼"><br>
                <input type="password" name="mem_psw" id="re_new_mem_psw" value="" placeholder="再次確認新密碼"><br>
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
                        請填下您的個人資料。</p>
                <span>*帳號</span><input type="text" name="mem_id" id="f_mem_id" value="" placeholder="設定帳號"><br>
                <span><input type="button" id="btnCheckId" value="檢查帳號是否可用"></span>
                <!-- <span id="idMsg"></span><br> -->
                <p id="idMsg">請輸入帳號</p><br>
                <span>*E-mail</span><input type="email" name="mem_email" id="f_mem_email" value="" placeholder="輸入E-mail"><br>
                <span>*密碼</span><input type="password" name="mem_psw" id="f_mem_psw" value="" placeholder="設定密碼"><br>
                <span>*密碼確認</span><input type="password" name="mem_psw" id="f_re_mem_psw" value="" placeholder="再次確認密碼"><br>
                <p>* 為必填欄位，請填妥欄位資訊。</p>
                <a href="javascript:;" class="btn orange_l" id="register_btn">送出</a><br>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
<!-- game start -->
<div class="blackscreen">請將螢幕固定為橫向</div>
<section class="game_container">
    <div id="score">
        <p>SCORE : <span >0000</span></p>
        <p>SCORE : <span id="scorenum">0</span></p>
    </div>
    <div id="time">
        <p id="outerword"><span class="minute">0</span>:<span class="second">30</span></p>
        <p id="innerword"><span class="minute">0</span>:<span class="second">30</span></p>
    </div>
    <div class="title_decoration">
        <img src="image/common/title.png" alt="">
        <h2>CHOCO星人選美排名 </h2>
    </div>
    <figure id="introduce">
        <img src="image/game/phonerule.png" alt="rule">
        <img src="image/game/rule.png" alt="rule">
        <img src="image/game/keyl.png" alt="keyl">
        <img src="image/game/keyr.png" alt="keyr">
        <a href="javascript:;" class="btn orange_xl" id="start"><span>START</span></a>
    </figure>
    <figure id="timeup">
        <img src="image/game/t.png" alt="t">
        <img src="image/game/i.png" alt="i">
        <img src="image/game/m.png" alt="m">
        <img src="image/game/e.png" alt="e">
        <img src="image/game/u.png" alt="u">
        <img src="image/game/p.png" alt="p">
    </figure>
    <div class="choco_bonus">
        <div class="bonus_house">
           <img src="image/game/bonus_house.png" alt="bonus_house">
           <figure class="CHOCO bear">
               <img src="image/game/bearhand.png" alt="bearhand" class="bearhand">
               <img src="image/game/beareye.png" alt="beareye" class="eyeleft">
               <img src="image/game/bearblink.png" alt="bearblink" class="blinkleft">
               <img src="image/game/bearne.png" alt="bear" class="bearne">
           </figure>
           <figure class="CHOCO cake">
                <img src="image/game/cakehand.png" alt="cakehand" class="cakehand">
               <img src="image/game/cakeeye.png" alt="cakeeye"
               class="eye">
               <figure class="blink">
                   <img src="image/game/cakeblink.png" alt="cakeblink">
               </figure>
               <img src="image/game/cakene.png" alt="cake"
               class="cakene">
           </figure>
           <div class="cardlist">
               <div class="card whitecard" id="whitecard">
                    <figure class="front">
                       <img src="image/game/whitecard.png" alt="white">
                    </figure>
                    <figure class="back">
                        <img src="image/game/whitecardback.png" alt="white">
                        <figcaption class="outtext"></figcaption>
                        <figcaption class="innertext"></figcaption>
                    </figure>
                </div>
               <div class="card milkcard" id="milkcard">
                    <figure class="front">
                        <img src="image/game/milkcard.png" alt="milk">
                    </figure>
                    <figure class="back">
                        <img src="image/game/milkcardback.png" alt="milk">
                        <figcaption class="outtext"></figcaption>
                        <figcaption class="innertext"></figcaption>
                    </figure>
               </div>
               <div class="card blackcard" id="blackcard">
                    <figure class="front">
                        <img src="image/game/blackcard.png" alt="black">
                    </figure>
                    <figure class="back">
                        <img src="image/game/blackcardback.png" alt="black">
                        <figcaption class="outtext"></figcaption>
                        <figcaption class="innertext"></figcaption>
                    </figure>
               </div>0
           </div>
        </div>
        <div class="final">
            <figure>
                <img src="image/game/finalboard.png" alt="board">
            </figure>
            <figure id="board_close">
                <a href="game.php">
                    <img src="image/game/board_close.png" alt="close">
                </a>
            </figure>
            <p><span id="finalpoint">0</span> 點</p>
            <a href="game.php" class="btn cyan_l" id="again"><span>再玩一次</span></a>
            <a href="../store/store.php" class="btn orange_l" id="gostore"><span>進入商城</span></a>
          
        </div>
    </div>
    <canvas id="canvas" width="1920" height="939" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
    <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:1920px; height:939px; position: absolute; left: 0px; top: 0px; display: block;">
    </div>
</section>
<!-- game end -->

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="Collision-Detection-for-EaselJS-master/src/ndgmr.Collision.js"></script>
<script src="chocogame.js?1562237267956"></script>
<script src="../common/js/header.js"></script>
<script src="../common/js/login.js"></script>
<script src="js/game.js"></script>
</body>
</html>



