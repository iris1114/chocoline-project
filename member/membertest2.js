 //顯示訊息燈箱
 function showAlert(msg) {
       
  let box=document.getElementById('loginAlert');
  let boxmsg=document.getElementsByClassName('contentMsg');
  boxmsg[0].innerHTML=msg;
  
  setTimeout(function () {
      box.style.opacity = 1;
      box.style.display = "block";
  }, 100);

  //自動關閉訊息
  setTimeout(function () {
      box.style.opacity = 0.1;
      setTimeout(function(){
          box.style.display = "none";
      },100);
  },2000);
}


function reset_style(){
  $('#tab1').css({'background-color':'#d53e23'});
  $('#tab2').css({'background-color':'#d53e23'});
  $('#tab3').css({'background-color':'#d53e23'});
  $('#tab4').css({'background-color':'#d53e23'});
  $('#tb1').removeClass('hide');
  $('#tb2').removeClass('hide');
  $('#tb3').removeClass('hide');
  $('#tb4').removeClass('hide');    
}

function changeTab(e) {

  let obj=e.target;
  // console.log(obj.id);
  // console.log(obj.className);
  reset_style();
  switch (obj.id){
      case 'tab1':
          $('#tab1').css({'background-color':'#002552'});
          $('#tb2').addClass('hide');
          $('#tb3').addClass('hide');
          $('#tb4').addClass('hide');          
          //20181223
          get_product_order();

          break;
      case 'tab2':
          $('#tb1').addClass('hide');
          $('#tab2').css({'background-color':'#002552'});
          $('#tb3').addClass('hide');
          $('#tb4').addClass('hide');
          //20181223
          get_member_join_activity();
          
          break;
      case 'tab3':
          $('#tb1').addClass('hide');
          $('#tb2').addClass('hide');
          $('#tab3').css({'background-color':'#002552'});
          $('#tb4').addClass('hide');
          //20181223
          get_favorite_goods();
          
          break;
      case 'tab4':
          $('#tb1').addClass('hide');
          $('#tb2').addClass('hide');
          $('#tb3').addClass('hide');
          $('#tab4').css({'background-color':'#002552'});
          //20181223
          get_member_coupon();

          break;
  }

}

//20181224
function modify_member(e) {
  let obj=e.target;
  console.log(obj.id);
  console.log(obj.className);
  let input_item='#'+obj.id+'_input';
  console.log(input_item);
  $(input_item).toggleClass('disable_edit');
  if($(input_item).prop("readonly")==true){
      $(input_item).attr("readonly",false);
      // $(input_item).focus();
      // $(input_item).select();
      let index=$(input_item).val();
      $(input_item).val("").focus().val(index);
  }
  else{
      // $(input_item).attr("readonly",true);
      $(".input_edit").attr("readonly",true);
      $(".input_edit").removeClass('disable_edit');
      $(".input_edit").addClass('disable_edit');
      update_member();
  }
 
}


function change_picture() {
var file = document.getElementById('select_head_pic').files[0];

var readFile = new FileReader();
readFile.readAsDataURL(file);
readFile.addEventListener('load', function () {
  var image = document.getElementById('personal_picture');
  image.src = this.result;
  console.log(image.src);
  save_personal_picture();
  document.getElementById('select_head_pic').style.display='none';
});
}




function save_personal_picture() {
let pic = document.getElementById("personal_picture");
document.getElementById('hidden_data').value = pic.src;
var formData = new FormData(document.forms["form_member_pic"]);

var xhr = new XMLHttpRequest();

xhr.open('POST', 'php/save_member_headpic.php', true);

xhr.onreadystatechange = function () {
  if (xhr.readyState == 4) {
      if (xhr.status == 200) {
          let pic_save_path=xhr.responseText;
          // console.log(pic_save_path);
          let img_path=pic_save_path.replace("../", "");
         
          document.getElementById("personal_picture").alt=img_path;
          update_member();
         
      } else {
          alert(xhr.status);
      }
  }
};

xhr.send(formData);

}

function update_member(){
  var xhr = new XMLHttpRequest();
  xhr.onload=function (){
      if( xhr.status == 200 ){
          showAlert(xhr.responseText);
      }else{
          alert( xhr.status );
      }
  }
  let password=document.getElementById("edit_password_input").value;
  let name=document.getElementById("edit_name_input").value;
  let mobile_phone=document.getElementById("edit_mobile_phone_input").value;
  let address=document.getElementById("edit_address_input").value;
  let email=document.getElementById("edit_email_input").value;
  let birthday=document.getElementById("edit_birthday_input").value;
  let image_path=document.getElementById('personal_picture').alt;
  var url = "php/update_member.php?password="+password+"&name="+name+"&mobile_phone="+mobile_phone+"&address="+address+"&email="+email+"&birthday="+birthday+"&image_path="+image_path;
  xhr.open("Get", url, true);
  xhr.send( null );
}


//20181223
function show_or_hide_product_order_detail(e) {

  let obj=e.target;
  // console.log(obj.id);
  // console.log(obj.className);
  var order_id=obj.id.split("_");
  // console.log(order_id[1]);
  var order_content_id="#order_content_"+order_id[1];
  // console.log("order_content_id:"+order_content_id);
  $(order_content_id).toggleClass('hide');
 
}

function delete_member_join_activity(e) {
  let obj=e.target;
  // console.log(obj.id);
  // console.log(obj.className);
  var activity_id=obj.id.split("_");
  console.log(activity_id[1]);

  var xhr = new XMLHttpRequest();
  xhr.onload=function (){
      if( xhr.status == 200 ){
          showAlert(xhr.responseText);
          get_member_join_activity();
      }else{
          alert( xhr.status );
      }
  }
  var url = "php/delete_member_join_activity.php?activity_id=" + activity_id[1];
  console.log(url);
  xhr.open("Get", url, true);
  xhr.send( null );
 
}

function delete_favorite_goods(e) {
  let obj=e.target;
  // console.log(obj.id);
  // console.log(obj.className);
  var product_id=obj.id.split("_");
  console.log(product_id[1]);

  var xhr = new XMLHttpRequest();
      xhr.onload=function (){
          if( xhr.status == 200 ){
              showAlert(xhr.responseText);
              get_favorite_goods();
          }else{
              alert( xhr.status );
          }
      }
      var url = "php/delete_favorite_goods.php?product_id=" + product_id[1];
      console.log(url);
      xhr.open("Get", url, true);
      xhr.send( null );
 
}

function hide_box(e){
  //將登入表單上的資料清空，並將燈箱隱藏起來
  let obj=e.target;
  var order_id=obj.id.split("_");
  var order_detail_id='order_content_' + order_id[1];
  $('#'+order_detail_id).addClass('hide');
}

function initial(){

  let obj= document.getElementsByClassName("tab_btn");
  for(var i=0;i<obj.length;i++){
      obj[i].addEventListener("click",changeTab,false);
  }

  //20181223
  get_member();
  get_product_order();

// $('#tab1').click(function () {
//     $('#show_light_box').slideToggle();
//     $('.show_light_box_bg').slideToggle();
//     $('.close_light_box').slideToggle();
// })

// $('.show_light_box_bg').click(function () {
//     $('#show_light_box').slideToggle();
//     $('.show_light_box_bg').slideToggle();
//     $('.close-show-launch').slideToggle();
// })

// $('.close_light_box').click(function () {
//     $('#show_light_box').slideToggle();
//     $('.show_light_box_bg').slideToggle();
//     $('.close_light_box').slideToggle();
// })


}

window.addEventListener("load",initial,false);
