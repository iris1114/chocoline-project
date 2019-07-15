<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>關於 CHOCO</title>
    <link rel="stylesheet" href="css/about.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
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
              <a href="../member/member.php">
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
            <li class="nowpage"><a href="../about/about.php">關於 CHOCO</a></li>
          </ul>
          <div class="status">
            <figure>
              <a href="../member/member.php">
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
    <section class="container">
      <div class="aboutus">
        <div class="aboutus_biglogo">
          <img
            class="biglogo1"
            src="image/aboutus/aboutus_biglogo1.png"
            alt="biglogo1"
          />
          <img
            class="biglogo2"
            src="image/aboutus/aboutus_biglogo2.png"
            alt="biglogo2"
          />
        </div>
        <div class="aboutus_text">
          <p>
            總是愛在心口難開嗎？ 愛要及時說出口～<br />
            不管是愛情／親情／友情 我們幫你傳情不NG！<br />
            巧克力傳情 越傳越深情～<br />
          </p>
          <p>
            趕快來打造獨一無二專屬美味的巧克力吧！<br />
            不管在哪ＣＨＯＣＯＬＩＮＥ永遠給你滿滿的元氣與力量！！<br />
          </p>
        </div>
      </div>

      <div class="touringcar">
        <div class="title_decoration">
          <img src="image/common/title.png" alt="" />
          <h2>巡迴CHOCO胖卡車</h2>
        </div>
        <div class="aboutus_container">
          <div class="aboutus_map">
            <!-- <img src="image/aboutus/aboutus_twmap2.png" alt="aboutus_map"> -->
            <div class="map">
              <img
                id="taipei_map"
                src="image/aboutus/map/map01.png"
                alt="map"
              />

              <span class="taipei"><a href="#">台北</a> </span>
              <span class="hualian"><a href="#">花蓮</a> </span>
              <span class="taoyuan"><a href="#">桃園</a> </span>
              <span class="taizhong"><a href="#">台中</a> </span>
              <span class="gaoxiong"><a href="#">高雄</a> </span>

              <span class="taipei_point"
                ><a href="#"><img src="image/aboutus/map/point.png" alt=""/></a>
              </span>
              <span class="hualian_point"
                ><a href="#"><img src="image/aboutus/map/point.png" alt=""/></a>
              </span>
              <span class="taoyuan_point"
                ><a href="#"><img src="image/aboutus/map/point.png" alt=""/></a>
              </span>
              <span class="taizhong_point"
                ><a href="#"><img src="image/aboutus/map/point.png" alt=""/></a>
              </span>
              <span class="gaoxiong_point"
                ><a href="#"><img src="image/aboutus/map/point.png" alt=""/></a>
              </span>
            </div>
          </div>
          <div class="aboutus_carsort">
            <a href="###">
              <div class="taipei_carsort">
                <img
                  src="image/aboutus/aboutus_taipeicar.png"
                  alt="taipei_carsort"
                />
                <span>台北</span><span>IRIS號</span>
              </div>
            </a>
            <a href="###">
              <div class="taoyuan_carsort">
                <img
                  src="image/aboutus/aboutus_taoyuancar.png"
                  alt="taoyuan_carsort"
                />
                <span>桃園</span><span>PENNY號</span>
              </div>
            </a>
            <a href="###">
              <div class="taichungcar_carsort">
                <img
                  src="image/aboutus/aboutus_taichungcar.png"
                  alt="taichungcar_carsort"
                />
                <span>台中</span><span>小羅號</span>
              </div>
            </a>
            <a href="###">
              <div class="hualien_carsort">
                <img
                  src="image/aboutus/aboutus_hualiencar.png"
                  alt="hualien_carsort"
                />
                <span>花蓮</span><span>柏仁號</span>
              </div>
            </a>
            <a href="###">
              <div class="kaohsiung_carsort">
                <img
                  src="image/aboutus/aboutus_kaohsiungcar.png"
                  alt="kaohsiung_carsort"
                />
                <span>高雄</span><span>冠逸號</span>
              </div>
            </a>
          </div>
        </div>
        <div class="aboutus_car">
          <img
            class="aboutus_road1"
            src="image/aboutus/aboutus_road2.png"
            alt="aboutus_road1"
          />
          <div class="car car_taipai">
            <a href="###"
              ><img src="image/aboutus/aboutus_taipeicar.png" alt="car_taipai"
            /></a>
          </div>
          <div class="car car_taoyuan">
            <a href="###"
              ><img src="image/aboutus/aboutus_taoyuancar.png" alt="car_taoyuan"
            /></a>
          </div>
          <div class="car car_taichung">
            <a href="###"
              ><img src="image/aboutus/aboutus_taichungcar.png" alt="taichung"
            /></a>
          </div>
          <div class="car car_hualien">
            <a href="###"
              ><img src="image/aboutus/aboutus_hualiencar.png" alt="car_hualien"
            /></a>
          </div>
          <div class="car car_kaohsiung">
            <a href="###"
              ><img
                src="image/aboutus/aboutus_kaohsiungcar.png"
                alt="car_kaohsiung"
            /></a>
          </div>
        </div>
      </div>

      <div class="shopinfo">
        <div class="aboutus_shopmovie">
          <div class="title_bg">
            <img src="image/aboutus/aboutus_titlebg1.png" alt="title_bg" />
            <h3>CHOCO店舖</h3>
          </div>
          <div class="shopmovie_container">
            <img
              class="aboutus_shopmovie_img"
              src="image/aboutus/aboutus_movie2.png"
              alt="aboutus_shopmovie"
            />
            <img
              class="movie_img1"
              src="image/aboutus/aboutus_movie_img01.png"
              alt="movie_img1"
            />
          </div>
        </div>
        <div class="shopinfo_cnotainer">
          <div class="text">
            <h2>中大總店</h2>
            <p>
              ADD / 桃園市中壢區中大路300號 中央大學工程二館<br />
              資策會 DD101班
            </p>
            <p>TEL / 03-365-6555#777</p>
            <p>
              開放時間<br />
              平日 / AM 11：00 ~ PM 20：30<br />
              假日 / AM 10：00 ~ PM 21：30
            </p>
          </div>
          <div class="shopinfo_bear">
            <img src="image/aboutus/aboutus_bear.png" alt="shopinfo_bear" />
          </div>
        </div>
      </div>
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
    <!-- robot新增js  -->
    <script src="../common/js/header.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
