<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Pagina</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ejemplo plantilla HTML"/>
  <meta name="keywords" content="palabra clave 1, palabra clave 2, palabra clave 3"/>
  <meta name="author" content="FelipedelosH" />
  <meta name="copyright" content="FelipedelosH" />
  <meta name="robots" content="/"/>
</head>
<body>
  <h1>Ejercicio 4: JavaScript + API Integration</h1>
  <p>Utilizando JavaScript, crea una página web que muestre la información climática actual de una ciudad específica utilizando una API de clima (puedes utilizar OpenWeatherMap u otra de tu elección). La página debe mostrar el nombre de la ciudad, la temperatura actual y una descripción del clima.</p>
  <hr>
  <p>Ingrese los datos de la ciudad:</p>
  <input type="text" id="nameCity" placeholder="City name">
  <input type="text" id="isoCodeCountry" placeholder="ISO code country">
  <button onclick="getWeatherInCountry()">GET</button> 
  <p id="response">?</p>
  <script src="js/javascript.js"></script>
</body>
</html>