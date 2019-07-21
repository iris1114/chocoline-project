// function add_cart_ajax(p_no, p_name, p_price, p_img, p_qty) {
//     var xhr = new XMLHttpRequest();
//     xhr.onload = function() {
//         if (xhr.status == 200) {
//             if (xhr.responseText == "error") {
//                 alert("fail");
//             } else {
//                 alert("success");
//             }


//         } else {
//             alert(xhr.status);
//         }
//     }
//     var url = "../cart/cart_add.php?p_no=" + p_no + "&p_name=" + p_name + "&p_price=" + p_price + "&p_img=" + p_img + "&p_qty=" + p_qty;
//     xhr.open("Get", "url", true);
//     xhr.
//     xhr.send(null);
// }

// function add_cart() {

//     var cart_btn = document.getElementsByClassName('cart_btn');
//     if (cart_btn) {
//         cart_btn.onclick = function() {

//             var p_no = document.getElementsByName("p_no")[0].value;
//             var p_name = document.getElementsByName("p_name")[0].value;
//             var p_price = document.getElementsByName("p_price")[0].value;
//             var p_img = document.getElementsByName("p_img")[0].value;
//             var p_qty = document.getElementsByName("p_qty")[0].value;
//             add_cart_ajax(p_no, p_name, p_price, p_img, p_qty);
//         }


//     }


// }



// function do_first() {
//     add_cart();
// }

// window.addEventListener('load', do_first);







// slide start

// window.addEventListener("load", function() {
//     var prev_button = document.getElementById("prev_button");
//     var next_button = document.getElementById("next_button");
//     var dot1 = document.getElementById("dot1");
//     var dot2 = document.getElementById("dot2");
//     var dot3 = document.getElementById("dot3");

//     prev_button.onclick = function() {
//         plusSlides(-1);
//     };
//     next_button.onclick = function() {
//         plusSlides(1);
//     };
//     dot1.onclick = function() {
//         currentSlide(1);
//     };
//     dot2.onclick = function() {
//         currentSlide(2);
//     };
//     dot3.onclick = function() {
//         currentSlide(3);
//     };

//     var slideIndex = 1;

//     showSlides(slideIndex);

//     function plusSlides(n) {
//         showSlides((slideIndex += n));
//     }

//     function currentSlide(n) {
//         showSlides((slideIndex = n));
//     }

//     function showSlides(n) {
//         var i;
//         var slides = document.getElementsByClassName("slide");
//         var dots = document.getElementsByClassName("dot");
//         if (n > slides.length) {
//             slideIndex = 1;
//         }
//         if (n < 1) {
//             slideIndex = slides.length;
//         }
//         for (i = 0; i < slides.length; i++) {
//             slides[i].style.display = "none";
//         }
//         for (i = 0; i < dots.length; i++) {
//             dots[i].className = dots[i].className.replace(" active", "");
//         }

//         slides[slideIndex - 1].style.display = "block";
//         dots[slideIndex - 1].className += " active";
//     }
// });

// slide end

// quantity control start

window.addEventListener("load", function() {
    setTimeout(
        init2slider(
            "range",
            "range_between",
            "range_button1",
            "range_button2",
            "range_input1",
            "range_input2"
        ),
        0
    );
});

function init2slider(idX, btwX, btn1X, btn2X, input1, input2) {
    var slider = document.getElementById(idX);
    var between = document.getElementById(btwX);
    var button1 = document.getElementById(btn1X);
    var button2 = document.getElementById(btn2X);
    var inpt1 = document.getElementById(input1);
    var inpt2 = document.getElementById(input2);

    var min = inpt1.min;
    var max = inpt1.max;

    var sliderCoords = getCoords(slider);
    button1.style.marginLeft = "0px";
    button2.style.marginLeft =
        slider.offsetWidth - button1.offsetWidth + "px";
    between.style.width = slider.offsetWidth - button1.offsetWidth + "px";
    inpt1.value = min;
    inpt2.value = max;

    // 在input1輸入觸發
    inpt1.onchange = function(e) {
        // 處理"輸入值大於最大值"的事件
        if (parseInt(inpt1.value) < min) {
            inpt1.value = min;
        }
        if (parseInt(inpt1.value) > max) {
            inpt1.value = max;
        }
        if (parseInt(inpt1.value) > parseInt(inpt2.value)) {
            var temp = inpt1.value;
            inpt1.value = inpt2.value;
            inpt2.value = temp;
        }

        var sliderCoords = getCoords(slider);
        // 找出"新輸入數值"與"總range"相比，動了幾趴
        var per1 = (parseInt(inpt1.value - min) * 100) / (max - min);
        var per2 = (parseInt(inpt2.value - min) * 100) / (max - min);
        // 根據動的趴數調整button的位置
        var left1 = (per1 * (slider.offsetWidth - button1.offsetWidth)) / 100;
        var left2 = (per2 * (slider.offsetWidth - button1.offsetWidth)) / 100;
        button1.style.marginLeft = left1 + "px";
        button2.style.marginLeft = left2 + "px";

        if (left1 > left2) {
            between.style.width = left1 - left2 + "px";
            between.style.marginLeft = left2 + "px";
        } else {
            between.style.width = left2 - left1 + "px";
            between.style.marginLeft = left1 + "px";
        }
    };

    // 在input1輸入觸發
    inpt2.onchange = function(e) {
        // 處理"輸入值大於最大值"的事件
        if (parseInt(inpt2.value) < min) inpt2.value = min;
        if (parseInt(inpt2.value) > max) inpt2.value = max;
        if (parseInt(inpt1.value) > parseInt(inpt2.value)) {
            var temp = inpt1.value;
            inpt1.value = inpt2.value;
            inpt2.value = temp;
        }

        var sliderCoords = getCoords(slider);
        // 找出"新輸入數值"與"總range"相比，動了幾趴
        var per1 = (parseInt(inpt1.value - min) * 100) / (max - min);
        var per2 = (parseInt(inpt2.value - min) * 100) / (max - min);
        // 根據動的趴數調整button的位置
        var left1 = (per1 * (slider.offsetWidth - button1.offsetWidth)) / 100;
        var left2 = (per2 * (slider.offsetWidth - button1.offsetWidth)) / 100;

        button1.style.marginLeft = left1 + "px";
        button2.style.marginLeft = left2 + "px";

        if (left1 > left2) {
            between.style.width = left1 - left2 + "px";
            between.style.marginLeft = left2 + "px";
        } else {
            between.style.width = left2 - left1 + "px";
            between.style.marginLeft = left1 + "px";
        }
    };

    // 點下button1觸發
    button1.onmousedown = function(e) {
        var sliderCoords = getCoords(slider);
        var betweenCoords = getCoords(between);
        var buttonCoords1 = getCoords(button1);
        var buttonCoords2 = getCoords(button2);
        var shiftX2 = e.pageX - buttonCoords2.left;
        var shiftX1 = e.pageX - buttonCoords1.left;
        // 拖曳button1觸發
        document.onmousemove = function(e) {
            var left1 = e.pageX - shiftX1 - sliderCoords.left;
            var right1 = slider.offsetWidth - button1.offsetWidth;
            if (left1 < 0) left1 = 0;
            if (left1 > right1) left1 = right1;
            button1.style.marginLeft = left1 + "px";

            shiftX2 = e.pageX - buttonCoords2.left;
            var left2 = e.pageX - shiftX2 - sliderCoords.left;
            var right2 = slider.offsetWidth - button2.offsetWidth;
            if (left2 < 0) left2 = 0;
            if (left2 > right2) left2 = right2;

            var per_min = 0;
            var per_max = 0;

            if (left1 > left2) {
                between.style.width = left1 - left2 + "px";
                between.style.marginLeft = left2 + "px";
                per_min =
                    (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
                per_max =
                    (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
            } else {
                between.style.width = left2 - left1 + "px";
                between.style.marginLeft = left1 + "px";

                per_min =
                    (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
                per_max =
                    (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
            }
            inpt1.value =
                parseInt(min) + Math.round(((max - min) * per_min) / 100);
            inpt2.value =
                parseInt(min) + Math.round(((max - min) * per_max) / 100);
        };
        document.onmouseup = function() {
            document.onmousemove = document.onmouseup = null;
        };
        return false;
    };

    button2.onmousedown = function(evt) {
        var sliderCoords = getCoords(slider);
        var betweenCoords = getCoords(between);
        var buttonCoords1 = getCoords(button1);
        var buttonCoords2 = getCoords(button2);
        var shiftX2 = evt.pageX - buttonCoords2.left;
        var shiftX1 = evt.pageX - buttonCoords1.left;

        document.onmousemove = function(evt) {
            var left2 = evt.pageX - shiftX2 - sliderCoords.left;
            var right2 = slider.offsetWidth - button2.offsetWidth;
            if (left2 < 0) left2 = 0;
            if (left2 > right2) left2 = right2;
            button2.style.marginLeft = left2 + "px";

            shiftX1 = evt.pageX - buttonCoords1.left;
            var left1 = evt.pageX - shiftX1 - sliderCoords.left;
            var right1 = slider.offsetWidth - button1.offsetWidth;
            if (left1 < 0) left1 = 0;
            if (left1 > right1) left1 = right1;

            var per_min = 0;
            var per_max = 0;

            if (left1 > left2) {
                between.style.width = left1 - left2 + "px";
                between.style.marginLeft = left2 + "px";
                per_min =
                    (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
                per_max =
                    (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
            } else {
                between.style.width = left2 - left1 + "px";
                between.style.marginLeft = left1 + "px";
                per_min =
                    (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
                per_max =
                    (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
            }
            inpt1.value =
                parseInt(min) + Math.round(((max - min) * per_min) / 100);
            inpt2.value =
                parseInt(min) + Math.round(((max - min) * per_max) / 100);
        };
        document.onmouseup = function() {
            document.onmousemove = document.onmouseup = null;
        };
        return false;
    };

    button1.ondragstart = function() {
        return false;
    };
    button2.ondragstart = function() {
        return false;
    };

    function getCoords(elem) {
        var box = elem.getBoundingClientRect();
        return {
            top: box.top + pageYOffset,
            left: box.left + pageXOffset
        };
    }
}

// quantity control end

// selector start

function getStyle(obj, attr) {
    return obj.currentStyle ? obj.currentStyle[attr] : getComputedStyle(obj, null)[attr];
}


window.addEventListener("load", function() {
    var select_button = document.getElementById("select_button");
    var selector_area = document.getElementById("selector_area");
    var product_list = document.getElementById("product_list");

    select_button.onclick = function() {

        if (document.body.clientWidth < 768) {

            if (getStyle(selector_area, "display") == "block") {
                selector_area.style.display = "none";
                product_list.style.paddingTop = "50px";

            } else {
                selector_area.style.display = "block";
                product_list.style.paddingTop = "1030px";
            }
        }

        if (document.body.clientWidth >= 768 && document.body.clientWidth < 992) {
            if (getStyle(selector_area, "display") == "block") {
                selector_area.style.display = "none";
                product_list.style.paddingTop = "50px";
            } else {
                selector_area.style.display = "block";
                product_list.style.paddingTop = "700px";
            }
        }

    }

});


// selector end
// mem_no = 1;

// function add_favorite(e) {
//     console.log(this);
//     let xhr = new XMLHttpRequest();
//     console.log(this);
//     xhr.onload = function() {

//         if (xhr.status == 200) {

//             // select_result = JSON.parse(xhr.responseText);
//             // show_select_result();
//         } else {
//             alert(xhr.status);
//         }
//     }
//     let url = "php/add_favorite.php";

//     xhr.open("post", url, false);
//     let myForm = new FormData(e.target.parentNode.parentNode.parentNode);
//     xhr.send(myForm);
// }

// function retreat_favorite() {


// }





// collect start

window.addEventListener("load", collect_product);

function collect_product() {
    var collect_btn = document.getElementsByClassName("collect_btn");

    for (i = 0; i < collect_btn.length; i++) {
        collect_btn[i].addEventListener("click", function(e) {

            var heart_clicked = this.getElementsByClassName("heart_clicked")[0];
            var heart_unclick = this.getElementsByClassName("heart_unclick")[0];

            if (heart_clicked.style.display != "inline") {
                heart_clicked.style.display = "inline";
                heart_unclick.style.display = "none";

                // 將商品加入我的收藏
                let xhr = new XMLHttpRequest();

                let url = "php/add_favorite.php";

                xhr.open("post", url, false);
                let myForm = new FormData(this.parentNode.parentNode.parentNode);
                xhr.send(myForm);

            } else {
                heart_clicked.style.display = "none";
                heart_unclick.style.display = "inline";

                // 將商品從我的收藏移出
                let xhr = new XMLHttpRequest();

                let url = "php/delete_favorite.php";

                xhr.open("post", url, false);
                let myForm = new FormData(this.parentNode.parentNode.parentNode);
                xhr.send(myForm);

            }
        }, true);
    }
}

// collect end

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

window.addEventListener("load", plus_minus_qty);

function plus_minus_qty() {
    var qty = document.getElementsByClassName("qty");
    var minus = document.getElementsByClassName("minus");
    var plus = document.getElementsByClassName("plus");
    var length = qty.length;

    for (var i = 0; i < length; i++) {
        // qty[i].onkeyup = qty_reset;
        minus[i].onclick = minus1;
        plus[i].onclick = plus1;
    }
}


// qty control end
// cable_car_mobile start


window.addEventListener("load", cable_car_move);

function cable_car_move() {
    var cable_car_next_btn = document.getElementById("cable_car_btn");
    var cable_car_area = document.getElementsByClassName("cable_car_area");
    var k = 3;
    var i = 4;
    var j = 0;

    cable_car_next_btn.onclick = function() {
        if (i > 3) {
            i = -1;
        }
        if (j > 3) {
            j = -1;
        }
        if (k > 3) {
            k = -1;
        }
        i++;
        j++;
        k++;

        cable_car_area[k].classList.remove("left_to_right_second");
        cable_car_area[i].classList.remove("left_to_right_first");
        cable_car_area[j].classList.add("left_to_right_first");
        cable_car_area[i].classList.add("left_to_right_second");
    }
}


// cable_car_mobile end




var select_result = {};


// select products start
function send_select(select_data) {

    let xhr = new XMLHttpRequest();

    xhr.onload = function() {

        if (xhr.status == 200) {

            select_result = JSON.parse(xhr.responseText);
            show_select_result();
        } else {
            alert(xhr.status);
        }
    }
    let url = "php/get_select_result.php?select_data=" + select_data;
    // console.log(url);
    xhr.open("get", url, false);
    xhr.send(null);




}


// function clear_select() {
//     var clear_select_btn = document.querySelectorAll("#select_checkbox");
//     clear_select_btn.onclick = function(e) {
//         var select_data = []


//         send_select(select_data);
//     }

// }



function select_item() {

    var select_items = document.querySelectorAll(".select_checkbox");
    // var selectors = document.querySelectorAll(".selectors");
    // var range_input1 = document.querySelectorAll(".range_input1");
    // var range_input2 = document.querySelectorAll(".range_input2");



    for (var i = 0; i < select_items.length; i++) {

        select_items[i].onchange = function(e) {

            var select_data = []
                // var select_range = "product_price>" + range_input1[0].value + " AND product_price<" + range_input2[0].value;
                // console.log(select_range);

            for (var j = 0; j < select_items.length; j++) {

                if (select_items[j].checked == true) {
                    select_data.push(select_items[j].value + "=1");
                    // console.log(select_items[j].value);
                }
            }

            send_select(select_data);
        }
    }
}
window.addEventListener("load", select_item);

// select product end



function show_select_result() {

    var product_list = document.getElementById("product_list");


    // var html = "";
    var html = '<div class="product_item col_lg_5">' + product_list.firstElementChild.innerHTML + "</div>";
    // console.log(html);
    // if (isCartEmpty()) {
    //     html = "<center>尚無購物資料</center>";
    // }

    for (var i = 0; i < select_result.length; i++) { //cart[psn]
        html +=
            `<form>
            <input type="hidden" name="p_no" value="${select_result[i]["classic_product_no"]}">
            <input type="hidden" name="p_name" value="${select_result[i]["classic_product_name"]}">
            <input type="hidden" name="p_price" value="${select_result[i]["product_price"]}">
            <input type="hidden" name="p_img" value="image/store/${select_result[i]["product_img_src"]}">
            
            <div class="product_item col_lg_5">
                <div class="product_pic_content">
                    <div class="product_pic">
                        <a href="product.php?classic_product_no=${select_result[i]["classic_product_no"]}">
                            <img src="image/store/${select_result[i]["product_img_src"]}" />
                        </a>
                        <a href="product.php?classic_product_no=${select_result[i]["classic_product_no"]}   ">
                            <img src="image/store/${select_result[i]["product_hover_src"]}" alt="" />
                        </a>
                    </div>
                    <div class="product_content">
                        <h2>${select_result[i]["classic_product_name"]}</h2>
                        <p class="sold_qty">已售出 <span>${select_result[i]["product_sold"]}</span></p>
                        <p class="price">NT$ <span>${select_result[i]["product_price"]}</p>
                        <div class="qty_buttons">
                            <input class="minus" type="button" value="-" /><input  class="qty classic_product_qty" type="text" value="1" min="1" max="10" step="1" name="qty" /><input class="plus" type="button" value="+" />
                        </div>

                    </div>
                </div>
                <div class="product_button">
                    <a href="javascript:;" class="collect_btn btn cyan_m"><span>`

        if (favorite_arr.indexOf(select_result[i]["classic_product_no"]) == -1) {
            html += '<i class="heart_unclick far fa-heart"></i><i class="heart_clicked fas fa-heart" style="display:none"></i> ';

        } else {
            html += '<i class="heart_unclick far fa-heart" style="display:none"></i><i class="heart_clicked fas fa-heart"></i> ';
        }

        html += `收藏</span></a>
                    <a href="javascript:;" class="btn orange_m classic_product_add_cart_btn"><span>加入購物車</span></a>
                </div>
            </div>
            </form>`;
    }
    html += `<div class="pagination_wrap">
    <div class="pagination">
        <a href="javascript:;">❮</a>
        <a class="active" href="javascript:;">1</a>
        <a href="javascript:;">2</a>
        <a href="javascript:;">3</a>
        <a href="javascript:;">4</a>
        <a href="javascript:;">5</a>
        <a href="javascript:;">❯</a>
    </div>
</div>`
    product_list.innerHTML = html;

    plus_minus_qty();
    collect_product();
    add_cart();



}






function returnR() {
    return false;
}