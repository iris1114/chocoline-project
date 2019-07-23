window.addEventListener("load",init);

var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("CC3E693652747A41B09505A53E1430A9");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
    loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();	
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }	
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.chocogame();
    stage = new lib.Stage(canvas);	
    
    let bear = new lib.chocobear();
    bear.x = 1400;
    bear.y = 640;
    bear.regX = 96.5;
    exportRoot.addChild(bear);

    let isstart = false;
    let iskey;
    let iskeydown = false;
    let position = 1;
    let speed = 20;
    let score = 0;
    let scorenum = document.querySelector("#scorenum");
    let time = 30;
    let minute = document.querySelectorAll(".minute");
    let second = document.querySelectorAll(".second");
    let arr = ["x 1","x 5","x 10"];
    
    let card = document.querySelectorAll(".card"),
        whiteout = document.querySelector(".whitecard").querySelector(".outtext"),
        whiteinner = document.querySelector(".whitecard").querySelector(".innertext"),
        milkout = document.querySelector(".milkcard").querySelector(".outtext"),
        milkinner = document.querySelector(".milkcard").querySelector(".innertext"),
        blackout = document.querySelector(".blackcard").querySelector(".outtext"),
        blackinner = document.querySelector(".blackcard").querySelector(".innertext"),
        final = document.querySelector(".final"),
        finalpoint = document.querySelector("#finalpoint"),
        cardnum = 0,
        chosen_card = "",
        timeup = document.querySelector("#timeup"),
        choco_bonus = document.querySelector(".choco_bonus"),
        bonus_house = document.querySelector(".bonus_house"),
        header = document.querySelector("header");


    document.querySelector("#start").addEventListener("click",tostart);
    window.addEventListener("keydown",function(e){
        if(e.keyCode==13 || e.keyCode==108){
            tostart();
        }
    })
    function tostart(){
        
        document.querySelector(".title_decoration").style.display="none";
        document.querySelector("#introduce").style.display="none";
        setTimeout(function(){
            isstart = true;
            window.addEventListener("keydown",keydownmove);
            window.addEventListener("keyup",keyupmove);
            if(window.innerWidth<992){
                header.style.display="none";
                if(window.DeviceOrientationEvent){
                    window.addEventListener("deviceorientation",phonerun);
                }else{
                    alert("請改用firefox");
                    window.location.reload();
                    window.location.href=window.location.href;
                }
            }
        },1000)
    }
    var lkeycode = false;
    var rkeycode = false;
    function keydownmove (e){
        if(iskeydown){
            return;
        }
        if(e.keyCode === 37 || e.keyCode === 39){
            iskeydown = true;
            iskey = true;
            
            
            if(e.keyCode === 37){
                position = 1;
            }else{
                position = -1;
            }
            bear.gotoAndPlay("run");
        }
    }

    function keyupmove (e){
        iskeydown = false;
        bear.gotoAndPlay("stop");
    }

    createjs.Ticker.addEventListener("tick",tickFn)
    function tickFn (){
        if(iskeydown == false){
            return;
        }
        if(iskey){
            bear.scaleX = position;
            bear.x -= speed * position;
        }else{
            if(beta>0){
                position = -1;
                bear.scaleX = position;
                bear.x -= beta * position * 0.8;
            }else{
                position = 1 ;
                bear.scaleX = position;
                bear.x += beta * position * 0.8;
            }
        }
        

        if(bear.x <=96.5){
            bear.x = 96.5;
        }else if(bear.x>=1823.5){
            bear.x = 1823.5;
        };
    }

    var beta;
    function phonerun(e){
        beta = e.beta;
        if(iskeydown){
            return;
        }
        iskeydown = true;
        bear.gotoAndPlay("run");
    }




    function getnum(min,max){
        return min + (Math.round(Math.random()*(max - min))); 
    }

    clearInterval(normalpoint);
    var normalpoint = setInterval(normalpointdown,getnum(800,1200))

    function normalpointdown (){
        if(!isstart){
            return;
        }
        let normalpoint = new lib.normalpoint();
        normalpoint.x = getnum(150,1750);
        normalpoint.y = getnum(-100,-500);
        normalpoint.scaleX = 0.8; 
        normalpoint.scaleY = 0.8;
        exportRoot.addChild(normalpoint);
        createjs.Tween.get(normalpoint)
        .to({y: 1000}, 5000)
        .addEventListener("change",function(){
            let hit = ndgmr.checkRectCollision(normalpoint,bear);
            if(hit){
                createjs.Tween.removeTweens(normalpoint);
                exportRoot.removeChild(normalpoint);


                if(minute[0].innerText!="0" || second[0].innerText!="00"){
                    score+=1;
                    scorenum.innerText = score;
                }

                // if(minute[0].innerText=="0" && second[0].innerText=="00"){
                //     return;
                // }else{
                //     score+=1;
                //     scorenum.innerText = score;
                // }
            }
        })
        .call(remove);
        function remove(){
            exportRoot.removeChild(normalpoint);
            createjs.Tween.removeTweens(normalpoint);
        }
    }
    
    clearInterval(specialpoint);
    var specialpoint = setInterval(specialpointdown,getnum(6000,8000))

    function specialpointdown (){
        if(!isstart){
            return;
        }
        let specialpoint = new lib.specialpoint();
        specialpoint.x = getnum(150,1750);
        specialpoint.y = getnum(-100,-500);
        specialpoint.scaleX = 0.8; 
        specialpoint.scaleY = 0.8;
        exportRoot.addChild(specialpoint);
        createjs.Tween.get(specialpoint)
        .to({y: 1000}, 2000)
        .addEventListener("change",function(){
            let hit = ndgmr.checkRectCollision(specialpoint,bear);
            if(hit){
                createjs.Tween.removeTweens(specialpoint);
                exportRoot.removeChild(specialpoint);

                if(minute[0].innerText!="0" || second[0].innerText!="00"){
                    score+=10;
                    scorenum.innerText = score;
                } 
                // if(minute[0].innerText=="0" && second[0].innerText=="00"){
                //     return;
                // }else{
                //     score+=10;
                //     scorenum.innerText = score;
                // }
            }
        })
        .call(remove);
        function remove(){
            exportRoot.removeChild(specialpoint);
            createjs.Tween.removeTweens(specialpoint);
        }
    }

    clearInterval(brokenheart);
    var brokenheart = setInterval(brokenheartdown,getnum(2000,5000))

    function brokenheartdown(){
        if(!isstart){
            return;
        }
        let brokenheart = new lib.brokenheart();
        brokenheart.x = getnum(150,1750);
        brokenheart.y = getnum(-100,-500);
        brokenheart.scaleX = 0.8; 
        brokenheart.scaleY = 0.8;
        exportRoot.addChild(brokenheart);
        createjs.Tween.get(brokenheart)
        .to({y: 1000}, 4000)
        .addEventListener("change",function(){
            let hit = ndgmr.checkRectCollision(brokenheart,bear);
            if(hit){
                createjs.Tween.removeTweens(brokenheart);
                exportRoot.removeChild(brokenheart);
                if(minute[0].innerText!="0" || second[0].innerText!="00"){
                    score-=3;
                        if(score<0){
                            score = 0;
                        }
                        scorenum.innerText = score;
                }
                // if(minute[0].innerText=="0" && second[0].innerText=="00"){
                //     return;
                // }else{
                //     score-=3;
                //     if(score<0){
                //         score = 0;
                //     }
                //     scorenum.innerText = score;
                // }
            }
        })
        .call(remove);
        function remove(){
            
            exportRoot.removeChild(brokenheart);
            createjs.Tween.removeTweens(brokenheart);
        }
    }

    clearInterval(timer);
    var timer = setInterval(countdown,1000)
    function countdown(){
        if(!isstart){
            return;
        }
        time--;
        let m = Math.floor(time / 60);
        if(m==0){
            m="0";
        }
        let s = Math.floor(time % 60);
        if(s==0){
            s="00";
        }else if(s==1){
            s="01";
        }else if(s==2){
            s="02";
        }else if(s==3){
            s="03";
        }else if(s==4){
            s="04";
        }else if(s==5){
            s="05";
        }else if(s==6){
            s="06";
        }else if(s==7){
            s="07";
        }else if(s==8){
            s="08";
        }else if(s==9){
            s="09";
        }
        minute[0].innerText=minute[1].innerText=m;
        second[0].innerText=second[1].innerText=s;
        if(time == 0){
            isstart = false;
            clearInterval(timer);
            clearInterval(normalpoint);
            clearInterval(specialpoint);
            clearInterval(brokenheart);
            window.removeEventListener("keydown",keydownmove);
            window.removeEventListener("keyup",keyupmove);
            window.removeEventListener("deviceorientation",phonerun);
            createjs.Ticker.removeEventListener("tick",tickFn);
            bear.gotoAndPlay("end");
            setTimeout(function(){
                timeup.style.display = "block";
                setTimeout(function(){
                    timeup.style.display = "none";
                    choco_bonus.style.display = "block";
                    if(window.innerWidth<992){
                        header.style.display="block";
                    }
                },3500)
            },500);
        }  
    }
    
   
        

    while(cardnum<card.length){
        card[cardnum].addEventListener("click",function(){

            arr.sort(function(){return Math.random()>0.5?-1:1;});
            whiteout.innerText = whiteinner.innerText = arr[0];
            milkout.innerText = milkinner.innerText = arr[1];
            blackout.innerText = blackinner.innerText = arr[2];

            this.querySelector(".front").classList.add("frontshow");
            this.querySelector(".back").classList.add("backshow");
            chosen_card = this.id;
            for(i=0;i<card.length;i++){
                card[i].classList.add("nopointer");       
            }
            
            finalpoint.innerText = score * this.querySelector(".back").querySelector(".outtext").innerText.replace("x ","");
            submit_point();
            // document.querySelector("#submit_point").value = finalpoint.innerText;
            setTimeout(function(){
                bonus_house.style.display = "none";
                final.style.display = "block";
               
            },1000)
            
        })
        cardnum++
    }
   
    // document.querySelector("#again").addEventListener("click",restart);

    // function restart(){

    //     final.style.display = "none";
    //     bonus_house.style.display = "block";
    //     choco_bonus.style.display = "none";
    //     score = 0;
    //     scorenum.innerText = score;
    //     time = 30;
    //     document.querySelector(`#${chosen_card}`).querySelector(".front").classList.remove("frontshow");
    //     document.querySelector(`#${chosen_card}`).querySelector(".back").classList.remove("backshow");
        
    //     for(i=0;i<card.length;i++){
    //         card[i].classList.remove("nopointer");       
    //     }

        
    //     window.removeEventListener("keydown",keydownmove);
    //     window.removeEventListener("keyup",keyupmove);
    //     createjs.Ticker.removeEventListener("tick",tickFn);



    //     createjs.Ticker.addEventListener("tick",tickFn);
    //     tostart();
    //     setInterval(countdown,200)
    //     setInterval(normalpointdown,getnum(800,1200))
    //     setInterval(specialpointdown,getnum(6000,8000))
    //     setInterval(brokenheartdown,getnum(2000,5000))
      
    // }
    // setInterval(function(){
    //     console.log(bear.x);
        
    // },1000)


    let burger = document.querySelector(".burger figure");
    let menubox = document.querySelector(".menubox");
    let menuclose = document.querySelector("#menuclose");

    burger.addEventListener("click",function(){
        menubox.style.display="block";
        setTimeout(function(){
            menubox.classList.add("menuboxopen");
        },100)
        document.body.style.overflowY = "hidden";
    });

    menuclose.addEventListener("click",function(){
        
        menubox.classList.remove("menuboxopen");
        setTimeout(function(){
            menubox.style.display="none";
        },500)
        document.body.style.overflowY = "hidden";
    })


    //送資料

    function submit_point(){
        var xhr = new XMLHttpRequest();
        xhr.onload=function (){
            if( xhr.status == 200 ){
            //modify here
            console.log(`成功`);
            
            }else{
            alert( xhr.status );
            }
        }
        
        //設定好所要連結的程式
        var url = "php/update_point.php";
        xhr.open("post", url, true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
        //送出資料
        // var data_info = "memId=" + 1& + "points=" + finalpoint.innerText;
        // var data_info = `memId=${document.querySelector("#mem_id_hide").innerText}&points=${finalpoint.innerText}`;
        var data_info = `points=${finalpoint.innerText}`;
        xhr.send( data_info);
    }



    //Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';				
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;			
			stage.scaleY = pRatio*sRatio;			
			lastW = iw; lastH = ih; lastS = sRatio;            
			stage.tickOnUpdate = false;            
			stage.update();            
			stage.tickOnUpdate = true;		
		}
	}
	// makeResponsive(false,'both',false,1);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}