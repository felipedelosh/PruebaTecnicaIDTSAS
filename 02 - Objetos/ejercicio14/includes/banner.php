<h1>Ejercicio 4: JavaScript + API Integration</h1>
<p>Utilizando JavaScript, crea una página web que muestre la información climática actual de una ciudad específica utilizando una API de clima (puedes utilizar OpenWeatherMap u otra de tu elección). La página debe mostrar el nombre de la ciudad, la temperatura actual y una descripción del clima.</p>
<hr>
<p>Ingrese los datos de la ciudad:</p>
<input type="text" id="nameCity" placeholder="City name">
<input type="text" id="isoCodeCountry" placeholder="ISO code country">
<button onclick="getWeatherInCountry()">GET</button> 
<p id="response">?</p>
<script src="js/javascript.js"></script>