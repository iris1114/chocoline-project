<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="image/common/logo_icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <script src="js/lazy-line-painter-1.9.6.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js'></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
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



<!-----------index container------------->

<main class="index_container">

<!-----------sky_wrap------------->

    <div class="sky_wrap">
        <div id="space_ship">
           <a href="../custom/custom.php"><img src="image/index/hero/space_ship.png" alt="space_ship"></a> 
        </div>  
        <div id="cloud">
            <img src="image/index/hero/cloud.png" alt="cloud">
        </div>
        
    </div>
  
  <div id="keypoint"></div>  
  <div id="keypoint2"></div>  
  <div id="keypoint3"></div>  


 <!-----------hero_main------------->

    <section class="hero_main">
        <div class="wrap">
                <div class="choco_slide">
                    <img src="image/index/hero/slide.png" alt="slide">
                </div>
                <div class="choco_black" class="choco_black_m">
                     <div class="left_eye"></div>
                     <div class="left_eyelip"></div>
                     <div class="right_eye"></div>
                     <div class="right_eyelip"></div>

                     <img src="image/index/hero/righthand.png" alt="hand" class="right_hand">
                     <img src="image/index/hero/lefthand.png" alt="hand" class="left_hand">
                    <img src="image/index/hero/leftleg.png" alt="leg" class="left_leg">
                    <img src="image/index/hero/rightleg.png" alt="leg" class="right_leg">
                    <img src="image/index/hero/body1.png" alt="body" class="body" >
                </div>
                <div class="choco_white" >
                    <a href="../custom/custom.php"><img src="image/index/hero/choco_white.png" alt="choco"></a> 
                    </div>

                <div class="choco_milk" >
                        <a href="../custom/custom.php"><img src="image/index/hero/choco_milk.png" alt="choco"></a> 
                    </div> 

                <div class="love_l">
                    <img src="image/index/hero/love_l.png" alt="love">
                </div>
                 <div class="love_m">
                    <img src="image/index/hero/love_m.png" alt="love">
                </div>
                <div class="love_s">
                    <img src="image/index/hero/love_s.png" alt="love">
                </div> 
                <div class="card">
                   <a href="../custom/custom.php"> <img src="image/index/hero/card.png" alt="card"></a>
                </div>
                <div class="shadow">
                    <img src="image/index/hero/shadow.png" alt="shadow">
                </div>
                <div class="chocochip">
                    <img src="image/index/hero/bigchoco_buiding.png" alt="river">
                </div>

                <div class="river_custom">
                    <img src="image/index/hero/river_custom3.png" alt="shadow">
                </div>
                <div class="river_move">
                    <img src="image/index/hero/river move.png" alt="river">
                </div>
                <div class="river_move_custom">
                        <img src="image/index/hero/river_move2.png" alt="river">
                    </div>

                 <div class="river_qa">
                    <img src="image/index/hero/river_qa2.png" alt="river">
                </div> 
                <div class="river_move_qa">
                    <img src="image/index/hero/river_move_qa2.png" alt="river">
                </div>
                
              
                <div class="river_last">
                    <img src="image/index/hero/river_last2.png" alt="river">
                </div>
                <!-- <div class="river_move_rank">
                    <img src="image/index/hero/rivermove_rank.png" alt="river">
                </div> -->
                <div class="river_move_big">
                    <img src="image/index/hero/rivermove_big.png" alt="river">
                </div>
              
               
                
                
        </div>
    </section>
    <div id="keypoint4"></div>  

 <!-----------index_custom_container------------->

    <section class="index_custom_container">
        <div class="wrap">
        <div class="title_decoration">
            <img src="image/common/title.png" alt="title" />
            <h2>動手做專屬CHOCO星人<br />送給想傳情的人吧</h2>
        </div>
        <div class="custom_island ">
            <div class="island"> <img src="image/index/custom/island.png" alt="island"></div>
            <div class="roles"><img src="image/index/custom/5roles.png" alt="roles"></div>
            <div class="roles_shadow"><img src="image/index/custom/5roles_shadow.png" alt="shadow"></div>
            <div class="custom_text">
                <p>第一步：  </p>
                <h3>選擇喜愛的巧克力外型</h3>
            </div>
           
        </div>
            
        <div class="custom_type">

                <div class="shape shapePos0">
                  <img src="image/index/custom/long.png" alt="long" />
                </div>
                <div class="shape shapePos1">
                  <img src="image/index/custom/roll.png" alt="roll" />
        
                </div>
                <div class="shape shapePos2">
                  <img src="image/index/custom/bear.png" alt="bear" />
                </div>
                <div class="shape shapePos3">
                  <img src="image/index/custom/cake.png" alt="cake" />
                </div>
                <div class="shape shapePos4">
        
                  <img src="image/index/custom/oero.png" alt="oero" />
                </div>
        
                <img src="image/index/custom/right.png" alt="right" class="right_btn" id="toRight" />
                <img src="image/index/custom/left.png" alt="left" class="left_btn" id="toLeft" />
              </div>
        <a href="../custom/custom.php" class="btn orange_l"><span> 繼續客制</span></a>

        
      
        </div>
    </section>



 <!-----------index_qa_container------------->
<div id="trigger1"></div>
     <section class="index_qa_container">
            <div class="title_decoration col-lg-12">
                <img src="image/common/title.png" alt="title" />
                <h2>CHOCO星人好推薦</h2>
            </div> 
            
            <div class="wrap">                
                
                <!-- description -->
        
                <div class="qa_choco col-12 col-lg-6">
                    <div class="choco_land">
                        <div class="desc">
                        <h4>還不知道要送什麼嗎？</h4>
                        <p>回答三個問題,讓我們為您推薦～</p>
                    </div>
                       
                        <div class="qa_choco">                        
                            <img src="image/index/question/choco.png" alt="choco">
                            <div class="love_line">                        
                                <svg id="loveline" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 590.86 203.6" data-llp-composed="true" class="lazy-line-painter"><defs><style>.cls-1{fill:none;stroke:#d72d40;stroke-miterlimit:10;stroke-width:7px;}</style></defs><title>loveline</title><path class="cls-1" d="M713.47,405.22C659.87,300,478.67,302.23,462,304c-9.22.93-22.81,1.44-31.05-3.12-7.82-4.35-10.14-13.1-.86-21.83,10.88-10.18,33.19-21.83,37.51-41.1,8-34.76-34.24-43.34-46.94-11.27l-1.11,2.81-.5-3c-6-36-54.72-16.8-26.34,32.08,7.17,12.42,16.2,22.56,18.24,29.69,1.16,3.55-2.68,13.49-13.12,12.21-231.41-28.31-264,86.4-270.92,88.75" transform="translate(-125.73 -203.21)" data-llp-id="loveline-0" data-llp-duration="2330" data-llp-delay="0" fill-opacity="1" style =" " data-llp-stroke-join="" data-llp-stroke-cap=""/></svg>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="qa_box  col-12  col-lg-6">
                    <img src="image/index/question/question.png" alt="question">
                    <!-- question -->
                    <div class="question">
                            <div class="title">
                            <h3>Q1/3  想傳情的對象為:</h3>
                            </div>

                                    <label class="option" for=" family">
                                        <input type="radio" checked="checked" name=" " id="family" />1. 家庭 
                                       
                                    </label>

                                    <label class="option" for="couple">
                                         <input type="radio" name=" " id="couple" />2. 情人 
                                    </label>
                                      
                                    <label class="option" for="friend">
                                            <input type="radio" name=" " id="friend" />3. 朋友 
                                    </label>
         
                                    <label class="option" for="exclusive">
                                            <input type="radio" name=" " id="exclusive" />4. 獨享 
                                    </label> 
                    </div>
                    <a href="#" class="btn orange_l"><span>下一步</span></a>       
                </div>        
        </div>        
     </section>



<!-------------- rank_stage_container ---------->
<section class="stage_container">   
        <div class="wrap">
            <div class="title">
                <div class="title_decoration">
                    <img src="image/index/contest/title.png" alt="contest_title">
                    <h2>CHOCO星人選美排名 </h2>
                </div>
            </div>
            <div class="contain">
                <div class="stage">
                    <div class="winner" id="first_place">
                        <a href="1"></a>
                        <figure class="CHOCO">
                            <img src="image/contest/bear.png" alt="bear">
                        </figure>
                        <figure class="vote">
                            <img src="image/contest/vote.png" alt="vote">
                            <figcaption>
                                <p>投我</p>
                                <span>123票</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="winner" id="second_place">
                        <a href="2"></a>
                        <figure class="CHOCO">
                            <img src="image/contest/cake.png" alt="cake">
                        </figure>
                        <figure class="vote">
                            <img src="image/contest/vote.png" alt="vote">
                            <figcaption>
                                <p>投我</p>
                                <span>123票</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="winner" id="third_place">
                        <a href="3"></a>
                        <figure class="CHOCO">
                            <img src="image/contest/peanut.png" alt="peanut.png">
                        </figure>
                        <figure class="vote">
                            <img src="image/contest/vote.png" alt="vote">
                            <figcaption>
                                <p>投我</p>
                                <span>123票</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="winner" id="fourth_place">
                        <a href="4"></a>
                        <figure class="CHOCO">
                            <img src="image/contest/donut.png" alt="donut.png">
                        </figure>
                        <figure class="vote">
                            <img src="image/contest/vote.png" alt="vote">
                            <figcaption>
                                <p>投我</p>
                                <span>123票</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="winner" id="fifth_place">
                        <a href="5"></a>
                        <figure class="CHOCO">
                            <img src="image/contest/cookies.png" alt="cookies.png">
                        </figure>
                        <figure class="vote">
                            <img src="image/contest/vote.png" alt="vote">
                            <figcaption>
                                <p>投我</p>
                                <span>123票</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="board">
                    <div class="lastest_mseeage">
                        <h3>最新留言</h3>
                        <div class="message_block">
                            <div class="message">
                                <figure class="cus_photo">
                                    <img src="image/contest/amos.png" alt="memphoto">
                                </figure>
                                <div class="message_contain">
                                    <p class="memName">哎莫斯</p>
                                    <p class="mseeage_text">我來推坑啦!!</p>
                                </div>
                                <div class="status">
                                    <a href="javascrupt:;" class="btn cyan_s">
                                        <span>查看</span>
                                    </a>
                                    <p class="message_date">2019/07/24</p>
                                </div>
                            </div>
                            <div class="message">
                                <figure class="cus_photo">
                                    <img src="image/contest/dongdong.png" alt="memphoto">
                                </figure>
                                <div class="message_contain">
                                    <p class="memName">董董</p>
                                    <p class="mseeage_text">快來投董董的CHOCO星人一票吧~!</p>
                                </div>
                                <div class="status">
                                    <a href="javascrupt:;" class="btn cyan_s">
                                        <span>查看</span>
                                    </a>
                                    <p class="message_date">2019/07/24</p>
                                </div>
                            </div>
                            <div class="message">
                                <figure class="cus_photo">
                                    <img src="image/contest/plus0.png" alt="memphoto">
                                </figure>
                                <div class="message_contain">
                                    <p class="memName">+0</p>
                                    <p class="mseeage_text">大家快來投我可愛的鵝子女鵝!!</p>
                                </div>
                                <div class="status">
                                        <a href="javascrupt:;" class="btn cyan_s">
                                            <span>查看</span>
                                        </a>
                                        <p class="message_date">2019/07/24</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="connect">
                        <a href="../contest/contest.php" class="btn orange_l"><span>去投票</span></a>
                    </div>
                </div>
            </div>
        </div>
      
    </section>

<!----------game_container-------------->

<section class="game_container">
    <div class="wrap">
        <div class="title_decoration">
            <img src="image/common/title.png" alt="title" />
            <h2>CHOCO玩遊戲拿點數</h2>
        </div>
        <div class="game_wrap">
            <div class="game_bg"> <img src="image/index/game/game_bg3.png" alt="game_bg"> </div>
            <div class="game_board">
                <img src="image/index/game/game_board.png" alt="game_board">
                <div class="game_text">
                    <p>遊戲方式：</p>
                    <p>遊戲方式:按下方向鍵 <span class="keyboard"> <img src="image/index/game/keyboard.png" alt=""> </span> 控制CHOCO星人~</p>
                    <p>在時間內接到巧克力來獲取點數</p>
                    <a href="../game/game.php" class="btn orange_xl"><span>START</span></a>
                </div>
            </div>
            <div class="game_things">
                <img src="image/index/game/allthing3.png" alt="game_things">
            </div>
            <div class="chocoman">
                <img src="image/index/game/chocoman.png" alt="chocoman">
            </div>
        </div>
    </div>
</section>









<!----------map_container-------------->
<section class="map_container">
    <div class="wrap">
        <div class="title_decoration">
            <img src="image/common/title.png" alt="title" />
            <h2>CHOCO 巡迴胖卡車</h2>
        </div>
        <div class="ballon">
            <img src="image/index/map/ballon.png" alt="ballon">
        </div>
        <div class="cloud">
            <img src="image/index/map/cloud.png" alt="cloud">
        </div>
        <div class="cloud2">
            <img src="image/index/map/cloud2.png" alt="cloud">
        </div>
        <div class="river_move_last">
                <img src="image/index/hero/rivermove_last.png" alt="river">
            </div>

        <!-- map -->
        <div class="map">
            <img src="image/index/map/map.png" alt="map">
             <p>TAIWAN</p> 
           <span class="taipei"><a href="#">台北</a>  </span> 
           <span class="hualian"><a href="#">花蓮</a>  </span> 
           <span class="taoyuan"><a href="#">桃園</a>  </span> 
           <span class="taizhong"><a href="#">台中</a>  </span> 
           <span class="gaoxiong"><a href="#">高雄</a>  </span>

           <span class="point taipei_point"><a href="#"><img src="image/index/map/point.png" alt="point"></a> </span>
           <span class="point hualian_point"><a href="#"><img src="image/index/map/point.png" alt="point"></a> </span>
           <span class="point taoyuan_point"><a href="#"><img src="image/index/map/point.png" alt="point"></a> </span>
           <span class="point taizhong_point"><a href="#"><img src="image/index/map/point.png" alt="point"></a> </span>
           <span class="point gaoxiong_point"><a href="#"><img src="image/index/map/point.png" alt="point"></a> </span>
        </div>

        <!-- map_bg -->
        <div class="car_area">
        <div class="map_bg">
            <img src="image/index/map/map_bg4.png" alt="map_bg">
        </div>
        <div class="aboutus_car">
            <div class="car car_taipai">
                <a href="../about/about.php"> <img src="image/aboutus/aboutus_taipeicar.png" alt="car_taipai"></a>
            </div>
            <div class="car car_taoyuan">
                <a href="../about/about.php"> <img src="image/aboutus/aboutus_taoyuancar.png" alt="car_taoyuan"></a>
            </div>
            <div class="car car_taichung">
                <a href="../about/about.php">  <img src="image/aboutus/aboutus_taichungcar.png" alt="taichung"></a>
            </div>
            <div class="car car_hualien">
                <a href="../about/about.php"> <img src="image/aboutus/aboutus_hualiencar.png" alt="car_hualien"></a>
            </div>
            <div class="car car_kaohsiung">
                <a href="../about/about.php"> <img src="image/aboutus/aboutus_kaohsiungcar.png" alt="car_kaohsiung"></a>
            </div>
        </div> 
    </div>  
   
    
    </div>
</section>

<div class="index_footer" >
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

    </div>

    </main>





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
<script src="js/index.js"></script>


<script type="text/javascript">

    (function(){ 

      document.onreadystatechange = () => {

        if (document.readyState === 'complete') {
          let el = document.querySelector('#loveline');
          let myAnimation = new LazyLinePainter(el, {"ease":"easeLinear","strokeWidth":4.5,"strokeOpacity":1,"strokeColor":"#C0382B","reverse":true}); 
          myAnimation.paint(); 
        }
      }

    })();
  </script>

  <!-- <script>
      function do_first(){
    if (screen.width < 1024) {
    TweenMax.killTweensAll;   
    TweenMax.killTweensOf('.choco_black');
    TweenMax.killTweensOf('.choco_white');
    TweenMax.killTweensOf('.choco_milk');
      }else{
        setTween(choco_black);
      }
} 

window.addEventListener('load',do_first);
  </script> -->


<script>
function stop_tweenmax(){
    if (screen.width > 1024) {
        setTween(choco_black);
    }else{
    TweenMax.killTweensOf('.choco_black');
    TweenMax.killTweensOf('.choco_white');
    TweenMax.killTweensOf('.choco_milk');
    }
}
window.addEventListener('load',stop_tweenmax);
</script>

  
</body>
</html>



