//https://home.openweathermap.org
const xhr = new XMLHttpRequest();

//http://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=087339b49788d56e2a704ac99bcd7b02
const baseURL = 'http://api.openweathermap.org/data/2.5/weather?q=';
const apiKey = '&APPID=087339b49788d56e2a704ac99bcd7b02';

/**
 * The user type city and country iso code
 * and API openweathermap responses 
 * modify DOM to send response 
 */
function getWeatherInCountry(){
    let nameCity = document.getElementById("nameCity").value;
    let isoCountry = document.getElementById("isoCodeCountry").value;

    let finalURL = baseURL + nameCity + "," + isoCountry + apiKey;

    function onRequestHandler(){
        if(this.status==200){
            var data = this.response;
            var json = JSON.parse(data);
            console.log(json);
            let output = "Para la ciudad de: "+json["name"]+"<br>Temperatura:"+json["main"]["temp"]+"<br>Descripción Clima:<br><br>"+json["weather"][0]["description"];
            document.getElementById("response").innerHTML = output;
        }else{
            document.getElementById("response").innerHTML = "Error "+this.response+" <br> ";
        }
    }

    xhr.addEventListener("load", onRequestHandler);
    xhr.open("GET", finalURL);
    xhr.send();
}