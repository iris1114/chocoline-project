function select_month() {
    var select_month = document.getElementById('select_month');
    if (select_month) {
        for (var i = 1; i <= 12; i++) {
            var t = i + "月";
            var v = i;
            var new_option = new Option(t, v);
            select_month.options.add(new_option);
        }
    }

}

function select_year() {
    var nowTime = new Date();
    var theYear = nowTime.getFullYear();

    var select_year = document.getElementById("select_year");
    if (select_year) {
        for (var i = 0; i < 20; i++) {
            var t = theYear + i + "年";
            var v = theYear + i;
            var new_option = new Option(t, v);
            select_year.options.add(new_option);
        }
    }
}


function change_point() {
    var point_output = document.getElementById('point_output');
    var mem_point = document.getElementsByName("mem_point");

    document.getElementById('point_input').oninput = function() {

        point_output.innerText = this.value;
        mem_point[0].value = this.value;

        console.log(this.value);

    }
}




function same_info() {

    same_info_btn = document.getElementById("same_info_btn");

    same_info_btn.onclick = function() {
        var purchaser_info = document.getElementsByClassName("purchaser_info");
        var receiver_info = document.getElementsByClassName("receiver_info");

        if (same_info_btn.checked == true) {
            for (var i = 0; i < purchaser_info.length; i++) {
                console.log(receiver_info[i].value);
                console.log(purchaser_info[i].value);
                receiver_info[i].value = purchaser_info[i].value;

            }
        } else {
            for (var i = 0; i < purchaser_info.length; i++) {

                receiver_info[i].value = "";

            }


        }
    }

}








// function cart_confirm(){
// var confirm_btn = document.getElementById("cart_confirm_btn");

// confirm_btn.onclick = function(){


// store_order(e);



// }


// }



function do_first() {
    select_month();
    select_year();
    change_point();
    same_info();
    // cart_confirm();
}

window.addEventListener('load', do_first);