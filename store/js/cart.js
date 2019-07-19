let cart = {};

//..............................顯示購物車	
// function showCart() {
//     let html = "";
//     console.log(cart)
//     if (isCartEmpty()) {
//         html = "<center>尚無購物資料</center>";
//     }
//     html += "<input type='button' value='close' id='btnCloseCart'>";
//     console.log(html);
//     for (let psn in cart) { //cart[psn]
//         html += `
// 		<div class="prodRow">
// 			<span>${psn}</span>
// 			<span>
// 				<a href="prodQuery.php?psn=${psn}">
// 				${cart[psn].pname}
// 				</a>	
// 			</span>
// 			<span>${cart[psn].price}</span>
// 			<span style="background-color:pink">
// 			<form>
// 			    <input type="number" name="qty" value="${cart[psn].qty}" style="width:50px" min="0">
// 				<input type="hidden" name="psn" value="${psn}">
// 				<input type="hidden" name="pname" value="${cart[psn].name}">
// 				<input type="hidden" name="price" value="${cart[psn].price}">	
// 			</form>	
// 			</span>
// 		</div>`;
//     }
//     if (!isCartEmpty()) {
//         html += `<div><a href="cartToDb.php">結帳去</a></div>`;
//     }

//     document.getElementById("cartList").innerHTML = html;
//     document.getElementById("cartList").style.display = "";
//     //----------------將購物車隱藏起來
//     document.getElementById("btnCloseCart").onclick = function() {
//         document.getElementById("cartList").style.display = "none";
//     };
//     //----------------註冊數量改變時的事件處理器
//     let qtys = document.getElementsByName("qty");
//     for (let i = 0; i < qtys.length; i++) {
//         qtys[i].onchange = changeCart;
//     }
// }

// function isCartEmpty() {
//     if (JSON.stringify(cart) == "{}") {
//         return true;
//     }
//     return false;
// }


//----------------數量改變時的事件處理器
function changeCart(e) {
    let xhr = new XMLHttpRequest();
    // console.log(this.parentNode.parentNode.parentNode);
    xhr.onload = function(e) {
        cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
    }

    let url = "php/cartUpdate.php";
    xhr.open("post", url, true);

    let myForm = new FormData(this.parentNode.parentNode.parentNode);

    xhr.send(myForm);
}


//.............取得購物車資料

//看是否需要在商品頁顯示

function getCart() {
    let xhr = new XMLHttpRequest();

    xhr.onload = function() {
        if (xhr.status == 200) {

            cart = JSON.parse(xhr.responseText);
        } else {
            alert(xhr.status);
        }
    }
    let url = "php/getCart.php";
    xhr.open("get", url, true);
    xhr.send(null);

}

// function showSession_info() {
//     console.log(cart);


// }
function add_cart() {

    //註冊數量改變時的事件處理器
    let qtys = document.getElementsByClassName("classic_product_qty"); // 數量的輸入盒
    let add_cart_btn = document.getElementsByClassName("classic_product_add_cart_btn"); // 數量的輸入盒

    for (var i = 0; i < qtys.length; i++) {


        if (qtys[i].value >= 0 && qtys[i].value <= 10) {
            add_cart_btn[i].onclick = changeCart;

        }

    }
}



window.addEventListener("load", function() {
    //.............取得購物車資料

    getCart();
    add_cart();
    //----------------註冊+ , - 的事件處理器
    //   let btn_minus = document.getElementsByClassName("minus");  // -
    //   for(let i=0; i<btnMinus.length; i++){
    // 	btnMinus[i].onclick = function(e){
    // 		let qtyBox = e.target.nextElementSibling;
    // 		let qty = parseInt(qtyBox.value);
    // 		if( qty> 0){
    // 			qty--;
    // 			qtyBox.value = qty;
    // 			//.....
    // 			changeCart(e);
    // 		}
    // 	};
    //   }  

    //   let btnPlus = document.getElementsByClassName("btnPlus");  // +
    //   for(let i=0; i<btnPlus.length; i++){
    // 	btnPlus[i].onclick = function(e){
    // 		let qtyBox = e.target.previousElementSibling;
    // 		let qty = parseInt(qtyBox.value);
    // 		qty++;
    // 		qtyBox.value = qty;
    // 		changeCart(e);
    // 	};
    //   }    

    //.............顯示購物車
    // document.getElementById("clear").onclick = function() {
    //showCart
    // showCart();
    //     showSession_info();
    // };

});