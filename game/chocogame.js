(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [
		{name:"chocogame_atlas_", frames: [[826,1083,193,207],[427,1083,200,207],[220,1083,205,207],[629,1083,195,208],[1021,1083,172,211],[0,1083,218,202],[1344,1083,132,101],[0,0,1922,1081],[1924,0,122,113],[1195,1083,147,188]]}
];


// symbols:



(lib.bear1 = function() {
	this.spriteSheet = ss["chocogame_atlas_"];
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.bear2 = function() {
	this.spriteSheet = ss["chocogame_atlas_"];
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.bear3 = function() {
	this.spriteSheet = ss["chocogame_atlas_"];
	this.gotoAndStop(2);
}).prototype = p = new cjs.Sprite();



(lib.bear4 = function() {
	this.spriteSheet = ss["chocogame_atlas_"];
	this.gotoAndStop(3);
}).prototype = p = new cjs.Sprite();



(lib.bear5 = function() {
	this.spriteSheet = ss["chocogame_atlas_"];
	this.gotoAndStop(4);
}).prototype = p = new cjs.Sprite();



(lib.bearstop = function() {
	this.spriteSheet = ss["chocogame_atlas_"];
	this.gotoAndStop(5);
}).prototype = p = new cjs.Sprite();



(lib.brokeheart = function() {
	this.spriteSheet = ss["chocogame_atlas_"];
	this.gotoAndStop(6);
}).prototype = p = new cjs.Sprite();



(lib.ground = function() {
	this.spriteSheet = ss["chocogame_atlas_"];
	this.gotoAndStop(7);
}).prototype = p = new cjs.Sprite();



(lib.normalpoint = function() {
	this.spriteSheet = ss["chocogame_atlas_"];
	this.gotoAndStop(8);
}).prototype = p = new cjs.Sprite();



(lib.specialpoint = function() {
	this.spriteSheet = ss["chocogame_atlas_"];
	this.gotoAndStop(9);
}).prototype = p = new cjs.Sprite();
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.specialpoint_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// 圖層_1
	this.instance = new lib.specialpoint();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.specialpoint_1, new cjs.Rectangle(0,0,147,188), null);


(lib.normalpoint_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// 圖層_1
	this.instance = new lib.normalpoint();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.normalpoint_1, new cjs.Rectangle(0,0,122,113), null);


(lib.chocobear = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{stop:0,run:1,end:12});

	// timeline functions:
	this.frame_0 = function() {
		this.stop();
	}
	this.frame_11 = function() {
		this.gotoAndPlay("run");
	}
	this.frame_12 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(11).call(this.frame_11).wait(1).call(this.frame_12).wait(1));

	// 圖層_7
	this.instance = new lib.bearstop();
	this.instance.parent = this;
	this.instance.setTransform(-13,13);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(12).to({_off:false},0).wait(1));

	// 圖層_1
	this.instance_1 = new lib.bear2();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-7,13);

	this.instance_2 = new lib.bear3();
	this.instance_2.parent = this;
	this.instance_2.setTransform(-30,13);

	this.instance_3 = new lib.bear4();
	this.instance_3.parent = this;
	this.instance_3.setTransform(-20,13);

	this.instance_4 = new lib.bear5();
	this.instance_4.parent = this;
	this.instance_4.setTransform(0,12);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_1}]},1).to({state:[{t:this.instance_2}]},1).to({state:[{t:this.instance_3}]},2).to({state:[{t:this.instance_4}]},1).to({state:[{t:this.instance_3}]},2).to({state:[{t:this.instance_2}]},1).to({state:[{t:this.instance_1}]},2).to({state:[]},2).wait(1));

	// 圖層_6
	this.instance_5 = new lib.bear1();
	this.instance_5.parent = this;
	this.instance_5.setTransform(0,13);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({_off:true},1).wait(12));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,13,193,207);


(lib.brokenheart = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// 圖層_1
	this.instance = new lib.brokeheart();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.brokenheart, new cjs.Rectangle(0,0,132,101), null);


// stage content:
(lib.chocogame = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// 圖層_1
	this.instance = new lib.ground();
	this.instance.parent = this;
	this.instance.setTransform(0,-101);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(960,368.5,1922,1081);
// library properties:
lib.properties = {
	id: 'CC3E693652747A41B09505A53E1430A9',
	width: 1920,
	height: 939,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"images/chocogame_atlas_.png?1562237267897", id:"chocogame_atlas_"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['CC3E693652747A41B09505A53E1430A9'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}



})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;