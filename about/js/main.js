console.log("start");
TweenMax.to(".biglogo1", 1.5, {
  x: "0%",
  // left: '50px',
  ease: Bounce.easeOut
});
TweenMax.to(".biglogo2", 1.5, {
  x: "0%"
});

var tl = new TimelineMax({
  //屬性
  repeat: -1
});

//寫法
tl.to(".car_taipai", 9, {
  x: "-708%",
  scale: "0.8",
  ease: Power0.easeNone
})
  .to(".car_taipai", 3, {
    x: "-900%",
    y: "-15%",
    scale: "0.7",
    ease: Power0.easeNone
  })
  .to(".car_taipai", 2.5, {
    x: "-1030%",
    y: "-30%",
    scale: "0.6",
    ease: Power0.easeNone
  })
  .to(".car_taipai", 1.5, {
    x: "-1070%",
    y: "-60%",
    ease: Power0.easeNone
  })
  .to(".car_taipai", 1.5, {
    x: "-1090%",
    y: "-90%",
    scale: "0.5",
    ease: Power0.easeNone
  })
  .to(".car_taipai", 3, {
    x: "-1010%",
    y: "-140%",
    ease: Power0.easeNone
  })
  .to(".car_taipai", 4, {
    x: "-1150%",
    y: "-165%",
    ease: Power0.easeNone
  });

var tl = new TimelineMax({
  //屬性
  delay: 3,
  repeat: -1
});

//寫法
tl.to(".car_taoyuan", 9, {
  x: "-708%",
  scale: "0.8",
  ease: Power0.easeNone
})
  .to(".car_taoyuan", 3, {
    x: "-900%",
    y: "-15%",
    scale: "0.7",
    ease: Power0.easeNone
  })
  .to(".car_taoyuan", 2.5, {
    x: "-1030%",
    y: "-30%",
    scale: "0.6",
    ease: Power0.easeNone
  })
  .to(".car_taoyuan", 1.5, {
    x: "-1070%",
    y: "-60%",
    ease: Power0.easeNone
  })
  .to(".car_taoyuan", 1.5, {
    x: "-1090%",
    y: "-90%",
    scale: "0.5",
    ease: Power0.easeNone
  })
  .to(".car_taoyuan", 3, {
    x: "-1010%",
    y: "-140%",
    ease: Power0.easeNone
  })
  .to(".car_taoyuan", 4, {
    x: "-1150%",
    y: "-165%",
    ease: Power0.easeNone
  });

var tl = new TimelineMax({
  //屬性
  delay: 6,
  repeat: -1
});

//寫法
tl.to(".car_taichung", 9, {
  x: "-708%",
  scale: "0.8",
  ease: Power0.easeNone
})
  .to(".car_taichung", 3, {
    x: "-900%",
    y: "-15%",
    scale: "0.7",
    ease: Power0.easeNone
  })
  .to(".car_taichung", 2.5, {
    x: "-1030%",
    y: "-30%",
    scale: "0.6",
    ease: Power0.easeNone
  })
  .to(".car_taichung", 1.5, {
    x: "-1070%",
    y: "-60%",
    ease: Power0.easeNone
  })
  .to(".car_taichung", 1.5, {
    x: "-1090%",
    y: "-90%",
    scale: "0.5",
    ease: Power0.easeNone
  })
  .to(".car_taichung", 3, {
    x: "-1010%",
    y: "-160%",
    ease: Power0.easeNone
  })
  .to(".car_taichung", 4, {
    x: "-1150%",
    y: "-185%",
    ease: Power0.easeNone
  });

var tl = new TimelineMax({
  //屬性
  delay: 9,
  repeat: -1
});

//寫法
tl.to(".car_hualien", 9, {
  x: "-708%",
  scale: "0.8",
  ease: Power0.easeNone
})
  .to(".car_hualien", 3, {
    x: "-900%",
    y: "-15%",
    scale: "0.7",
    ease: Power0.easeNone
  })
  .to(".car_hualien", 2.5, {
    x: "-1030%",
    y: "-30%",
    scale: "0.6",
    ease: Power0.easeNone
  })
  .to(".car_hualien", 1.5, {
    x: "-1070%",
    y: "-60%",
    ease: Power0.easeNone
  })
  .to(".car_hualien", 1.5, {
    x: "-1090%",
    y: "-90%",
    scale: "0.5",
    ease: Power0.easeNone
  })
  .to(".car_hualien", 3, {
    x: "-1010%",
    y: "-160%",
    ease: Power0.easeNone
  })
  .to(".car_hualien", 4, {
    x: "-1150%",
    y: "-185%",
    ease: Power0.easeNone
  });

var tl = new TimelineMax({
  //屬性
  delay: 12,
  repeat: -1
});

//寫法
tl.to(".car_kaohsiung", 9, {
  x: "-708%",
  scale: "0.8",
  ease: Power0.easeNone
})
  .to(".car_kaohsiung", 3, {
    x: "-900%",
    y: "-15%",
    scale: "0.7",
    ease: Power0.easeNone
  })
  .to(".car_kaohsiung", 2.5, {
    x: "-1030%",
    y: "-30%",
    scale: "0.6",
    ease: Power0.easeNone
  })
  .to(".car_kaohsiung", 1.5, {
    x: "-1070%",
    y: "-60%",
    ease: Power0.easeNone
  })
  .to(".car_kaohsiung", 1.5, {
    x: "-1090%",
    y: "-90%",
    scale: "0.5",
    ease: Power0.easeNone
  })
  .to(".car_kaohsiung", 3, {
    x: "-1010%",
    y: "-175%",
    ease: Power0.easeNone
  })
  .to(".car_kaohsiung", 4, {
    x: "-1150%",
    y: "-200%",
    ease: Power0.easeNone
  });



  // ------------mapbox------------

function taipei_mapbox() {
  console.log("hihihihihi");
  var taipei = document.getElementsByClassName("taipei_mapbox")[0];
  if (taipei.style.display == "none") {
    taipei.style.display = "block";
    
  } else {
    taipei.style.display = "none";
  };

  // if (taoyuan.style.display == "block") {
  
  //   taoyuan.style.display = "none";
  // };
}

function taoyuan_mapbox() {
  var taoyuan = document.getElementsByClassName("taoyuan_mapbox")[0];
  if (taoyuan.style.display == "none") {
  
    taoyuan.style.display = "block";
  } else {
    taoyuan.style.display = "none";
  };
  // if (taipei.style.display == "block") {
  
  //   taipei.style.display = "none";
  // };
}

