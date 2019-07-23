window.addEventListener("load",function(){

    let sub_btn = document.querySelectorAll(".btn-info");
    for(let i=0; i<sub_btn.length;i++){
        sub_btn[i].addEventListener("click",function(){
        let whoclick = this;

        let xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
                // console.log(`成功`);
                console.log(xhr.responseText);
                window.location.reload();
            }else{
                alert( xhr.status );
            }
        }
        
        //設定好所要連結的程式
        var url = "php/comment_update.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        
        var data_info = `report_no=${whoclick.parentNode.parentNode.querySelector(".report_no").innerText}&comment_no=${whoclick.parentNode.parentNode.querySelector(".comment_no").innerText}&todo=${whoclick.innerText}`;
        xhr.send(data_info);



        })

    }

})