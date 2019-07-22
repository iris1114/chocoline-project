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
TweenMax.to('.card', 2, {
    y: -10,
    repeat: -1,
    yoyo: true,
});

TweenMax.to('.shadow', 2, {
    y: -10,
    repeat: -1,
    yoyo: true,
    scale: 0.8,
});


// -----------------love-------------
var tl = new TimelineMax({
    repeat: 1,
});

tl.to('.love_s', 0.5, {
    y: -10,
    scale: 1.2,
    opacity: 0.5,

}).to('.love_m', 0.8, {
    y: -10,
    scale: 1.2,
    opacity: 0.6,
}).to('.love_l', 0.5, {
    y: -10,
    scale: 1.2,
    opacity: 0.8,
}).to('.love_s', 0.5, {
    y: -20,
    scale: 1.2,
    opacity: 0.7,
}).to('.love_m', 0.5, {
    y: -20,
    scale: 1.2,
    opacity: 0.3,

}).to('.love_l', 0.5, {
    y: -30,
    scale: 1.2,
    opacity: 0.3,
});



// -----------------roles-------------//


var roles = new TimelineMax({
    repeat: -1,
    ease: Power0.easeNone,

});

roles.to('.roles', 2, {
    y: -5,
    x: 10
}).to('.roles', 2, {
    y: 10,
    x: -5,
}).to('.roles', 2, {
    y: -5,
    x: -10,
}).to('.roles', 2, {
    y: 5,
    x: -5,
})

// -----------------roles shadows-------------//


var roles_shadow = new TimelineMax({
    repeat: -1,
    ease: Power0.easeNone,

});

roles_shadow.to('.roles_shadow', 2, {
    y: -5,
    x: 10,
    scale: 0.9,
}).to('.roles_shadow', 2, {
    y: 10,
    x: -5,
    scale: 1,
}).to('.roles_shadow', 2, {
    y: -5,
    x: -10,
    scale: 0.9,
}).to('.roles_shadow', 2, {
    y: 5,
    x: -5,
    scale: 1,
})

// -----------------qa box-------------//

TweenMax.to('.qa_box', 2, {
    y: -15,
    repeat: -1,
    yoyo: true,
});


// ----------------.game_things-------------//

TweenMax.to('.game_things', 2, {
    y: 20,

    repeat: -1,
    yoyo: true,
});

// ----------------ballon-------------//

TweenMax.to('.ballon', 6, {
    y: 30,
    x: 80,

    repeat: -1,
    yoyo: true,

});

// ----------------ballon-------------//

TweenMax.to('.point', 2, {
    y: -2,


    repeat: -1,
    yoyo: true,

});



// --------------river_move custom-------------//

TweenMax.to('.river_move', 2, {
    x: 30,
    repeat: -1,
    yoyo: true,
    scale: 0.99,
    opacity: 0.5,
});




var tl = new TimelineMax({
    repeat: -1,
});

tl.to('.river_move_custom', 1, {
    y: 10,
    opacity: 0.8,

}).to('.river_move_custom', 1, {
    y: 30,
    opacity: 0.6,
}).to('.river_move_custom', 1, {
    y: 40,
    opacity: 0.4,
})


// --------------river_move qa-------------//

TweenMax.to('.river_move_qa', 5, {
    x: 60,
    repeat: -1,
    yoyo: true,
    scale: 0.99,
    opacity: 0.8,
});

// --------------river_move_last-------------//

var tl = new TimelineMax({
    repeat: -1,
});

tl.to('.river_move_last', 1, {
    x: -10,
    opacity: 0.9,

}).to('.river_move_last', 1, {
    x: 15,
    opacity: 0.7,
}).to('.river_move_last', 1, {
    x: 20,
    y: -5,
    opacity: 0.3,
})

// --------------river_move big-------------//


var tl = new TimelineMax({
    repeat: -1,
    yoyo: true,
    opacity: 0.8
});

tl.to('.river_move_big', 2, {
    y: 20,
    opacity: 0.7,

}).to('.river_move_big', 2, {
    y: 25,
    opacity: 0.5,
}).to('.river_move_big', 2, {
    y: 40,
    opacity: 0.3,
})



var controller = new ScrollMagic.Controller();




// -----------------choco_black-------------//


var choco_black = new TimelineMax({
    yoyo: true,

});

choco_black.to('.choco_black', 1, {
    y: 130,
    x: -100,
    scale: 1.2,

}).to('.choco_black', 1, {
    y: 300,
    x: -200,
    scale: 1,
    rotation: -60,
}).to('.choco_black', 1, {
    y: 400,
    x: 0,
    scale: 1,
}).to('.choco_black', 1, {
    y: 400,
    x: 100,
    scale: 1,
}).to('.choco_black', 1, {
    y: 400,
    x: 200,
    scale: 1,
    rotate: 20,
}).to('.choco_black', 1, {
    y: 450,
    x: 250,
    scale: 1,
    rotate: 20,
})
    .to('.choco_black', 1, {
        y: 500,
        x: 500,
        scale: 1,
        rotate: 20,
    }).to('.choco_black', 1, {
        y: 530,
        x: 500,
        scale: 1,
        rotate: 20,
    }).to('.choco_black', 1, {
        y: 570,
        x: 500,
        scale: 1,
        rotate: 20,
    })
    .to('.choco_black', 1, {
        y: 600,
        x: 700,
        scale: 1.3,
    }).to('.choco_black', 1, {
        y: 700,
        x: 700,
        scale: 1.3,

    })
    .to('.choco_black', 1, {
        y: 750,
        x: 700,
        scale: 0.9,
    }).to('.choco_black', 1, {
        y: 800,
        x: 700,
        scale: 0.8,
        rotation: -20,
    })
    .to('.choco_black', 1, {
        y: 830,
        x: 730,
        scale: 0.8,
        rotation: -20,
    }).to('.choco_black', 1, {
        y: 880,
        x: 780,
        scale: 0.8,
        rotation: -20,
    }).to('.choco_black', 1, {
        y: 880,
        x: 800,
        scale: 0.8,
        rotation: -20,
    }).to('.choco_black', 1, {
        y: 880,
        x: 825,
        scale: 0.8,
        rotation: -20,
    })
    // .to('.choco_black', 1, {
    //     y:800,
    //     x: 700,
    //     scale:1,
    //     rotation:-20,
    //    opacity:0.8, 
    // }).to('.choco_black', 1, {
    //     y:820,
    //     x: 750,
    //     scale:0.8,
    //     rotation:-20,
    //    opacity:0.5, 
    // }).to('.choco_black', 1, {
    //     y:850,
    //     x: 800,
    //     scale:0.8,
    //     rotation:-20,
    //    opacity:0, 
    // }).to('.choco_black', 1, {
    //     y:800,
    //     x: 700,
    //     scale:1,
    //     rotation:-20,
    //    opacity:0.8,
    // }).to('.choco_black', 1, {
    //     y:820,
    //     x: 750,
    //     scale:0.8,
    //     rotation:-20,
    //    opacity:1, 

    // })   
    // .to('.choco_black', 1, {
    //     y:1000,
    //     x: 800,
    //     scale:1,
    //     rotation:-20,
    //    opacity:0, 
    // })
    .to('.choco_black', 1, {
        y: 900,
        x: 850,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 1050,
        x: 850,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    })
    .to('.choco_black', 1, {
        y: 1150,
        x: 750,
        scale: 0.7,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 1300,
        x: 600,
        scale: 0.6,
        rotation: -60,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 1350,
        x: 700,
        scale: 0.6,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 1350,
        x: 760,
        scale: 0.6,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 1400,
        x: 820,
        scale: 0.6,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, { //qa
        y: 1550,
        x: 750,
        scale: 0.6,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, { //qa
        y: 1600,
        x: 750,
        scale: 0.6,
        rotation: -20,
        opacity: 1,
    })
    .to('.choco_black', 1, { //qa
        y: 1700,
        x: 760,
        scale: 0.6,
        rotation: -20,
        opacity: 1,
    })

    .to('.choco_black', 1, {
        y: 1820,
        x: 660,
        scale: 0.6,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 1820,
        x: 500,
        scale: 0.6,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 1850,
        x: 400,
        scale: 0.6,
        rotation: 0,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 1850,
        x: 200,
        scale: 0.6,
        rotation: 0,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 1800,
        x: 0,
        scale: 0.6,
        rotation: 0,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 2200,
        x: -380,
        scale: 1.2,
        rotation: 0,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 2400,
        x: -400,
        scale: 0.8,
        rotation: 0,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 2400,
        x: 400,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 2500,
        x: 600,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 2600,
        x: 700,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 1, {
        y: 2600,
        x: 750,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    })
    .to('.choco_black', 3, {
        y: 2650,
        x: 850,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, { //rank
        y: 2700,
        x: 900,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 2800,
        x: 850,
        scale: 0.8,
        rotation: 0,
        opacity: 1,
    })
    .to('.choco_black', 3, {
        y: 3200,
        x: 820,
        scale: 1,
        rotation: 20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 3400,
        x: 750,
        scale: 1,
        rotation: 20,
        opacity: 1,
    })
    .to('.choco_black', 3, {
        y: 3600,
        x: 700,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 3800,
        x: 700,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    })
    .to('.choco_black', 3, {
        y: 4050,
        x: 700,
        scale: 1,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 4100,
        x: 800,
        scale: 1,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 4500,
        x: 860,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 4700,
        x: 770,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 4800,
        x: 770,
        scale: 0.8,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 4900,
        x: 750,
        scale: 1,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 5200,
        x: 600,
        scale: 1,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 5600,
        x: 600,
        scale: 1.3,
        rotation: -20,
        opacity: 1,
    }).to('.choco_black', 3, {
        y: 5600,
        x: 600,
        scale: 1.3,
        rotation: -20,
        opacity: 1,
    })


var scene_01 = new ScrollMagic.Scene({
    triggerElement: '#keypoint',
    duration: 5780,
    //    reverse:true, 
    // offset:600,
    triggerHook: -5,

})
    .setTween(choco_black)
    //  .addIndicators() 
    .addTo(controller)
//  .setPin('html')














// -----------------choco_white-------------//


var choco_white = new TimelineMax({

    // delay:3,
    yoyo: true,
});

choco_white.to('.choco_white', 1, {
    y: 110,
    x: -90,

}).to('.choco_white', 1, {
    y: 200,
    x: -140,
    scale: 1.2,

}).to('.choco_white', 0.5, {
    y: 250,
    x: -160,
    scale: 1,

}).to('.choco_white', 0.5, {
    y: 350,
    x: -180,
    scale: 1,

})
    .to('.choco_white', 0.5, {
        y: 450,
        x: -200,
        scale: 1,

    }).to('.choco_white', 0.5, {
        y: 450,
        x: -200,
        scale: 1,

    }).to('.choco_white', 0.5, {
        y: 450,
        x: -200,
        scale: 1,

    })


var scene_02 = new ScrollMagic.Scene({
    triggerElement: '#keypoint2', //觸發點
    duration: 700, //結束點
    //    reverse:true, 
    // offset:600,
    triggerHook: 0,

})
    .setTween(choco_white)
    // .addIndicators() 
    .addTo(controller)



// -----------------choco_milk-------------//

var choco_milk = new TimelineMax({

});

choco_milk.to('.choco_milk', 60, {
    y: 50,
    x: 10,
}).to('.choco_milk', 120, {
    y: 150,
    x: 30,
    scale: 1.1,
}).to('.choco_milk', 180, {
    y: 300,
    x: -180,
    scale: 1.5,
}).to('.choco_milk', 300, {
    y: 400,
    x: -250,
    scale: 2,
}).to('.choco_milk', 300, {
    y: 600,
    x: -450,
    scale: 2,
})

var scene_03 = new ScrollMagic.Scene({
    triggerElement: '#keypoint3',
    duration: 800,
    // offset:600,
    triggerHook: 0,

})
    .setTween(choco_milk)
    //   .addIndicators() 
    .addTo(controller)



$(function () {
    if ($('window').width() < 1200) {
        TweenMax.killTweensOf('.choco_black');
        TweenMax.killTweensOf('.choco_white');
        TweenMax.killTweensOf('.choco_milk');
    }
});


// if($(window).width() >= 1024){
//  tl3;
// }





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
    scale: "0.7",
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
    scale: "0.7",
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
    scale: "0.7",
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
    scale: "0.7",
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
    scale: "0.7",
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














var select_result = {};

// select products start
function send_select(select_data) {
    let xhr = new XMLHttpRequest();

    xhr.onload = function () {

        if (xhr.status == 200) {
            // console.log(xhr.responseText);

            select_result = JSON.parse(xhr.responseText);


        } else {
            alert(xhr.status);
        }
    }
    let url = "php/get_qa_select_result.php?select_data=" + select_data;

    xhr.open("get", url, false);
    xhr.send(null);

    show_select_result();

}






// function collect_answer() {
//     var select_items = document.querySelectorAll(".answer");
//     // console.log(select_items.length);
//     for (var i = 0; i < select_items.length; i++) {

//         select_items[i].onclick = function(e) {
//             var select_data = []
//             for (var j = 0; j < select_items.length; j++) {

//                 if (select_items[j].checked == true) {
//                     select_data.push(select_items[j].value + "=1");
//                     // console.log(select_items[j].value);
//                 }
//             }
//             send_select(select_data);
//         }
//     }

// }


function show_select_result() {

    var submit_btn = document.getElementById("submit_question_btn");
    var qa_box = document.getElementById("qa_box");
    var product_result = "";

    submit_btn.onclick = function () {
        product_result += `<img src="image/index/question/question.png" alt="question">
        <div class="question recommand_box">
        <div class="title recommand_title">
        <h4>巧克力好推薦！<br>你就愛那一味～<br><p>${select_result[0]["classic_product_name"]}</p></h4>

        </div>
        <div class="product_img">
            <img src="../store/image/store/${select_result[0]["product_img_src"]}">
        </div>
        </div>`;

        qa_box.innerHTML = product_result;
    }

}







window.addEventListener("load", function () {
    var question_submit = document.querySelector("#submit_question_btn");
    question_submit.onclick = function () {
        var select_items = document.querySelectorAll(".answer");
        var select_data = []
        for (var j = 0; j < select_items.length; j++) {

            if (select_items[j].checked == true) {
                select_data.push(select_items[j].value + "=1");
            }
        }
        send_select(select_data);
    }
});



function go_to_next_step() {
    var next_button = document.getElementsByClassName("qa_next_button");

    for (var i = 0; i < next_button.length; i++) {
        next_button[i].onclick = function () {
            this.parentNode.style.display = "none";
            this.parentNode.nextElementSibling.style.display = "flex";

        }
    }


}



window.addEventListener("load", go_to_next_step);