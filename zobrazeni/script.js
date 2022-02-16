let xspeed = 5;
let yspeed = 2;

let r = 150;

function setup() {
    createCanvas(windowWidth, windowHeight);
}


function draw() {
    background(0);
    ellipse(mouseX, mouseY, r * 2, r * 2);
    textSize(30);
    text("Dobrý den!", 30, 50);
    textSize(30);
    text("Košťál Adam", 30, 110);
}