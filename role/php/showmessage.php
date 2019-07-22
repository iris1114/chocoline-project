<?php
session_start();
header("Last-Modified: " . gmdate( "D, d MYH:i:s" ) . "GMT" );   
header("Cache-Control: no-cache, must-revalidate" );
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    
    $show_message_num = $_REQUEST["show_message_num"];
    $nowpagetext = $_REQUEST["nowpagetext"];

    $fromnum = $show_message_num * ($nowpagetext -1);
    $many = $show_message_num * $nowpagetext;

    $wantpage = "limit {$fromnum},{$many}";

    $contest_no = $_SESSION["contest_no"];

    $sql = "SELECT m.mem_name , m.mem_headshot , c.comment , DATE(comment_date) comment_date , c.comment_no from comment_record c , member m where c.mem_no = m.mem_no  AND c.contest_no = :contest_no order by comment_date desc $wantpage";

    $messages = $pdo->prepare($sql);
    $messages->bindValue("contest_no",$contest_no);
    // $messages->bindValue("show_message_num",$show_message_num);
    $messages->execute();
   

    while($message = $messages->fetchObject()){

    echo "<div class='message_block'>
            <div class='message_item'>
                <div class='message'>
                    <figure class='cus_photo'>
                        <img src='../common/image/member/$message->mem_headshot' alt='memphoto'>
                    </figure>
                    <div class='message_contain'>
                        <p class='memName'>$message->mem_name</p>
                        <p class='mseeage_text'>$message->comment</p>
                    </div>
                    <div class='status'>
                        <a href='javascrupt:;' class='btn cyan_s report_btn'>
                            <span>檢舉</span>
                        </a>
                        <p class='message_date'>$message->comment_date</p>
                        <span style='display:none' class='message_comment_no'>$message->comment_no</span>
                    </div>
                </div>
            </div>
        </div>";
    };  
    


} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?> 