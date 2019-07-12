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
                    <img src="image/headerfooter/burger.png" alt="burger">
                </figure>
            </div>
            <div class="logo">
                <a href="../index/index.php">
                    <img src="image/headerfooter/logo.png" alt="CHOCOLINE">
                </a>
            </div> 
            <div class="status">
                <figure>
                    <a href="../member/member.php">
                        <img src="image/headerfooter/icon_member.png" alt="member">
                    </a>
                </figure>
                <figure>
                    <a href="../cart/cart.php">
                        <img src="image/headerfooter/icon_cart.png" alt="cart">
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
                <img src="image/headerfooter/menuclose.png" alt="close">
            </figure>
        </ul>
    </div>
    <div class="d_header">
        <div class="logo">
            <a href="../index/index.php">
                <img src="image/headerfooter/logo.png" alt="CHOCOLINE">
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
                    <a href="../member/member.php">
                        <img src="image/headerfooter/icon_member.png" alt="member">
                    </a>
                </figure>
                <figure>
                    <a href="../cart/cart.php">
                        <img src="image/headerfooter/icon_cart.png" alt="cart">
                    </a>
                </figure>
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
    <div class="wrap">
        <img src="image/cart/cart.active.png" alt="cart">
    </div>
</section>


<!--------cart_title_container-------->

<section class="col_12" id="cart_title_container">
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




<!--------cart_show_container-------->
<section class="col_lg_12 col_md_12  " id="cart_show_container">
  <div class="wrap">
        <div class="box cart_title_box lg_d_n t_d_n">
            <div class="col_12 ">
                <h5> 確認購物車</h5>
            </div>
        </div>


     
     
<form action="cart_update.php">
<input type="hidden" name="p_no" value="<?php echo $p_no;?>">


      <div class="box cart_show_box">
      <?php 

if( isset($_SESSION["p_name"]) === false || count($_SESSION["p_name"])==0){ //尚無購物資料或購物車中的商品被刪光了
  echo "尚無購物資料";
}else{  //有購物資料
	// $total = 0;
	foreach( $_SESSION["p_name"] as $p_no => $data){ 
		// $subTotal = $_SESSION["product_price"][$classic_pn] * $_SESSION["classic_qty"][$classic_pn];  //計算小計
		// $total = $total + $subTotal;  //計算總計
     ?>	
          <div class=" cart_img col_6 col_lg_3 col_md_2 ">
             <img src=" <?php echo $_SESSION["p_img"][$p_no]; ?>  " alt="choco">
          </div> 
          <div class="cart_pname  col_lg_2 col_md_2 m_d_n">
            <h5> <?php echo $_SESSION["p_name"][$p_no]; ?></h5>
          </div>
          <div class="cart_price  col_lg_2 col_md_2 m_d_n">
              <h5 > <span class="lg_d_n  t_d_n"> 單價：</span>  NT$ <?php echo $_SESSION["p_price"][$p_no]; ?></h5>
          </div>    
          <form >
          <div class=" cart_qty  col_lg_2 col_md_2 m_d_n">
            <div class="qty_buttons">
              <input
                id="minus"
                class="minus"
                type="button"
                value="-"
              />
              <input
                id="qty"
                class="qty"
                type="text"
                value="<?php echo $_SESSION["p_qty"][$p_no]; ?>"
                min="1"
                max="10"
                step="1"
                name="cart_qty"
              />
              <input id="plus" class="plus" type="button" value="+" />
            </div>
          </div>
          </form> 
          <div class="col_lg_2  cart_amout m_d_n">
              <!-- <h5 >NT$ <?php echo $subTotal?></h5> -->
          </div>
          <div class=" cart_delete col_lg_1 m_d_n">
          <input type="submit" name="btn_delete" value="刪除">
          </div>

          </form>		
	<?php 
}	// } //foreach
	// echo  number_format($total); 
}//if

?>
<!-- mobile cart desc -->
    
    <div class="mobile_cart_desc lg_d_n t_d_n col_6 ">
            <div class="cart_pname">
            <h5> <?php echo $_SESSION["p_name"][$p_no]; ?></h5>
            </div>
            <div class="cart_price   ">
                <h5 >  單價：  NT$ 350</h5>
            </div>     
            <div class=" cart_qty">
              <div class="qty_buttons">
                <input
                  id="minus"
                  class="minus"
                  type="button"
                  value="-"
                />
                <input
                  id="qty"
                  class="qty"
                  type="text"
                  value="<?php echo $_SESSION["p_qty"][$p_no]; ?>"
                  min="1"
                  max="10"
                  step="1"
                  name="classic_qty"
                />
                <input id="plus" class="plus" type="button" value="+" />
              </div>
            </div>
            <div class=" cart_amout">
                <h5 >總計： NT$ 350</h5>
            </div>
            <div class=" cart_delete  ">
                <p >刪除</p>
            </div>
        </div>
    </div>    

 <!--------cart_form-------->

      <div class="cart_form">
        <div class="cart_total">

          <p>商品金額: <span>NT$ 350</span></p>
          <p>運費小計: <span>尚未選擇</span></p>
          <p>點數折抵: <span>尚未折抵</span></p>
          <p>應付金額: <span class="amout">NT$ 350</span></p>

        </div>
      </div>


 <!-------cart_btn_group-------->

      <div class="cart_btn_group">
          <a href="../store/store.html" class="btn orange_l "><span> 繼續購物</span></a>
          <a href="cart_ship.html" class="btn orange_l"><span> 進行結帳</span></a>
      </div>
  </div>
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
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener('resize', () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});

</script>



</body>
</html>



