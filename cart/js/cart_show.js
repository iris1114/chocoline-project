
var cart = {};

function getTotalMoney(){
  total =0;
  let subtotal =document.getElementsByClassName('subtotal');
  for(i=0 ;i<subtotal.length;i++){
    total += parseInt(subtotal [i].innerText);
  }
  return total;
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
              // console.log(qty);
              qtyBox.value = qty;
              // console.log(qtyBox.value);

              // 改變小計
              let price = parseInt( e.target.form.parentNode.previousElementSibling.querySelector("h5 .price").innerText);
              let subtotal = price * qty;
              console.log("-------",subtotal);
              e.target.form.parentNode.nextElementSibling.querySelector("h5 .subtotal").innerText= subtotal;

              //改變總計
              document.getElementById( 'cart_total').innerText =getTotalMoney();




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
          
          // 改變小計
          let price = parseInt( e.target.form.parentNode.previousElementSibling.querySelector("h5 .price").innerText);
          let subtotal = price * qty;
          console.log("-------",subtotal);
          e.target.form.parentNode.nextElementSibling.querySelector("h5 .subtotal").innerText= subtotal;

           //改變總計
           document.getElementById( 'cart_total').innerText =getTotalMoney();

          changeCart(e);
      };
    }    
 
    });
    

// -------刪除 --------//
	function getTrash(e){
		// console.log(e);
		let itemRows = document.getElementById("item_row");
    let item = e.target.parentNode.parentNode;
    console.log(e.target.parentNode.parentNode);
		let psn = item.firstElementChild.innerText;
		let xhr = new XMLHttpRequest();
		
		xhr.onload = function (){
			itemRows.removeChild(item);// 消除視覺介面
      cart = JSON.parse(xhr.responseText);
      var totalMoney = getTotalMoney();
      if(totalMoney != 0){
        document.getElementById('cart_total').innerText =total;
      }else{
        // document.getElementById( 'cart_total_area').style.display="none";
        document.getElementById( 'cart_total_area').innerText="尚無購物資料";
     }

			delete cart[psn]; 消除記憶體	
		}
		let url = "php/trash.php?psn=" + psn;
		xhr.open("get",url,true);
		console.log(this.parentNode);
		// let myForm = new FormData(this.parentNode);
    xhr.send(null);
    
	}



window.addEventListener('load',function(){
let trash = document.getElementsByClassName('btn_delete');

for(i=0 ;i <trash.length;i++){
  trash[i].onclick = getTrash;
}
});



// // -------驗證登入--------//








  // window.addEventListener('load',function(){
  //   document.getElementById('btn_shop').onclick=init;

  // });
    
  