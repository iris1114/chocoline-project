whocall = "";
who_collect = "";
who_vote = "";
window.addEventListener("load",function(){
    
    collect_color();
    // let like = document.querySelectorAll(".like_icon");
    function collect_color(){
        //收藏變色
        let i=0;
        like = document.querySelectorAll(".like_icon");
        while(i<like.length){
    
            like[i].addEventListener("click",function(){
                whocall = "2";
                who_collect = this;
                callBack2 = function(){
                    player_sort();
                    who_collect.click();
                }
                showLoginForm();
                if(!islogin){
                    return;
                }

                let wlike = this.querySelector(".wlike"),
                    plike = this.querySelector(".plike"),
                    fig   = this.querySelector("figcaption");
                let contest_no = this.parentNode.querySelector(".player_contest_no").href.split("no=");
                
                if(plike.style.display == "none"){ 
                    wlike.style.display = "none";  //加入收藏
                    plike.style.display = "";
                    fig.style.color = "#F6EED4";

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
                    var data_info = `mem_no=${document.querySelector("#mem_no_hide").innerText}&contest_no=${contest_no[1]}`;
                    xhr.send(data_info);

                }else{
                    plike.style.display = "none"; //取消收藏
                    wlike.style.display = "";
                    fig.style.color = "#592F13";

                    // 將商品從我的收藏移出
                    let xhr = new XMLHttpRequest();
                    xhr.onload=function (){
                        if( xhr.status == 200 ){
                            console.log(`成功`);
                        }else{
                            alert( xhr.status );
                        }
                    }                    

                    let url = "php/delete_favorite.php";
                    xhr.open("post", url, false);
                    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
                    var data_info = `mem_no=${document.querySelector("#mem_no_hide").innerText}&contest_no=${contest_no[1]}`;
                    xhr.send(data_info);

                }
            });
            i++;
        }
    }
    

    //參加取消報名
    let canceljoin = document.querySelector("#canceljoin");
    let ruleintroduce = document.querySelector(".rule_introduce");
    let myCHOCO = document.querySelector(".my_CHOCO");

    canceljoin.addEventListener("click",function(){
        myCHOCO.style.display="none";
        ruleintroduce.style.display="";
    })

    function getStyle(obj,attr){
        return obj.currentStyle?obj.currentStyle[attr]:getComputedStyle(obj,null)[attr];
    }
    let mychoco = document.querySelector(".my_CHOCO");
    let chocolist = mychoco.querySelector(".CHOCO_list");
    let choco = chocolist.querySelectorAll(".CHOCO");
    let chocowidth = parseInt(getStyle(choco[0],"width"));
    let joingame = document.querySelector("#joingame");

    chocolist_block();

    function chocolist_block(){
        //角色列表長度
        choco = chocolist.querySelectorAll(".CHOCO");
        chocowidth = parseInt(getStyle(choco[0],"width"));
    
        window.addEventListener("resize",function(){
            chocolist.style.width = (choco.length * parseInt(getStyle(choco[0],"width"))) + "px";
            chocowidth = parseInt(getStyle(choco[0],"width"));
        })
        
    
        chocolist.style.width = (choco.length * parseInt(getStyle(choco[0],"width"))) + "px";
        joingame.addEventListener("click",function(){
            chocolist.style.width = (choco.length * parseInt(getStyle(choco[0],"width"))) + "px";
        })
    
       
        //角色列表左右按鈕
        let prev = document.querySelector("#prev_btn");
        let next = document.querySelector("#next_btn");
        let listleft = 0;
    
        prev.addEventListener("click",function(){
            if(listleft < 0){
                listleft += chocowidth;
                chocolist.style.left = `${listleft}px`;
            }
        })
        next.addEventListener("click",function(){
            if(listleft >= (parseInt(getStyle(chocolist,"width")))*-1 + chocowidth*3){
                listleft -= chocowidth;
                chocolist.style.left = `${listleft}px`;
            }
        })
    
        //角色點擊標記
        for(let i=0;i<choco.length;i++){
            choco[i].addEventListener("click",function(){
                for(j=0;j<choco.length;j++){
                    choco[j].classList.remove("CHOCO_select");
                }
                this.classList.add("CHOCO_select");           
            })
        }
    }
    


// -----------ajax-----------------------------------------------------

//stage各月分排名    
    let search_month = document.querySelector(".search_month");
    search_month.options[0].selected = true;
    let stage = document.querySelector(".stage");

    search_month.addEventListener("input",change_month);

    function change_month(){
        let month_value = document.querySelector(".search_month").value.split("_");
        // console.log(month_value[0]);
        
        let xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
                // console.log(`成功`);
                stage.innerHTML = xhr.responseText;
                tovote();
            }else{
                alert( xhr.status );
            }
        }
        
        //設定好所要連結的程式
        var url = "php/month_search.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料

        var data_info = `year=${month_value[0]}&month=${month_value[1]}`;
        xhr.send( data_info);
    }

//點擊報名參賽
    joingame.addEventListener("click",function(){
        whocall = "0";
        callBack = function(){
            player_sort();
            joingame.click();
        }
        showLoginForm();
        if(!islogin){
            return;
        }
        let xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
                // console.log(`成功`);
                ruleintroduce.style.display="none";
                myCHOCO.style.display="block";
                // console.log(xhr.responseText);
                
                if(xhr.responseText == " "){
                    document.querySelector(".CHOCO_list").style="width: 100%;display: flex;justify-content: center;align-items: center;"
                    document.querySelector(".CHOCO_list").innerHTML = `<p>尚未擁有CHOCO星人，快去客製吧!<p>`
                }else{
                    document.querySelector(".CHOCO_list").innerHTML = xhr.responseText;
                }
                chocolist_block();
            }else{
                alert( xhr.status );
            }
        }
        
        //設定好所要連結的程式
        var url = "php/search_chocolist.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        
        var data_info = `memId=${document.querySelector("#mem_id_hide").innerText}`;
        xhr.send(data_info);
    })

    
//將被選中角色放進投票區 
    let join_submit = document.querySelector("#join_submit");
    join_submit.addEventListener("click",function(){

        isjoin();
        let xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
                // console.log(`成功`);
                document.querySelector(".player_container").querySelector(".contain").innerHTML = xhr.responseText;
                collect_color();
                tovote();
                addpage();
            }else{
                alert( xhr.status );
            }
        }
        
        //設定好所要連結的程式
        var url = "php/addplayer.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        
        var data_info = `choco_no=${document.querySelector(".CHOCO_no").innerText}&player_sort=${document.querySelector(".player_sort").value}&mem_id=${document.querySelector("#mem_id_hide").innerText}&mem_no=${document.querySelector("#mem_no_hide").innerText}`;
        xhr.send(data_info);
    
    })


    function isjoin(){
        let xhr = new XMLHttpRequest();
        
        xhr.onload=function (){
            if( xhr.status == 200 ){
                // console.log(`成功`);
                console.log(xhr.responseText);
                if(xhr.responseText != " "){
                    alert("本月已參加過選美");
                }
            }else{
                alert( xhr.status );
            }
        }
        //設定好所要連結的程式
        var url = "php/isjoin.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        
        var data_info = `mem_no=${document.querySelector("#mem_no_hide").innerText}`;
        xhr.send(data_info);
    }

//投票區排序
    document.querySelector(".player_sort").options[0].selected = true;
    document.querySelector(".player_sort").addEventListener("input",player_sort)
    
    function player_sort(){
        let xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
                // console.log(`成功`);
                document.querySelector(".player_container").querySelector(".contain").innerHTML = xhr.responseText;
                collect_color();
                tovote();
            }else{
                alert( xhr.status );
            }
        }
        
        //設定好所要連結的程式
        var url = "php/player_sort.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        
        var data_info = `nowpage=${nowpagetext}&player_sort=${document.querySelector(".player_sort").value}&mem_no=${document.querySelector("#mem_no_hide").innerText}`;
        xhr.send(data_info);
    
    }
//投票

    let player_votes = document.querySelectorAll(".player_vote_btn");
    tovote();
    

    function tovote(){
        player_votes = document.querySelectorAll(".player_vote_btn");
        for(let i=0;i<player_votes.length;i++){
            player_votes[i].addEventListener("click",function(){
                whocall = "1";
                who_voted = this;
                callBack1 = function(){
                    who_voted.click();
                    // change_month();
                    // player_sort();
                }
                showLoginForm();
                if(!islogin){
                    return;
                }
                isrest_note();

                voted = this;
                voteno = voted.parentNode.querySelector(".player_contest_no").href.split("no=");
                // console.log(voteno[1]);
                
                let xhr = new XMLHttpRequest();
                xhr.onload=function (){
                    if( xhr.status == 200 ){
                        // console.log(`成功`);
                        // console.log(`${xhr.responseText.replace(" ","")}`);
                        
                        voted.parentNode.querySelector(".votenum").innerHTML =`${xhr.responseText.replace(" ","")}票`;
                    }else{
                        alert( xhr.status );
                    }
                }
                
                //設定好所要連結的程式
                var url = "php/addvotes.php";
                xhr.open("post", url, true);
                xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
                //送出資料
                
                var data_info = `contest_no=${voteno[1]}`;
                xhr.send(data_info);
            })
        }
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
    
                player_sort();
            })
        }
    }



//參賽按鈕點擊事件裡面要包增加pagenum的函式
    function addpage(){
        let xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
                console.log(`成功`);
                document.querySelector(".pagination").innerHTML = xhr.responseText;
                select_page();
                pre_next_page();
            }else{
                alert( xhr.status );
            }
        }
        
        //設定好所要連結的程式
        var url = "php/addpage.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        
        var data_info = ``;
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
            player_sort();
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
            player_sort();
        })
    }


    callBack3 = function(){
        player_sort();
    }

    window.addEventListener("scroll",function(){
        let scrolltop = document.documentElement.scrollTop ||window.pageYOffset || document.body.scrollTop;
        
    //活動介紹動畫
    
        if(scrolltop>890){
            document.querySelector(".bear").classList.add("bearshow");
            document.querySelector(".cake").classList.add("cakeshow");
        }else{
            document.querySelector(".bear").classList.remove("bearshow");
            document.querySelector(".cake").classList.remove("cakeshow");
        }
    
    })
})
