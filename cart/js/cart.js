//----------------數量改變時的事件處理器
function changeCart(e){
	let xhr = new XMLHttpRequest();
	
	xhr.onload = function (e){
		cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
	}

	let url = "cartUpdate.php";
	xhr.open("post",url,true);

	let myForm = new FormData(e.target.form);

	xhr.send(myForm);
}






function change_qty(){
let cart_qtys =document.getElementsByName('cart_qty');
for(let i=0; i<qtys.length; i++){
	cart_qtys[i].onchange = changeCart;
  }

  let minus = document.getElementsByClassName("minus");  // -
  for(let i=0; i<minus.length; i++){
	minus[i].onclick = function(e){
		let qtyBox = e.target.nextElementSibling;
		let qty = parseInt(qtyBox.value);
		if( qty> 0){
			qty--;
			qtyBox.value = qty;
			//.....
			changeCart(e);
		}
    };
    
    let plus = document.getElementsByClassName("plus");  // -
    for(let i=0; i<plus.length; i++){
      minus[i].onclick = function(e){
          let qtyBox = e.target.nextElementSibling;
          let qty = parseInt(qtyBox.value);
              qty++;
              qtyBox.value = qty;
              changeCart(e);
          }
      };
  }  




function do_first(){
    change_qty();
}

window.addEventListener('load',do_first)