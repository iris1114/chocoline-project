<?php
// session_start();
try{
  require_once("connect_choco.php");
  $sql = "select * from robot where keyword=:keyword";
  $keyword = $pdo->prepare($sql);
  $keyword->bindValue(":keyword", $_REQUEST["keyword"]);
  $keyword->execute();

  if( $keyword->rowCount()==0){ //查無此人, 帳密錯誤
	  echo "這是一個好問題~";
  }else{ //登入成功
    //自資料庫中取回資料
  	$keywordRow = $keyword->fetch(PDO::FETCH_ASSOC);
  	//寫入SESSION
  	// $_SESSION["memNo"] = $keywordRow["no"];
  	// $_SESSION["memId"] = $keywordRow["memId"];
  	// $_SESSION["memName"] = $keywordRow["memName"];
  	// $_SESSION["email"] = $keywordRow["email"];

    //送出登入者的姓名資料
    echo $keywordRow["keyword_respond"];
  }
}catch(PDOException $e){
  // echo $e->getMessage();
  echo "系統異常,請通知系統維護人員";	
}




?>