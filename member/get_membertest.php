<?php
session_start();
try{
	require_once("connect.php");
	
	$sql = "select * from member where member_id = 1";
	// $sql = "select * from member where member_id=:member_id";

	// echo $_SESSION["member_id"];
  $member = $pdo->prepare($sql); 
//   $member->bindValue(":member_id", $_SESSION["member_id"]);
  $member->execute();
  
  if($member->rowCount()==0){
  	echo "訊息:你沒有會員資料";
  }else{ 
		$result="";
		$dt_member=$member->fetchAll();
		$rowcount=0;
    foreach ($dt_member as $row) {
			$rowcount+=1;
			$result=$result.json_encode($row);
			if($rowcount<$member->rowCount()){
				$result=$result."split";
			}
		}
		echo $result;
  }	
  
}catch(PDOException $e){
  echo "訊息：".$e->getMessage();
}
?>