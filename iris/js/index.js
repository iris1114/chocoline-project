
console.log("start");



window.addEventListener("load", function () {
    let shapes = document.getElementsByClassName("shape");
    let shapePosArr = ["shapePos0", "shapePos1", "shapePos2", "shapePos3", "shapePos4"]
    document.getElementById("toRight").onclick = function () {
      for (let i = 0; i < shapePosArr.length; i++) {
        shapes[i].classList.remove(shapePosArr[i])
      }
      shapePosArr.push(shapePosArr.shift());
      for (let i = 0; i < shapePosArr.length; i++) {
        shapes[i].classList.add(shapePosArr[i])
      }
    };

    document.getElementById("toLeft").onclick = function () {
      for (let i = 0; i < shapePosArr.length; i++) {
        shapes[i].classList.remove(shapePosArr[i])
      }
      shapePosArr.unshift(shapePosArr.pop());
      for (let i = 0; i < shapePosArr.length; i++) {
        shapes[i].classList.add(shapePosArr[i])
      }
    };
  })



// -----------------card-------------
TweenMax.to('.card',2,{
    y:-10,
    repeat:-1,  
    yoyo:true,    
});

TweenMax.to('.shadow',2,{
    y:-10,
    repeat:-1,  
    yoyo:true,
    scale:0.8,    
});


// -----------------love-------------
var tl =new TimelineMax({
    repeat:1,
});
     
 tl.to('.love_s', 0.5, {
     y: -10,
     scale:1.2,
     opacity:0.5,
     
 }).to('.love_m', 0.8, {
     y: -10,
     scale:1.2,
     opacity:0.6,
 }).to('.love_l', 0.5, {
     y: -10,
     scale:1.2,
     opacity:0.8,
 }).to('.love_s', 0.5, {
    y: -20,
    scale:1.2,
    opacity:0.7,  
}).to('.love_m', 0.5, {
    y: -20,
    scale:1.2,
    opacity:0.3,
    
}).to('.love_l', 0.5, {
    y: -30,
    scale:1.2,
    opacity:0.3,  
});



// -----------------roles-------------//


var roles =new TimelineMax({
    repeat:-1,
    ease:Power0.easeNone,

});
     
roles.to('.roles', 2, {
     y: -5,
     x:10    
 }).to('.roles', 2, {
    y: 10,
     x: -5,   
 }).to('.roles', 2, {
    y: -5,
    x:-10,
}).to('.roles', 2, {
    y: 5,
     x: -5, 
 })



var roles_shadow =new TimelineMax({
    repeat:-1,
    ease:Power0.easeNone,

});
     
roles_shadow.to('.roles_shadow', 2, {
     y: -5,
     x:10,
    scale:0.9,     
 }).to('.roles_shadow', 2, {
    y: 10,
     x: -5,   
     scale:1, 
 }).to('.roles_shadow', 2, {
    y: -5,
    x:-10,
    scale:0.9, 
}).to('.roles_shadow', 2, {
    y: 5,
     x: -5, 
     scale:1, 
 })







 TweenMax.to('.qa_box',2,{
    y:-20,
    repeat:-1,  
    yoyo:true,    
});












// const choco ={
//     curviness:1.25,
//     autoRotate:true,
//     value:[
//         {x:100,y:200}
//     ]
// }

// var tween  =new TimelineLite

// tween.add(
//     TweenLite.to
// )





// var controller = new ScrollMagic.Controller();
// var tl = new TimelineMax({
//     // repeat: 1,
//     // yoyo: true,
//   //    onComplete: alerts
//   });
  
//   tl.to('.choco_black', 60, {
//      y: 300,
//   }).to('.choco_black', 120, {
//      x: 500,
//      y: 420,
//   }).to('.choco_black', 140 , {
//     y:800,
//     x:600,
//   }).to('.choco_black', 140 , {
//     x:700,
//   })

//   var scene_01 = new ScrollMagic.Scene({
//     triggerElement:'#keypoint',//觸發點
//     duration:1200,//結束點
//  //    reverse:true, 
//     // offset:50,
//     triggerHook: 0,
 
//  }).setTween(tl)//tween 動畫
//  .addIndicators() //觸發指標
//  .addTo(controller)//回到場景
 












// -----------taipei car ---------------//
var tl = new TimelineMax({
    repeat: -1,
 });
 
 tl.to('.car_taipai', 6, {
    x: "-708%",
    ease: Power0.easeNone,
 }).to('.car_taipai', 3, {
    x: "-900%",
    y: "-25%",
    ease: Power0.easeNone,
 }).to('.car_taipai', 2, {
    x: "-1000%",
    y: "-60%",
    ease: Power0.easeNone,
}).to('.car_taipai', 1.5, {
    x: "-1040%",
    y: "-90%",
    scale:"0.7",
    ease: Power0.easeNone,
}).to('.car_taipai', 2.5, {
    x: "-945%",
    y: "-160%",
    ease: Power0.easeNone,
}).to('.car_taipai', 2.5, {
    x: "-1080%",
    y: "-180%",
    ease: Power0.easeNone,
}).to('.car_taipai', 1.5, {
    x: "-1300%",
    y: "-190%",
    ease: Power0.easeNone,
});

// -----------taoyuan car ---------------//
var tl = new TimelineMax({
    delay: 3,
    repeat: -1,
 });
 

 tl.to('.car_taoyuan', 6, {
    x: "-708%",
    ease: Power0.easeNone,
 }).to('.car_taoyuan', 3, {
    x: "-900%",
    y: "-25%",
    ease: Power0.easeNone,
 }).to('.car_taoyuan', 2, {
    x: "-1000%",
    y: "-60%",
    ease: Power0.easeNone,
}).to('.car_taoyuan', 1.5, {
    x: "-1040%",
    y: "-90%",
    scale:"0.7",
    ease: Power0.easeNone,
}).to('.car_taoyuan', 2.5, {
    x: "-945%",
    y: "-160%",
    ease: Power0.easeNone,
}).to('.car_taoyuan', 2.5, {
    x: "-1080%",
    y: "-180%",
    ease: Power0.easeNone,
}).to('.car_taoyuan', 1.5, {
    x: "-1300%",
    y: "-190%",
    ease: Power0.easeNone,
});


// -----------taichung car ---------------//

var tl = new TimelineMax({
    delay: 6,
    repeat: -1,
 });
 
 tl.to('.car_taichung', 6, {
    x: "-708%",
    ease: Power0.easeNone,
 }).to('.car_taichung', 3, {
    x: "-900%",
    y: "-25%",
    ease: Power0.easeNone,
 }).to('.car_taichung', 2, {
    x: "-1000%",
    y: "-60%",
    ease: Power0.easeNone,
}).to('.car_taichung', 1.5, {
    x: "-1040%",
    y: "-100%",
    scale:"0.7",
    ease: Power0.easeNone,
}).to('.car_taichung', 2.5, {
    x: "-945%",
    y: "-170%",
    ease: Power0.easeNone,
}).to('.car_taichung', 2.5, {
    x: "-1080%",
    y: "-190%",
    ease: Power0.easeNone,
}).to('.car_taichung', 1.5, {
    x: "-1300%",
    y: "-200%",
    ease: Power0.easeNone,
});



// -----------hualien car ---------------//

var tl = new TimelineMax({
    delay: 9,
    repeat: -1,
 });
 
 tl.to('.car_hualien', 6, {
    x: "-708%",
    ease: Power0.easeNone,
 }).to('.car_hualien', 3, {
    x: "-900%",
    y: "-25%",
    ease: Power0.easeNone,
 }).to('.car_hualien', 2, {
    x: "-1000%",
    y: "-60%",
    ease: Power0.easeNone,
}).to('.car_hualien', 1.5, {
    x: "-1040%",
    y: "-100%",
    scale:"0.7",
    ease: Power0.easeNone,
}).to('.car_hualien', 2.5, {
    x: "-945%",
    y: "-170%",
    ease: Power0.easeNone,
}).to('.car_hualien', 2.5, {
    x: "-1080%",
    y: "-190%",
    ease: Power0.easeNone,
}).to('.car_hualien', 1.5, {
    x: "-1300%",
    y: "-200%",
    ease: Power0.easeNone,
});

// -----------kaosiong car ---------------//


var tl = new TimelineMax({
    delay: 12,
    repeat: -1,
 });
 
 tl.to('.car_kaohsiung', 6, {
    x: "-708%",
    ease: Power0.easeNone,
 }).to('.car_kaohsiung', 3, {
    x: "-900%",
    y: "-25%",
    ease: Power0.easeNone,
 }).to('.car_kaohsiung', 2, {
    x: "-1000%",
    y: "-60%",
    ease: Power0.easeNone,
}).to('.car_kaohsiung', 1.5, {
    x: "-1040%",
    y: "-110%",
    scale:"0.7",
    ease: Power0.easeNone,
}).to('.car_kaohsiung', 2.5, {
    x: "-945%",
    y: "-185%",
    ease: Power0.easeNone,
}).to('.car_kaohsiung', 2.5, {
    x: "-1080%",
    y: "-205%",
    ease: Power0.easeNone,
}).to('.car_kaohsiung', 1.5, {
    x: "-1300%",
    y: "-210%",
    ease: Power0.easeNone,
});
