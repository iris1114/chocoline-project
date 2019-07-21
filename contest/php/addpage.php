<?php
session_start();
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    

    $sql = "SELECT * FROM contest WHERE (month(contest_time) = (month(CURRENT_DATE))) AND (YEAR(contest_time) = (YEAR(CURRENT_DATE)))";
    $pages = $pdo->query($sql);
    $pagenums = ceil($pages->rowCount()/18);

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