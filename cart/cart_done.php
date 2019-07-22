<?php
session_start();
if (!isset($_SESSION["mem_id"])) {
    $_SESSION["mem_id"] = null;
}
if (!isset($_SESSION["mem_headshot"])) {
    $_SESSION["mem_headshot"] = 'icon_member.png';
}

?>


<?php
// ob_start();
// session_start();
$errMsg = "";

//連線資料庫
try {
    require_once("../common/php/connect_choco.php");
    $pdo->beginTransaction();
    $sql = "INSERT INTO `order_master`( `mem_no`,`order_amount`, `shipping_status`, `payment_status`, `receiver_name`, `receiver_phone`, `receiver_address`)
            VALUES (:mem_no,:order_amount,:shipping_status,:payment_status,:receiver_name,:receiver_phone,:receiver_address)";
    $products = $pdo->prepare($sql);
    $products->bindValue(":mem_no", $_SESSION["mem_no"]);
    $products->bindValue(":order_amount", $_REQUEST["p_amount"]);
    $products->bindValue(":shipping_status", 1);
    $products->bindValue(":payment_status", 0);
    $products->bindValue(":receiver_name", $_REQUEST["receiver_name"]);
    $products->bindValue(":receiver_phone", $_REQUEST["receiver_phone"]);
    $products->bindValue(":receiver_address", $_REQUEST["receiver_address"]);
    $products->execute();

    $order_no = $pdo->lastInsertId();
    $sql = "INSERT INTO `order_list`(`order_no`, `classic_product_no`, `product_qty`, `product_price`) VALUES ($order_no,:classic_product_no,:product_qty,:product_price)";
    $products = $pdo->prepare($sql);
    // for($i=0;$i<count($_SESSION["cart"]);$i++){
    foreach ($_SESSION['cart'] as $i => $value) {
        $products->bindValue(":classic_product_no", $_SESSION["cart"][$i]["psn"]);
        $products->bindValue(":product_qty", $_SESSION["cart"][$i]["qty"]);
        $products->bindValue(":product_price", $_SESSION["cart"][$i]["price"]);
        $products->execute();
    }


    $sql = "INSERT INTO `order_list`(`order_no`, `customized_product_no`, `product_qty`, `product_price`) VALUES ($order_no,:customized_product_no,:custom_qty,:custom_price)";
    $products = $pdo->prepare($sql);
    // for($i=0;$i<count($_SESSION["cart"]);$i++){
    foreach ($_SESSION['cart_custom'] as $i => $value) {
        $products->bindValue(":customized_product_no", $_SESSION["cart_custom"][$i]["csn"]);
        $products->bindValue(":custom_qty", $_SESSION["cart_custom"][$i]["custom_qty"]);
        $products->bindValue(":custom_price", $_SESSION["cart_custom"][$i]["custom_price"]);
        $products->execute();
    }
    $sql = "INSERT INTO `customized_product`(`customized_product_no`, `customized_product_name`, `mem_no`, `choco_img_src`, `product_price`, `card_img_src`, `choco_flavor_no`, `choco_base_no`) VALUES (:customized_product_no,:custom_name,:mem_no,:custom_img,:custom_price,:custom_card_img,:custom_flavor_no,:custom_base_no)";
    $products = $pdo->prepare($sql);
    // for($i=0;$i<count($_SESSION["cart"]);$i++){
    foreach ($_SESSION['cart_custom'] as $i => $value) {
        $products->bindValue(":customized_product_no", $_SESSION["cart_custom"][$i]["csn"]);
        $products->bindValue(":custom_name", $_SESSION["cart_custom"][$i]["custom_name"]);
        $products->bindValue(":mem_no", $_SESSION["mem_no"]);
        $products->bindValue(":custom_img", $_SESSION["cart_custom"][$i]["custom_img"]);    
        $products->bindValue(":custom_price", $_SESSION["cart_custom"][$i]["custom_price"]);
        $products->bindValue(":custom_card_img", $_SESSION["cart_custom"][$i]["custom_card_img"]);
        $products->bindValue(":custom_flavor_no", $_SESSION["cart_custom"][$i]["custom_flavor_no"]);
        $products->bindValue(":custom_base_no", $_SESSION["cart_custom"][$i]["custom_base_no"]);
        $products->execute();
    }

    $sql = "UPDATE member SET mem_point = :mem_point WHERE mem_no = :mem_no";
    $products = $pdo->prepare($sql);
    $products->bindValue(":mem_point", $_REQUEST["mem_point"]);
    $products->bindValue(":mem_no", $_SESSION["mem_no"]);
    $products->execute();

    $pdo->commit();
    unset($_SESSION["cart"]);
    echo "下單成功，您的訂單編號為$order_no<br>~~";
} catch (PDOException $e) {
    echo $errMsg .= "錯誤原因 : " . $e->getMessage() . "<br>";
    echo $errMsg .= "錯誤行號 : " . $e->getLine() . "<br>";
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="image/common/logo_icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/cart_done.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
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
                        <a class="spanLogin" href="javascript:;">
                            <img src="../common/image/member/<?php echo $_SESSION["mem_headshot"] ?>" alt="member" />
                            <!-- icon點擊後跳出登入註冊燈箱 -->
                            <span id="mem_id_hide_mobile" style="display:none"><?php echo $_SESSION["mem_id"] ?></span>
                            <span id="spanLoginText_mobile" style="display:none">登入</span>
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
                    <li><a href="../game/game.php">CHOCO 遊戲</a></li>
                    <li><a href="../store/store.php">CHOCO 商城</a></li>
                    <li><a href="../about/about.php">關於 CHOCO</a></li>
                </ul>
                <div class="status">
                    <figure>
                        <a class="spanLogin" href="javascript:;">
                            <img src="../common/image/member/<?php echo $_SESSION["mem_headshot"] ?>" alt="member" />
                            <!-- icon點擊後跳出登入註冊燈箱 -->
                        </a>
                        <span id="mem_id_hide" style="display:none"><?php echo $_SESSION["mem_id"] ?></span>
                        <span id="mem_no_hide" style="display:none"><?php echo $_SESSION["mem_no"] ?></span>
                        <span id="mem_name_hide" style="display:none"><?php echo $_SESSION["mem_name"] ?></span>
                        <span id="mem_headshot_hide" style="display:none"><?php echo $_SESSION["mem_headshot"] ?></span>
                        <span id="spanLoginText" style="display:none">登入</span>
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
                    <input type="password" name="mem_psw" id="mem_psw" value="" maxlength="12" placeholder="密碼"><br>
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
                    <input type="password" name="mem_psw" id="new_mem_psw" value="" maxlength="12" placeholder="輸入新密碼  (6-12位字母、數字)"><br>
                    <input type="password" name="mem_psw" id="re_new_mem_psw" value="" maxlength="12" placeholder="再次確認新密碼"><br>
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
                        請填下您的個人資料！* 為必填。</p>
                    <span>*帳號</span><input type="text" name="mem_id" id="f_mem_id" value="" placeholder="設定帳號"><br>
                    <span><input type="button" id="btnCheckId" value="檢查帳號是否可用"></span>
                    <p id="idMsg">請輸入帳號</p><br>
                    <span>*E-mail</span><input type="email" name="mem_email" id="f_mem_email" value="" placeholder="輸入E-mail 必須包括 ( @ 和 . )"><br>
                    <span>*密碼</span><input type="password" name="mem_psw" id="f_mem_psw" value="" maxlength="12" placeholder="設定密碼 (6-12位字母、數字)"><br>
                    <span>*密碼確認</span><input type="password" name="mem_psw" id="f_re_mem_psw" value="" maxlength="12" placeholder="再次確認密碼 (再次確認)"><br>
                    <a href="javascript:;" class="btn orange_l" id="register_btn">送出</a><br>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!--------cartflow_container--------->

    <section id="cartflow_container">
        <div class="cloud">
            <img src="image/cart/cloud.png" alt="cloud">
        </div>
        <div class="wrap ">
            <img src="image/cart/complete.png" alt="cart">
        </div>
    </section>

    <section id="order_container">
        <div class="wrap">
            <!-- <div class="order_bg"> -->
            <!-- <img src="image/cart/order-bg.png" alt="order_bg"> -->
            <div class="order_text">
                <p> <?php echo "下單成功，您的訂單編號為$order_no~~";  ?></p>
            </div>
            <?php
            // try {
            //     require_once("../common/php/connect_choco.php");

            //     $sql = "select * from order_master where mem_no= :mem_no";
            //     $orders1 = $pdo->prepare($sql);
            //     $orders1->bindValue(":mem_no", $_SESSION["mem_no"]);
            //     $orders1->execute();
            //     $order_rows1 = $orders1->fetchAll(PDO::FETCH_ASSOC);
            // } catch (PDOException $e) {
            //     echo "錯誤 : ", $e->getMessage(), "<br>";
            //     echo "行號 : ", $e->getLine(), "<br>";
            // }

            ?>




            <?php

            //$sql2 = "select * from order_list join order_master m on order_list.orderno = m.orderno Inner join classic_product on classic_product.classic_product_no=order_list.classic_product_no where order_no=:orderno and mem_no=:mem_no;";
            $sql2 = "select * from order_master m 
                    join order_list detail on detail.order_no = m.order_no
                    join classic_product c on c.classic_product_no=detail.classic_product_no 
                    where m.order_no=:orderno and m.mem_no=:mem_no";
            $orders3 = $pdo->prepare($sql2);
            $orders3->bindValue(":orderno", $order_no);
            $orders3->bindValue(":mem_no", $_SESSION["mem_no"]);

            $orders3->execute();

            $order_rows3 = $orders3->fetchAll(PDO::FETCH_ASSOC);



            for ($k = 0; $k < count($order_rows3); $k++) {
                ?>

                <div class="order_content">
                    <div class="product_img col_md_6 col_lg_6">
                        <img src="../store/image/store/ <?php echo $order_rows3[$k]['product_img_src']; ?>" alt="product">
                    </div>
                    <div class="product_detail col_md_6 col_lg_6">
                        <p><?php echo $order_rows3[$k]['classic_product_name']; ?></p>
                        <p>價格：NT$ <?php echo $order_rows3[$k]['product_price']; ?> </p>
                        <p>數量：<?php echo $order_rows3[$k]['product_qty']; ?></p>
                    </div>
                </div>

            <?php
            }

            ?>
            <div class="cart_btn_group">
                <a href="cart.php" class="btn orange_l"><span> 繼續購物</span></a>
            </div>


            <!-- </div> -->

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
        <p>Copyright © 2019 CHOCOLINE All rights reserved</p>
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
    <script src="../common/js/login.js"></script>







</body>

</html>