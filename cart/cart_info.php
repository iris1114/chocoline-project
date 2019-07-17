<?php
ob_start();
session_start(); 

$errMsg = "";
try {
	require_once("php/connectChoco.php");

  $sql = "select * from member where mem_no = 1";
  // $sql = "select * from member where member_id=:member_id";

  $members = $pdo->query($sql); 
  $memRow = $members -> fetch(PDO::FETCH_ASSOC);
  $mem_point=$memRow['mem_point'];
  $_SESSION['mem_no']=1;

}catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}
 
echo $errMsg;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="image/common/logo_icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/cart_info.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
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
                    <img src="image/headerfooter/burger.png" alt="burger">
                </figure>
            </div>
            <div class="logo">
                <a href="../index/index.html">
                    <img src="image/headerfooter/logo.png" alt="CHOCOLINE">
                </a>
            </div> 
            <div class="status">
                <figure>
                    <a href="../member/member.html">
                        <img src="image/headerfooter/icon_member.png" alt="member">
                    </a>
                </figure>
                <figure>
                    <a href="../cart/cart.html">
                        <img src="image/headerfooter/icon_cart.png" alt="cart">
                    </a>
                </figure>
            </div>
        </div>
        <ul class="menubox">
            <li><a href="../custom/custom.html">客製 CHOCO</a></li>
            <li><a href="../contest/contest.html">CHOCO 選美</a></li>
            <li><a href="../game/game.html">CHOCO 遊戲</a></li>
            <li><a href="../store/store.html">CHOCO 商城</a></li>
            <li><a href="../about/about.html">關於 CHOCO</a></li>
            <figure id="menuclose">
                <img src="image/headerfooter/menuclose.png" alt="close">
            </figure>
        </ul>
    </div>
    <div class="d_header">
        <div class="logo">
            <a href="../index/index.html">
                <img src="image/headerfooter/logo.png" alt="CHOCOLINE">
            </a>
        </div>
        <div class="navbar">
            <ul class="menubox">
                <li><a href="../custom/custom.html">客製 CHOCO</a></li>
                <li><a href="../contest/contest.html">CHOCO 選美</a></li>
                <li><a href="../game/game.html">CHOCO 遊戲</a></li>
                <li><a href="../store/store.html">CHOCO 商城</a></li>
                <li><a href="../about/about.html">關於 CHOCO</a></li>
            </ul>
            <div class="status">
                <figure>
                    <a href="../member/member.html">
                        <img src="image/headerfooter/icon_member.png" alt="member">
                    </a>
                </figure>
                <figure>
                    <a href="../cart/cart.html">
                        <img src="image/headerfooter/icon_cart.png" alt="cart">
                    </a>
                </figure>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
<section  id="cartflow_container">
 <div class="cloud" >
     <img src="image/cart/cloud.png" alt="cloud">
 </div>
  <div class="wrap">
      <img src="image/cart/cart_info.png" alt="cart">
  </div>
</section>

<section class="col_12" id="cart_shipping_container">
  <div class="wrap">
      <div class="box cart_title_box">
          <div class="col_md_12 col_lg_12 ">
              <h5> 運送方式</h5>
         </div>
      </div>
      <div class="box cart_show_box ">
            <div class=" col_md_12 col_lg_12 shipping_box ">
                <p>低溫宅配到府 </p><p class="shipping_fee"> NT$ 100</p>
            </div>
        </div>
  </div>
</section>
<div id="app">


<section class="col_12" id="cart_bonus_container">
        <div class="wrap">
            <div class="box cart_title_box">
                <div class="col_md_12 col_lg_12 ">
                    <h5> 點數折抵</h5>
                </div>
            </div>
            <div class="box cart_show_box">
                <div class=" col_md_12 col_lg_12 bonus_box ">
                    <div class="bonus_decs ">
                        <p>目前可使用點數： <?php echo $mem_point ?>點 (1點折抵1元)</p>
                        <a href="game.html">玩遊戲賺點數</a>
                    </div>
                <div class="bonus_input " >
                 NT$<input type="number" name="bonus_input" id="bonus_input"  v-model="point"> 
                </div>
                </div>
            </div>
        </div>
      </section>


<section id="cart_total_container">
    <div class="wrap">
        <div class="cart_form">
                <div class="cart_total">   
<?php
$total = 0;
foreach( $_SESSION["p_name"] as $p_no => $data){ 
    $subTotal = $_SESSION["p_price"][$p_no] * $_SESSION["p_qty"][$p_no];  //計算小計
    $total = $total + $subTotal;  //計算總計
}
?>


                  <p>商品金額: <span><?php $total ?></span></p>
                
                  <p>運費小計: <span>NT$ 100</span></p>
                  <p>點數折抵: <span>NT$ <span id="point">{{point}}</span></span></p>
                  <p>應付金額: <span class="amout" >NT$ </span></p>
        
                </div>
              </div>
          </div>
        </div>
</section>      
</div>


<section class="col_12" id="cart_payment_container">
    <div class="wrap">
        <div class="box cart_title_box">
            <div class=" col_lg_12 ">
                <h5> 填寫資料</h5>
           </div>
        </div>
        <div class="box cart_show_box ">
              <div class=" col_12 col_m_4 col_lg_4 purchaser_box ">
                  <p>訂購人資訊</p>
                  <p><span class="w-100">姓名:</span><input type="text" name="purchaser_name" value="123"></p>
                  <p><span class="w-100">電話:</span><input type="text" name="purchaser_phone" value="0987654321"></p>
                  <p><span class="w-100">地址:</span><input type="text" name="purchaser_address"></p>
              </div>
               <div class=" col_12 col_m_4 col_lg_4 receiver_box ">
                      <p>收件人資訊</p>
                      <p><span class="w-100">姓名:</span><input type="text" name="purchaser_name" value="123"></p>
                      <p><span class="w-100">電話:</span><input type="text" name="purchaser_phone" value="0987654321"></p>
                      <p><span class="w-100">地址:</span><input type="text" name="purchaser_address"></p>
                  </div>
              </div>
          </div>
    </div>
  </section>
  
  <section  class="col_12"  id="creditcard_contatiner">
      <div class="wrap">
          <div class="box cart_title_box">
              <div class=" col_lg_12 ">
                  <h5> 信用卡付費</h5>
              </div>
          </div>
  
          <div class="box cart_show_box ">
          <div class=" col_12 col_m_4 col_lg_10 creditcard_box ">
              <p> <span>信用卡帳號:</span> 
                  <input type="number"  maxlength="4" name="creditCard-1">
                  <span>-</span>
                  <input type="number" maxlength="4" name="creditCard-2">
                  <span>-</span>
                  <input type="number" maxlength="4" name="creditCard-3">
                  <span>-</span>
                  <input type="number" maxlength="4" name="creditCard-4">
              </p>
              <p> <span>有效期限:</span> 
                  <select name="select_month" id="select_month"></select>
                  <select name="select_year" id="select_year"></select>
               </p> 
  
               <p> <span>背面安全碼:</span>
                  <input type="text" name="creditCard-3">
               </p> 
          </div> 
          </div> 
         
      </div>     
  </section>

  <div class="cart_btn_group">
    <a href="cart2.php" class="btn orange_l"><span> 上一步</span></a>
    <a href="cart_pay.php" class="btn orange_l"><span> 進行結帳</span></a>
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


<script>
		
    new Vue({
        el: '#app',		
        data: {			
            point: '0',
        },
        computed:{

        }
    });
</script>       

</body>
</html>



