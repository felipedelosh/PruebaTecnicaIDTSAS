/**
 * The Function reverseWords return str with reverse words
 */
function reverseWords(text){
    let reverseTXT = "";
    
    //tokens
    let tokens = text.split(" "); //split the words

    //reverse
    let countTextSize = tokens.length;
    let counter = 0;
    while(counter<countTextSize){
        let _pivot = (countTextSize-1) - counter;
        reverseTXT = reverseTXT + tokens[_pivot] + " ";
        counter = counter + 1;
    }

    return reverseTXT;
}

text = "Hola, cómo estás";
document.getElementById("output").innerHTML = reverseWords(text);