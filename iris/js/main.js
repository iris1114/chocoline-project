
console.log('start');

TweenMax.to('.box1',1,{
    x:200,
    y:300,
    width:400,
    repeat:2,  //(-1)一直重複
    delay:1,
    rotation:360,
    scale:2,
    repeatDelay:1,  //會停留一秒
    yoyo:true,     //搭配repeat ／／true 來－－回  回－－－來
});

TweenMax.to('.box2',1,{
    x:200,
    y:300,
    repeat:-1,  //(-1)一直重複
    rotation:140, //會停留一秒
    yoyo:true,     //搭配repeat ／／true 來－－回  回－－－來
    ease:Power0.easeNone,
    transformOrigin:'50% 50%'
});

TweenMax.from('.box3',1,{
    x:200,
});


TweenMax.fromTo('.box4', 1, {
    y: 200  //初始狀態
}, {
    x: 300,
    ease: Power0.easeNone,
});


TweenMax.staggerFromTo('.same', 1, {
    x: 100
}, {
    x: 300,
},1);


// function alerts() {
//     alert('good');
// }


// 連續動畫

var tl =new TimelineMax({
    repeat: 2,
    yoyo: true,
    // onComplete:alerts,
});
    
 
 //寫法
 tl.to('.box6', 1, {
     x: 300
 }).to('.box7', 1, {
     y: 300
 }).to('.box8', 1 , {
     x:100,
     y: 100
 })


 console.log('ok');





// scrollmagic

//建場景  共用
var controller = new ScrollMagic.Controller();


//動畫1
var tl = new TimelineMax({
  repeat: 2,
  yoyo: true,
//    onComplete: alerts
});

tl.to('.box9', 1, {
   x: 300
}).to('.box10', 1, {
   y: 300
}).to('.box11', 1 , {
   x:100,
   y: 100
})


//觸發事件
var secen_01 = new ScrollMagic.Scene({
   triggerElement:'#keypoint',//觸發點
   duration:200,//結束點
//    reverse:true, 
   offset:1200,
//    triggerHook: 0,

}).setTween(tl)//tween 動畫
.addIndicators() //觸發指標
.addTo(controller) //回到場景

 
 //動畫2  （增加css）

 var secen_02 = new ScrollMagic.Scene({
    triggerElement:'#keypoint01',
 
 }).setClassToggle('.text-font','add') //(選擇器 , classname)
 .addIndicators()
 .addTo(controller)



// 動畫3  （ 增加css＋動畫） 

 var animation_02 = TweenMax.to('.textfont' , 1 , {
    y: 600,
    ease: Bounce.easeOut 
})


var secen_02 = new ScrollMagic.Scene({
    triggerElement:'#keypoint02',
    // duration: 800,
    // reverse:true,
    // triggerHook: 0,
    // offset: 200 
}).setClassToggle('.section_02','on').setTween(animation_02)
.addIndicators()
.addTo(controller)


// -------setPin 可結合3段動畫TimelineMax()

var tlts = new TimelineMax();

    tlts.add(TweenMax.to('.scrollbox_01', 1, {
        x: 200,
    }));
    tlts.add(TweenMax.to('.scrollbox_02', 1, {
        x: 300,
    }));
    tlts.add(TweenMax.to('.scrollbox_03', 1, {
        x: 400,
    }));


    var scene_s = new ScrollMagic.Scene({
        triggerElement: "#trigger_05",
        duration: '300%',  //（3個動畫）
        //畫面最上緣
        triggerHook: 0,
        //只出現一次
        // reverse: false,
    })
    .setPin('.section_08')  //把整個場景定住
    .setTween(tlts)
    .addIndicators()
    .addTo(controller);


    // wrapper plugin
    //css mask


    




