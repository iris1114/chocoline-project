

<?php
ob_start();
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="image/common/logo_icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
     <link rel="stylesheet" href="css/cart.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>

    <title>CHOCO 購物車</title>
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

<!--------cartflow_container--------->
<section  id="cartflow_container">
    <div class="cloud" >
        <img src="image/cart/cloud.png" alt="cloud">
    </div>
    <div class="wrap m_d_n">
        <img src="image/cart/cart.active.png" alt="cart">
    </div>
</section>


<!--------cart_title_container-------->

<section class=" m_d_n" id="cart_title_container">
  <div class="wrap">
      <div class="box cart_title_box">
          <div class=" col_md_2 col_lg_3 ">
              <h5 >商品圖片</h5>
          </div>
          <div class="col_md_2  col_lg_2 ">
              <h5 >商品名稱</h5>
          </div>
          <div class="col_md_2 col_lg_2 ">
              <h5 >單價</h5>
          </div>     
          <div class="col_md_2  col_lg_2 ">
              <h5 >數量</h5>
          </div>
          <div class="col_md_2  col_lg_2 ">
              <h5 >小計</h5>
          </div>
          <div class=" col_md_2 col_lg_1 ">
              <h5 >刪除</h5>
          </div>
      </div>
 
  </div>
</section>

<!--------mobile_cart_title_container-------->
<section id="m_cart_title_box " class="d_d_n t_d_n">
<div class="wrap">
<div class="box cart_title_box ">
    <div class="col_12 ">
        <h5> 確認購物車</h5>
    </div>
</div>
</div>
</section>



<!--------cart list-------->


<section class="col_12 col_lg_12 col_md_12  " id="cart_show_container">
 <div class="wrap" id="item_row">

<?php 
if( isset($_SESSION["cart"]) === false || count($_SESSION["cart"])==0){ 
echo "<div class='box cart_show_box '>尚無購物資料";
echo "<script> window.onload=btnShopHide(); </script>";

}else{  //有購物資料
$total = 0;
foreach($_SESSION['cart'] as $i=>$value){

// foreach( $_SESSION["cart"][$psn]["pname"] as $psn => $data){ 
    $subTotal = $_SESSION["cart"][$i]["price"] * $_SESSION["cart"][$i]["qty"];  //計算小計
    $total = $total + $subTotal;  //計算總計
?>	

<!--－－－－－－－－－ 一般商品－－－－－－－－－－ -->
<div class="box cart_show_box " >
        <span style='display:none'><?php echo $_SESSION["cart"][$i]["psn"]; ?></span>
       <div class="item cart_img col_12 col_lg_3 col_md_2  ">
             <img src="<?php echo $_SESSION["cart"][$i]["pimg"]; ?>  " alt="choco">
          </div> 
            
          <div class="item cart_pname col_6  col_lg_2 col_md_2 ">
            <h5> <?php echo $_SESSION["cart"][$i]["pname"]; ?></h5>
          </div>
          <div class="item cart_price  col_6  col_lg_2 col_md_2">
              <h5 > <span class="d_d_n  t_d_n"> 單價：</span>  NT$ <span class="price"> <?php echo  $_SESSION["cart"][$i]["price"]; ?></span></h5>
          </div>    
          <div class="item cart_qty   col_6 col_lg_2 col_md_2 ">
            
        <form >
            <input type="hidden" name="psn" value="<?php echo  $_SESSION["cart"][$i]["psn"];?>">
            <input type="hidden" name="p_name" value="<?php echo $_SESSION["cart"][$i]["pname"]; ?>">
            <input type="hidden" name="p_price" value="<?php echo $_SESSION["cart"][$i]["price"]; ?>">
            <input type="hidden" name="p_img" value="<?php echo $_SESSION["cart"][$i]["pimg"]; ?>">
            <input type="hidden" name="p_total" value="<?php echo $total ?>">
            <input type="hidden" name="p_total" value="<?php echo $subTotal ?>">
            <div class="item qty_buttons">     
            <input id="minus" class="minus  qtyminus" type="button" value="-" name="minus"/><input id="qty" class="qty classic_product_qty" type="text" value="<?php echo $_SESSION["cart"][$i]["qty"]; ?>" min="1" max="10" step="1" name="p_qty" /><input id="plus" class="plus qtyplus" type="button" value="+" name="plus" />
            </div>
        </form>     
       
          </div>
          <div class="item col_lg_2 col_6 cart_amout ">
              <h5 ><span class="d_d_n t_d_n">小計：</span> NT$ <span class="subtotal"><?php echo $subTotal?></span> </h5>
          </div>

          <div class="item cart_delete col_lg_1 " >
           <div class="btn btn_delete">刪除</div>   
          <!-- <input class="btn" type="submit" name="btn_delete"  value="刪除"> -->
          </div>
</div>  
</div>




<!--－－－－－－－－－ 客制商品－－－－－－－－－－ -->


 
<section id="cart_form_container  " >
  <div class="wrap">
<?php
}
if( isset($_SESSION["cart"]) === false || count($_SESSION["cart"])==0){ 
echo "<div class='box cart_show_box '>尚無購物資料";
}else{

echo " <div class='cart_form' style = 'height: 500; width: 100%;'>
<div class='cart_total'>
  <p>商品金額: <span>NT", number_format($total), "</span></p>
  <p>運費小計: <span>尚未選擇</span></p>
  <p>點數折抵: <span>尚未折抵</span></p>
  <p>應付金額: <span class='amout'> NT$", number_format($total), "</span></p>
</div>
</div>";    
}
}
?>
</div>
</section>


</section>



<!-- cart form -->









 <!-------cart_btn_group-------->

 <div class="cart_btn_group">
          <a href="../store/store.php" class="btn orange_l "><span> 繼續購物</span></a>
          <a href="cart_info.php" class="btn orange_l " id=" btn_shop"><span> 進行結帳</span></a>
      </div>
  </div>



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







<script src="../common/js/header.js"></script>
<script src="../common/js/robot.js"></script>
<script src="../common/js/login.js"></script>


<script>
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener('resize', () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});

</script>


<script>
  
// qty control start

// function minus1() {
//     var val = parseInt(this.parentNode.querySelectorAll(".qty")[0].value);
//     if ((val > 1) & (val <= 10)) {
//         val -= 1;
//         this.parentNode.querySelectorAll(".qty")[0].value = val;
//     } else {
//         this.parentNode.querySelectorAll(".qty")[0].value = 1;
//     }
// }

// function plus1() {
//     var val = parseInt(this.parentNode.querySelectorAll(".qty")[0].value);
//     if ((val >= 1) & (val < 10)) {
//         val += 1;
//         this.parentNode.querySelectorAll(".qty")[0].value = val;
//     } else {
//         this.parentNode.querySelectorAll(".qty")[0].value = 1;
//     }
// }

// window.addEventListener("load", function() {
//     var qty = document.getElementsByClassName("qty");
//     var minus = document.getElementsByClassName("minus");
//     var plus = document.getElementsByClassName("plus");
//     var length = qty.length;

//     for (var i = 0; i < length; i++) {
//         // qty[i].onkeyup = qty_reset;
//         minus[i].onclick = minus1;
//         plus[i].onclick = plus1;
//     }
// });

    </script>

    <script>
      function btnShopHide(){
        document.getElementById('btn_shop').style.display="none";
      }
    
    </script>

<script src="js/cart_show.js"></script>

</body>
</html>



