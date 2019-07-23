

// --------------loading---------------

var btn = document.getElementById("front_end_img") //獲取btn元素
console.log(btn);


btn.onclick = function() { //設定當頁面載入時執行
    $('#front_end_img').addClass('fly');
    setTimeout(function() {
        window.location.href = "index/index.php";
    }, 4000);    
    $('')
}


var btn = document.getElementById("back_end_img") //獲取btn元素
console.log(btn);


btn.onclick = function() { //設定當頁面載入時執行
    $('#back_end_img').addClass('fly2');
    setTimeout(function() {
        window.location.href = "back_end/back_end.php";
    }, 4000);    
    $('')
}
