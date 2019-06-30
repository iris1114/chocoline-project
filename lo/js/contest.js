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
                fig.style.color = "#F0ECDD";
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
        console.log(listleft);
        if(listleft < 0){
            listleft += chocowidth;
            chocolist.style.left = `${listleft}px`;
        }
        
    })
    next.addEventListener("click",function(){
        console.log(listleft);
        if(listleft >= (parseInt(getStyle(chocolist,"width")))*-1 + chocowidth*3){
            listleft -= chocowidth;
            chocolist.style.left = `${listleft}px`;
        }
       
    })

    //1200以上刪除第12個角色

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