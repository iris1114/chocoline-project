<?php
try{
  if($_REQUEST["mem_email"] != '' || $_REQUEST["mem_psw"] != ''){
    require_once("connect_choco.php");
    $sql = "select * from member where mem_email=:mem_email";
    $member = $pdo->prepare($sql);
    $member->bindValue(":mem_email", $_REQUEST["mem_email"]);
    // $member->bindValue(":mem_psw", $_REQUEST["mem_psw"]);
    $member->execute();
    
    $sql = "update member set mem_psw = :mem_psw  where mem_email = :mem_email ";
    $member = $pdo->prepare($sql);
    $member->bindValue(":mem_email", $_REQUEST["mem_email"]);
    $member->bindValue(":mem_psw", $_REQUEST["mem_psw"]);
    $member->execute();
    echo "success";
  }
}catch(PDOException $e){
  echo "error";
}
?>