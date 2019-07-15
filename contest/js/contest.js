window.addEventListener("load",function(){

    //收藏變色
    let like  = document.querySelectorAll(".like_icon");
    let i=0;

    while(i<like.length){

        like[i].addEventListener("click",function(){
            let wlike = this.querySelector(".wlike"),
                plike = this.querySelector(".plike"),
                fig   = this.querySelector("figcaption");

            if(plike.style.display == "none"){
                wlike.style.display = "none";
                plike.style.display = "";
                fig.style.color = "#F6EED4";
            }else{
                plike.style.display = "none";
                wlike.style.display = "";
                fig.style.color = "#592F13";
            }
        })
        i++;
    }

    //參加取消報名
    let canceljoin = document.querySelector("#canceljoin");
    let ruleintroduce = document.querySelector(".rule_introduce");
    let myCHOCO = document.querySelector(".my_CHOCO");

    canceljoin.addEventListener("click",function(){
        myCHOCO.style.display="none";
        ruleintroduce.style.display="";
    })

    //角色列表長度
    let joingame = document.querySelector("#joingame");
    let mychoco = document.querySelector(".my_CHOCO");
    let chocolist = mychoco.querySelector(".CHOCO_list");
    let choco = chocolist.querySelectorAll(".CHOCO");
    let chocowidth = parseInt(getStyle(choco[0],"width"));

    function getStyle(obj,attr){
        return obj.currentStyle?obj.currentStyle[attr]:getComputedStyle(obj,null)[attr];
    }

    chocolist.style.width = (choco.length * parseInt(getStyle(choco[0],"width"))) + "px";
    joingame.addEventListener("click",function(){
        ruleintroduce.style.display="none";
        myCHOCO.style.display="block";
        chocolist.style.width = (choco.length * parseInt(getStyle(choco[0],"width"))) + "px";
    })

    window.addEventListener("resize",function(){
        chocolist.style.width = (choco.length * parseInt(getStyle(choco[0],"width"))) + "px";

        chocowidth = parseInt(getStyle(choco[0],"width"));


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


    var pagenums = document.querySelectorAll(".pagenums");

    //參賽按鈕點擊事件裡面要包增加pagenum的函式

    $pagenums = Math.ceil($(".player").length / 18);
    for(let i=0;i<$pagenums;i++){
        $("#nextpage_btn").before(`<a href="javascript:;" class="pagenums">${i+1}</a>`);
    }

    pagenum();
    function pagenum(){
        $pagenums = Math.ceil($(".player").length / 18);
        if( $pagenums == $(".pagination a").length-2){
            return;
        }
        
        $("#nextpage_btn").before(`<a href="javascript:;" class="pagenums">${$pagenums}</a>`);
        pagenums = document.querySelectorAll(".pagenums");
        console.log(pagenums.length);
        
        for(let i=0;i<pagenums.length;i++){
            pagenums[i].addEventListener("click",function(){
                
                let player = document.querySelectorAll(".player");
                // console.log(this);
                
                for(let i=0;i<player.length;i++){
                    player[i].style.display="block"
                }
    
                for(let j=0; j<pagenums.length;j++){
                    pagenums[j].classList.remove("active");
                }
    
                this.classList.add("active");
                // console.log(this.innerText);
                for(let i=0;i<((this.innerText-1) * 18);i++){
                    player[i].style.display="none";
                    
                }
            })
        }
    }
})