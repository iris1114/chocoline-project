// TweenMax.to('#cloud',5,{
//     x:50,
//     repeat:-1,  //(-1)一直重複

// });






var controller = new ScrollMagic.Controller();
var tl = new TimelineMax({
    // repeat: 1,
    // yoyo: true,
  //    onComplete: alerts
  });
  
  tl.to('.choco_black', 60, {
     y: 300,
  }).to('.choco_black', 120, {
     x: 500,
     y: 420,
  }).to('.choco_black', 140 , {
    y:800,
    x:600,
  }).to('.choco_black', 140 , {
    x:700,
  })

  var secen_01 = new ScrollMagic.Scene({
    triggerElement:'#keypoint',//觸發點
    duration:1200,//結束點
 //    reverse:true, 
    // offset:50,
    triggerHook: 0,
 
 }).setTween(tl)//tween 動畫
 .addIndicators() //觸發指標
 .addTo(controller) //回到場景
 