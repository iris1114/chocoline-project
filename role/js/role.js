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

    
    $("#submit_btn").click(say);
    $("#input_text").keydown(function(e){
        if(e.keyCode==13 || e.keyCode==108){
            e.preventDefault();
            say();
        }
    });
    
    function say(){
        $input_text = $("#input_text").val();
        if($input_text == ""){
            return;
        }
        // $member_name = 會員名稱
        // $cus_photo_src = 會員頭像
        $d = new Date();
        $current_date = $d.getFullYear() + "/" + ($d.getMonth()+1) + "/" + $d.getDate();
        
        $("#message_board_wrap").append(`<div class="message_block">
                <div class="message_item">
                    <div class="message">
                        <figure class="cus_photo">
                            <img src="image/role/bear.png" alt="memphoto">
                        </figure>
                        <div class="message_contain">
                            <p class="memName">CHOCO bear</p>
                            <p class="mseeage_text">${$input_text}</p>
                        </div>
                        <div class="status">
                            <a href="javascrupt:;" class="btn cyan_s">
                                <span>檢舉</span>
                            </a>
                            <p class="message_date">${$current_date}</p>
                        </div>
                    </div>
                </div>
            </div>`
        )

        $("#input_text").val("");
        

        $("#message_board_wrap").animate({scrollTop:$(".message_block").length * $(".message_block").height()}, 400);
      
    }
})