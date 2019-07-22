<?php
session_start();
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    
    $show_message_num=$_REQUEST["show_message_num"];
    $contest_no = $_SESSION["contest_no"];

    $sql = "SELECT * FROM comment_record WHERE contest_no = $contest_no";
    $pages = $pdo->query($sql);
    $pagenums = ceil($pages->rowCount()/$show_message_num);

    echo "<a href='javascript:;' id='prevpage_btn'>❮</a>";
    for($i=1;$i<=$pagenums;$i++){
       echo "<a class='pagenums' href='javascript:;'>$i</a>";
    }
    echo "<a href='javascript:;' id='nextpage_btn'>❯</a>";
    


} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?> 