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

    <div class="cloud" >
        <img src="image/member/cloud.png" alt="cloud">
    </div>

<!------ tabs_container ------->
<section class="col_12" id="member_tabs_container">
    <div class="wrap">
        <button class="tablink " onclick="open_page('info', this,'#367e90','white')"id="default_open" >我的資料</button>
        <button class="tablink" onclick="open_page('orderlist', this,'#367e90','white')" >訂單紀錄</button>
        <button class="tablink" onclick="open_page('favorite', this,'#367e90','white' )">我的收藏</button>
        <button class="tablink" onclick="open_page('notification', this, '#367e90','white')">最新通知</button>     
    </div>
</section>

<!------ member_container ------->

<main class="member_container">
  <div class="wrap">

 <!------ info ------->

      <section id="info" class="tabcontent ">
        <div class="my_info">
          <div class="  col_12 col_md_4 col_lg_3"> 
              <div class="profile_pic">
                <img src="image/common/logo_icon.png" alt="profile">
              </div>

              <div class="upload">
                <div id="app">
                    <img  v-if="image" :src="image" width="300">
                    <input type="file" @change="fileSelected"><br>
                    <p>上傳照片</p>
                    <p>檔案大小最大為1mb</p>

                </div>
              </div>
          </div>
          

        <div class="col_12 col_md_8 col_lg_9" id="profile_edit">
 <script>
function show_member(jsonStr){
  var str="";
  var ary_member=jsonStr.split("split");
  for (let i = 0; i < ary_member.length; i++) {
      var column = JSON.parse(ary_member[i]);
      if( column.account ){
        str += 
        ` <table class="info_table">
            <tr><th colspan="2"  class="info_th" > 我的資料</th></tr>
            <tr><td></td></tr>
            <tr>
              <th>帳號：</th>
              <td><input type="text" id='edit_name_input' class='input_edit disable_edit' readonly value="${column.mem_id}"><i class=" member_edit fas fa-pen"></i></td>
            </tr>
            <tr>
              <th>姓名：</th>
              <td><input type="text" id='edit_name_input' class='input_edit disable_edit' readonly value="${column.mem_name}"><i class=" member_edit fas fa-pen"></i></td>
            </tr>
           </table> 
         
        `

      }else{
                    
                    str += "<p>資料異常!</p>";
                   
                }
            }
            document.getElementById("profile_edit").innerHTML = str;

            // let obj= document.getElementsByClassName("member_edit");
            // for(var i=0;i<obj.length;i++){
            //     obj[i].addEventListener("click",modify_member,false);
            // }

            // //20190101
            // let obj2= document.getElementById('select_head_pic');
            // obj2.addEventListener("change",change_picture,false);
           
        }


function get_member(){
    var xhr = new XMLHttpRequest();
    xhr.onload=function (){
        if( xhr.status == 200 ){
            //modify here

            show_member( xhr.responseText );
        }else{
            alert( xhr.status );
        }
    }
    var url = "get_membertest2.php";
    xhr.open("Get", url, true);
    xhr.send( null );
}
</script>
                

        
      
      
        </div>
         
         
          <button class="btn orange_l"><span>確定修改</span></button>

        </div>
      </section>

      <!-- <tr>
              <th>Email：</th>
              <td><input type="text"><i class="fas fa-pen"></i></td>
            </tr>
            <tr>
              <th>手機號碼：</th>
              <td><input type="text"><i class="fas fa-pen"></i></td>
            </tr>
              <tr>
                <th>生日：</th>
                <td><input type="text"><i class="fas fa-pen"></i></td>
              </tr>
          <th colspan="2" class="info_th">我的信用卡</th>
          <td></td>
           <tr class="visa_tr">
              <td  ><i class="fab fa-cc-visa"></i></td>
              <td><input type="text"><i class="fas fa-pen"></i></td>
          </tr>
          <tr>
            <th colspan="2 "class="info_th">我的收件地址</th>
            <td></td>
          </tr>
          <tr>
            <th>宅配地址:</th>
            <td><input type="text"><i class="fas fa-pen"></i></td>
          </tr>
          <tr>
            <th colspan="2"class="info_th"> 我的點數</th>
            <td></td>
          </tr>
          <tr>
            <th>目前點數:</th>
            <td> 50點 <a href="game.html">玩遊戲賺點數</a></td>
          </tr>
          </table>    -->
        


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
        
        <section id="notification" class="tabcontent">
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

<script src="member.js"></script>
</body>
</html>



