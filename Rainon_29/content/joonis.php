<h1>
    LegoMan
</h1>
<script>
    function setColor(newColor) {
        let canvas = document.getElementById("myCanvas");
        let context = canvas.getContext("2d");
        let color = "yellow";

        color = newColor;
    }
</script>
<button onclick="drawHead()">Голова</button>
<button onclick="drawBody()">Туловище</button>
<button onclick="drawArm('left')">Левая рука</button>
<button onclick="drawArm('right')">Правая рука</button>
<button onclick="drawLeg('left')">Левая нога</button>
<button onclick="drawLeg('right')">Правая нога</button>
<button onclick="clearCanvas()">Очистить</button>
<button onclick="drawLegoMan()">Нарисовать человека</button>
<br>
<canvas id="myCanvas" width="500" height="500"></canvas>
<br>
<button onclick="setColor('yellow')">Желтый</button>
<button onclick="setColor('black')">Черный</button>
<button onclick="setColor('blue')">Синий</button>
<button onclick="setColor('white')">Белый</button>
<button onclick="setColor('red')">Красный</button>
<button onclick="setColor('green')">Зеленый</button>
<button onclick="setColor('brown')">Коричневый</button>
<br>
<button onclick="drawEyes()">Глаза</button>
<button onclick="drawMouth()">Рот</button>