<?php

session_start();
$errMsg="";

   if(isset($_POST['updated_it'])){

    $mem_no = 1; // $_SESSION[""];
    $mem_name = $_POST['mem_name'];
    $mem_email = $_POST['mem_email'];
    $mem_tel = $_POST['mem_tel'];
    $mem_birth = $_POST['mem_birth'];
    $mem_credit = $_POST['mem_credit'];
    $mem_address = $_POST['mem_address'];

        switch($_FILES['memUpFile']['error']){
            case 0:
                $dir = "image/member/";
                if( file_exists($dir) === false){
                    mkdir( $dir ); //make directory
                }
                echo $_FILES['memUpFile']['name'];
                $from = $_FILES['memUpFile']['tmp_name'];
                $to = $dir . $_FILES['memUpFile']['name'];
                copy($from, $to);
                try{
                    @require_once("connectChoco.php");
                    $sql = "UPDATE `member` SET  mem_name=:mem_name,mem_email=:mem_email,";
                    $sql .= "mem_tel=:mem_tel,mem_birth=:mem_birth,";
                    $sql .= "mem_credit=:mem_credit,mem_address=:mem_address,mem_point=:mem_point WHERE mem_no=:mem_no ";
                    
                    $statement =  $pdo-> prepare($sql);
                    $statement -> bindValue(':mem_name', $mem_name);
                    $statement -> bindValue(':mem_email', $mem_email);
                    $statement -> bindValue(':mem_tel', $mem_tel);
                    $statement -> bindValue(':mem_birth', $mem_birth);
                    $statement -> bindValue(':mem_credit', $mem_credit);
                    $statement -> bindValue(':mem_address', $mem_address);
                    $statement -> bindValue(':mem_no', $mem_no);
                  

                    $updateRow = $statement -> execute();
                    header("Location: member.php");
            
                    
                    
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
                    @require_once("connectChoco.php");
                    $sql = "UPDATE `member` SET  mem_name=:mem_name,mem_email=:mem_email,";
                    $sql .= "mem_tel=:mem_tel,mem_birth=:mem_birth,";
                    $sql .= "mem_credit=:mem_credit,mem_address=:mem_address WHERE mem_no=:mem_no ";
                    
                    $statement =  $pdo-> prepare($sql);
                    $statement -> bindValue(':mem_name', $mem_name);
                    $statement -> bindValue(':mem_email', $mem_email);
                    $statement -> bindValue(':mem_tel', $mem_tel);
                    $statement -> bindValue(':mem_birth', $mem_birth);
                    $statement -> bindValue(':mem_credit', $mem_credit);
                    $statement -> bindValue(':mem_address', $mem_address);
                    $statement -> bindValue(':mem_no', $mem_no);
                    $updateRow = $statement->execute();
                    header("Location: member.php");
            
                      
                
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