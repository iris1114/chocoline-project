<?php
try{
	require_once("../common/php/connect_choco.php");
    $sql = "select * from order_master o join member m on o.mem_no=m.mem_no" ;
    $orderdata = $pdo->prepare($sql);
    $orderdata->execute();
}catch(PDOException $e){
    echo "error";
}

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="image/common/logo_icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/back_end.css">

    <title>CHOCOLINE 後台管理</title>
</head>

<body>

    <!-- sidebar -->
    <div class="sidebar">
        <a class="logo" href="#"><img src="image/logo.png" alt="logo"></a>
        <a class="active" href="backend.php">訂單管理</a>
        <a href="back_member.php">會員管理</a>
        <a href="back_comment.php">留言檢舉管理</a>
        <a href="back_product.php">商品管理</a>
        <a href="back_admin.php">管理員管理</a>
        <a href="#">登出</a>
    </div>
    <!-- navbar start -->
    <div class="tab_wrap">
    <h2>訂單管理</h2>   
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          
            <!-- <form onsubmit="return returnR(this)"> -->
                <!-- <form action=""> -->
                <input class="btn btn-primary add" type="submit" value="新增">
                <!-- </form> -->
                <div class="clearfix"></div>
                <table>
                    <thead>
                        <tr>
                            <th>訂單編號</th>
                            <th>會員編號</th>
                            <th>會員姓名</th>
                            <th>訂購時間</th>
                            <th>總金額</th>
                            <th>出貨狀態</th>
                            <th>付款狀態</th>
                            <th>修改</th>
                            <th>刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($orderRow = $orderdata->fetch()){
                    ?>  
                        <tr>
                            <td> <?php echo $orderRow['order_no'];?></td>
                            <td><input class="input_revise" type="text" value="<?php echo $orderRow['mem_no'];?>" style="display:none"><span class="show_value"><?php echo $orderRow['mem_no'];?></span></td>
                            <td><input class="input_revise" type="number" value="<?php echo $orderRow['mem_name'];?>" style="display:none"><span class="show_value"><?php echo $orderRow['mem_name'];?></span></td>
                            <td><input class="input_revise" type="text" value="<?php echo $orderRow['order_time'];?>" style="display:none"><span class="show_value"><?php echo $orderRow['order_time'];?></span></td>
                            <td><input class="input_revise" type="text" value="<?php echo $orderRow['order_amount'];?>" style="display:none"><span class="show_value"><?php echo $orderRow['order_amount'];?></span></td>
                            <td><input class="input_revise" type="text" value="<?php echo $orderRow['shipping_status'];?>" style="display:none"><span class="show_value"><?php echo $orderRow['shipping_status'];?></span></td>
                            <td><input class="input_revise" type="text" value="<?php echo $orderRow['payment_status'];?>" style="display:none"><span class="show_value"><?php echo $orderRow['payment_status'];?></span></td>
                            <td><input class="btn btn-info revise" type="submit" value="修改"><input class="btn btn-primary confirm" type="submit" value="確定" style="display:none"></td>
                            <td><input class="btn btn-info delete" type="submit" value="刪除"></td>
                        </tr>
                        <?php
                    }
                ?>
                    </tbody>
                </table>
                <!-- </form> -->

               
        
           
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quibusdam eum officiis voluptas dolor mollitia impedit quis quisquam, sint quam, neque voluptatibus. Laudantium quasi molestias enim repudiandae cupiditate velit eligendi.</div>
        </div>
    </div>
    <!-- navbar end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/back_end.js"></script>
</body>

</html>