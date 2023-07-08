function changeColorBG(){
    var body = document.getElementsByTagName("body");
    var red = getRNDColor();
    var green = getRNDColor();
    var blue = getRNDColor();
    body[0].style.backgroundColor = 'rgb(' + red + ',' + green + ',' + blue + ')';
}

function getRNDColor(){
    min = 0;
    max = 255;
    return Math.floor(Math.random() * (max - min) + min)
}