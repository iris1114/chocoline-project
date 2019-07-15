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
        
        $("#message_board_wrap").prepend(`<div class="message_block">
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
        
        // $("#message_board_wrap").animate({scrollTop:$(".message_block").length * $(".message_block").height()}, 400);
        pagenumplus();
        show_this_page();

    }
    
    let message_row = "";
    if(window.innerWidth<767){
        message_row = 3;
    }else{
        message_row = 5;
    }

    //總共幾頁分頁
    $pagenums = Math.ceil($(".message_block").length / message_row);
    for(let i=0;i<$pagenums;i++){
        $("#nextpage_btn").before(`<a href="javascript:;" class="pagenums">${i+1}</a>`);
    }
    var pagenums = document.querySelectorAll(".pagenums");
    document.querySelector(".pagenums").classList.add("active");
    let message_block = document.querySelectorAll(".message_block");
    let nowpage = document.querySelector(".pagenums");

    //寫入留言時  增加頁碼 以及改變要隱藏的欄位
    function pagenumplus(){
        $pagenums = Math.ceil($(".message_block").length / message_row);

        if( $pagenums != $(".pagination a").length-2){
            $("#nextpage_btn").before(`<a href="javascript:;" class="pagenums">${$pagenums}</a>`);
        }

        pagenums = document.querySelectorAll(".pagenums");
        
        for(let i=0;i<pagenums.length;i++){
            
            message_block = document.querySelectorAll(".message_block");

            for(let i=0;i<message_block.length;i++){
                message_block[i].style.display="block"
            }
            
            for(let i=0;i<((nowpage.innerText-1) * message_row);i++){
                message_block[i].style.display="none";
            }
        }
    }

    //點擊頁碼隱藏前面的欄位
    show_this_page();
    function show_this_page(){

        pagenums = document.querySelectorAll(".pagenums");
        for(let i=0;i<pagenums.length;i++){
            
            pagenums[i].addEventListener("click",function(){
                
                message_block = document.querySelectorAll(".message_block");

                for(let i=0;i<message_block.length;i++){
                    message_block[i].style.display="block"
                }

                for(let i=0;i<((this.innerText-1) * message_row);i++){
                    message_block[i].style.display="none";
                }

                for(let j=0; j<pagenums.length;j++){
                    pagenums[j].classList.remove("active");
                }
                
                this.classList.add("active");
                nowpage = this;
            })
        }
    }

    //點擊左右換頁 如果pagenums.length跟 active的innerText一樣 那就是到底了
    let prev_btn = document.querySelector("#prevpage_btn"),
        next_btn = document.querySelector("#nextpage_btn");

        prev_btn.addEventListener("click",function(){
            for(let j=0; j<pagenums.length;j++){
                pagenums[j].classList.remove("active");
            }
            let i = nowpage.innerText-2;
            if(i<0){
                i=0
            }
            pagenums[i].classList.add("active");
            nowpage = pagenums[i];
            

            message_block = document.querySelectorAll(".message_block");

            for(let i=0;i<message_block.length;i++){
                message_block[i].style.display="block"
            }

            for(let i=0;i<((nowpage.innerText - 1) * message_row);i++){
                message_block[i].style.display="none";
            }

        })

        next_btn.addEventListener("click",function(){
            for(let j=0; j<pagenums.length;j++){
                pagenums[j].classList.remove("active");
            }
            let i = nowpage.innerText;
            if(i == pagenums.length){
                i=pagenums.length-1;
            }
            pagenums[i].classList.add("active");
            nowpage = pagenums[i];
            

            message_block = document.querySelectorAll(".message_block");

            for(let i=0;i<message_block.length;i++){
                message_block[i].style.display="block"
            }

            for(let i=0;i<((nowpage.innerText - 1) * message_row);i++){
                message_block[i].style.display="none";
            }

        })
    

    //檢舉按鈕
    let report = document.querySelector(".report");
    let report_btn = document.querySelectorAll(".report_btn");
    let close_btn = document.querySelector(".close_btn");

    close_btn.addEventListener("click",function(){
        report.style.display = "none";
        document.documentElement.style.height = "auto";
        document.documentElement.style.overflow = "auto";
        let j =0;
        
        while(j<report_btn.length){
            report_btn[j].style.pointerEvents = "auto";
            j++;
        }
    })

    let report_btn_num=0;
    let whosreport = ""; //誰被檢舉
    while(report_btn_num<report_btn.length){
        report_btn[report_btn_num].addEventListener("click",function(){
            let j =0;
            while(j<report_btn.length){
                report_btn[j].style.pointerEvents = "none";
                j++;
            }
            whosreport = this.parentNode;
            report.style.display = "flex"
            document.documentElement.style.height = "100%";
            document.documentElement.style.overflow = "hidden";
        })
        report_btn_num++
    }

    let report_submit = document.querySelector("#report_submit");
    report_submit.addEventListener("click",function(){
        // console.log(whosreport);
        
    })
   
    //顯示目前第幾頁 內容變更


    
})