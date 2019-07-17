<?php
try{
  if ($_REQUEST["mem_id"] != '') {
    require_once("connect_choco.php");
      $sql = "select mem_id from member where mem_id = :mem_id";
      $member = $pdo->prepare($sql);
      $member->bindValue(":mem_id", $_REQUEST["mem_id"]);
      $member->execute();
      if( $member->rowCount() !=0){
        echo "帳號已存在，不可使用";
      }else{
        echo "此帳號可使用";
      }
  } else {
      echo "請輸入帳號";
  }
}catch(PDOException $e){
  echo "error";
  // echo $e->getMessage();
}
?>
