whocall = "";
who_collect = "";
window.addEventListener("load",function(){

//收藏
    function collect_product() {
        var collect_btn = document.getElementsByClassName("collect_btn");
    
        for (i = 0; i < collect_btn.length; i++) {
            collect_btn[i].addEventListener("click", function(e) {
                
                whocall = "0";
                who_collect = this;
                callBack = function(){
                    who_collect.click();
                }
                showLoginForm();
                if(!islogin){
                    return;
                }


                var heart_clicked = this.getElementsByClassName("heart_clicked")[0];
                var heart_unclick = this.getElementsByClassName("heart_unclick")[0];
    
                if (heart_clicked.style.display != "inline") {
                    heart_clicked.style.display = "inline";
                    heart_unclick.style.display = "none";
    
                    // 將商品加入我的收藏
                    let xhr = new XMLHttpRequest();
                    xhr.onload=function (){
                        if( xhr.status == 200 ){
                            console.log(`成功`);
                            console.log(xhr.responseText);
                            
                        }else{
                            alert( xhr.status );
                        }
                    }


                    let url = "php/add_favorite.php";
                    xhr.open("post", url, false);
                    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
                    var data_info = ``;
                    xhr.send(data_info);
    
                } else {
                    heart_clicked.style.display = "none";
                    heart_unclick.style.display = "inline";
    
                    // 將商品從我的收藏移出
                    let xhr = new XMLHttpRequest();
                    xhr.onload=function (){
                        if( xhr.status == 200 ){
                            console.log(`成功`);
                            console.log(xhr.responseText);
                            
                        }else{
                            alert( xhr.status );
                        }
                    }


                    let url = "php/delete_favorite.php";
                    xhr.open("post", url, false);
                    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
                    var data_info = ``;
                    xhr.send(data_info);
    
                }
            }, true);
        }
    }
    collect_product();
    

//投票
    tovote();
    function tovote(){
        player_votes = document.querySelector(".player_vote_btn");
        
            player_votes.addEventListener("click",function(){
                whocall = "1";
                
                callBack1 = function(){
                    player_votes.click();
                }
                showLoginForm();
                if(!islogin){
                    return;
                }
                isrest_note();
              
                let xhr = new XMLHttpRequest();
                xhr.onload=function (){
                    if( xhr.status == 200 ){
                        // console.log(`成功`)
                        document.querySelector(".cardfront").querySelector("p").innerText = `${xhr.responseText.replace(" ","")}票`;
                    }else{
                        alert( xhr.status );
                    }
                }
                
                //設定好所要連結的程式
                var url = "php/addvotes.php";
                xhr.open("post", url, true);
                xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
                //送出資料
                
                var data_info = ``;
                xhr.send(data_info);
            })
    }
    function isrest_note(){
        let xhr = new XMLHttpRequest();
        
        xhr.onload=function (){
            if( xhr.status == 200 ){
                // console.log(`成功`);
                if(xhr.responseText ==0){
                    alert("今日票數已投完~");
                    // console.log("今日票數已投完~");
                }
            }else{
                alert( xhr.status );
            }
        }
        //設定好所要連結的程式
        var url = "php/isrest_vote.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        
        var data_info = ``;
        xhr.send(data_info);
    }


//新增留言
    if(window.innerWidth<767){
        show_message_num = 3;
    }else{
        show_message_num = 5;
    }

    document.querySelector("#input_text").addEventListener("keydown",function(e){
        if(e.keyCode==13 || e.keyCode==108){
            e.preventDefault();
            addmessage();
        }
    })
    document.querySelector("#submit_btn").addEventListener("click",addmessage);

    function addmessage(){            
        let input_text = document.querySelector("#input_text");
      
        if(window.innerWidth<767){
            show_message_num = 3;
        }else{
            show_message_num = 5;
        }

        whocall = "2";
        callBack2 = function(){
            document.querySelector("#submit_btn").click();
        }

        showLoginForm();
        if(!islogin){
            return;
        }

        if(input_text.value == ""){
            return;
        }
       
        let xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
                // console.log(`成功`);
                console.log(xhr.responseText);
                
                document.querySelector("#message_board_wrap").innerHTML = xhr.responseText;
                input_text.value = "";
                addpage();

                report = document.querySelector(".report");
                report_btn = document.querySelectorAll(".report_btn");
                close_btn = document.querySelector(".close_btn");
                report_submit_btn = document.querySelector("#report_submit");

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
            
                for(let i=0 ; i<report_btn.length ; i++){
                    report_btn[i].addEventListener("click",function(){
                        
                        whosreport = this.parentNode;
                        console.log(whosreport);
                        
                        let j =0;
                        while(j<report_btn.length){
                            report_btn[j].style.pointerEvents = "none";
                            j++;
                        }
                        report.style.display = "flex"
                        document.documentElement.style.height = "100%";
                        document.documentElement.style.overflow = "hidden";
            
                        
                    })
                }
                report_submit_btn.addEventListener("click",report_sub);

            }else{
                alert( xhr.status );
            }
        }
        
        //設定好所要連結的程式
        var url = "php/addmessage.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        
        var data_info = `comment=${input_text.value}&show_message_num=${show_message_num}`;
        xhr.send(data_info);
    }
    

    
//頁碼

    let nowpage;
    let nowpagetext = 1;
    let pagenums = document.querySelectorAll(".pagenums");
    document.querySelector(".pagenums").classList.add("active");
    select_page();

    function select_page(){
        pagenums = document.querySelectorAll(".pagenums");
        for(let i=0;i<pagenums.length;i++){

            pagenums[i].addEventListener("click",function(){
                nowpage = this;
                nowpagetext = nowpage.innerText;
                
                for(let j=0; j<pagenums.length;j++){
                    pagenums[j].classList.remove("active");
                }
                this.classList.add("active");
                showmessage();
            })
        }
    }

//增加page
    function addpage(){
        let xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
                console.log(`成功`);
                document.querySelector(".pagination").innerHTML = xhr.responseText;
                select_page();
                pre_next_page();
                document.querySelector(".pagenums").classList.add("active");
                nowpagetext = 1;
            }else{
                alert( xhr.status );
            }
        }
        
        //設定好所要連結的程式
        var url = "php/addpage.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        
        var data_info = `show_message_num=${show_message_num}`;
        xhr.send(data_info);
    }

//點擊左右換頁 如果pagenums.length跟 active的innerText一樣 那就是到底了
    let prev_btn = document.querySelector("#prevpage_btn"),
    next_btn = document.querySelector("#nextpage_btn");
    pre_next_page();
    function pre_next_page(){
        prev_btn = document.querySelector("#prevpage_btn");
        next_btn = document.querySelector("#nextpage_btn");

        prev_btn.addEventListener("click",function(){
            for(let j=0; j<pagenums.length;j++){
                pagenums[j].classList.remove("active");
            }
            let i = nowpagetext-2;
            if(i<0){
                i=0
            }
            pagenums[i].classList.add("active");
            nowpage = pagenums[i];
            nowpagetext = nowpage.innerText;
            showmessage();


             report = document.querySelector(".report");
                report_btn = document.querySelectorAll(".report_btn");
                close_btn = document.querySelector(".close_btn");
                report_submit_btn = document.querySelector("#report_submit");

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
            
                for(let i=0 ; i<report_btn.length ; i++){
                    report_btn[i].addEventListener("click",function(){
                        
                        whosreport = this.parentNode;
                        console.log(whosreport);
                        
                        let j =0;
                        while(j<report_btn.length){
                            report_btn[j].style.pointerEvents = "none";
                            j++;
                        }
                        report.style.display = "flex"
                        document.documentElement.style.height = "100%";
                        document.documentElement.style.overflow = "hidden";
            
                        
                    })
                }
                report_submit_btn.addEventListener("click",report_sub);
        })

        next_btn.addEventListener("click",function(){
            for(let j=0; j<pagenums.length;j++){
                pagenums[j].classList.remove("active");
            }
            let i = nowpagetext;
            if(i == pagenums.length){
                i=pagenums.length-1;
            }
            pagenums[i].classList.add("active");
            nowpage = pagenums[i];
            nowpagetext = nowpage.innerText;
            showmessage();


             report = document.querySelector(".report");
                report_btn = document.querySelectorAll(".report_btn");
                close_btn = document.querySelector(".close_btn");
                report_submit_btn = document.querySelector("#report_submit");

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
            
                for(let i=0 ; i<report_btn.length ; i++){
                    report_btn[i].addEventListener("click",function(){
                        
                        whosreport = this.parentNode;
                        console.log(whosreport);
                        
                        let j =0;
                        while(j<report_btn.length){
                            report_btn[j].style.pointerEvents = "none";
                            j++;
                        }
                        report.style.display = "flex"
                        document.documentElement.style.height = "100%";
                        document.documentElement.style.overflow = "hidden";
            
                        
                    })
                }
                report_submit_btn.addEventListener("click",report_sub);
        })
    }
    

    function showmessage(){
        let xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
                console.log(`成功`);
                document.querySelector("#message_board_wrap").innerHTML = xhr.responseText;
                // select_page();
                // pre_next_page();
                // reportfn();
                report = document.querySelector(".report");
                report_btn = document.querySelectorAll(".report_btn");
                close_btn = document.querySelector(".close_btn");
                report_submit_btn = document.querySelector("#report_submit");

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
            
                for(let i=0 ; i<report_btn.length ; i++){
                    report_btn[i].addEventListener("click",function(){
                        
                        whosreport = this.parentNode;
                        console.log(whosreport);
                        
                        let j =0;
                        while(j<report_btn.length){
                            report_btn[j].style.pointerEvents = "none";
                            j++;
                        }
                        report.style.display = "flex"
                        document.documentElement.style.height = "100%";
                        document.documentElement.style.overflow = "hidden";
            
                        
                    })
                }
                report_submit_btn.addEventListener("click",report_sub);
            }else{
                alert( xhr.status );
            }
        }
        
        //設定好所要連結的程式
        var url = "php/showmessage.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        
        var data_info = `nowpagetext=${nowpagetext}&show_message_num=${show_message_num}`;
        xhr.send(data_info);
    }


    
    //檢舉按鈕
    var report = document.querySelector(".report");
    var report_btn = document.querySelectorAll(".report_btn");
    var close_btn = document.querySelector(".close_btn");
    var report_submit_btn = document.querySelector("#report_submit");
    var whosreport = ""; //誰被檢舉
    
    // reportfn();
    // function reportfn(){
        
        
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
    
    
        for(let i=0 ; i<report_btn.length ; i++){
            report_btn[i].addEventListener("click",function(){
                
                whosreport = this.parentNode;
                console.log(whosreport);
                
                let j =0;
                while(j<report_btn.length){
                    report_btn[j].style.pointerEvents = "none";
                    j++;
                }
                report.style.display = "flex"
                document.documentElement.style.height = "100%";
                document.documentElement.style.overflow = "hidden";
    
                
            })
        }
        
        report_submit_btn.addEventListener("click",report_sub);
        function report_sub(){
            whocall = "3";
            callBack3 = function(){
                document.querySelector("#report_submit").click();
            }
            showLoginForm();
            if(!islogin){
                return;
            }
            if(document.querySelector("#report").value ==""){
                return;
            }
            let xhr = new XMLHttpRequest();
            xhr.onload=function (){
                if( xhr.status == 200 ){
                    console.log(`成功`);
                    report.style.display = "none";
                    document.documentElement.style.height = "auto";
                    document.documentElement.style.overflow = "auto";
                    let j =0;
                    
                    while(j<report_btn.length){
                        report_btn[j].style.pointerEvents = "auto";
                        j++;
                    }
                    document.querySelector("#report").value = "";
                    if(xhr.responseText.replace(" ","") ==0){
                        alert("檢舉成功");
                    }
                }else{
                    alert( xhr.status );
                }
            }
            
            //設定好所要連結的程式
            var url = "php/report.php";
            xhr.open("post", url, true);
            xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
            //送出資料
            // console.log(`comment_no=${whosreport.parentNode.querySelector(".message_comment_no").innerText}&report_reason=${document.querySelector("#report").value}`);
            
            var data_info = `comment_no=${whosreport.parentNode.querySelector(".message_comment_no").innerText}&report_reason=${document.querySelector("#report").value}`;
            xhr.send(data_info);
        }


    // }

    
})

// //總共幾頁分頁
    // $pagenums = Math.ceil($(".message_block").length / message_row);
    // for(let i=0;i<$pagenums;i++){
    //     $("#nextpage_btn").before(`<a href="javascript:;" class="pagenums">${i+1}</a>`);
    // }
    // var pagenums = document.querySelectorAll(".pagenums");
    // document.querySelector(".pagenums").classList.add("active");
    // let message_block = document.querySelectorAll(".message_block");
    // let nowpage = document.querySelector(".pagenums");

    // //寫入留言時  增加頁碼 以及改變要隱藏的欄位
    // function pagenumplus(){
    //     $pagenums = Math.ceil($(".message_block").length / message_row);

    //     if( $pagenums != $(".pagination a").length-2){
    //         $("#nextpage_btn").before(`<a href="javascript:;" class="pagenums">${$pagenums}</a>`);
    //     }

    //     pagenums = document.querySelectorAll(".pagenums");
        
    //     for(let i=0;i<pagenums.length;i++){
            
    //         message_block = document.querySelectorAll(".message_block");

    //         for(let i=0;i<message_block.length;i++){
    //             message_block[i].style.display="block"
    //         }
            
    //         for(let i=0;i<((nowpage.innerText-1) * message_row);i++){
    //             message_block[i].style.display="none";
    //         }
    //     }
    // }

    // //點擊頁碼隱藏前面的欄位
    // show_this_page();
    // function show_this_page(){

    //     pagenums = document.querySelectorAll(".pagenums");
    //     for(let i=0;i<pagenums.length;i++){
            
    //         pagenums[i].addEventListener("click",function(){
                
    //             message_block = document.querySelectorAll(".message_block");

    //             for(let i=0;i<message_block.length;i++){
    //                 message_block[i].style.display="block"
    //             }

    //             for(let i=0;i<((this.innerText-1) * message_row);i++){
    //                 message_block[i].style.display="none";
    //             }

    //             for(let j=0; j<pagenums.length;j++){
    //                 pagenums[j].classList.remove("active");
    //             }
                
    //             this.classList.add("active");
    //             nowpage = this;
    //         })
    //     }
    // }

    // //點擊左右換頁 如果pagenums.length跟 active的innerText一樣 那就是到底了
    // let prev_btn = document.querySelector("#prevpage_btn"),
    //     next_btn = document.querySelector("#nextpage_btn");

    //     prev_btn.addEventListener("click",function(){
    //         for(let j=0; j<pagenums.length;j++){
    //             pagenums[j].classList.remove("active");
    //         }
    //         let i = nowpage.innerText-2;
    //         if(i<0){
    //             i=0
    //         }
    //         pagenums[i].classList.add("active");
    //         nowpage = pagenums[i];
            

    //         message_block = document.querySelectorAll(".message_block");

    //         for(let i=0;i<message_block.length;i++){
    //             message_block[i].style.display="block"
    //         }

    //         for(let i=0;i<((nowpage.innerText - 1) * message_row);i++){
    //             message_block[i].style.display="none";
    //         }

    //     })

    //     next_btn.addEventListener("click",function(){
    //         for(let j=0; j<pagenums.length;j++){
    //             pagenums[j].classList.remove("active");
    //         }
    //         let i = nowpage.innerText;
    //         if(i == pagenums.length){
    //             i=pagenums.length-1;
    //         }
    //         pagenums[i].classList.add("active");
    //         nowpage = pagenums[i];
            

    //         message_block = document.querySelectorAll(".message_block");

    //         for(let i=0;i<message_block.length;i++){
    //             message_block[i].style.display="block"
    //         }

    //         for(let i=0;i<((nowpage.innerText - 1) * message_row);i++){
    //             message_block[i].style.display="none";
    //         }

    //     })
    
