
<?php
$errMsg = "";
try {
	require_once("connectChoco.php");

	$sql = "select * from classic_products ";
	$products = $pdo->query($sql); 
} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}
 
?> 




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/store.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js'></script>

    <title>CHOCO商城</title>
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
            <a href="../index/index.html">
              <img src="image/headerfooter/logo.png" alt="CHOCOLINE" />
            </a>
          </div>
          <div class="status">
            <figure>
              <a href="javascript:;">
                <img src="image/headerfooter/icon_member.png" alt="member" />
              </a>
            </figure>
            <figure>
              <a href="javascript:;">
                <img src="image/headerfooter/icon_cart.png" alt="cart" />
              </a>
            </figure>
          </div>
        </div>
        <ul class="menubox">
          <li><a href="../custom/custom.html">客製 CHOCO</a></li>
          <li><a href="../contest/contest.html">CHOCO 選美</a></li>
          <li><a href="../game/game.html">CHOCO 遊戲</a></li>
          <li class="nowpage"><a href="../store/store.html">CHOCO 商城</a></li>
          <li><a href="../about/about.html">關於 CHOCO</a></li>
          <figure id="menuclose">
            <img src="image/headerfooter/menuclose.png" alt="close" />
          </figure>
        </ul>
      </div>
      <div class="d_header">
        <div class="logo">
          <a href="../index/index.html">
            <img src="image/headerfooter/logo.png" alt="CHOCOLINE" />
          </a>
        </div>
        <div class="navbar">
          <ul class="menubox">
            <li><a href="../custom/custom.html">客製 CHOCO</a></li>
            <li><a href="../contest/contest.html">CHOCO 選美</a></li>
            <li><a href="../game/game.html">CHOCO 遊戲</a></li>
            <li class="nowpage"><a href="store.html">CHOCO 商城</a></li>
            <li><a href="../about/about.html">關於 CHOCO</a></li>
          </ul>
          <div class="status">
            <figure>
              <a href="../member/member.html">
                <img src="image/headerfooter/icon_member.png" alt="member" />
              </a>
            </figure>
            <figure>
              <a href="../cart/cart.php">
                <img src="image/headerfooter/icon_cart.png" alt="cart" />
              </a>
            </figure>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
    <!-- bannner start -->
    <div class="slides_container">
      <div class="slide fade">
        <img src="image/store/banner1.png" />
      </div>

      <div class="slide fade">
        <img src="https://picsum.photos/1920/640/?random=2" />
      </div>

      <div class="slide fade">
        <img src="https://picsum.photos/1920/640/?random=3" />
      </div>

      <a id="prev_button" class="prev_button">&#10094;</a>
      <a id="next_button" class="next_button">&#10095;</a>

      <div class="dots">
        <span id="dot1" class="dot"></span>
        <span id="dot2" class="dot"></span>
        <span id="dot3" class="dot"></span>
      </div>
    </div>

    <!-- banner end -->
    <!-- hot product start -->
    <section class="hot_product_container">
      <div class="title_decoration">
        <img src="image/common/title.png" alt="" />
        <h2>熱門商品</h2>
      </div>

      <div class="cable_car">
        <div class="cloud x1"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
        <div class="cloud x6"></div>
        <!-- cable car start -->
        <div class="cable_car_area">
          <span class="place">No.1</span>
          <a class="cable_car_pic">
            <img src="image/store/black_chocolate_base.png" />
          </a>
          <div class="cable_car_content">
            <h3>心形堅果牛奶巧克力</h3>
            <span class="price">NT$999元</span>
            <a href="javascript:;" class="btn orange_m "
              ><span>加入購物車</span></a
            >
          </div>
        </div>
        <!-- cable car end -->

        <!-- cable car start -->
        <div class="cable_car_area">
          <span class="place">No.2</span>
          <div class="cable_car_pic">
            <img src="image/store/rabbit_white_chocolate.png" />
          </div>
          <div class="cable_car_content">
            <h3>兔子造型白巧克力</h3>
            <span class="price">NT$600元</span>
            <a href="javascript:;" class="btn orange_m "
              ><span>加入購物車</span></a
            >
          </div>
        </div>
        <!-- cable car end -->
        <!-- cable car start -->
        <div class="cable_car_area">
          <span class="place">No.3</span>
          <div class="cable_car_pic">
            <a href="product.html"> <img src="image/store/rabbit_white_chocolate.png" /></a>
          </div>
          <div class="cable_car_content">
            <h3>兔子造型白巧克力</h3>
            <span class="price">NT$600元</span>
            <a href="javascript:;" class="btn orange_m "
              ><span>加入購物車</span></a
            >
          </div>
        </div>
        <!-- cable car end -->
        <!-- cable car start -->
        <div class="cable_car_area">
          <span class="place">No.4</span>
          <div class="cable_car_pic">
            <img src="image/store/rabbit_white_chocolate.png" />
          </div>
          <div class="cable_car_content">
            <h3>兔子造型白巧克力</h3>
            <span class="price">NT$600元</span>
            <a href="javascript:;" class="btn orange_m "
              ><span>加入購物車</span></a
            >
          </div>
        </div>
        <!-- cable car end -->
        <!-- cable car start -->
        <div class="cable_car_area">
          <span class="place">No.5</span>
          <div class="cable_car_pic">
            <img src="image/store/rabbit_white_chocolate.png" />
          </div>
          <div class="cable_car_content">
            <h3>兔子造型白巧克力</h3>
            <span class="price">NT$600元</span>
            <a href="javascript:;" class="btn orange_m "
              ><span>加入購物車</span></a
            >
          </div>
        </div>
        <!-- cable car end -->
      </div>
    </section>
    <!-- hot product end -->
    <!-- prdocut list start -->
    <section class="product_list_container">
      <div class="product_list_wrap wrap">
        <div class="title_decoration">
         <a href="product.html"><img src="image/common/title.png" alt="" /></a> 
          <h2>快來選購喜歡的商品吧</h2>
        </div>
        <div class="product_list_content">
          <div class="selector_product_list">
            <aside id="selector_area" class="selector_area col_lg_2" >
              <form onsubmit="return returnR(this)">
                <div class="header_clear">
                  <h3>篩選器</h3>
                  <div class="selector_clear">
                    <label for="clear" class="clear_icon"></label>
                    <input id="clear" type="reset" value="清除" />
                  </div>
                </div>

                <ul>
                  <li class="category">
                    <h4>價格(0~1500元)</h4>
                    <div class="range_wrap">
                      <div id="range" class="range">
                        <div id="range_between" class="range_between"></div>
                        <button
                          id="range_button1"
                          class="range_button1"
                        ></button>
                        <button
                          id="range_button2"
                          class="range_button2"
                        ></button>
                        <input
                          id="range_input1"
                          class="range_input1"
                          type="number"
                          min="0"
                          max="1500"
                        />
                        ~
                        <input
                          id="range_input2"
                          class="range_input2"
                          type="number"
                          min="0"
                          max="1500"
                        />
                        元
                      </div>
                    </div>
                  </li>
                  <li class="category">
                    <h4>巧克力</h4>
                    <div class="category_content">
                      <label class="checkbox_text">
                        <input type="checkbox" id="milk_chocolate" />
                        <span>牛奶巧克力</span>
                      </label>
                      <br />
                      <label class="checkbox_text">
                        <input type="checkbox" id="white_chocolate" />
                        <span>白巧克力</span>
                      </label>
                      <br />
                      <label class="checkbox_text">
                        <input type="checkbox" id="Black_chocolate" />
                        <span>黑巧克力</span>
                      </label>
                    </div>
                  </li>
                  <li class="category">
                    <h4>口味</h4>
                    <div class="category_content">
                      <label class="checkbox_text">
                        <input type="checkbox" id="fruit" />
                        <span>水果</span>
                      </label>
                      <br />
                      <label class="checkbox_text">
                        <input type="checkbox" id="berry" />
                        <span>莓果</span>
                      </label>
                      <br />
                      <label class="checkbox_text">
                        <input type="checkbox" id="nut" />
                        <span>堅果</span>
                      </label>
                    </div>
                  </li>
                  <li class="category">
                    <h4>形狀</h4>
                    <div class="category_content">
                      <label class="checkbox_text">
                        <input type="checkbox" id="circle" />
                        <span>圓形</span>
                      </label>
                      <br />
                      <label class="checkbox_text">
                        <input type="checkbox" id="heart" />
                        <span>心形</span>
                      </label>
                      <br />
                      <label class="checkbox_text">
                        <input type="checkbox" id="special" />
                        <span>特殊造型</span>
                      </label>
                    </div>
                  </li>

                  <li class="category">
                    <h4>包裝</h4>
                    <div class="category_content">
                      <label class="checkbox_text">
                        <input type="checkbox" id="luxury" />
                        <span>奢華風</span>
                      </label>
                      <br />
                      <label class="checkbox_text">
                        <input type="checkbox" id="Simplicity" />
                        <span>簡約風</span>
                      </label>
                      <br />
                      <label class="checkbox_text">
                        <input type="checkbox" id="carton" />
                        <span>卡通風</span>
                      </label>
                    </div>
                  </li>
                  <li class="category">
                    <h4>對象</h4>
                    <div class="category_content">
                      <label class="checkbox_text">
                        <input type="checkbox" id="self" />
                        <span>自己</span>
                      </label>
                      <br />
                      <label class="checkbox_text">
                        <input type="checkbox" id="family" />
                        <span>家人</span>
                      </label>
                      <br />
                      <label class="checkbox_text">
                        <input type="checkbox" id="lover" />
                        <span>情人</span>
                      </label>
                      <label class="checkbox_text">
                        <input type="checkbox" id="friend" />
                        <span>朋友</span>
                      </label>
                    </div>
                  </li>
                </ul>
              </form>
            </aside>

            <div class="product_list_area col_lg_8">
              <div class="order_by_search">
                <button id="select_button" class="btn select_button">篩選器</button>
                <div class="order_by">
                  <!-- <span>排列順序:</span> -->
                  <select name="" class="select_dropdown">
                    <option value="最新商品">最新商品</option>
                    <option value="熱門排行">熱門排行</option>
                  </select>
                </div>
                <div class="search">
                  <input type="text" placeholder="輸入你想搜尋的商品" />
                  <button><i class="fas fa-search"></i></button>
                </div>
              </div>
              <div id="product_list"class="product_list">
                <!-- product item start -->
                <div class="product_item col_lg_5">
                  <div class="special_tag">
                    <img src="image/store/crown1.png" alt="" />
                    <p>選美No.1</p>
                  </div>

                  <div class="product_pic_content">
                    <div class="product_pic">
                      <img src="image/store/bear.png" />
                    </div>
                    <div class="product_content">
                      <h2>快樂小妖精</h2>
                      <p class="sold_qty">已售出 <span>1765</span></p>
                      <p class="price">NT$350元</p>
                      <div class="qty_buttons">
                        <input
                          id="minus"
                          class="minus"
                          type="button"
                          value="-"
                        /><input
                          id="qty"
                          class="qty"
                          type="text"
                          value="1"
                          min="1"
                          max="10"
                          step="1"
                          name="qty"
                        /><input
                          id="plus"
                          class="plus"
                          type="button"
                          value="+"
                        />
                      </div>
                      
                    </div>
                  </div>
                  <div class="product_button">
                    <a href="javascript:;" class="collect_btn btn cyan_m"
                      ><span>
                        <i class="heart_unclick far fa-heart"></i>
                        <i class="heart_clicked fas fa-heart"></i>

                        收藏
                      </span>
                    </a>
                    <a href="javascript:;" class="btn orange_m"
                      ><span>加入購物車</span></a
                    >
                  </div>
                </div>
                <!-- product item end -->

<!--  資料庫撈資料 -->
<?php
	
  while($prodRow = $products->fetch(PDO::FETCH_ASSOC)){
?>
<!-- <form> -->
<form action="../cart/cart_add.php" >
<input type="hidden" name="p_no" value="<?php echo $prodRow["classic_product_no"];?>">
<input type="hidden" name="p_name" value="<?php echo $prodRow["classic_product_name"];?>">
<input type="hidden" name="p_price" value="<?php echo $prodRow["product_price"];?>">
<input type="hidden" name="p_img" value="../store/image/store/<?php echo $prodRow["product_img_src"];?>">





                <!-- product item start -->
                <div class="product_item col_lg_5">
                  <div class="product_pic_content">
                    <div class="product_pic">
                      <a href="product.html">
                      <img src="image/store/<?php echo $prodRow["product_img_src"];?>" />
                      </a>
                      <a href="javascript:;">
                      <img src="image/store/<?php echo $prodRow["product_hover_src"];?>" />
                      </a>
                    </div>
                    <div class="product_content">
                      <h2><?php echo $prodRow["classic_product_name"];?></h2>
                      <p class="sold_qty">已售出 <span>9999</span></p>
                      <p class="price">NT$ <?php echo $prodRow["product_price"];?></p>
                      <div class="qty_buttons">
                        <input
                          id="minus"
                          class="minus"
                          type="button"
                          value="-"
                        /><input
                          id="qty"
                          class="qty"
                          type="text"
                          value="2"
                          min="1"
                          max="10"
                          step="1"
                          name="p_qty"
                        /><input
                          id="plus"
                          class="plus"
                          type="button"
                          value="+"
                        />
                      </div>
                      
                    </div>
                  </div>
                  <div class="product_button">
                    <a href="javascript:;" class="collect_btn btn cyan_m"
                      ><span>
                        <i class="heart_unclick far fa-heart"></i>
                        <i class="heart_clicked fas fa-heart"></i>

                        收藏</span
                      ></a
                    >
                    <input class="btn orange_m  cart_btn " type="submit"  value="加入購物車">

            
                  </div>
                </div>
                <!-- product item end -->

              
                </form>

                <?php
                }
              ?>


                <!-- product item end -->
  
                <div class="pagination_wrap">
                  <div class="pagination">
                    <a href="javascript:;">❮</a>
                    <a class="active" href="javascript:;">1</a>
                    <a href="javascript:;">2</a>
                    <a href="javascript:;">3</a>
                    <a href="javascript:;">4</a>
                    <a href="javascript:;">5</a>
                    <a href="javascript:;">❯</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- prdocut list end -->


    <!--  燈箱 -->
    <!-- 燈箱：登入 -->
    <!-- <div id="lightBox" style="display:none">
			<div id="tableLogin">
				<img class="login_bg" src="image/login_bg.png" alt="login_bg">
			</div>
		</div>

    <script> 
    document.getElementById('cart_btn').onclick=function(){
      document.getElementById('lightBox').style.display =" ";
    };
    
    
    
    </script> -->


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
        <!-- <img src="image/robot/robot_tooth.png" alt="機器人的牙齒"> -->
        <div id="robot_message" class="message_area">
          <p class="message message_answer">有什麼需要我幫忙的嗎?</p>
          <p
            id="message_sample"
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
              <span class="keyword" style="width:80px">客製商品1</span>
              <span class="keyword" style="width:300px">玩遊戲拿點數2</span>
              <span class="keyword" style="width:400px">購物車3</span>
              <span class="keyword" style="width:200px">玩遊戲拿點數4</span>
              <span class="keyword" style="width:200px">選美比賽5</span>
            </div>
          </div>
          <button id="robot_next_button" class="next_button">
            <i class="fas fa-angle-right"></i>
          </button>
        </div>
        <form onsubmit="return returnR(this)" class="query_area">
          <input id="leave_message" type="text" placeholder="請問..." />
          <input id="message_submit" type="submit" value="送出" />
        </form>
      </div>
    </div>
    <!-- robot end -->

    <script src="../common/js/header.js"></script>
    <script src="../common/js/robot.js"></script>
    <script src="js/store.js"></script>

    <!-- slide start -->
    <script>
      window.addEventListener("load", function() {
        var prev_button = document.getElementById("prev_button");
        var next_button = document.getElementById("next_button");
        var dot1 = document.getElementById("dot1");
        var dot2 = document.getElementById("dot2");
        var dot3 = document.getElementById("dot3");

        prev_button.onclick = function() {
          plusSlides(-1);
        };
        next_button.onclick = function() {
          plusSlides(1);
        };
        dot1.onclick = function() {
          currentSlide(1);
        };
        dot2.onclick = function() {
          currentSlide(2);
        };
        dot3.onclick = function() {
          currentSlide(3);
        };

        var slideIndex = 1;

        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides((slideIndex += n));
        }

        function currentSlide(n) {
          showSlides((slideIndex = n));
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("slide");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {
            slideIndex = 1;
          }
          if (n < 1) {
            slideIndex = slides.length;
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }

          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
        }
      });
    </script>
    <!-- slide end -->

    <!-- quantity control start -->
    <script>
      window.addEventListener("load", function() {
        setTimeout(
          init2slider(
            "range",
            "range_between",
            "range_button1",
            "range_button2",
            "range_input1",
            "range_input2"
          ),
          0
        );
      });

      function init2slider(idX, btwX, btn1X, btn2X, input1, input2) {
        var slider = document.getElementById(idX);
        var between = document.getElementById(btwX);
        var button1 = document.getElementById(btn1X);
        var button2 = document.getElementById(btn2X);
        var inpt1 = document.getElementById(input1);
        var inpt2 = document.getElementById(input2);

        var min = inpt1.min;
        var max = inpt1.max;

        var sliderCoords = getCoords(slider);
        button1.style.marginLeft = "0px";
        button2.style.marginLeft =
          slider.offsetWidth - button1.offsetWidth + "px";
        between.style.width = slider.offsetWidth - button1.offsetWidth + "px";
        inpt1.value = min;
        inpt2.value = max;

        // 在input1輸入觸發
        inpt1.onchange = function(e) {
          // 處理"輸入值大於最大值"的事件
          if (parseInt(inpt1.value) < min) {
            inpt1.value = min;
          }
          if (parseInt(inpt1.value) > max) {
            inpt1.value = max;
          }
          if (parseInt(inpt1.value) > parseInt(inpt2.value)) {
            var temp = inpt1.value;
            inpt1.value = inpt2.value;
            inpt2.value = temp;
          }

          var sliderCoords = getCoords(slider);
          // 找出"新輸入數值"與"總range"相比，動了幾趴
          var per1 = (parseInt(inpt1.value - min) * 100) / (max - min);
          var per2 = (parseInt(inpt2.value - min) * 100) / (max - min);
          // 根據動的趴數調整button的位置
          var left1 = (per1 * (slider.offsetWidth - button1.offsetWidth)) / 100;
          var left2 = (per2 * (slider.offsetWidth - button1.offsetWidth)) / 100;
          button1.style.marginLeft = left1 + "px";
          button2.style.marginLeft = left2 + "px";

          if (left1 > left2) {
            between.style.width = left1 - left2 + "px";
            between.style.marginLeft = left2 + "px";
          } else {
            between.style.width = left2 - left1 + "px";
            between.style.marginLeft = left1 + "px";
          }
        };

        // 在input1輸入觸發
        inpt2.onchange = function(e) {
          // 處理"輸入值大於最大值"的事件
          if (parseInt(inpt2.value) < min) inpt2.value = min;
          if (parseInt(inpt2.value) > max) inpt2.value = max;
          if (parseInt(inpt1.value) > parseInt(inpt2.value)) {
            var temp = inpt1.value;
            inpt1.value = inpt2.value;
            inpt2.value = temp;
          }

          var sliderCoords = getCoords(slider);
          // 找出"新輸入數值"與"總range"相比，動了幾趴
          var per1 = (parseInt(inpt1.value - min) * 100) / (max - min);
          var per2 = (parseInt(inpt2.value - min) * 100) / (max - min);
          // 根據動的趴數調整button的位置
          var left1 = (per1 * (slider.offsetWidth - button1.offsetWidth)) / 100;
          var left2 = (per2 * (slider.offsetWidth - button1.offsetWidth)) / 100;

          button1.style.marginLeft = left1 + "px";
          button2.style.marginLeft = left2 + "px";

          if (left1 > left2) {
            between.style.width = left1 - left2 + "px";
            between.style.marginLeft = left2 + "px";
          } else {
            between.style.width = left2 - left1 + "px";
            between.style.marginLeft = left1 + "px";
          }
        };

        // 點下button1觸發
        button1.onmousedown = function(e) {
          var sliderCoords = getCoords(slider);
          var betweenCoords = getCoords(between);
          var buttonCoords1 = getCoords(button1);
          var buttonCoords2 = getCoords(button2);
          var shiftX2 = e.pageX - buttonCoords2.left;
          var shiftX1 = e.pageX - buttonCoords1.left;
          // 拖曳button1觸發
          document.onmousemove = function(e) {
            var left1 = e.pageX - shiftX1 - sliderCoords.left;
            var right1 = slider.offsetWidth - button1.offsetWidth;
            if (left1 < 0) left1 = 0;
            if (left1 > right1) left1 = right1;
            button1.style.marginLeft = left1 + "px";

            shiftX2 = e.pageX - buttonCoords2.left;
            var left2 = e.pageX - shiftX2 - sliderCoords.left;
            var right2 = slider.offsetWidth - button2.offsetWidth;
            if (left2 < 0) left2 = 0;
            if (left2 > right2) left2 = right2;

            var per_min = 0;
            var per_max = 0;

            if (left1 > left2) {
              between.style.width = left1 - left2 + "px";
              between.style.marginLeft = left2 + "px";
              per_min =
                (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
              per_max =
                (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
            } else {
              between.style.width = left2 - left1 + "px";
              between.style.marginLeft = left1 + "px";

              per_min =
                (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
              per_max =
                (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
            }
            inpt1.value =
              parseInt(min) + Math.round(((max - min) * per_min) / 100);
            inpt2.value =
              parseInt(min) + Math.round(((max - min) * per_max) / 100);
          };
          document.onmouseup = function() {
            document.onmousemove = document.onmouseup = null;
          };
          return false;
        };

        button2.onmousedown = function(evt) {
          var sliderCoords = getCoords(slider);
          var betweenCoords = getCoords(between);
          var buttonCoords1 = getCoords(button1);
          var buttonCoords2 = getCoords(button2);
          var shiftX2 = evt.pageX - buttonCoords2.left;
          var shiftX1 = evt.pageX - buttonCoords1.left;

          document.onmousemove = function(evt) {
            var left2 = evt.pageX - shiftX2 - sliderCoords.left;
            var right2 = slider.offsetWidth - button2.offsetWidth;
            if (left2 < 0) left2 = 0;
            if (left2 > right2) left2 = right2;
            button2.style.marginLeft = left2 + "px";

            shiftX1 = evt.pageX - buttonCoords1.left;
            var left1 = evt.pageX - shiftX1 - sliderCoords.left;
            var right1 = slider.offsetWidth - button1.offsetWidth;
            if (left1 < 0) left1 = 0;
            if (left1 > right1) left1 = right1;

            var per_min = 0;
            var per_max = 0;

            if (left1 > left2) {
              between.style.width = left1 - left2 + "px";
              between.style.marginLeft = left2 + "px";
              per_min =
                (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
              per_max =
                (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
            } else {
              between.style.width = left2 - left1 + "px";
              between.style.marginLeft = left1 + "px";
              per_min =
                (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
              per_max =
                (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
            }
            inpt1.value =
              parseInt(min) + Math.round(((max - min) * per_min) / 100);
            inpt2.value =
              parseInt(min) + Math.round(((max - min) * per_max) / 100);
          };
          document.onmouseup = function() {
            document.onmousemove = document.onmouseup = null;
          };
          return false;
        };

        button1.ondragstart = function() {
          return false;
        };
        button2.ondragstart = function() {
          return false;
        };

        function getCoords(elem) {
          var box = elem.getBoundingClientRect();
          return {
            top: box.top + pageYOffset,
            left: box.left + pageXOffset
          };
        }
      }
    </script>
    <!-- quantity control end -->

    <!-- selector start -->
    <script>

    function getStyle(obj,attr){
        return obj.currentStyle?obj.currentStyle[attr]:getComputedStyle(obj,null)[attr];
    }

    
      window.addEventListener("load",function(){
      var select_button = document.getElementById("select_button");
      var selector_area = document.getElementById("selector_area");
      var product_list = document.getElementById("product_list");
      
      select_button.onclick = function(){
        
        if(document.body.clientWidth < 768){

        if(getStyle(selector_area,"display") == "block"){
          selector_area.style.display = "none";
          product_list.style.paddingTop ="50px";

          }else{
            selector_area.style.display = "block";
            product_list.style.paddingTop ="1030px";
          }
        }
      
      if(document.body.clientWidth >= 768 && document.body.clientWidth < 992){
      if(getStyle(selector_area,"display") == "block" ){
        selector_area.style.display = "none";
          product_list.style.paddingTop ="50px";
      }else{
        selector_area.style.display = "block";
        product_list.style.paddingTop ="700px";
      }
      }

      }

      });
    </script>

    <!-- selector end -->

    <!-- collect start -->
    <script>
      window.addEventListener("load", function() {
        var collect_btn = document.getElementsByClassName("collect_btn");

        for (i = 0; i < collect_btn.length; i++) {
          collect_btn[i].addEventListener("click", function() {
            var heart_clicked = this.getElementsByClassName("heart_clicked")[0];
            var heart_unclick = this.getElementsByClassName("heart_unclick")[0];

            if (heart_clicked.style.display != "inline") {
              heart_clicked.style.display = "inline";
              heart_unclick.style.display = "none";
            } else {
              heart_clicked.style.display = "none";
              heart_unclick.style.display = "inline";
            }
          });
        }
      });
    </script>
    <!-- collect end -->

    <!-- qty control start -->
    <script>
      function minus1() {
        var val = parseInt(this.nextSibling.value);
        console.log(this.nextSibling.value);
        if ((val > 1) & (val <= 10)) {
          val -= 1;
          this.nextSibling.value = val;
        } else {
          this.nextSibling.value = 1;
        }
      }
      function plus1() {
        var val = parseInt(this.previousSibling.value);
        console.log(this.previousSibling.value);
        if ((val >= 1) & (val < 10)) {
          val += 1;
          this.previousSibling.value = val;
        } else {
          this.previousSibling.value = 1;
        }
      }

      window.addEventListener("load", function() {
        var qty = document.getElementsByClassName("qty");
        var minus = document.getElementsByClassName("minus");
        var plus = document.getElementsByClassName("plus");
        var length = qty.length;

        for (var i = 0; i < length; i++) {
          // qty[i].onkeyup = qty_reset;
          minus[i].onclick = minus1;
          plus[i].onclick = plus1;
        }
      });
    </script>
    <!-- qty control end -->


    <!-- robot add message start-->
    <script>
      function $id(id) {
        return document.getElementById(id);
      }      


// 點擊向左按鈕移動
    function getStyle(obj,attr){
        return obj.currentStyle?obj.currentStyle[attr]:getComputedStyle(obj,null)[attr];
    }


      let n = 0;
      // let margin_left = 0;
      function keyword_move_right(){
       

        var keyword_wrap =document.querySelector("#keyword_wrap");
        var keyword_space =document.querySelector("#keyword_space");
        var keywords =  document.querySelectorAll(".keyword");
      
        margin_left = parseInt(keyword_wrap.style.marginLeft.replace("px",""));
        keyword_space_width = parseInt(keyword_space.style.width.replace("px",""));
        keywords_width = parseInt(getStyle(keywords[n],"width"))
        
      // 計算keyword外層寬度
        keyword_wrap_width=0;   
        for(var i=0; i<keywords.length;i++){
          keyword_wrap_width += parseInt(keywords[i].style.width.replace("px",""));
        
        }
        // margin_left=-keywords_width;
        margin_left -= keywords_width;
        
        // keyword_wrap.style.width = keyword_wrap_width + "px";

        // console.log(keyword_wrap_width);


      // 動態計算需移動的距離
         
        //  keyword_count=0;

        // for(var j=0;j<keyword_count;j++){
        //   space_add += parseInt(keywords[keyword_count].style.width.replace("px",""));
        // }

        // margin_left -= keywords[n].style.width;
        // margin_value = margin_left + space_add;



      // 移動距離不超過所有內容
        if(-margin_left < keyword_wrap_width - keyword_space_width){
        
          keyword_wrap.style.marginLeft = margin_left + "px";
        
        // keyword_wrap.style.marginLeft = margin_value.toString()+"px";
        console.log(margin_left);
        console.log(keyword_wrap_width);
        console.log(keyword_space_width);
        };   
        if(n<keywords.length-1){
        n++;
      }
      console.log(n);

      }

      function keyword_move_left(){

        var keyword_wrap =document.querySelector("#keyword_wrap");
        var keyword_space =document.querySelector("#keyword_space");
        var keywords =  document.querySelectorAll(".keyword");
      
        margin_left = parseInt(keyword_wrap.style.marginLeft.replace("px",""));
        keyword_space_width = parseInt(keyword_space.style.width.replace("px",""));
        keywords_width = parseInt(getStyle(keywords[n],"width"))
        
      // 計算keyword外層寬度
        keyword_wrap_width=0;   
        for(var i=0; i<keywords.length;i++){
          keyword_wrap_width += parseInt(keywords[i].style.width.replace("px",""));
        
        }
        // margin_left=-keywords_width;
        margin_left += keywords_width;
        
        // keyword_wrap.style.width = keyword_wrap_width + "px";

        // console.log(keyword_wrap_width);


      // 動態計算需移動的距離
         
        //  keyword_count=0;

        // for(var j=0;j<keyword_count;j++){
        //   space_add += parseInt(keywords[keyword_count].style.width.replace("px",""));
        // }

        // margin_left -= keywords[n].style.width;
        // margin_value = margin_left + space_add;



      // 移動距離不超過所有內容
        if(margin_left < 0){
        
          keyword_wrap.style.marginLeft = margin_left + "px";
        
        // keyword_wrap.style.marginLeft = margin_value.toString()+"px";
        console.log(margin_left);
        console.log(keyword_wrap_width);
        console.log(keyword_space_width);
        };   
        
        if(n>0){
          n--;
        }
        
        console.log(n);
   
      }
      

      function add_keyword(){
        var keyword = this.innerText;
        console.log(this.innerText);
        let robot_message = $id("robot_message");
        let message_sample = document.querySelector("#message_sample");
        let leave_message = document.querySelector("#leave_message");
        let new_message = message_sample.cloneNode(true);
        new_message.style.display = "";
        new_message.innerText = keyword;
        new_message.id ="";
        robot_message.appendChild(new_message);
        // move the scroll
        robot_message.scrollTop = robot_message.scrollHeight - robot_message.clientHeight;
        leave_message.value ="";

   }

      function add_message() {
        let robot_message = $id("robot_message");
        let message_sample = document.querySelector("#message_sample");
        let leave_message = document.querySelector("#leave_message");

        let new_message = message_sample.cloneNode(true);
        new_message.style.display = "";
        new_message.innerText = leave_message.value;
        new_message.id ="";
        robot_message.appendChild(new_message);
        // move the scroll
        robot_message.scrollTop = robot_message.scrollHeight - robot_message.clientHeight;
        leave_message.value ="";
      
      }

      window.addEventListener("load", function() {

      $id("message_submit").onclick =function(){
        if($id("leave_message").value!=""){
          add_message();
        }
      }


      console.log(leave_message.value);
        var keyword = document.getElementsByClassName("keyword");
        for (var i = 0; i < keyword.length; i++) {
          keyword[i].onclick = add_keyword;
        }


        $id("robot_prev_button").onclick = keyword_move_left;

        $id("robot_next_button").onclick = keyword_move_right;

      });
    </script>
    <!-- robot add message end -->

    <script>
      function returnR() {
        return false;
      }
    </script>


  </body>
</html>
