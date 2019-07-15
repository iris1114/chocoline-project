<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <link rel="icon" type="image/png" href="image/common/logo_icon.png">
    <link rel="stylesheet" href="css/role.css">
    <title>CHOCO 角色詳情</title>
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
                    <h1>
                        CHOCOLINE
                    </h1>
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
                <h1>
                    CHOCOLINE
                </h1>
                <a href="../index/index.php">
                    <img src="image/headerfooter/logo.png" alt="CHOCOLINE">
                </a>
            </div>
            <div class="navbar">
                <ul class="menubox">
                    <li><a href="../custom/custom.php">客製 CHOCO</a></li>
                    <li class="nowpage"><a href="../contest/contest.php">CHOCO 選美</a></li>
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
<!-- introduce_container start -->
    <section class="introduce_container">
        <figure class="back">
            <img src="image/role/light.png" alt="light">
        </figure>
        <div class="front">
            <div class="choco_playing">
                <figure class="peanut_bg">
                    <img src="image/role/peanut_bg.png" alt="peanut">
                </figure>
                <figure class="donut_bg">
                    <img src="image/role/donut_bg.png" alt="donut">
                </figure>
                <figure class="cake_bg">
                    <img src="image/role/cake_bg.png" alt="cake">
                </figure>
                <figure class="cookies_bg">
                    <img src="image/role/cookies_bg.png" alt="cookies">
                </figure>
                <figure class="bear_bg">
                    <img src="image/role/bear_bg.png" alt="bear">
                </figure>
            </div>
            <div class="wrap">
                <div class="bread">
                    <img src="image/role/bread.png" alt="bread">
                    <p>CHOCO選美 > <span class="choconame">WHOWHOWHO</span> 角色詳情</p>
                </div>
                <div class="contain">
                    <div class="player">
                        <figure class="CHOCO">
                            <img src="image/role/bear.png" alt="bear">
                            <figcaption>
                                <p class="date">參賽日期 : <span class="date_ymd">2019/07/23</span></p>
                                <p class="memname">黃澄澄</p>
                            </figcaption>
                        </figure>
                        <figure class="ring">
                            <img src="image/role/p_ring.png" alt="p_ring">
                        </figure>
                    </div>
                    <div class="detail">
                        <div class="information">
                            <div class="choco_information rotate_l">
                                <ul>
                                    <li><p>角色名稱 : </p></li>
                                    <li><p id="choco_name">WHOWHOWHO</p></li>
                                    <li></li>
                                    <li><p>內容物 : <span id="choco_content"></span>榛果、黑巧克力</p></li>
                                    <li><p>效用 : <span id="choco_ability">養顏美容、延緩衰老</span></p></li>
                                </ul>
                            </div>
                            <figure class="cardfront rotate_m">
                                <img src="image/role/cardfront.png" alt="card">
                            </figure>
                            <figure class="cardback rotate_r">
                                <img src="image/role/cardback.png" alt="card">
                            </figure>
                        </div>
                        <!-- <div class="show_big_pic">
                            <div class="choco_information">
                                <ul>
                                    <li><p>角色名稱 : </p></li>
                                    <li><p id="big_choco_name">WHOWHOWHO</p></li>
                                    <li></li>
                                    <li><p>內容物 : <span id="big_choco_content"></span>榛果、黑巧克力</p></li>
                                    <li><p>效用 : <span id="big_choco_ability">養顏美容、延緩衰老</span></p></li>
                                </ul>
                            </div>
                            <figure class="cardfront">
                                <img src="image/role/cardfront.png" alt="card">
                            </figure>
                            <figure class="cardback">
                                <img src="image/role/cardback.png" alt="card">
                            </figure>
                        </div> -->
                        <div class="collect_vote">
                            <a href="javascript:;" class="collect_btn btn cyan_l">
                                <span>
                                    <i class="heart_unclick far fa-heart"></i>
                                    <i class="heart_clicked fas fa-heart"></i>
                                    收藏
                                </span>
                            </a>
                            <a href="javascript:;" class="btn orange_l"><span>投票</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="firstlc">
            <img src="image/role/firstlc.png" alt="firstlc">
        </figure>
        <figure class="secondlc">
            <img src="image/role/secondlc.png" alt="secondlc">
        </figure>
        <figure class="thirdlc">
            <img src="image/role/thirdlc.png" alt="thirdlc">
        </figure>
        <figure class="fourthlc">
            <img src="image/role/fourthlc.png" alt="fourthlc">
        </figure>
        <figure class="shinel">
            <img src="image/role/shine.png" alt="shine">
        </figure>
        <figure class="shiner">
            <img src="image/role/shine.png" alt="shine">
        </figure>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        
    </section>
<!-- introduce_container end -->
<!-- message_board start -->
    <section class="message_board_container">
        <div class="phone_message_title">
            <p>留言池</p>
        </div>
        <div class="wrap message_board_wrap" id="message_board_wrap">
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/amos.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">哎莫斯</p>
                            <p class="mseeage_text">我來推坑啦!!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/dongdong.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">董董</p>
                            <p class="mseeage_text">快來投董董的CHOCO星人一票吧~!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/plus0.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">+0</p>
                            <p class="mseeage_text">大家快來投我可愛的鵝子女鵝!!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/amos.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">哎莫斯</p>
                            <p class="mseeage_text">我來推坑啦!!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/dongdong.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">董董</p>
                            <p class="mseeage_text">快來投董董的CHOCO星人一票吧~!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/dongdong.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">董董</p>
                            <p class="mseeage_text">快來投董董的CHOCO星人一票吧~!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/dongdong.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">董董</p>
                            <p class="mseeage_text">快來投董董的CHOCO星人一票吧~!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/dongdong.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">董董</p>
                            <p class="mseeage_text">快來投董董的CHOCO星人一票吧~!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/dongdong.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">董董</p>
                            <p class="mseeage_text">快來投董董的CHOCO星人一票吧~!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/dongdong.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">董董</p>
                            <p class="mseeage_text">快來投董董的CHOCO星人一票吧~!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/dongdong.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">董董</p>
                            <p class="mseeage_text">快來投董董的CHOCO星人一票吧~!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/dongdong.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">董董</p>
                            <p class="mseeage_text">快來投董董的CHOCO星人一票吧~!</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s report_btn">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">2019/07/24</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap page_wrap">
            <div class="pagination">
                <a href="javascript:;" id="prevpage_btn">❮</a>
                <!-- <a class="pagenums active"  href="javascript:;">1</a> -->
                <a href="javascript:;" id="nextpage_btn">❯</a>
            </div>
        </div>
        <div class="wrap input_message_wrap">
            <div class="input_message">
                <input type="text" name="" id="input_text" placeholder="快來留言..." maxlength="50">
                <button id="submit_btn">送出</button>
            </div>
        </div>
        <div class="report">
            <div class="contain">
                <p>檢舉原因 : </p>
                <form action="role_back.php">
                    <textarea name="report" id="report" cols="30" rows="3" maxlength="50" placeholder="就你意見最多..."></textarea>
                </form>
                <a href="javascrupt:;" class="btn cyan_s" id="report_submit">
                    <span>送出</span>
                </a>
            </div>
            <figure class="close_btn">
                <img src="image/role/board_close.png" alt="close_btn">
            </figure>
            <figure class="report_bear">
                <img src="image/role/report_bear.png" alt="bear">
            </figure>
        </div>
    </section>
<!-- message_board end -->
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
        <p id="message_ask_sample" class="message message_ask" style="display:none">
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src="../common/js/header.js"></script>
<script src="../common/js/robot.js"></script>
<script src="js/role.js"></script>
</body>
</html>