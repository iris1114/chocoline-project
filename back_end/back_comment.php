<?php
try{
	require_once("../common/php/connect_choco.php");
    $sql = "select r.report_no, r.comment_no, cr.comment, r.mem_no, r.report_reason, r.report_time from report r, comment_record cr WHERE r.comment_no = cr.comment_no AND report_status = 0";
    $reports = $pdo->prepare($sql);
    $reports->execute();
}catch(PDOException $e){
    echo "error";
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
    <link rel="stylesheet" href="css/back_comment.css">
    <title>CHOCOLINE 後台管理</title>
</head>

<body>

    <!-- sidebar -->
    <aside class="sidebar">
        <a class="logo" href="javascript:;"><img src="image/logo.png" alt="logo"></a>
        <a href="back_end.php">訂單管理</a>
        <a href="back_member.php">會員管理</a>
        <a class="active" href="back_comment.php">留言檢舉管理</a>
        <a href="back_product.php">商品管理</a>
        <a href="back_admin.php">管理員管理</a>
        <a href="javascript:;">登出</a>
    </aside>

    <!-- table -->
    <div class="tab_wrap">
    <h2>訂單管理</h2>   
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <input class="btn btn-primary add" type="submit" value="新增" style="visibility:hidden">
                <div class="clearfix"></div>
                <table>
                    <thead>
                        <tr>
                            <th>檢舉編號</th>
                            <th>留言編號</th>
                            <th>檢舉會員</th>
                            <th>留言內容</th>
                            <th>檢舉原因</th>
                            <th>檢舉時間</th>
                            <th>還他清白</th>
                            <th>刪除留言</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($report = $reports->fetchObject()){
                        ?>  
                        <!-- <form> -->
                            <tr>
                                <td>
                                    <span class="show_value report_no"><?php echo $report->report_no;?></span>
                                </td>
                                <td>
                                    <span class="show_value comment_no"><?php echo $report->comment_no;?></span>
                                </td>
                                <td>
                                    <span class="show_value"><?php echo $report->mem_no;?></span>
                                </td>
                                <td>
                                    <span class="show_value"><?php echo $report->comment;?></span>
                                </td>
                                <td>
                                    <span class="show_value"><?php echo $report->report_reason;?></span>
                                </td>
                                <td>
                                    <span class="show_value"><?php echo $report->report_time;?></span>
                                </td>
                                <td>
                                    <button class="btn btn-info free">無罪</button>
                                </td>
                                <td>
                                    <button class="btn btn-info delete">刪除</button>
                                </td>
                            </tr>
                        <!-- </form> -->
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
    <script src="js/back_comment.js"></script>
</body>

</html>