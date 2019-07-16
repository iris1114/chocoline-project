<?php
try{
  if ($_REQUEST["mem_id"] != '' || $_REQUEST["mem_email"] != '' || $_REQUEST["mem_psw"] != '') {
    require_once("connect_choco.php");

    // $sql = "select * from test_member where mem_id = :mem_id and mem_email = :mem_email and mem_psw = :mem_psw";
    $sql = "insert into test_member (mem_id,mem_email,mem_psw) values (:mem_id,:mem_email,:mem_psw)";
    $test_member = $pdo->prepare($sql);
    $test_member->bindValue(":mem_id", $_REQUEST["mem_id"]);
    $test_member->bindValue(":mem_email", $_REQUEST["mem_email"]);
    $test_member->bindValue(":mem_psw", $_REQUEST["mem_psw"]);
    $test_member->execute();
  }
}catch(PDOException $e){
  echo "error";
}
?>
