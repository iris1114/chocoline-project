<?php
session_start();
try{
  require_once("./../connect_choco.php");
  $sql = "select * from administrator where admin_id=:admin_id and admin_psw=:admin_psw";
  $administrator = $pdo->prepare($sql);
  $administrator->bindValue(":admin_id", $_REQUEST["admin_id"]);
  $administrator->bindValue(":admin_psw", $_REQUEST["admin_psw"]);
  $administrator->execute();

  if( $administrator->rowCount()==0){ //查無此人, 帳密錯誤
	  echo "error";
  }else{ //登入成功
    //自資料庫中取回資料
  	$memRow = $administrator->fetch(PDO::FETCH_ASSOC);

    echo "admin_id:".$memRow["admin_id"];
  }
}catch(PDOException $e){
  echo $e->getMessage();
  //echo "系統異常,請通知系統維護人員";	
}
?>