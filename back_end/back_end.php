<?php
$errMsg = "";
try{
	require_once("../common/php/connect_choco.php");
    $sql = "select * from order_master o join member m on o.mem_no=m.mem_no" ;
    $orderdata = $pdo->prepare($sql);
    $orderdata->execute();
}catch(PDOException $e){
    echo "錯誤 : ", $e->getMessage(), "<br>";
    echo "行號 : ", $e->getLine(), "<br>";
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="image/logo_icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/back_end.css">
    <title>CHOCOLINE 後台管理</title>
</head>

<body>

    <!-- sidebar -->
    <aside class="sidebar">
        <a class="logo" href="javascript:;"><img src="image/logo.png" alt="logo"></a>
        <a class="active" href="backend.php">訂單管理</a>
        <a href="back_member.php">會員管理</a>
        <a href="back_comment.php">留言檢舉管理</a>
        <a href="back_product.php">商品管理</a>
        <a href="back_admin.php">管理員管理</a>
        <a href="javascript:;">登出</a>
    </aside>

    <!-- table -->
    <div class="tab_wrap">
    <h2>訂單管理</h2>   
        <div class="tab-content" id="pills-tabContent">               
                <div class="clearfix"></div>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">訂單編號</th>
                            <th scope="col">會員編號</th>
                            <th scope="col">會員姓名</th>
                            <th scope="col">訂購時間</th>
                            <th scope="col">總金額</th>
                            <th scope="col">出貨狀態</th>
                            <th scope="col">付款狀態</th>
                            <th scope="col">修改</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($orderRow = $orderdata->fetch()){
                    ?>  
                        <tr>
                        <form action="php/order_update.php" method="post">
                            <input type="hidden" name="order_no" value="<?php echo $orderRow['order_no'];?>">
                            <td> <?php echo $orderRow['order_no'];?></td>
                            <td><?php echo $orderRow['mem_no'];?></td>
                            <td><?php echo $orderRow['mem_name'];?></td>
                            <td><?php echo $orderRow['order_time'];?></td>
                            <td><?php echo $orderRow['order_amount'];?></td>
                            <td> <select name="shipping_status">      
                                    <?php 
                                        if($orderRow['shipping_status']==0){
                                            echo '<option value="0" selected>已出貨</option>';
                                            echo '<option value="1">處理中</option>';
                                        }else{
                                            echo '<option value="0">已出貨</option>';
                                            echo '<option value="1" selected>處理中</option>';
                                        }
                                    ?>
                                </select>
                            </td>
                            <td> 
                            <?php if($orderRow['payment_status'] == 0){
                                echo '已付款';
                            }else{ echo '未付款';};?>
                            </td>
                                
                            <td><input class="btn btn-info" type="submit" value="修改"></td>
                            </form>
                        </tr>
                        <?php
                    }
                ?>
                    </tbody>
                </table>
                

        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/back_end.js"></script>
</body>

</html>