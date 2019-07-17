<?php
session_start();
if(!isset($_SESSION["mem_id"])){
    $_SESSION["mem_id"] = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>login</title>
	<link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
</head>

<body>
	<!-- header start -->
	<header>
		<div class="m_header">
			<div class="navbar">
				<div class="burger">
					<figure>
						<img src="image/headerfooter/burger.png" alt="burger" />
					</figure>
				</div>
				<div class="logo">
					<a href="../index/index.php">
						<img src="image/headerfooter/logo.png" alt="CHOCOLINE" />
					</a>
				</div>
				<div class="status">
					<figure>
						<a  class="spanLogin" href="javascript:;">
							<img src="image/headerfooter/icon_member.png" alt="member" />
							<!-- icon點擊後跳出登入註冊燈箱 -->
						</a>
						<span id="mem_id_hide_mobile" style="display:none"><?php echo $_SESSION["mem_id"]?></span>
						<!-- 隱藏id名稱檢測是否抓到資料 -->
						<span id="spanLoginText_mobile" style="display:none">登入</span>
						<!-- 隱藏登入登出 -->
					</figure>
					<figure>
						<a href="../cart/cart.php">
							<img src="image/headerfooter/icon_cart.png" alt="cart" />
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
					<img src="image/headerfooter/menuclose.png" alt="close" />
				</figure>
			</ul>
		</div>
		<div class="d_header">
			<div class="logo">
				<a href="../index/index.php">
					<img src="image/headerfooter/logo.png" alt="CHOCOLINE" />
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
							<img src="image/headerfooter/icon_member.png" alt="member" />
							<!-- icon點擊後跳出登入註冊燈箱 -->
						</a>
						<span id="mem_id_hide" style="display:none"><?php echo $_SESSION["mem_id"]?></span>
						<!-- 隱藏id名稱檢測是否抓到資料 -->
						<span id="spanLoginText" style="display:none">登入</span>
						<!-- 隱藏登入登出 -->
					</figure>
					<figure>
						<a href="../cart/cart.php">
							<img src="image/headerfooter/icon_cart.png" alt="cart" />
						</a>
					</figure>
				</div>
			</div>
		</div>
		<!-- <form action="login.php" method="post"> -->
		<!-- 燈箱：登入 -->
		<div id="lightBox" style="display:none">
			<div id="tableLogin">
				<img class="login_bg" src="image/login/login_bg.png" alt="login_bg">
				<div class="login_password">
					<a href="javascript:;" class="btnLoginCancel">
						<img src="image/login/login_closeicon.png" alt="">
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
				<img class="login_bg" src="image/login/login_bg.png" alt="login_bg">
				<div class="login_password">
					<a href="javascript:;" class="btnLoginCancel">
						<img src="image/login/login_closeicon.png" alt="">
					</a>			
					<a href="javascript:;" id="rebtnLogin">會員登入</a><br>
					<h3>重設密碼</h3>
					<p>請輸入帳號註冊時所留的電子<br>
						郵件地址，以驗證您的資料</p>
					<input type="email" name="mem_email" id="mem_email" value="" placeholder="輸入E-mail"><br>
					<input type="password" name="mem_psw" id="new_mem_psw" value="" placeholder="輸入新密碼  (6位字母、數字)"><br>
					<input type="password" name="mem_psw" id="re_new_mem_psw" value="" placeholder="再次確認新密碼"><br>
					<a href="javascript:;" class="btn orange_l" id="repassword">送出</a><br>
				</div>
			</div>
		</div>
		<!-- 會員註冊 -->
		<div id="registerLightBox" style="display:none">
			<div id="registered">
				<img class="login_bg" src="image/login/login_bg.png" alt="login_bg">
				<div class="login_register">
					<a href="javascript:;" class="btnLoginCancel">
						<img src="image/login/login_closeicon.png" alt="btnLoginCancel">
					</a>			
					<h3>會員註冊</h3>
					<p>嗨！新朋友～歡迎加入CHOCOLINE會員<br>
							請填下您的個人資料！* 為必填。</p>
					<span>*帳號</span><input type="text" name="mem_id" id="f_mem_id" value="" placeholder="設定帳號"><br>
					<span><input type="button" id="btnCheckId" value="檢查帳號是否可用"></span>
					<!-- <span id="idMsg"></span><br> -->
					<p id="idMsg">請輸入帳號</p><br>
					<span>*E-mail</span><input type="email" name="mem_email" id="f_mem_email" value="" placeholder="輸入E-mail 必須包括 ( @ 和 . )" ><br>
					<span>*密碼</span><input type="password" name="mem_psw" id="f_mem_psw" value="" placeholder="設定密碼 (6位字母、數字)"><br>
					<span>*密碼確認</span><input type="password" name="mem_psw" id="f_re_mem_psw" value="" placeholder="再次確認密碼 (再次確認)"><br>
					<!-- <span>*頭像</span><input type="file" name="mem_headshot" id="mem_headshot"><br> -->
					<!-- <img src="image/login/logo_icon_200x200.png" alt="" name="mem_headshot" id="mem_headshot" style="display:none"> -->
					<!-- <div id="mem_headshot" data-profile-src="image/login/logo_icon_200x200.png" style="display:none"></div>  -->
					<!-- 隱藏預設頭像欄位 -->
					<!-- <p>* 為必填欄位，請填妥欄位資訊。</p> -->
					<a href="javascript:;" class="btn orange_l" id="register_btn">送出</a><br>
				</div>
			</div>
		</div>
		<!-- </form> -->

	</header>
	<!-- header end -->
	<section class="container">
		<div class="aboutus"></div>
	</section>
	<!-- footer start -->
	<footer>
		<div class="connect">
			<figure>
				<a href="javascript:;">
					<img src="image/headerfooter/icon_fb.png" alt="Facebook" />
				</a>
			</figure>
			<figure>
				<a href="javascript:;">
					<img src="image/headerfooter/icon_pinterest.png" alt="Pinterest" />
				</a>
			</figure>
			<figure>
				<a href="javascript:;">
					<img src="image/headerfooter/icon_ig.png" alt="Instagram" />
				</a>
			</figure>
		</div>
		<p>Copyright © 2019 CHOCOLINE All rights reserved</p>
		<div class="bg">
			<figure class="footer_water">
				<img src="image/headerfooter/footer_water_bg.png" alt="water" />
			</figure>
			<figure class="footer_square1">
				<img src="image/headerfooter/footer_1_bg.png" alt="chocolate" />
			</figure>
			<figure class="footer_square2">
				<img src="image/headerfooter/footer_2_bg.png" alt="chocolate" />
			</figure>
			<figure class="footer_square3">
				<img src="image/headerfooter/footer_3_bg.png" alt="chocolate" />
			</figure>
			<figure class="footer_square4">
				<img src="image/headerfooter/footer_4_bg.png" alt="chocolate" />
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
          <p id="message_answer_sample" class="message message_answer">
            有什麼需要我幫忙的嗎?
          </p>
          <p
            id="message_ask_sample"
            class="message message_ask"
            style="display:none"
          >
            歡迎光臨CHOCOLINE....!!
          </p>
        </div>
        <div class="keyword_area">
          <button id="robot_prev_button" class="prev_button">
            <i class="fas fa-angle-left"></i>
          </button>
          <div id="keyword_space" class="keyword_space" style="width:200px">
            <div
              id="keyword_wrap"
              class="keyword_wrap"
              style="margin-left: 0px;"
            >
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
          <input
            id="leave_message"
            type="text"
            placeholder="請問..."
            autocomplete="off"
          />
          <input id="message_submit" type="submit" value="送出" />
        </form>
      </div>
    </div>
    <!-- robot end -->
	<script src="../common/js/robot.js"></script>
	<script src="../common/js/header.js"></script>
	<script src="js/main.js"></script>
	<script src="js/login.js"></script>
</body>

</html>