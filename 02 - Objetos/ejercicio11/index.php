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
  <h1>Ejercicio 1: PHP Object-Oriented Programming (OOP)</h1>
  <p>Crea una clase en PHP llamada "Empleado" con los siguientes atributos: nombre, salario y puesto. Implementa un método llamado obtenerSalarioAnual() que devuelva el salario anual del empleado (asumiendo que el salario mensual se proporciona).</p>
  <hr>
  <?php
    include("employed.php");

    $args = ["Felipe", 2000000, "Ingeniero"];
    $empleado = new Empleado("Felipe", 2000000, "Ingeniero");

    echo "<h3>".$empleado->stringToString()."</h3>";

  ?>
</body>
</html>