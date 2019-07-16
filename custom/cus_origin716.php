<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/custom.css" />
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" /> -->
  <link rel="icon" type="image/png" href="image/common/logo_icon.png">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>

  <title>客製CHOCO</title>
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

    <section class="outlook" id="thrid">
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
          </div>
          <!-- ----- item select start----- -->

          <div class="select_item">
            <div class="tab_item">
              <button class="tab_link" onclick="openCity(event, 'eyes')">眼睛</button>
              <button class="tab_link" onclick="openCity(event, 'mouses')">嘴巴</button>
              <button class="tab_link" onclick="openCity(event, 'other')">飾品</button>
            </div>
            <div class="clearfix"></div>

            <!-- ----- 眼睛 start----- -->
            <div class="eye_select type" id="eyes">
              <div class="eye_types">
                <div class="eye_items">
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

            <div class="eye_pos">
              <img src="" alt="" class="eye_demo demo">
            </div>

            <div class="eye_pos">
              <img src="" alt="" class="eye_demo demo">
            </div>
            
            <div class="mouse_pos">
              <img src="" alt="" class="mouse_demo demo">
            </div>

            <div class="others_pos">
              <img src="" alt="" class="others_demo demo">
            </div>

            <div class="others_pos">
              <img src="" alt="" class="others_demo demo">
            </div>

            <img src="image/custom/cake_d_h.png" alt="" id="cho_pos">
         
          </div>
          

          <div class="fix_bar">

            <div class="bar_photo big">
              <img src="image/custom/bar_item6.png" alt="big">
            </div>

            <div class="bar_photo small">
              <img src="image/custom/bar_item5.png" alt="small">
            </div>

            <div class="bar_photo right">
              <img src="image/custom/bar_item1.png" alt="right">
            </div>

            <div class="bar_photo left">
              <img src="image/custom/bar_item2.png" alt="left">
            </div>

            <div class="bar_photo reset">
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
        <div class="step_info">

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


      </div>
      </div>
    </section>

    <!-- ----- 第三屏 End ----- -->

    <!-- ----- 第四屏 Start ----- -->


    <section class="card">

      <div class="fourth_step">
        <img src="image/custom/8.png" alt="">
        <div class="fourth_step_info">
          <h3>第四步:</h3>
          <p>搭配卡片樣式/輸入內容</p>
        </div>

      </div>

      <div class="card_wrap">

        <!-- ----- 第2層 ----- -->

        <div class="card_custom">

          <div class="card_back">
            <img src="image/custom/color4.png" alt="">
          </div>

          <div class="card_write">
            <img src="image/custom/caed1.png" alt="">
          </div>

          <div class="card_items">

            <div class="tab_item">
              <button class="tab_link" onclick="openCity(event, 'card_colors')">卡片樣式</button>
              <button class="tab_link" onclick="openCity(event, 'text_colors')">文字樣式</button>
              <button class="tab_link" onclick="openCity(event, 'card_backgrounds')">裝飾圖樣</button>
            </div>

            <div class="clearfix"></div>

            <!-- -------- 卡片樣式 start-------- -->

            <div class="card_color type" id="card_colors">

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="" />
                </div>
              </div>

            </div>

            <!-- -------- 卡片樣式 End-------- -->

            <!-- -------- 文字樣式 start-------- -->

            <div class="text_color type" id="text_colors">

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/eye1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/eye.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/eye.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/eye1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/eye.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/eye.png" alt="" />
                </div>
              </div>

            </div>

            <!-- -------- 文字樣式 End-------- -->

            <!-- -------- 裝飾圖樣 start-------- -->

            <div class="pic_color type" id="card_backgrounds">

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="" />
                </div>
              </div>

            </div>
            <div class="upload">
              <input type="file" name="上傳檔案">
            </div>
          </div>
        </div>

        <!-- -------- 裝飾圖樣 End-------- -->


        <!-- ----- 第3層 ----- -->


        <div class="card_info">

          <div class="paint_text">

            <div class="paint">

              <span class="paint_pen">
                <p>畫筆</p>
              </span>

              <div class="paint_photo">
                <img src="image/custom/line.png" alt="">
              </div>

            </div>
            <div class="paint_color">
              <img src="image/custom/color-bar.png" alt="">
            </div>
          </div>

          <div class="total_price">
            <img src="image/custom/price.png" alt="price" />
            <h4>TOTAL</h4>
            <p class="price">
              NT$350
            </p>
          </div>
          <div class="final_btn">
            <a href="#" class="btn orange_l"><span>加入購物車</span></a>
            <a href="#" class="btn cyan_l"><span>重新設定</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ----- 第四屏 End ----- -->








    <!-- ----- 第四屏 mobile Start ----- -->


    <section class="card_mobile">

      <div class="fourth_step">
        <img src="image/custom/8.png" alt="">
        <div class="fourth_step_info">
          <h3>第四步:</h3>
          <p>搭配卡片樣式/輸入內容</p>
        </div>

      </div>

      <div class="card_wrap">

        <!-- ----- 第2層 ----- -->

        <div class="card_custom">

          <div class="card_back">
            <img src="image/custom/caed.png" alt="">
          </div>

          <div class="card_write">
            <img src="image/custom/caed1.png" alt="">
          </div>


        </div>

        <!-- -------- 裝飾圖樣 End-------- -->


        <!-- ----- 第3層 ----- -->


        <div class="card_info_mobile">

          <div class="card_items">

            <div class="tab_item">
              <button class="tab_link" onclick="openCity(event, 'card_colors')">卡片樣式</button>
              <button class="tab_link" onclick="openCity(event, 'text_colors')">文字樣式</button>
              <button class="tab_link" onclick="openCity(event, 'card_backgrounds')">裝飾圖樣</button>
            </div>

            <div class="clearfix"></div>

            <!-- -------- 卡片樣式 start-------- -->

            <div class="card_color type" id="card_colors">

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="" />
                </div>
              </div>

            </div>

            <!-- -------- 卡片樣式 End-------- -->

            <!-- -------- 文字樣式 start-------- -->

            <div class="text_color type" id="text_colors">

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/eye1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/eye.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/eye.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/eye1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/eye.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/eye.png" alt="" />
                </div>
              </div>

            </div>

            <!-- -------- 文字樣式 End-------- -->

            <!-- -------- 裝飾圖樣 start-------- -->

            <div class="pic_color type" id="card_backgrounds">

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color.png" alt="" />
                </div>
              </div>

              <div class="card_background">
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye1" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="eye2" />
                </div>
                <div class="background_color">
                  <img src="image/custom/color1.png" alt="" />
                </div>
              </div>

            </div>
            <div class="upload">
              <input type="file" name="上傳檔案">
            </div>
          </div>
          <div class="paint_text">

            <div class="paint">

              <span class="paint_pen">
                <p>畫筆</p>
              </span>

              <div class="paint_photo">
                <img src="image/custom/line.png" alt="">
              </div>

            </div>
            <div class="paint_color">
              <img src="image/custom/color-bar.png" alt="">
            </div>
          </div>

          <div class="total_price">
            <img src="image/custom/price.png" alt="price" />
            <h4>TOTAL</h4>
            <p class="price">
              NT$350
            </p>
          </div>
          <div class="final_btn">
            <a href="#" class="btn orange_l"><span>加入購物車</span></a>
            <a href="#" class="btn cyan_l"><span>重新設定</span></a>
          </div>
        </div>
      </div>
    </section>




    <!-- ----- 第四屏 mobile End ----- -->





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
          // mask[0].style.WebkitMaskImage = "url(../" + modelsrc + ")";
          // console.log(mmm);
        };

        // -----------------------next_page--------------------------



        // ---------- 眼睛 start select----------


        $(document).ready(function () {
          // for (let i = 0; i <  )
          var eye_items_length =  $('.eye_items').length ;
          var eye_num = 0;
          for(let i =0 ; i <eye_items_length; i++ ){
             $(".eye_items").eq(i).click(function(){
                    // console.log(i)
                    var eye_src=$(".eye_items").eq(i).children("img").attr("src");     
                    // console.log(eye_src);
                    $(".eye_demo").eq(eye_num).attr("src", eye_src);
                    eye_num++;
  

                  })
          }
        });
              

        // ---------- 眼睛 End  select----------


        // ---------- 嘴巴 start select----------


        $(document).ready(function () {
          // for (let i = 0; i <  )
          var mouse_items_length =  $('.mouse_items').length ;
          var mouse_num = 0;
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


        $(document).ready(function () {
          // for (let i = 0; i <  )
       // for (let i = 0; i <  )
       var others_items_length =  $('.others_items').length ;
          var others_num = 0;
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
        console.log(itemall.length);
        var big = document.getElementsByClassName("big");
        var small = document.getElementsByClassName("small");
        var right = document.getElementsByClassName("right");
        var left = document.getElementsByClassName("left");
        var reset = document.getElementsByClassName("reset");

        eyescale = 1;
        eyerotate = 0;
        mousescale = 1;
        mouserotate = 0;
        otherscale = 1;
        otherrotate = 0;


        var eyearr =[];
        var whoselected = "";
         
        for(let i=0;i<eyechange.length;i++){
            eyechange[i].addEventListener("click",function(){
              if(eyearr.indexOf(this)==-1){
                eyearr.push(this);
              }else{
                whoselected = eyearr.indexOf(this)
              }
              console.log(eyearr);
              console.log(whoselected);
            })
        }
        // for(let i=0;i<mousechange.length;i++){
        //   mousechange[i].addEventListener("click",function(){
        //         whoselected1 = this;
       
        //     })
        // }
        // for(let i=0;i<otherschange.length;i++){
        //   otherschange[i].addEventListener("click",function(){
        //         whoselected2 = this;
       
        //     })
        // }

        // for(let i=0;i<itemall.length;i++){
                
        //     itemall[i].addEventListener("click",function(e){
        //         var ttt = e.target;
        //             for(j=0;j<itemall.length;j++){
        //                 itemall[j].classList.remove("selector");
        //             }
        //   this.classList.add("selector");
        //         })
        //     }
         

           
        big[0].addEventListener("click", function () {

          
              eyescale += 0.2;
              eyearr[whoselected].style.transform = `scale(${eyescale}) rotate(${eyerotat}deg)`;
              console.log(eyearr[whoselected].style.transform);


          // mousescale += 0.2;
          // whoselected1.style.transform = "scale(" + mousescale + ")rotate(" + mouserotate + "deg )";
         
         
          // otherscale += 0.2;
          // whoselected2.style.transform = "scale(" + otherscale + ")rotate(" + otherrotate + "deg )";
        });


        small[0].addEventListener("click", function () {
          // console.log("yes");

          eyescale -= 0.2;

          eyearr[whoselected].style.transform = "scale(" + eyescale + ")rotate(" + eyerotate + "deg )";
          console.log(eyearr[whoselected].style.transform);
          // mousescale -= 0.2;
          // whoselected1.style.transform = "scale(" + mousescale + ")rotate(" +mouserotate + "deg )";
          // otherscale -= 0.2;
          // whoselected2.style.transform = "scale(" + otherscale + ")rotate(" + otherrotate + "deg )";
        });

        
        right[0].addEventListener("click", function () {
          
          
          eyerotate += 15;
          eyearr[whoselected].style.transform = "rotate(" + eyerotate + "deg ) scale(" + eyescale + ")";
          
          rotatel = eyearr[whoselected].style.transform.indexOf("(");
          rotater = eyearr[whoselected].style.transform.indexOf(")");
          rotate = eyearr[whoselected].style.transform.substring(rotatel + 1,rotater - 3);
          // rotate_value = rotate;
          console.log( rotate);
          
          eyearr[whoselected].style.transform = `rotate(${rotate}deg) scale(${eyescale})`;
          
          
          // eyearr[whoselected].style.transform =`rotate(15deg) scale(eyescale)`;
          
          
          //   eyechange.style.transform = "rotate(" + eyerotate + "deg ) scale(" + eyescale + ")";
          // console.log("yes");
          // mouserotate += 15;
          // whoselected1.style.transform = "rotate(" + mouserotate + "deg )scale(" + mousescale  + ")";
          // otherrotate += 15;
          // whoselected2.style.transform = "rotate(" + otherrotate + "deg )scale(" + otherscale + ")";
        });


        left[0].addEventListener("click", function () {
          // console.log("yes");
          eyerotate -= 15;

          eyearr[whoselected].style.transform = "rotate(" + eyerotate + "deg )scale(" + eyescale + ")";
          console.log(eyearr[whoselected].style.transform);
          //   eyechange.style.transform = "rotate(" + eyerotate + "deg )scale(" + eyescale + ")";
          // console.log("yes");
          // mouserotate -= 15;
          // whoselected1.style.transform = "rotate(" + mouserotate + "deg )scale(" +mousescale + ")";
          // otherrotate -= 15;
          // whoselected2.style.transform = "rotate(" + otherrotate + "deg )scale(" + otherscale + ")";
        });

        
        reset[0].addEventListener("click", function () {
          console.log("yes");

          eyescale += 0.2;

          eyechange.style.transform = "scale(" + eyescale + ")";

          mousescale += 0.2;
          mousechange.style.transform = "scale(" + mousescale + ")";
          otherscale += 0.2;
          otherschange.style.transform = "scale(" + otherscale + ")";
        });
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

    <script>
      window.addEventListener("load", function () {

      });

    </script>


</body>

</html>