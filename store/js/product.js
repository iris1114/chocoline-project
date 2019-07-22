// change picture start

pics = document.querySelectorAll(".pics");
main_pic = document.querySelector("#product_main_pic");
console.log(pics);
for (var i = 0; i < pics.length; i++) {
    pics[i].onclick = change_pic;
    console.log(pics[i]);
}

function change_pic() {
    for (var i = 0; i < pics.length; i++) {
        pics[i].style.border = "3px solid transparent";
        // pics[i].style.backgroundColor="transparent";
    }
    this.style.border = "3px dashed #c3771b";
    // this.style.backgroundColor="#e0949b";
    // this.style.borderRadius="50%";
    main_pic.innerHTML = this.innerHTML;
}

// change picture end

// qty control start

function minus1() {
    var val = parseInt(this.parentNode.querySelectorAll(".qty")[0].value);
    if ((val > 1) & (val <= 10)) {
        val -= 1;

        this.parentNode.querySelectorAll(".qty")[0].value = val;
    } else {
        this.parentNode.querySelectorAll(".qty")[0].value = 1;
    }
}

function plus1() {
    var val = parseInt(this.parentNode.querySelectorAll(".qty")[0].value);
    if ((val >= 1) & (val < 10)) {
        val += 1;
        this.parentNode.querySelectorAll(".qty")[0].value = val;
    } else {
        this.parentNode.querySelectorAll(".qty")[0].value = 1;
    }
}

window.addEventListener("load", function() {
    var qty = document.getElementsByClassName("qty");
    var minus = document.getElementsByClassName("minus");
    var plus = document.getElementsByClassName("plus");
    var length = qty.length;

    for (var i = 0; i < length; i++) {
        // qty[i].onkeyup = qty_reset;
        minus[i].onclick = minus1;
        plus[i].onclick = plus1;
    }
});

// qty control end





// collect start

window.addEventListener("load", function() {
    var collect_btn = document.getElementsByClassName("collect_btn");


    for (i = 0; i < collect_btn.length; i++) {
        collect_btn[i].addEventListener("click", function() {
            var heart_clicked = this.getElementsByClassName("heart_clicked")[0];
            var heart_unclick = this.getElementsByClassName("heart_unclick")[0];
            console.log(this.parentNode.parentNode);
            if (heart_clicked.style.display != "inline") {
                heart_clicked.style.display = "inline";
                heart_unclick.style.display = "none";

                let xhr = new XMLHttpRequest();
                let url = "php/add_favorite.php";
                xhr.open("post", url, false);
                let myForm = new FormData(this.parentNode.parentNode);
                xhr.send(myForm);



            } else {
                heart_clicked.style.display = "none";
                heart_unclick.style.display = "inline";

                let xhr = new XMLHttpRequest();
                let url = "php/delete_favorite.php";
                xhr.open("post", url, false);
                let myForm = new FormData(this.parentNode.parentNode);
                xhr.send(myForm);
            }
        });
    }
});

// collect end
// slide start



window.addEventListener("load", function() {

    var prev_button = document.getElementById("prev_button");
    var next_button = document.getElementById("next_button");
    var slideIndex = 1;

    prev_button.onclick = function() {
        plus_count(-1);
    };
    next_button.onclick = function() {
        plus_count(1);
    };

    function plus_count(n) {

        car_change(slideIndex += n);
    }

    function car_change(n) {
        console.log(n);
        var i;
        var cars = document.getElementsByClassName("cars");

        if (n > cars.length) {
            slideIndex = 1;
        }

        if (n < 1) {
            slideIndex = cars.length
        }
        for (i = 0; i < cars.length; i++) {

            cars[i].style.display = "none";
        }

        cars[slideIndex - 1].style.display = "";


    }


})


// slide end







let cart = {};


function changeCart(e) {
    let xhr = new XMLHttpRequest();
    // console.log(this.parentNode.parentNode.parentNode);
    xhr.onload = function(e) {
        cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
    }

    let url = "php/cartUpdate.php";
    xhr.open("post", url, true);

    let myForm = new FormData(this.parentNode.parentNode);

    xhr.send(myForm);
}



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




function add_cart() {

    //註冊數量改變時的事件處理器
    let qtys = document.getElementsByClassName("classic_product_qty"); // 數量的輸入盒
    let add_cart_btn = document.getElementsByClassName("classic_product_add_cart_btn");
    let dir_add_cart_btn = document.getElementsByClassName("classic_product_dir_add_cart_btn");

    for (var i = 0; i < qtys.length; i++) {


        if (qtys[i].value >= 0 && qtys[i].value <= 10) {
            add_cart_btn[i].onclick = changeCart;

        }

    }
    dir_add_cart_btn[0].onclick = changeCart;

}


window.addEventListener("load", function() {
    getCart();
    add_cart();
});

function returnR() {
    return false;
}