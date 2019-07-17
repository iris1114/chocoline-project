var cart = {};

function getTotalMoney(){
  
}



// -------數量＋— --------//
function changeCart(e) {
    console.log(e.target);
    console.log(e.target.parentNode.parentNode);
    let xhr = new XMLHttpRequest();
    xhr.onload = function() {
        cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
        console.log(cart);
    }
    let url = "php/cartshow_update.php";
    xhr.open("post", url, true);
    let myForm = new FormData(e.target.parentNode.parentNode);
    xhr.send(myForm);
}

    
window.addEventListener("load", function() {
    // 註冊數量改變時的事件處理器
    let qtys = document.getElementsByName("p_qty");  // 數量的輸入盒
    for(let i=0; i<qtys.length; i++){
    qtys[i].oninput =  changeCart;   
  }     
    
    //----------------註冊+ , - 的事件處理器
    var qtyminus = document.getElementsByClassName("qtyminus");  // -
    for(var i=0; i<qtyminus.length; i++){
        qtyminus[i].onclick = function(e){
          
          var qtyBox = e.target.nextElementSibling;
          console.log(e.target.nextElementSibling);
          var qty = parseInt(qtyBox.value);

          if( qty>1){
              qty--;
              console.log(qty);
              qtyBox.value = qty;
              console.log(qtyBox.value);
              let price = parseInt( e.target.form.parentNode.previousElementSibling.querySelector("h5 .price").innerText);
              let subtotal = price * qty;
              console.log("-------",subtotal);
              e.target.form.parentNode.nextElementSibling.querySelector("h5 .subtotal").innerText= subtotal;

              //.....
              changeCart(e);
              //  console.log( qtyBox.value);
          }
      };
     
    }  
     
    var qtyplus = document.getElementsByClassName("qtyplus");  // +
    for(var i=0; i<qtyplus.length; i++){
        qtyplus[i].onclick = function(e){
          var qtyBox = e.target.previousElementSibling;
          console.log(e.target.previousElementSibling);
          var qty = parseInt(qtyBox.value);
          qty++;
          console.log(qty);
          qtyBox.value = qty;
          console.log(qtyBox.value);
          
          let price = parseInt( e.target.form.parentNode.previousElementSibling.querySelector("h5 .price").innerText);
          let subtotal = price * qty;
          console.log("-------",subtotal);
          e.target.form.parentNode.nextElementSibling.querySelector("h5 .subtotal").innerText= subtotal;


          changeCart(e);
      };
    }    
 
    });
    

// -------刪除 --------//
	function getTrash(e){
		console.log(e);
		let itemRows = document.getElementById("item_row");
    let item = e.target.parentNode.parentNode;
    console.log(e.target.parentNode.parentNode);
		let psn = item.firstElementChild.innerText;
		let xhr = new XMLHttpRequest();
		
		xhr.onload = function (){
			itemRows.removeChild(item);// 消除視覺介面
			cart = JSON.parse(xhr.responseText);
			// delete cart[prod_no]; 消除記憶體	
		}
		let url = "php/trash.php?psn=" + psn;
		xhr.open("get",url,true);
		console.log(this.parentNode);
		// let myForm = new FormData(this.parentNode);
		xhr.send(null);
	}



window.addEventListener('load',function(){
let trash = document.getElementsByClassName('btn_delete');

for(i=0;i<trash.length;i++){
  trash[i].onclick = getTrash;
}
});



// // -------驗證登入--------//

// window.addEventListener('load',function(){
// document.getElementById('btn_shop').onclick=showLoginForm;
// });


// function showLoginForm() {
//   //檢查登入bar面版上 spanLogin 的字是登入或登出
//   //如果是登入，就顯示登入用的燈箱(lightBox)
//   //如果是登出
//   //將登入bar面版上，登入者資料清空r
//   //spanLogin的字改成登入
//   //將頁面上的使用者資料清掉
//   // var islogin = false;
//   // if (!(islogin == true) ) {
//   if($id('spanLoginText').innerHTML == "登入"){
//       $id('lightBox').style.display = 'block';
//   } else{
//     //................登出時，除了處理前端頁面，也要回server端清session

//     //......................................
//     var xhr = new XMLHttpRequest();
//     xhr.onload = function() {
//       if (xhr.status == 200) {
//         // islogin = true;
//         $id("lightBox").style.display = "none";
//         $id('spanLoginText').innerHTML = '登入';
//       } else {
//         alert(xhr.status);
//       }
//     };
//     xhr.open("get", "../common/php/logout.php", true);
//     xhr.send(null);
//     //......................................
//   }
// } 