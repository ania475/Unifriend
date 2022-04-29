class Doorbell {
    constructor(x_, y_, r_) {
      // Location and size
      this.x = x_;
      this.y = y_;
      this.r = r_;
    }
    // Is a point inside the doorbell? (used for mouse rollover, etc.)
    contains(mx, my) {
      return dist(mx, my, this.x, this.y) < this.r;
    }
}

let dingdong;
let doorbell;
let bellRung;

function preload() {
  //doorbell=loadImage('assets/bell.png');
  bellRung=loadImage('assets/bell-rung4.png');
  dingdong = loadSound('assets/doorbell-3.mp3');
}


function setup() {
  aspectImg = doorbell.height/ doorbell.width;
  canvasWidth = windowWidth*0.1;
  canvasHeight = canvasWidth * aspectImg;
  cnv = createCanvas(canvasWidth,canvasHeight);
  image(doorbell,0,0,width,height);
  cnv.mousePressed(soundPlay);
  //const myTimeout = setTimeout(soundPlay, 3000);

  // Create a new doorbell
  //doorbell = new Doorbell(width / 2, height / 2, 32);
} 

//function draw() {
  //background(89, 8, 77);
  // Show the doorbell
  //doorbell.display(mouseX, mouseY);
//}

function soundPlay() {
    // If the user clicks on the doorbell, play the sound!
    dingdong.play();
    image(bellRung,0,0,width,height);
    var elem=document.getElementById("myDiv");
    elem.style.display = "block";
    elem.style.paddingTop="-40px";
}

//text animation
var textWelcome = document.getElementById("myDiv");

