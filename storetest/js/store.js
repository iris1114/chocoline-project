function add_cart_ajax(p_no,p_name,p_price,p_img,p_qty){
    var xhr = new XMLHttpRequest();
    xhr.onload=function(){
        if( xhr.status == 200 ){
            if( xhr.responseText == "error"){
                alert("fail");
            }else{
                alert("success");
            }
              
            
        }else{
            alert( xhr.status );
        }
    }
    var url = "../cart/cart_add.php?p_no="+ p_no +"&p_name="+p_name+"&p_price="+p_price+"&p_img="+p_img+"&p_qty="+p_qty;
    xhr.open("Get", "url", true);
    xhr.
    xhr.send(null);
}

function add_cart(){

   var cart_btn = document.getElementsByClassName('cart_btn');
   if(cart_btn){
    cart_btn.onclick = function () {

        alert("hi");
        var p_no = document.getElementsByName("p_no")[0].value;
        var p_name = document.getElementsByName("p_name")[0].value;
        var p_price = document.getElementsByName("p_price")[0].value;
        var p_img = document.getElementsByName("p_img")[0].value;
        var p_qty = document.getElementsByName("p_qty")[0].value;
        add_cart_ajax(p_no,p_name,p_price,p_img,p_qty);
    }


   }
   
   
}



function do_first(){
     add_cart();
}

window.addEventListener('load',do_first);