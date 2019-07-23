let cart = {};

//----------------數量改變時的事件處理器
function change_cart() {
  console.log("123");
  var choco_name = document.getElementById("choco_name").value;
  var final_price_t = document.getElementById("final_price").innerText;
  var final_price_m = document.getElementById("final_price_mobile").innerText;

  var canvas = document.getElementById("thecanvas");
  console.log(canvas);
  var choco_url = canvas.toDataURL("image/png");
  console.log(choco_url);
  // document.getElementById('final_choco').value = choco_url;
  card_url = cnv[0].toDataURL("png");

  console.log(card_url);

  // var final_choco = document.getElementById("final_choco").value;

  let xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      console.log(`成功`);
      console.log(xhr.responseText);
    } else {
      alert(xhr.status);
    }
  };

  let url = "php/custom_cart_update.php";
  xhr.open("post", url, false);
  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");

  xhr.onload = function() {
    console.log(xhr.responseText);
  };

  if (window.innerWidth <= 1200) {
    var data = `custom_name=${choco_name}&custom_price=${final_price_m}&custom_img=${choco_url}&custom_card_img=${card_url}&custom_flavor_no=${choco_flavor_no}&custom_base_no=${choco_base_no}`;
    console.log(data);
  } else {
    var data = `custom_name=${choco_name}&custom_price=${final_price_t}&custom_img=${choco_url}&custom_card_img=${card_url}&custom_flavor_no=${choco_flavor_no}&custom_base_no=${choco_base_no}`;
    console.log(data);
  }

  xhr.send(data);
}

function transform_canvas() {
  html2canvas(document.getElementById("fix"), {
    onrendered: function(canvas) {
      canvas.setAttribute("id", "thecanvas"); //添加属性
      document.body.appendChild(canvas);
      canvas.style.display = "none";
      alert("Hi");

      // uploadImage();
    },
    background: "", //canvas的背景颜色，如果没有设定默认透明
    logging: true, //在console.log()中输出信息
    width: 400, //图片宽
    height: 400, //图片高
    useCORS: true // 【重要】开启跨域配置
  });

  setTimeout(change_cart, 5000);
  // change_cart();
}

function add_cart() {
  let add_cart_btn = document.getElementsByClassName("add_cart_btn"); // 數量的輸入盒

  for (var i = 0; i < add_cart_btn.length; i++) {
    add_cart_btn[i].onclick = function() {
      transform_canvas();
    };
  }
}

window.addEventListener("load", function() {
  add_cart();
});
