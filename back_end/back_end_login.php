<?php
session_start();
if(!isset($_SESSION["admin_id"])){
    $_SESSION["admin_id"] = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/common.css"> -->
    <link rel="stylesheet" href="css/back_end_login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
  <title>CHOCOLINE</title>
</head>
<body>
    <header>
        <!-- 燈箱：登入 -->
        <div id="lightBox" style="display:none">
            <div id="tableLogin">
                <img class="login_bg" src="image/login_bg.png" alt="login_bg">
                <div class="login_password">
                    <a href="javascript:;" class="btnLoginCancel">
                        <img src="image/login_closeicon2.png" alt="btnLoginCancel">
                    </a>			
                    <h3>會員登入</h3>
                    <input type="text" name="admin_id" id="admin_id" value="" placeholder="帳號"><br>
                    <input type="password" name="admin_psw" id="admin_psw" value="" maxlength="12" placeholder="密碼"><br>
                    <a href="javascript:;" class="btn orange_l" id="btnLogin">登入</a><br>
                </div>
            </div>
        </div>

    </header>
    <section class="back_end_login_sect">
        <div class="warp">
        <div class="stars">
                <div class="star_1">
                    <img class="star_1_img" src="image/loading_stars_1.png" alt="loading_stars_1">
                </div>
                <div class="star_2">
                    <img class="star_2_img" src="image/loading_stars_2.png" alt="loading_stars_2">
                </div>
            </div>
        </div>
    </section>
<script src="js/back_end_login.js"></script>
</body>
