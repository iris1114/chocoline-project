function revise() {

    var revise = document.querySelectorAll(".revise");
    var confirm = document.querySelectorAll(".confirm");
    var delete_data = document.querySelectorAll(".delete");
    var i;


    for (i = 0; i < revise.length; i++) {


        revise[i].onclick = function() {
            var input_count = this.parentNode.parentNode.querySelectorAll("input").length - 3;
            var radio_desc_count = this.parentNode.parentNode.querySelectorAll(".radio_desc").length;
            // console.log(this.parentNode.parentNode.querySelectorAll(".radio_desc"));
            // var select_count = this.parentNode.parentNode.querySelectorAll("select").length;
            // console.log(this.parentNode.parentNode.querySelectorAll(".input_revise")[0].type);
            // console.log(this.parentNode.parentNode.querySelectorAll("select").length);
            // console.log(radio_desc_count);
            // console.log(this.parentNode.parentNode.querySelectorAll(".input_revise")[0].checked);
            var j;

            if (this.value == "修改") {
                for (j = 0; j < input_count; j++) {
                    // 點擊修改時，input出現，欲顯示的值隱藏
                    this.parentNode.parentNode.querySelectorAll(".input_revise")[j].style.display = "";
                    this.parentNode.parentNode.querySelectorAll(".show_value")[j].style.display = "none";
                    // 如果不是radio時，欲顯示的值=input
                    if (this.parentNode.parentNode.querySelectorAll(".input_revise")[j].type != "radio") {
                        this.parentNode.parentNode.querySelectorAll(".input_revise")[j].value = this.parentNode.parentNode.querySelectorAll(".show_value")[j].innerHTML;
                    }
                    // 如果是radio， 且
                    // if (this.parentNode.parentNode.querySelectorAll(".input_revise")[j].type == "radio") {
                    //     this.parentNode.parentNode.querySelectorAll(".show_value")[j].style.display = "none";
                    // }

                }
                // for (j = 0; j < select_count; j++) {

                //     this.parentNode.parentNode.querySelectorAll("select")[j].disabled = false;
                // }
                for (j = 0; j < radio_desc_count; j++) {

                    this.parentNode.parentNode.querySelectorAll(".radio_desc")[j].style.display = "";
                }
                this.parentNode.parentNode.querySelectorAll(".confirm")[0].style.display = "";
                this.value = "取消"

            } else {
                for (j = 0; j < input_count; j++) {
                    if (this.parentNode.parentNode.querySelectorAll(".input_revise")[j].type != "radio") {
                        this.parentNode.parentNode.querySelectorAll(".input_revise")[j].value = "";
                    }

                    this.parentNode.parentNode.querySelectorAll(".input_revise")[j].style.display = "none";

                    this.parentNode.parentNode.querySelectorAll(".show_value")[j].style.display = "";
                    // console.log(this.parentNode.parentNode.querySelectorAll(".input_revise")[j].checked);
                    // if (this.parentNode.parentNode.querySelectorAll(".input_revise")[j].type == "radio" && this.parentNode.parentNode.querySelectorAll(".input_revise")[j].checked == true) {
                    //     this.parentNode.parentNode.querySelectorAll(".show_value")[j].style.display = "none";
                    // }
                    if (this.parentNode.parentNode.querySelectorAll(".input_revise")[j].type == "radio" && this.parentNode.parentNode.querySelectorAll(".input_revise")[j].disabled != true) {
                        this.parentNode.parentNode.querySelectorAll(".show_value")[j].style.display = "none";
                    }
                    if (this.parentNode.parentNode.querySelectorAll(".input_revise")[j].type == "radio" && this.parentNode.parentNode.querySelectorAll(".input_revise")[j].disabled == true) {
                        this.parentNode.parentNode.querySelectorAll(".input_revise")[j].checked = true;
                    }


                }
                // for (j = 0; j < select_count; j++) {

                //     this.parentNode.parentNode.querySelectorAll("select")[j].disabled = true;
                // }



                for (j = 0; j < radio_desc_count; j++) {

                    this.parentNode.parentNode.querySelectorAll(".radio_desc")[j].style.display = "none";
                }
                this.parentNode.parentNode.querySelectorAll(".confirm")[0].style.display = "none";
                this.value = "修改"

            }

        }

        confirm[i].onclick = function() {
            var input_count = this.parentNode.parentNode.querySelectorAll("input").length - 3;
            var radio_desc_count = this.parentNode.parentNode.querySelectorAll(".radio_desc").length;
            var k;
            for (k = 0; k < input_count; k++) {
                this.parentNode.parentNode.querySelectorAll(".input_revise")[k].style.display = "none";
                if (this.parentNode.parentNode.querySelectorAll(".input_revise")[k].type != "radio") {
                    this.parentNode.parentNode.querySelectorAll(".show_value")[k].innerHTML = this.parentNode.parentNode.querySelectorAll(".input_revise")[k].value;
                }

                if (this.parentNode.parentNode.querySelectorAll(".input_revise")[k].type == "radio" && this.parentNode.parentNode.querySelectorAll(".input_revise")[k].checked == true) {
                    this.parentNode.parentNode.querySelectorAll(".input_revise")[k].disabled = true;
                }




                this.parentNode.parentNode.querySelectorAll(".show_value")[k].style.display = "";

                if (this.parentNode.parentNode.querySelectorAll(".input_revise")[k].type == "radio" && this.parentNode.parentNode.querySelectorAll(".input_revise")[k].checked != true) {
                    // this.parentNode.parentNode.querySelectorAll(".input_revise")[k].disabled = true;
                    this.parentNode.parentNode.querySelectorAll(".show_value")[k].style.display = "none";
                }

            }
            for (k = 0; k < radio_desc_count; k++) {

                this.parentNode.parentNode.querySelectorAll(".radio_desc")[k].style.display = "none";
            }
            this.parentNode.parentNode.querySelectorAll(".revise")[0].value = "修改";
            this.style.display = "none";

        }
        delete_data[i].onclick = function() {
            this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);
            console.log(this.parentNode.parentNode.parentNode);
            console.log(this.parentNode.parentNode);
        }
    }

}




window.addEventListener("load", function() {
    revise();


    var add_data = document.querySelectorAll(".add");
    for (i = 0; i < add_data.length; i++) {

        add_data[i].onclick = function() {

            new_data = this.parentNode.querySelectorAll(".new_data_sample")[0].cloneNode(true);
            new_data.style.display = "";
            new_data.className = "";
            this.parentNode.querySelectorAll("tbody")[0].appendChild(new_data);
            // alert(new_data.querySelector(".revise").value);
            // new_data.querySelector(".revise").add
            revise();

        }

    }

});


// function returnR() {
//     return false;
// }