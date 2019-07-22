window.addEventListener("load",function(){
    let burger = document.querySelector(".burger figure");
    let menubox = document.querySelector(".menubox");
    let menuclose = document.querySelector("#menuclose");

    burger.addEventListener("click",function(){
        menubox.style.display="block";
        setTimeout(function(){
            menubox.classList.add("menuboxopen");
        },100)
        document.body.style.overflowY = "hidden";
    });

    menuclose.addEventListener("click",function(){
        
        menubox.classList.remove("menuboxopen");
        setTimeout(function(){
            menubox.style.display="none";
        },500)
        document.body.style.overflowY = "auto";
    })
})