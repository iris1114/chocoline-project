<?php

session_start();
$errMsg="";

   if(isset($_POST['updated_it'])){

    $mem_id = $_SESSION['mem_id'];
    $mem_name = $_POST['mem_name'];
    $mem_email = $_POST['mem_email'];
    $mem_tel = $_POST['mem_tel'];
    $mem_birth = $_POST['mem_birth'];
    $mem_credit = $_POST['mem_credit'];
    $mem_address = $_POST['mem_address'];
    // $mem_headshot = $_POST['mem_headshot'];

        switch($_FILES['memUpFile']['error']){
            case 0:
                $dir = "../image/member/";
                if( file_exists("../image/member") === false){
                    mkdir( "../image/member" ); //make directory
                }
                echo $_FILES['memUpFile']['name'];
                $from = $_FILES['memUpFile']['tmp_name'];
                $to = $dir . $_FILES['memUpFile']['name'];
                echo $from ,"<br>",$to;
                copy($from, $to);
                try{
                    @require_once("../common/php/connect_choco.php");
                    
                    $sql = "UPDATE `member` SET  mem_name=:mem_name,mem_email=:mem_email,";
                    $sql .= "mem_tel=:mem_tel,mem_birth=:mem_birth,";
                    $sql .= "mem_credit=:mem_credit,mem_address=:mem_address,mem_headshot=:mem_headshot WHERE mem_id=:mem_id ";
                    
                    $statement =  $pdo-> prepare($sql);
                    $statement -> bindValue(':mem_name', $mem_name);
                    $statement -> bindValue(':mem_email', $mem_email);
                    $statement -> bindValue(':mem_tel', $mem_tel);
                    $statement -> bindValue(':mem_birth', $mem_birth);
                    $statement -> bindValue(':mem_credit', $mem_credit);
                    $statement -> bindValue(':mem_address', $mem_address);
                    $statement -> bindValue(':mem_id', $mem_id);
                    $statement -> bindValue(':mem_headshot', $mem_headshot); 
                 
  
                    $_SESSION["mem_name"] = $mem_name;
                    $_SESSION["mem_email"] =$mem_email;
                    $_SESSION["mem_birth"] =$mem_birth;
                    $_SESSION["mem_tel"] = $mem_tel;
                    $_SESSION["mem_credit"] =$mem_credit;
                    $_SESSION["mem_address"] =$mem_address;
                    $_SESSION["mem_headshot"] =$mem_headshot;
          
                     $statement -> execute();
                    header("Location: ../member.php");
            
                    
                    
                }catch(PDOException $e){
                        $errMsg = "錯誤原因" . $e -> getMessage() . "<br>" ;
                        $errMsg .= "錯誤行號" . $e -> getLine() . "<br>" ;
            
                }
                break;	
            case 1:
                echo "上傳檔案太大, 不得超過", ini_get("upload_max_filesize") ,"<br>";
                break;
            case 2:
                echo "上傳檔案太大, 不得超過", $_POST["MAX_FILE_SIZE"], "位元組<br>";
                break;
            case 3:
                echo "上傳檔案不完整<br>";
                break;
            case 4:
            
                try{
                    @require_once("../common/php/connect_choco.php");
                    $sql = "UPDATE `member` SET  mem_name=:mem_name,mem_email=:mem_email,";
                    $sql .= "mem_tel=:mem_tel,mem_birth=:mem_birth,";
                    $sql .= "mem_credit=:mem_credit,mem_address=:mem_address WHERE mem_id=:mem_id ";
                    
                    $statement =  $pdo-> prepare($sql);
                    $statement -> bindValue(':mem_name', $mem_name);
                    $statement -> bindValue(':mem_email', $mem_email);
                    $statement -> bindValue(':mem_tel', $mem_tel);
                    $statement -> bindValue(':mem_birth', $mem_birth);
                    $statement -> bindValue(':mem_credit', $mem_credit);
                    $statement -> bindValue(':mem_address', $mem_address);
                    $statement -> bindValue(':mem_id', $mem_id);

                    $_SESSION["mem_name"] = $mem_name;
                    $_SESSION["mem_email"] =$mem_email;
                    $_SESSION["mem_birth"] =$mem_birth;
                    $_SESSION["mem_tel"] = $mem_tel;
                    $_SESSION["mem_credit"] =$mem_credit;
                    $_SESSION["mem_address"] =$mem_address;
          
                    $statement->execute();
                    header("Location: ../member.php");
                        
            }catch(PDOException $e){
                $errMsg = "錯誤原因" . $e -> getMessage() . "<br>" ;
                $errMsg .= "錯誤行號" . $e -> getLine() . "<br>" ;    
        }
        break;
        
        default:
            echo "請聯絡網站維護人員<br>";
            echo "error code : ", $_FILES['upFile']['error'],"<br>";
    }

echo $errMsg;
}

?>