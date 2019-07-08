new Vue({
    el: '#app',	
    data: {
        image: '',
    },
    methods:{
        fileSelected(e){
            const file = e.target.files.item(0);
            // console.log(file);

            const readFile = new FileReader();
            readFile.readAsDataURL(file);
            readFile.addEventListener('load',this.imageLoaded);
        },
        imageLoaded(e){
            this.image = e.target.result;
        },
    },
});





// 


   document.getElementsByClassName("tablink").addEventListener("mouseover", mouse_over);
   document.getElementsByClassName("tablink").addEventListener("mouseout", mouse_out);

function mouse_over() {
  document.getElementsByClassName("tablink").style.color = "#fff";
}

function mouse_out() {
  document.getElementsByClassName("tablink").style.color = "#367e90 ";
}


//

function doFirst(){

    var acc = document.getElementsByClassName("order_detail_title");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
    this.classList.toggle("active-plus");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
        panel.style.maxHeight = null;
    } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
    } 
    });
}

}


window.addEventListener("laod",doFirst)