<?php
try{
  if ($_REQUEST["mem_id"] != '' || $_REQUEST["mem_email"] != '' || $_REQUEST["mem_psw"] != '') {
    require_once("connect_choco.php");

    // $sql = "select * from test_member where mem_id = :mem_id and mem_email = :mem_email and mem_psw = :mem_psw";
    $sql = "insert into member (mem_id,mem_email,mem_psw) values (:mem_id,:mem_email,:mem_psw)";
    // $member->bindValue(":mem_headshot", $_REQUEST["mem_headshot"]);
    $member = $pdo->prepare($sql);
    $member->bindValue(":mem_id", $_REQUEST["mem_id"]);
    $member->bindValue(":mem_email", $_REQUEST["mem_email"]);
    $member->bindValue(":mem_psw", $_REQUEST["mem_psw"]);
    $member->execute();
  }
}catch(PDOException $e){
  echo "error";
}
?>
