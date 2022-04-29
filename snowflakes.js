//code edited from p5.js examples webpage

let snowflakes = []; // array to hold snowflake objects
let randomVar_r;
let randomVar_g;
let randomVar_b;
var windowWidth;
var windowHeight;
function setup() {
    windowWidth=window.width*20;
    windowHeight=window.height*20;
    createCanvas(windowWidth, windowHeight);
  noStroke();
  randomVar_r=Math.floor(Math.random() * 255 +1); //returns a random value from 1 to 255 as the r value from RGB
  randomVar_g=Math.floor(Math.random() * 255 +1); //G value from RGB
  randomVar_b=Math.floor(Math.random() * 255 +1); //B value from RGB
  //fill(arrayColour[randomVar]);
  fill(randomVar_r, randomVar_g,randomVar_b);
}

function draw() {
  background('white');
  let t = frameCount / 480; // update time

  // create a random number of snowflakes each frame
  for (let i = 0; i < random(5); i++) {
    snowflakes.push(new snowflake()); // append snowflake object
  }

  // loop through snowflakes with a for..of loop
  for (let flake of snowflakes) {
    flake.update(t); // update snowflake position
    flake.display(); // draw snowflake
  }
}

// snowflake class
function snowflake() {
  // initialize coordinates
  this.posX = 0;
  this.posY = random(-50, 0);
  this.initialangle = random(0, 2 * PI);
  this.size = random(2, 5);

  // radius of snowflake spiral
  // chosen so the snowflakes are uniformly spread out in area
  this.radius = sqrt(random(pow(width / 2, 2)));

  this.update = function(time) {
    // x position follows a circle
    let w = 0.6; // angular speed
    let angle = w * time + this.initialangle;
    this.posX = width / 2 + this.radius * sin(angle);

    // different size snowflakes fall at slightly different y speeds
    this.posY += pow(this.size, 0.5);

    // delete snowflake if past end of screen
    if (this.posY > height) {
      let index = snowflakes.indexOf(this);
      snowflakes.splice(index, 1);
    }
  };

  this.display = function() {
    ellipse(this.posX, this.posY, this.size);
  };
}
