
  function $id(id) {
    return document.getElementById(id);
  }      


// 點擊向左按鈕移動
function getStyle(obj,attr){
    return obj.currentStyle?obj.currentStyle[attr]:getComputedStyle(obj,null)[attr];
}


  let n = 0;

  function keyword_move_right(){
    console.log(n);
    var keyword_wrap =document.querySelector("#keyword_wrap");
    var keyword_space =document.querySelector("#keyword_space");
    var keywords =  document.querySelectorAll(".keyword");
  
    margin_left = parseInt(keyword_wrap.style.marginLeft.replace("px",""));
    keyword_space_width = parseInt(keyword_space.style.width.replace("px",""));

// 計算keyword外層寬度
    keyword_wrap_width=0;   
    for(var i=0; i<keywords.length;i++){
      keyword_wrap_width += parseInt(keywords[i].style.width.replace("px",""));
    
    }
    if(n<keywords.length-1){
      keywords_width = parseInt(getStyle(keywords[n],"width"))
      margin_left -= keywords_width;
      console.log(margin_left);
      keyword_wrap.style.marginLeft = margin_left + "px";
      n++;
    }

  }

  function keyword_move_left(){

    var keyword_wrap =document.querySelector("#keyword_wrap");
    var keyword_space =document.querySelector("#keyword_space");
    var keywords =  document.querySelectorAll(".keyword");
  
    margin_left = parseInt(keyword_wrap.style.marginLeft.replace("px",""));
    keyword_space_width = parseInt(keyword_space.style.width.replace("px",""));
    keywords_width = parseInt(getStyle(keywords[n],"width"))
    
  // 計算keyword外層寬度
    keyword_wrap_width=0;   
    for(var i=0; i<keywords.length;i++){
      keyword_wrap_width += parseInt(keywords[i].style.width.replace("px",""));
    
    }
   
    if(n>0){
      keywords_width = parseInt(getStyle(keywords[n-1],"width"))
      margin_left += keywords_width;
      console.log(margin_left);
      keyword_wrap.style.marginLeft = margin_left + "px";
      n--
    }

    
  }
  

  function add_keyword(){
    var keyword = this.innerText;
    let robot_message = $id("robot_message");
    let message_ask_sample = document.querySelector("#message_ask_sample");
    let leave_message = document.querySelector("#leave_message");
    let new_ask = message_ask_sample.cloneNode(true);
    
    new_ask.style.display = "";
    new_ask.innerText = keyword;
    new_ask.id ="";
    robot_message.appendChild(new_ask);
    // move the scroll
    
    let new_answer = message_answer_sample.cloneNode(true);
    new_answer.innerText = "你的問題好棒棒，但我不想回答你!";
    new_answer.id ="";
    robot_message.appendChild(new_answer);

    // move the scroll
    robot_message.scrollTop = robot_message.scrollHeight - robot_message.clientHeight;
    leave_message.value ="";
}

  function add_message() {
    let robot_message = $id("robot_message");
    let message_ask_sample = document.querySelector("#message_ask_sample");
    let leave_message = document.querySelector("#leave_message");

    let new_ask = message_ask_sample.cloneNode(true);
    new_ask.style.display = "";
    new_ask.innerText = leave_message.value;
    new_ask.id ="";
    robot_message.appendChild(new_ask);
   
    let new_answer = message_answer_sample.cloneNode(true);
    new_answer.innerText = "你的問題好棒棒，但我不想回答你!";
    new_answer.id ="";
    robot_message.appendChild(new_answer);

    // move the scroll
    robot_message.scrollTop = robot_message.scrollHeight - robot_message.clientHeight;
    leave_message.value ="";
  
  }

  window.addEventListener("load", function() {

  $id("message_submit").onclick =function(){
    if($id("leave_message").value!=""){
      add_message();
    }
  }


  console.log(leave_message.value);
    var keyword = document.getElementsByClassName("keyword");
    for (var i = 0; i < keyword.length; i++) {
      keyword[i].onclick = add_keyword;
    }


    $id("robot_prev_button").onclick = keyword_move_left;

    $id("robot_next_button").onclick = keyword_move_right;

  });
function returnR() {
        return false;
      }
