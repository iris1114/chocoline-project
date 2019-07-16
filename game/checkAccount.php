<?php
try{
  if ($_REQUEST["mem_id"] != '') {
    require_once("connectBooks.php");
    $sql = "select mem_id from test_member where mem_id = :mem_id";
    $test_member = $pdo->prepare($sql);
    $test_member->bindValue(":mem_id", $_REQUEST["mem_id"]);
    $test_member->execute();
    if( $test_member->rowCount() !=0){
      echo "帳號已存在，不可使用";
    }else{
      echo "此帳號可使用";
    }
  } else {
    echo "請輸入帳號";
  }
}catch(PDOException $e){
  echo "error";
}
?>

