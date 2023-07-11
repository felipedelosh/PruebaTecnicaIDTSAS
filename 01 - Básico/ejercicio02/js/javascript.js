/**
 * This method get HTML DOOM and Stract numbers array
 */
function sumVector(){ 
    let textArr = document.getElementById("arrayNumbers").value;   
    data = getFormatedArray(textArr);

    if(data.length > 0){
        var sum = sumOnlyPairsInVector(data);
        document.getElementById("result").innerHTML = sum;
    }else{
        alert("Error Fatal");
    }

}  


/**
 * 
 * @param {*} data is a text and hav numbers sepatates via ,
 * @returns [#, #, ...#]
 */
function getFormatedArray(data){
    try {
        data = data.split(",");
        return data;
    } catch (error) {
        console.log(error);
    }
      
    return [];
}

/**
 * 
 * @param {*} array Enter a vector [str#, str#, str#, str#]
 * @returns sum of only 2n numbers
 */
function sumOnlyPairsInVector(array){
    let sum = 0;

    try {
        for (let i = 0; i < array.length; i++) {
            if (parseInt(array[i])%2 == 0){
                sum = sum + parseInt(array[i]);
            }
        } 
    } catch (error) {
        console.log(error);
    }

    return sum;
}
