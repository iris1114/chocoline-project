function $id(id) {
  return document.getElementById(id);
}

let islogin = false;

function showLoginForm() {
  //檢查登入bar面版上 spanLogin 的字是登入或登出
  //如果是登入，就顯示登入用的燈箱(lightBox)
  //如果是登出
  //將登入bar面版上，登入者資料清空r
  //spanLogin的字改成登入
  //將頁面上的使用者資料清掉
  $id("passwordLightBox").style.display = "none";
  if($id('spanLoginText').innerHTML == "登入"){ //未登入
      $id('lightBox').style.display = 'block';
  }else{                                       //登入   
    $id('lightBox').style.display = 'none';
    islogin = true;
  }
} 

var mem_id_hide = "";
var mem_id_hide_mobile = "";
function sendForm() {
  //=====使用Ajax 回server端,取回登入者姓名, 放到頁面上
  //..........................................................
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      if (xhr.responseText == "error") {
        alert("帳密錯誤");
      } else {//登入成功
        alert("登入成功！"); 
        $id("mem_id_hide").innerHTML = xhr.responseText;
        $id("mem_id_hide_mobile").innerHTML = xhr.responseText;
        //將登入表單上的資料清空，並隱藏燈箱
        $id('lightBox').style.display = 'none';
        $id('mem_id').value = '';
        $id('mem_psw').value = '';
        $id('spanLoginText').innerHTML = "登出";
        $id('spanLoginText_mobile').innerHTML = "登出";

//         spanLogin = document.querySelectorAll(".spanLogin img" );
//         for(i=0;i<spanLogin.length;i++){
//           spanLogin[i].src = "../common/image/login/logo_icon.png";
//         }
        document.getElementsByClassName("spanLogin")[0].href = "../member/member.php";
        document.getElementsByClassName("spanLogin")[1].href = "../member/member.php";
        window.location.reload();
      }
    } else {
      alert(xhr.status);
    }
  };

  xhr.open("post", "../common/php/login.php", true);
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

function repassword(){
  var reg = new RegExp(/[a-zA-Z0-9]{6,12}/);
  var psetest = $id("new_mem_psw").value;
  if(!reg.test(psetest)){
    alert("新密碼必須由 6-12位字母、數字");   
    $id("new_mem_psw").value="";
    $id("re_new_mem_psw").value="";
    return; 
  }
  if($id("re_new_mem_psw").value!=$id("new_mem_psw").value){
    alert("密碼錯誤，請再次輸入密碼");
    $id("new_mem_psw").value="";
    $id("re_new_mem_psw").value="";
    return;	
  }

  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      if (xhr.responseText == "error") {
        alert("email錯誤");
      }else {
        alert("修改密碼成功");
        $id("passwordLightBox").style.display = "none";
        $id('lightBox').style.display = 'block';
      }
    }else{
      alert(xhr.status);
      $id("f_mem_id").value="";
        return; 
    }
  }
  // 設定好所要連結的程式
  xhr.open("post", "../common/php/forgetPassword.php", true);
  // xhr.open("post", url, true);
  xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
  // 送出資料
  var data_info = `mem_email=${$id("mem_email").value}&mem_psw=${$id("new_mem_psw").value}`;
  xhr.send( data_info);
}

function openRegisterBox(){
  $id("lightBox").style.display = "none";
  $id("registerLightBox").style.display = "block";
}

function checkAccount() {
  //產生XMLHttpRequest物件
  var xhr = new XMLHttpRequest();
  //偵測帳號是否有重複 function 
  xhr.onload = function(){
    console.log("onload : ", xhr.readyState);
      if( xhr.status == 200){
        document.getElementById("idMsg").innerHTML = xhr.responseText;
      }else{
        alert(xhr.status);
      }
  }
  //設定好所要連結的程式
  var url = "../common/php/checkAccount.php";
  xhr.open("post", url, true);
  xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
  //送出資料
  var data_info = "mem_id=" + document.getElementById("f_mem_id").value;
  xhr.send( data_info);
}

function validateEmail(email) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

function register() {
  var emailStr = $id("f_mem_email").value;
  if(!validateEmail(emailStr)) {
    alert('email格式錯誤');
    return;
  } 

  var reg = new RegExp(/[a-zA-Z0-9]{6,12}/);
  var psetest = $id("f_mem_psw").value;
  if(!reg.test(psetest)){
    alert("新密碼必須由 6-12位字母、數字");
    $id("f_mem_psw").value="";
    $id("f_re_mem_psw").value="";
    return;	
  }
  if($id("f_re_mem_psw").value!=$id("f_mem_psw").value){
    alert("密碼錯誤，請再次輸入密碼");
    $id("f_mem_psw").value="";
    $id("f_re_mem_psw").value="";
    return;	
  }

  //產生XMLHttpRequest物件
  var xhr = new XMLHttpRequest();
  //註冊callback function 
  xhr.onload = function(){
    console.log("onload : ", xhr.readyState);
    if( xhr.status == 200){
      if(xhr.responseText == "error"){
        alert("輸入錯誤");
      }else{
        alert("註冊成功");
        $id("registerLightBox").style.display = "none";
        $id('lightBox').style.display = 'block';
      }
    }else{
      alert(xhr.status);
    }
  }
  //設定好所要連結的程式
  var url = "../common/php/register.php";
  xhr.open("post", url, true);
  xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
  //送出資料
  var data_info = "mem_id=" + document.getElementById("f_mem_id").value + "&" + "mem_email=" + document.getElementById("f_mem_email").value + "&" + "mem_psw=" + document.getElementById("f_mem_psw").value;
  console.log(document.getElementById("f_mem_id").value);
  console.log(data_info);
  // var data_info = `mem_id=${$id("f_mem_id").value}&mem_email=${$id("f_mem_email").value}&mem_psw=${$id("f_mem_psw").value}`;
  xhr.send( data_info);
}

function cancelLogin() {
  //將登入表單上的資料清空，並將燈箱隱藏起來
  $id("lightBox").style.display = "none";
  $id("passwordLightBox").style.display = "none";
  $id("registerLightBox").style.display = "none";
  // $id('memId').value = '';
  // $id('memPsw').value = '';
}

function init() {
//檢查是否已登入, 如果已登入，取回登入者的資料
var xhr = new XMLHttpRequest();
xhr.onload = function(){
  if( xhr.responseText != "notLogin"){ //已登入
    islogin = true;
    document.getElementById("spanLoginText").innerHTML = "登出";
    document.getElementById("spanLoginText_mobile").innerHTML = "登出";
//     spanLogin = document.querySelectorAll(".spanLogin img" );
//     for(i=0;i<spanLogin.length;i++){
//       spanLogin[i].src = "../common/image/login/logo_icon.png";
//     }
    document.getElementsByClassName("spanLogin")[0].href = "../member/member.php";
    document.getElementsByClassName("spanLogin")[1].href = "../member/member.php";
  }
}
xhr.open("get", "../common/php/getLoginInfo.php",true);
xhr.send(null);

//===設定spanLogin.onclick 事件處理程序是 showLoginForm
spanLogin = document.getElementsByClassName("spanLogin" );
for(i=0;i<spanLogin.length;i++){
  spanLogin[i].onclick = showLoginForm;
}

//===設定btnLogin.onclick 事件處理程序是 sendForm
$id("btnLogin").onclick = sendForm;

$id("forget_password").onclick = forgetPassword;
$id("repassword").onclick = repassword;

$id("register").onclick = openRegisterBox;
$id("btnCheckId").onclick = checkAccount;
$id("register_btn").onclick = register;

//===設定btnLoginCancel.onclick 事件處理程序是 cancelLogin
  var btnLoginCancel = document.getElementsByClassName("btnLoginCancel" );
  var k;
  for(k=0;k<btnLoginCancel.length;k++){
    btnLoginCancel[k].onclick = cancelLogin;
  }
}

window.addEventListener("load",init,false);
