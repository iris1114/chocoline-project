function $id(id) {
    return document.getElementById(id);
}

function showLoginForm() {
    $id('lightBox').style.display = 'block';
    $id("btnLogin").onclick = sendForm;
}

function sendForm() {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
      if (xhr.status == 200) {
        if (xhr.responseText == "error") {
          alert("帳密錯誤");
        } else {//登入成功
          alert("登入成功！");
          window.location.href = "../back_end/back_end.php";
        }
      } else {
        alert(xhr.status);
      }
    };
  
    xhr.open("post", "php/back_end_login.php", true);
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    var data_info = `admin_id=${$id("admin_id").value}&admin_psw=${$id("admin_psw").value}`;
    xhr.send(data_info);
    //..........................................................
  }
  

window.addEventListener("load",showLoginForm,false);