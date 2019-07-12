<?php
try{
  require_once("connectBooks.php");
  $sql = "select mem_id from test_member where mem_id = :mem_id";
  $member = $pdo->prepare($sql);
  $member->bindValue(":mem_id", $_REQUEST["mem_id"]);
  $member->execute();
  if( $member->rowCount() !=0){
    echo "帳號已存在，不可使用";
  }else{
    echo "此帳號可使用";
  } 
}catch(PDOException $e){
  echo "error";
}
