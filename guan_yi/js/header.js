window.addEventListener("load",function(){
    let burger = document.querySelector(".burger");
    let menubox = document.querySelector(".menubox");
    let menuclose = document.querySelector("#menuclose");

    burger.addEventListener("click",function(){
        menubox.style.display="block";
        setTimeout(function(){
            menubox.classList.add("menuboxopen");
        },100)
        
    });

    menuclose.addEventListener("click",function(){
        
        menubox.classList.remove("menuboxopen");
        setTimeout(function(){
            menubox.style.display="none";
        },500)
    })
})