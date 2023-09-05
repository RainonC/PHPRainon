let canvas = document.getElementById("myCanvas");
let context = canvas.getContext("2d");
let color = "yellow";

function drawHead() {
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");
    var color = "yellow";

    context.beginPath();
    context.arc(250, 80, 50, 0, 2 * Math.PI);
    context.fillStyle = color;
    context.fill();
}

function drawBody() {
    let canvas = document.getElementById("myCanvas");
    let context = canvas.getContext("2d");
    let color = "yellow";

    context.beginPath();
    context.rect(200, 130, 100, 150);
    context.fillStyle = color;
    context.fill();
}

function drawArm(position) {
    let canvas = document.getElementById("myCanvas");
    let context = canvas.getContext("2d");
    let color = "yellow";

    if (position === "left") {
        context.beginPath();
        context.rect(160, 130, 40, 100);
    } else {
        context.beginPath();
        context.rect(300, 130, 40, 100);
    }
    context.fillStyle = color;
    context.fill();
}

function drawLeg(position) {
    let canvas = document.getElementById("myCanvas");
    let context = canvas.getContext("2d");
    let color = "yellow";

    if (position === "left") {
        context.beginPath();
        context.rect(210, 280, 40, 100);
    } else {
        context.beginPath();
        context.rect(250, 280, 40, 100);
    }
    context.fillStyle = color;
    context.fill();
}

function clearCanvas() {
    let canvas = document.getElementById("myCanvas");
    let context = canvas.getContext("2d");
    let color = "yellow";

    context.clearRect(0, 0, canvas.width, canvas.height);
}

function drawLegoMan() {
    let canvas = document.getElementById("myCanvas");
    let context = canvas.getContext("2d");
    let color = "yellow";

    drawHead();
    drawBody();
    drawArm('left');
    drawArm('right');
    drawLeg('left');
    drawLeg('right');
    drawMouth();
    drawEyes();
}

function setColor(newColor) {
    let canvas = document.getElementById("myCanvas");
    let context = canvas.getContext("2d");
    let color = "yellow";

    color = newColor;
}

function drawEyes() {
    let canvas = document.getElementById("myCanvas");
    let context = canvas.getContext("2d");
    let color = "yellow";

    context.beginPath();
    context.arc(235, 65, 5, 0, 2 * Math.PI);
    context.arc(265, 65, 5, 0, 2 * Math.PI);
    context.fillStyle = "black";
    context.fill();
}
function drawMouth() {
    let canvas = document.getElementById("myCanvas");
    let context = canvas.getContext("2d");
    let color = "yellow";

    context.beginPath();
    context.moveTo(235, 90);
    context.lineTo(265, 90);
    context.strokeStyle = "black";
    context.lineWidth = 2;
    context.stroke();
}