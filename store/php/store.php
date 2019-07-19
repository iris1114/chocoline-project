<?php
// session_start();
try{
  require_once("../../common/php/connect_choco.php"); 
  
  $sql = "select * from robot where lover_class=:lover and friend_class=:friend and family_class=:family";
  $selector = $pdo->prepare($sql);
//   $selector->bindValue(":lover", $_REQUEST["lover"]);
  $selector->bindValue(":lover", "1");
//   $selector->bindValue(":friend", $_REQUEST["friend"]);
  $selector->bindValue(":friend", "0");
//   $selector->bindValue(":family", $_REQUEST["family"]);
  $selector->bindValue(":family", "0");
  $selector->execute();

  if( $selector->rowCount()==0){ //查無此人, 帳密錯誤
	  echo "查無此商品";
  }else{ //登入成功
    //自資料庫中取回資料
  	$selectorRow = $selector->fetch(PDO::FETCH_ASSOC);
  	//寫入SESSION
  	// $_SESSION["memNo"] = $selectorRow["no"];
  	// $_SESSION["memId"] = $selectorRow["memId"];
  	// $_SESSION["memName"] = $selectorRow["memName"];
  	// $_SESSION["email"] = $selectorRow["email"];

    //送出登入者的姓名資料
   echo json_encode($selectorRow);

  }
}catch(PDOException $e){
  // echo $e->getMessage();
  echo "系統異常,請通知系統維護人員";	
}




?>