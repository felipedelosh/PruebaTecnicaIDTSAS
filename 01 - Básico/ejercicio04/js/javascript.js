/**
 * READ body and change the color to rnd method
 */
function changeColorBG(){
    var body = document.getElementsByTagName("body");
    //get RBG color to rnd numbers (0, ,255)
    var red = getRNDColor();
    var green = getRNDColor();
    var blue = getRNDColor();
    body[0].style.backgroundColor = 'rgb(' + red + ',' + green + ',' + blue + ')';
}

/**
 * 
 * @returns integer with scale rgb color (0-255)
 * 
 */
function getRNDColor(){
    min = 0;
    max = 255;
    return Math.floor(Math.random() * (max - min) + min)
}