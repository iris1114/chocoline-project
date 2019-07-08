window.addEventListener("load",function(){
    var collect_btn = document.getElementsByClassName("collect_btn");
    for (i = 0; i < collect_btn.length; i++) {
        collect_btn[i].addEventListener("click", function() {
            var heart_clicked = this.getElementsByClassName("heart_clicked")[0];
            var heart_unclick = this.getElementsByClassName("heart_unclick")[0];
    
            if (heart_clicked.style.display != "inline") {
            heart_clicked.style.display = "inline";
            heart_unclick.style.display = "none";
            } else {
            heart_clicked.style.display = "none";
            heart_unclick.style.display = "inline";
            }
        });
    }
})