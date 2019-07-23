var x = document.getElementById("canvas");
var canvas = x.getContext("2d");

var radius = 10;
var dragging = false;

x.width = 410;
x.height = 410;

window.onresize = function() {
  var image = canvas.getImageData(0, 0, x.width, x.height);
  x.width = window.innerWidth;
  x.height = window.innerHeight;
  canvas.putImageData(image, 0, 0);
};

function clearCanvas(x) {
  x.width = x.width;
}

canvas.lineWidth = radius * 2;

var putPoint = function(e) {
  if (dragging) {
    canvas.lineTo(e.clientX, e.clientY);
    canvas.stroke();
    canvas.beginPath();
    canvas.arc(e.clientX, e.clientY, radius, 0, Math.PI * 2);
    canvas.fill();
    canvas.beginPath();
    canvas.moveTo(e.clientX, e.clientY);
  }
};

var engage = function(e) {
  dragging = true;
  putPoint(e);
};

var disengage = function() {
  dragging = false;
  canvas.beginPath();
};

x.addEventListener("mousedown", engage);
x.addEventListener("mousemove", putPoint);
x.addEventListener("mouseup", disengage);
