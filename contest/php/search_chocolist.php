<?php
session_start();
$errMsg = "";
try {
    
    require_once("../../common/php/connect_choco.php");
    $memId = $_REQUEST["memId"];

    $sql = "SELECT * FROM customized_product cp, member m WHERE cp.mem_no = m.mem_no AND m.mem_id = :mem_id";
    $mychocos = $pdo->prepare($sql); //編譯好指令
    $mychocos->bindValue(":mem_id", $memId);//代入資料
    $mychocos->execute();
    

    while($mychoco = $mychocos->fetchObject()){

        
        echo "<figure class='CHOCO'>
                <img src='../common/image/chocos/$mychoco->choco_img_src' alt='$mychoco->choco_img_src'>
                <figcaption class='CHOCO_name'>$mychoco->customized_product_name</figcaption>
                <span class='CHOCO_no' style='display:none'>$mychoco->customized_product_no</span>
            </figure>";
    }
    


} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?> 