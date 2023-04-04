const throttleA = 50
const intervalB = 15;
let lastX, lastY;
let coordinates = [];

let last = (new Date).getTime();

const handleMouseMove = (event) => {
    const now = (new Date).getTime();
    // if ((now - start) > limit) {
    //     document.removeEventListener('mousemove', handleMouseMove)
    //     return
    // }

    if ((now - last) < throttleA) {
        return;
    }

    last = now;

    trackCursor(event);
    console.log(event.clientX);
}

function trackCursor(event) {
    let x = event.clientX;
    let y = event.clientY;
    if (x !== lastX || y !== lastY) {
        coordinates.push({
            time: getTime(),
            x: x,
            y: y
        });
        lastX = x;
        lastY = y;
    }
}

function sendJson() {
    let count = 1; // количество фиксаций в текущих координатах
    let json = []; // массив для хранения объектов с данными
    for (let i = 0; i < coordinates.length; i++) {
        let coord = coordinates[i];
        if (coord.x === lastX && coord.y === lastY) {
            count++;
        } else {
            json.push({
                time: coord.time,
                x: coord.x,
                y: coord.y,
                t: coord.t,
                count: count
            });
            count = 1;
        }
    }
    // добавляем последнюю фиксацию
    json.push({
        time: getTime(),
        x: lastX,
        y: lastY,
        count: count
    });
    console.log(JSON.stringify(json));
    coordinates = [];
}

function getTime() {
    let date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();
    let millis = date.getMilliseconds();
    return `${hours}:${minutes}:${seconds}:${millis}`;
}

document.addEventListener('mousemove', handleMouseMove)

setInterval(sendJson, intervalB * 1000);