<?php

session_start();
if(!isset($_SESSION["mem_id"])){
    $_SESSION["mem_id"] = null;
}

$errMsg = "";
try {
    require_once("../common/php/connect_choco.php");

    $sql = "select * from customized_product ";
    $products = $pdo->query($sql);
} catch (PDOException $e) {
    echo "錯誤 : ", $e->getMessage(), "<br>";
    echo "行號 : ", $e->getLine(), "<br>";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/custom.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
  <link rel="icon" type="image/png" href="image/common/logo.png">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" integrity="sha256-AAhU14J4Gv8bFupUUcHaPQfvrdNauRHMt+S4UVcaJb0=" crossorigin="anonymous"></script>
  <script src="js/html2canvas.min.js"></script>
  <script src="../common/js/header.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/@jaames/iro/dist/iro.min.js"></script>

  <title>客製CHOCO</title>
  
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
                        <img src="image/headerfooter/logo.png" alt="CHOCOLINE">
                    </a>
                </div> 
                <div class="status">
                    <figure>
                        <a class="spanLogin" href="javascript:;">
                            <img src="../common/image/member/<?php echo $_SESSION["mem_headshot"]; ?>" alt="member" />
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
                    <li><a href="../contest/contest.php">CHOCO 選美</a></li>
                    <li class="nowpage"><a href="../game/game.php">CHOCO 遊戲</a></li>
                    <li><a href="../store/store.php">CHOCO 商城</a></li>
                    <li><a href="../about/about.php">關於 CHOCO</a></li>
                </ul>
                <div class="status">
                <figure>
                    <a class="spanLogin" href="javascript:;">
                        <img src="../common/image/member/<?php echo $_SESSION["mem_headshot"]; ?>" alt="member" />
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
  <!-- ----- 第一屏 Start ----- -->

  <section class="custom">
  <div id="cloud">
                <img src="image/custom/cloud.png" alt="cloud">
            </div>

    <div class="wrap_custom">
      <div class="title_decoration">
        <img src="image/common/title.png" alt="title" />
        <h2>動手做專屬CHOCO星人<br />送給想傳情的人吧</h2>
      </div>
      <div class="playground">
        <img src="image/custom/bg6.png" alt="" />
      </div>

      <div class="frist_step">
        <div class="frist_stepInfo">
          <h3>第一步:</h3>
          <p>選擇喜愛的巧克力外型</p>
        </div>
      </div>
      
      <!-- ----- 形狀輪播 Start ----- -->

      <div class="custom_type">

        <div class="shape shapePos0">
          <img src="image/custom/small/long_n_x.png" class="big_cho" alt="long" />
        </div>
        <div class="shape shapePos1">
          <img src="image/custom/small/roll_n_x.png" class="big_cho" alt="roll" />
        </div>
        <div class="shape shapePos2">
          <img src="image/custom/small/bear_n_x.png" class="big_cho" alt="bear" />
        </div>
        <div class="shape shapePos3">
          <img src="image/custom/small/cake_n_x.png" class="big_cho" alt="cake" />
        </div>
        <div class="shape shapePos4">
          <img src="image/custom/small/cicr_n_x.png" class="big_cho" alt="cicr" />
        </div>
        <img src="image/custom/right.png" alt="right" class="right_btn" id="toRight" />
        <img src="image/custom/left.png" alt="left" class="left_btn" id="toLeft" />
      </div>
      <div class="next_button">
        <a href="#second" class="btn cyan_s " id="next_page"><span>第二步</span></a>
      </div>

      <!-- ----- 形狀輪播 End ----- -->
    </div>
    

</section>

     

    <!-- ----- 第一屏 End ----- -->
    <div class="choco_background">
    <!-- <img src="image/custom/circle_bg.png" alt="" class="choco_img" /> -->
  </div>
    <!-- ----- 第二屏 Start ----- -->

    <section class="base" id="second">
      <div class="choose_base">
        <div class="select_base">
          <div class="second_step">
            <div class="second_stepInfo">
              <h3>第二步:</h3>
              <p>選擇巧克力基底/配料口味</p>
            </div>
          </div>
          <div class="base_choco">
            <figure class="choco choco1">
              <img src="image/custom/small/M1_SP_001.png" class="cho" alt="white" />
              <figcaption>
                <p class="White_CHO">White CHOCO</p>
              </figcaption>
            </figure>

            <figure class="choco choco2">
              <img src="image/custom/small/M1_SP_002.png" class="cho" alt="milk" />
              <figcaption>
                <p>Milk CHOCO</p>
              </figcaption>
            </figure>

            <figure class="choco choco3">
              <img src="image/custom/small/M1_SP_003.png" class="cho" alt="black" />
              <figcaption>
                <p>Black CHOCO</p>
              </figcaption>
            </figure>
          </div>
        </div>

        <div class="select_type ">
          <div class="choco_overview" id="choco_pos">

            <img src="image/custom/small/bear_d_x.png" alt="" id="base_model">

          </div>



          <div class="choco_type">
            <ul>
              <li class="fruit " >
                <figure >
                  <img src="image/custom/small/fr_b_001.png" alt="blue berry" />
                  <p>藍莓</p>
                </figure>
              </li>
              <li class="fruit">
                <figure>
                  <img src="image/custom/small/fr_b_002.png" alt="grape" />
                  <figcaption>
                    <p>葡萄</p>
                  </figcaption>
                </figure>
              </li>
              <li class="fruit">
                <figure>
                  <img src="image/custom/small/fr_b_003.png" alt="bo ho" />
                  <figcaption>
                    <p>薄荷</p>
                  </figcaption>
                </figure>
              </li>
              <li class="fruit">
                <figure>
                  <img src="image/custom/small/fr_b_004.png" alt="orange" />
                  <figcaption>
                    <p>柑橘</p>
                  </figcaption>
                </figure>
              </li>
              <li class="fruit">
                <figure>
                  <img src="image/custom/small/fr_b_005.png" alt="strawberry" />
                  <figcaption>
                    <p>草莓</p>
                  </figcaption>
                </figure>
              </li>
            </ul>
          </div>



          <div class="info_bar">


            <p class="fruit_text blue_text">藍莓：莓果的酸甜與滑順巧克力一次品嚐！</p>
            <p class="fruit_text grape_text">葡萄：莓果的酸甜與滑順巧克力一次品嚐！</p>
            <p class="fruit_text bo_text">薄荷：莓果的酸甜與滑順巧克力一次品嚐！</p>

            <p class="fruit_text orange_text">柑橘：莓果的酸甜與滑順巧克力一次品嚐！</p>
            <p class="fruit_text strawberry_text">草莓：莓果的酸甜與滑順巧克力一次品嚐！</p>
          </div>

          <div class="next_button">
            <a href="#thrid" class="btn cyan_s " id="next_page2" ><span>第三步</span></a>
          </div>

        </div>



        <div class="select_info">
          <div class="cho_info">
            <div class="cho_info_photo">
              <img src="image/custom/talk.png" alt="">
            </div>
            <div class="choco_text black_text">
              <h3>White CHOCO</h3>
              <p>
                白巧克力：甜度增加腦內啡，

              </p>
              <p>提升使人產生幸福及愉悅感的！！</p>

              <p>
                適合朋友和獨享
              </p>

            </div>
            <div class="choco_text milk_text">
              <h3>Milk CHOCO</h3>
              <p>
                牛奶巧克力：可運動後飲用低脂巧克力牛奶
              </p>
              <p>提供平等的或可能優於肌肉恢復藥物！！</p>

              <p>
                適合朋友和獨享
              </p>
            </div>
            <div class="choco_text white_text">
              <h3>Black CHOCO</h3>
              <p>
                黑巧克力：可可多酚的高抗氧化作用
              </p>
              <p>能夠抑制老化，促進肌膚的代謝！！</p>

              <p>
                適合朋友和獨享
              </p>
            </div>
            <!-- <img src="image/custom/talk.png" alt="" /> -->

          </div>

          <div class="total_price">
            <img src="image/custom/price.png" alt="price" />
            <h4>TOTAL</h4>
            <p id="price">
              NT$0
            </p>
            
          </div>
          
        </div>

      </div>



    </section>


    <!-- ----- 第二屏 End ----- -->


    <!-- ----- 第三屏 Start ----- -->

    <section class="outlook" >
      <div class="thrid_step_moble">
        <img src="image/custom/bg8.png" alt="background">
        <div class="thrid_stepInfo">
          <h3>第三步:</h3>
          <p>幫專屬CHOCO星人取名字</p>
          <p>選擇表情和飾品</p>
        </div>
      </div>

      <div class="outlok_wrap">

        <!-- ----- left side start ----- -->


        <div class="select_outlook">

          <div class="outlook_name">
            <div class="outlook_name_photo">
              <img src="image/custom/bg7.png" alt="" />
            </div>
            <div class="for_name">

              <h3 id="thrid">給CHOCO星人名字</h3>
              <form action="post">
              <input type="text" name="c_name" id="" class="name_text" placeholder="請給CHOCO星人名字" />
           </form> 
          </div>

          </div>
<!-- 
          <div class="fix_photo_mobile">
            <img src="image/custom/bear1.png" alt="bear">
          </div>
          <div class="fix_bar_mobile">
            <div class="bar_photo">
              <img src="image/custom/bar_item6.png" alt="large">
            </div>
            <div class="bar_photo">
              <img src="image/custom/bar_item5.png" alt="small">
            </div>
            <div class="bar_photo">
              <img src="image/custom/bar_item1.png" alt="right">
            </div>
            <div class="bar_photo">
              <img src="image/custom/bar_item2.png" alt="left">
            </div>
            <div class="bar_photo">
              <img src="image/custom/bar_item.png" alt="reset">
            </div>
          </div> -->
          <!-- ----- item select start----- -->

          <div class="select_item">
            <div class="tab_item">
              <button class="tab_link" onclick="openCity(event, 'eyes')">眼睛</button>
              <button class="tab_link" onclick="openCity(event, 'mouses')">嘴巴</button>
              <button class="tab_link" onclick="openCity(event, 'other')">飾品</button>
            </div>
            <div class="clearfix"></div>

            <!-- ----- 眼睛 start----- -->
            <div class="eye_select type " id="eyes">
              <div class="eye_types ">
                <div class="eye_items ">
                  <img src="image/custom/small/eye1.png" class="eye_type" alt="eye1" />
                </div>
                <div class="eye_items">
                  <img src="image/custom/small/eye2.png" class="eye_type" alt="eye2" />
                </div>
                <div class="eye_items">
                  <img src="image/custom/small/eye3.png" class="eye_type" alt="" />
                </div>
                <div class="eye_items">
                  <img src="image/custom/small/eye4.png " class="eye_type" alt="" />
                </div>
              </div>
              <div class="eye_types">
                <div class="eye_items">
                  <img src="image/custom/small/eye5.png" class="eye_type" alt="eye1" />
                </div>
                <div class="eye_items">
                  <img src="image/custom/small/eye5.png" class="eye_type" alt="eye2" />
                </div>
                <div class="eye_items">
                  <img src="image/custom/small/eye7.png" class="eye_type" alt="" />
                </div>
                <div class="eye_items">
                  <img src="image/custom/small/eye8.png" class="eye_type" alt="" />
                </div>
              </div>
              <div class="eye_types">
                <div class="eye_items">
                  <img src="image/custom/small/eye9.png" class="eye_type" alt="eye1" />
                </div>
                <div class="eye_items">
                  <img src="image/custom/small/eye10.png" class="eye_type" alt="eye2" />
                </div>
                <div class="eye_items">
                  <img src="image/custom/small/eye11.png" class="eye_type" alt="" />
                </div>
                <div class="eye_items">
                  <img src="image/custom/small/eye12.png" class="eye_type" alt="" />
                </div>
              </div>
            </div>

            <!-- ----- 眼睛 End ----- -->

            <!-- ----- 嘴巴 start----- -->

            <div class="mouse_select type" id="mouses">
              <div class="mouse_types">
                <div class="mouse_items">
                  <img src="image/custom/small/mouse1.png" class="mouse_type" alt="eye1" />
                </div>
                <div class="mouse_items">
                  <img src="image/custom/small/mouse2.png" class="mouse_type" alt="eye2" />
                </div>
                <div class="mouse_items">
                  <img src="image/custom/small/mouse3.png" class="mouse_type" alt="" />
                </div>
                <div class="mouse_items">
                  <img src="image/custom/small/mouse4.png" class="mouse_type" alt="eye1" />
                </div>
              </div>
              <div class="mouse_types">
                <div class="mouse_items">
                  <img src="image/custom/small/mouse5.png" class="mouse_type" alt="eye2" />
                </div>
                <div class="mouse_items">
                  <img src="image/custom/small/mouse6.png" class="mouse_type" alt="" />
                </div>
                <div class="mouse_items">
                  <img src="image/custom/small/mouse7.png" class="mouse_type" alt="eye1" />
                </div>
                <div class="mouse_items">
                  <img src="image/custom/small/mouse8.png" class="mouse_type" alt="eye2" />
                </div>
              </div>
              <div class="mouse_types">
                <div class="mouse_items">
                  <img src="image/custom/small/mouse9.png" class="mouse_type" alt="eye1" />
                </div>
                <div class="mouse_items">
                  <img src="image/custom/small/mouse10.png" class="mouse_type" alt="eye2" />
                </div>
                <div class="mouse_items">
                  <img src="image/custom/small/mouse11.png" class="mouse_type" alt="" />
                </div>
                <div class="mouse_items">
                  <img src="image/custom/small/mouse12.png" class="mouse_type" alt="eye1" />
                </div>
              </div>
            </div>


            <!-- ----- 嘴巴 End ----- -->

            <!-- ----- 飾品 start----- -->

            <div class="others_select type" id="other">
              <div class="others_types">
                <div class="others_items">
                  <img src="image/custom/small/others1.png" class="others_type" alt="eye1" />
                </div>
                <div class="others_items">
                  <img src="image/custom/small/others2.png" class="others_type" alt="eye2" />
                </div>
                <div class="others_items">
                  <img src="image/custom/small/others3.png" class="others_type" alt="" />
                </div>
                <div class="others_items">
                  <img src="image/custom/small/others4.png" class="others_type" alt="" />
                </div>
              </div>
              <div class="others_types">
                <div class="others_items">
                  <img src="image/custom/small/others5.png" class="others_type" alt="eye1" />
                </div>
                <div class="others_items">
                  <img src="image/custom/small/others6.png" class="others_type" alt="eye2" />
                </div>
                <div class="others_items">
                  <img src="image/custom/small/others7.png" class="others_type" alt="" />
                </div>
                <div class="others_items">
                  <img src="image/custom/small/others8.png" class="others_type" alt="" />
                </div>
              </div>
              <div class="others_types">
                <div class="others_items">
                  <img src="image/custom/small/others9.png" class="others_type" alt="eye1" />
                </div>
                <div class="others_items">
                  <img src="image/custom/small/others10.png" class="others_type" alt="eye2" />
                </div>
                <div class="others_items">
                  <img src="image/custom/small/others11.png" class="others_type" alt="" />
                </div>
                <div class="others_items">
                  <img src="image/custom/small/others12.png" class="others_type" alt="" />
                </div>
              </div>
            </div>

            <!-- ----- 飾品 End ----- -->
          </div>
        </div>

        <!-- ----- left side End ----- -->
 

        <!-- ----- middle side start ----- -->

        <div class="outlook_fix">
          
          <div class="fix_photo" id="fix">

            <div class="eye_pos pos1">
              <img src="image/custom/img.png" alt="" class="eye_demo demo" style = "transform: rotate(0deg) scale(1)" >
            </div>

            <div class="eye_pos pos2">
              <img src="image/custom/img.png" alt="" class="eye_demo demo" style = "transform: rotate(0deg) scale(1.0)">
            </div>
            
            <div class="mouse_pos ">
              <img src="image/custom/img.png" alt="" class="mouse_demo demo" style = "transform: rotate(0deg) scale(1.0)">
            </div>

            <div class="others_pos">
              <img src="image/custom/img.png" alt="" class="others_demo demo" style = "transform: rotate(0deg) scale(1.0)">
            </div> 

            <div class="others_pos">
              <img src="image/custom/img.png" alt="" class="others_demo demo" style = "transform: rotate(0deg) scale(1.0)">
            </div>
            
            <img src="image/custom/small/bear_d_x.png" alt="" id="cho_pos">

          </div>

          <div class="fix_bar "  >

            <div class="bar_photo"  id="big">
              <img src="image/custom/bar_item6.png" alt="big">
            </div>

            <div class="bar_photo" id="small">
              <img src="image/custom/bar_item5.png" alt="small">
            </div>

            <div class="bar_photo"id="right">
              <img src="image/custom/bar_item1.png" alt="right">
            </div>

            <div class="bar_photo"id="left">
              <img src="image/custom/bar_item2.png" alt="left">
            </div>

            <div class="bar_photo"id="reset">
              <img src="image/custom/bar_item.png" alt="reset">
            </div>

          </div>

          <div class="total_price">
            <img src="image/custom/price.png" alt="price" />
            <h4>TOTAL</h4>
            <p id="price2">
              NT$350
            </p>
          </div>
          
        </div>

        <!-- ----- middle side End ----- -->


        <!-- ----- right side start ----- -->
        <div class="step_info"id="thrid">

          <div class="thrid_step">
            <img src="image/custom/bg8.png" alt="background">
            <div class="thrid_stepInfo">
              <h3>第三步:</h3>
              <p>幫專屬CHOCO星人取名字</p>
              <p>選擇表情和飾品</p>
            </div>
          </div>
          <div class="right_side_background">
            <img src="image/custom/bg10.png" alt="">
          </div>
          
            <a href="#fourth" class="btn cyan_s " id="next_page3"><span>第四步</span></a>
       
        </div>
    

      
    </section>

    <!-- ----- 第三屏 End ----- -->

    <!-- ----- 第四屏 Start ----- -->


    <section class= "card">

<div class="fourth_step">

      <img src="image/custom/8.png" alt="">

  <div class="fourth_step_info">
      <h3>第四步:</h3>
      <p id="fourth">搭配卡片樣式/輸入內容</p>
   </div>

</div>


  <div class="card_wrap">
    
      <div class="card_custom">

          <div class="controls" >
            
          <div class="controls_item">
          <h4>選擇畫筆顏色</h4>
                <ul>
                  <li class="red selected"></li>
                  <li class="blue"></li>
                  <li class="yellow"></li>
                </ul>

              <div id="colorSelect">
                  <span id="newColor"></span>
                  <div class="colorPicker"></div>  
              </div>

              <button id="addNewColor">Add Color</button>
          </div>
        
        
             
            <div id="brushSelect">
            <h4>選擇畫筆</h4>
                  <span id="changeBrush"></span>

                  <div class="sliders">
                    <p>
                      <label for="brush_size">Size</label>
                      <input id="brush_size" name="brush_size" type="range" min=5 max=100 value=10>
                    </p>
                    <form id="brushShapeForm">
                      <input id="brush_shape_square" type="radio" name="brush_shape" value="square" checked>Square
                      <br>
                      <input id="brush_shape_circle" type="radio" name="brush_shape" value="circle">Circle
                    </form>
                    <button id="SaveCnv">Save Image</button>  
                  </div>

            </div>
                 
        </div>
   
    

          <div class="card_items">

                <canvas  id="ccc" width="280" height="365" >
          
                </canvas>
             
                <div class="total_price">
    <img src="image/custom/price.png" alt="price" />
    <h4>TOTAL</h4>
    <p id="sub_price">
      NT$350
    </p>
  </div>
  <div class="final_btn">
  <div class="next_button">
         <button type="submit" class="btn cyan_s " onclick="aa()">加入購物車</button>
      </div>
  </div>
 
            </div>

      <div class="card_acc"id="fouth">
              <div class="acc_block">
                  <div class="acc_item">
                      <img src="image/custom/card1.png" alt="" id="srcImg1" onclick="loadImage1()">
                  </div>
                  <div class="acc_item">
                      <img src="image/custom/card2.png" alt="" id="srcImg2" onclick="loadImage2()">
                  </div>
              </div>

              <div class="acc_block">
                  <div class="acc_item">
                        <img src="image/custom/card3.png" alt="" id="srcImg3" onclick="loadImage3()">
                  </div>
                  <div class="acc_item">
                        <img src="image/custom/card5.png" alt="" id="srcImg4" onclick="loadImage4()">
                  </div>
              </div>

              <div class="acc_block">
                  <div class="acc_item" >
                       <img src="image/custom/card4.png" alt="" id="srcImg5" onclick="loadImage5()">
                  </div>
                  <div class="acc_item">
                        <img src="image/custom/card6.png" alt="" id="srcImg6" onclick="loadImage6()">
                  </div>      
              </div>

     </div>
     
         <!-- <img src="image/custom/bar_item.png" alt="reset" class="zzz" onclick="clean()"> -->
      
            <!-- <div  class="next_button">
          <input type="button" onclick="aa()" class="btn cyan_s " >
      </div> -->
    </div>
    <div class="card_custom_mobile">

      <div class="card_pos">
        <img src="image/custom/img.png" alt="" class= "card_photo_pos">
        <img src="image/custom/img.png" alt="" class= "card_photo_pos">
        <img src="image/custom/img.png" alt="" class= "card_photo_pos">
        <img src="image/custom/img.png" alt="" class= "card_photo_pos">
        <img src="image/custom/img.png" alt=""class= "card_photo_pos">      
      </div>

      <div class="card_acc">
              <div class="acc_block">
                  <div class="acc_item">
                      <img src="image/custom/card9.png" alt="" id="srcImg1" >
                  </div>
                  <div class="acc_item">
                      <img src="image/custom/card8.png" alt="" id="srcImg2">
                  </div>
              </div>

              <div class="acc_block">
                  <div class="acc_item">
                        <img src="image/custom/card3.png" alt="" id="srcImg3" >
                  </div>
                  <div class="acc_item">
                        <img src="image/custom/card5.png" alt="" id="srcImg4" >
                  </div>
              </div>

              <div class="acc_block">
                  <div class="acc_item">
                       <img src="image/custom/card4.png" alt="" id="srcImg5" >
                  </div>
                  <div class="acc_item">
                        <img src="image/custom/card6.png" alt="" id="srcImg6" >
                  </div>      
              </div>
        </div>
        <div class="total_price">
    <img src="image/custom/price.png" alt="price" />
    <h4>TOTAL</h4>
    <p id="sub_price">
      NT$350
    </p>
  </div>
  <div class="next_button">
         <button type="submit">加入購物車</button>
      </div>
      </div>
</div>

<form method="post" accept-charset="utf-8" id="form1">
<input name="final_choco" id='final_choco' type="hidden"/>
</form>
<script>
 var acc_num = 0;
        $(document).ready(function () {
          // for (let i = 0; i <  )
          var acc_item_length =  $('.acc_item').length ;
         
          for(let i =0 ; i < acc_item_length ; i++ ){
             $(".acc_item").eq(i).click(function(){
                        // console.log(i)
                      var acc_src=   $(".acc_item").eq(i).children("img").attr("src");     
                    console.log(acc_src);
                    $(".card_photo_pos").eq(acc_num).attr("src", acc_src);
                    
                    acc_num++;
                //     if (eye_num<=2){
                //       var prices2 = document.getElementById("price2");
                //    price+=20;
                // prices2.innerHTML = "NT"+price ;
                // // var sub_price = document.getElementById("sub_price");
                // // sub_price.innerHTML = "NT"+price ;
                
                   
                   
                    })
                }
                });

</script>


</section>
    

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
                    亂入一下!
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

    
<!-- <script src="../common/js/robot.js"></script>     -->
<!--    robot新增js  -->
    
<script src="../common/js/header.js"></script>
<script src="../common/js/login.js"></script>
<script src="../common/robot.js"></script>

<!-- 請用這個連結 -->

    <script type="text/javascript">
      window.addEventListener("load", function () {

        // var step = 0 ;
        // window.onscroll = function (){

        // }

        var price = 0 ;
        // <!-- ----- 形狀輪播 Start ----- -->
        var shapes = document.getElementsByClassName("shape");
        var shapePosArr = ["shapePos0", "shapePos1", "shapePos2", "shapePos3", "shapePos4"]
        let midimg = document.getElementsByClassName("choco_overview");
        document.getElementById("toRight").onclick = function () {
          for (var i = 0; i < shapePosArr.length; i++) {
            shapes[i].classList.remove(shapePosArr[i])
          }
          shapePosArr.push(shapePosArr.shift());
          for (var i = 0; i < shapePosArr.length; i++) {
            shapes[i].classList.add(shapePosArr[i])
          }

          for (var i = 0; i < shapePosArr.length; i++) {
            if (shapes[i].classList.contains("shapePos2")) {
              var shapeObj = shapes[i].innerHTML;
              var yyy = shapeObj;

              
              document.getElementById("next_page").onclick = function () {
                console.log("yyy",yyy);
                let m = shapeObj.lastIndexOf("alt");
                console.log(m);
                let h = shapeObj.substring(75, 79);

                console.log(h);
                // let midimg = document.getElementsByClassName("choco_overview");
                // // console.log(midimg[0]);
                
                // midimg[0].innerHTML = shapeObj;
                // let cc = midimg[0].innerHTML;
                // let m = cc.lastIndexOf("alt");
                // console.log(m);
                // let h = cc.substring(62, 66);
                // console.log(h);
                // var large = document.getElementsByClassName("big_cho")[i];
                //  console.log(large.src);
                // console.log(large);
                // var aa = large.alt;
                if(h =="bear"){
                $("#base_model").attr("src" ,"image/custom/small/bear_d_x.png");
              }else if(h =="cake"){
                $("#base_model").attr("src" ,"image/custom/small/cake_d_x.png");
              }else if(h=="roll"){
               
                $("#base_model").attr("src" ,"image/custom/small/roll_d_x.png");
                //  console.log("yes");
              }else if(h =="long"){
                $("#base_model").attr("src" ,"image/custom/small/long_d_x.png");
              }else{
                $("#base_model").attr("src" ,"image/custom/small/cicr_d_x.png");
              }
                console.log("aa",aa);
                 price+=200;
                 var prices = document.getElementById("price");
                    prices.innerHTML = "NT$"+price ;
              
           
              };

            }

          }
        };



        document.getElementById("toLeft").onclick = function () {
          for (var i = 0; i < shapePosArr.length; i++) {
            shapes[i].classList.remove(shapePosArr[i])
          }
          shapePosArr.unshift(shapePosArr.pop());
          for (var i = 0; i < shapePosArr.length; i++) {
            shapes[i].classList.add(shapePosArr[i])
          }

          for (var i = 0; i < shapePosArr.length; i++) {
            if (shapes[i].classList.contains("shapePos2")) {
              var shapeObj = shapes[i].innerHTML;
              var yyy = shapeObj;

              
              document.getElementById("next_page").onclick = function () {
                console.log("yyy",yyy);
                let m = shapeObj.lastIndexOf("alt");
                console.log(m);
                let h = shapeObj.substring(75, 79);

                console.log(h);
                // let midimg = document.getElementsByClassName("choco_overview");
                // // console.log(midimg[0]);
                
                // midimg[0].innerHTML = shapeObj;
                // let cc = midimg[0].innerHTML;
                // let m = cc.lastIndexOf("alt");
                // console.log(m);
                // let h = cc.substring(62, 66);
                // console.log(h);
                // var large = document.getElementsByClassName("big_cho")[i];
                //  console.log(large.src);
                // console.log(large);
                // var aa = large.alt;
                if(h =="bear"){
                $("#base_model").attr("src" ,"image/custom/small/bear_d_x.png");
              }else if(h =="cake"){
                $("#base_model").attr("src" ,"image/custom/small/cake_d_x.png");
              }else if(h=="roll"){
               
                $("#base_model").attr("src" ,"image/custom/small/roll_d_x.png");
                //  console.log("yes");
              }else if(h =="long"){
                $("#base_model").attr("src" ,"image/custom/small/long_d_x.png");
              }else{
                $("#base_model").attr("src" ,"image/custom/small/cicr_d_x.png");
              }
                console.log("aa",aa);
                 price+=200;
                 var prices = document.getElementById("price");
                    prices.innerHTML = "NT$"+price ;
              
           
              };

            }

          }
        };



        document.getElementById("next_page").onclick = function () {
          let select_choco = document.getElementsByClassName("shape");
          let midimg = document.getElementsByClassName("choco_overview");
          var large = document.getElementsByClassName("big_cho")[2];
          // console.log(large);
          console.log(large.alt);
          price+=200;
                 var prices = document.getElementById("price");
                    prices.innerHTML = "NT$"+price ;
          if(large.alt =="bear"){

            $("#base_model").attr("src" ,"image/custom/small/bear_d_x.png")
            console.log(bbb);

          }
          // midimg[0].innerHTML = select_choco[2].innerHTML;
          // // console.log(`IMG${midimg[0].innerHTML}`)
          // let cc = midimg[0].innerHTML;
          // let m = cc.lastIndexOf("alt");
          // // console.log(`M:${m}`);
          // let h = cc.substring(62, 66);
          // // console.log(h);
         

          
        };

        // <!-- ----- 形狀輪播 end ----- -->





        // ----------------------基底介紹--------------------------

        let chos = document.getElementsByClassName("cho");
        let chocoTextDivs = document.getElementsByClassName("choco_text");
        // console.log("chos : ", chos.length);
        // console.log("test : ", chocoTextDivs.length);
        for (let i = 0; i < chos.length; i++) {
          chos[i].addEventListener("click", function () {
            // console.log(chocoTextDivs[i])
            for (let j = 0; j < chocoTextDivs.length; j++) {
              if (j == i) {
                chocoTextDivs[j].style.display = "block";
              } else {
                chocoTextDivs[j].style.display = "none";
              }
            }
          })
        }


        // ----------------------基底介紹 end --------------------------



        // ----------------------口味介紹--------------------------

        let fruits = document.getElementsByClassName("fruit");
        let fruitTextDivs = document.getElementsByClassName("fruit_text");
        // console.log("fruits : ", fruits.length);
        // console.log("test : ", fruitTextDivs.length);
        for (let i = 0; i < fruitTextDivs.length; i++) {
          fruits[i].addEventListener("click", function () {
            // console.log(chocoTextDivs[i])
            for (let j = 0; j < fruitTextDivs.length; j++) {
              if (j == i) {
                fruitTextDivs[j].style.display = "block";
              } else {
                fruitTextDivs[j].style.display = "none";
              }
            }
          })
        }
     
        for(let i=0;i<fruits.length;i++){
        
        fruits[i].addEventListener("click",function(){
          for(j=0;j<fruits.length;j++){
            fruits[j].classList.remove("active");
          }
          this.classList.add("active");
              
      })
  }
  
        // ----------------------口味介紹 end --------------------------

        let tab = document.getElementsByClassName("tab_link");
        let type = document.getElementsByClassName("type");
        
        for(let i=0;i<tab.length;i++){
        
        fruits[i].addEventListener("click",function(){
          
          for(j=0;j<type.length;j++){
            type[j].classList.remove("active");
          }
          this.classList.add("active");
              
      })
  }


        // --------------------------選擇巧克力口味--------------------------


        for (var i = 0; i < chos.length; i++) {

          chos[i].addEventListener("click", function (e) {
            let cho_type = e.target;
            let model = document.getElementById("choco_pos");
            let model_img = model.childNodes[1];

            let modelsrc = $("#choco_pos img").attr("src");
            
            // console.log("modelsrc  ", modelsrc);
            if (cho_type.alt == "white") {
              var N = $("#choco_pos img").attr("src").substr(24, 3);
              let ann = modelsrc.replace(N, 'w_x');
              $("#choco_pos img").attr("src", ann);
              if(price>200){
                price-=200;
                price+=200;
                 var prices = document.getElementById("price");
                prices.innerHTML = "NT$"+price ;
              }else{
                price+=200;
                 var prices = document.getElementById("price");
                prices.innerHTML = "NT$"+price ;
              }
              // price+=200;
              //    var prices = document.getElementById("price");
              //   prices.innerHTML = "NT"+price ;

            } else if (cho_type.alt == "black") {
              var N = $("#choco_pos img").attr("src").substr(24, 3);
              let ann = modelsrc.replace(N, 'd_x');
              $("#choco_pos img").attr("src", ann);
              if(price>200){
                price-=200;
                price+=200;
                 var prices = document.getElementById("price");
                prices.innerHTML = "NT$"+price ;
              }else{
                price+=200;
                 var prices = document.getElementById("price");
                prices.innerHTML = "NT$"+price ;
              }

            } else if (cho_type.alt == "milk") {
              var N = $("#choco_pos img").attr("src").substr(24, 3);
              let ann = modelsrc.replace(N, 'm_x');
              $("#choco_pos img").attr("src", ann);
              if(price>200){
                price-=200;
                price+=200;
                 var prices = document.getElementById("price");
                prices.innerHTML = "NT$"+price ;
              }else{
                price+=200;
                 var prices = document.getElementById("price");
                prices.innerHTML = "NT$"+price ;
              }

            }
          }, false);
        }
     
        for(let i=0;i<chos.length;i++){
        
          chos[i].addEventListener("click",function(){
          for(j=0;j<chos.length;j++){
            chos[j].classList.remove("choosed");
          }
          this.classList.add("choosed");
              
      })
  }
  

        // --------------------------選擇巧克力口味--------------------------






        // --------------------------選擇配料口味--------------------------


        // let fruits = document.getElementsByClassName("fruit");
        for (var i = 0; i < fruits.length; i++) {

          fruits[i].addEventListener("click", function (e) {
            let fruit_type = e.target;

            let model = document.getElementById("choco_pos");
            let model_img = model.childNodes[1];

            let modelsrc = $("#choco_pos img").attr("src");


            if (fruit_type.alt == "blue berry") {

              var N = $("#choco_pos img").attr("src").substr(25, 2);
              // console.log("N", N);
              let ann = modelsrc.replace(N, '_b');
              // console.log("ann", ann);
              $("#choco_pos img").attr("src", ann);

              if(price>400){
                price-=200;
                price+=200;
                var prices = document.getElementById("price");
                 var prices2 = document.getElementById("price2");
                prices.innerHTML = "NT$"+price ;
                prices2.innerHTML = "NT$"+price ;

              }else{
                price+=200;
                var prices = document.getElementById("price");
                 var prices2 = document.getElementById("price2");
                prices.innerHTML = "NT$"+price ;
                prices2.innerHTML = "NT$"+price ;
              }
            } else if (fruit_type.alt == "grape") {
              var N = $("#choco_pos img").attr("src").substr(25, 2);
              // console.log("N", N);
              let ann = modelsrc.replace(N, '_g');
              // console.log("ann", ann);
              $("#choco_pos img").attr("src", ann);
              if(price>400){
                price-=200;
                price+=200;
                var prices = document.getElementById("price");
                 var prices2 = document.getElementById("price2");
                prices.innerHTML = "NT$"+price ;
                prices2.innerHTML = "NT$"+price ;
              }else{
                price+=200;
                var prices = document.getElementById("price");
                 var prices2 = document.getElementById("price2");
                prices.innerHTML = "NT$"+price ;
                prices2.innerHTML = "NT$"+price ;
              }
            } else if (fruit_type.alt == "bo ho") {
              var N = $("#choco_pos img").attr("src").substr(25, 2);
              // console.log("N", N);
              let ann = modelsrc.replace(N, '_h');
              // console.log("ann", ann);
              $("#choco_pos img").attr("src", ann);
              if(price>400){
                price-=200;
                price+=200;
                var prices = document.getElementById("price");
                 var prices2 = document.getElementById("price2");
                prices.innerHTML = "NT$"+price ;
                prices2.innerHTML = "NT$"+price ;
              }else{
                price+=200;
                var prices = document.getElementById("price");
                 var prices2 = document.getElementById("price2");
                prices.innerHTML = "NT$"+price ;
                prices2.innerHTML = "NT$"+price ;
              }
            } else if (fruit_type.alt == "orange") {
              var N = $("#choco_pos img").attr("src").substr(25, 2);
              // console.log("N", N);
              let ann = modelsrc.replace(N, '_o');
              // console.log("ann", ann);
              $("#choco_pos img").attr("src", ann);
              if(price>400){
                price-=200;
                price+=200;
                var prices = document.getElementById("price");
                 var prices2 = document.getElementById("price2");
                prices.innerHTML = "NT$"+price ;
                prices2.innerHTML = "NT$"+price ;
              }else{
                price+=200;
                var prices = document.getElementById("price");
                 var prices2 = document.getElementById("price2");
                prices.innerHTML = "NT$"+price ;
                prices2.innerHTML = "NT$"+price ;
              }
            } else if (fruit_type.alt == "strawberry") {
              var N = $("#choco_pos img").attr("src").substr(25, 2);
              // console.log("N", N);
              let ann = modelsrc.replace(N, '_s');
              // console.log("ann", ann);
              $("#choco_pos img").attr("src", ann);
              if(price>400){
                price-=200;
                price+=200;
                 var prices = document.getElementById("price");
                 var prices2 = document.getElementById("price2");
                prices.innerHTML = "NT$"+price ;
                prices2.innerHTML = "NT$"+price ;
              }else{
                price+=200;
                var prices = document.getElementById("price");
                 var prices2 = document.getElementById("price2");
                prices.innerHTML = "NT$"+price ;
                prices2.innerHTML = "NT$"+price ;
              }
            }
          }, false);
        }


        // --------------------------選擇配料口味--------------------------






        // --------------------------next_page--------------------------


        document.getElementById("next_page2").onclick = function () {

          let modelsrc = $("#choco_pos img").attr("src");
          console.log(modelsrc);
          let cust = $("#cho_pos").attr("src", modelsrc);
         
          let mask = document.getElementsByClassName("fix_photo");

          var prices2 = document.getElementById("price2");
          
                prices2.innerHTML = "NT$"+price ;
          // $(".fix_photo").css("-webkit-mask-image",'url(../'+modelsrc+')');
          // console.log(mmm);
          // var prices = document.getElementById("price");
          // var prices2 = document.getElementById("price2");
          // console.log(prices.innerText);
          // price=prices2.innerHTML ;
        };

        // -----------------------next_page--------------------------



        // ---------- 眼睛 start select----------

        
        var eye_num = 0;
        $(document).ready(function () {
          // for (let i = 0; i <  )
          var eye_items_length =  $('.eye_items').length ;
         
          for(let i =0 ; i <eye_items_length; i++ ){
             $(".eye_items").eq(i).click(function(){
                        // console.log(i)
                      var eye_src=   $(".eye_items").eq(i).children("img").attr("src");     
                    console.log(eye_src);
                    $(".eye_demo").eq(eye_num).attr("src", eye_src);
                    
                    eye_num++;
                    if (eye_num<=2){
                      var prices2 = document.getElementById("price2");
                   price+=20;
                prices2.innerHTML = "NT$"+price ;
                // var sub_price = document.getElementById("sub_price");
                // sub_price.innerHTML = "NT"+price ;
                    }
                   
                   
                    })
                }
                });
              

        // ---------- 眼睛 End  select----------


        // ---------- 嘴巴 start select----------

        var mouse_num = 0;
        $(document).ready(function () {
          // for (let i = 0; i <  )
          var mouse_items_length =  $('.mouse_items').length ;
         
          for(let i =0 ; i <mouse_items_length; i++ ){
             $(".mouse_items").eq(i).click(function(){
                        console.log(i)
                      var mouse_src=   $(".mouse_items").eq(i).children("img").attr("src");     
                    console.log(mouse_src);
                    $(".mouse_demo").eq(mouse_num).attr("src", mouse_src);
                    mouse_num++;
                    console.log(mouse_num)
                    if (mouse_num<=1){
                      var prices2 = document.getElementById("price2");
                      price+=20;
                prices2.innerHTML = "NT$"+price ;
                // var sub_price = document.getElementById("sub_price");
                // sub_price.innerHTML = "NT"+price ;
                    }  
                  
          
                    })
                }
        });


        // ---------- 嘴巴 End select----------


        // ---------- 飾品 start select----------


        var others_num = 0;
        $(document).ready(function () {
          // for (let i = 0; i <  )
       // for (let i = 0; i <  )
       var others_items_length =  $('.others_items').length ;
          for(let i =0 ; i < others_items_length; i++ ){
             $(".others_items").eq(i).click(function(){
                        console.log(i)
                      var others_src=   $(".others_items").eq(i).children("img").attr("src");     
                    console.log(others_src);
                    $(".others_demo").eq(others_num).attr("src", others_src);
                    others_num++;
                    if (others_num<=2){
                      var prices2 = document.getElementById("price2");
                  price+=20;
                prices2.innerHTML = "NT$"+price ;

                // var sub_price = document.getElementById("sub_price");
                // sub_price.innerHTML = "NT"+price ;
                    }
                  
                    })
                }

        });
        // console.log(count);
        // var prices2 = document.getElementById("price2");
        // var  ftprice = price2+count*20
        //         prices2.innerHTML = "NT"+ftprice ;

        // ---------- 飾品 End select----------



        // ---------------------drag--------------------------

        $(".eye_pos").draggable({
          containment: "parent",
          scroll: false

        });
        $(".mouse_pos").draggable({
          containment: "parent",
          scroll: false
        });
        $(".others_pos").draggable({
          containment: "parent",
          scroll: false
        });

        // ---------------------drag--------------------------
 

        var eyechange = document.querySelectorAll(".eye_demo");
        // console.log(eyechange.length);
        var mousechange = document.querySelectorAll(".mouse_demo");
        var otherschange = document.querySelectorAll(".others_demo");
        var itemall =  document.querySelectorAll(".demo");
        // console.log(itemall.length);
        
        var btn =document.querySelectorAll(".bar_photo");
        var imgcontrol = [" big"," small"," right"," left"," big",]
        var big = document.getElementById("big");
        var small = document.getElementById("small");
        var right = document.getElementById("right");
        var left = document.getElementById("left");
        var reset = document.getElementById("reset");
        for(i=0;i<btn.length;i++){
          
          btn[i].addEventListener("click",control);
        }
        // // eyescale = 1;
        // // eyerotate = 0;
        // // mousescale = 1;
        // // mouserotate = 0;
        // // otherscale = 1;
        // // otherrotate = 0;
        // // var whoselected = "";

        
         var arr =[];
      
        for(let i=0;i<eyechange.length;i++){
            eyechange[i].addEventListener("click",function(e){
               if(arr.indexOf(this)==-1){
                  arr.push(this);
                  // console.log(arr);
               }
       
            })
        }
        for(let i=0;i<mousechange.length;i++){
          mousechange[i].addEventListener("click",function(){
               if(arr.indexOf(this)==-1){
                  arr.push(this);
                  // console.log(arr);
               }
       
            })
        }
        for(let i=0;i<otherschange.length;i++){
          otherschange[i].addEventListener("click",function(){
               if(arr.indexOf(this)==-1){
                  arr.push(this);
                  console.log(arr);
                  
               }
       
            })
        }
        let fix_photo = document.querySelector(".fix_photo")
        let draggable = fix_photo.querySelectorAll(".demo");


        for(let i=0;i<draggable.length;i++){
                
          draggable[i].addEventListener("click",function(e){
                var ttt = e.target;
                    for(let j=0;j<draggable.length;j++){
                      draggable[j].classList.remove("selector");
                      
                    }
          this.classList.add("selector");
                })
                
            }
            // console.log(arr);
             
            var clear =document.getElementById("cho_pos")
            let demo = document.querySelectorAll(".demo");
            clear.addEventListener("click",function(e){
              for(let i=0;i<demo.length;i++){
                console.log(demo[i]);
                console.log(e);
                demo[i].classList.remove("selector");
              }
             })
            function control(e){

              switch(this.id){
              
              case "big":
              // console.log(arr); 

                for(let i=0; i<arr.length; i++){
                  if (arr[i].classList.contains("selector")){
                
                    let  items_style =  $(arr[i]).attr('style');
                    let  items_blocks = items_style.split(" ");
                    let newscale = parseFloat(items_blocks[2].replace("scale(","").replace(")",""))+0.5;
                    items_blocks[2] = " scale("+newscale+")";
                    items_blocks[1] = " "+items_blocks[1];
                    items_new = items_blocks[0]+items_blocks[1]+ items_blocks[2];
                    var items_newstyle = $(arr[i]).attr('style',items_new);

                }
              }
              break;

                case "small":

                for(let i=0; i<arr.length; i++){
                  if (arr[i].classList.contains("selector")){
               
                   let items_style =  $(arr[i]).attr('style');
             
                    let items_blocks = items_style.split(" ");
            
                    let newscale = parseFloat(items_blocks[2].replace("scale(","").replace(")",""))-0.5;
                    
                    items_blocks[2] = " scale("+newscale+")";
                    items_blocks[1] = " "+items_blocks[1];
                    items_new = items_blocks[0]+items_blocks[1]+ items_blocks[2];
                    var items_newstyle = $(arr[i]).attr('style',items_new);

                  
               }
              }
              break;

              case "right":
                
              for(let i=0; i<arr.length; i++){
                  if (arr[i].classList.contains("selector")){
                    let items_style =  $(arr[i]).attr('style');
             
             let items_blocks = items_style.split(" ");
                     let newDegree = parseFloat(items_blocks[1].replace("rotate(","").replace("deg)",""))+ 10;;
                 
                    items_blocks[1] = " rotate("+newDegree+"deg) ";
                 
                      items_new = items_blocks[0]+items_blocks[1]+ items_blocks[2];
                      var items_newstyle = $(arr[i]).attr('style',items_new);
 

               }
              }
              break;

              
              case "left":
                
              for(let i=0; i<arr.length; i++){
                  if (arr[i].classList.contains("selector")){
                    let items_style =  $(arr[i]).attr('style');
             
             let items_blocks = items_style.split(" ");
                    let newDegree = parseFloat(items_blocks[1].replace("rotate(","").replace("deg)",""))-  10;;
                 
                    items_blocks[1] = " rotate("+newDegree+"deg) ";
                    items_new = items_blocks[0]+items_blocks[1]+ items_blocks[2];
                      var items_newstyle = $(arr[i]).attr('style',items_new);

               }
              }
              break;
              case "reset":
          
          
                arr.splice(0,arr.length);
                console.log(arr);
                for(let i = 0 ; i <itemall.length ; i++){
                  $(".demo").attr("src" ,"image/custom/img.png");

                  console.log(arr);
                }
                others_num = 0;
                mouse_num = 0;
                eye_num = 0;
                
                $(".demo").css("transform","rotate(0deg) scale(1)")
                var prices2 = document.getElementById("price2");
                price = 600;
                prices2.innerHTML = "NT$"+price ;
              break;
              
            
                default:
                console.log("no");
            }
            

            }
           
         // --------------------------next_page--------------------------


         document.getElementById("next_page3").onclick = function () {
          var sub_price = document.getElementById("sub_price");
              
          sub_price.innerHTML = "NT$"+(price+100) ;

};

// -----------------------next_page--------------------------

      });

    </script>

<script>



</script>


    <script>

      function openCity(evt, types) {
        // Declare all variables
        var i, type, tablink;

        // Get all elements with class="tabcontent" and hide them
        type = document.getElementsByClassName("type");
        for (i = 0; i < type.length; i++) {
          type[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablink = document.getElementsByClassName("tab_link");
        for (i = 0; i < tablink.length; i++) {
          tablink[i].className = tablink[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(types).style.display = "flex";
        evt.currentTarget.className += " active";
      } </script>
<script type="text/javascript">
var color = $(".selected").css("background-color");
var cnv = $("canvas");
var ctx = cnv[0].getContext("2d"); //ctx
var lastEvent;
var mousedown = false;

// shape of brush
var shapeIsSquare = true;
var shapeIsCircle = false;

//  size of brush
var sizeOfBrush = 10;

// when clicking on control list items
$(".controls").on("click", "li", function() {
  // deselect sibiling elements
  $(this).siblings().removeClass("selected");
  // select clicked element
  $(this).addClass("selected");
  // cache current color
  color = $(this).css("background-color");
});
document.getElementById('SaveCnv').addEventListener("click",function(){
            // window.open(cnv[0].toDataURL('image/png'));
            var gh = (cnv[0].toDataURL('png'));

            var a = document.createElement('a');
            a.href = gh;
            a.download = 'image.png';
            a.click();
        });

// when new color is pressed
// $("#revealColorSelect").click(function() {
//   // show color select or hide the color select
//   changeColor();
//   $("#colorSelect").toggle();
// });

// $("#revealBrushSelect").click(function() {
//   // show brush select or hide the brush select
//   changeBrushSize();
//   $("#brushSelect").toggle();
// });

// update the new color span
function changeColor() {
  // var r = $("#red").val();
  // var g = $("#green").val();
  // var b = $("#blue").val();
  colorPicker.on("color:change", function(){
  selected = colorPicker.color.rgbString;
  console.log(selected);
  $("#newColor").css("background-color",  selected);
});	
 
}

// update the brush/shape size
function changeBrushSize() {
  var brushSize = $("#brush_size").val();
  sizeOfBrush = brushSize;
}

function changeBrushShape() {
  var shape = $('input[name=brush_shape]:checked', '#brushShapeForm').val();
  if (shape === "circle") {
    shapeIsSquare = false;
    shapeIsCircle = true;
  } else {
    shapeIsSquare = true;
    shapeIsCircle = false;
  }
}

$("#brushShapeForm input:radio").click(changeBrushShape);

// when sliders change
$("input[type=range]")
  .change(changeColor)
  .change(changeBrushSize);


// when "Add Color" is pressed
$("#addNewColor").click(function() {
  // append the color to the controls ul
  var $newColor = $("<li></li>");
  $newColor.css("background-color", $("#newColor").css("background-color"));
  $(".controls ul").append($newColor);
  // select the new color
  $newColor.click();
});


// on mouse events on the canvas
cnv.mousedown(function(e) {
  lastEvent = e;
  mousedown = true;
  if (shapeIsSquare) {
    ctx.fillStyle = color;
    ctx.fillRect(e.offsetX, e.offsetY, sizeOfBrush, sizeOfBrush);
  } else if (shapeIsCircle) {
    var radius = sizeOfBrush/2;
    ctx.beginPath();
    ctx.arc(e.offsetX, e.offsetY, radius, 0, 2 * Math.PI, false);
    ctx.fillStyle = color;
    ctx.fill();
  }
}).mousemove(function(e) {
  // draw lines
  if (mousedown) {
    if (shapeIsSquare) {
      ctx.moveTo(lastEvent.offsetX, lastEvent.offsetY);
      ctx.fillStyle = color;
      ctx.fillRect(e.offsetX, e.offsetY, sizeOfBrush, sizeOfBrush);
      lastEvent = e;
    } else if (shapeIsCircle) {
      var radius = sizeOfBrush;
      ctx.beginPath();
      ctx.arc(e.offsetX, e.offsetY, radius, 0, 2 * Math.PI, false);
      ctx.fillStyle = color;
      ctx.fill();
      lastEvent = e;
    }
  }
}).mouseup(function() {
  mousedown = false;
});
var colorPicker = new iro.ColorPicker(".colorPicker", {
  // color picker options
  // Option guide: https://iro.js.org/guide.html#color-picker-options
  width: 150,
  height:150,

  color: "rgb(255, 0, 0)",
  borderWidth: 1,
  borderColor: "#fff",
});
var values = document.getElementById("values");

colorPicker.on("color:change", function(){
  selected = colorPicker.color.rgbString;
  console.log(selected);
  $("#newColor").css("background-color",  selected);

});	
  </script>

<script>
function loadImage1(){

  var img = new Image();
  img.onload = function(){
    //ctx.translate(50, 50);
    //ctx.rotate(0.5); 
    ctx.drawImage(img,0,0); //drawImage(img,x,y,width,height)
  }
  img.src = document.getElementById("srcImg1").src;
 
}
function loadImage2(){

var img = new Image();
img.onload = function(){
  //ctx.translate(50, 50);
  //ctx.rotate(0.5); 
  ctx.drawImage(img,0,0); //drawImage(img,x,y,width,height)
}
img.src = document.getElementById("srcImg2").src;

}
function loadImage3(){

var img = new Image();
img.onload = function(){
  //ctx.translate(50, 50);
  //ctx.rotate(0.5); 
  ctx.drawImage(img,0,0); //drawImage(img,x,y,width,height)
}
img.src = document.getElementById("srcImg3").src;

}
function loadImage4(){

var img = new Image();
img.onload = function(){
  //ctx.translate(50, 50);
  //ctx.rotate(0.5); 
  ctx.drawImage(img,130,200); //drawImage(img,x,y,width,height)
}
img.src = document.getElementById("srcImg4").src;

}
function loadImage5(){

var img = new Image();
img.onload = function(){
  //ctx.translate(50, 50);
  //ctx.rotate(0.5); 
  ctx.drawImage(img,180,0); //drawImage(img,x,y,width,height)
}
img.src = document.getElementById("srcImg5").src;

}
function loadImage6(){

var img = new Image();
img.onload = function(){
  //ctx.translate(50, 50);
  //ctx.rotate(0.5); 
  ctx.drawImage(img,0,250); //drawImage(img,x,y,width,height)
}
img.src = document.getElementById("srcImg6").src;

}

function clean(){
  ctx.clearRect(449, 531, ctx.width, ctx.height);
}

</script>
  
    <script>
function uploadImage(){
  var canvas = document.getElementById("thecanvas");
  var dataURL = canvas.toDataURL("image/png");
  document.getElementById('final_choco').value = dataURL;
  var formData = new FormData(document.getElementById("form1"));
  
  var xhr = new XMLHttpRequest();
  xhr.onload = function(){
    if( xhr.status == 200){
      if(xhr.responseText == "error"){
        alert("Error");
      }else{
        alert('Succesfully uploaded');  
        console.log(xhr.responseText);
      }
    }else{
      alert(xhr.status)
    }
  }
  
  xhr.open('POST', 'canvas_load_save.php', true);
  xhr.send(formData);
}

function aa() {

html2canvas(document.getElementById('fix'), {
    onrendered: function (canvas) {
        canvas.setAttribute('id', 'thecanvas');	//添加属性
        document.body.appendChild(canvas);
        canvas.style.display="none";
        alert("Hi");
        uploadImage();
    },
    background: "",		//canvas的背景颜色，如果没有设定默认透明
    logging: true,		//在console.log()中输出信息
    width: 400,			//图片宽
    height: 400,		//图片高
    useCORS: true, // 【重要】开启跨域配置
});

}

function bb() {
var oCanvas = document.getElementById("thecanvas");

var img_data1 = Canvas2Image.saveAsPNG(oCanvas, true).getAttribute('src');
saveFile(img_data1, 'richer.png');
}
    </script>


</body>

</html>