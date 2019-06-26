window.addEventListener("load",function(){
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

    window.addEventListener("scroll",function(){
        let scrolltop = document.documentElement.scrollTop ||window.pageYOffset || document.body.scrollTop;
        
        console.log(scrolltop);
        
        if(scrolltop>890){
            document.querySelector(".bear").classList.add("bearshow");
            document.querySelector(".cake").classList.add("cakeshow");
        }else{
            document.querySelector(".bear").classList.remove("bearshow");
            document.querySelector(".cake").classList.remove("cakeshow");
        }

    })
})
