function $id(id) {
  return document.getElementById(id);
}

function showLoginForm() {
  //檢查登入bar面版上 spanLogin 的字是登入或登出
  //如果是登入，就顯示登入用的燈箱(lightBox)
  //如果是登出
  //將登入bar面版上，登入者資料清空
  //spanLogin的字改成登入
  //將頁面上的使用者資料清掉
  var islogin = false;
  if (!islogin) {
      $id("passwordLightBox").style.display = "none";
      $id("lightBox").style.display = "block";
      
  } else {
    //................登出時，除了處理前端頁面，也要回server端清session

    //......................................
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
      if (xhr.status == 200) {
        islogin = true;
        $id("mem_name").innerHTML = "&nbsp";
        // $id("spanLogin").innerHTML = "登入";
        spanLogin[i].innerHTML = "登入";
      } else {
        alert(xhr.status);
      }
    };
    xhr.open("get", "ajaxLogout.php", true);
    xhr.send(null);
    //......................................
  }
} //showLoginForm

function sendForm() {
  //=====使用Ajax 回server端,取回登入者姓名, 放到頁面上
  //..........................................................
  var xhr = new XMLHttpRequest();

  xhr.onload = function() {
    if (xhr.status == 200) {
      if (xhr.responseText == "error") {
        alert("帳密錯誤");
      } else {
        //登入成功
        $id("mem_name").innerHTML = xhr.responseText;
        //將登入表單上的資料清空，並隱藏燈箱
        $id("lightBox").style.display = "none";
        $id("mem_id").value = "";
        $id("mem_psw").value = "";
        // $id("spanLogin").innerHTML = "登出";
        console.log(spanLogin[i]);
        spanLogin[i].innerHTML = "登出";
      }
    } else {
      alert(xhr.status);
    }
  };

  xhr.open("post", "login.php", true);
  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
  var data_info = `mem_id=${$id("mem_id").value}&mem_psw=${$id("mem_psw").value}`;
  xhr.send(data_info);
  //..........................................................
}

function forgetPassword(){
  $id("lightBox").style.display = "none";
  $id("passwordLightBox").style.display = "block";
  $id("rebtnLogin").onclick = showLoginForm;
}

function register(){
  $id("lightBox").style.display = "none";
  $id("registerLightBox").style.display = "block";
}

function cancelLogin() {
  //將登入表單上的資料清空，並將燈箱隱藏起來
  $id("lightBox").style.display = "none";
  $id("passwordLightBox").style.display = "none";
  $id("registerLightBox").style.display = "none";
  $id("mem_id").value = "";
  $id("mem_psw").value = "";
}

function init() {
  //===設定spanLogin.onclick 事件處理程序是 showLoginForm
spanLogin = document.getElementsByClassName("spanLogin" );
for(i=0;i<spanLogin.length;i++){
  spanLogin[i].onclick = showLoginForm;
}
  // $id("spanLogin").onclick = showLoginForm;

  //===設定btnLogin.onclick 事件處理程序是 sendForm
  $id("btnLogin").onclick = sendForm;

  $id("forget_password").onclick = forgetPassword;

  $id("register").onclick = register;

  //===設定btnLoginCancel.onclick 事件處理程序是 cancelLogin
  // $id("btnLoginCancel").onclick = cancelLogin;
var btnLoginCancel = document.getElementsByClassName("btnLoginCancel" );
var k;
for(k=0;k<btnLoginCancel.length;k++){
  btnLoginCancel[k].onclick = cancelLogin;
}
} //window.onload

window.onload = init;
