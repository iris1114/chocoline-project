<?php
if (isset($_SESSION["cart_custom"]) === false || count($_SESSION["cart_custom"]) == 0) {
    echo "<div class='box cart_show_box '>尚無購物資料";
    // echo "<script> window.addEventListener('load','btnShopHide',false); </script>";
    echo "<script> console.log('load'); </script>";
} else {  //有購物資料
    $total = 0;
    foreach ($_SESSION['cart_custom'] as $i => $value) {

        // foreach( $_SESSION["cart"][$psn]["pname"] as $psn => $data){ 
        $subTotal = $_SESSION["cart_custom"][$i]["price"] * $_SESSION["cart_custom"][$i]["qty"];  //計算小計
        $total = $total + $subTotal;  //計算總計
        ?>

        <div class="box cart_show_box ">
            <span style='display:none'><?php echo $_SESSION["cart_custom"][$i]["psn"]; ?></span>

            <div class="item cart_img col_12 col_lg_3 col_md_2  ">
                <a href="chocoline-project/store/product.php?classic_product_no=<?php echo $_SESSION["cart_custom"][$i]["psn"]; ?>"> <img src="<?php echo $_SESSION["cart_custom"][$i]["pimg"]; ?>  " alt="choco"> </a>
            </div>


            <div class="item cart_pname col_6  col_lg_2 col_md_2 ">
                <h5> <?php echo $_SESSION["cart_custom"][$i]["pname"]; ?></h5>
            </div>

            <div class="item cart_price  col_6  col_lg_2 col_md_2">
                <h5> <span class="d_d_n  t_d_n"> 單價：</span> NT$ <span class="price"> <?php echo  $_SESSION["cart_custom"][$i]["price"]; ?></span></h5>
            </div>

            <div class="item cart_qty   col_6 col_lg_2 col_md_2 ">
                <form>
                    <input type="hidden" name="psn" value="<?php echo  $_SESSION["cart_custom"][$i]["psn"]; ?>">
                    <input type="hidden" name="p_name" value="<?php echo $_SESSION["cart_custom"][$i]["pname"]; ?>">
                    <input type="hidden" name="p_price" value="<?php echo $_SESSION["cart_custom"][$i]["price"]; ?>">
                    <input type="hidden" name="p_img" value="<?php echo $_SESSION["cart_custom"][$i]["pimg"]; ?>">
                    <input type="hidden" name="p_total" value="<?php echo $total ?>">
                    <input type="hidden" name="p_total" value="<?php echo $subTotal ?>">
                    <div class="item qty_buttons">
                        <input id="minus" class="minus  qtyminus" type="button" value="-" name="minus" /><input id="qty" class="qty classic_product_qty" type="text" value="<?php echo $_SESSION["cart"][$i]["qty"]; ?>" min="1" max="10" step="1" name="p_qty" /><input id="plus" class="plus qtyplus" type="button" value="+" name="plus" />
                    </div>
                </form>
            </div>

            <div class="item col_lg_2 col_6 cart_amout ">
                <h5><span class="d_d_n t_d_n">小計：</span> NT$ <span class="subtotal"><?php echo $subTotal ?></span> </h5>
            </div>

            <div class="item cart_delete col_lg_1 ">
                <div class="btn btn_delete">刪除</div>
            </div>
        </div>



    <?php

    }

    ?>
<?php
}

?>


<div class="order_content">
    <div class="product_img col_md_6 col_lg_6">
        <div>
            <img src="image/common/logo_icon.png" alt="product">
        </div>
    </div>
    <div class="product_detail col_md_6 col_lg_6">
        <p><?php echo $order_rows3[$k]['classic_product_name']; ?></p>
        <p>價格：NT$ <?php echo $order_rows3[$k]['product_price']; ?> </p>
        <p>數量：<?php echo $order_rows3[$k]['product_qty']; ?></p>
    </div>
</div>