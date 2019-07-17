<?php
session_start();
try{
  require_once("connect_choco.php");
  $sql = "select * from member where mem_id=:mem_id and mem_psw=:mem_psw";
  $member = $pdo->prepare($sql);
  $member->bindValue(":mem_id", $_REQUEST["mem_id"]);
  $member->bindValue(":mem_psw", $_REQUEST["mem_psw"]);
  $member->execute();

  if( $member->rowCount()==0){ //查無此人, 帳密錯誤
	  echo "error";
  }else{ //登入成功
    //自資料庫中取回資料
  	$memRow = $member->fetch(PDO::FETCH_ASSOC);

  	//寫入SESSION
  	$_SESSION["mem_no"] = $memRow["mem_no"];
  	$_SESSION["mem_id"] = $memRow["mem_id"];
  	$_SESSION["mem_name"] = $memRow["mem_name"];
  	$_SESSION["mem_psw"] = $memRow["mem_pws"];
  	$_SESSION["mem_email"] = $memRow["mem_email"];
  	$_SESSION["mem_birth"] = $memRow["mem_birth"];
  	$_SESSION["mem_tel"] = $memRow["mem_tel"];
  	$_SESSION["mem_credit"] = $memRow["mem_credit"];
  	$_SESSION["mem_address"] = $memRow["mem_address"];
  	$_SESSION["mem_point"] = $memRow["mem_point"];
  	$_SESSION["mem_status"] = $memRow["mem_status"];
  	$_SESSION["mem_headshot"] = $memRow["mem_headshot"];


    //送出登入者的姓名資料
    echo $memRow["mem_id"];
    // echo "mem_id:".$memRow["mem_id"],"mem_name:".$memRow["mem_name"];
  }
}catch(PDOException $e){
  echo $e->getMessage();
  //echo "系統異常,請通知系統維護人員";	
}
?>