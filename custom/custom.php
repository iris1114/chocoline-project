
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/custom.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
  <link rel="icon" type="image/png" href="image/common/logo_icon.png">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" integrity="sha256-AAhU14J4Gv8bFupUUcHaPQfvrdNauRHMt+S4UVcaJb0=" crossorigin="anonymous"></script>
  <script src="js/html2canvas.min.js"></script>
  <script src="../common/js/header.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/@jaames/iro/dist/iro.min.js"></script>

  <title>客製CHOCO</title>
</head>
<style>


canvas {
  background: #fff;
  /* display: block; */
  margin: 50px auto 10px;
  border-radius: 5px;
  /* box-shadow: 0 4px 0 0 #222; */

  cursor: url(../img/cursor.png), crosshair;
}

.controls {
  min-height: 60px;
  margin: 0 auto;
  width: 600px;
  border-radius: 5px;
  overflow: hidden;
}

ul {
  list-style: none;
  margin: 0;
  float: left;
  padding: 10px 0 20px;
  width: 100%;
  text-align: center;
} 

ul li,
#newColor {
  display: block;
  height: 54px;
  width: 54px;
  border-radius: 60px;
  cursor: pointer;
  border: 0;
  box-shadow: 0 3px 0 0 #222;
}

ul li {
  display: inline-block;
  margin: 0 5px 10px;
}

.red {
  background: #fc4c4f;
}

.blue {
  background: #4fa3fc;
}

.yellow {
  background: #ECD13F;
}

.selected {
  border: 7px solid #fff;
  width: 40px;
  height: 40px;
}

button {
  background: #68B25B;
  box-shadow: 0 3px 0 0 #6A845F;
  color: #fff;
  outline: none;
  cursor: pointer;
  text-shadow: 0 1px #6A845F;
  display: block;
  font-size: 16px;
  line-height: 40px;
}

#revealColorSelect,
#revealBrushSelect {
  border: none;
  border-radius: 5px;
  margin: 10px auto;
  padding: 5px 20px;
  width: 160px;
}


/* New Color Palette */

#colorSelect,
#brushSelect {
  background: #fff;
  border-radius: 5px;
  clear: both;
  margin: 20px auto 0;
  padding: 10px;
  width: 305px;
  position: relative;
  display: none;
}

#colorSelect:after,
#brushSelect:after {
  bottom: 100%;
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(255, 255, 255, 0);
  border-bottom-color: #fff;
  border-width: 10px;
  margin-left: -10px;
}

#newColor,
#changeBrush {
  width: 80px;
  height: 80px;
  border-radius: 3px;
  box-shadow: none;
  float: left;
  border: none;
  margin: 10px 20px 20px 10px;
}

.sliders p {
  margin: 8px 0;
  vertical-align: middle;
}

.sliders label {
  display: inline-block;
  margin: 0 10px 0 0;
  width: 35px;
  font-size: 14px;
  color: #6D574E;
}

.sliders input {
  position: relative;
  top: 2px;
}

#colorSelect button {
  border: none;
  border-top: 1px solid #6A845F;
  border-radius: 0 0 5px 5px;
  clear: both;
  margin: 10px -10px -7px;
  padding: 5px 10px;
  width: 325px;
}

#brushSelect button {
  border: none;
  border-top: 1px solid #6A845F;
  border-radius: 0 0 5px 5px;
  clear: both;
  margin: 10px -10px -7px;
  padding: 5px 10px;
  width: 325px;
}
</style>

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
        <li><a href="../custom/custom.html">客製CHOCO</a></li>
        <li><a href="../contest/contest.html">CHOCO選美</a></li>
        <li><a href="../game/game.html">CHOCO遊戲</a></li>
        <li><a href="../store/store.html">CHOCO商城</a></li>
        <li><a href="../about/about.html">關於CHOCO</a></li>
        <figure id="menuclose">
          <img src="../image/headerfooter/menuclose.png" alt="close" />
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
          <li class="nowpage"><a href="../custom/custom.html">客製CHOCO</a></li>
          <li><a href="../contest/contest.html">CHOCO選美</a></li>
          <li><a href="../game/game.html">CHOCO遊戲</a></li>
          <li><a href="../store/store.html">CHOCO商城</a></li>
          <li><a href="../about/about.html">關於CHOCO</a></li>
        </ul>
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
    </div>
  </header>
  <!-- header end -->

  <!-- ----- 第一屏 Start ----- -->

  <section class="custom">

    <div class="wrap_custom">
      <div class="title_decoration">
        <img src="image/common/title.png" alt="title" />
        <h2>動手做專屬CHOCO星人<br />送給想傳情的人吧</h2>
      </div>
      <div class="playground">
        <!-- <img src="image/custom/bg6.png" alt="" /> -->
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
        <a href="#second" class="btn cyan_s " id="next_page"><span>第一步</span></a>
      </div>

      <!-- ----- 形狀輪播 End ----- -->
    </div>


    <!-- 
  <div class="choco_background">
    <img src="image/custom/bg3.png" alt="" class="choco_img" />
  </div> -->

    <!-- ----- 第一屏 End ----- -->

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

            <img src="" alt="" id="base_">

          </div>



          <div class="choco_type">
            <ul>
              <li class="fruit">
                <figure>
                  <img src="image/custom/small/fr_b_001.png" alt="blue berry" />
                  <figcaption>
                    <p>藍莓</p>

                  </figcaption>

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
            <p class="price">
              NT$350
            </p>
          </div>
          <div class="next_button">
            <a href="#thrid" class="btn cyan_s " id="next_page2"><span>第一步</span></a>
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

              <h3>給CHOCO星人名字</h3>
              <input type="text" name="" id="" class="name_text" placeholder="請給CHOCO星人名字" />
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
              <img src="" alt="" class="eye_demo demo" style = "transform: rotate(0deg) scale(1)" >
            </div>

            <div class="eye_pos pos2">
              <img src="" alt="" class="eye_demo demo" style = "transform: rotate(0deg) scale(1.0)">
            </div>
            
            <div class="mouse_pos ">
              <img src="" alt="" class="mouse_demo demo" style = "transform: rotate(0deg) scale(1.0)">
            </div>

            <div class="others_pos">
              <img src="" alt="" class="others_demo demo" style = "transform: rotate(0deg) scale(1.0)">
            </div> 

            <div class="others_pos">
              <img src="" alt="" class="others_demo demo" style = "transform: rotate(0deg) scale(1.0)">
            </div>

            <img src="" alt="" id="cho_pos">

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
            <p class="price">
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
        </div>
    

      </div  class="next_button">
      <input type="button" onclick="aa()" class="btn cyan_s " >
      </div>
    </section>

    <!-- ----- 第三屏 End ----- -->

    <!-- ----- 第四屏 Start ----- -->


    <section class= "card">

        <div class="fourth_step">

              <img src="image/custom/8.png" alt="">
       
          <div class="fourth_step_info">
              <h3>第四步:</h3>
              <p>搭配卡片樣式/輸入內容</p>
           </div>
        
        </div>


        <div class="card_wrap">

          <div class="card_custom" id="aaa">
          <canvas  class="ccc" width="400" height="400">
        
          </canvas>
          <button id="SaveCnv">Save Image</button>
<div class="controls">

  <ul>
    <li class="red selected"></li>
    <li class="blue"></li>
    <li class="yellow"></li>
  </ul>
  <button id="revealColorSelect">New Color</button>
         </div>
  <div id="colorSelect">
    <span id="newColor"></span>
    <div class="sliders">
      <div class="colorPicker"></div>  
      <div id ="aaa"></div>
      <p>
        <label for="red">Red</label>
        <input id="red" name="red" type="range" min=0 max=255 value=0>
      </p>
      <p>
        <label for="green">Green</label>
        <input id="green" name="green" type="range" min=0 max=255 value=0>
      </p>
      <p>
        <label for="blue">Blue</label>
        <input id="blue" name="blue" type="range" min=0 max=255 value=0>
      </p>
    </div>
    <div>
      <button id="addNewColor">Add Color</button>
    </div>
  </div>
  <button id="revealBrushSelect">Change Brush</button>
  <div id="brushSelect">
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
    </div>
  </div>
</div>


              <div class="card_items"></div>

          </div>



         </div>
<form method="post" accept-charset="utf-8" id="form1">
  <input name="final_choco" id='final_choco' type="hidden"/>
</form>
<script>

</script>


    </section>
    

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

    <script src="../common/js/header.js"></script>
    <script src="../common/js/robot.js"></script>


    <script type="text/javascript">
      window.addEventListener("load", function () {

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
              // console.log(shapeObj);
              document.getElementById("next_page").onclick = function () {
                let midimg = document.getElementsByClassName("choco_overview");
                // console.log(midimg[0].innerHTML)
                midimg[0].innerHTML = shapeObj;
                let cc = midimg[0].innerHTML;
                let m = cc.lastIndexOf("alt");
                // console.log(m);
                let h = cc.substring(62, 66);
                // console.log(h);
                var large = document.getElementsByClassName("big_cho")[i];
                //  console.log(large.src);
                console.log(large);
                var aa = large.alt;
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

          document.getElementById("next_page").onclick = function () {

            let abc = document.getElementsByClassName("shapePos2");
            let midimg = document.getElementsByClassName("choco_overview");
            midimg[0].innerHTML = abc[0].innerHTML;
            // console.log(abc[0].innerHTML)
            let cc = midimg[0].innerHTML;
            let m = cc.lastIndexOf("alt");
            // console.log(m);
            let h = cc.substring(62, 66);
            // console.log(h);
            var large = document.getElementsByClassName("big_cho")[i];
            // console.log(large.src);
            console.log(large.alt);
          };
        };



        document.getElementById("next_page").onclick = function () {
          let select_choco = document.getElementsByClassName("shape");
          let midimg = document.getElementsByClassName("choco_overview");
          midimg[0].innerHTML = select_choco[2].innerHTML;
          // console.log(`IMG${midimg[0].innerHTML}`)
          let cc = midimg[0].innerHTML;
          let m = cc.lastIndexOf("alt");
          // console.log(`M:${m}`);
          let h = cc.substring(62, 66);
          // console.log(h);
          var large = document.getElementsByClassName("big_cho")[2];
          console.log(large);
          console.log(large.alt);
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

        // ----------------------口味介紹 end --------------------------




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

            } else if (cho_type.alt == "black") {
              var N = $("#choco_pos img").attr("src").substr(24, 3);
              let ann = modelsrc.replace(N, 'd_x');
              $("#choco_pos img").attr("src", ann);

            } else if (cho_type.alt == "milk") {
              var N = $("#choco_pos img").attr("src").substr(24, 3);
              let ann = modelsrc.replace(N, 'm_x');
              $("#choco_pos img").attr("src", ann);

            }
          }, false);
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
            } else if (fruit_type.alt == "grape") {
              var N = $("#choco_pos img").attr("src").substr(25, 2);
              // console.log("N", N);
              let ann = modelsrc.replace(N, '_g');
              // console.log("ann", ann);
              $("#choco_pos img").attr("src", ann);
            } else if (fruit_type.alt == "bo ho") {
              var N = $("#choco_pos img").attr("src").substr(25, 2);
              // console.log("N", N);
              let ann = modelsrc.replace(N, '_h');
              // console.log("ann", ann);
              $("#choco_pos img").attr("src", ann);
            } else if (fruit_type.alt == "orange") {
              var N = $("#choco_pos img").attr("src").substr(25, 2);
              // console.log("N", N);
              let ann = modelsrc.replace(N, '_o');
              // console.log("ann", ann);
              $("#choco_pos img").attr("src", ann);
            } else if (fruit_type.alt == "strawberry") {
              var N = $("#choco_pos img").attr("src").substr(25, 2);
              // console.log("N", N);
              let ann = modelsrc.replace(N, '_s');
              // console.log("ann", ann);
              $("#choco_pos img").attr("src", ann);
            }
          }, false);
        }


        // --------------------------選擇配料口味--------------------------






        // --------------------------next_page--------------------------


        document.getElementById("next_page2").onclick = function () {

          let modelsrc = $("#choco_pos img").attr("src");
          let cust = $("#cho_pos").attr("src", modelsrc);
          console.log(modelsrc);
          let mask = document.getElementsByClassName("fix_photo");
          // $(".fix_photo").css("-webkit-mask-image",'url(../'+modelsrc+')');
          // console.log(mmm);
        };

        // -----------------------next_page--------------------------



        // ---------- 眼睛 start select----------
        var eye_num = 0;
        $(document).ready(function () {
          // for (let i = 0; i <  )
          var eye_items_length =  $('.eye_items').length ;
         
          for(let i =0 ; i <eye_items_length; i++ ){
             $(".eye_items").eq(i).click(function(){
                        console.log(i)
                      var eye_src=   $(".eye_items").eq(i).children("img").attr("src");     
                    console.log(eye_src);
                    $(".eye_demo").eq(eye_num).attr("src", eye_src);
                    
                    eye_num++;
                    console.log("yes");
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
                    })
                }

        });

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
                  $(".demo").attr("src" ,"");

                  console.log(arr);
                }
                others_num = 0;
                mouse_num = 0;
                eye_num = 0;
                
                $(".demo").css("transform","rotate(0deg) scale(1)")
              break;
              
            
                default:
                console.log("no");
            }
            

            }
           
      
      });

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
        tablink = document.getElementsByClassName("tablink");
        for (i = 0; i < tablink.length; i++) {
          tablink[i].className = tablink[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(types).style.display = "flex";
        evt.currentTarget.className += " active";
      } </script>
<script type="text/javascript">
	

  // Problem: We need to draw on the canvas
  // Solution: when user interacts cause changes in the canvas
  var color = $(".selected").css("background-color");
  var abc = $("canvas");
  var ctx = abc[0].getContext("2d"); //ctx
  var lastEvent;
  var mousedown = false;
  var  bgImg = new Image();
  



 bgImg.onload = function(){
console.log('圖片載入成功');
console.log(this);
bgImg.src = "image/custom/small/card.png";
ctx1.drawImage(bgImg,0,0,wWidth,wHeight);
 }
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
  
  
  // when new color is pressed
  $("#revealColorSelect").click(function() {
    // show color select or hide the color select
    changeColor();
    $("#colorSelect").toggle();
  });
  
  $("#revealBrushSelect").click(function() {
    // show brush select or hide the brush select
    changeBrushSize();
    $("#brushSelect").toggle();
  });
  
  // update the new color span
  function changeColor() {
    var r = $("#red").val();
    var g = $("#green").val();
    var b = $("#blue").val();
        // selectedColor=colorPicker.color.rgbString;
    $("#newColor").css("background-color", "rgb(" + r + "," + g + "," + b + ")");
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
  abc.mousedown(function(e) {
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
  
  document.getElementById('SaveCnv').addEventListener("click",function(){
            window.open(abc[0].toDataURL('image/png'));
            var gh = (abc[0].toDataURL('png'));
            console.log(gh);
            var a = document.createElement('a');
            a.href = gh;
            a.download = 'image.png';
            a.click();
        });
    
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