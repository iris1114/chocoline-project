<?php
$errMsg = "";
try {
    require_once("connectChoco.php");

    $sql = "select * from classic_product ";
    $products = $pdo->query($sql);
} catch (PDOException $e) {
    echo "錯誤 : ", $e->getMessage(), "<br>";
    echo "行號 : ", $e->getLine(), "<br>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/store.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
                        <a  href="javascript:;">
                            <img src="image/headerfooter/icon_cart.png" alt="cart" />
                        </a>
                    </figure>
                </div>
            </div>
            <ul class="menubox">
                <li><a href="../custom/custom.html">客製 CHOCO</a></li>
                <li><a href="../contest/contest.html">CHOCO 選美</a></li>
                <li><a href="../game/game.html">CHOCO 遊戲</a></li>
                <li class="nowpage"><a href="../store.html">CHOCO 商城</a></li>
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
                    <li class="nowpage"><a href="../store/store.html">CHOCO 商城</a></li>
                    <li><a href="../about/about.html">關於 CHOCO</a></li>
                </ul>
                <div class="status">
                    <figure>
                        <a href="../member/member.html">
                            <img src="image/headerfooter/icon_member.png" alt="member" />
                        </a>
                    </figure>
                    <figure>
                        <a href="../cart/cart.html">
                            <img src="image/headerfooter/icon_cart.png" alt="cart" />
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- bannner start -->
    <!-- <div class="slides_container">
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
    </div> -->

    <!-- banner end -->
    <!-- hot product start -->
    <section class="hot_product_container">
        <div class="title_decoration">
            <img src="image/common/title.png" alt="title" />
            <h2>熱門商品</h2>
        </div>

        <div class="cable_car">
            <div class="cloud x1"></div>
            <div class="cloud x2"></div>
            <div class="cloud x3"></div>
            <div class="cloud x4"></div>
            <div class="cloud x5"></div>
            <div class="cloud x6"></div>
            <div id="cable_car_btn" class="btn cyan_l">下一個</div>
            <!-- cable car start -->
            <div class="cable_car_area left_to_right_first">
                <span class="place">No.1</span>
                <a class="cable_car_pic">
                    <img src="image/store/black_chocolate_base.png" />
                </a>
                <div class="cable_car_content">
                    <h3>心形堅果牛奶巧克力</h3>
                    <span class="price">NT$999元</span>
                    <a href="javascript:;" class="btn orange_m"><span>加入購物車</span></a>
                </div>
            </div>
            <!-- cable car end -->

            <!-- cable car start -->
            <div class="cable_car_area">
                <span class="place">No.2</span>
                <a class="cable_car_pic">
                    <img src="image/store/rabbit_white_chocolate.png" />
                </a>
                <div class="cable_car_content">
                    <h3>兔子造型白巧克力</h3>
                    <span class="price">NT$600元</span>
                    <a href="javascript:;" class="btn orange_m"><span>加入購物車</span></a>
                </div>
            </div>
            <!-- cable car end -->
            <!-- cable car start -->
            <div class="cable_car_area">
                <span class="place">No.3</span>
                <a class="cable_car_pic">
                    <img src="image/store/rabbit_white_chocolate.png" />
                </a>
                <div class="cable_car_content">
                    <h3>兔子造型白巧克力</h3>
                    <span class="price">NT$600元</span>
                    <a href="javascript:;" class="btn orange_m"><span>加入購物車</span></a>
                </div>
            </div>
            <!-- cable car end -->
            <!-- cable car start -->
            <div class="cable_car_area">
                <span class="place">No.4</span>
                <a class="cable_car_pic">
                    <img src="image/store/rabbit_white_chocolate.png" />
                </a>
                <div class="cable_car_content">
                    <h3>兔子造型白巧克力</h3>
                    <span class="price">NT$600元</span>
                    <a href="javascript:;" class="btn orange_m"><span>加入購物車</span></a>
                </div>
            </div>
            <!-- cable car end -->
            <!-- cable car start -->
            <div class="cable_car_area left_to_right_second">
                <span class="place">No.5</span>
                <a class="cable_car_pic">
                    <img src="image/store/rabbit_white_chocolate.png" />
                </a>
                <div class="cable_car_content">
                    <h3>兔子造型白巧克力</h3>
                    <span class="price">NT$600元</span>
                    <a href="javascript:;" class="btn orange_m"><span>加入購物車</span></a>
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
                <img src="image/common/title.png" alt="" />
                <h2>快來選購喜歡的商品吧</h2>
            </div>
            <div class="product_list_content">
                <div class="selector_product_list">
                    <aside id="selector_area" class="selector_area col_lg_2">
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
                                            <button id="range_button1" class="range_button1"></button>
                                            <button id="range_button2" class="range_button2"></button>
                                            <input id="range_input1" class="range_input1" type="number" min="0" max="1500" /> ~
                                            <input id="range_input2" class="range_input2" type="number" min="0" max="1500" /> 元
                                        </div>
                                    </div>
                                </li>
                                <li class="category">
                                    <h4>巧克力</h4>
                                    <div class="category_content">
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="milk_chocolate" name="milk_chocolate"/>
                                            <span>牛奶巧克力</span>
                                        </label>
                                        <br />
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="white_chocolate" name="white_chocolate" />
                                            <span>白巧克力</span>
                                        </label>
                                        <br />
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="Black_chocolate" name="Black_chocolate" />
                                            <span>黑巧克力</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="category">
                                    <h4>口味</h4>
                                    <div class="category_content">
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="fruit"  name="fruit"/>
                                            <span>水果</span>
                                        </label>
                                        <br/>
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="berry" name="berry"/>
                                            <span>莓果</span>
                                        </label>
                                        <br />
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="nut" name="nut" />
                                            <span>堅果</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="category">
                                    <h4>形狀</h4>
                                    <div class="category_content">
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="circle" name="circle"/>
                                            <span>圓形</span>
                                        </label>
                                        <br />
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="heart" name="heart"/>
                                            <span>心形</span>
                                        </label>
                                        <br />
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="special" name="special" />
                                            <span>特殊造型</span>
                                        </label>
                                    </div>
                                </li>

                                <!-- <li class="category">
                  <h4>包裝</h4>
                  <div class="category_content">
                    <label class="checkbox_text">
                      <input class="select_checkbox" type="checkbox" id="luxury" />
                      <span>奢華風</span>
                    </label>
                    <br />
                    <label class="checkbox_text">
                      <input class="select_checkbox" type="checkbox" id="Simplicity" />
                      <span>簡約風</span>
                    </label>
                    <br />
                    <label class="checkbox_text">
                      <input class="select_checkbox" type="checkbox" id="carton" />
                      <span>卡通風</span>
                    </label>
                  </div>
                </li> -->
                                <li class="category">
                                    <h4>對象</h4>
                                    <div class="category_content">
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="self" name="self"/>
                                            <span>自己</span>
                                        </label>
                                        <br />
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="family" name="family"/>
                                            <span>家人</span>
                                        </label>
                                        <br />
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="lover" name="lover" />
                                            <span>情人</span>
                                        </label>
                                        <label class="checkbox_text">
                                            <input class="select_checkbox" type="checkbox" id="friend"  name="friend"/>
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
                        <div id="product_list" class="product_list">
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
                                            <input id="minus" class="minus" type="button" value="-" /><input id="qty" class="qty" type="text" value="1" min="1" max="10" step="1" name="qty" /><input id="plus" class="plus" type="button" value="+" />
                                        </div>

                                    </div>
                                </div>
                                <div class="product_button">
                                    <a href="javascript:;" class="collect_btn btn cyan_m"><span>
                                            <i class="heart_unclick far fa-heart"></i>
                                            <i class="heart_clicked fas fa-heart"></i>

                                            收藏
                                        </span>
                                    </a>
                                    <a href="javascript:;" class="btn orange_m"><span>加入購物車</span></a>
                                </div>
                            </div>
                            <!-- product item end -->


                            <!--  資料庫撈資料 -->
                            <?php
                            if( $errMsg != ""){ //例外
                                echo "<div><center>$errMsg</center></div>";
                            //   }elseif($prodRow->rowCount()==0){
                            //         echo "<div><center>查無任何商品資料</center></div>";
                              }else{
                            while ($prodRow = $products->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <!-- <form> -->
                                <form>
                                    <input type="hidden" name="p_no" value="<?php echo $prodRow["classic_product_no"]; ?>">
                                    <input type="hidden" name="p_name" value="<?php echo $prodRow["classic_product_name"]; ?>">
                                    <input type="hidden" name="p_price" value="<?php echo $prodRow["product_price"]; ?>">
                                    <input type="hidden" name="p_img" value="image/store/<?php echo $prodRow["product_img_src"]; ?>">

                                    <!-- product item start -->
                                    <div class="product_item col_lg_5">
                                        <div class="product_pic_content">
                                            <div class="product_pic">
                                                <a href="product.php?classic_product_no=<?php echo $prodRow["classic_product_no"]; ?>">
                                                    <img src="image/store/<?php echo $prodRow["product_img_src"]; ?>" />
                                                </a>
                                                <a href="product.php?classic_product_no=<?php echo $prodRow["classic_product_no"]; ?>">
                                                    <img src="image/store/<?php echo $prodRow["product_hover_src"]; ?>" alt="" />
                                                </a>
                                            </div>
                                            <div class="product_content">
                                                <h2><?php echo $prodRow["classic_product_name"]; ?></h2>
                                                <p class="sold_qty">已售出 <span><?php echo $prodRow["product_sold"]; ?></span></p>
                                                <p class="price">NT$ <span><?php echo $prodRow["product_price"]; ?></p>
                                                <div class="qty_buttons">
                                                    <input id="minus" class="minus" type="button" value="-" /><input id="qty" class="qty classic_product_qty" type="text" value="1" min="1" max="10" step="1" name="qty" /><input id="plus" class="plus" type="button" value="+" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="product_button">
                                            <a href="javascript:;" class="collect_btn btn cyan_m"><span>
                                                    <i class="heart_unclick far fa-heart"></i>
                                                    <i class="heart_clicked fas fa-heart"></i>

                                                    收藏</span></a>
                                            <a href="javascript:;" class="btn orange_m classic_product_add_cart_btn"><span>加入購物車</span></a>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                </form>

                            <?php
                            }
                        }
                            ?>


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

    <script src="../common/js/header.js"></script>
    <script src="../common/js/robot.js"></script>
    <script src="js/store.js"></script>
    <script src="js/cart.js?<?php echo time();?>">
</script>
</body>

</html>