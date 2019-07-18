<?php
session_start();
if(!isset($_SESSION["mem_id"])){
    $_SESSION["mem_id"] = null;
}
?>

<?php
$errMsg = "";
try {
	require_once("../common/php/connect_choco.php");


  $sql = "select * from member where mem_id =:mem_id";
  $member = $pdo->prepare($sql); 
  $member->bindValue(":mem_id", $_SESSION["mem_id"]);
  $member->execute();


// -----------訂單-----------------//
  $sql = "select * from member where mem_id =:mem_id";
  $member = $pdo->prepare($sql); 
  $member->bindValue(":mem_id", $_SESSION["mem_id"]);
  $member->execute();



} catch (PDOException $e) {
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
    <link rel="stylesheet" href="css/member.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>

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

    <div class="cloud" >
        <img src="image/member/cloud.png" alt="cloud">
    </div>

<!------ tabs_container ------->
<section class="col_12" id="member_tabs_container">
    <div class="wrap">
        <button class="tablink " onclick="open_page('info', this,'#367e90','white')"id="default_open" >我的資料</button>
        <button class="tablink" onclick="open_page('orderlist', this,'#367e90','white')" >訂單紀錄</button>
        <button class="tablink" onclick="open_page('favorite', this,'#367e90','white' )">我的收藏</button>
        <button style="display: none;" class="tablink" onclick="open_page('notification', this, '#367e90','white')">最新通知</button>     
    </div>
</section>

<!------ member_container ------->

<main class="member_container">
  <div class="wrap">
  <form action="update_info.php" enctype="multipart/form-data"  method="post">

 <!------ info ------->

      <section id="info" class="tabcontent ">
        <form action="">
        <div class="my_info">
          <div class="image_box  col_12 col_md_4 col_lg_3"> 
              <div class="profile_pic">
                <img id="img_preview" src="../common/image/common/<?php echo $_SESSION["mem_headshot"]?>" alt="profile">
              </div>

              <div class="upload">
                    <img  v-if="image" :src="image" width="300">
                    <input type="file" name="memUpFile" id="member_upFile" ><br>
                    <p>上傳照片</p>
                    <p>檔案大小最大為1mb</p>
              </div>
              <div class="btn orange_m logout_btn" id ="logout_btn">登出</div>
              <!-- <input type="button" name="logout" class="btn orange_l " id=" logout_btn" value="登出"> -->
            </div>

<!-- change headshot js -->
          <script>
            $('#member_upFile').change(function () {
                var file = $('#member_upFile')[0].files[0];
                var reader = new FileReader;
                reader.onload = function (e) {
                    $('#img_preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            });

        </script>
          
<!-- info table -->

        <div class="col_12 col_md_8 col_lg_9">
          <table class="info_table">
            <tr><th colspan="2"  class="info_th" > 我的資料</th></tr>
            <tr><td></td></tr>

            <tr>
              <th>帳號：</th>
              <td><?php echo $_SESSION["mem_id"] ?></td>
            </tr>

            <tr>
              <th>姓名：</th>
              <td><input type="text"  id= "mem_name" readonly="readonly" name="mem_name" value ="<?php echo $_SESSION["mem_name"] ?>" ><i class="fas fa-pen"></i></td>
            </tr>

            <tr>
              <th>Email：</th>
              <td><input type="text"  id= "mem_email" readonly="readonly" name="mem_email" value ="<?php echo $_SESSION["mem_email"] ?>"  ><i class="fas fa-pen"></i></td>
            </tr>

            <tr>
              <th>手機號碼：</th>
              <td><input type="text" id= "mem_tel" readonly="readonly" name="mem_tel" value ="<?php echo $_SESSION["mem_tel"] ; ?>"><i class="fas fa-pen"></i></td>
            </tr>

              <tr>
                <th>生日：</th>
                <td><input type="text" id= "mem_birth" readonly="readonly" name="mem_birth" value ="<?php echo $_SESSION["mem_birth"] ; ?>"><i class="fas fa-pen"></i></td>
              </tr>

          <th colspan="2" class="info_th"  >我的信用卡</th>
          <td></td>

           <tr class="visa_tr">
              <td  ><i class="fab fa-cc-visa"></i></td>
              <td><input type="text" id= "mem_credit" readonly="readonly"  name="mem_credit" value ="<?php echo  $_SESSION["mem_credit"] ?>"><i class="fas fa-pen"></i></td>
          </tr>

          <tr>
            <th colspan="2 "class="info_th">我的收件地址</th>
            <td></td>
          </tr>

          <tr>
            <th>宅配地址:</th>
            <td><input type="text" id= "mem_address" readonly="readonly" name="mem_address"  value="<?php echo $_SESSION["mem_address"]; ?>"><i class="fas fa-pen"></i></td>
          </tr>

          <tr>
            <th colspan="2"class="info_th"> 我的點數</th>
            <td></td>
          </tr>

          <tr>
            <th>目前點數:</th>
            <td><?php echo $_SESSION["mem_point"]?> 點 <a href="../game/game.php">玩遊戲賺點數</a></td>
          </tr>

          </table>  

           <div class="btn_edit">
          <input type="button" name="edit_it" class="btn orange_l  edit_it" id="btn_edit" value="修改資料">
          <input type="submit" name="updated_it" class="btn orange_l updated_it" id="updated_it" value="確認修改"  style="display:none">
          </div>

          </div>
        </div>
      </form>
      </section>
</form>

      <script>
      $('#btn_edit').click(function () {
            $('#btn_edit').hide();
            $('#updated_it').show();

            document.getElementById('mem_name').readOnly = false;
            document.getElementById('mem_email').readOnly = false;
            document.getElementById('mem_tel').readOnly = false;
            document.getElementById('mem_birth').readOnly = false;
            document.getElementById('mem_credit').readOnly = false;
            document.getElementById('mem_address').readOnly = false;
          
        });


        $('#updated_it').click(function () {
            $('#btn_edit').show();
            $('#updated_it').hide();
        });

      
      
      </script>

<!------ orderlist ------->

     <section id="orderlist" class="tabcontent">
          <form action="" class="clearfix">
              <div class="my_order">
                  <div class="col_lg_3">
                     <p>訂單日期：</p>
                      <p>2019-07-07 10:10:10</p> 
                   </div>
                  <div class="col_lg_3">
                      <p>訂單編號：</p>
                      <p >12345</p>  
                  </div>
                  <div class="col_lg_3">
                      <p>訂單狀態：</p>
                      <p>處理中</p>
                  </div>
                  <div class="col_lg_3">
                      <p>總金額:</p>
                       <p> NT$ 700 </p>   
                   </div>
              </div>

              <div class="my_order">
                <div class="detail col_md_12 col_lg_12">
                    <div class="order_detail_box">
                        <h2 class="order_detail_title font-20">查看明細</h2>
                        <div class="order_content">
                          <div class="product_img col_md_6 col_lg_6">
                              <img src="image/common/logo_icon.png" alt="product">
                          </div>
                          <div class="product_detail col_md_6 col_lg_6">
                            <p>choco小熊哥哥</p>
                            <p>價格：NT$ 700 </p>
                            <p>數量：2</p>
                          </div>
                        </div>
                    </div>              
                </div>
              </div>  
          </form>
       </section>


<!------ favorite ------->

        
        <section id="favorite" class="tabcontent">
            <button class="tab_favorite " onclick="open_favorite('favorite_choco', this,'#367e90','white')"  id="default_favorite">我的CHOCO星人</button>
            <button class="tab_favorite " onclick="open_favorite('favorite_product', this,'#367e90','white')">更多收藏</button>
    
            <div id="favorite_choco" class="content_favorite">
              <div class="my_choco">
                <div class="my_choco_box col_12 col_md_6 col_lg_6">
                  <div class="choco_img">
                      <img src="image/member/choco_milk.png "alt="">
                      <p>CHOCO甜甜圈小王子</p>
                  </div>
                  <div class="my_choco_desc">
                      <button class="btn orange_m"><span>參加選美</span></button>
                      <button class="btn orange_m"><span>加入購物車</span></button>
                      <button class="btn orange_m"><span>取消收藏</span></button>
                  </div>
                </div>
                <div class=" my_choco_box col_12 col_md_6 col_lg_6">
                    <div class="choco_img">
                        <img src="image/member/choco_milk.png "alt="">
                        <p>CHOCO甜甜圈小王子</p>
                    </div>
                    <div class="my_choco_desc">
                        <button class="btn orange_m"><span>參加選美</span></button>
                        <button class="btn orange_m"><span>加入購物車</span></button>
                        <button class="btn orange_m"><span>取消收藏</span></button>
                    </div>
                  </div>
              </div>
            </div>  
            <div id="favorite_product" class="content_favorite">
                <div class="my_product">
                    <div class="my_product_box col_12 col_md_6 col_lg_6">
                        <div class="choco_img">
                            <img src="image/member/choco_milk.png "alt="">
                            <p>CHOCO甜甜圈小王子</p>
                        </div>
                        <div class="my_choco_desc">
                            <button class="btn orange_m"><span>加入購物車</span></button>
                            <button class="btn orange_m"><span>取消收藏</span></button>
                        </div>
                      </div>
                </div>
            </div>
        </section>

<!------ notification ------->
        
        <section id="notification" class="tabcontent" style="display:none;">
          <div class="my_notifi">
              <div class="  col_12 col_md_4 col_lg_3">
                <div class="notifi_icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div> 
              </div>   

              <div class="  col_12 col_md_4 col_lg_9"> 
                  <div class="notifi_content">
                <h5> 檢舉通知</h5>
                <p>你檢舉的留言確認違規，已被移除。</p>
              </div>
            </div>    
          </div>

          <div class="my_notifi">
              <div class="  col_12 col_md_4 col_lg_3">
                <div class="notifi_icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div> 
              </div>   

              <div class="  col_12 col_md_4 col_lg_9"> 
                  <div class="notifi_content">
                <h5> 檢舉通知</h5>
                <p>你檢舉的留言確認違規，已被移除。</p>
              </div>
            </div>    
          </div>
        </section>
        

  </div>
</main>


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
    function open_page(pageName,elmnt,bgcolor,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
        tablinks[i].style.color = "#367e90 ";  


      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = bgcolor;
      
      document.getElementById(pageName).style.display = "block";
      elmnt.style.color = color;


    }
    
    document.getElementById("default_open").click();


    </script>

    <script>
        var acc = document.getElementsByClassName("order_detail_title");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
    this.classList.toggle("active-plus");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
        panel.style.maxHeight = null;
    } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
    } 
    });
}
    
    </script>


<script>
    function open_favorite(pageName,elmnt,bgcolor,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("content_favorite");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tab_favorite");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
        tablinks[i].style.color = "#367e90 ";  


      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = bgcolor;
      
      document.getElementById(pageName).style.display = "block";
      elmnt.style.color = color;


    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("default_favorite").click();


    </script>


</body>
</html>



