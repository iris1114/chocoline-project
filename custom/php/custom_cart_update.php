<?php 
session_start();
$imgPath1 = "../../common/image/chocos/";  //照片路徑
if (!file_exists($imgPath1)) { 
//   echo"no"; //檢查資料夾存不存在
  mkdir($imgPath1);
}
$imgPath2 = "../../common/image/cardback/";  //照片路徑
if (!file_exists($imgPath2)) { 
//   echo"no"; //檢查資料夾存不存在
  mkdir($imgPath2);
}

// echo print_r($_SESSION["cart_custom"]);


	// $_SESSION["cart_custom"][$csn]=array("custom_name"=>"陳柏仁1","custom_price"=>5000,"custom_qty"=>2,"custom_img"=>"rabbit_null_milk.png","csn"=>1,"custom_flavor_no"=>1,"custom_base_no"=>1,"custom_card_img"=>"rabbit_null_milk.png");



	$choco_url_str = $_REQUEST["custom_img"];
	$choco_url_str =str_replace('data:image/png;base64,', '', $choco_url_str);
	$choco_url_str =str_replace(' ', '+', $choco_url_str);
	$choco_url = base64_decode($choco_url_str);
	

	$fileName1 = date("Ymd");  //time()
	// $fileName1 = session_id();
	$file1 = $imgPath1 . $fileName1 . uniqid() . ".png";
	$success1 = file_put_contents($file1, $choco_url);

	
	$card_url_str = $_REQUEST["custom_card_img"];
	$card_url_str =str_replace('data:image/png;base64,', '', $card_url_str);
	$card_url_str =str_replace(' ', '+', $card_url_str);
	$card_url = base64_decode($card_url_str);
	$fileName2 = date("Ymd");  //time()
	// $fileName = session_id();
	$file2 = $imgPath2 . $fileName2 . uniqid() . ".png";
	$success2 = file_put_contents($file2, $card_url);






if(isset($_SESSION["cart_custom"])){
	$csn = count ($_SESSION["cart_custom"])+1;	
	echo $csn;

}else{
	$csn = 1;
	echo $csn;
};



// if(isset($_SESSION["cart_custom"][$csn])){
//     $new_qty = $_SESSION["cart"][$psn]["qty"]+(int)$_REQUEST["qty"];
// }else{
// $new_qty = (int)$_REQUEST["qty"];
// }

// if($_REQUEST["qty"] != 0){ //數量不為0, 直接改

	$_SESSION["cart_custom"][$csn]=array("custom_name"=>$_REQUEST["custom_name"],"custom_price"=>$_REQUEST["custom_price"],"custom_qty"=>1,"csn"=>$_REQUEST["custom_no"],"custom_flavor_no"=>$_REQUEST["custom_flavor_no"],"custom_base_no"=>$_REQUEST["custom_base_no"],"custom_img"=>$file1,"custom_card_img"=>$file2);
	// $_SESSION["cart_custom"][$csn]=array("custom_name"=>"陳柏仁1","custom_price"=>5000,"custom_qty"=>2,"custom_img"=>"rabbit_null_milk.png","csn"=>1,"custom_flavor_no"=>1,"custom_base_no"=>1,"custom_card_img"=>"rabbit_null_milk.png");
    
   

	// $fileName = date("Ymd");  //time()
	// // $fileName = session_id();
	// $file1 = $imgPath . $fileName . uniqid() . ".png";
	// $success = file_put_contents($file1, $choco_url);
	// $fileName = date("Ymd");  //time()
	// // $fileName = session_id();
	// $file2 = $imgPath . $fileName . uniqid() . ".png";
	// $success = file_put_contents($file2, $card_url);



// }else{ //數量若為0, 則將其從購物車中移除
// 	if(isset($_SESSION["cart"]) && isset($_SESSION["cart"][$psn])){
// 		unset($_SESSION["cart"][$psn]);
// 	}
// }

//將購物車回傳
// if(isset($_SESSION["cart"])==false){
// 	echo "{}";
// }else{
// 	echo json_encode($_SESSION["cart"]);	
// }
?>