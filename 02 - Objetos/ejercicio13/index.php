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
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <h1>Ejercicio 3: PHP + MySQL Advanced</h1>
  <p>Supongamos que tienes dos tablas en una base de datos MySQL: "productos" y "ventas". La tabla "productos" tiene los campos id, nombre y precio. La tabla "ventas" tiene los campos id, producto_id, cantidad y fecha.
Escribe una consulta en PHP que devuelva el nombre del producto más vendido y la cantidad total de ventas para ese producto.</p>
  <p>Nota: ejecutar el script.sql</p>
  <hr>
  <?php
    include("sales.controller.php");
    $salesData = getMostProductSale();
    echo "<h2>".$salesData."</h2>";
  ?>
</body>
</html>